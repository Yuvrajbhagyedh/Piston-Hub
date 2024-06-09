<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piston hub</title>
    <link rel="icon" href="all images/piston hub white.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <style>
        /* Resetting default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
  font-weight: 300;
  
  background-color: black;
  color: white;
}
h1{
  
  font-weight: 600;
}
::selection{
  background-color: orange;
  color: #000000;
}

/* Styling for navigation bar */
nav {
    background-color: rgb(0, 0, 0);
    font-family:  "Brygada 1918", serif;;
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

/* Styling for hero section */
.hero {
  font-family:"Italianno", cursive;;
    margin-top: 0px;
    height: 100vh;
    text-align: center;
    padding: 100px 0;
    background-image:url("MY-24-KTM-SUPERSPORT-RC-125.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    opacity:.7 ;
    
   
    
  
}

.hero h1 {
  
  color:black;
  font-weight: 600;
    margin-top: 20px;
    font-size: 10em;
    margin-bottom: 10px;
}

.hero p {
 
  color: rgb(255, 255, 255);
    font-size: 2em;
    font-weight: 600;
    margin-bottom: 20px;
}

.hero .btn {
  font-family: "Brygada 1918", serif;;
  font-style: italic;
    padding: 10px 20px;
    background-color: #ffffff;
    color: #000000;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    margin-bottom: 0px;
}
.btn:hover{
  background-color: #000000;
  color: white;
}
/* Styling for products section */
.products {
    padding: 50px 0;
    text-align: center;
}

.products h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

/* Grid layout for products */
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

/* Styling for footer */

.upgrade-your-ride {
  
  height: 200vh;
  display: flex;
  flex-direction: column;
  align-items: center;
 margin: 0;
  text-align: center;
}

.upgrade-your-ride h2 {
  margin-top: 60px;
  font-size: 85px;
  margin-bottom: 10px;
}

.upgrade-your-ride p {
 font-family:  "Brygada 1918", serif;
  font-style: italic;
  font-size: 1.08em;
  margin-right: 70px;
}

.upgrade-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 10%;
  margin: 0 auto;
}

.stock-bike,
.upgraded-bike {
  position: relative;
  width: 65%;
  height: auto;
  overflow: hidden;
  
}

.stock-bike img,
.upgraded-bike img {
  width: 100%;
  height: auto;
}

.upgrade-area,
.upgrade-info {
  display: none;
  position: absolute;
  padding: 10px;
  background-color: rgba(0, 0, 0, 0.7);
  color: #fff;
  cursor: pointer;
}

.upgrade-area:hover + .upgrade-info,
.upgrade-info:hover {
  display: block;
}




.thirdimagecontainer {
  margin-top: 90px;
  display: flex;
  align-items: center;
  
}
.thirdimagecontainer img{
  width: 55%;
  
}
/* //hosa code// */
.image-container {
  display: inline-flex;  /* Makes images inline and side-by-side */
  justify-content: center;
  
}

.image {
  margin-right: 40px;
  width:25%; 
   height: 25%;
   
  
  
}

.image:hover {
  opacity: 0.7;  /* Reduces opacity slightly on hover */
  cursor: pointer;  /* Changes cursor to pointer on hover */
}

.image:hover[data-hover-image] {
  content: url("MY-24-KTM-SUPERSPORT-RC-125.jpg"); 
  width: 25%;
  height: 25%; /* Replaces image with hover image on hover */
}
.imagehover-effect1:hover[data-hover-image] {
  content: url("MY-24-KTM-SUPERSPORT-RC-390.jpg"); 
  width: 25%;
  height: 25%; /* Replaces image with hover image on hover */
}

.first{
  border-radius: 15px;
  margin: 0px;
  width: 55%;
  height: auto;
  left: 10px;
  
  
}

.text{
  font-weight: 500;
  font-size: 24px;
  margin: 10px;
  flex: 1;
  left: 90px;
  text-align: justify;
}
.text1{
   font-weight: 500;
  margin-left: 150px;
  
  font-style: italic;
  flex: 1;
  
  text-align: justify;
}::-webkit-scrollbar{
  width: 0px;
}
.explore button{
  align-items: center;
  font-size: 17px;
  width: 90px;
           height: 40px;
           
}
body{
      font-family:"Italianno", cursive;
      background-color: black;
      color: white;
    }
    h1{
      font-size: 54px;
      font-weight: 300;
    }
    .grid-container {
     
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .grid-item {
      border: 2px solid rgb(255, 255, 255);
      position: relative;
    }

    .grid-item img {
      width: 100%;
      height: auto;
      display: block;
    }

    .hover-image {
      opacity: 0;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: auto;
      transition: opacity 0.5s ease;
    }

    .grid-item:hover .hover-image {
      opacity: 1;
    }
    .second-container{
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin-top: 30px;

    }
    .brands{
      margin-top: 40px;
      margin-bottom: 50px;
      margin-left: 100px;
      margin-right: 100px;
    }
.explore-button a{
  text-decoration: none;
  list-style: none;
  font-size: 24px;
  padding: 24px 20px;
  
}
.explore-button{
  display: flex;
  justify-content: center;
  height: 40px;
  margin-bottom: 30px;

}
.pp{
  margin-top: 90px;
  font-size: 95px;
  font-weight: 900;
 
}
.container {
    font-family: "Brygada 1918", serif;
    background-color: #ffffff;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
    padding-bottom: 60px;
  }

  .column {
    flex-basis: calc(25% - 20px); /* Adjust width here */
    padding: 20px;
    box-sizing: border-box;
  }

  footer {
    background-color: #b34d4d;
    
    margin: 0;
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
  /* Testimonials */
  body{
    margin: 0px;
    height: 100vh;
  }
   .testimonials {
   
  text-align: center;
  padding: 90px 0px;
  background-color: #000000;
  color: rgb(255, 255, 255);
}

.testimonials h2 {
  
  font-size: 6em;
  margin-bottom: 70px;
}

.testimonial-container {
  display: flex;
  justify-content: center;
   
}

.testimonial {
  font-family:  "Brygada 1918", serif;;
    font-style: italic;
background-color: #000000;
color: rgb(255, 255, 255);
  width: 18%; /* Adjust width as desired */
  height: 370px;
  margin: 10px;
  padding: 20px;
  border: 1px solid #000000;
  border-radius: 5px;
  text-align: left;
  /* Optional: Add subtle shadow */
  display: flex; /* Make testimonial a flex container */
  flex-direction: column; /* Stack content vertically */
  align-items: center; /* Center content horizontally */
}
.testimonial:hover{
  transform: scale(1.02);
  box-shadow: 0px 1.4px 30px #cec9c93d;
}

.testimonial img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.testimonial p {
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 10px;
}

.testimonial span {
  font-style: italic;
  font-size: 14px;
}

.rating {
  display: inline-block;
  margin-bottom: 5px;
  color: orange;
}

.rating span {
  
  font-size: 28px;
}
/* explore button */
.shop-button {
  justify-content: center;
  align-items: center;
        background-color: white;
        color: black;
        padding: 20px 30px;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s, padding 0.3s;
        cursor: pointer;
    }
    
    .shop-button:hover {
        background-color: orange;
        color: white;
        padding: 20px 60px; /* Increase padding to expand from left to right */
    }
    .shopall{
      text-decoration: none;
list-style: none;
      display: flex;
     
      justify-content: center;
    }
    .copyrights{
      
      text-align: center;
      
   background-color: #ffffff;
    font-family:  "Brygada 1918", serif;;
    font-style: italic;
    
    }
    .cart{
      bottom:30px;
      
      width:38px;
    }
  </style>
</head>
<body>
  <div class="loader"></div>
    <!-- Navigation Bar with Logo -->
       <nav>
        <div class="logo">
            <img src="all images/piston hub white.png" alt="Accessories Emporium Logo">
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="slider.php">Shop</a></li>
            <li><a href="cart.php">cart</a></li>
            <li><a href="cart1.php">Contact Us</a></li>
            
            <li><a href="login .html">Login/Signup</a></li>
            <li><a href="#"><img src="" alt=""></a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <h1>Welcome to Piston hub </h1>
        <p>Rev up your ride with our premium bike accessories!</p>
        <a href="slider.php" class="btn">Shop Now</a>
    </section>

    
    <section class="upgrade-your-ride">
        <h2 class="pp1">Piston's Priority</h2>
    <div class="thirdimagecontainer">
        <div class="first">
        <img src="all images/Untitled design (98).png" alt="" class="first"></div><div class="text"><h1>MISSION
        </h1>
        <p>At Piston Hub, we believe in pushing boundaries and setting new standards in the industry. Our dedication to research and development ensures that we stay ahead of the curve, anticipating the needs of riders and delivering solutions that redefine the riding experience. With a global perspective and a spirit of adventure, we embrace diversity and embrace the thrill of exploration, knowing that every ride is an opportunity for discovery.
            <br>
          </p>
         
        </div>
        </div>
      <div class="thirdimagecontainer">
        <div class="text1"><h1>VISION</h1>
          <br> <p>Our vision is to blend futuristic design and technology to create premium quality helmets and provide excellent customer experiences while having a positive impact on the ecosystem and society.</p>
          

       </div><div class="first">
          <img src="all images/triumph sub.png" alt="" class="first1">
        </div>
        
      </div>
      </section>
      
      <br><br>
      <h1 class="pp"><center>Our Premium Brands</center></h1><br>
      <a href="pulsar.html">
      <div class="brands">
      <div class="grid-container">
        <div class="grid-item">
          <img src="all images/pulsar main.png" alt="Image 1">
          <img src="all images/pulsar sub.png" alt="Hover Image 1" class="hover-image">
        </div></a>
        <a href="AXOR.html">
        <div class="grid-item">
          <img src="all images/axor main.png" alt="Image 3">
          <img src="all images/axor sub.png" alt="Hover Image 3" class="hover-image">
        </div></a>

       <a href="trimph.html"> <div class="grid-item">
          <img src="all images/triumph main.png" alt="Image 2">
          <img src="all images/triumph sub.png" alt="Hover Image 2" class="hover-image">
        </div></a></div>
        <a href="steelbird.html">
        <div class="second-container">
        <div class="grid-item">
          <img src="all images/steelbirdmain.png" alt="Image 4">
          <img src="all images/steelbird sub.png" alt="Hover Image 4" class="hover-image">
        </div></a>
        <a href="royal enfield.html">
        <div class="grid-item">
          <img src="all images/royal enfield main.png" alt="Image 4">
          <img src="axor gloves and boots/royalenfield sub.png" alt="Hover Image 4" class="hover-image">
        </div></a>
         <a href="yamaha.html">
        <div class="grid-item">
          <img src="all images/yamahamain.png" alt="Image 4">
          <img src="all images/yamaha sub.png" alt="Hover Image 4" class="hover-image">
        </div></a>
      </div>
    </div>
    <!-- <div class="explore-button"><button><a href="">Explore all</a></button></div> -->
    <a href="slider.php" class="shopall"><button class="shop-button" style="font-family:Brygada 1918, serif; font-style: italic ;">Shop all</button></a>
    <div class="certified-section">
      
    <!-- Testimonial Section -->
    <section class="testimonials" id="testimonial">
      <h2><i>Piston's People</i></h2>
      <div class="testimonial-container">
        <div class="testimonial">
          <img src="all images/Untitled design (90).png" alt="Person 1">
          <p>"This product has been a game-changer for my workflow. It's so easy to use and saves me a ton of time!"</p>
          <span class="rating">&#9733; &#9733; &#9733; &#9733; &frac12;</span>
          <span>- naan ri lalli</span>
        </div>
        <div class="testimonial">
          <img src="all images/Untitled design (91).png" alt="Person 2">
          <p>"I was initially skeptical, but this product exceeded my expectations. The quality is top-notch and the customer service is outstanding."</p>
          <span class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
          <span>- Narsimharaju Ballapura</span>
        </div>
        <div class="testimonial">
          <img src="all images/Untitled design (92).png" alt="Person 2">
          <p>"I was initially skeptical, but this product exceeded my expectations. The quality is top-notch and the customer service is outstanding."</p>
          <span class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
          <span>- Tejas N Reddy</span>
        </div>
        </div>
    </section>
    
  
    
    
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="column">
          <img src="all images/Piston hub.png" alt="" class="footerimage"><br>
          <p><i>Piston Hub: Ignite Your Ride! Discover premium bike accessories and expert repair services at our Bike Gear Revive Hub.</i></p>
        </div>
        <div class="column">
          <i><h4>Quick Links</h4></i>
          <ul><i>
            <li><a href="index.html">Home</a></li>
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
      
     
    </footer>

    <!-- JavaScript for fetching and displaying products -->
    <script src="script.js"></script>
</body>
</html>