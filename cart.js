/* ===========================================================
   Piston Hub — shared cart engine (localStorage based)
   Works on listing pages (.add-to-cart) and product detail
   pages (.btn-cart "Add to Cart" / .btn-buy "Buy Now").
   =========================================================== */
(function () {
  "use strict";

  var CART_KEY = "pistonhub_cart";

  /* ---------- storage helpers ---------- */
  function getCart() {
    try { return JSON.parse(localStorage.getItem(CART_KEY)) || []; }
    catch (e) { return []; }
  }
  function saveCart(cart) {
    localStorage.setItem(CART_KEY, JSON.stringify(cart));
    updateCartBadge();
  }
  function cartCount() {
    return getCart().reduce(function (n, i) { return n + i.qty; }, 0);
  }
  function cartTotal() {
    return getCart().reduce(function (s, i) { return s + i.price * i.qty; }, 0);
  }

  /* ---------- mutations ---------- */
  function addToCart(item) {
    var cart = getCart();
    var found = cart.find(function (i) { return i.name === item.name; });
    if (found) { found.qty += item.qty; }
    else { cart.push(item); }
    saveCart(cart);
    showToast("✓ " + item.name + " added to cart");
  }
  function setQty(name, qty) {
    var cart = getCart();
    var it = cart.find(function (i) { return i.name === name; });
    if (!it) return;
    it.qty = Math.max(1, qty);
    saveCart(cart);
    renderCartPage();
  }
  function removeItem(name) {
    saveCart(getCart().filter(function (i) { return i.name !== name; }));
    renderCartPage();
  }
  function clearCart() { saveCart([]); }

  /* ---------- read a product from a button's card ---------- */
  function readProduct(btn) {
    var card = btn.closest(".product") || btn.closest(".container") || document.body;
    var titleEl = card.querySelector(".product-title");
    var priceEl = card.querySelector(".product-price");
    var imgEl = card.querySelector(".product-image") || card.querySelector("img");
    var qtyEl = card.querySelector(".quantity-input");

    var name = titleEl ? titleEl.textContent.trim() : (document.title || "Item");
    var priceText = priceEl ? priceEl.textContent : "0";
    var currency = (priceText.match(/[₹$€£]/) || ["$"])[0];
    var price = parseFloat(priceText.replace(/[^0-9.]/g, "")) || 0;
    var image = imgEl ? imgEl.getAttribute("src") : "";
    var qty = qtyEl ? Math.max(1, parseInt(qtyEl.value, 10) || 1) : 1;

    return { name: name, price: price, currency: currency, image: image, qty: qty };
  }

  /* ---------- wire up add-to-cart buttons ---------- */
  function wireButtons() {
    var selectors = [".add-to-cart", ".btn-cart", ".btn-buy"];
    document.querySelectorAll(selectors.join(",")).forEach(function (btn) {
      var buyNow = btn.classList.contains("btn-buy");
      btn.onclick = function (e) {           // overrides inline showAlert(...)
        if (e) e.preventDefault();
        addToCart(readProduct(btn));
        if (buyNow) { window.location.href = "cart.html"; }
      };
    });
  }

  /* ---------- header widgets (cart link + badge) ---------- */
  function widgetHost() {
    var ul = document.querySelector("nav ul");
    if (ul) return { host: ul, asList: true };
    var bar = document.getElementById("ph-widgets");
    if (!bar) {
      bar = document.createElement("div");
      bar.id = "ph-widgets";
      bar.style.cssText =
        "position:fixed;top:14px;right:18px;z-index:99999;display:flex;gap:14px;" +
        "font-family:Arial,sans-serif;font-style:normal;";
      document.body.appendChild(bar);
    }
    return { host: bar, asList: false };
  }
  window.phWidgetHost = widgetHost; // shared with auth.js

  function ensureCartLink() {
    if (document.getElementById("nav-cart-link")) return;
    var w = widgetHost();
    var a = document.createElement("a");
    a.id = "nav-cart-link";
    a.href = "cart.html";
    a.innerHTML = "🛒 Cart (<span id=\"cart-count\">0</span>)";
    if (w.asList) {
      var li = document.createElement("li");
      li.appendChild(a);
      w.host.appendChild(li);
    } else {
      a.style.cssText =
        "background:#ff9900;color:#000;padding:8px 14px;border-radius:6px;" +
        "text-decoration:none;font-weight:bold;box-shadow:0 2px 8px rgba(0,0,0,.4);";
      w.host.appendChild(a);
    }
  }
  function updateCartBadge() {
    var el = document.getElementById("cart-count");
    if (el) el.textContent = cartCount();
  }

  /* ---------- toast ---------- */
  function showToast(msg) {
    var t = document.getElementById("ph-toast");
    if (!t) {
      t = document.createElement("div");
      t.id = "ph-toast";
      t.style.cssText =
        "position:fixed;bottom:22px;right:22px;background:#ff9900;color:#000;" +
        "padding:14px 20px;border-radius:6px;font-family:Arial,sans-serif;" +
        "font-weight:bold;z-index:100000;box-shadow:0 4px 16px rgba(0,0,0,.45);" +
        "opacity:0;transition:opacity .3s;";
      document.body.appendChild(t);
    }
    t.textContent = msg;
    t.style.opacity = "1";
    clearTimeout(window.__phToast);
    window.__phToast = setTimeout(function () { t.style.opacity = "0"; }, 1800);
  }

  /* ---------- cart page rendering ---------- */
  function renderCartPage() {
    var wrap = document.getElementById("cart-items");
    if (!wrap) return; // not on cart page
    var cart = getCart();
    var empty = document.getElementById("cart-empty");
    var summary = document.getElementById("cart-summary");

    if (!cart.length) {
      wrap.innerHTML = "";
      if (empty) empty.style.display = "block";
      if (summary) summary.style.display = "none";
      return;
    }
    if (empty) empty.style.display = "none";
    if (summary) summary.style.display = "block";

    var cur = cart[0].currency || "$";
    wrap.innerHTML = cart.map(function (i) {
      var line = (i.price * i.qty).toFixed(2);
      return (
        '<div class="cart-row">' +
          '<img src="' + i.image + '" alt="" class="cart-thumb">' +
          '<div class="cart-info">' +
            '<h3>' + i.name + "</h3>" +
            "<p>" + (i.currency || "$") + i.price.toFixed(2) + " each</p>" +
          "</div>" +
          '<div class="cart-qty">' +
            '<button data-act="dec" data-name="' + encodeURIComponent(i.name) + '">-</button>' +
            "<span>" + i.qty + "</span>" +
            '<button data-act="inc" data-name="' + encodeURIComponent(i.name) + '">+</button>' +
          "</div>" +
          '<div class="cart-line">' + (i.currency || "$") + line + "</div>" +
          '<button class="cart-remove" data-act="rm" data-name="' + encodeURIComponent(i.name) + '">Remove</button>' +
        "</div>"
      );
    }).join("");

    var totalEl = document.getElementById("cart-total");
    if (totalEl) totalEl.textContent = cur + cartTotal().toFixed(2);

    wrap.querySelectorAll("button[data-act]").forEach(function (b) {
      b.addEventListener("click", function () {
        var name = decodeURIComponent(b.getAttribute("data-name"));
        var act = b.getAttribute("data-act");
        var item = getCart().find(function (x) { return x.name === name; });
        if (act === "rm") removeItem(name);
        else if (item) setQty(name, item.qty + (act === "inc" ? 1 : -1));
      });
    });
  }

  function checkout() {
    if (!getCart().length) { alert("Your cart is empty."); return; }
    if (window.phCurrentUser && !window.phCurrentUser()) {
      alert("Please sign in to place your order.");
      window.location.href = "login.html";
      return;
    }
    var total = (getCart()[0].currency || "$") + cartTotal().toFixed(2);
    clearCart();
    renderCartPage();
    alert("Order placed successfully! Total paid: " + total + "\nThank you for shopping with Piston Hub.");
    window.location.href = "index.html";
  }

  /* ---------- expose + init ---------- */
  window.phCart = {
    add: addToCart, get: getCart, count: cartCount, total: cartTotal,
    setQty: setQty, remove: removeItem, clear: clearCart, checkout: checkout
  };

  document.addEventListener("DOMContentLoaded", function () {
    wireButtons();
    ensureCartLink();
    updateCartBadge();
    renderCartPage();
  });
})();
