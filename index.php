<?php 


?>
<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

      <!--=============== SWIPER CSS ===============-->
      <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/style.css">

      <title>Responsive book website - Bedimcode</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
               <i class="ri-book-3-line"></i> E-Book
            </a>

            <div class="nav__menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="#home" class="nav__link active-link">
                        <i class="ri-home-line"></i>
                        <span>Home</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#featured" class="nav__link">
                        <i class="ri-book-3-line"></i>
                        <span>Featured</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#discount" class="nav__link">
                        <i class="ri-price-tag-3-line"></i>
                        <span>Discount</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#new" class="nav__link">
                        <i class="ri-bookmark-line"></i>
                        <span>New Books</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#testimonial" class="nav__link">
                        <i class="ri-message-3-line"></i>
                        <span>Testimonial</span>
                     </a>
                  </li>
               </ul>
            </div>

            <div class="nav__actions">
               <!-- Search button -->
               <i class="ri-search-line search-button" id="search-button"></i>

               <!-- Login button -->
               <i class="ri-user-line login-button" id="login-button"></i>

               <!-- Theme button -->
               <i class="ri-moon-line change-theme" id="theme-button"></i>
            </div>
         </nav>
      </header>

      <!--==================== SEARCH ====================-->
      <div class="search" id="search-content">
         <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="what are you looking for?" class="search__input">
         </form>

         <i class="ri-close-line search__close" id="search-close"></i>
      </div>

      <!--==================== LOGIN ====================-->
      <div class="login grid" id="login-content">
         <form action="" class="login__form grid">
            <h3 class="login__tittle">Log In</h3>

            <div class="login__group grid">
               <div>
                  <label for="login-email" class="login__label">Email</label>
                  <input type="email" placeholder="Write your email" id="lgin-email" class="login__input">
               </div>

               <div>
                  <label for="login-pass" class="login__label">Password</label>
                  <input type="password" placeholder="Enter your password" id="login-pass" class="login__input">
               </div>
            </div>

            <div>
               <span class="login__signup">
                  You do not have an account? <a href="#">Sign up</a>
               </span>

               <a href="#" class="login__forgot">
                  Your forgot your password
               </a>

               <button type="submit" class="login__button button">Log In</button>
            </div>
         </form>

         <i class="ri-close-line login__close" id="login-close"></i>
      </div>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home section" id="home">
            <div class="home__container container grid">
               <div class="home__data">
                  <h1 class="home__title">
                     Browse & <br>
                     Select E-Books
                  </h1>
   
                  <p class="home__description">
                     Find the best e-books from you favorite
                     writers, explore hundreds of books with all
                     possible categories, take advantage of the
                     50% discount and much more.
                  </p>

                  <a href="#" class="button">Explore Now</a>
               </div>

               <div class="home__images">
                  <div class="home__swiper swiper">
                     <div class="swiper-wrapper">
                        <?php include 'database/getbook-slider.php'; ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== SERVICES ====================-->
         <section class="services section">
            <div class="services__container container grid">
               <article class="services__card">
                  <i class="ri-truck-line"></i>
                  <h3 class="services__title">Free Shipping</h3>
                  <p class="services__description">Order More Than $100</p>
               </article>

               <article class="services__card">
                  <i class="ri-lock-2-line"></i>
                  <h3 class="services__title">Secure Payment</h3>
                  <p class="services__description">100% Secure Payment</p>
               </article>

               <article class="services__card">
                  <i class="ri-customer-service-2-line"></i>
                  <h3 class="services__title">24/7 Support</h3>
                  <p class="services__description">Call us anytime</p>
               </article>
            </div>
         </section>

         <!--==================== FEATURED ====================-->
         <section class="featured section" id="featured">
            <h2 class="section__title">
               Featured Books
            </h2>

            <div class="featured__container container">
               <div class="featured__swiper swiper">
                  <div class="swiper-wrapper">
                     <?php include 'database/getbook-features.php'; ?>
                  </div>

                  <div class="swiper-button-prev">
                     <i class="ri-arrow-left-s-line"></i>
                  </div>

                  <div class="swiper-button-next">
                     <i class="ri-arrow-right-s-line"></i>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== DISCOUNT ====================-->
         <section class="discount section" id="discount">
            <div class="discount__container container grid">
               <div class="discount__data">
                  <h2 class="discount__title section__title">
                     Up To 50% Discount
                  </h2>

                  <p class="discount__description">
                     Take advantage of the discount days we
                     have for you, buy books from your favorite
                     writers, the more you buy, the more
                     discount we have for you.
                  </p>

                  <a href="#" class="button">Shop Now</a>
               </div>

               <div class="discount__images">
                  <img src="assets/img/discount-book-1.png" alt="image" class="discount__img-1">
                  <img src="assets/img/discount-book-2.png" alt="image" class="discount__img-2">
               </div>
            </div>
         </section>

         <!--==================== NEW BOOKS ====================-->
         <section class="new section" id="new">
            <h2 class="section__title">
               New Books
            </h2>

            <div class="new__container container">
               <div class="new__swiper swiper">
                  <div class="swiper-wrapper">
                     <?php include 'database/getbook-new-1.php'; ?>
                  </div>
               </div>

               <div class="new__swiper swiper">
                  <div class="swiper-wrapper">
                     <?php include 'database/getbook-new-2.php'; ?>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== JOIN ====================-->
         <section class="join section">
            <div class="join__container">
               <img src="assets/img/join-bg.jpg" alt="image" class="join__bg">

               <div class="join__data container grid">
                  <h2 class="join__title section__title">
                     Subcribe To Receive
                     The Latest Updates
                  </h2>

                  <form action="" class="join__form">
                     <input type="email" placeholder="Enter email" class="join__input">
                     <button type="submit" class="join__button button">Subcribe</button>
                  </form>
               </div>
            </div>
         </section>

         <!--==================== TESTIMONIAL ====================-->
         <section class="testimonial section" id="testimonial">
            <h2 class="section__title">
               Website Builder
            </h2>

            <div class="testimonial__container container">
               <div class="testimonial__swiper swiper">
                  <div class="swiper-wrapper">
                     <?php include 'database/testimoni.php'; ?>
                  </div>
               </div>
            </div>
         </section>
      </main>

      <!--==================== FOOTER ====================-->
      <footer class="footer">
         <div class="footer__container container grid">
            <div>
               <a href="#" class="footer__logo">
                  <i class="ri-book-3-line"></i>E-Book
               </a>

               <p class="footer__description">
                  Find and explore the best <br>
                  E-Books from all your <br>
                  favorite writers.
               </p>
            </div>

            <div class="footer__data grid">
               <div>
                  <h3 class="footer__title">About</h3>

                  <ul class="footer__links">
                     <li>
                        <a href="#" class="footer__link">Awards</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">FAQs</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">Privacy policy</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">Terms of services</a>
                     </li>
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">Company</h3>

                  <ul class="footer__links">
                     <li>
                        <a href="#" class="footer__link">Blogs</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">Community</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">Our team</a>
                     </li>
                     
                     <li>
                        <a href="#" class="footer__link">Help center</a>
                     </li>
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">Contact</h3>
                  
                  <ul class="footer__links">
                     <li>
                        <address class="footer__info">
                           Payakumbuh
                           ,Indonesia.
                        </address>
                     </li>

                     <li>
                        <address class="footer__info">
                           hudaiqbal3006@gmail.com <br>
                           081294187393
                        </address>
                     </li>
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">Social</h3>
                  
                  <div class="footer__social">
                     <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-circle-line"></i>
                     </a>

                     <a href="https://www.intsagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                     </a>

                     <a href="https://www.twitter.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-x-line"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>

         <span class="footer__copy">
            &#169; All Rights Reserved By IqbaalHudaa
         </span>
      </footer>

      <!--========== SCROLL UP ==========-->
      <a href="#" class="scrollup" id="scroll-up">
         <i class="ri-arrow-up-line"></i>
      </a>

      <!--=============== SCROLLREVEAL ===============-->
      <script src="assets/js/scrollreveal.min.js"></script>

      <!--=============== SWIPER JS ===============-->
      <script src="assets/js/swiper-bundle.min.js"></script>

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>