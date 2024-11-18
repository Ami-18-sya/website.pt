<?php
include "./header.php";
include __DIR__ . "/header.php";
include __DIR__ . "/config/database.php";
include __DIR__ . "/services/product.php";
$config = get_product_config($connection);
$items = get_product_items($connection);
?>

<body>
   <div class="container-fluid p-0">
      <?php

      include "./navbar.php"
      include "./navbar.php";

      ?>
      <div id="hero-section" class="w-100 d-flex justify-content-center align-items-center" style="height: 100vh;">
         <img src="./background.jpg" alt="" width="100%" style="height: 100%;" class="position-absolute">
         <div class="position-relative w-25 d-flex justify-content-center align-items-center flex-column">
            <h2 class="border-bottom border-white text-center text-white fs-1 w-100 fw-semibold" style="text-shadow: 1px 1px 1px #1a1a1a;">Produk Kami</h2>
            <a class="btn btn-primary" style="width: fit-content;" href="#product-section">SELENGKAPNYA</a>
            <h2 class="border-bottom border-white text-center text-white fs-1 w-100 fw-semibold" style="text-shadow: 1px 1px 1px #1a1a1a;"><?= $config['page_title'] ?></h2>
            <a class="btn btn-primary text-uppercase" style="width: fit-content;" href="#product-section"><?= $config['page_button_text'] ?></a>
         </div>
      </div>
      <div id="product-section" class="py-4 mb-5">
         <div class="container-fluid">
            <div class="row justify-content-center my-5 py-5">
               <div class="col-12 col-lg-6">
                  <h1 class="text-center">Memberikan Produk Terbaik</h1>
                  <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt alias architecto est. Quis incidunt quibusdam, ullam vitae fugiat officia sapiente quas voluptatibus. Delectus fugit illum, autem a magni, error laudantium deserunt nam tempora vero alias. Dolores cum et optio quas.</p>
               </div>
      <div id="product-section" class="container-fluid py-5">
         <div class="row">
            <div class="col-12 py-5">
               <h6 class="text-center fs-2 fw-semibold"><?= $config['section_title'] ?></h6>
               <h6 class="text-center fs-5 fw-medium"><?= $config['section_description'] ?></h6>
            </div>
            <div class="row" id="product-list-wrapper">
               <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-0 overflow-hidden position-relative d-flex justify-content-center align-items-center" style="height: 300px;">
                  <img src="./background.jpg" alt="..." width="100%" height="100%" class="position-absolute">
                  <h2 class="text-center text-white position-relative">TEXT</h2>
               </div>
               <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-0 overflow-hidden position-relative d-flex justify-content-center align-items-center" style="height: 300px;">
                  <img src="./background.jpg" alt="..." width="100%" height="100%" class="position-absolute">
                  <h2 class="text-center text-white position-relative">TEXT</h2>
               </div>
               <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-0 overflow-hidden position-relative d-flex justify-content-center align-items-center" style="height: 300px;">
                  <img src="./background.jpg" alt="..." width="100%" height="100%" class="position-absolute">
                  <h2 class="text-center text-white position-relative">TEXT</h2>
               </div>
               <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-0 overflow-hidden position-relative d-flex justify-content-center align-items-center" style="height: 300px;">
                  <img src="./background.jpg" alt="..." width="100%" height="100%" class="position-absolute">
                  <h2 class="text-center text-white position-relative">TEXT</h2>
               </div>
               <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-0 overflow-hidden position-relative d-flex justify-content-center align-items-center" style="height: 300px;">
                  <img src="./background.jpg" alt="..." width="100%" height="100%" class="position-absolute">
                  <h2 class="text-center text-white position-relative">TEXT</h2>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="owl-carousel owl-theme">
                  <?php
                  foreach ($items as $key => $item) {
                     $html = '<div class="item position-relative">';
                     $html .= '<div class="img-wrapper">';
                     $html .= '<img src="./background.jpg" alt="..">';
                     $html .= '</div>';
                     $html .= '<div class="text-wrapper mt-3">';
                     $html .= '<h6>Judul</h6>';
                     $html .= '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis aspernatur eum dolores molestiae sed vero distinctio dicta optio illum magni?</p>';
                     $html .= '</div>';
                     $html .= '</div>';
                     echo $html;
                  }
                  ?>
                  <div class="item position-relative">
                     <div class="img-wrapper">
                        <img src="./background.jpg" alt="..">
                     </div>
                     <div class="text-wrapper mt-3">
                        <h6>Judul</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis aspernatur eum dolores molestiae sed vero distinctio dicta optio illum magni?</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 d-flex justify-content-between mt-4 px-5">
               <button class="btn btn-primary btn-lg btn-owl-prev">Sebelumnya</button>
               <button class="btn btn-primary btn-lg btn-owl-next">Selanjutnya</button>
            </div>
         </div>
      </div>
      <?php
      include "./footer.php";
      ?>
   </div>
   <?php 
   include "./footer.php"
   ?>
   <script>
      const owl = $('.owl-carousel').owlCarousel({
         loop: true,
         margin: 10,
         nav: true,
         responsive: {
            0: {
               items: 1
            },
            600: {
               items: 3
            }
         }
      })
      const buttonNextOwl = $(".btn-owl-next")
      const buttonPrevOwl = $(".btn-owl-prev")
      buttonNextOwl.click(() => owl.trigger("next.owl.carousel"))
      buttonPrevOwl.click(() => owl.trigger("prev.owl.carousel"))
   </script>
</body>

</html>