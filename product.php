<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bike Gear | [Product Name]</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="sample.php" />
    <style>
      body {
        font-family: sans-serif;
      }

      .product-container {
        display: flex;
        flex-wrap: wrap;
        margin: 20px auto;
        max-width: 800px;
      }

      .product-container img {
        width: 40%;
      }

      .product-info {
        width: 60%;
        padding: 20px;
      }

      .price {
        font-weight: bold;
      }

      form {
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <header></header>
    <main>
      <div class="product-container">
        <img src="[image path]" alt="[Product image alt text]" />
        <div class="product-info">
          <h2>[Product Name]</h2>
          <p class="price">₹ [Price]</p>
          <p>[Product Description]</p>
          <form action="add-to-cart.php" method="post">
            <label for="quantity">Quantity:</label>
            <input
              type="number"
              id="quantity"
              name="quantity"
              min="1"
              value="1"
            />
            <button type="submit">Add to Cart</button>
          </form>
        </div>
      </div>
    </main>
    <footer></footer>
    <script src="script.js"></script>
  </body>
</html>
