<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ecommerce</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="js/vendor/modernizr.js"></script>
</head>

<body>

  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <h1><a href="index.php">Ecommerce</a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li><a href="about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="cart.php">View Cart</a></li>
        <li><a href="orders.php">My Orders</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php

        if (isset($_SESSION['username'])) {
          echo '<li><a href="account.php">My Account</a></li>';
          echo '<li><a href="logout.php">Log Out</a></li>';
        } else {
          echo '<li><a href="login.php">Log In</a></li>';
          echo '<li><a href="register.php">Register</a></li>';
        }
        ?>
      </ul>
    </section>
  </nav>




  <!-- <img data-interchange="[images/background.jpg, (retina)], [images/background1.jpg, (large)], [images/bolt-mobile.jpg, (mobile)], [images/bolt-landscape.jpg, (medium)]">
    <noscript><img src="images/background.jpg"></noscript> -->




  <div class="row" style="margin-top:10px;">
    <div class="small-12">


      <!-- new code goes here -->
      <div class="slider">
        <input type="radio" name="testimonial" id="t-1">
        <input type="radio" name="testimonial" id="t-2">
        <input type="radio" name="testimonial" id="t-3" checked>
        <input type="radio" name="testimonial" id="t-4">
        <input type="radio" name="testimonial" id="t-5">
        <div class="testimonials">
          <label class="item" for="t-1">
            <!-- <h1>1</h2> -->
              <img src="images/products/dress.png" alt="" srcset="">
          </label>
          <label class="item" for="t-2">
            <!-- <h1>2</h2> -->
              <img src="images/products/men6.png" alt="" srcset="">

          </label>
          <label class="item" for="t-3">
            <!-- <h1>3</h2> -->
              <img src="images/products/shoes.jpg" alt="" srcset="">

          </label>
          <label class="item" for="t-4">
            <!-- <h1>4</h2> -->
              <img src="images/products/women5.png" alt="" srcset="">

          </label>
          <label class="item" for="t-5">
            <!-- <h6>$51</h6> -->
              <img src="images/products/women6.png" alt="" srcset="">

          </label>
          <!--  -->
        </div>
        <br />
        <div class="dots">
          <label for="t-1"></label>
          <label for="t-2"></h3> </label>
          <label for="t-3"></label>
          <label for="t-4"></label>
          <label for="t-5"></label>
        </div>
      </div>


      <style>
        .slider {
          width: 100%
        }

        .slider input {
          display: none;
        }

        .testimonials {
          display: flex;
          align-items: center;
          justify-content: center;
          position: relative;
          min-height: 350px;
          perspective: 1000px;
          overflow: hidden;
        }

        .testimonials .item {
          width: 300px;
          padding: 30px;
          border-radius: 5px;
          background-color: #21262d;
          position: absolute;
          border: 3px solid white;
          top: 0;
          box-sizing: border-box;
          text-align: center;
          transition: transform 0.4s;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
          user-select: none;
          cursor: pointer;
        }

        .testimonials .item h1 {
          font-size: 114px;
          color: white;
        }

        .dots {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .dots label {
          height: 5px;
          width: 5px;
          border-radius: 50%;
          cursor: pointer;
          background-color: #413B52;
          margin: 7px;
          transition-duration: 0.2s;
        }

        #t-1:checked~.dots label[for="t-1"],
        #t-2:checked~.dots label[for="t-2"],
        #t-3:checked~.dots label[for="t-3"],
        #t-4:checked~.dots label[for="t-4"],
        #t-5:checked~.dots label[for="t-5"] {
          transform: scale(2);
          background-color: #fff;
          box-shadow: 0px 0px 0px 3px #dddddd24;
        }

        #t-1:checked~.dots label[for="t-2"],
        #t-2:checked~.dots label[for="t-1"],
        #t-2:checked~.dots label[for="t-3"],
        #t-3:checked~.dots label[for="t-2"],
        #t-3:checked~.dots label[for="t-4"],
        #t-4:checked~.dots label[for="t-3"],
        #t-4:checked~.dots label[for="t-5"],
        #t-5:checked~.dots label[for="t-4"] {
          transform: scale(1.5);
        }

        #t-1:checked~.testimonials label[for="t-3"],
        #t-2:checked~.testimonials label[for="t-4"],
        #t-3:checked~.testimonials label[for="t-5"],
        #t-4:checked~.testimonials label[for="t-1"],
        #t-5:checked~.testimonials label[for="t-2"] {
          transform: translate3d(600px, 0, -180px) rotateY(-25deg);
          z-index: 2;
        }

        #t-1:checked~.testimonials label[for="t-2"],
        #t-2:checked~.testimonials label[for="t-3"],
        #t-3:checked~.testimonials label[for="t-4"],
        #t-4:checked~.testimonials label[for="t-5"],
        #t-5:checked~.testimonials label[for="t-1"] {
          transform: translate3d(300px, 0, -90px) rotateY(-15deg);
          z-index: 3;
        }

        #t-2:checked~.testimonials label[for="t-1"],
        #t-3:checked~.testimonials label[for="t-2"],
        #t-4:checked~.testimonials label[for="t-3"],
        #t-5:checked~.testimonials label[for="t-4"],
        #t-1:checked~.testimonials label[for="t-5"] {
          transform: translate3d(-300px, 0, -90px) rotateY(15deg);
          z-index: 3;
        }

        #t-3:checked~.testimonials label[for="t-1"],
        #t-4:checked~.testimonials label[for="t-2"],
        #t-5:checked~.testimonials label[for="t-3"],
        #t-2:checked~.testimonials label[for="t-5"],
        #t-1:checked~.testimonials label[for="t-4"] {
          transform: translate3d(-600px, 0, -180px) rotateY(25deg);

        }

        #t-1:checked~.testimonials label[for="t-1"],
        #t-2:checked~.testimonials label[for="t-2"],
        #t-3:checked~.testimonials label[for="t-3"],
        #t-4:checked~.testimonials label[for="t-4"],
        #t-5:checked~.testimonials label[for="t-4"],
        #t-5:checked~.testimonials label[for="t-5"] {

          z-index: 4;
        }
      </style>

      <!-- new code ends here -->
      <Span style="color: #21262d;">Get your product With "cod" or ad_payment in your doorstep.</Span>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
      <footer style="margin-top:10px;">
        <p style="text-align:center; font-size:0.8em;">&copy; Ecommerce webiste. All Rights Reserved.</p>
      </footer>

    </div>
  </div>





  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>

</html>