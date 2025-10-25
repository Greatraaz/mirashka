<div class="container">
   <div class="row mb-3 align-items-center">
       <div class="col-md-3">
          <h2 class="mb-0 heading-color">Amplify Services</h2>
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
                  <h6><a href="<?=base_url('search-engine-optimization') ?>">Search Engine Optimization (SEO)</a></h6>
                  <p class="mb-0">Optimizing your website to rank higher in search engine results and attract organic traffic.</p>
               </div>
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('search-engine-optimization') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>

         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/02.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('social-media-marketing') ?>">Social Media Marketing (SMM)</a></h6>
                  <p class="mb-0">Managing and promoting your brand across various social media platforms to increase engagement.</p>
               </div>
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('social-media-marketing') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         
         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">               
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/03.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>               
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('mobile-ad-networking') ?>">Mobile Ad Networking</a></h6>
                  <p class="mb-0">Advertising on mobile networks to target users through apps, mobile websites, and other mobile platforms.</p>
               </div>               
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('mobile-ad-networking') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         
         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">               
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/04.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>               
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('performance-and-paid-marketing') ?>">Performance & Paid Marketing</a></h6>
                  <p class="mb-0">Driving targeted traffic and conversions through paid marketing campaigns and performance-based strategies.</p>
               </div>               
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('performance-and-paid-marketing') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         
         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">               
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/05.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>               
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('online-reputation-management') ?>">Online Reputation Management (ORM)</a></h6>
                  <p class="mb-0">Managing and improving your brand’s online reputation through various techniques and strategies.</p>
               </div>               
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('online-reputation-management') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>

         <div class="swiper-slide">
            <div class="card card-img-scale bg-body overflow-hidden">               
               <div class="card-img-scale-wrapper">
                  <img src="<?=base_url('assets/frontend/images/services/4by3/05.jpg') ?>" class="card-img-top img-scale" alt="service image">
               </div>               
               <div class="card-body p-4">
                  <h6><a href="<?=base_url('public-relations') ?>">Public Relations (PR)</a></h6>
                  <p class="mb-0">Building and managing your brand's public image and communication with media and stakeholders</p>
               </div>               
               <div class="card-footer border-top bg-body p-4">
                  <a class="icon-link icon-link-hover stretched-link p-0 m-0" href="<?=base_url('public-relations') ?>">Explore this service<i class="bi bi-arrow-right"></i> </a>
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