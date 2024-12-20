<?php
include "./header.php";
include __DIR__ . "/config/database.php";
include __DIR__ . "/services/contact.php";

$config  = get_contact_config($connection);

?>

<body>
   <div class="container-fluid p-0">
      <?php

      include "./navbar.php"

      ?>
      <div id="hero-section" class="w-100 d-flex justify-content-center align-items-center" style="height: 100vh;">
         <img src="./background.jpg" alt="" width="100%" style="height: 100%;" class="position-absolute">
         <div class="position-relative w-25 d-flex justify-content-center align-items-center flex-column">
            <h2 class="border-bottom border-white text-center text-white fs-1 w-100"><?= $config['page_title'] ?></h2>
            <a class="btn btn-primary text-uppercase" style="width: fit-content;" href="#contact-section"><?= $config['page_button_text'] ?></a>
         </div>
      </div>
      <div id="contact-section">
         <div class="container py-5">
            <div class="row">
               <div class="col-12 mb-4">
                  <h6 class="text-center fs-1 fw-bold"><?= $config['section_title'] ?></h6>
               </div>
               <div class="col-12 col-md-6 pt-4 pe-0 pe-md-2">
                  <p class="fs-2 fw-semibold"><?= $config['section_input_title'] ?></p>
                  <div class="col-12 d-flex flex-column gap-3">
                     <div class="form-group">
                        <label for="">Nama <small class="text-danger">*</small></label>
                        <input type="text" name="nama" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="">Email <small class="text-danger">*</small></label>
                        <input type="email" name="Email" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="">Subjek <small class="text-danger">*</small></label>
                        <input type="text" name="subjek" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="">Pesan <small class="text-danger">*</small></label>
                        <textarea name="" rows="3" class="form-control"></textarea>
                     </div>
                     <div class="form-group">
                        <button class="btn btn-primary w-100">Kirim</button>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 pt-4 pe-0 pe-md-2">
                  <div class="mapouter">
                     <div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=<?= $config['map_latitude'] ?>,<?= $config['map_longitude'] ?>&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 590px; height: 400px;"></iframe>
                        <style>
                           .mapouter {
                              display: table;
                           }

                           .gmap_canvas {
                              overflow: hidden;
                              position: relative;
                              height: 400px;
                              width: 590px;
                              background: #fff;
                           }
                        </style><a href="https://www.taxuni.com/rmd-calculator/">RMD Calculator</a>
                        <style>
                           .gmap_canvas iframe {
                              position: relative !important;
                              z-index: 2 !important;
                           }

                           .gmap_canvas a {
                              color: #fff !important;
                              position: absolute !important;
                              top: 0 !important;
                              left: 0 !important;
                              z-index: 0 !important;
                           }
                        </style>
                     </div>
                  </div>
                  <div class="col-12 pt-4">
                     <h2 class="fw-bold text-uppercase"><?= $config['map_place_name'] ?></h2>
                  </div>
                  <div class="col-12">
                     <p><?= $config['map_place_address'] ?></p>
                  </div>
                  <div class="col-12">
                     <p>yanti@pt-gka.com</p>
                     <p>Telp. (0254) 575 3355</p>
                     <p>Fax. (0254) 849 5241</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php
   include "./footer.php"
   ?>
</body>

</html>