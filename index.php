<?php

include "./config/database.php";
include "./header.php"

?>

<body>
   <div class="container-fluid p-0">

      <?php
      
      include "./navbar.php"

      ?>

      <div class="carousel-wrapper" style="height: 600px; overflow: hidden;">
         <div id="carouselExample" class="carousel slide h-100" data-bs-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="./background.jpg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="./background.jpg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="./background.jpg" class="d-block w-100" alt="...">
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
         </div>
      </div>
      <div style="height: 300px;" class="d-flex justify-content-center align-items-center gap-5">
         <div class="item d-flex justify-content-center align-items-center flex-column" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">
            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
               <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
            </svg>
            <h6>Professional Team</h6>
            <p>We have our professional team to manage our project</p>
         </div>
         <div class="item d-flex justify-content-center align-items-center flex-column" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
               <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5" />
            </svg>
            <h6>We deliver Quality</h6>
            <p>Quality is our services priority</p>
         </div>
         <div class="item d-flex justify-content-center align-items-center flex-column" data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">
            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
            </svg>
            <h6>Competitive</h6>
            <p>We provide competitive price, schedule and method</p>
         </div>
      </div>
   </div>
   <div id="about-section" class="py-4">
      <div class="container">
         <div id="about-title" class="d-flex justify-content-center mb-5">
            <h5 class="fs-3 border-1 border-bottom border-black pb-3 px-4 fw-medium" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">ABOUT US</h5>
         </div>
         <div id="about-content" class="row px-5 mt-5 pt-5">
            <div id="text-panel" class="col-6">
               <h5 class="fs-2 fw-medium text-center mb-3" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">Who we are</h5>
               <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">We are a construction company established in 2003. Our company able to manage and executed any project and to be your reliable partner in the Engineering, Procurement and Construction with committed to customer satisfaction oriented.</p>

               <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">We have many experiences to manage any construction works for civil, structure, mechanical, piping, tank work and some electrical work at any industry such as :</p>

               <ul data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">
                  <li>Power Plant</li>
                  <li>Oil and Gas</li>
                  <li>Petrochemical</li>
                  <li>Refinery Industry</li>
                  <li>Material Handling</li>
                  <li>Food Industry, Paper Industry etc</li>
               </ul>
            </div>
            <div id="img-panel" class="col-6 px-5 py-2 rounded-circle" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">
               <img src="./background.jpg" alt="" class="w-100 h-100 rounded-circle">
            </div>
         </div>
      </div>
   </div>
   <div id="service.section">
      <div class="container px-5">
         <div id="service-title" class="row">
            <div class="col-12 d-flex justify-content-center mb-5">
               <h5 class="fs-3 border-1 border-bottom border-black pb-4 px-4 fw-medium" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">WHAT WE OFFER</h5>
            </div>
         </div>
         <div class="row px-5">
            <div class="col-12">
               <p class="text-center" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">WE CAN OFFER OUR CAPABILITY, TEAM WORK AND EXPERIENCES TO MANAGE ANY CONSTRUCTION WORKS FOR CIVIL, STRUCTURE, MECHANICAL, PIPING, TANK AND SOME ELECTRICAL WORKS</p>
            </div>
         </div>
         <div class="row px-5">
            <div class="col-4" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">
               <img src="./background.jpg" alt="" class="w-100" height="160px">
               <h6 class="fs-4 text-center mb-4 mt-1">Fabrication</h6>
               <p class="text-center">We have a workshop for fabrication with best production capacity. We can work on steel fabrication, plates and tanks</p>
            </div>
            <div class="col-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
               <img src="./background.jpg" alt="" class="w-100" height="160px">
               <h6 class="fs-4 text-center mb-4 mt-1">Fabrication</h6>
               <p class="text-center">We have a workshop for fabrication with best production capacity. We can work on steel fabrication, plates and tanks</p>
            </div>
            <div class="col-4" data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">
               <img src="./background.jpg" alt="" class="w-100" height="160px">
               <h6 class="fs-4 text-center mb-4 mt-1">Fabrication</h6>
               <p class="text-center">We have a workshop for fabrication with best production capacity. We can work on steel fabrication, plates and tanks</p>
            </div>
         </div>
      </div>
   </div>
   <?php
   include "./footer.php"
   ?>
</body>

</html>