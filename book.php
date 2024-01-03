<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./assets/css/style.css">


</head>
<body>

<!-- header section starts  -->

<header class="header" id="header">
    <a href="home.php" class="logo">travel</a>

    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<div class="heading" style="background:url(./assets/image/img02.jpg) no-repeat">
    <h1 id="booking-title">book now</h1>
</div>


<!-- booking section starts  -->
<section class="booking" id="booking">

 <h1 class="heading-title">book your trip!</h1>

 <form action="book_form.php" method="post" class="book-form">


   <div class="flex">

    <div class="inputBox">
        <label for="name">name:</label>
        <input type="text" name="name" placeholder="enter your name" id="name">
    </div>

    <div class="inputBox">
        <label for="email">email:</label>
        <input type="email" name="email" placeholder="enter your email" id="email">
    </div>

    <div class="inputBox">
        <label for="phone">phone:</label>
        <input type="number" name="phone" placeholder="enter your number" id="phone">
    </div>

    <div class="inputBox">
        <label for="address">address:</label>
        <input type="text" name="address" placeholder="enter your address" id="address">
    </div>

    <div class="inputBox">
        <label for="location">where to:</label>
        <input type="text" name="location" placeholder="place you want to visit" id="location">
    </div>

    <div class="inputBox">
        <label for="guests">how many:</label>
        <input type="number" name="guests" placeholder="number of guests" id="guests">
    </div>

    <div class="inputBox">
        <label for="arrivals">arrivals:</label>
        <input type="date" name="arrivals" id="arrivals">
    </div>

        <div class="inputBox">
            <label for="leaving">leaving:</label>
            <input type="date" name="leaving">
        </div>
   </div>

   <input type="submit" value="submit" class="btn" name="send">

 </form>

</section>
<!-- booking section ends -->




















<!-- footer section starts  -->
<footer class="footer" id="footer">
  <div class="box-container">

  <div class="box">
      <h3>quick links</h3>
      <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
      <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
      <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
      <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
  </div>

  <div class="box">
      <h3>extra links</h3>
      <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
      <a href="#"><i class="fas fa-angle-right"></i> about us</a>
      <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
      <a href="#"><i class="fas fa-angle-right"></i> termes of use</a>
  </div>

  <div class="box">
      <h3>contact info</h3>
      <a href="#"><i class="fas fa-phone"></i> +55 (047) 55698 - 1536 </a>
      <a href="#"><i class="fas fa-phone"></i> +55 (049) 1234 - 4569 </a>
      <a href="#"><i class="fas fa-envelope"></i>  teste@gmail.com </a>   
      <a href="#"><i class="fas fa-map"></i>  brazil, jaraguá do sul sc - 89254-204 </a>   
  </div>

  <div class="box">
      <h3>follow us</h3>
      <a href="#"><i class="fab fa-facebook-f"></i>facebook </a>
      <a href="#"><i class="fab fa-twitter"></i>twitter </a>
      <a href="#"><i class="fab fa-instagram"></i>instagram </a>
      <a href="#"><i class="fab fa-pinterest"></i>pinterest </a>   
  </div>

  </div>

  <div class="credit"> created by <span>tiago santos web designer</span> | all rights reserved!</div>
</footer>
<!-- footer section ends -->






<!-- swiper js link  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="./assets/js/main.js"></script>
    
</body>
</html>