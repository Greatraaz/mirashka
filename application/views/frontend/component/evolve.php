<div class="container">
   <!-- Title and content -->
   <div class="row mb-4 mb-md-6">
      <div class="col-md-6 col-lg-5">
         <h2 class="mb-0 heading-color ">Evolve Services</h2>
      </div>
      <div class="col-md-6 col-lg-4 ms-auto heading-color">
         <p>We are at the cutting edge of professional IT Services </p>
         <div class="d-flex gap-3 position-relative mt-3">
            <a href="javascript:void(0);" class="btn btn-white border btn-icon rounded-circle mb-0 swiper-button-prev-team"><i class="bi bi-arrow-left"></i></a>
            <a href="javascript:void(0);" class="btn btn-white border btn-icon rounded-circle mb-0 swiper-button-next-team"><i class="bi bi-arrow-right"></i></a>
         </div>
      </div>
   </div>
   <!-- Service start -->
   <div class="swiper swiper-outside-end-n20 iskok">
      <div class="swiper-wrapper">
         
         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/01.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('digital-outsourcing-and-team-extension') ?>">Digital Outsourcing & Team Extension</a></h6>
                  <p class="mb-0">Expanding your team with skilled professionals remotely to meet project demands and timelines.</p>
               </div>
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('digital-outsourcing-and-team-extension') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>

         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/02.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('dedicated-resource-hiring') ?>">Dedicated Resource Hiring (Dev, Design, SEO, etc.)</a></h6>
                  <p class="mb-0">Hiring specialized professionals for your business needs, whether in development, design, or SEO.</p>
               </div>
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('dedicated-resource-hiring') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         
         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">               
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/03.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>               
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('process-automation-support') ?>">Process Automation Support</a></h6>
                  <p class="mb-0">Automating routine tasks and processes to improve efficiency and reduce manual work.</p>
               </div>               
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('process-automation-support') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         
         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">               
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/04.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>               
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('wikipedia-page-maintenance') ?>">Wikipedia Page Maintenance</a></h6>
                  <p class="mb-0">Ensuring your Wikipedia page remains accurate, up-to-date, and complies with Wikipedia's guidelines.</p>
               </div>               
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('wikipedia-page-maintenance') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         
         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">               
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/05.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>               
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('technology-consultation-and-architecture-design') ?>">Technology Consultation & Architecture Design</a></h6>
                  <p class="mb-0">Providing expert guidance in selecting and designing technology solutions to meet your business goals.</p>
               </div>               
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('technology-consultation-and-architecture-design') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  new Swiper(".iskok", {
    spaceBetween: 50,
    loop: false,
    navigation: {
      nextEl: ".swiper-button-next-team",
      prevEl: ".swiper-button-prev-team",
    },
    breakpoints: {
      576: { slidesPerView: 1 },
      768: { slidesPerView: 3 },
      992: { slidesPerView: 3 },
      1200: { slidesPerView: 4 }
    }
  });
});
</script>