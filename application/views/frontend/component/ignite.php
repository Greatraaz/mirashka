<div class="container">
   <div class="row mb-3 align-items-center">
       <div class="col-md-3">
          <h2 class="mb-0 heading-color">Ignite Services</h2>
       </div>
       <div class="col-md-7 ms-auto heading-color">
          <p>We are at the cutting edge of professional IT Services </p>
       </div>
       <div class="col-md-2">
          <div class="d-flex gap-3 position-relative justify-content-end">
             <a href="javascript:void(0);" class="btn btn-white border btn-icon rounded-circle mb-0 swiper-button-prev-team"><i class="bi bi-arrow-left"></i></a>
             <a href="javascript:void(0);" class="btn btn-white border btn-icon rounded-circle mb-0 swiper-button-next-team"><i class="bi bi-arrow-right"></i></a>
          </div>
       </div>
   </div>
   <div class="swiper iskok">
      <div class="swiper-wrapper">
         
         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/01.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('brand-strategy-and-activation') ?>">Brand Strategy & Activation</a></h6>
                  <p class="mb-0">Developing strategic approaches for brand growth and engagement with the audience.</p>
               </div>
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('brand-strategy-and-activation') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>

         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/02.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('branding-and-identity-design') ?>">Branding & Identity Design</a></h6>
                  <p class="mb-0">Crafting unique brand identities and designs to resonate with target audiences.</p>
               </div>
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('branding-and-identity-design') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         
         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">               
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/03.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>               
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('graphic-design') ?>">Graphic Design</a></h6>
                  <p class="mb-0">Creating visually engaging designs for a range of media and marketing materials.</p>
               </div>               
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('graphic-design') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         
         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">               
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/04.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>               
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('content-writing') ?>">Content Writing</a></h6>
                  <p class="mb-0">Writing compelling and engaging content to enhance brand messaging and communication.</p>
               </div>               
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('content-writing') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         
         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">               
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/05.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>               
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('animation-and-motion-graphics') ?>">Animation & Motion Graphics</a></h6>
                  <p class="mb-0">Designing animated visuals and motion graphics to bring ideas to life in creative formats.</p>
               </div>               
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('animation-and-motion-graphics') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>

         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">               
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/05.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>               
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('photography-and-visual-production') ?>">Photography & Visual Production</a></h6>
                  <p class="mb-0">Capturing high-quality photographs and producing visual content for diverse branding needs.</p>
               </div>               
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('photography-and-visual-production') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Service END -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  new Swiper(".iskok", {
    spaceBetween: 10,
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