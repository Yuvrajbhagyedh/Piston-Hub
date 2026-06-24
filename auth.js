
(function () {
  "use strict";

  var USERS_KEY = "pistonhub_users";
  var SESSION_KEY = "pistonhub_session";

  function getUsers() {
    try { return JSON.parse(localStorage.getItem(USERS_KEY)) || []; }
    catch (e) { return []; }
  }
  function saveUsers(u) { localStorage.setItem(USERS_KEY, JSON.stringify(u)); }

  function currentUser() {
    try { return JSON.parse(localStorage.getItem(SESSION_KEY)); }
    catch (e) { return null; }
  }
  window.phCurrentUser = currentUser; // shared with cart.js checkout

  function signup(name, email, password) {
    name = (name || "").trim();
    email = (email || "").trim().toLowerCase();
    if (!name || !email || !password) throw new Error("Please fill in all fields.");
    var users = getUsers();
    if (users.some(function (u) { return u.email === email; }))
      throw new Error("An account with this email already exists.");
    users.push({ name: name, email: email, password: password });
    saveUsers(users);
    localStorage.setItem(SESSION_KEY, JSON.stringify({ name: name, email: email }));
  }

  function login(email, password) {
    email = (email || "").trim().toLowerCase();
    var user = getUsers().find(function (u) {
      return u.email === email && u.password === password;
    });
    if (!user) throw new Error("Invalid email or password.");
    localStorage.setItem(SESSION_KEY, JSON.stringify({ name: user.name, email: user.email }));
  }

  function logout() {
    localStorage.removeItem(SESSION_KEY);
    window.location.href = "index.html";
  }

  /* ---------- header auth widget ---------- */
  function ensureAuthLink() {
    if (document.getElementById("nav-auth")) return;
    var host;
    if (window.phWidgetHost) {
      var w = window.phWidgetHost();
      host = w;
    } else {
      var ul = document.querySelector("nav ul");
      host = ul ? { host: ul, asList: true }
                : { host: document.body, asList: false };
    }

    var user = currentUser();
    var el;
    if (user) {
      el = document.createElement(host.asList ? "li" : "span");
      el.id = "nav-auth";
      el.innerHTML =
        '<span style="margin-right:10px;">Hi, ' + user.name + '</span>' +
        '<a href="#" id="nav-logout">Logout</a>';
    } else {
      el = document.createElement(host.asList ? "li" : "span");
      el.id = "nav-auth";
      el.innerHTML = '<a href="login.html">Sign In</a>';
    }

    if (!host.asList) {
      el.style.cssText =
        "background:#222;color:#fff;padding:8px 14px;border-radius:6px;" +
        "font-family:Arial,sans-serif;box-shadow:0 2px 8px rgba(0,0,0,.4);";
      el.querySelectorAll("a").forEach(function (a) {
        a.style.color = "#ff9900"; a.style.textDecoration = "none";
      });
    }
    host.host.appendChild(el);

    var lo = document.getElementById("nav-logout");
    if (lo) lo.addEventListener("click", function (e) { e.preventDefault(); logout(); });
  }

  window.phAuth = {
    signup: signup, login: login, logout: logout,
    current: currentUser, users: getUsers
  };

  document.addEventListener("DOMContentLoaded", ensureAuthLink);
})();
