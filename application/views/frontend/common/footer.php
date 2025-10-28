

</main>
<!-- **************** MAIN CONTENT END **************** -->
<!-- =======================
   Footer START -->
<footer class="bg-black pt-6" data-bs-theme="dark" style="background-image: url('<?= base_url('assets/frontend/images/bg/14.jpg') ?>'); background-size: cover; background-position: center left;">
   <div class="container position-relative mt-sm-5">
      <!-- SVG decoration -->
      <div class="row g-3 g-md-4 align-items-center ">
         <div class="col-md-8  ">

            <hr>

            <!-- Slider START -->
            <div class="swiper" data-swiper-options='{
			"slidesPerView": 2, 
			"spaceBetween": 50,
			"breakpoints": { 
				"576": {"slidesPerView": 4}, 
				"992": {"slidesPerView": 4}, 
				"1200": {"slidesPerView": 5}
			}}'>

               <!-- Slider items -->
               <div class="swiper-wrapper align-items-center ">
                  <!-- Image -->
                  <div class="swiper-slide">
                     <img src="<?= base_url('assets/frontend/images/client/01.svg') ?>" class="grayscale" alt="client-img">
                  </div>
                  <!-- Image -->
                  <div class="swiper-slide">
                     <img src="<?= base_url('assets/frontend/images/client/02.svg') ?>" class="grayscale" alt="client-img">
                  </div>
                  <!-- Image -->
                  <div class="swiper-slide">
                     <img src="<?= base_url('assets/frontend/images/client/03.svg') ?>" class="grayscale" alt="client-img">
                  </div>
                  <!-- Image -->
                  <div class="swiper-slide">
                     <img src="<?= base_url('assets/frontend/images/client/04.svg') ?>" class="grayscale" alt="client-img">
                  </div>
                  <!-- Image -->
                  <div class="swiper-slide">
                     <img src="<?= base_url('assets/frontend/images/client/05.svg') ?>" class="grayscale" alt="client-img">
                  </div>
                  <!-- Image -->
                  <div class="swiper-slide">
                     <img src="<?= base_url('assets/frontend/images/client/06.svg') ?>" class="grayscale" alt="client-img">
                  </div>
               </div>
            </div>
            <!-- Slider END -->
         </div>
         <!-- Button -->
         <div class="col-md-3 text-md-end ms-auto  " style="padding-top: 40px;">
            <a class="buttonuni  mb-0 " href="#"><span>Start Your Journey <i class="bi bi-arrow-right"></i></span> </a>
         </div>
      </div>
      <!-- Divider -->
      <hr class="opacity-1 my-5 ">

      <div class="row g-4 justify-content-between ">
         <!-- Widget 1 START -->
         <div class="col-lg-8 col-xl-7">
            <div class="row g-4">
               <!-- Link block -->
               <div class="col-6 col-md-3">
                  <h6 class="mb-2 mb-md-4">Quick links</h6>
                  <ul class="nav flex-column">
                     <li class="nav-item"><a class="nav-link pt-0" href="about-v1.html">About us</a></li>
                     <li class="nav-item"><a class="nav-link" href="contact-v1.html">Contact us</a></li>
                     <li class="nav-item"><a class="nav-link" href="career.html">Career <span class="badge text-bg-danger ms-2">2 Job</span></a></li>
                     <li class="nav-item"><a class="nav-link" href="career-single.html">Career detail</a></li>
                     <li class="nav-item"><a class="nav-link" href="contact-v1.html">Become a partner</a></li>
                     <li class="nav-item"><a class="nav-link" href="sign-in.html">Sign in</a></li>
                     <li class="nav-item"><a class="nav-link" href="sign-up.html">Sign up</a></li>
                  </ul>
               </div>
               <!-- Link block -->
               <div class="col-6 col-md-3">
                  <h6 class="mb-2 mb-md-4">Community</h6>
                  <ul class="nav flex-column">
                     <li class="nav-item"><a class="nav-link pt-0" href="#">Documents</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">Supports <i class="bi bi-box-arrow-up-right small ms-1"></i></a></li>
                     <li class="nav-item"><a class="nav-link" href="faq.html">Faqs</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
                     <li class="nav-item"><a class="nav-link" href="blog-grid.html">News and blogs</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">Terms & condition</a></li>
                  </ul>
               </div>
               <!-- Link block -->
               <div class="col-md-6">
                  <h6 class="mb-2 mb-md-4">Contact details</h6>
                  <ul class="list-group list-group-borderless">
                     <li class="d-flex mb-3"><i class="me-2 text-primary bi bi-geo-alt"></i>1421 Coburn Hollow Road Metamora, Near Center Point, IL 61548. </li>
                     <li class="d-flex mb-3"><i class="me-2 text-primary bi bi-headset"></i> (251) 854-6308 </li>
                     <li class="d-flex mb-3"><i class="me-2 text-primary bi bi-envelope"></i> help@example.com</li>
                     <li class="d-flex mb-3">
                        <i class="me-2 text-primary bi bi-clock"></i>
                        <p class="mb-0">Mon - Fri: <strong>09:00 - 21:00</strong> <br>Sat - Sun: <strong>Closed</strong></p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- Widget 1 END -->

         <!-- Widget 2 START -->
         <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
            <h6 class="mb-2 mb-md-4">Community</h6>
            <!-- Document -->
            <div class="position-relative d-flex align-items-center py-2 my-2">
               <div class="icon-lg bg-warning rounded-circle flex-shrink-0">
                  <i class="bi bi-file-earmark-text-fill heading-color"></i>
               </div>
               <div class="nav flex-column ps-3">
                  <h6 class="mb-2"><a href="#" class=" stretched-link p-0">Documentation</a></h6>
                  <div class="small text-body-secondary">API, knowledge base, tutorials</div>
               </div>
            </div>
            <!-- Snippets -->
            <div class="position-relative d-flex align-items-center py-2 my-2">
               <div class="icon-lg bg-success rounded-circle flex-shrink-0">
                  <i class="bi bi-stickies-fill heading-color"></i>
               </div>
               <div class="nav flex-column ps-3">
                  <h6 class="mb-2"><a href="#" class=" stretched-link p-0">Snippets</a></h6>
                  <div class="small text-body-secondary">API, knowledge base, tutorials</div>
               </div>
            </div>
            <!-- Snippets -->
            <div class="position-relative d-flex align-items-center py-2 my-2">
               <div class="icon-lg bg-info rounded-circle flex-shrink-0">
                  <i class="bi bi-puzzle-fill heading-color"></i>
               </div>
               <div class="nav flex-column ps-3">
                  <h6 class="mb-2"><a href="#" class="stretched-link p-0">Components</a></h6>
                  <div class="small text-body-secondary">API, knowledge base, tutorials</div>
               </div>
            </div>
         </div>
         <!-- Widget 2 END -->

      </div>
      <!-- Divider -->
      <hr class="opacity-1 mt-4 mb-3 bg-white">
      <!-- Bottom footer -->
      <div class="  d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start py-3">
         <!-- Logo -->
         <a class="navbar-brand mb-3 mb-md-0 " href="index.html">
            <img class="light-mode-item h-40px" src="<?= base_url('assets/frontend/img/logo.png') ?>" alt="logo">
            <img class="dark-mode-item h-40px" src="<?= base_url('assets/frontend/img/logo.png') ?>" alt="logo">
         </a>

         <!-- Legal Links (Terms, Privacy, etc.) -->
         <ul class="list-unstyled d-flex justify-content-center justify-content-md-start mb-0 flex-nowrap glasseffect">
            <li class="ms-3 small">
               <a href="<?= base_url('terms-of-service') ?>" class="text-body-link text-decoration-none ">Terms of Service</a>
            </li>
            <li class="ms-3 border-start small ps-3 text-white border-white">
               <a href="<?= base_url('privacy-policy') ?>" class="text-body-link text-decoration-none">Privacy Policy</a>
            </li>

            <li class="ms-3 border-start small ps-3 text-white border-white">
               <a href="<?= base_url('cookie-policy') ?>" class="text-body-link text-decoration-none">Cookie Policy</a>
            </li>

            <li class="ms-3 border-start small ps-3 text-white border-white">
               <a href="<?= base_url('contact-us') ?>" class="text-body-link  text-decoration-none">Sitemap</a>
            </li>
         </ul>

         <!-- Copyright link -->
         <div class="text-body mt-3 mt-md-0 ">
            Copyrights ©2025. Built by
            <a href="#" class="text-body text-primary-hover">MIRASHKA</a>.
         </div>
      </div>


   </div>
</footer>
<!-- =======================
   Footer END -->
<!-- Back to top -->
<div class="back-top"></div>
<!-- Bootstrap JS -->
<script src="<?= base_url('assets/frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/vendor/isotope/isotope.pkgd.min.js') ?>"></script>

<!-- home -->
<script src="<?= base_url('assets/frontend/vendor/purecounterjs/dist/purecounter_vanilla.js') ?>"></script>
<script src="<?= base_url()?>assets/frontend/vendor/jarallax/jarallax.min.js"></script>
<script src="<?= base_url()?>assets/frontend/vendor/jarallax/jarallax-video.min.js"></script>
<script src="<?= base_url()?>assets/frontend/vendor/sticky-js/sticky.min.js"></script>
<!-- home -->

<script src="<?= base_url('assets/frontend/vendor/ityped/index.js') ?>"></script>
<script src="<?= base_url('assets/frontend/vendor/swiper/swiper-bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/js/functions.js') ?>"></script>
</body>

</html>