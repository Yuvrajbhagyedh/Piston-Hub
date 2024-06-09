<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop Page</title>
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Italianno&display=swap"
      rel="stylesheet"
    />
        <link rel="icon" href="all images/piston hub white.png">

    <style>
      body {
        background-color: #000;
      }
      .image-slider {
        margin-top: 40px;
       
        max-width: 1400px;
        height: 340px;
        position: relative;
        margin-left: 170px ;
        margin-right: 170px; /* Ensures horizontal centering */
        overflow: hidden; /* Optional: To contain overflowing margins/paddings of parent element */
        margin-bottom: 70px;
      }

      .slide {
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }

      .slide:first-child {
        opacity: 1;
      }

      .dots {
        position: absolute;
        bottom: 20px;
        display: flex;
        justify-content: center;
        z-index: 2;
        margin-left: 700px;
      }

      .dot {
        width: 10px;
        height: 10px;
        margin: 0 5px;
        background-color: #ccc;
        border-radius: 50%;
        cursor: pointer;
        transition: background-color 0.5s ease-in-out;
      }

      .dot.active {
        background-color: #000;
      }
      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #000000;
        color: #ffffff;
      }

      .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        align-items: center;
      }

      .product {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        align-items: center;
      }

      .product:hover {
        cursor: pointer;
      }

      .product-image {
        mix-blend-mode: multiply;
        justify-content: center;
        align-items: center;
        max-width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
      }

      .product-details {
        align-items: center;
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      .product-title {
        font-size: 24px;
        margin: 0 0 10px;
        color: #333;
      }

      .product-description {
        text-align: justify;
        align-items: center;
        margin-bottom: 20px;
        line-height: 1.6;
      }

      .product-price {
        font-size: 20px;
        margin-bottom: 20px;
        color: #000000;
      }

      .quantity-bar {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
      }

      .quantity-control {
        background-color: #000000;
        color: #fff;
        border: none;
        cursor: pointer;
        padding: 8px 12px;
        font-size: 18px;
        border-radius: 5px;
        margin: 0 5px;
        transition: background-color 0.3s ease;
      }

      .quantity-control:hover {
        background-color: #000000;
      }

      .quantity-input {
        width: 60px;
        text-align: center;
        font-size: 18px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
        margin: 0 5px;
      }

      .add-to-cart {
        background-color: #ffffff;
        color: #000000;
        border: 0.1px solid black;

        cursor: pointer;
        padding: 12px 20px;
        font-size: 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }

      .add-to-cart:hover {
        background-color: #1c1919;
        color: rgb(255, 255, 255);
        border: 0.1px solid black;
      }

      .custom-alert {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        display: none;
        z-index: 9999;
      }

      .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: transparent;
        border: none;
        cursor: pointer;
        font-size: 20px;
        color: #000000;
      }

      #alertImage {
        height: 30px;
        width: 30px;

        display: block;
        margin: 0 auto;
        border-radius: 40px;
      }

      .custom-alert p {
        text-align: center;
        margin-top: 10px;
        font-size: 18px;
        color: #333;
      }

      .search-bar {
        margin-top: 40px;
margin-right: 10px;
        width: 50%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        box-sizing: border-box;
      }

      .category-dropdown {
        margin-top: 40px;
        padding: 10px 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        box-sizing: border-box;
        align-items: center;
      }
      ::-webkit-scrollbar {
        width: 0px;
      }
      .triumph {
        display: flex;
        justify-content: center;
        background-color: #000000;
        margin: 30px;
        margin-bottom: 0px;
      }
      .search {
        display: flex;
        align-items: center;
        justify-content: center;
      }
        nav {
        background-color: rgb(0, 0, 0);
        font-family: "Brygada 1918", serif;
        font-style: italic;
        padding: 30px;
        display: flex;
        align-items: center;
      }

      .logo img {
        height: 40px;
        width: 60px; /* Adjust as needed */
      }

      nav ul {
        list-style-type: none;
        text-align: center;
        margin-left: auto;
      }

      nav ul li {
        display: inline;
        margin-right: 20px;
      }

      nav ul li a {
        color: white;
        text-decoration: none;
      }
       .copyrights{
      
      text-align: center;
      
   background-color: #ffffff;
    font-family:  "Brygada 1918", serif;;
    font-style: italic;
    
    }
     .column {
    flex-basis: calc(25% - 20px); /* Adjust width here */
    padding: 20px;
    box-sizing: border-box;
  }
  .containerfooter {
    font-family: "Brygada 1918", serif;
    background-color: #ffffff;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
    padding-bottom: 60px;
  }
  

  footer h4 {
    color: #000000;
    
    margin-bottom: 20px;
  }

  footer p {
    font-size: 14px;
    color: #000000;
  }

  footer ul {
    font-size: 14px;
    padding: 0;
    list-style: none;
  }

  footer ul li a {
    color: #000000;
    text-decoration: none;
  }

  footer ul li a:hover {
    color:rgb(106, 79, 28);
  }

 

  footer p.text-center {
    color: #ffffff;
  }
  .footerimage{
    margin-top: 8px;
    width: 65px;
  }
  hr{
    background-color: #ffffff;
  }
  .footercomplete{
    margin-top: 50px;
    background-color: #ffffff;
  }
  .shoping{
   margin-bottom: 40px;
   
    font-size: 60px;
    font-family: "Italianno", cursive;
    text-align: center;
    margin-bottom: 0px;
  }
    </style>
  </head>
  <body>
    
    <nav>
      <div class="logo">
        <img
          src="all images/piston hub white.png"
          alt="Accessories Emporium Logo"
        />
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="slider.html">Shop</a></li>
        <li><a href="about.html">About Us</a></li>
       
         <li><a href="cart.php">Cart</a></li>
        <li><a href="cart1.php">Contact</a></li>
      </ul>
    </nav>
    <h1 class="shoping">Shop All</h1>
    <div class="image-slider">
      <img src="slider images/Piston hub (2).png" alt="Image 1" class="slide" />
      <img src="slider images/Piston hub (3).png" alt="Image 2" class="slide" />
      <img src="slider images/Piston hub (4).png" alt="Image 3" class="slide" />

      <div class="dots">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>
    <div class="search">
      <input
        type="text"
        id="searchInput"
        class="search-bar"
        placeholder="Search products..."
        oninput="filterProducts()"
      />

      <!-- Category Dropdown -->
      <select
        id="categoryDropdown"
        class="category-dropdown"
        onchange="filterProducts()"
      >
        <option value="">All Categories</option>
        <option value="Helmets">Helmets</option>
        <option value="Gloves">Gloves</option>
        <option value="Boots">Boots</option>
      </select>
    </div>
    <div class="container">
    
      <div class="product" data-name="Apex Venom Gloves" data-category="Gloves">
       <a href="apex venom gloves.html"> <img
        href="apex venom gloves.html"
          class="product-image"
          src="axor gloves and boots/Untitled design - 2024-05-07T124153.645.png"
          alt="Product 1"
        /></a>
        <div class="product-details">
          <h2 class="product-title">Apex Venom Gloves</h2>
          <p class="product-price">$19.99</p>
          <div class="quantity-bar">
            <button class="quantity-control" onclick="changeQuantity(this, -1)">
              -
            </button>
            <input class="quantity-input" type="text" value="1" />
            <button class="quantity-control" onclick="changeQuantity(this, 1)">
              +
            </button>
          </div>
          <button class="add-to-cart" onclick="showAlert('image1.jpg')">
            Add to Cart
          </button>
        </div>
      </div>
      <div class="product" data-name="Apex Marvel gloves" data-category="Gloves">
       <a href="Apex Marvel gloves.html"> <img
          class="product-image"
          src="axor gloves and boots/Untitled design - 2024-05-07T124348.301.png"
          alt="Product 1"
        /></a>
        <div class="product-details">
          <h2 class="product-title">Apex Marvel Gloves</h2>
          <p class="product-price">$19.99</p>
          <div class="quantity-bar">
            <button class="quantity-control" onclick="changeQuantity(this, -1)">
              -
            </button>
            <input class="quantity-input" type="text" value="1" />
            <button class="quantity-control" onclick="changeQuantity(this, 1)">
              +
            </button>
          </div>
          <button class="add-to-cart" onclick="showAlert('image1.jpg')">
            Add to Cart
          </button>
        </div>
      </div>
      <div class="product" data-name="Axor Gloves" data-category="Gloves">
        <a href="axor gloves.html"><img
          class="product-image"
          src="axor gloves and boots/Untitled design - 2024-05-07T124335.968.png"
          alt="Product 1"
        /></a>
        <div class="product-details">
          <h2 class="product-title">Axor Gloves</h2>
          <p class="product-price">$19.99</p>
          <div class="quantity-bar">
            <button class="quantity-control" onclick="changeQuantity(this, -1)">
              -
            </button>
            <input class="quantity-input" type="text" value="1" />
            <button class="quantity-control" onclick="changeQuantity(this, 1)">
              +
            </button>
          </div>
          <button class="add-to-cart" onclick="showAlert('image1.jpg')">
            Add to Cart
          </button>
        </div>
      </div>
      <div class="product" data-name="Apex Boots" data-category="Boots">
       <a href="apex boots.html" target="_blank"> <img
          class="product-image"
          src="axor gloves and boots/Untitled design - 2024-05-07T124400.733.png"
          alt="Product 1"
        /></a>
        <div class="product-details">
          <h2 class="product-title">Apex Boots</h2>
          <p class="product-price">$19.99</p>
          <div class="quantity-bar">
            <button class="quantity-control" onclick="changeQuantity(this, -1)">
              -
            </button>
            <input class="quantity-input" type="text" value="1" />
            <button class="quantity-control" onclick="changeQuantity(this, 1)">
              +
            </button>
          </div>
          <button class="add-to-cart" onclick="showAlert('image1.jpg')">
            Add to Cart
          </button>
        </div>
      </div>
      <div class="product" data-name="Apex Marvel Boots" data-category="Boots">
        <a href="apex marvel boots.html" target="_blank"><img
          class="product-image"
          src="axor gloves and boots/Untitled design - 2024-05-07T124411.595.png"
          alt="Product 1"
        /></a>
        <div class="product-details">
          <h2 class="product-title">Apex Marvel Boots</h2>
          <p class="product-price">$19.99</p>
          <div class="quantity-bar">
            <button class="quantity-control" onclick="changeQuantity(this, -1)">
              -
            </button>
            <input class="quantity-input" type="text" value="1" />
            <button class="quantity-control" onclick="changeQuantity(this, 1)">
              +
            </button>
          </div>
          <button class="add-to-cart" onclick="showAlert('image1.jpg')">
            Add to Cart
          </button>
        </div>
      </div>
      <div class="product" data-name="Apex Marvel Venom Helmet" data-category="Helmets">
       <a href="apex marvel venom helmet.html" target="_blank"> <img
          class="product-image"
          src="all images/axor venom.png"
          alt="Product 1"
        /></a>  
        <div class="product-details">
          <h2 class="product-title">Apex Marvel Venom Helmet</h2>
          <p class="product-price">$19.99</p>
          <div class="quantity-bar">
            <button class="quantity-control" onclick="changeQuantity(this, -1)">
              -
            </button>
            <input class="quantity-input" type="text" value="1" />
            <button class="quantity-control" onclick="changeQuantity(this, 1)">
              +
            </button>
          </div>
          <button class="add-to-cart" onclick="showAlert('image1.jpg')">
            Add to Cart
          </button>
        </div>
      </div>
      <div class="product" data-name="Apex Hunter Boots" data-category="Boots">
       <a href="apex hunter boots.html" target="_blank"> <img
          class="product-image"
          src="axor gloves and boots/Untitled design - 2024-05-07T124425.284.png"
          alt="Product 1"
        /></a>
        <div class="product-details">
          <h2 class="product-title">Apex Hunter Boots</h2>
          <p class="product-price">$19.99</p>
          <div class="quantity-bar">
            <button class="quantity-control" onclick="changeQuantity(this, -1)">
              -
            </button>
            <input class="quantity-input" type="text" value="1" />
            <button class="quantity-control" onclick="changeQuantity(this, 1)">
              +
            </button>
          </div>
          <button class="add-to-cart" onclick="showAlert('image1.jpg')">
            Add to Cart
          </button>
        </div>
      </div>
      <!-- Repeat for other products -->
      <!-- Product 2 -->
      <div class="product" data-name="Apex solid Boots" data-category="Boots">
       <a href="apex solid boots.html"> <img
          class="product-image"
          src="axor gloves and boots/Untitled design - 2024-05-07T124517.576.png"
          alt="Product 2"
        /></a>
        <div class="product-details">
          <h2 class="product-title">Apex solid Boots</h2>
          <p class="product-price">$29.99</p>
          <div class="quantity-bar">
            <button class="quantity-control" onclick="changeQuantity(this, -1)">
              -
            </button>
            <input class="quantity-input" type="text" value="1" />
            <button class="quantity-control" onclick="changeQuantity(this, 1)">
              +
            </button>
          </div>
          <button class="add-to-cart" onclick="showAlert('image2.jpg')">
            Add to Cart
          </button>
        </div>
      </div>

      <!-- Repeat for other products -->
      <!-- Product 3 -->
      <div class="product" data-name="Apex Dynamo Helmet" data-category="Helmets">
       <a href="apex dynamo helmet.html" target="_blank"> <img
          class="product-image"
          src="all images/axor helmet3.png"
          alt="Product 3"
        /></a>
        <div class="product-details">
          <h2 class="product-title">Apex Dynamo Helmet</h2>

          <p class="product-price">$39.99</p>
          <div class="quantity-bar">
            <button class="quantity-control" onclick="changeQuantity(this, -1)">
              -
            </button>
            <input class="quantity-input" type="text" value="1" />
            <button class="quantity-control" onclick="changeQuantity(this, 1)">
              +
            </button>
          </div>
          <button class="add-to-cart" onclick="showAlert('image3.jpg')">
            Add to Cart
          </button>
        </div>
      </div>

      <!-- Repeat for other products -->
      <!-- Product 4 -->
      <div class="product" data-name="Retro Jet West Helmet" data-category="Helmets">
        <a href="retro jet west helmet.html"><img
          class="product-image"
          src="all images/axor helmet4.png"
          alt="Product 4"
        /></a>
        <div class="product-details">
          <h2 class="product-title">Retro Jet West Helmet</h2>
          <p class="product-price">$49.99</p>
          <div class="quantity-bar">
            <button class="quantity-control" onclick="changeQuantity(this, -1)">
              -
            </button>
            <input class="quantity-input" type="text" value="1" />
            <button class="quantity-control" onclick="changeQuantity(this, 1)">
              +
            </button>
          </div>
          <button
            class="add-to-cart"
            onclick="showAlert('all images/tick mark.jpg')"
          >
            Add to Cart
          </button>
        </div>
      </div>

      <!-- Repeat for other products -->
      <!-- Product 5 -->
      <div class="product" data-name="Vega Max" data-category="Helmets">
       <a href="vega max.html" target="_blank"> <img
          class="product-image"
          src="all images/axor helmet5.png"
          alt="Product 5"
        /></a>
        <div class="product-details">
          <h2 class="product-title">Vega Max</h2>
          <p class="product-price">$59.99</p>
          <div class="quantity-bar">
            <button class="quantity-control" onclick="changeQuantity(this, -1)">
              -
            </button>
            <input class="quantity-input" type="text" value="1" />
            <button class="quantity-control" onclick="changeQuantity(this, 1)">
              +
            </button>
          </div>
          <button class="add-to-cart" onclick="showAlert('image5.jpg')">
            Add to Cart
          </button>
        </div>
      </div>

      <!-- Repeat for other products -->
      <!-- Product 6 -->
      <div class="product" data-name="Apex Solid Helmet" data-category="Helmets">
       <a href="apex solid helmet.html" target="_blank"> <img
          class="product-image"
          src="all images/axor pr6.png"
          alt="Product 6"
        /></a>
        <div class="product-details">
          <h2 class="product-title">Apex Solid Helmet</h2>
          <p class="product-price">$69.99</p>
          <div class="quantity-bar">
            <button class="quantity-control" onclick="changeQuantity(this, -1)">
              -
            </button>
            <input class="quantity-input" type="text" value="1" />
            <button class="quantity-control" onclick="changeQuantity(this, 1)">
              +
            </button>
          </div>
          <button
            class="add-to-cart"
            onclick="showAlert('all images/axor sub.png')"
          >
            Add to Cart
          </button>
        </div>
      </div>
    </div>

    <!-- Custom Alert -->
    <div id="customAlert" class="custom-alert">
      <button class="close-button" onclick="hideAlert()">X</button>
      <img id="alertImage" src="all images/tick mark.jpg" alt="" />
      <p></p>
    </div>
            <footer>
          <div class="footercomplete">
      <div class="containerfooter">
        <div class="column">
          <img src="all images/Piston hub.png" alt="" class="footerimage"><br>
          <p><i>Piston Hub: Ignite Your Ride! Discover premium bike accessories and expert repair services at our Bike Gear Revive Hub.</i></p>
        </div>
        <div class="column">
          <i><h4>Quick Links</h4></i>
          <ul><i>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
          
            
            
            <li><a href="cart1.php">Contact Us</a></li>
          </ul></i>
        </div>
        <div class="column">
          <i><h4>Contact Information</h4></i>
          <i><p>Email:Pistonhub@gmail.com<br>Phone: +91 8088713396<br>Address: 4th main Nagasandhra, Bengaluru, Karnataka</p></i>
        </div>
        <div class="column">
         <i> <h4>Follow Us</h4></i>
          <ul><i>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">LinkedIn</a></li>
          </ul></i>
        </div></div>
        <hr>
         <p class="copyrights"> All rights are reserved @Pistonhub.com </p>
      </div>
     
    </footer>
    <script>
      function showAlert(imageUrl) {
        var alertBox = document.getElementById("customAlert");
        var alertImage = document.getElementById("alertImage");
        alertImage.src = imageUrl;

        // Update message to indicate 5 duplicates added
        var message = alertBox.querySelector("p"); // Use querySelector to avoid duplicate elements
        message.textContent = "You have successfully added to cart";

        alertBox.style.display = "block";
      }

      function hideAlert() {
        var alertBox = document.getElementById("customAlert");
        alertBox.style.display = "none";
      }

      function changeQuantity(button, change) {
        var input = button.parentElement.querySelector(".quantity-input");
        var value = parseInt(input.value);
        if (!isNaN(value)) {
          var newValue = value + change;
          if (newValue < 1) {
            newValue = 1;
          }
          input.value = newValue;
        } else {
          input.value = 1;
        }
      }

      function filterProducts() {
        var searchTerm = document
          .getElementById("searchInput")
          .value.toLowerCase();
        var category = document
          .getElementById("categoryDropdown")
          .value.toLowerCase();
        var products = document.querySelectorAll(".product");

        products.forEach(function (product) {
          var productName = product.dataset.name.toLowerCase();
          var productCategory = product.dataset.category.toLowerCase();

          if (
            (productName.includes(searchTerm) || searchTerm === "") &&
            (productCategory === category || category === "")
          ) {
            product.style.display = "block";
          } else {
            product.style.display = "none";
          }
        });
      }

      const slider = document.querySelector(".image-slider");
      const slides = document.querySelectorAll(".slide");
      const dots = document.querySelectorAll(".dot");

      let currentSlide = 0;

      // Function to show the current slide
      function showSlide(n) {
        slides.forEach((slide) => (slide.style.opacity = 0));
        dots.forEach((dot) => dot.classList.remove("active"));
        slides[n].style.opacity = 1;
        dots[n].classList.add("active");
        currentSlide = n;
      }

      // Function to advance to the next slide
      function nextSlide() {
        showSlide(currentSlide === slides.length - 1 ? 0 : currentSlide + 1);
      }

      // Function to go to a specific slide based on dot click
      function currentSlideDot(n) {
        showSlide(n);
      }

      // Add click event listeners to dots
      dots.forEach((dot, i) => {
        dot.addEventListener("click", () => currentSlideDot(i));
      });

      // Enable autoplay with an interval of 5 seconds (adjust as needed)
      setInterval(nextSlide, 5000);

      showSlide(currentSlide);
    </script>
  </body>
</html>
