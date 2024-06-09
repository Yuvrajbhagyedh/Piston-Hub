<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #111;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input, textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }
        input[type="submit"] {
            background-color: #444;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #555;
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
    </style>
</head>
<body>
         <nav>
        <div class="logo">
            <img src="all images/piston hub white.png" alt="Accessories Emporium Logo">
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="slider.html">Shop</a></li>
            <li><a href="about.html">cart</a></li>
            <li><a href="cart1.php">Contact Us</a></li>
            
            <li><a href="login .html">Login/Signup</a></li>
            <li><a href="#"><img src="" alt=""></a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Contact Us</h1>
        <form action="submit_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <input type="submit" value="Send Message">
        </form>
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
          
            
            
            <li><a href="#">Contact Us</a></li>
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
</body>
</html>

