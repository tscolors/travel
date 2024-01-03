<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

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

<!-- home section starts  -->

<section class="home" id="home">

  <div class="swiper  home-slider">

    <div class="swiper-wrapper">
      
      <div class="swiper-slide slide" style="background:url(./assets/image/beach-02.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel arround the  world</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
      </div>

      <div class="swiper-slide slide" style="background:url(./assets/image/dune.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>discover new places</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
      </div>

      <div class="swiper-slide slide" style="background:url(./assets/image/img02.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>make your tour worthwile</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
      </div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

  </div>
</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services" id="services">

<h1 class="heading-title"> our services</h1>

<div class="box-container">

  <div class="box">
    <img src="./assets/image/pyramids.png" alt="">
    <h3>adventure</h3>
  </div>

  <div class="box">
    <img src="./assets/image/map.png" alt="">
    <h3>tour guide</h3>
  </div>

  <div class="box">
    <img src="./assets/image/school-bag.png" alt="">
    <h3>trekking</h3>
  </div>

  <div class="box">
    <img src="./assets/image/campfire.png" alt="">
    <h3>camp fire</h3>
  </div>

  <div class="box">
    <img src="./assets/image/icon3.png" alt="">
    <h3>off road</h3>
  </div>

  <div class="box">
    <img src="./assets/image/icon4.png" alt="">
    <h3>camping</h3>
  </div>

</div>

</section>


<!-- services section ends -->

<!-- home about section starts -->

<section class="home-about" id="home-about">

<div class="image">
  <img src="./assets/image/img01.jpg" alt="">
</div>

<div class="content">
  <h3>about us</h3>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates libero alias ducimus vero. Ducimus sed molestiae quaerat nesciunt quos! Possimus eos obcaecati cum id officiis eius voluptas dolorum maxime modi.</p>
  <a href="about.php" class="btn">read more</a>
</div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages" id="home-packages">

<h1 class="heading-title"> our packages</h1>

<div class="box-container">

  <div class="box">
    <div class="image">
      <img src="./assets/image/img03-small.jpg" alt="">
    </div>
    <div class="content">
      <h3>adventure & tour</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim accusantium maxime soluta veritatis! </p>
      <a href="book.php" class="btn">book now</a>
    </div>
  </div>

  <div class="box">
    <div class="image">
      <img src="./assets/image/japan-small.jpg" alt="">
    </div>
    <div class="content">
      <h3>adventure & tour</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim accusantium maxime soluta veritatis! </p>
      <a href="book.php" class="btn">book now</a>
    </div>
  </div>

  <div class="box">
    <div class="image">
      <img src="./assets/image/g1.jpg" alt="">
    </div>
    <div class="content">
      <h3>adventure & tour</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim accusantium maxime soluta veritatis! </p>
      <a href="book.php" class="btn">book now</a>
    </div>
  </div>

</div>

<div class="load-more"> <a href="package.php" class="btn"> load more</a></div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer" id="home-offer">

<div class="content">
    <h3>upto 50% off</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique illo asperiores animi vel quasi aperiam!</p>
    <a href="book.php" class="btn">book now</a>
</div>

</section>

<!-- home offer section ends -->




















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