<?php

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
         <div class="item d-flex justify-content-center align-items-center flex-column">
            <img src="..." alt="ICON">
            <h6>Professional Team</h6>
            <p>We have our professional team to manage our project</p>
         </div>
         <div class="item d-flex justify-content-center align-items-center flex-column">
            <img src="..." alt="ICON">
            <h6>We deliver Quality</h6>
            <p>Quality is our services priority</p>
         </div>
         <div class="item d-flex justify-content-center align-items-center flex-column">
            <img src="..." alt="ICON">
            <h6>Competitive</h6>
            <p>We provide competitive price, schedule and method</p>
         </div>
      </div>
   </div>
   <div id="about-section" class="py-4">
      <div class="container">
         <div id="about-title" class="d-flex justify-content-center mb-5">
            <h5 class="fs-3 border-1 border-bottom border-black pb-3 px-4 fw-medium">ABOUT US</h5>
         </div>
         <div id="about-content" class="row px-5 mt-5 pt-5">
            <div id="text-panel" class="col-6">
               <h5 class="fs-2 fw-medium text-center mb-3">Who we are</h5>
               <p style="text-align: justify;">We are a construction company established in 2003. Our company able to manage and executed any project and to be your reliable partner in the Engineering, Procurement and Construction with committed to customer satisfaction oriented.</p>

               <p style="text-align: justify;">We have many experiences to manage any construction works for civil, structure, mechanical, piping, tank work and some electrical work at any industry such as :</p>

               <ul>
                  <li>Power Plant</li>
                  <li>Oil and Gas</li>
                  <li>Petrochemical</li>
                  <li>Refinery Industry</li>
                  <li>Material Handling</li>
                  <li>Food Industry, Paper Industry etc</li>
               </ul>
            </div>
            <div id="img-panel" class="col-6 px-5 py-2 rounded-circle">
               <img src="./background.jpg" alt="" class="w-100 h-100 rounded-circle">
            </div>
         </div>
      </div>
   </div>
   <div id="service.section">
      <div class="container px-5">
         <div id="service-title" class="row">
            <div class="col-12 d-flex justify-content-center mb-5">
               <h5 class="fs-3 border-1 border-bottom border-black pb-4 px-4 fw-medium">WHAT WE OFFER</h5>
            </div>
         </div>
         <div class="row px-5">
            <div class="col-12">
               <p class="text-center">WE CAN OFFER OUR CAPABILITY, TEAM WORK AND EXPERIENCES TO MANAGE ANY CONSTRUCTION WORKS FOR CIVIL, STRUCTURE, MECHANICAL, PIPING, TANK AND SOME ELECTRICAL WORKS</p>
            </div>
         </div>
         <div class="row px-5">
            <div class="col-4">
               <img src="./background.jpg" alt="" class="w-100" height="160px">
               <h6 class="fs-4 text-center mb-4 mt-1">Fabrication</h6>
               <p class="text-center">We have a workshop for fabrication with best production capacity. We can work on steel fabrication, plates and tanks</p>
            </div>
            <div class="col-4">
               <img src="./background.jpg" alt="" class="w-100" height="160px">
               <h6 class="fs-4 text-center mb-4 mt-1">Fabrication</h6>
               <p class="text-center">We have a workshop for fabrication with best production capacity. We can work on steel fabrication, plates and tanks</p>
            </div>
            <div class="col-4">
               <img src="./background.jpg" alt="" class="w-100" height="160px">
               <h6 class="fs-4 text-center mb-4 mt-1">Fabrication</h6>
               <p class="text-center">We have a workshop for fabrication with best production capacity. We can work on steel fabrication, plates and tanks</p>
            </div>
         </div>
      </div>
   </div>
   <div id="footer" style="background-color:blue;" class="text-white">
      <div class="container px-5">
         <div class="row py-4 justify-content-center">
            <div class="col-5 d-flex justify-content-center flex-column align-items-start">
               <h5>PT. Gemilang Karya Agri</h5>
               <span>Jl. Boulevard Blok A1 No.43 Komplek Taman Cilegon Indah, Kel.Sukmajaya, Kec.Jombang Kota Cilegon 42422</span>
               <span>Email : pt.gka@gmail.com</span>
               <span>Telepon : 08123456789</span>
            </div>
            <div class="col-2 d-flex justify-content-center flex-column align-items-start">
               <h5>Web Service</h5>
               <a href="#" class="text-decoration-none text-white">Home</a>
               <a href="#" class="text-decoration-none text-white">About Us</a>
               <a href="#" class="text-decoration-none text-white">Product</a>
               <a href="#" class="text-decoration-none text-white">Documentation</a>
               <a href="#" class="text-decoration-none text-white">Contact</a>
            </div>
         </div>
      </div>
      <div id="copyright" class="text-center py-2" style="background-color:blue;">
         PT. Gemilang Karya Agri © 2024
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>