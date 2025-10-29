<style type="text/css">
.qaswep .card{
    cursor: pointer;
}
.iskok h6 {
    height: 48px;
}
.iskok p.mb-0 {
    height: 96px;
}

.slider-container {
    width: 82%;
    margin: 0 auto 0;
    border-radius: 20px;
    overflow: hidden;
    position: relative;
}

.carousel-inner {
    position: relative;
}

.carousel-item {
    height: 500px;
    position: relative;
    background-size: cover;
    background-position: center;
}

.carousel-caption {
    position: absolute;
    bottom: 20px;
    left: 20px;
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 15px;
    max-width: 400px;
    text-align: left;
}

.carousel-caption img {
    height: auto;
    width: 160px;
    object-fit: contain;
}

.carousel-caption p {
    font-weight: bold;
    font-size: 18px;
    color: #000;
}

.carousel-caption small {
    display: block;
    margin-bottom: 15px;
    color: #555;
}

.carousel-caption a {
    color: #e1a300;
    font-weight: bold;
    text-decoration: none;
}

.carousel-caption a:hover {
    text-decoration: underline;
}

.carousel-control-next,
.carousel-control-prev {
    top: 50%;
    transform: translateY(-50%);
    width: 5%;
}

.pawan {
    text-align: center;
    padding: 10px;
    background-color: #000;
    color: #fff;
    border-radius: 0 0 20px 20px;
    display: flex;
    justify-content: center;
    gap: 20px;
}

.pawan a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    position: relative;
    padding: 5px 10px;
    font-size: 16px;
}

.pawan a:hover,
.pawan a.active {
    color: #e1a300;
}

.pawan a.active::before {
    content: '•';
    position: absolute;
    left: -10px;
    color: #e1a300;
    font-size: 24px;
    top: -2px;
}
.carousel-control-next-icon {
    background-color: black;
    border-radius: 5px;
}
div#customCarousel {
    height: auto;
    width: auto;
}
.sliderh a {
    margin: auto;
    color: #ffffff;
    margin-top: 0;
}
h2.text-white.display-7.my-2 {
    line-height: 1;
}
.swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction {
    transform: translateY(-90px);
}
</style>
<section class="pt-0 pb-0">
    <div class="swiper overflow-hidden sliderh" data-swiper-options='{
            "effect": "fade",
            "speed": 1000,
            "autoplay": {
                "delay": 3000, 
                "disableOnInteraction": false
            },
            "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
            },
            "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
            }
        }'>

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card overflow-hidden min-vh-100 rounded-0" style="background:url(<?=base_url('assets/frontend/img/banner/establish.webp') ?>) no-repeat; background-size:cover; background-position:center;">
                    <div class="bg-overlay bg-linear-overlay"></div>
                    <div class="position-relative z-index-2 d-flex flex-column m-auto h-100 py-9 slup"> 
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10 text-center mt-auto">
                                    <span class="fbdvs">Ignite Your Brand Identity</span>
                                    <h2 class="text-white display-7 my-2">Turn raw ideas into <span class="text-primary">unforgettable, </span> coherent brand systems</h2>
                                    <p class="text-white mb-5">Strategy, story, and signature visuals aligned to launch brands that resonate, differentiate, and scale across platforms, markets, and moments worldwide.</p>
                                    <a href="<?=base_url('ignite')?>" class="custom-button">Learn More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card overflow-hidden min-vh-100 rounded-0" style="background:url(<?=base_url('assets/frontend/img/banner/ignite.webp') ?>) no-repeat; background-size:cover; background-position:center;">
                    <div class="bg-overlay bg-linear-overlay"></div>

                    <div class="position-relative z-index-2 d-flex flex-column m-auto h-100 py-9 slup"> 
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10 text-center mt-auto">
                                <span class="fbdvs">Establish Web, App, Software</span>
                                    <h2 class="text-white display-7 my-2">Build resilient platforms engineered for growth and reliability</h2>
                                    <p class="text-white mb-5">From UX to cloud backends, we deliver secure code, clean interfaces, and integrations that perform, scale smoothly, and reduce debt.</p>
                                    <a href="<?=base_url('establish')?>" class="custom-button">Learn More <i class="fa fa-arrow-right"></i></a></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card overflow-hidden min-vh-100 rounded-0" style="background:url(<?=base_url('assets/frontend/img/banner/amplify.webp') ?>) no-repeat; background-size:cover; background-position:center;">
                    <div class="bg-overlay bg-linear-overlay"></div>
                    <div class="position-relative z-index-2 d-flex flex-column m-auto h-100 py-9 slup"> 
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10 text-center mt-auto">
                                    <span class="fbdvs">Amplify Marketing and PR</span>
                                    <h2 class="text-white display-7 my-2">Turn attention into <span class="text-primary">measurable demand </span> across channels today</h2>
                                    <p class="text-white mb-5">SEO, social, PR, reviews, and GMB combine to grow reach, strengthen trust, and convert intent into revenue with efficiency sustainably.</p>
                                    <a href="<?=base_url('amplify')?>" class="custom-button">Learn More <i class="fa fa-arrow-right"></i></a></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card overflow-hidden min-vh-100 rounded-0" style="background:url(<?=base_url('assets/frontend/img/banner/evolve.webp') ?>) no-repeat; background-size:cover; background-position:center;">
                    <div class="bg-overlay bg-linear-overlay"></div>

                    <div class="position-relative z-index-2 d-flex flex-column m-auto h-100 py-9 slup"> 
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10 text-center mt-auto">
                                <span class="fbdvs">Evolve Operations with Outsourcing</span>
                                    <h2 class="text-white display-7 my-2">Extend your team with <span class="text-primary">specialized, on-demand talent</span> that delivers</h2>
                                    <p class="text-white mb-5">Designers, developers, and marketers on tap; process automation, governance, and playbooks that cut costs while accelerating consistent, quality delivery cycles.</p>
                                    <a href="<?=base_url('evolve')?>" class="custom-button">Learn More <i class="fa fa-arrow-right"></i></a></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card overflow-hidden min-vh-100 rounded-0" style="background:url(<?=base_url('assets/frontend/img/banner/secure.webp') ?>) no-repeat; background-size:cover; background-position:center;">
                    <div class="bg-overlay bg-linear-overlay"></div>

                    <div class="position-relative z-index-2 d-flex flex-column m-auto h-100 py-9 slup"> 
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10 text-center mt-auto">
                                    <span class="fbdvs">Secure Brand, Data, Narrative</span>
                                    <h2 class="text-white display-7 my-2">Protect systems and <span class="text-primary">reputation with proactive defense </span>and response</h2>
                                    <p class="text-white mb-5">VAPT, cybersecurity, and crisis playbooks close gaps fast, harden posture, and restore trust with disciplined monitoring, alerts, and audits continuously.</p>
                                    <a href="<?=base_url('secure')?>" class="custom-button">Learn More <i class="fa fa-arrow-right"></i></a></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card overflow-hidden min-vh-100 rounded-0" style="background:url(<?=base_url('assets/frontend/img/banner/accelerate.webp') ?>) no-repeat; background-size:cover; background-position:center;">
                    <div class="bg-overlay bg-linear-overlay"></div>

                    <div class="position-relative z-index-2 d-flex flex-column m-auto h-100 py-9 slup"> 
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10 text-center mt-auto">
                                <span class="fbdvs">Accelerate Performance and ROI</span>
                                    <h2 class="text-white display-7 2">Scale revenue with experimentation, automation, and smarter analytics</h2>
                                    <p class="text-white mb-5">CRO, funnels, hyperlocal campaigns, and dashboards optimize journeys, maximize LTV, and concentrate spend on channels proving demonstrable, incremental growth reliably.</p>
                                    <a href="<?=base_url('accelerate')?>" class="custom-button">Learn More <i class="fa fa-arrow-right"></i></a></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <div class="swiper-pagination swiper-pagination-line position-absolute bottom-0 mb-3 "></div>
        <div class="swiper-button-next position-absolute top-50 end-0 translate-middle-y z-index-3 d-none d-sm-block">
            <div class="nav-button-circle">
                <i class="fa fa-arrow-right"></i>
            </div>
        </div>
        <div class="swiper-button-prev position-absolute top-50 start-0 translate-middle-y z-index-3 d-none d-sm-block">
            <div class="nav-button-circle">
                <i class="fa fa-arrow-left"></i>
            </div>
        </div>
    </div>        
</section>


<style type="text/css">
.card-body-custom {
 display: flex;
 align-items: center;
 background-color: #f8f9fa;
}

.card-image-container {
    flex: 0 0 40%;
    max-width: 40%;
    
}
.card-text-container {
    flex: 1;
    padding: 1rem 2rem;

}
.pyscans .card-img-top {
    width: 100%;
    height: 357px;
    object-fit: cover;
    border-radius: 1rem 0 0;
}

.tabs-container {
 margin-top: -3rem !important;
 position: relative;
 background: #f8f9fa;
    margin-right:30px;
    margin-left:30px;
}

.containerpawan {
    max-width: 100%;
    border: none;
    border-radius: 2rem;
    box-shadow: 0 34px 44px 0 rgba(29, 20, 99, .2);
    transition: box-shadow 0.3s ease-in-out;
    margin-top: -80px !important;
    z-index: 1;
}

.custom-tabs {
 display: flex;
 justify-content: space-around;
 border-bottom: none;
 padding: 0;
}

.custom-tabs .nav-item {
 flex: 1;
    padding-top: 20px;
}

.custom-tabs .nav-link {
    display: block;
    text-align: center;
    padding: 0.5rem 1rem;
    color: #706c6c;
    border: none;
    margin: 0;
    font-size: 19px;
    font-weight: 700;
}

.custom-tabs .nav-link.active {
 background-color: #f8f9fa;
 color: #025d4c;
 text-decoration: underline #e1a300;
 text-decoration-thickness: 2px;
 text-underline-offset: 2px;
}

.custom-tabs .nav-link.active::before {
 content: '';
 display: inline-block;
 width: 8px;
 height: 8px;
 background-color: #e59b0a;
 border-radius: 50%;
 margin-right: 8px;
 vertical-align: middle;
}

.custom-tabs .nav-link:hover {
 color: #000000;
}   
.fbdvs{
    background: linear-gradient(to right, #025d4c, #04a57d);
    color: #fff;
    font-size: 15px;
    font-weight: 400;
    padding: 3px 25px;
    border-radius: 32px;
    width: fit-content;
}
.custom-button {
    border: 2px solid;
    padding: 10px 25px;
    border-radius: 49px;
    color: #000;
    font-weight: 700;
    margin-top: 15px;
    display: block;
    width: fit-content;
}
.containerpawan small{
    display: block;
    font-size: 10px !important;
}
h5.card-title.custom-heading {
    margin: 22px 0;
    text-align: justify;    
}
.card.cs p {
    text-align: justify;
}
</style>
<div class="containerpawan tabs-container">
   <ul class="nav nav-tabs custom-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
         <a class="nav-link active" id="ignite-tab" data-bs-toggle="tab" href="#ignite" role="tab" aria-controls="ignite" aria-selected="true">Ignite <small>Brand Identity & Activation</small></a>
      </li>
      <li class="nav-item" role="presentation">
         <a class="nav-link" id="establish-tab" data-bs-toggle="tab" href="#establish" role="tab" aria-controls="establish" aria-selected="false">Establish <small>Web, App & Software</small></a>
      </li>
      <li class="nav-item" role="presentation">
         <a class="nav-link" id="amplify-tab" data-bs-toggle="tab" href="#amplify" role="tab" aria-controls="amplify" aria-selected="false">Amplify <small>Digital Marketing & PR</small></a>
      </li>
      <li class="nav-item" role="presentation">
         <a class="nav-link" id="evolve-tab" data-bs-toggle="tab" href="#evolve" role="tab" aria-controls="evolve" aria-selected="false">Evolve <small>Outsourcing & Digital Operations</small></a>
      </li>
      <li class="nav-item" role="presentation">
         <a class="nav-link" id="secure-tab" data-bs-toggle="tab" href="#secure" role="tab" aria-controls="secure" aria-selected="false">Secure <small>Security & ORM</small></a>
      </li>
      <li class="nav-item" role="presentation">
         <a class="nav-link" id="accelerate-tab" data-bs-toggle="tab" href="#accelerate" role="tab" aria-controls="accelerate" aria-selected="false">Accelerate <small>Performance & ROI Marketing</small></a>
      </li>
   </ul>
   <div class="tab-content mt-4 mb-50 pyscans" id="myTabContent">
      <div class="tab-pane fade show active" id="ignite" role="tabpanel" aria-labelledby="ignite-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h6 class="fbdvs">Ignite — Brand Identity & Activation</h6>  
                  <h5 class="card-title custom-heading">Light the Brand Fuse - From whisper to icon, your story catches fire.</h5>
                  <p>IGNITE is Mirashka’s brand-foundation service: we define your positioning and narrative, craft logo and design system, set voice and messaging, and prepare assets—ensuring you resonate, stand apart, and remain consistent across channels, markets, and moments.</p>
                  <a href="<?=base_url('ignite')?>" class="custom-button">Learn More <i class="fa fa-arrow-right"></i></a>
               </div>
               <div class="card-image-container">
                  <img src="https://s7d4.scene7.com/is/content/hitachivantarastage/homepage-hero-cloud-gif-rectangle" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="establish" role="tabpanel" aria-labelledby="establish-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h6 class="fbdvs">Establish — Web, App & Software</h6>
                  <h5 class="card-title custom-heading">Build Your Digital Bedrock-Beautiful interfaces atop bulletproof, scalable engineering that lasts.</h5>
                  <p>ESTABLISH is Mirashka’s build segment: from UX flows to cloud backends, we ship secure code, clean interfaces, and reliable integrations that perform at scale, harden uptime, simplify maintenance, and actively reduce technical debt.</p>
                  <a href="<?=base_url('establish')?>" class="custom-button">Learn More <i class="fa fa-arrow-right"></i></a></a>
               </div>
               <div class="card-image-container">
                  <img src="https://s7d9.scene7.com/is/image/hitachivantara/panel2-tab2-hitachi-iq-rectangle:tabsimage?fmt=webp" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="amplify" role="tabpanel" aria-labelledby="amplify-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h6 class="fbdvs">Amplify — Digital Marketing & PR</h6>
                  <h5 class="card-title custom-heading">Make The Market Listen - Turn attention into demand, and demand into momentum.</h5>
                  <p>AMPLIFY is Mirashka’s demand-generation segment: SEO, social, PR, reviews, and GMB operate as one system to expand reach, build authority, and convert intent into revenue—efficiently, measurably, and sustainably across markets.</p>
                  <a href="<?=base_url('amplify')?>" class="custom-button">Learn More <i class="fa fa-arrow-right"></i></a></a>
               </div>
               <div class="card-image-container">
                  <img src="https://s7d9.scene7.com/is/image/hitachivantara/panel2-tab1-hitachi-iq-rectangle:tabsimage?fmt=webp" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="evolve" role="tabpanel" aria-labelledby="evolve-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h6 class="fbdvs">Evolve — Outsourcing & Digital Operations</h6>
                  <h5 class="card-title custom-heading">Scale Without The Overheads- Plug in experts, processes, and automation on demand.</h5>
                  <p>EVOLVE is Mirashka’s operations & outsourcing segment: on-demand designers, developers, and marketers powered by automation, governance, and playbooks—cutting costs, lifting velocity, and delivering consistent, high-quality output with clear SLAs and continuous improvement.</p>
                  <a href="<?=base_url('evolve')?>" class="custom-button">Learn More <i class="fa fa-arrow-right"></i></a></a>
               </div>
               <div class="card-image-container">
                  <img src="https://s7d9.scene7.com/is/image/hitachivantara/rwth-aachen-university-square:tabsimage?fmt=webp" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="secure" role="tabpanel" aria-labelledby="secure-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h6 class="fbdvs">Secure — Security & ORM</h6>
                  <h5 class="card-title custom-heading">Defend What Matters Most- Close gaps fast, protect data, preserve reputation everywhere.</h5>
                  <p>SECURE is Mirashka’s protection & reputation segment: VAPT, cybersecurity controls, IAM hardening, backups, and real-time monitoring—plus ORM listening and crisis playbooks—to reduce risk, protect data, and preserve brand trust with auditable, rapid response.</p>
                  <a href="<?=base_url('secure')?>" class="custom-button">Learn More <i class="fa fa-arrow-right"></i></a></a>
               </div>
               <div class="card-image-container">
                  <img src="https://s7d9.scene7.com/is/image/hitachivantara/rwth-aachen-university-square:tabsimage?fmt=webp" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="accelerate" role="tabpanel" aria-labelledby="accelerate-tab">
         <div class="card cs">
            <div class="card-body-custom">
               <div class="card-text-container">
                  <h6 class="fbdvs">Accelerate — Performance & ROI Marketing</h6>
                  <h5 class="card-title custom-heading">Squeeze More From Spend- Experiment, automate, and scale profitable growth intelligently today.</h5>
                  <p>ACCELERATE is Mirashka’s performance & ROI segment: CRO, full-funnel experiments, hyperlocal campaigns, and live dashboards that optimize journeys, lift LTV, and focus spend on channels proving clear, incremental growth—repeatably, profitably, and at the pace your market demands.</p>
                  <a href="<?=base_url('accelerate')?>" class="custom-button">Learn More <i class="fa fa-arrow-right"></i></a></a>
               </div>
               <div class="card-image-container">
                  <img src="https://s7d9.scene7.com/is/image/hitachivantara/rwth-aachen-university-square:tabsimage?fmt=webp" class="card-img-top" alt="Card Image 1">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<section class="pb-0">
   <div class="container">
      <div class="row g-4 align-items-xl-center">
         <!-- About image START -->
         <div class="col-lg-7">
            <div class="row pe-xl-5">
               <div class="col-sm-6">
                  <!-- About image -->
                  <img src="<?=base_url('assets/frontend/images/about/02.jpg') ?>" class="rounded" alt="about-img">
                  <!-- SVG decoration -->
                  <figure class="text-end me-3 mt-n3">
                     <svg class="fill-primary" width="106px" height="96px" viewBox="0 0 106 96" style="enable-background:new 0 0 106 96;" xml:space="preserve">
                        <path d="M104.7,50.4c0,0.1-0.1,0.4-0.3,0.7c0.1,0.1,0.2,0.1,0.4,0.2c0.1,0.3,0.5,0.6,0.3,1c-0.2,0.4,0.4,0.7-0.1,1 c0.1,0.7-0.4,1.3-0.8,1.8c-0.3,0.5-0.4,1.1-0.9,1.5c-0.4,0.4-0.6,0.9-1,1.4c-0.3,0-0.5,0-0.9,0c0.1,0.2,0.1,0.4,0.2,0.6 c-0.1,0.1-0.2,0.3-0.4,0.5c0.1,0.3,0.2,0.6,0.3,1c-0.2,0.2-0.3,0.4-0.5,0.6c0.1,0,0.3,0.1,0.5,0.2c-0.3,0.2-0.5,0.3-0.7,0.5 c0,0.1,0.1,0.1,0.2,0.2c-0.7,0.3-1.4-0.4-2.2-0.1c-0.5,0.4-0.9,1.1-1.6,1.4c-0.3,0.1,0,0.6-0.5,0.6c-0.2,0,0,0.6-0.5,0.4 c-0.2,0.5-0.6,0.7-1,1.1c-0.3,0.3-0.6,0.6-0.8,1c-0.2,0.3-0.4,0.6-0.6,0.9c-0.2,0.3-0.4,0.5-0.6,0.8c-0.1,0.2-0.1,0.6-0.3,0.8 c-0.2,0.1-0.4,0.3-0.5,0.6c-0.2-0.1-0.4-0.2-0.5-0.3c-0.5,0.2-0.9,0.4-1.4-0.1v-1.2c-0.9-0.5-1.8-0.9-2.2-2.1c0-0.4-0.1-0.9,0.2-1.3 c-0.5-1-0.1-1.9,0.4-2.8c0.6-1.1,1.4-1.9,2.3-2.8c-0.5-0.8-1.1-1.6-1.6-2.4c-0.3-0.6-0.7-1.2-0.7-1.8c0-0.7-0.2-1.4,0.2-2.1 c0.2-0.3,0-0.8,0.2-1.2c0.1-0.2,0.2-0.5,0.4-0.7c0.1-0.1,0.1-0.3,0.2-0.7c0.2-0.2,0.7-0.4,0.7-0.7c0.1-0.5,0.8-0.3,0.8-0.9 c0.2,0.1,0.2,0.2,0.3,0.3c0.3-0.1,0.6-0.2,0.9-0.3c0.1,0.2,0.2,0.4,0.3,0.6c-0.2,0.4-0.5,0.9-0.8,1.4c0.6-0.1,1-0.1,1.4-0.1 c0.2,0.2,0.2,0.2,0.3,0.3c-0.2,0.3-0.3,0.6-0.5,1c0.4,0,0.6,0.1,1,0.1c-0.1,0.4-0.2,0.8-0.3,1.2c-0.1,0.1-0.3,0.3-0.5,0.4 c0.1,0.1,0.1,0.2,0.2,0.2c0.1-0.1,0.3-0.2,0.5-0.3c0.1,0.2,0.1,0.3,0.1,0.4c-0.3,0.2-0.6,0.3-1,0.5c0.2,0.1,0.3,0.1,0.5,0.2 c-0.3,0.3-0.5,0.5-0.8,0.8c0.4,0.3,0.7,0.6,1.1,0.9c0.6,0.1,1-0.1,1.4-0.5c1-0.9,2.1-1.6,3.1-2.5c1-0.9,2.1-1.8,2.8-3 c0.2-0.3,0.5-0.5,0.7-0.7h1.2c0.1,0.1,0.2,0.2,0.3,0.4c-0.1,0.4-0.3,0.8-0.4,1.2c0.4-0.1,0.7-0.2,1-0.3 C104.4,50,104.5,50.1,104.7,50.4"/>
                        <path d="M33,74.2c-0.4,0.1-0.7,0.2-1.1,0.3c0.1-0.2,0.2-0.3,0.2-0.5c-0.3-0.4-0.6-0.7-1.1-0.7c0-0.2-0.1-0.3-0.1-0.4H30 c-0.1-0.1-0.2-0.1-0.2-0.2c-0.1-0.4-0.2-0.9-0.4-1.3c-0.3-0.4-0.2-0.9-0.2-1.3c0-0.3,0.1-0.7,0.2-1c0.3-1.2,0.8-2.4,1.4-3.5 c0.4-0.7,0.8-1.3,1.2-2c0.4-0.6,1-1.2,1.4-1.8c-0.1-0.1-0.3-0.2-0.4-0.3c-1.5-0.9-2.8-2-4-3.2c-0.6-0.6-0.6-1.4-0.7-2.1 c-0.1-0.3,0-0.6,0-0.9c0.3-0.6,0.9-0.6,1.5-0.9c0.2,0.4,0.4,0.7,0.6,1.1c0,0,0.1-0.1,0.2-0.2c0.1,0.1,0.2,0.2,0.3,0.3 c0.2,0.7,0.8,1,1.4,1.3c1.2,0.6,2.4,1.2,3.7,1.8c0.3-0.3,0.6-0.8,1-1c0.4-0.2,0.4-0.9,1-0.8c-0.1-0.1-0.2-0.2-0.2-0.3 c0.2-0.1,0.4-0.3,0.7-0.5c0.1-0.2,0.2-0.5,0.3-0.8c0.2,0,0.4,0,0.6,0c-0.1-0.1-0.2-0.2-0.3-0.3c0.5-0.1,0.5-0.6,0.8-0.8 c0.3-0.3,0.5-0.7,0.8-1.1c0.1,0,0.1,0.1,0.3,0.2c0.1-0.1,0.1-0.3,0.2-0.4c0.1,0.1,0.2,0.1,0.3,0.2c0.1-0.8,0.6-1.4,1.1-2 c0.5-0.6,0.9-1.3,1.7-1.7c0.1,0.1,0.2,0.2,0.4,0.3c-0.3,0.6-0.6,1.2-1.3,1.5v0.9c0.2,0,0.3,0,0.3-0.1c0.1-0.2,0.2-0.5,0.3-0.6 c0.5-0.4,1-0.8,1.5-1.3c0,0.4,0.1,0.7,0.1,1c-0.2,0.1-0.3,0.1-0.4,0.2c0,0,0.1,0.1,0.1,0.1c0.3-0.1,0.5-0.1,0.9-0.2 c0.1,0.2,0.2,0.4,0.3,0.6c-0.1,0.1-0.1,0.2-0.2,0.2c0,0.3,0.4,0.6,0.1,1c-0.1-0.1-0.2-0.2-0.2-0.2c0,0.1-0.1,0.1-0.1,0.2 c0,0.1,0.1,0.3,0.2,0.4c-0.1,0.6-0.5,1-0.9,1.3c-0.4,0.4-0.8,0.7-1.4,1.1c0.2,0.1,0.4,0.2,0.6,0.3c-0.1,0.2-0.2,0.4-0.3,0.6 c0,0.1,0.1,0.1,0.2,0.3c-0.2,0-0.5,0.1-0.7,0.1c0.1,0.2,0.1,0.4,0.2,0.6h-0.8c-0.1,0.3-0.3,0.5-0.4,0.8c0.1,0.1,0.2,0.2,0.3,0.3 c-0.2,0-0.4,0.1-0.7,0.1c0.1,0.2,0.1,0.4,0.2,0.6c-0.2,0-0.4,0.1-0.7,0.1c0.1,0.2,0.1,0.4,0.3,0.7c-0.3-0.1-0.5-0.2-0.8-0.3 c-0.1,0.2-0.2,0.5-0.4,0.7c0,0.1,0.1,0.2,0.1,0.2c0.1,0,0.2,0,0.3,0.1c0.3,0.2,0.4,0.6,0.8,0.8c0.4,0.2,0.5,0.6,0.8,0.9 c0.2,0.3,0.4,0.5,0.3,0.9c0,0.1,0.1,0.3,0.2,0.4c-0.1,0.1-0.1,0.2-0.3,0.4c-0.3,0-0.5,0.4-1.1,0.2c-1-0.4-2-0.7-3-0.8 c-0.1,0-0.1-0.1-0.2-0.2c-0.3,0.3-0.6,0.7-1,1.1c0,0,0,0.2,0,0.4c-0.2,0-0.4,0.1-0.7,0.1c0.2,0.3,0.4,0.5,0.6,0.9 c-0.3-0.1-0.4-0.1-0.7-0.2c0,0.1-0.1,0.2-0.2,0.3c0.1,0.4,0,0.6-0.4,0.8c-0.1,0.5-0.2,0.9-0.4,1.3c-0.2,0.1-0.3,0.1-0.4,0.2L36,69 c-0.3,0.3-0.7,0.5-1,0.8c-0.2,0.3-0.3,0.7-0.5,1.1c0,0,0.1,0.1,0.2,0.3c-0.2,0.3-0.5,0.5-0.7,0.8c0.1,0.1,0.2,0.2,0.3,0.3 c-0.2,0.2-0.3,0.4-0.5,0.6v0.7C33.4,73.7,33.2,74,33,74.2"/>
                        <path d="M60.7,78.7c0.5,0.6,0.5,0.6,1.2,0.3c0,0.2,0,0.4,0.1,0.5c0,0.1,0.1,0.2,0.2,0.3C62.1,79.9,62,80,62,80 c0.2,0.1,0.3,0.1,0.6,0.3c-0.3,0.4-0.5,0.7-0.7,1.1c0.3,0.6-0.3,0.7-0.4,1c-0.1,0.5-0.7,0.6-0.7,1.1c0,0.6-0.6,0.6-0.9,1 c-0.2,0.3-0.6,0.5-0.7,0.9c0.1,0.2,0.2,0.3,0.3,0.5c-0.3,0.2-0.6,0.4-0.9,0.5l-0.7,0.3c-0.2,0.3-0.4,0.5-0.7,0.8v0.2 c-0.7,0.5-1.4,1-2.2,1.6c0.2,0.1,0.4,0.2,0.6,0.3c-0.3,0.4-0.6,0.9-1,1.3c0.9,0.3,1.7,0.6,2.5,0.9c-0.1,0.2-0.2,0.3-0.2,0.5 c0.4,0.1,0.7,0.3,1.1,0.4v0.5c0.3,0.2,0.5,0.4,0.7,0.6c0,0.3,0,0.5,0,0.8l0.4,0.4l-1,0.9c-0.2,0.3-0.5,0.2-0.8,0 c-0.1-0.1-0.2-0.1-0.3-0.1c-1.2,0-2.2-0.4-3.3-0.8c-0.8-0.3-1.5-0.7-2.3-1c-0.2,0.2-0.6,0.4-0.6,0.8c-0.5,0.1-0.9,0.2-1.4,0.3 c-0.2-0.2-0.4-0.4-0.6-0.6c0.1-0.1,0.1-0.2,0.3-0.3c-0.1-0.2-0.2-0.5-0.3-0.6c-0.3,0.1-0.7,0.1-1,0.1c-0.2-0.3-0.3-0.6-0.5-0.9 c-0.1,0.1-0.1,0.1-0.1,0.1c-0.2-0.3-0.5-0.5-0.8-0.9c0.1-0.8-0.4-1.7-0.3-2.7c0-0.2-0.1-0.5-0.3-0.7c-0.7-0.6-0.7-1.5-1-2.3 c-0.1-0.3-0.2-0.7-0.3-1c0-0.6-0.1-1.1,0-1.7c0.2-0.9,0.3-1.8,1.3-2.1c0.3-0.1,0.7-0.1,1.1-0.2v1.8c0.4-0.2,0.6-0.4,1-0.7 c0.1,0.2,0.1,0.3,0.2,0.5c0.1,0,0.1-0.1,0.2-0.1v1c0.2-0.1,0.3-0.2,0.5-0.2c0.5,0.4,0.5,1,0.4,1.5c0.2,0.1,0.3,0.1,0.5,0.2 c-0.1,0.2-0.2,0.5-0.3,0.8c0.1,0,0.2,0,0.2,0c0.1-0.1,0.1-0.2,0.2-0.2c1-0.4,1.5-1.4,2.4-1.7c0.2-0.7,0.9-0.9,1.4-1.3 c0.4-0.5,1.1-0.8,1.6-1.2c0.5-0.4,0.8-1.1,1.5-1.3c0.4-0.8,1.1-1.4,1.9-1.9c0-0.6,0.7-0.6,0.7-1.2h1c0.1,0.1,0.2,0.2,0.3,0.3 c-0.5,0.2-0.7,0.7-1,1.2c0.7,0.1,1.1-0.7,1.7-0.3C61.1,78.5,61,78.6,60.7,78.7"/>
                        <path d="M58.1,66.7c-0.1-0.5,0.7-0.6,0.3-1.1c-0.1,0.1-0.2,0.2-0.2,0.2c0,0-0.1-0.1-0.1-0.1c-0.1-0.6-0.1-1.1,0.3-1.5 c0.4-0.5,0.9-1,1.3-1.5c0.1-0.2,0.2-0.4,0.3-0.6c-0.2-0.5-0.5-1.1-0.7-1.6c-0.3-0.6-0.3-1.2-0.5-1.8c-0.2-0.3,0.2-0.9,0.2-1.2 c-0.1-0.4-0.4-0.8,0-1.2c0-1.1,0.8-1.8,1.4-2.6h1.9c0.1,0.1,0.2,0.2,0.4,0.4c-0.3,0.4-0.6,0.7-0.9,1.1c0,0.1,0.1,0.3,0.2,0.5 c0.1,0,0.3,0.1,0.4,0c0.3-0.3,0.7-0.2,1-0.2c0.1,0.3,0.2,0.5,0.3,0.7c-0.2,0.2-0.3,0.4-0.6,0.8c0.4,0.1,0.7,0.1,1,0.1v1.1 c0.8,0,0.8-0.9,1.5-0.9c0.3-0.4,0.7-0.8,1.1-1.1c0.4-0.4,0.9-0.8,1.3-1.3c0.4-0.4,0.8-0.8,1.1-1.2c0.4-0.4,0.7-0.9,0.9-1.2 c0.5-0.2,0.7-0.3,1.1-0.4c0.1,0.2,0.3,0.3,0.3,0.5c0,0.1-0.1,0.3-0.2,0.5c-0.1,0.2-0.2,0.3-0.2,0.6c0.3-0.1,0.7-0.3,1-0.4 c0.2,0.4,0.4,0.8,0.7,1.4c0,0,0,0.2,0,0.4c0,0.2,0.1,0.3,0.2,0.5c0,0.1-0.1,0.2-0.2,0.4c0.1,0.1,0.2,0.2,0.3,0.3 c-0.7,1-1.2,2.1-2,3.1c-0.6,0.9-0.5,0.9-1,1.2c0.1,0.1,0.1,0.2,0.2,0.2c-0.9,1-1.8,2-2.7,3v0.4c0.7,0.5,1.4,0.9,2.1,1.3 c-0.1,0.2-0.2,0.3-0.3,0.5c0.3,0.2,0.5,0.7,1,0.5c0.1,0.2,0.2,0.4,0.3,0.6c-0.1,0.1-0.1,0.2-0.3,0.4c0.3,0.3,0.5,0.5,0.8,0.8 c-0.1,0.3-0.2,0.5-0.3,0.8c0.1,0.1,0.2,0.3,0.2,0.4c0,0.1-0.1,0.2-0.1,0.2c-0.1,0.1-0.3,0.1-0.4,0.2c-0.5,0.5-0.6,0.6-1.2,0.4 c-0.8-0.3-1.6-0.4-2.4-0.8c-1-0.5-1.8-1.2-2.8-1.9c-0.4,0.3-0.9,0.7-1.3,1.2c-0.4,0.5-1,0.8-1.8,1.1c0.1-0.2,0.2-0.3,0.3-0.5 c-0.5,0.1-0.9,0.2-1.3,0.3l-0.1-0.1c0.3-0.2,0.5-0.4,0.8-0.6l-0.4-0.4h-0.8c-0.1-0.3-0.2-0.5-0.4-0.9h-0.9 C58.3,67.2,58.2,66.9,58.1,66.7"/>
                        <path d="M63,44.6c-0.4,0.1-0.7,0.2-1.2,0.3c-0.5-0.4-1.1-0.8-1.7-1.2c-0.7-0.5-1.4-1.2-2.2-1.5 c-0.2-0.1-0.4-0.1-0.7-0.2c-0.3-0.5-0.4-1.4-1.3-1.3c-0.4-0.4-0.5-1.1-1.1-1.1c-0.2-0.4-0.3-0.8-0.6-1c-1.2-1.1-2.1-2.5-2.9-4.2 c-0.1-0.5-0.1-1.2-0.2-1.9c-0.2-1.1,0.4-2,1.3-2.6c0.3-0.2,0.4-0.5,0.8-0.5c0.3,0,0.6-0.1,1-0.2c0.1,0.1,0.3,0.2,0.5,0.4 c-0.3,0.5-0.9,0.9-1,1.6c0.7,0.2,1-0.6,1.7-0.6c0.1,0.1,0.2,0.2,0.4,0.3c-0.3,0.4-0.4,0.6-0.7,1.1c0.5-0.2,0.8-0.2,1-0.3 c0.3-0.4,0.8-0.6,1.2-1.1c0.3-0.4,0.7-0.8,1.2-1.1c0.7-0.4,1.2-1.1,1.8-1.6c0.9-0.7,1.8-1.6,2.8-2.2c0.4-0.2,0.7-0.7,1-1 c0.3-0.3,0.8-0.5,0.9-0.9h1.5v1c0,0-0.2,0.2-0.4,0.4c0.2,0,0.4-0.1,0.6-0.1c0.2,0,0.4-0.1,0.7-0.2c0,0.7,0,1.4,0.5,1.8 c-0.1,0.1-0.2,0.2-0.3,0.4c0.2,0.1,0.3,0.2,0.7,0.4c-0.4,0.1-0.5,0.1-0.6,0.2c0.1,0.1,0.1,0.3,0.2,0.4c0,0.1,0,0.3,0,0.4 c-0.4,0.6-0.8,1.1-1.3,1.8c-0.1,0-0.3,0-0.5,0.1c0.1,0.1,0.1,0.2,0.2,0.3c-0.1,0.2-0.1,0.3-0.2,0.5c-1,0-1,1-1.6,1.4 c0.1,0.2,0.2,0.3,0.2,0.3c-0.4,0.4-0.8,0.8-1.2,1.2c0,0,0,0,0,0c-0.2,0.2-0.4,0.4-0.6,0.6c-0.1,0-0.1-0.1-0.2-0.1V35 c-0.1-0.1-0.2-0.2-0.4-0.3c0,0.3,0.1,0.4,0.1,0.7c-0.3,0.4-0.6,0.8-1,1.3c-0.2-0.1-0.3-0.2-0.4-0.3c-0.4,0.5-0.8,1-1.2,1.5 c0.2,0.1,0.3,0.2,0.5,0.3c-0.2,0.3-0.4,0.5-0.5,0.7c0,0.1,0,0.2,0.1,0.2c0.7,0.8,1.5,1.5,2,2.3C62.6,42.3,63.4,43.3,63,44.6"/>
                        <path d="M78.7,28.3c0.1-0.1,0.1-0.1,0.2-0.2c0-0.1-0.1-0.1-0.1-0.2c-0.3-0.3-0.7-0.5-0.9-0.8c-0.2-0.3-0.5-0.5-0.7-0.7 c-0.3-0.3-0.7-0.8-0.7-1.2c0-0.7-0.1-1.4,0.1-2.2c0.3-1.3,1-2.3,1.9-3.2c1.1-1.1,2.3-2.3,3.5-3.5c-0.5-0.4-0.5-1.1-1.2-1.3 c-0.3-0.6-0.6-1.2-0.9-1.8c-0.3-0.5-0.2-1.1-0.2-1.7c0-0.4,0-0.8,0-1.2c0.4-0.5,0.8-1,1.1-1.4h1.9c-0.3,0.5-0.6,1-0.8,1.4 c0.7,0.5,1-0.6,1.6-0.3c0.4,0.5-0.3,0.8-0.6,1.3c0.4-0.1,0.7-0.2,1-0.2c0.2,0.5,0.1,1-0.2,1.5c0.2,0.1,0.3,0.1,0.5,0.2 c0.1,0.1-0.1,0.2-0.2,0.4c0.2,0.3,0.4,0.6,0.7,1c1.9-2,4.2-3.3,5.7-5.5h1.1c-0.1,0.4-0.2,0.7-0.3,1.1c0.3-0.1,0.6-0.2,0.9-0.3v0.9 c0.2,0,0.3,0.1,0.4,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0,0.2,0,0.3c0.2,1.2-0.4,2.1-1,3c-0.7,1-1.4,1.8-2.2,2.8c0.6,0.7,1.4,1,2.2,1.6 c0,0.1,0,0.3,0.1,0.5c0.2,0.3,0.5,0.5,0.6,0.8c0.2,0.7,0.7,1.4,0.4,2.3c-0.1,0-0.3,0.1-0.5,0.2c-0.2,0.1-0.4,0.2-0.6,0.2 c-0.3-0.3-1-0.2-0.9-0.8c-0.7-0.2-1.3-0.4-1.9-0.5c-0.1-0.2-0.3-0.4-0.4-0.7h-1.2c0-0.1-0.1-0.2-0.1-0.4c-0.5-0.4-0.8,0.1-1.1,0.1 c-0.4,0.4-0.7,0.8-1,1.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1,0.2-0.3,0.4-0.5,0.6c0,0,0,0,0.1,0.2c-0.5,0.1-0.6,0.7-0.8,1.1 c-0.2-0.1-0.3-0.2-0.5-0.3c0,0.2-0.1,0.4-0.1,0.6c-0.1,0-0.2,0-0.4,0.1c0,0.5-0.1,1-0.8,0.9c-0.2,0.3-0.6,0.6-0.6,0.8 c0.1,0.7-0.5,1-0.7,1.6c-0.1,0.7-0.1,0.7,0.1,1.1c-0.5,0.4-1,0.7-1.7,0.8C78.9,28.5,78.8,28.4,78.7,28.3"/>
                        <path d="M12.6,15.5c-0.3,0-0.5,0.1-0.7,0.1c0.1,0.1,0.2,0.2,0.3,0.4c-0.3,0.5-0.8,0.8-1.2,1.3l0.2,0.2 c-0.3,0.2-0.6,0.5-0.8,0.6c-0.1,0.4,0.2,0.8-0.3,1c0.4,0.3,0.8,0.5,1.2,0.8c1.2,0.8,2.5,1.5,3.4,2.6c0.6,0.6,1.1,1.2,1.1,2.1 c0,0.2,0.2,0.3,0.3,0.5c-0.3,0.2-0.7,0.4-1.1,0.7c-2.3-1.3-4.6-2.5-6.7-4.2c-0.2,0.1-0.5,0.2-0.5,0.3c-0.2,0.7-0.7,1.2-1.2,1.6 c-0.1,0.1,0,0.2-0.1,0.3c-0.2,0-0.4,0-0.7,0.1C6,24.1,6,24.2,6.1,24.5c-0.4,0.4-0.8,0.9-0.9,1.6c-0.1,0.4-0.5,0.7-0.8,1.2v2.5 c-0.2,0-0.4,0-0.6,0c0,0.1-0.1,0.3-0.1,0.4H2.8c-0.1-0.4-0.2-0.7-0.4-1.1c-0.2,0.1-0.4,0.2-0.7,0.3c-0.1-0.2-0.1-0.3-0.1-0.4 c-0.1,0-0.1-0.1-0.2-0.1c-0.5,0.1-0.8-0.3-0.9-0.6c-0.2-1-0.9-2.1-0.3-3.2c0-1.1,0.7-2,1.1-2.9c0.1-0.3,0.7-0.3,0.5-0.8 c-0.1-0.2,0.3-0.6,0.5-0.9c0.2-0.3,0.4-0.5,0.6-0.8c0.2-0.3,0.5-0.5,0.8-0.8c0.2-0.2,0.4-0.5,0.6-0.8c-1.4-1-2.2-2.5-3.2-3.9 c-0.3-1.3-0.8-2.6-0.6-4.2c0.3-0.4,0.7-0.8,1.2-1.3c0.5,0.1,1-0.2,1.5,0.3c-0.3,0.4-0.6,0.8-0.9,1.2c0.1,0.1,0.2,0.2,0.2,0.2 C3.1,10.6,3.4,9.7,4,9.9c0.1,0.2,0.2,0.4,0.3,0.6c-0.2,0.1-0.4,0.3-0.7,0.4C3.8,11,3.9,11.1,4,11.2c0.3-0.3,0.6-0.3,1,0.1 c0,0.3,0.2,0.6-0.2,0.9c0.2,0.1,0.3,0.1,0.5,0.3C5.1,12.7,5,13,4.8,13.2c0.2,0.1,0.3,0.1,0.6,0.2c-0.3,0.1-0.4,0.1-0.6,0.2 c0,0.2,0,0.4,0.1,0.6c0.4,0.6,0.9,1.1,1.4,1.8c0.3-0.3,0.5-0.4,0.7-0.6c1.2-1.2,2.3-2.5,3.8-3.4c0-0.4,0.4-0.4,0.6-0.6 c0.2-0.3,0.5-0.5,0.6-0.7h0.8c-0.3,0.5-0.9,0.8-0.7,1.5c0.5-0.3,1-0.6,1.6-0.9c-0.1,0.3-0.1,0.6-0.1,0.9c0.2,0.1,0.5,0.3,0.8,0.4 c-0.1,0.2-0.2,0.3-0.2,0.5c0.1,0,0.2,0,0.3,0.1c0,0,0.1,0.1,0,0.1c-0.3,0.4-0.6,0.7-0.8,1.1C13.4,14.8,12.9,15.1,12.6,15.5"/>
                        <path d="M33.3,27c0.9-1.1,1.7-2,2.4-3c0.7-0.9,1.3-1.8,1.9-2.8c-0.1-0.1-0.1-0.2-0.3-0.3c0.2-0.2,0.4-0.4,0.6-0.7h0.7 c0.3,0.3,0.5,0.7,0.8,0.8c0.4,0.1,0.4,0.4,0.6,0.7c0.5,0.8,0.9,1.6,0.5,2.7c-0.3,0.6-0.5,1.3-0.8,1.9c-0.1,0.2-0.1,0.4-0.2,0.7 l-0.6,0.6v0.7c-0.4,0.8-0.8,1.5-1.2,2.2c0.6,0.4,1.1,0.8,1.6,1.1c1.1,0.7,1.9,1.5,2.5,2.7c0.1,0.3,0.2,0.5,0.3,0.9 c0,0.1-0.1,0.3-0.2,0.5c-0.2,0.1-0.5,0.2-0.7,0.3c-0.5-0.2-1-0.3-1.4-0.5c-0.4-0.2-0.9-0.4-1.3-0.6c-0.1-0.7-0.8-0.4-1.1-0.8 c-0.3-0.4-0.8-0.5-1.3-0.8c-1.5,1.5-2.8,3.1-4,4.9c-0.1,0.1-0.1,0.3-0.1,0.5c-0.5,0.4-1,0.3-1.5,0v-0.4c-0.7-0.4-1.3-0.8-2-1.2 c-0.3-0.4-0.2-1-0.4-1.5c-0.2-0.5,0-1-0.1-1.4c0.7-1.7,1.6-3.1,2.9-4.4v-0.8c-0.7-0.5-1.2-1.3-1.6-2.1c-0.2-0.3-0.2-0.6-0.2-0.9 c-0.1-0.6-0.4-1.2-0.3-1.9c0-1.3,0.8-2.2,2-2.6c0.8-0.3,1.5-0.1,2.3-0.2c-0.4,0.9-1.5,0.8-2.1,1.6c1.1,0,1.7-1.1,2.8-0.9 c0,0.3-0.1,0.5-0.1,0.8c0.2,0.1,0.5,0.2,0.8,0.3v1.4c-0.3,0.5-0.6,1-0.9,1.5C33.2,26.3,33.3,26.6,33.3,27"/>
                        <path d="M52.3,13c-0.4,0.5-0.8,1-1.2,1.6V16c-0.4,0.2-0.8,0.3-1.2,0.5c-0.5-0.5-0.7-1.2-0.9-1.8 c-0.2,0.1-0.4,0.2-0.7,0.3c-0.2-0.3-0.5-0.6-0.7-1c-0.4-1-0.4-2.1-0.4-3.2c0.2-0.4,0.4-0.8,0.6-1.3c-0.3,0-0.6,0-0.7-0.1 c-0.7-0.7-1.5-1.5-2.1-2.3c-0.4-0.4-0.7-0.9-0.9-1.4c-0.2-0.8-0.2-1.6-0.3-2.4c0.3-0.5,0.6-1,1.1-1.4c0.4-0.4,1-0.5,1.6-0.8 c0.1,0.2,0.3,0.3,0.4,0.5c-0.1,0.1-1.2,1.1-1.2,1.1c0.1,0.1,0.2,0.2,0.3,0.3c0.5-0.4,1-0.8,1.8-0.5c-0.2,0.3-0.4,0.5-0.6,0.9 c0.4-0.1,0.6-0.2,0.9-0.3c0.1,0.2,0.3,0.4,0.5,0.7c-0.3,0.3-0.6,0.6-0.9,0.9c0.2,0,0.3,0.1,0.5,0.1c-0.3,0.4-0.1,1-0.8,1.2 C48,6.5,48.7,7,49.5,7.5c2.5-2.1,4.9-4.1,7.4-6.1H58c-0.2,0.4-0.3,0.7-0.5,1c0.3,0.2,0.6,0,0.9-0.2c0.8,0.8,1,1.8,0.9,2.8 c-0.3,0.4-0.7,0.9-1.1,1.4c0,0,0.1,0.1,0.2,0.2c-0.2,0-0.4,0.1-0.6,0.1c0.1,0.1,0.2,0.2,0.2,0.2h-0.4c-0.8,1.5-2.1,2.4-3,3.8 c1.3,0.7,2.8,1.3,4.2,2.1c0,0.2,0.1,0.4,0.1,0.7c0.2-0.2,0.3-0.3,0.4-0.4c0.6,0.1,0.5,0.7,1,1c0.4,0.2,0.7,0.8,1,1.2v1.3 c-0.1,0.1-0.2,0.2-0.4,0.4c-1.2-0.1-2.1-0.8-3.2-1.3c0,0-0.1,0.1-0.1,0.1c-0.7-0.2-1.2-1-2-0.9c-0.4-0.5-1.1-0.6-1.6-0.9 C53.5,13.7,53,13.3,52.3,13"/>
                        <path d="M85.2,31c0.2,0.1,0.4,0.2,0.7,0.4c-0.1,0.4-0.1,0.7-0.2,1.2c0.2,0.3,0.3,0.8,0.9,1c0.3-0.4,0.4-0.8,0.9-1 c0.3-0.1,0.6-0.6,0.8-1c0.3-0.4,0.7-0.6,0.9-1.1c0.2-0.4,0.6-0.6,0.9-1c0.3-0.4,0.5-0.8,0.7-1.2h1.3c0.1,0.4,0.2,0.7-0.2,1.1 c0.4,0,0.6,0,0.9,0c0.1,0.5,0.2,1,0.3,1.5c-0.2,0.1-0.3,0.1-0.5,0.2c0,0.1,0,0.2,0.1,0.3c0.3,0.8,0.3,1-0.3,1.6 c-0.3,0.3-0.4,0.6-0.3,0.9c0.2,0.4-0.3,0.2-0.1,0.6c-0.2-0.2-0.3-0.3-0.5-0.4v0.6c-0.2,0-0.4,0.1-0.7,0.1v0.6 c-0.3,0.3-0.5,0.5-0.7,0.7c0.4,0.4,0.8,0.7,1.1,1v0.9c0.2,0.2,0.5,0.5,0.8,0.8c-0.1,0.1-0.1,0.2-0.2,0.4c0.1,0.2,0.3,0.5,0.5,0.9 c-0.2,0.5-0.5,1-0.7,1.4h-0.9c-1.1-0.6-2.2-1.2-3.2-1.8c-0.2,0.3-0.3,0.5-0.5,0.7c-0.2-0.1-0.3-0.2-0.6-0.3v1.1 c-0.3-0.1-0.6-0.2-1-0.4c0.2,0.3,0.2,0.3,0.3,0.5c-0.2,0.2-0.4,0.4-0.8,0.7c-0.1-0.4-0.1-0.7-0.2-1c0.2-0.1,0.3-0.1,0.5-0.2 c0-0.1,0-0.2,0.1-0.3c-0.1,0-0.3-0.1-0.4-0.1c0-0.2,0.1-0.4,0.2-0.7c-0.2,0.2-0.3,0.3-0.3,0.3c-0.5-0.1-0.9-0.2-1.4-0.3 c-0.1-0.1-0.2-0.3-0.3-0.5c0.1-0.3,0.2-0.7,0.3-1.1c0.2,0,0.5,0.1,0.8,0.1c0,0,0-0.1,0-0.1c-0.3-0.1-0.6-0.3-0.8-0.4 c0.2-0.3,0.3-0.6,0.5-0.9c-0.7-1.3-1.6-2.5-2-3.8c-0.3-0.9,0.1-1.9,0.2-2.8c0.1-0.7,0.7-1.2,1.4-1.6c0.1-0.1,0.2-0.1,0.3-0.2h1.1 c0.2,0.2,0.3,0.3,0.4,0.4c-0.2,0.2-0.4,0.4-0.6,0.6v0.7c0.2-0.1,0.5-0.1,0.8-0.2c0.1,0.1,0.3,0.3,0.5,0.4 C85.6,30.6,85.4,30.8,85.2,31"/>
                        <path d="M17.3,42.6c0.1,0.1,0.2,0.2,0.4,0.4c-0.7,0.6-1.4,1.2-2.1,1.8c0,0,0,0.1,0,0.1c0.1,0,0.3,0,0.4-0.1 c0.2-0.2,0.4-0.4,0.6-0.4c0.5-0.3,1-0.5,1.4-0.8c0.4,0.3,0.1,0.6-0.1,1c0.3-0.1,0.4-0.2,0.6-0.2c0.1,0.1,0.2,0.2,0.3,0.3 c0,0.5,0,0.9,0,1.4c-0.1,0.1-0.3,0.3-0.4,0.4c0,0.1,0,0.1,0.1,0.2c0.3,0.2,0.5,0.4,0.8,0.6c0.3,0.2,0.7,0.2,0.7,0.7 c0,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.5,0.3,0.7,0.5c0.2,0.2,0.3,0.5,0.5,0.8c0,0.2,0,0.5,0,0.8c-0.2,0.2-0.4,0.4-0.5,0.5 c-1.4-0.5-2.8-1-4.2-1.5c-0.3,0.2-0.6,0.3-1,0.5c0,0,0,0,0-0.1c-0.3,0.3-0.6,0.6-1,1c0,0.1,0,0.3,0,0.5c-0.6,0.6-1.2,1.2-1.7,1.7 c-0.3,0.8-0.1,1.6-1.2,1.7c-0.2-0.3-1-0.4-0.8-1.2c-0.2-0.1-0.5-0.1-0.8-0.2c-0.1,0-0.2,0.1-0.3,0.2c-0.3-0.3-0.5-0.6-0.9-1 c-0.1-0.7-0.2-1.6-0.3-2.6c0.9-1,1.9-2,2.8-3.1c-0.4-0.2-0.8-0.4-1.1-0.7c-0.4-0.3-0.6-0.6-1-1c0.1-0.3,0.2-0.6,0.3-0.9 c-0.2-0.1-0.3-0.1-0.5-0.2v-0.8c0.1-0.1,0.1-0.1,0.2-0.2c0.3-0.1,0.7-0.1,1.1-0.2c1.1,0.6,2.3,1.3,3.5,2C15.4,44,16.1,43,17.3,42.6"/>
                     </svg>
                  </figure>
               </div>
               <div class="col-sm-6">
                  <!-- Skill set -->
                  <div class="row mb-4">
                     <div class="col-sm-6 mb-4 mb-sm-0">
                        <div class="bg-dark text-white rounded text-center p-3">
                           <span class="h2 text-white">15+</span>
                           <p class="mb-0">Years of experience</p>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="bg-primary rounded text-center p-3">
                           <span class="h2 text-white">45+</span>
                           <p class="mb-0 text-white">Happy Startups</p>
                        </div>
                     </div>
                  </div>
                  <!-- About image -->
                  <img src="<?=base_url('assets/frontend/images/about/01.jpg') ?>" class="rounded" alt="about-img-2">
               </div>
            </div>
            <!-- Row END -->
         </div>
         <!-- About image END -->
         <!-- About content START -->
         <div class="col-lg-5">
            <span class="heading-color bg-light small rounded-3 px-3 py-2">Every business needs good design</span>
            <h3 class="my-4">Fifteen years building entrepreneurs through purposeful design</h3>
            <p class="mb-4">At Mirashka, design is the operating system—spanning all six segments—to launch, grow, and secure ventures, empowering founders with tools, narrative, technology, and measurable results everywhere.</p>
            <!-- List -->
            <ul class="list-group list-group-borderless mb-4">
               <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Design-first thinking across every digital touchpoint.</li>
               <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Fifteen years partnering bold startups and emerging brands.</li>
               <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Six specialist segments working as one growth engine.</li>
               <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>From idea to traction: brand, build, market, secure.</li>
               <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Entrepreneurship amplified through playbooks, people, and platforms.</li>
               <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Outcomes measured: revenue, reputation, resilience, repeatability.</li>
            </ul>
            <!-- Button -->
            <!-- <a href="about-us" class="btn btn-dark mb-0">Discover more</a> -->
         </div>
         <!-- About content END -->
      </div>
   </div>
</section>
<!-- =======================
   About END -->

<section class="pt-0">
    <div class="container">
        <hr class="border-primary opacity-2 mt-sm-7 my-5"> <!-- Divider -->

        <div class="row">
            <div class="col-md-6 col-xl-9 mb-5 mb-md-0">
                <p class="mb-0">Built for brave founders, engineered for scale, secure by default: PHP, .NET, Node, React, Angular, Android, iOS, AWS, Azure, GCP, headless commerce, DevOps, VAPT, observability, automation, APIs, security.</p>
                
                <div class="swiper mt-2" data-swiper-options='{
                        "loop": true, 
                        "slidesPerView": 2, 
                        "spaceBetween": 30, 
                        "autoplay":{
                            "delay": 2000, 
                            "disableOnInteraction": false
                        },
                        "breakpoints": { 
                            "576": {"slidesPerView": 2}, 
                            "768": {"slidesPerView": 3}, 
                            "992": {"slidesPerView": 5}, 
                            "1200": {"slidesPerView": 7}
                        }}'>

                        <!-- Slider items -->
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/PHP.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/.NET.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/ANGULAR.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/REACT.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/node-js.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/AWS.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/Azure.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/google-cloud.svg') ?>" class="px-3" alt="client-img">
                            </div>
                        </div>
                </div>
                <div class="swiper" data-swiper-options='{
                        "loop": true, 
                        "slidesPerView": 2, 
                        "spaceBetween": 30, 
                        "autoplay":{
                            "delay": 2000, 
                            "disableOnInteraction": false
                        },
                        "breakpoints": { 
                            "576": {"slidesPerView": 2}, 
                            "768": {"slidesPerView": 3}, 
                            "992": {"slidesPerView": 5}, 
                            "1200": {"slidesPerView": 7}
                        }}'>

                        <!-- Slider items -->
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/security-and-vapt.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/Automation.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/Andriod.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/ios.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/flutter.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/Shopify.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/wordpress.svg') ?>" class="px-3" alt="client-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= base_url('assets/frontend/images/img/magento.svg') ?>" class="px-3" alt="client-img">
                            </div>
                        </div>
                </div>
            </div>
    
            <div class="col-md-6 col-xl-3 ms-auto text-md-end">
                <p class="mb-0 me-2">Trusted by Customers <span class="badge bg-dark">Active</span></p>

                <div class="d-flex justify-content-md-end mt-2 mt-md-4">
                    <div>
                        <div class="d-flex justify-content-md-end">
                            <h4 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="15"   data-purecounter-delay="300">500</h4>
                            <span class="h4 mb-0">k+</span>
                        </div>
                        <p class="mb-0">Active users</p>
                    </div>

                    <div class="vr mx-3 mx-sm-4"></div> 

                    <div>
                        <div class="d-flex justify-content-md-end">
                            <h4 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="56"   data-purecounter-delay="300">2000</h4>
                            <span class="h4 mb-0">+</span>
                        </div>
                        <p class="mb-0">Completed projects</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style type="text/css">
.sbvsa li.nav-item:not(:first-child)::after {
    content: '';
    background: #999999;
    height: 22px;
    width: 1px;
    position: absolute;
    top: 8px;
    left: -20px;
}    
</style>
<section class="bg-dark position-relative overflow-hidden" data-bs-theme="dark">

    <!-- SVG decoration -->
    <figure class="position-absolute top-0 start-0 mt-n6 ms-n8">
        <svg class="opacity-3" width="371" height="354" viewBox="0 0 371 354" fill="none" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="172.5" cy="176.5" rx="131.5" ry="125.5" fill="url(#paint0_linear_195_2)"></ellipse>
            <ellipse cx="185.5" cy="177" rx="185.5" ry="177" fill="url(#paint1_linear_195_2)"></ellipse>
            <defs>
            <linearGradient id="paint0_linear_195_2" x1="172.5" y1="51" x2="172.5" y2="302" gradientUnits="userSpaceOnUse">
            <stop offset="0.0569271" stop-color="#D9D9D9" stop-opacity="0.5"></stop>
            <stop offset="0.998202" stop-color="#D9D9D9" stop-opacity="0"></stop>
            </linearGradient>
            <linearGradient id="paint1_linear_195_2" x1="185.5" y1="0" x2="185.5" y2="354" gradientUnits="userSpaceOnUse">
            <stop offset="0.0569271" stop-color="#D9D9D9" stop-opacity="0.2"></stop>
            <stop offset="0.998202" stop-color="#D9D9D9" stop-opacity="0"></stop>
            </linearGradient>
            </defs>
        </svg>
    </figure>

    <figure class="position-absolute top-0 end-0 me-n9 mt-n7 d-none d-md-block">
        <svg class="fill-white" width="768.8px" height="1386px" viewBox="0 0 768.8 1386" style="enable-background:new 0 0 768.8 1386; opacity: 0.07;" xml:space="preserve">
            <path d="M647.6,748.4c1.9,6,3.3,12.2,3.8,18.4c2.2,18.9-0.7,38.9-9.1,61.5c-15.6,41.9-47.8,85.3-81.6,131.5 c-46.1,63.1-94.5,128.4-108.1,199.1c-15.7,80.6,17.2,154.5,101.1,226.1l-0.4,0.4c-188.1-160.7-84.4-301.8,7.3-426.2 c33.9-46,65.8-89.6,81.4-131.2c17.5-46.8,11.8-84.9-18-119.6c-39.6-46.6-86.5-86.9-135.7-129.3C339.1,450.3,184.9,317.3,240.6,4.6 l0.6,0.1C185.7,317,339.7,450.1,488.7,578.7c49.3,42.7,95.8,82.8,135.8,129.6C635.5,721,643.1,734.2,647.6,748.4z"></path>
            <path d="M636.2,722.3c23.4,73.7-25.2,149.2-76.5,228.7c-40.8,63.5-83,129.1-91.9,198.3c-9.9,78.2,25.9,150,109.6,219 l-0.4,0.7c-45-37.1-75.4-74-93.5-112.7c-15.9-34.5-21.2-69.5-16.5-106.8c8.9-69.5,51-135.1,91.9-198.6 C616.4,861.3,671,776.5,622,694.1c-39.6-66.6-102.4-118.8-169-174.2c-68.7-57.3-140-116.4-188.1-195.3 c-25.9-42.6-42.9-86.9-51.5-135.2c-9.8-54.6-9.2-112.9,2-177.9l0.6,0.1c-46.5,271.4,97.9,391.7,237.5,507.9 c66.7,55.4,129.4,107.7,169.1,174.5C628.8,702.7,633.1,712.6,636.2,722.3z"></path>
            <path d="M624.6,687.5c11.7,37,10.5,76.9-3.8,121.9c-13.7,43.3-38.1,87.4-61.8,130.2c-35.7,64.2-72.5,130.4-76.3,198.6 c-4.4,76.5,34.5,146.1,118.7,213.3l-0.6,0.8c-188.5-150.2-114.3-284-42.6-413.2c49.3-88.7,95.7-172.7,62.4-260.6 c-31.5-83-108.5-141.7-189.7-204C363,422.5,293.2,369,244.9,298c-26.1-38.5-43.3-78.4-53-121.8C181.2,127,180.6,75,190.2,16.8l0.9,0 C151,259.3,293.5,368.3,431.2,473.7c81.5,62.2,158.3,121.3,190.1,204.2C622.6,681.2,623.6,684.4,624.6,687.5z"></path>
            <path d="M614.6,642.5c2.2,6.8,4.1,13.7,5.4,20.8c18.1,91.8-22.3,177.4-61.1,260.2c-32.2,68.8-62.8,133.6-62.1,201.3 c0.8,76.3,41.6,143,128.7,209.2l-0.6,0.8c-46.1-35.1-78.8-70-100.3-106.8c-19.1-32.9-28.6-66.6-28.9-103.1 c-0.6-67.6,29.8-132.7,62.3-201.6c38.8-82.7,79-168.2,60.9-259.8c-19.1-96.7-109.2-158.6-204.5-224.2 c-68.3-47.1-139.2-95.6-188.9-160.4c-56.1-73.2-75.8-157-60.3-255.8l0.9,0c-34.9,220.7,109.1,319.7,248.6,415.2 C503.4,499.3,587.6,557.2,614.6,642.5z"></path>
            <path d="M610.8,603.9c4.4,13.9,7.1,28.7,7.8,44.6c3.6,91.5-28.4,172.7-59.3,251.2c-28.5,72.3-55.1,140.5-50.2,208.8 c5.2,76.6,49.9,143,140.1,208.8l-0.4,0.7c-90.5-66-135.2-132.4-140.8-209.2c-5-68.6,21.9-136.9,50.3-209.4 c30.9-78.5,62.6-159.6,59.1-250.9c-4.2-109-107.3-171.8-216.8-238.5c-70.1-42.7-142.8-87-194.2-146.1 c-58.1-66.8-79.9-143.6-66-234.6l1,0.3c-30.7,202.9,117.1,292.9,259.8,379.6C494.9,466.2,584.1,520.8,610.8,603.9z"></path>
            <path d="M610.7,570.7c6.1,19.2,8.4,40.1,6,62.8c-8.3,84.1-33.8,160.3-55.9,227.3c-27.6,83.2-51.4,154.9-42.7,226 c9.5,78.4,58.7,146,155,213l-0.6,0.8c-96.5-66.7-145.8-134.6-155.4-213.2c-8.8-71.4,15.2-143.4,42.8-226.7 c22.3-67.1,47.6-143.3,55.9-227.3c12-120.7-104.2-182.9-227.6-248.9c-72.3-38.6-147.1-78.7-200.6-132.7 c-60.6-61-84.2-131.8-72-216.2l1.2,0.2C89.9,223.5,242,305,389.1,383.7C488.9,437.2,584.6,488.6,610.7,570.7z"></path>
            <path d="M613,540.8c7.3,23.1,8.5,48.7,1.9,77.9c-14,63.3-31.8,122.1-47.4,173.8c-30,99.3-56,185.2-45,263.4 c11.7,84.3,67.2,156.6,174.2,227.2l-0.5,1c-56.6-37.2-98.1-74.3-126.8-113.1c-26.6-35.7-42.3-73.2-47.9-114.7 c-11.1-78.8,14.9-164.4,45.1-264c15.7-51.7,33.4-110.5,47.5-173.6C643.5,486.7,513.4,426,375.8,361.9 c-74.9-34.9-152.2-71-207.6-120.1c-63-55.7-88.3-121-78-199.6l1.1-0.1c-10.5,78.1,14.8,143.1,77.7,198.6 c55.4,49.1,132.7,85.3,207.5,119.9C484,410.7,587.1,458.9,613,540.8z"></path>
            <path d="M617.2,512.9c8.3,26.2,8,56.1-3.5,90.9c-5.6,17.1-11.2,33.9-16.5,50c-47.8,143.4-85.7,256.4-76.5,351.9 c9.7,99.7,71.5,180,200.4,260.4l-0.5,1c-67.3-41.9-115.6-83.2-148.1-126.6c-30.9-41-48.1-85.2-52.8-134.8 c-9.3-95.8,28.8-208.9,76.6-352.3c5.6-16.2,10.9-32.9,16.5-50c47.5-143.5-96.3-201.6-248.6-263.1c-77.7-31.1-157.6-63.5-215.4-108.2 C83.3,181.7,56.1,121.4,65.2,48l1.2,0.2c-9,72.7,18.1,132.8,83.1,183c57.8,44.6,137.6,76.8,214.8,108.1 C480.2,386,591.2,431,617.2,512.9z"></path>
            <path d="M622.4,486.7c9.6,30.2,6.1,63.9-10.3,102.3C465,933,463,1084.4,745.1,1249l-0.8,1.1 c-143.5-83.6-211.5-162.5-227.9-263.5c-17.4-106.8,25.3-236.4,94.5-398.1c18.6-43.4,20.4-80.4,6-113.1 C583.7,401.1,471.1,362,351.5,320.8C189.7,265,22.7,207.3,40,54.3l1.2,0.2C23.8,206.4,190.5,263.8,351.7,319.6 C471.4,361,584.6,400,617.6,475C619.7,478.9,621.2,482.8,622.4,486.7z"></path>
            <path d="M628.6,461.4c10.3,32.5,4.4,69.6-18,112.8c-93.9,182.2-122.9,308.3-94.5,408.8c26.1,92.5,101.7,167,252.8,249 l-0.8,1.1c-151.5-82.5-227.2-157.2-253.6-249.9c-28.5-100.7,0.5-227.1,94.5-409.9c24.3-47.3,29-87.1,14.3-121.5 c-32.7-76-155.1-112-284.6-149.7C172.6,253.7,0.1,203.5,15.1,60.4l1.2,0.2c-14.6,141.8,157,191.9,323.2,240.6 c129.9,37.9,252.4,73.9,285.3,150.4C626.2,454.9,627.5,458,628.6,461.4z"></path>
        </svg>
    </figure>

    <div class="container pb-6 position-relative">
        <!-- Title -->
        <div class="inner-container-small text-center mb-4 mb-sm-5">
            <span class="text-primary fw-bold text-uppercase">Six moves, one unified growth engine.</span>
            <h3 class="mb-2">From brand to ROI, delivered as one system</h3>
            <p>We fuse branding, product build, marketing, operations, security, and performance into a framework—launch faster, scale cleaner, reduce waste, and prove growth with dashboards leaders trust.</p>
        </div>

        <div class="row">
            <!-- Tabs -->
            <div class="col-lg-10 col-xxl-6 mx-auto mb-3">
                <div class="bg-light rounded-pill p-2">
                    <ul class="nav nav-pills nav-pills-primary nav-responsive justify-content-between sbvsa">
                        <li class="nav-item position-relative">
                            <button class="nav-link rounded-pill active" type="button" id="ignite"><i class="bi bi-fire me-2"></i>
                            Ignite</button>
                        </li>
                        <li class="nav-item position-relative">
                            <button class="nav-link rounded-pill" type="button" id="establish"><i class="bi bi-building me-2"></i>
                            Establish</button>
                        </li>
                        <li class="nav-item position-relative">
                            <button class="nav-link rounded-pill" type="button" id="amplify"><i class="bi bi-megaphone me-2"></i>
                            Amplify</button>
                        </li>
                        <li class="nav-item position-relative">
                            <button class="nav-link rounded-pill" type="button" id="evolve"><i class="bi bi-repeat me-2"></i>
                            Evolve</button>
                        </li>
                        <li class="nav-item position-relative">
                            <button class="nav-link rounded-pill" type="button" id="secure"><i class="bi bi-shield-lock me-2"></i>
                            Secure</button>
                        </li>
                        <li class="nav-item position-relative">
                            <button class="nav-link rounded-pill" type="button" id="accelerate"><i class="bi bi-lightning-charge me-2"></i>
                            Accelerate</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<style type="text/css">
.card.card-body.shadow.bg-white.text-center.p-3.active {
    box-shadow: 0px 3px 0px #e2930c !important;
}
section#appendHere {
    margin-top: -115px;
    position: relative;
    z-index: 1;
    padding-bottom: 70px !important;
}
#appendHere .container {
    box-shadow: 0 34px 44px 0 rgba(29, 20, 99, .2);
    background: #f8f9fa;
    border-radius: 1rem;
    padding: 2rem 17px 1rem;
}
</style>

<!-- <section class="bg-light pb-0">
    <div class="container-fluid">
        <div class="inner-container-small text-center mb-4 mb-sm-6">
            <h2>A Squad of Talented Members</h2>
            <p class="mb-0">We are a close-knit squad of exceptionally talented individuals who are passionate about all things digital.</p>
        </div>

        <div class="row g-4 justify-content-center qaswep">
            <div class="col-md-2">
                <div class="card card-body shadow bg-white text-center p-3 active" id="ignite">
                    <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                        <img class="avatar-img rounded-4" src="https://mizzle.webestica.com/assets/images/avatar/04.jpg" alt="avatar">
                    </div>
                    <h6 class="mb-1">Ignite</h6>
                    <small>Sub Text Will be here</small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card card-body shadow bg-white text-center p-3" id="establish">
                    <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                        <img class="avatar-img rounded-4" src="https://mizzle.webestica.com/assets/images/avatar/04.jpg" alt="avatar">
                    </div>
                    <h6 class="mb-1">Establish</h6>
                    <small>Sub Text Will be here</small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card card-body shadow bg-white text-center p-3" id="amplify">
                    <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                        <img class="avatar-img rounded-4" src="https://mizzle.webestica.com/assets/images/avatar/04.jpg" alt="avatar">
                    </div>
                    <h6 class="mb-1">Amplify</h6>
                    <small>Sub Text Will be here</small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card card-body shadow bg-white text-center p-3" id="evolve">
                    <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                        <img class="avatar-img rounded-4" src="https://mizzle.webestica.com/assets/images/avatar/04.jpg" alt="avatar">
                    </div>
                    <h6 class="mb-1">Evolve</h6>
                    <small>Sub Text Will be here</small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card card-body shadow bg-white text-center p-3" id="secure">
                    <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                        <img class="avatar-img rounded-4" src="https://mizzle.webestica.com/assets/images/avatar/04.jpg" alt="avatar">
                    </div>
                    <h6 class="mb-1">Secure</h6>
                    <small>Sub Text Will be here</small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card card-body shadow bg-white text-center p-3" id="accelerate">
                    <div class="avatar avatar-xxl mx-auto flex-shrink-0 mb-3">
                        <img class="avatar-img rounded-4" src="https://mizzle.webestica.com/assets/images/avatar/04.jpg" alt="avatar">
                    </div>
                    <h6 class="mb-1">Accelerate</h6>
                    <small>Sub Text Will be here</small>
                </div>
            </div>

        </div>
    </div>  
</section> -->

<section class="overflow-hidden pt-0" id="appendHere">
    <div class="container">
       <div class="row mb-3 align-items-center">
          <div class="col-md-3">
             <h3 class="mb-0 heading-color">Ignite Services</h3>
          </div>
          <div class="col-md-7 ms-auto heading-color">
             <p>Strategy, voice, and visuals snap into place, shaping symbols customers remember, repeat, and recommend across touchpoints, markets, and moments worldwide.</p>
          </div>
          <div class="col-md-2">
             <div class="d-flex gap-3 position-relative justify-content-end">
                <a href="javascript:void(0);" class="btn btn-white border btn-icon rounded-circle mb-0 swiper-button-prev-team"><i class="bi bi-arrow-left"></i></a>
                <a href="javascript:void(0);" class="btn btn-white border btn-icon rounded-circle mb-0 swiper-button-next-team"><i class="bi bi-arrow-right"></i></a>
             </div>
          </div>
       </div>
       <!-- Service start -->
       <div class="swiper iskok" data-swiper-options='{
         "spaceBetween": 10,
         "loop": false,
         "navigation":{
         "nextEl":".swiper-button-next-team",
         "prevEl":".swiper-button-prev-team"
         },
         "breakpoints": { 
         "576": {"slidesPerView": 1},
         "768": {"slidesPerView": 3},
         "992": {"slidesPerView": 3},
         "1200": {"slidesPerView": 4}
         }}'>
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

</section>

<section class="pt-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h6 class="fbdvs m-auto mb-3">Idea to impact, repeatably and responsibly.</h6> 
                <h3>From first spark to scale, we fuse design, technology, and marketing into one compounding system.</h3>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-7 pe-lg-5">
                <p class="mb-5">With a track record of success, we're here to guide you through the ever-evolving digital landscape. Discover how our innovative solutions and expert insights can make a real difference in your brand's digital journey</p>

                <div class="card card-body bg-light p-sm-5 h-100">
                    <!-- SVG decoration -->
                    <figure class="position-absolute bottom-0 end-0 mb-0 me-3 d-none d-sm-block">
                        <svg width="116" height="177" viewBox="0 0 116 177" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-mode" d="M54.2742 58.113H50.0625V177H54.2742V58.113Z"/>
                            <path class="fill-mode" d="M62.0829 55.1344L57.9297 55.8303L78.1605 175.597L82.3137 174.901L62.0829 55.1344Z"/>
                            <path class="fill-mode" d="M75.4696 136.02H28.2031V140.641H75.4696V136.02Z"/>
                            <path class="fill-mode" d="M21.2999 174.91L25.4531 175.606L45.684 55.8399L41.5308 55.144L21.2999 174.91Z"/>
                            <path class="fill-primary" d="M91.1643 90.7959C111.953 70.0913 111.953 36.5225 91.1643 15.8179C70.3759 -4.88673 36.6713 -4.88673 15.8829 15.8179C-4.90549 36.5225 -4.90549 70.0913 15.8829 90.7959C36.6713 111.5 70.3759 111.501 91.1643 90.7959Z"/>
                            <path d="M103.519 35.0652L103.418 34.9452L103.338 34.8651L103.144 34.9385C103.164 34.9785 103.177 35.0119 103.184 35.0385C103.224 35.1319 103.258 35.2186 103.284 35.312L103.566 35.2119C103.559 35.1519 103.539 35.1052 103.519 35.0652ZM102.012 75.2055C102.066 75.1121 102.106 75.0121 102.146 74.9121C102.066 74.8387 101.985 74.7587 101.912 74.6786C101.872 74.7787 101.831 74.8787 101.778 74.9787C99.4276 80.1605 96.2404 84.8954 92.4036 89.0302C92.3433 89.1102 92.2697 89.1836 92.2027 89.2503C92.1425 89.3303 92.0688 89.4036 92.0019 89.4703L92.2764 89.6437C92.35 89.5704 92.417 89.5037 92.4773 89.4303L92.7317 89.5904C92.8054 89.517 92.8723 89.4503 92.9326 89.377C96.7827 85.2222 99.903 80.5273 102.247 75.3989C102.16 75.3455 102.079 75.2788 102.012 75.2055ZM103.519 35.0652L103.418 34.9452L103.338 34.8651L103.144 34.9385C103.164 34.9785 103.177 35.0119 103.184 35.0385C103.224 35.1319 103.258 35.2186 103.284 35.312L103.566 35.2119C103.559 35.1519 103.539 35.1052 103.519 35.0652ZM102.139 74.9121C102.059 74.8387 101.979 74.7587 101.905 74.6786C101.865 74.7787 101.825 74.8787 101.771 74.9787C99.4209 80.1605 96.2337 84.8954 92.3969 89.0302C92.3366 89.1102 92.263 89.1836 92.196 89.2503C92.1358 89.3303 92.0621 89.4036 91.9952 89.4703L92.2697 89.6437C92.3433 89.5704 92.4103 89.5037 92.4706 89.4303L92.725 89.5904C92.7987 89.517 92.8656 89.4503 92.9259 89.377C96.776 85.2222 99.8963 80.5273 102.24 75.3989C102.16 75.3389 102.079 75.2655 102.006 75.1988C102.059 75.1188 102.099 75.0188 102.139 74.9121ZM107.048 52.5845C106.994 48.0296 106.358 43.5614 105.166 39.2466C105.146 39.1466 105.112 39.0532 105.086 38.9665C105.066 38.8665 105.032 38.7665 105.005 38.6731C104.845 38.1129 104.684 37.5594 104.503 37.0059C104.349 36.5324 104.202 36.0722 104.028 35.6187C103.974 35.4453 103.914 35.2786 103.847 35.1186C103.813 35.0185 103.773 34.9185 103.746 34.8251C103.733 34.7918 103.726 34.7518 103.706 34.7251C103.686 34.6651 103.666 34.6117 103.633 34.5517C103.633 34.5117 103.613 34.4784 103.592 34.4383C103.559 34.345 103.532 34.2583 103.492 34.1649C103.459 34.0849 103.432 33.9915 103.398 33.9115C103.218 33.458 103.037 33.0045 102.843 32.551C102.588 31.9508 102.32 31.3573 102.032 30.7638C101.992 30.6704 101.952 30.5904 101.898 30.5037C101.865 30.4103 101.825 30.3236 101.778 30.2436C99.1732 24.8151 95.6779 19.9067 91.3657 15.6053C86.4442 10.7036 80.7326 6.86233 74.3514 4.18142C67.7626 1.40714 60.7587 0 53.5271 0C46.3022 0 39.2983 1.40714 32.6894 4.18142C26.3149 6.86899 20.5899 10.7103 15.6818 15.6053C15.2399 16.0454 14.8047 16.4989 14.3761 16.9524C14.3159 17.0258 14.2422 17.0925 14.1752 17.1658C14.115 17.2392 14.0413 17.3059 13.9744 17.3859C13.519 17.8794 13.0771 18.3796 12.6486 18.8931C12.287 19.3065 11.9388 19.7267 11.6107 20.1535C11.5973 20.1668 11.5772 20.1735 11.5772 20.1935C11.5036 20.2669 11.4433 20.3469 11.3831 20.4269C11.3496 20.4603 11.3228 20.5003 11.3027 20.5403C11.2625 20.5803 11.229 20.6203 11.2023 20.6603C11.1688 20.7003 11.142 20.7337 11.1219 20.7737C11.0483 20.8537 10.988 20.9271 10.9411 21.0071C10.8809 21.0805 10.8273 21.1405 10.7871 21.2072C10.0974 22.1008 9.45463 23.0145 8.82521 23.9548C8.77165 24.0348 8.71138 24.1148 8.66451 24.2082C8.60425 24.2882 8.55068 24.3683 8.50381 24.4616C6.84992 27.0292 5.4036 29.7301 4.19834 32.571C1.41284 39.1266 0 46.109 0 53.3114C0 60.5005 1.41284 67.4829 4.21173 74.0651C6.91018 80.4139 10.767 86.1158 15.6818 91.0108C20.5899 95.8992 26.3149 99.7538 32.6894 102.428C32.9506 102.541 33.2117 102.648 33.4796 102.748C34.8054 103.288 36.1445 103.775 37.5105 104.189C41.5816 105.469 45.78 106.243 50.0653 106.503C51.2037 106.583 52.3687 106.623 53.5271 106.623C53.7816 106.623 54.0293 106.623 54.2838 106.609C58.3549 106.556 62.3657 106.056 66.2494 105.102C67.622 104.782 68.988 104.389 70.3272 103.949C71.6931 103.495 73.0323 102.995 74.3581 102.428C78.5498 100.667 82.4401 98.4134 86.0157 95.6658C86.1094 95.6124 86.1764 95.5524 86.2568 95.4857C86.3371 95.4323 86.4175 95.3723 86.4978 95.3056C88.2053 93.9785 89.8324 92.5514 91.3724 91.0108C91.7675 90.6174 92.1492 90.2239 92.5241 89.8238C92.5978 89.7504 92.6647 89.6837 92.725 89.6037C92.7987 89.5303 92.8656 89.4637 92.9259 89.3903C96.776 85.2356 99.8963 80.5406 102.24 75.4122C102.293 75.3189 102.334 75.2322 102.374 75.1321C102.427 75.0388 102.468 74.9387 102.508 74.8387C102.628 74.5853 102.742 74.3252 102.849 74.0651C104.363 70.4839 105.487 66.7826 106.184 62.988C106.217 62.7946 106.257 62.6079 106.284 62.4145C106.505 61.1474 106.679 59.8603 106.807 58.5732C106.84 58.2131 106.867 57.8463 106.9 57.4795C106.914 57.3794 106.92 57.2794 106.92 57.1794C106.934 57.086 106.94 56.986 106.94 56.8859C107.021 55.7122 107.061 54.5118 107.061 53.3181C107.061 53.0713 107.061 52.8246 107.048 52.5845ZM106.465 53.3114C106.465 54.5051 106.425 55.7055 106.344 56.8793C106.331 56.9793 106.331 57.0727 106.324 57.1727C106.311 57.2727 106.311 57.3728 106.304 57.4728C106.271 57.8863 106.231 58.2864 106.19 58.6999C106.057 59.927 105.896 61.1474 105.688 62.3545C105.655 62.5479 105.615 62.7279 105.574 62.928C104.838 66.9293 103.633 70.7707 102.039 74.3919C101.999 74.4919 101.959 74.5853 101.905 74.6853C101.865 74.7853 101.825 74.8854 101.771 74.9854C99.4209 80.1672 96.2337 84.9021 92.3969 89.0368C92.3366 89.1169 92.263 89.1902 92.196 89.2569C92.1358 89.3369 92.0621 89.4103 91.9952 89.477C90.1471 91.431 88.145 93.2383 86.0291 94.8855L85.788 95.0656C85.7077 95.1389 85.6273 95.1989 85.547 95.2456C80.9603 98.7268 75.8044 101.481 70.2267 103.335C68.8943 103.775 67.5283 104.169 66.1489 104.509C62.339 105.436 58.3616 105.956 54.2838 106.009C54.0293 106.023 53.7816 106.023 53.5271 106.023C52.3687 106.023 51.2037 105.983 50.0653 105.909C45.7532 105.629 41.5816 104.836 37.6109 103.588C36.245 103.155 34.9058 102.675 33.5934 102.128C14.2489 94.2853 0.595936 75.3589 0.595936 53.3114C0.595936 42.8279 3.68945 33.0512 8.99931 24.8351C9.03279 24.7817 9.05957 24.735 9.09305 24.695C9.12653 24.6417 9.14662 24.615 9.16671 24.5817C9.20688 24.5216 9.24706 24.4616 9.28054 24.4083C9.31402 24.3683 9.32071 24.3549 9.3341 24.3349C9.96352 23.3879 10.6063 22.4743 11.296 21.5806C11.3362 21.5206 11.3897 21.4473 11.45 21.3806C11.5036 21.3072 11.5638 21.2272 11.6241 21.1472C11.6576 21.1138 11.6844 21.0738 11.7178 21.0338C11.7312 21.0271 11.7379 21.0138 11.7513 20.9938C11.7714 20.9604 11.7915 20.9338 11.8116 20.9004C11.8451 20.8671 11.8719 20.8404 11.8919 20.8004C11.9522 20.727 12.0125 20.647 12.0727 20.567C12.1129 20.5336 12.1263 20.5136 12.1464 20.4869C12.903 19.5533 13.6798 18.633 14.49 17.7594C14.5502 17.686 14.6239 17.606 14.6908 17.5393C14.7511 17.4659 14.8248 17.3992 14.8917 17.3259C24.5204 7.02905 38.2872 0.580197 53.5271 0.580197C74.5121 0.580197 92.6714 12.8043 101.222 30.4503C101.276 30.5437 101.316 30.6237 101.356 30.7104C101.396 30.8038 101.436 30.8838 101.477 30.9705C101.959 31.9975 102.414 33.0512 102.843 34.1182C102.876 34.1983 102.903 34.2783 102.936 34.3717C102.976 34.465 103.017 34.5517 103.05 34.6451C103.063 34.6784 103.084 34.7184 103.084 34.7451C103.124 34.8185 103.144 34.8785 103.157 34.9252C103.177 34.9652 103.191 34.9985 103.197 35.0252C103.238 35.1186 103.271 35.2053 103.298 35.2986C103.378 35.512 103.452 35.7121 103.512 35.8988C103.867 36.8725 104.182 37.8728 104.47 38.8732C104.49 38.9665 104.523 39.0666 104.543 39.1533C104.577 39.2533 104.604 39.3467 104.624 39.4467C105.782 43.6681 106.418 48.1096 106.472 52.6712C106.465 52.8979 106.465 53.098 106.465 53.3114ZM102.012 75.2055C102.066 75.1121 102.106 75.0121 102.146 74.9121C102.066 74.8387 101.985 74.7587 101.912 74.6786C101.872 74.7787 101.831 74.8787 101.778 74.9787C99.4276 80.1605 96.2404 84.8954 92.4036 89.0302C92.3433 89.1102 92.2697 89.1836 92.2027 89.2503C92.1425 89.3303 92.0688 89.4036 92.0019 89.4703L92.2764 89.6437C92.35 89.5704 92.417 89.5037 92.4773 89.4303L92.7317 89.5904C92.8054 89.517 92.8723 89.4503 92.9326 89.377C96.7827 85.2222 99.903 80.5273 102.247 75.3989C102.16 75.3455 102.079 75.2788 102.012 75.2055ZM103.519 35.0652L103.418 34.9452L103.338 34.8651L103.144 34.9385C103.164 34.9785 103.177 35.0119 103.184 35.0385C103.224 35.1319 103.258 35.2186 103.284 35.312L103.566 35.2119C103.559 35.1519 103.539 35.1052 103.519 35.0652ZM102.012 75.2055C102.066 75.1121 102.106 75.0121 102.146 74.9121C102.066 74.8387 101.985 74.7587 101.912 74.6786C101.872 74.7787 101.831 74.8787 101.778 74.9787C99.4276 80.1605 96.2404 84.8954 92.4036 89.0302C92.3433 89.1102 92.2697 89.1836 92.2027 89.2503C92.1425 89.3303 92.0688 89.4036 92.0019 89.4703L92.2764 89.6437C92.35 89.5704 92.417 89.5037 92.4773 89.4303L92.7317 89.5904C92.8054 89.517 92.8723 89.4503 92.9326 89.377C96.7827 85.2222 99.903 80.5273 102.247 75.3989C102.16 75.3455 102.079 75.2788 102.012 75.2055ZM103.519 35.0652L103.418 34.9452L103.338 34.8651L103.144 34.9385C103.164 34.9785 103.177 35.0119 103.184 35.0385C103.224 35.1319 103.258 35.2186 103.284 35.312L103.566 35.2119C103.559 35.1519 103.539 35.1052 103.519 35.0652Z" fill="#202124"/>
                            <path d="M83.5774 83.2415C100.177 66.7091 100.177 39.9047 83.5774 23.3723C66.9781 6.83984 40.0652 6.83984 23.4659 23.3723C6.86657 39.9047 6.86657 66.7091 23.4659 83.2415C40.0652 99.7739 66.9781 99.7739 83.5774 83.2415Z" fill="white"/>
                            <path d="M79.8329 86.1626C79.5784 86.3626 79.3173 86.5627 79.0561 86.7628L79.19 86.8762L79.3039 86.9762C79.4646 86.8561 79.6253 86.7361 79.7793 86.6161L79.9601 86.4627L81.4131 84.8421C80.8908 85.2956 80.3685 85.7358 79.8329 86.1626ZM79.8329 86.1626C79.5784 86.3626 79.3173 86.5627 79.0561 86.7628L79.19 86.8762L79.3039 86.9762C79.4646 86.8561 79.6253 86.7361 79.7793 86.6161L79.9601 86.4627L81.4131 84.8421C80.8908 85.2956 80.3685 85.7358 79.8329 86.1626ZM93.8005 38.8132C93.6465 38.4131 93.4992 38.0196 93.3452 37.6261C93.2247 37.3127 93.1042 37.0126 92.9702 36.7125C90.8075 31.6308 87.7206 27.0759 83.7901 23.1612C79.8596 19.2466 75.2863 16.1722 70.184 14.0248C64.9144 11.8041 59.3099 10.677 53.5179 10.677C50.9132 10.677 48.3353 10.9104 45.8109 11.3706C45.7172 11.3839 45.6167 11.4039 45.5163 11.4239C45.4159 11.4439 45.3221 11.4639 45.2217 11.4839C44.0298 11.704 42.858 11.9841 41.6996 12.3309C41.5791 12.3642 41.4854 12.3842 41.3983 12.4243C41.3581 12.4243 41.3247 12.4376 41.2845 12.4576C41.2242 12.4709 41.1706 12.4909 41.1104 12.511C41.0702 12.511 41.0367 12.5243 40.9966 12.5443C40.9028 12.5643 40.8158 12.5977 40.7153 12.6377C40.635 12.6577 40.5412 12.6777 40.4609 12.7177C40.327 12.751 40.1863 12.7977 40.0591 12.8377C39.1485 13.1378 38.2445 13.4713 37.354 13.8447C37.2602 13.8781 37.1598 13.9181 37.0728 13.9581C36.9991 13.9915 36.9321 14.0181 36.8585 14.0515C36.8384 14.0648 36.8183 14.0715 36.7982 14.0715C31.716 16.2122 27.1628 19.2933 23.2524 23.1812C22.0739 24.355 20.9691 25.5821 19.9513 26.8625C19.6902 27.1959 19.429 27.536 19.1746 27.8762C17.1256 30.6038 15.4182 33.5714 14.0723 36.7258C11.8425 41.9876 10.7109 47.5695 10.7109 53.3248C10.7109 59.0801 11.8425 64.662 14.0723 69.9237C16.2351 74.9921 19.3152 79.547 23.2524 83.475C26.7744 86.9828 30.8255 89.8238 35.2983 91.9112C35.8139 92.1513 36.3295 92.3847 36.8518 92.6048C37.662 92.9449 38.4789 93.2583 39.2958 93.5518C42.7576 94.7655 46.3667 95.5257 50.0427 95.8125C51.1944 95.9059 52.3461 95.9526 53.5045 95.9526C53.759 95.9526 54.0067 95.9526 54.2612 95.9392C57.7363 95.8792 61.1379 95.4191 64.4389 94.5521C65.8116 94.192 67.1642 93.7652 68.4967 93.265C69.0524 93.0516 69.6082 92.8315 70.164 92.5981C73.0499 91.3843 75.7818 89.8705 78.3129 88.0699C78.3932 88.0099 78.487 87.9498 78.5673 87.8765C78.6678 87.8031 78.7682 87.7364 78.8686 87.6564C78.9222 87.6231 78.9825 87.5831 79.0293 87.543C79.1097 87.483 79.19 87.423 79.2704 87.363C79.3507 87.303 79.4244 87.2429 79.5048 87.1829C80.5962 86.3493 81.6474 85.4623 82.6585 84.5287C82.7322 84.4553 82.7991 84.3953 82.8728 84.3286C82.9464 84.2686 83.0134 84.1952 83.0871 84.1286C83.1875 84.0352 83.2879 83.9352 83.3884 83.8351C83.462 83.7751 83.529 83.7017 83.5893 83.6351C83.6495 83.5817 83.7098 83.5217 83.7701 83.4617C87.7206 79.5203 90.8008 74.9721 92.9501 69.9104C94.4232 66.4426 95.4142 62.8413 95.9164 59.1268C96.0169 58.3798 96.0972 57.6396 96.1575 56.8927C96.2579 55.7056 96.3115 54.5119 96.3115 53.3115C96.3316 48.3098 95.4812 43.4548 93.8005 38.8132ZM95.5013 57.6729C95.4879 57.8463 95.4678 58.0264 95.441 58.1931C94.3228 67.8364 89.9035 76.4793 83.3616 83.0082C83.2879 83.0682 83.2277 83.1415 83.1473 83.2082C83.0871 83.2816 83.0134 83.3483 82.9465 83.4083C82.846 83.5083 82.7456 83.6017 82.6451 83.7017C82.5715 83.7751 82.5045 83.8351 82.4309 83.9018C82.3572 83.9752 82.2903 84.0352 82.2166 84.1019C81.9555 84.3553 81.6742 84.5954 81.3997 84.8355C80.8841 85.2889 80.3618 85.7291 79.8262 86.1559C79.5717 86.356 79.3106 86.556 79.0494 86.7561C78.9758 86.8161 78.8954 86.8695 78.8151 86.9295C78.7347 86.9895 78.6544 87.0495 78.574 87.1096C75.4805 89.3903 72.0723 91.251 68.4163 92.6314C67.0905 93.1316 65.738 93.5651 64.3586 93.9319C61.1379 94.7855 57.7564 95.2723 54.2812 95.3324C54.0268 95.3457 53.7791 95.3457 53.5246 95.3457C52.3662 95.3457 51.2011 95.2923 50.0628 95.2056C46.3533 94.9055 42.7911 94.1319 39.4163 92.9249C38.0437 92.4514 36.7112 91.8979 35.4189 91.2776C21.1767 84.5154 11.3203 70.0438 11.3203 53.3181C11.3203 43.9349 14.4339 35.252 19.6634 28.2496C19.9178 27.9095 20.179 27.5627 20.4401 27.2359C24.7924 21.7741 30.4773 17.4059 36.9924 14.6317C37.0259 14.6183 37.046 14.6117 37.0728 14.5917C37.1464 14.5717 37.2067 14.5383 37.2669 14.5183C37.3607 14.4783 37.4477 14.4383 37.5415 14.4049C37.7825 14.2916 38.037 14.2049 38.2914 14.1115C39.1016 13.7981 39.8582 13.518 40.6551 13.2645C40.7354 13.2312 40.8158 13.2112 40.9095 13.1845C41.0033 13.1512 41.0903 13.1245 41.1907 13.0912C41.2242 13.0778 41.251 13.0711 41.2912 13.0578C41.3514 13.0445 41.4117 13.0245 41.472 13.0045C41.5054 12.9911 41.5456 12.9844 41.5724 12.9711C41.6661 12.9378 41.7666 12.9111 41.8536 12.8911C43.0321 12.551 44.2039 12.2642 45.3958 12.0375C45.4962 12.0175 45.59 11.9974 45.6904 11.9774C45.7908 11.9574 45.8846 11.9441 45.985 11.9241C48.4424 11.4839 50.9534 11.2505 53.5313 11.2505C71.329 11.2505 86.5823 22.2743 92.7761 37.8262C92.9368 38.2197 93.0908 38.6131 93.2381 39.0133C94.8518 43.4814 95.7423 48.2897 95.7423 53.2981C95.7423 54.7653 95.662 56.2124 95.508 57.6529C95.5013 57.6663 95.4946 57.6663 95.5013 57.6729ZM79.8329 86.1626C79.5784 86.3626 79.3173 86.5627 79.0561 86.7628L79.19 86.8762L79.3039 86.9762C79.4646 86.8561 79.6253 86.7361 79.7793 86.6161L79.9601 86.4627L81.4131 84.8421C80.8908 85.2956 80.3685 85.7358 79.8329 86.1626ZM79.8329 86.1626C79.5784 86.3626 79.3173 86.5627 79.0561 86.7628L79.19 86.8762L79.3039 86.9762C79.4646 86.8561 79.6253 86.7361 79.7793 86.6161L79.9601 86.4627L81.4131 84.8421C80.8908 85.2956 80.3685 85.7358 79.8329 86.1626Z" fill="#202124"/>
                            <path class="fill-primary" d="M53.5277 85.3824C71.3153 85.3824 85.735 71.0208 85.735 53.3048C85.735 35.5889 71.3153 21.2273 53.5277 21.2273C35.74 21.2273 21.3203 35.5889 21.3203 53.3048C21.3203 71.0208 35.74 85.3824 53.5277 85.3824Z"/>
                            <path d="M75.8429 76.4326L75.6889 76.1592C75.6152 76.2326 75.5349 76.2993 75.4679 76.3726C75.2536 76.566 75.0461 76.7528 74.8318 76.9462C74.7514 77.0262 74.6711 77.0995 74.5907 77.1596L74.9121 77.2996C74.9925 77.2262 75.0728 77.1462 75.1532 77.0862L75.4478 77.2062C75.5416 77.1262 75.6286 77.0462 75.7224 76.9528V76.8128L75.6219 76.6394C75.7023 76.586 75.7692 76.5127 75.8429 76.4326ZM70.8812 79.9738C70.8611 79.9938 70.8276 80.0072 70.8075 80.0139L71.0821 80.1939C71.0955 80.1939 70.8812 79.9738 70.8812 79.9738ZM69.9973 80.7608L69.8366 80.6207C69.7429 80.6808 69.6559 80.7341 69.5621 80.7941C68.6314 81.3343 67.6605 81.8278 66.6762 82.2813C65.3705 82.8615 64.0313 83.3683 62.6452 83.7818C59.987 84.5687 57.1814 85.0222 54.282 85.0889V85.3823H54.3557C54.7507 85.369 55.1257 85.349 55.5074 85.329C55.8221 85.309 56.1435 85.289 56.4582 85.2556C56.8131 85.2156 57.1747 85.1823 57.5296 85.1356C57.563 85.1356 57.6032 85.1223 57.63 85.1223C58.0317 85.0689 58.4469 85.0089 58.842 84.9422C59.2035 84.8888 59.5718 84.8222 59.92 84.7488C59.9535 84.7355 59.9937 84.7355 60.0204 84.7288C60.2213 84.6888 60.4222 84.6488 60.6231 84.5954C60.8976 84.5354 61.1587 84.4754 61.4333 84.402C61.7346 84.3287 62.0426 84.2486 62.3439 84.1619C62.4644 84.1286 62.5783 84.0886 62.6988 84.0619C62.7189 84.0486 62.7323 84.0486 62.7524 84.0419C62.9332 83.9819 63.1273 83.9285 63.3081 83.8818C63.3483 83.8618 63.3885 83.8485 63.4287 83.8418C63.4487 83.8285 63.4621 83.8285 63.4822 83.8218C63.6161 83.7818 63.7367 83.7418 63.8639 83.6884C64.0849 83.6151 64.2991 83.5484 64.5201 83.455C64.5937 83.435 64.6741 83.4017 64.7411 83.375C65.0223 83.275 65.2968 83.1749 65.5713 83.0616C65.9664 82.9015 66.3481 82.7414 66.7297 82.5681C66.79 82.5347 66.8436 82.5147 66.9038 82.488C67.1851 82.368 67.4663 82.2279 67.7542 82.0879C68.1359 81.9078 68.5109 81.7078 68.8858 81.5077C69.1068 81.3877 69.3278 81.2676 69.5554 81.1342C69.6492 81.0809 69.7295 81.0342 69.8166 80.9809C69.9103 80.9275 69.9973 80.8675 70.0911 80.8208L69.9973 80.7608ZM75.8429 76.4326L75.6889 76.1592C75.6152 76.2326 75.5349 76.2993 75.4679 76.3726C75.2536 76.566 75.0461 76.7528 74.8318 76.9462C74.7514 77.0262 74.6711 77.0995 74.5907 77.1596L74.9121 77.2996C74.9925 77.2262 75.0728 77.1462 75.1532 77.0862L75.4478 77.2062C75.5416 77.1262 75.6286 77.0462 75.7224 76.9528V76.8128L75.6219 76.6394C75.7023 76.586 75.7692 76.5127 75.8429 76.4326ZM70.8142 80.0139L71.0888 80.1939C71.1022 80.1939 70.8879 79.9738 70.8879 79.9738C70.8611 79.9938 70.8343 80.0072 70.8142 80.0139ZM69.8366 80.6207C69.7429 80.6808 69.6559 80.7341 69.5621 80.7941C68.6314 81.3343 67.6605 81.8278 66.6762 82.2813C65.3705 82.8615 64.0313 83.3683 62.6452 83.7818C59.987 84.5687 57.1814 85.0222 54.282 85.0889V85.3823H54.3557C54.7507 85.369 55.1257 85.349 55.5074 85.329C55.8221 85.309 56.1435 85.289 56.4582 85.2556C56.8131 85.2156 57.1747 85.1823 57.5296 85.1356C57.563 85.1356 57.6032 85.1223 57.63 85.1223C58.0317 85.0689 58.4469 85.0089 58.842 84.9422C59.2035 84.8888 59.5718 84.8222 59.92 84.7488C59.9535 84.7355 59.9937 84.7355 60.0204 84.7288C60.2213 84.6888 60.4222 84.6488 60.6231 84.5954C60.8976 84.5354 61.1587 84.4754 61.4333 84.402C61.7346 84.3287 62.0426 84.2486 62.3439 84.1619C62.4644 84.1286 62.5783 84.0886 62.6988 84.0619C62.7189 84.0486 62.7323 84.0486 62.7524 84.0419C62.9332 83.9819 63.1273 83.9285 63.3081 83.8818C63.3483 83.8618 63.3885 83.8485 63.4287 83.8418C63.4487 83.8285 63.4621 83.8285 63.4822 83.8218C63.6161 83.7818 63.7367 83.7418 63.8639 83.6884C64.0849 83.6151 64.2991 83.5484 64.5201 83.455C64.5937 83.435 64.6741 83.4017 64.7411 83.375C65.0223 83.275 65.2968 83.1749 65.5713 83.0616C65.9664 82.9015 66.3481 82.7414 66.7297 82.5681C66.79 82.5347 66.8436 82.5147 66.9038 82.488C67.1851 82.368 67.4663 82.2279 67.7542 82.0879C68.1359 81.9078 68.5109 81.7078 68.8858 81.5077C69.1068 81.3877 69.3278 81.2676 69.5554 81.1342C69.6492 81.0809 69.7295 81.0342 69.8166 80.9809C69.9103 80.9275 69.9973 80.8675 70.0911 80.8208L70.0107 80.7474L69.8366 80.6207ZM84.1458 42.3744C83.9918 41.9743 83.8445 41.5675 83.6838 41.1807C82.0701 37.1994 79.6528 33.5448 76.5125 30.4171C70.3723 24.3016 62.21 20.9338 53.5254 20.9338C50.4721 20.9338 47.4857 21.3473 44.6399 22.1609C44.2248 22.2743 43.823 22.3943 43.4213 22.5344C38.6136 24.0816 34.2211 26.7558 30.545 30.4171C29.6478 31.3107 28.7974 32.2577 28.0274 33.2447C27.7461 33.5781 27.4917 33.9182 27.2372 34.2584C23.1929 39.7602 21.0234 46.3691 21.0234 53.3115C21.0234 61.9611 24.3982 70.0905 30.5383 76.2059C32.527 78.1866 34.7367 79.8871 37.1137 81.2676C38.3792 82.0212 39.6983 82.6748 41.0509 83.2416C43.9101 84.4153 46.9366 85.1823 50.0569 85.5024C51.1952 85.6358 52.3603 85.6958 53.5187 85.6958C53.7731 85.6958 54.0209 85.6958 54.2753 85.6758C57.1814 85.6224 60.0204 85.1756 62.739 84.3753C64.1116 83.9752 65.4642 83.4817 66.7699 82.8882C67.8881 82.408 68.993 81.8411 70.0509 81.2009C70.1446 81.1609 70.2451 81.1009 70.3321 81.0409C70.4125 80.9875 70.5062 80.9408 70.5866 80.8808C70.7674 80.7808 70.9482 80.6674 71.1223 80.5474C71.2227 80.4874 71.3231 80.414 71.4236 80.354C72.6556 79.5404 73.8341 78.6334 74.959 77.6464C75.0394 77.573 75.1331 77.5063 75.2135 77.4263C75.2938 77.3663 75.3675 77.2929 75.4478 77.2129C75.5416 77.1329 75.6286 77.0529 75.7224 76.9595C75.8161 76.8795 75.9031 76.7994 75.9835 76.6994C76.0638 76.6394 76.1442 76.566 76.2178 76.486C76.3183 76.3926 76.412 76.3059 76.5125 76.2059C76.566 76.1525 76.6129 76.1059 76.6665 76.0458C76.7401 75.9725 76.8071 75.9058 76.8807 75.8324C76.9544 75.7591 77.0214 75.6924 77.095 75.6124C82.8736 69.577 86.0407 61.6943 86.0407 53.3115C86.0341 49.5169 85.3845 45.8356 84.1458 42.3744ZM74.5907 77.1596C74.5104 77.2396 74.43 77.3129 74.3363 77.3796C73.6801 77.9532 72.9904 78.4933 72.2873 79.0068C72.1467 79.1069 72.0128 79.2069 71.8722 79.3003C71.6311 79.4737 71.3901 79.6404 71.1357 79.8005C71.0553 79.8605 70.9616 79.9138 70.8812 79.9738C70.8611 79.9938 70.8276 80.0072 70.8075 80.0139C70.7138 80.0739 70.6335 80.1339 70.5464 80.1873C70.3924 80.2873 70.2451 80.3806 70.0911 80.4673C69.9973 80.5207 69.917 80.5674 69.8299 80.6207C69.7362 80.6808 69.6492 80.7341 69.5554 80.7941C68.6247 81.3343 67.6538 81.8278 66.6695 82.2813C65.3638 82.8615 64.0246 83.3683 62.6385 83.7818C59.9803 84.5687 57.1747 85.0222 54.2753 85.0889C54.0209 85.0956 53.7731 85.0956 53.5187 85.0956C52.3469 85.0956 51.1952 85.0356 50.0569 84.9155C46.9366 84.5754 43.9502 83.7885 41.1514 82.6147C39.7854 82.0412 38.473 81.3743 37.2209 80.6207C27.8801 75.0655 21.606 64.9087 21.606 53.3115C21.606 46.3291 23.8692 39.8736 27.7127 34.6318C27.9537 34.2917 28.2148 33.9449 28.4827 33.6181C32.3328 28.7832 37.5623 25.0819 43.582 23.1079C43.9837 22.9745 44.3922 22.8478 44.8006 22.7344C47.566 21.9475 50.4988 21.5274 53.5187 21.5274C66.8904 21.5274 78.3605 29.7568 83.1079 41.3941C83.2686 41.7876 83.4226 42.1877 83.5633 42.5878C84.7752 45.9356 85.4314 49.5502 85.4314 53.3115C85.4314 61.741 82.1169 69.4236 76.7133 75.1189C76.6397 75.1922 76.5727 75.2722 76.4991 75.3389C76.4254 75.4123 76.3652 75.479 76.2848 75.5523C76.1643 75.6857 76.0304 75.8124 75.9031 75.9458C75.8295 76.0192 75.7491 76.0859 75.6822 76.1659C75.6085 76.2392 75.5282 76.3059 75.4612 76.3793C75.2469 76.5727 75.0394 76.7594 74.8251 76.9528C74.7514 77.0262 74.6711 77.0995 74.5907 77.1596ZM69.9973 80.7608L69.8366 80.6207C69.7429 80.6808 69.6559 80.7341 69.5621 80.7941C68.6314 81.3343 67.6605 81.8278 66.6762 82.2813C65.3705 82.8615 64.0313 83.3683 62.6452 83.7818C59.987 84.5687 57.1814 85.0222 54.282 85.0889V85.3823H54.3557C54.7507 85.369 55.1257 85.349 55.5074 85.329C55.8221 85.309 56.1435 85.289 56.4582 85.2556C56.8131 85.2156 57.1747 85.1823 57.5296 85.1356C57.563 85.1356 57.6032 85.1223 57.63 85.1223C58.0317 85.0689 58.4469 85.0089 58.842 84.9422C59.2035 84.8888 59.5718 84.8222 59.92 84.7488C59.9535 84.7355 59.9937 84.7355 60.0204 84.7288C60.2213 84.6888 60.4222 84.6488 60.6231 84.5954C60.8976 84.5354 61.1587 84.4754 61.4333 84.402C61.7346 84.3287 62.0426 84.2486 62.3439 84.1619C62.4644 84.1286 62.5783 84.0886 62.6988 84.0619C62.7189 84.0486 62.7323 84.0486 62.7524 84.0419C62.9332 83.9819 63.1273 83.9285 63.3081 83.8818C63.3483 83.8618 63.3885 83.8485 63.4287 83.8418C63.4487 83.8285 63.4621 83.8285 63.4822 83.8218C63.6161 83.7818 63.7367 83.7418 63.8639 83.6884C64.0849 83.6151 64.2991 83.5484 64.5201 83.455C64.5937 83.435 64.6741 83.4017 64.7411 83.375C65.0223 83.275 65.2968 83.1749 65.5713 83.0616C65.9664 82.9015 66.3481 82.7414 66.7297 82.5681C66.79 82.5347 66.8436 82.5147 66.9038 82.488C67.1851 82.368 67.4663 82.2279 67.7542 82.0879C68.1359 81.9078 68.5109 81.7078 68.8858 81.5077C69.1068 81.3877 69.3278 81.2676 69.5554 81.1342C69.6492 81.0809 69.7295 81.0342 69.8166 80.9809C69.9103 80.9275 69.9973 80.8675 70.0911 80.8208L69.9973 80.7608ZM70.8812 79.9738C70.8611 79.9938 70.8276 80.0072 70.8075 80.0139L71.0821 80.1939C71.0955 80.1939 70.8812 79.9738 70.8812 79.9738ZM75.8429 76.4326L75.6889 76.1592C75.6152 76.2326 75.5349 76.2993 75.4679 76.3726C75.2536 76.566 75.0461 76.7528 74.8318 76.9462C74.7514 77.0262 74.6711 77.0995 74.5907 77.1596L74.9121 77.2996C74.9925 77.2262 75.0728 77.1462 75.1532 77.0862L75.4478 77.2062C75.5416 77.1262 75.6286 77.0462 75.7224 76.9528V76.8128L75.6219 76.6394C75.7023 76.586 75.7692 76.5127 75.8429 76.4326ZM69.9973 80.7608L69.8366 80.6207C69.7429 80.6808 69.6559 80.7341 69.5621 80.7941C68.6314 81.3343 67.6605 81.8278 66.6762 82.2813C65.3705 82.8615 64.0313 83.3683 62.6452 83.7818C59.987 84.5687 57.1814 85.0222 54.282 85.0889V85.3823H54.3557C54.7507 85.369 55.1257 85.349 55.5074 85.329C55.8221 85.309 56.1435 85.289 56.4582 85.2556C56.8131 85.2156 57.1747 85.1823 57.5296 85.1356C57.563 85.1356 57.6032 85.1223 57.63 85.1223C58.0317 85.0689 58.4469 85.0089 58.842 84.9422C59.2035 84.8888 59.5718 84.8222 59.92 84.7488C59.9535 84.7355 59.9937 84.7355 60.0204 84.7288C60.2213 84.6888 60.4222 84.6488 60.6231 84.5954C60.8976 84.5354 61.1587 84.4754 61.4333 84.402C61.7346 84.3287 62.0426 84.2486 62.3439 84.1619C62.4644 84.1286 62.5783 84.0886 62.6988 84.0619C62.7189 84.0486 62.7323 84.0486 62.7524 84.0419C62.9332 83.9819 63.1273 83.9285 63.3081 83.8818C63.3483 83.8618 63.3885 83.8485 63.4287 83.8418C63.4487 83.8285 63.4621 83.8285 63.4822 83.8218C63.6161 83.7818 63.7367 83.7418 63.8639 83.6884C64.0849 83.6151 64.2991 83.5484 64.5201 83.455C64.5937 83.435 64.6741 83.4017 64.7411 83.375C65.0223 83.275 65.2968 83.1749 65.5713 83.0616C65.9664 82.9015 66.3481 82.7414 66.7297 82.5681C66.79 82.5347 66.8436 82.5147 66.9038 82.488C67.1851 82.368 67.4663 82.2279 67.7542 82.0879C68.1359 81.9078 68.5109 81.7078 68.8858 81.5077C69.1068 81.3877 69.3278 81.2676 69.5554 81.1342C69.6492 81.0809 69.7295 81.0342 69.8166 80.9809C69.9103 80.9275 69.9973 80.8675 70.0911 80.8208L69.9973 80.7608ZM70.8812 79.9738C70.8611 79.9938 70.8276 80.0072 70.8075 80.0139L71.0821 80.1939C71.0955 80.1939 70.8812 79.9738 70.8812 79.9738ZM75.8429 76.4326L75.6889 76.1592C75.6152 76.2326 75.5349 76.2993 75.4679 76.3726C75.2536 76.566 75.0461 76.7528 74.8318 76.9462C74.7514 77.0262 74.6711 77.0995 74.5907 77.1596L74.9121 77.2996C74.9925 77.2262 75.0728 77.1462 75.1532 77.0862L75.4478 77.2062C75.5416 77.1262 75.6286 77.0462 75.7224 76.9528V76.8128L75.6219 76.6394C75.7023 76.586 75.7692 76.5127 75.8429 76.4326Z" fill="#202124"/>
                            <path d="M53.5274 74.4186C65.2354 74.4186 74.7266 64.9656 74.7266 53.3047C74.7266 41.6439 65.2354 32.1909 53.5274 32.1909C41.8194 32.1909 32.3281 41.6439 32.3281 53.3047C32.3281 64.9656 41.8194 74.4186 53.5274 74.4186Z" fill="white"/>
                            <path d="M73.7992 46.1757C73.6586 45.7756 73.5046 45.3821 73.3439 44.9886C72.2726 42.4745 70.7191 40.1603 68.717 38.1663C64.6593 34.125 59.2624 31.8909 53.5173 31.8909C51.5487 31.8909 49.6203 32.151 47.7722 32.6645C47.3571 32.7778 46.9419 32.8979 46.5402 33.0446C43.4801 34.0783 40.6746 35.8189 38.3176 38.1663C37.715 38.7732 37.1458 39.4067 36.6235 40.067C36.3624 40.4004 36.1012 40.7405 35.8535 41.094C33.3693 44.6419 32.0234 48.87 32.0234 53.3048C32.0234 59.0201 34.2532 64.4019 38.3176 68.4433C38.5787 68.7034 38.8533 68.9634 39.1345 69.2169C40.3063 70.2705 41.5919 71.1909 42.9445 71.9511C45.1474 73.1915 47.5379 74.0318 50.0555 74.4253C51.1871 74.6187 52.3455 74.7054 53.5173 74.7054C53.7718 74.7054 54.0195 74.7054 54.274 74.6854C56.564 74.612 58.787 74.1852 60.8895 73.4049C62.2756 72.9114 63.5947 72.2779 64.8468 71.491C66.2329 70.6373 67.5319 69.6103 68.717 68.4299C72.7748 64.3885 75.0179 59.0067 75.0179 53.2915C75.0246 50.844 74.6094 48.4298 73.7992 46.1757ZM54.2807 74.1119C54.0262 74.1319 53.7785 74.1319 53.524 74.1319C52.3455 74.1319 51.1938 74.0318 50.0622 73.8384C47.5446 73.4249 45.1876 72.558 43.065 71.3242C41.6923 70.5306 40.4067 69.5836 39.2684 68.51C35.1906 64.7087 32.6328 59.2935 32.6328 53.3115C32.6328 48.9233 34.0054 44.8419 36.349 41.4808C36.5901 41.1273 36.8445 40.7872 37.1056 40.4538C39.563 37.346 42.8909 34.9386 46.721 33.6248C47.1227 33.4847 47.5379 33.3514 47.953 33.2447C49.7274 32.7512 51.5956 32.4911 53.5307 32.4911C62.1751 32.4911 69.6076 37.7395 72.7815 45.202C72.9556 45.5955 73.1029 45.989 73.2435 46.3891C74.0202 48.5632 74.4353 50.884 74.4353 53.3115C74.4353 60.674 70.5785 67.1695 64.7531 70.8641C63.521 71.6577 62.1952 72.3246 60.8025 72.8247C58.7535 73.585 56.564 74.0385 54.2807 74.1119Z" fill="#202124"/>
                            <path class="fill-primary" d="M61.5638 61.314C66.0039 56.8918 66.0039 49.722 61.5638 45.2998C57.1237 40.8776 49.9249 40.8776 45.4848 45.2998C41.0447 49.722 41.0447 56.8918 45.4848 61.314C49.9249 65.7362 57.1237 65.7362 61.5638 61.314Z"/>
                            <path d="M44.9272 60.2404L44.867 60.6338C45.0076 60.7939 45.1482 60.954 45.3022 61.114C45.5365 61.3674 45.7843 61.5942 46.0521 61.8276C46.0655 61.8476 46.0856 61.8609 46.1057 61.8676C46.3066 62.0477 46.5208 62.221 46.7284 62.3811C46.7887 62.4345 46.8423 62.4745 46.9025 62.5145C47.0364 62.6078 47.1637 62.6945 47.3043 62.7879C47.7462 63.0813 48.2015 63.3281 48.6903 63.5615C48.7104 63.5748 48.7238 63.5748 48.7439 63.5815C49.1657 63.7749 49.6144 63.955 50.0697 64.095V63.7816C48.0207 63.108 46.253 61.8676 44.9272 60.2404ZM44.9272 60.2404L44.867 60.6338C45.0076 60.7939 45.1482 60.954 45.3022 61.114C45.5365 61.3674 45.7843 61.5942 46.0521 61.8276C46.0655 61.8476 46.0856 61.8609 46.1057 61.8676C46.3066 62.0477 46.5208 62.221 46.7284 62.3811C46.7887 62.4345 46.8423 62.4745 46.9025 62.5145C47.0364 62.6078 47.1637 62.6945 47.3043 62.7879C47.7462 63.0813 48.2015 63.3281 48.6903 63.5615C48.7104 63.5748 48.7238 63.5748 48.7439 63.5815C49.1657 63.7749 49.6144 63.955 50.0697 64.095V63.7816C48.0207 63.108 46.253 61.8676 44.9272 60.2404ZM64.573 49.5901C64.4391 49.1766 64.2784 48.7832 64.0909 48.403C62.2295 44.4417 58.2052 41.6941 53.5248 41.6941C52.507 41.6941 51.516 41.8275 50.5786 42.0676C50.1634 42.1809 49.7483 42.3076 49.3599 42.4677C47.3578 43.2346 45.6236 44.5284 44.3313 46.1889C44.0701 46.5224 43.8291 46.8758 43.6014 47.236C42.5033 49.0032 41.8672 51.0906 41.8672 53.3114C41.8672 53.9649 41.9208 54.5985 42.0279 55.2253C42.3895 57.4194 43.3805 59.4068 44.8134 61.0073C46.1994 62.5745 48.014 63.7749 50.063 64.4085C51.1611 64.7486 52.3262 64.9286 53.5248 64.9286C53.7792 64.9286 54.027 64.9153 54.2814 64.9086C56.0558 64.7886 57.7365 64.2751 59.2096 63.4481C60.676 62.6345 61.9482 61.5075 62.9392 60.1603C64.3521 58.2397 65.1891 55.8656 65.1891 53.3114C65.1891 52.0109 64.9748 50.7572 64.573 49.5901ZM54.2814 64.3018C54.027 64.3218 53.7792 64.3351 53.5248 64.3351C52.3128 64.3351 51.1544 64.1417 50.063 63.7816C48.0207 63.108 46.253 61.8676 44.9339 60.2404C43.7956 58.8532 42.9921 57.1727 42.6506 55.332C42.5167 54.6785 42.4564 54.0049 42.4564 53.3114C42.4564 51.2307 43.039 49.27 44.0634 47.6094C44.2844 47.236 44.5255 46.8825 44.7933 46.5557C46.0187 44.9885 47.6391 43.7615 49.5273 43.0345C49.9224 42.8745 50.3241 42.7411 50.7527 42.6411C51.6432 42.401 52.5673 42.281 53.5315 42.281C57.9575 42.281 61.7741 44.8685 63.5486 48.6098C63.7293 48.9899 63.89 49.3967 64.024 49.7968C64.4056 50.9039 64.6065 52.0909 64.6065 53.318C64.6065 55.5321 63.9369 57.6062 62.7986 59.3334C61.8679 60.7739 60.5957 61.9676 59.1092 62.8346C57.6762 63.6615 56.029 64.1951 54.2814 64.3018ZM44.9272 60.2404L44.867 60.6338C45.0076 60.7939 45.1482 60.954 45.3022 61.114C45.5365 61.3674 45.7843 61.5942 46.0521 61.8276C46.0655 61.8476 46.0856 61.8609 46.1057 61.8676C46.3066 62.0477 46.5208 62.221 46.7284 62.3811C46.7887 62.4345 46.8423 62.4745 46.9025 62.5145C47.0364 62.6078 47.1637 62.6945 47.3043 62.7879C47.7462 63.0813 48.2015 63.3281 48.6903 63.5615C48.7104 63.5748 48.7238 63.5748 48.7439 63.5815C49.1657 63.7749 49.6144 63.955 50.0697 64.095V63.7816C48.0207 63.108 46.253 61.8676 44.9272 60.2404ZM44.9272 60.2404L44.867 60.6338C45.0076 60.7939 45.1482 60.954 45.3022 61.114C45.5365 61.3674 45.7843 61.5942 46.0521 61.8276C46.0655 61.8476 46.0856 61.8609 46.1057 61.8676C46.3066 62.0477 46.5208 62.221 46.7284 62.3811C46.7887 62.4345 46.8423 62.4745 46.9025 62.5145C47.0364 62.6078 47.1637 62.6945 47.3043 62.7879C47.7462 63.0813 48.2015 63.3281 48.6903 63.5615C48.7104 63.5748 48.7238 63.5748 48.7439 63.5815C49.1657 63.7749 49.6144 63.955 50.0697 64.095V63.7816C48.0207 63.108 46.253 61.8676 44.9272 60.2404Z" fill="#202124"/>
                            <path d="M53.527 57.6461C55.9344 57.6461 57.886 55.7023 57.886 53.3046C57.886 50.9069 55.9344 48.9631 53.527 48.9631C51.1196 48.9631 49.168 50.9069 49.168 53.3046C49.168 55.7023 51.1196 57.6461 53.527 57.6461Z" fill="#202124"/>
                            <path d="M58.0323 51.951C57.7711 51.951 57.5234 51.791 57.4296 51.5309C57.3091 51.1974 57.4765 50.8306 57.8113 50.7106L113.87 30.0569C114.204 29.9369 114.573 30.1036 114.693 30.4371C114.814 30.7705 114.646 31.1373 114.311 31.2573L58.2532 51.911C58.1796 51.9377 58.1059 51.951 58.0323 51.951Z" fill="#1C1C1C"/>
                            <path d="M53.5273 53.3048L58.6028 48.6099L60.1764 52.878L53.5273 53.3048Z" fill="white"/>
                            <path d="M60.4497 52.7781L59.9074 51.2976L59.4721 50.1038L58.8896 48.5033C58.8494 48.4099 58.7691 48.3432 58.6753 48.3232C58.5749 48.3032 58.4744 48.3232 58.4008 48.3966L56.5125 50.1438L53.3186 53.0915C53.2784 53.1315 53.2449 53.1849 53.2382 53.2316C53.2182 53.2916 53.2249 53.3649 53.2516 53.425C53.2851 53.4983 53.3454 53.5583 53.4123 53.5783C53.4458 53.5983 53.486 53.6117 53.5262 53.6117C53.5463 53.6117 57.8919 53.3383 57.8919 53.3383L60.202 53.1849C60.2957 53.1715 60.3761 53.1249 60.423 53.0448C60.4698 52.9648 60.4832 52.8648 60.4497 52.7781ZM54.3431 52.9581L56.921 50.5773L58.4878 49.1302L58.9231 50.3039L59.365 51.4976L59.7668 52.6113L57.845 52.7314L54.3431 52.9581Z" fill="#1C1C1C"/>
                            <path d="M99.7578 35.8722L100.293 31.1106L112.246 26.6558L111.924 31.3373L99.7578 35.8722Z" fill="white"/>
                            <path d="M112.428 26.4224C112.348 26.3624 112.234 26.3424 112.147 26.3824L109.013 27.5495L103.429 29.6302C103.409 29.6302 103.389 29.6435 103.369 29.6502L101.782 30.2437L101.507 30.3437L101.213 30.4571L100.181 30.8372C100.081 30.8706 100.001 30.9706 99.9872 31.0773L99.5051 35.3454C99.5051 35.3588 99.4515 35.8389 99.4515 35.8389C99.4381 35.939 99.485 36.039 99.5653 36.1124C99.5854 36.1324 99.6189 36.1457 99.639 36.1457C99.6791 36.1657 99.7126 36.179 99.7528 36.179C99.793 36.179 99.8265 36.1657 99.8666 36.159L102.806 35.0653L103.141 34.9453L103.335 34.8719L103.429 34.8319L103.71 34.7319L105.893 33.9183C105.906 33.9183 106.328 33.7582 106.328 33.7582L108.578 32.9113L109.04 32.7379L110.727 32.1043L111.189 31.9309L112.026 31.6175C112.1 31.5842 112.147 31.5375 112.18 31.4774C112.214 31.4441 112.221 31.4041 112.221 31.3641L112.274 30.6505L112.549 26.6758C112.549 26.5758 112.509 26.4824 112.428 26.4224ZM111.665 30.8772L111.645 31.1307L103.496 34.165L103.215 34.2651L102.933 34.3784L100.114 35.4255L100.148 35.1254C100.148 35.1187 100.57 31.3241 100.57 31.3241L101.48 30.9839L101.762 30.8839C101.775 30.8839 102.043 30.7705 102.043 30.7705L103.134 30.3704L103.77 30.137L105.813 29.3701L106.442 29.13C106.455 29.13 108.772 28.263 108.772 28.263L109.408 28.0296L111.933 27.0826L111.665 30.8772Z" fill="#1C1C1C"/>
                            <path d="M103.215 32.1976C103.014 32.1709 102.9 32.0242 102.92 31.8641L103.195 29.8768C103.215 29.7167 103.369 29.6034 103.53 29.6234C103.69 29.6434 103.804 29.7968 103.784 29.9568L103.509 31.9442C103.489 32.0909 103.362 32.1976 103.215 32.1976Z" fill="#1C1C1C"/>
                            <path d="M105.672 32.8645C105.471 32.8379 105.357 32.6911 105.377 32.5311L105.866 28.9432C105.886 28.7832 106.04 28.6698 106.201 28.6898C106.362 28.7098 106.475 28.8632 106.455 29.0232L105.967 32.6111C105.94 32.7578 105.819 32.8645 105.672 32.8645Z" fill="#1C1C1C"/>
                            <path d="M108.738 30.9772C108.537 30.9505 108.424 30.8038 108.444 30.6438L108.839 27.7828C108.859 27.6228 109.013 27.5094 109.174 27.5294C109.334 27.5494 109.448 27.7028 109.428 27.8628L109.033 30.7238C109.006 30.8705 108.879 30.9772 108.738 30.9772Z" fill="#1C1C1C"/>
                            <path d="M115.704 35.0787L112.122 31.7576L99.9219 36.2191L103.297 39.6202L115.704 35.0787Z" fill="white"/>
                            <path d="M110.815 32.3778C110.774 32.3444 110.754 32.2977 110.741 32.2577L109.154 32.8379L108.578 33.0513L106.429 33.8383L105.886 34.0383L103.744 34.8253L103.462 34.9253L103.409 34.9453L103.509 35.0653C103.529 35.1053 103.55 35.1587 103.563 35.2054L103.623 35.1854L103.844 35.1054L106.054 34.2917L106.663 34.0717L108.786 33.2981L109.388 33.078C109.402 33.078 110.942 32.5045 110.942 32.5045L110.815 32.3778ZM110.815 32.3778C110.774 32.3444 110.754 32.2977 110.741 32.2577L109.154 32.8379L108.578 33.0513L106.429 33.8383L105.886 34.0383L103.744 34.8253L103.462 34.9253L103.409 34.9453L103.509 35.0653C103.529 35.1053 103.55 35.1587 103.563 35.2054L103.623 35.1854L103.844 35.1054L106.054 34.2917L106.663 34.0717L108.786 33.2981L109.388 33.078C109.402 33.078 110.942 32.5045 110.942 32.5045L110.815 32.3778ZM115.904 34.8653L112.669 31.8709L112.314 31.5508C112.274 31.5108 112.234 31.4908 112.174 31.4775C112.12 31.4574 112.06 31.4641 112.013 31.4908L110.895 31.9043L108.746 32.6912L103.637 34.5652L103.362 34.6652L103.067 34.7652L103.007 34.7986L99.8266 35.9523C99.7262 35.9923 99.6659 36.0657 99.6458 36.1524C99.6123 36.2657 99.6458 36.3658 99.7195 36.4325L99.8735 36.5925L103.088 39.8403C103.148 39.8936 103.228 39.9203 103.302 39.9203C103.342 39.9203 103.375 39.9203 103.402 39.907L104.614 39.4668L104.895 39.3668L105.177 39.2534L115.81 35.3588C115.91 35.3254 115.984 35.2454 116.004 35.1454C116.017 35.0453 115.977 34.932 115.904 34.8653ZM103.369 39.2801L100.469 36.3658C100.449 36.3458 103.014 35.3988 103.014 35.3988L103.275 35.3054L103.556 35.2054L103.616 35.1854L103.837 35.1054L106.047 34.2917L106.656 34.0717L108.779 33.2981L109.382 33.078C109.395 33.078 110.935 32.5045 110.935 32.5045L111.565 32.2711L112.04 32.0977L115.14 34.972L105.003 38.6732L104.728 38.7866L104.447 38.8866L103.369 39.2801ZM110.815 32.3778C110.774 32.3444 110.754 32.2977 110.741 32.2577L109.154 32.8379L108.578 33.0513L106.429 33.8383L105.886 34.0383L103.744 34.8253L103.462 34.9253L103.409 34.9453L103.509 35.0653C103.529 35.1053 103.55 35.1587 103.563 35.2054L103.623 35.1854L103.844 35.1054L106.054 34.2917L106.663 34.0717L108.786 33.2981L109.388 33.078C109.402 33.078 110.942 32.5045 110.942 32.5045L110.815 32.3778ZM110.815 32.3778C110.774 32.3444 110.754 32.2977 110.741 32.2577L109.154 32.8379L108.578 33.0513L106.429 33.8383L105.886 34.0383L103.744 34.8253L103.462 34.9253L103.409 34.9453L103.509 35.0653C103.529 35.1053 103.55 35.1587 103.563 35.2054L103.623 35.1854L103.844 35.1054L106.054 34.2917L106.663 34.0717L108.786 33.2981L109.388 33.078C109.402 33.078 110.942 32.5045 110.942 32.5045L110.815 32.3778Z" fill="#1C1C1C"/>
                            <path d="M113.347 34.5518C113.273 34.5518 113.206 34.5251 113.146 34.4784L110.822 32.3777C110.702 32.271 110.695 32.0843 110.802 31.9642C110.909 31.8442 111.097 31.8375 111.217 31.9442L113.541 34.0449C113.661 34.1516 113.668 34.3384 113.561 34.4584C113.507 34.5184 113.427 34.5518 113.347 34.5518Z" fill="#1C1C1C"/>
                            <path d="M110.291 34.6452C110.217 34.6452 110.143 34.6185 110.083 34.5585L108.643 33.158C108.53 33.0446 108.523 32.8579 108.637 32.7379C108.751 32.6245 108.938 32.6178 109.059 32.7312L110.498 34.1317C110.612 34.245 110.619 34.4318 110.505 34.5451C110.445 34.6185 110.371 34.6452 110.291 34.6452Z" fill="#1C1C1C"/>
                            <path d="M108.934 37.0127C108.861 37.0127 108.78 36.986 108.727 36.926L105.968 34.205C105.854 34.0917 105.854 33.9049 105.968 33.7916C106.082 33.6782 106.27 33.6782 106.39 33.7916L109.149 36.5125C109.263 36.6259 109.263 36.8126 109.149 36.926C109.082 36.9793 109.008 37.0127 108.934 37.0127Z" fill="#1C1C1C"/>
                            <path d="M105.143 37.5529C105.063 37.5529 104.983 37.5195 104.922 37.4595L102.887 35.2588C102.773 35.1387 102.786 34.952 102.907 34.8453C103.027 34.7319 103.215 34.7453 103.322 34.8653L105.358 37.0661C105.472 37.1861 105.458 37.3728 105.338 37.4795C105.284 37.5262 105.217 37.5529 105.143 37.5529Z" fill="#1C1C1C"/>
                            <path d="M51.7799 48.97C51.5054 48.97 51.2509 48.7899 51.1639 48.5098L38.589 6.36219C38.4885 6.02208 38.6827 5.66862 39.0242 5.56859C39.3657 5.46856 39.7206 5.66196 39.821 6.00207L52.3959 48.1497C52.4964 48.4898 52.3022 48.8433 51.9607 48.9433C51.9004 48.9633 51.8402 48.97 51.7799 48.97Z" fill="#1C1C1C"/>
                            <path d="M53.103 51.7109L49.8555 48.0963L53.5114 46.6292L53.103 51.7109Z" fill="white"/>
                            <path d="M53.6863 46.4024C53.606 46.3424 53.5055 46.3224 53.4051 46.3624L52.019 46.9159L50.8272 47.3894L49.7491 47.8162C49.6554 47.8562 49.5884 47.9362 49.5683 48.0296C49.5483 48.123 49.5817 48.223 49.642 48.2897L49.7759 48.4297L50.9879 49.7769L51.0682 49.8769L52.8962 51.8976C52.9498 51.9709 53.0301 51.9976 53.1105 51.9976C53.144 51.9976 53.1841 51.9976 53.2109 51.9843C53.3247 51.9443 53.4051 51.8442 53.4118 51.7242L53.6328 48.9566L53.8135 46.6425C53.8135 46.5491 53.7734 46.4624 53.6863 46.4024ZM53.0301 48.9966L52.8694 50.9973L51.4968 49.4701L50.3652 48.2097L51.0013 47.9562L52.1931 47.4761L53.1841 47.0826L53.0301 48.9966Z" fill="#1C1C1C"/>
                            <path d="M42.3516 16.9525L37.9323 16.7258L35.207 7.73608L39.5728 7.80944L42.3516 16.9525Z" fill="white"/>
                            <path d="M42.6388 16.8658L41.9826 14.7118L41.8219 14.1782L41.467 13.0112L41.3867 12.7311L41.293 12.451L41.2729 12.391L41.139 11.9308L40.6635 10.3836L40.5095 9.89012L40.168 8.76307C40.168 8.74974 40.014 8.26957 40.014 8.26957L39.8533 7.72939C39.8199 7.64936 39.773 7.58934 39.6993 7.556C39.6592 7.52265 39.619 7.51599 39.5654 7.51599L38.9159 7.50265L35.1863 7.44263C35.0925 7.44263 35.0055 7.48264 34.9519 7.56267C34.8917 7.63603 34.8716 7.73606 34.8984 7.82276L35.6148 10.1836L36.7866 14.0449L36.8803 14.3383L36.9138 14.4317L36.9741 14.6251L37.6303 16.8058C37.6705 16.9258 37.7709 17.0192 37.9048 17.0192L41.8152 17.2193L42.3174 17.2526C42.4313 17.2526 42.5116 17.2126 42.5719 17.1392C42.5853 17.1259 42.592 17.1059 42.592 17.0992C42.6455 17.0259 42.6656 16.9458 42.6388 16.8658ZM38.1526 16.4457L37.6102 14.6451L37.5365 14.405L37.4428 14.1116L37.4227 14.0382L37.3625 13.8248L37.0009 12.6311L36.8201 12.0242L36.3246 10.4036L36.1438 9.79009L35.6081 8.02949L39.1034 8.08951H39.3578L40.7305 12.6177L40.8242 12.8911L40.9046 13.1846L41.9558 16.6324L41.6545 16.6124L38.1526 16.4457Z" fill="#1C1C1C"/>
                            <path d="M39.0365 14.7517C39.0164 14.7517 37.1817 14.6183 37.1817 14.6183C37.021 14.605 36.8938 14.465 36.9072 14.3049C36.9206 14.1449 37.0612 14.0181 37.2219 14.0315L39.0566 14.1649C39.2173 14.1782 39.3445 14.3182 39.3311 14.4783C39.3244 14.6317 39.1905 14.7517 39.0365 14.7517Z" fill="#1C1C1C"/>
                            <path d="M39.9655 12.8445C39.9454 12.8445 36.631 12.6044 36.631 12.6044C36.4703 12.5911 36.343 12.451 36.3564 12.291C36.3698 12.1309 36.5104 12.0042 36.6711 12.0176L39.9856 12.2576C40.1463 12.271 40.2735 12.411 40.2602 12.5711C40.2468 12.7311 40.1195 12.8445 39.9655 12.8445Z" fill="#1C1C1C"/>
                            <path d="M38.5605 10.5703C38.5404 10.5703 35.8888 10.3769 35.8888 10.3769C35.7281 10.3636 35.6009 10.2235 35.6142 10.0635C35.6276 9.9034 35.7683 9.77669 35.929 9.79003L38.5738 9.98343C38.7345 9.99676 38.8618 10.1368 38.8484 10.2969C38.8484 10.4503 38.7145 10.5703 38.5605 10.5703Z" fill="#1C1C1C"/>
                            <path d="M43.5572 4.7749L39.9883 7.64254L42.7001 16.819L46.3159 14.1047L43.5572 4.7749Z" fill="white"/>
                            <path d="M41.7677 12.6243L41.6873 12.3442L41.6539 12.2641L41.4798 11.6506L41.0579 10.2101L40.8771 9.60991L40.5758 8.5829L40.4218 8.70294C40.3816 8.72294 40.3482 8.74295 40.308 8.75629L40.6227 9.80331L40.7968 10.3835L41.232 11.844L41.3927 12.4042C41.4061 12.4242 41.4865 12.7043 41.4865 12.7043L41.5668 12.9844C41.6606 12.951 41.761 12.9244 41.848 12.9044L41.7677 12.6243ZM41.7677 12.6243L41.6873 12.3442L41.6539 12.2641L41.4798 11.6506L41.0579 10.2101L40.8771 9.60991L40.5758 8.5829L40.4218 8.70294C40.3816 8.72294 40.3482 8.74295 40.308 8.75629L40.6227 9.80331L40.7968 10.3835L41.232 11.844L41.3927 12.4042C41.4061 12.4242 41.4865 12.7043 41.4865 12.7043L41.5668 12.9844C41.6606 12.951 41.761 12.9244 41.848 12.9044L41.7677 12.6243ZM45.9794 11.9374L45.8991 11.6573L45.8187 11.3772L43.8367 4.68824C43.8033 4.59488 43.7363 4.52819 43.6425 4.49484C43.5421 4.4615 43.4417 4.48151 43.368 4.5482L40.1473 7.1224L39.7924 7.41583C39.7388 7.45585 39.7121 7.5092 39.6987 7.55588C39.6786 7.6159 39.6786 7.66925 39.6987 7.72927L39.933 8.48286C39.933 8.52288 39.9464 8.56289 39.9531 8.6029L40.4151 10.1701C40.4285 10.2101 40.4486 10.2501 40.4687 10.2835L41.1182 12.5042L41.1985 12.7843L41.2789 13.0644L41.694 14.4649C41.694 14.4982 41.7074 14.5182 41.7141 14.5382L42.4105 16.899C42.444 16.9924 42.5109 17.0724 42.6047 17.0991C42.6382 17.1125 42.6649 17.1125 42.6984 17.1125C42.7587 17.1125 42.819 17.0924 42.8792 17.0524L43.0734 16.9124L46.4883 14.3448C46.5888 14.2715 46.6289 14.1448 46.6021 14.0247L45.9794 11.9374ZM42.8591 16.3255L42.3368 14.5449L42.1628 13.9447L41.848 12.911L41.7677 12.6309L41.6873 12.3508L41.6539 12.2708L41.4798 11.6573L41.0579 10.2168L40.8771 9.61658L40.5758 8.58957L40.395 7.96269L40.3348 7.76262C40.3415 7.74928 43.3948 5.28845 43.3948 5.28845L45.2295 11.4972L45.3098 11.7773L45.3902 12.0574L45.966 13.9981L42.8859 16.2988L42.8591 16.3255ZM41.7677 12.6243L41.6873 12.3442L41.6539 12.2641L41.4798 11.6506L41.0579 10.2101L40.8771 9.60991L40.5758 8.5829L40.4218 8.70294C40.3816 8.72294 40.3482 8.74295 40.308 8.75629L40.6227 9.80331L40.7968 10.3835L41.232 11.844L41.3927 12.4042C41.4061 12.4242 41.4865 12.7043 41.4865 12.7043L41.5668 12.9844C41.6606 12.951 41.761 12.9244 41.848 12.9044L41.7677 12.6243ZM41.7677 12.6243L41.6873 12.3442L41.6539 12.2641L41.4798 11.6506L41.0579 10.2101L40.8771 9.60991L40.5758 8.5829L40.4218 8.70294C40.3816 8.72294 40.3482 8.74295 40.308 8.75629L40.6227 9.80331L40.7968 10.3835L41.232 11.844L41.3927 12.4042C41.4061 12.4242 41.4865 12.7043 41.4865 12.7043L41.5668 12.9844C41.6606 12.951 41.761 12.9244 41.848 12.9044L41.7677 12.6243Z" fill="#1C1C1C"/>
                            <path d="M40.2344 8.7696C40.1474 8.7696 40.067 8.73625 40.0067 8.66289C39.8996 8.53618 39.9197 8.34945 40.0469 8.24942L42.3101 6.38879C42.4374 6.28209 42.6248 6.30209 42.7253 6.4288C42.8324 6.55551 42.8123 6.74224 42.6851 6.84228L40.4219 8.70291C40.3683 8.74292 40.3014 8.7696 40.2344 8.7696Z" fill="#1C1C1C"/>
                            <path d="M40.7175 10.3902C40.6304 10.3902 40.5434 10.3502 40.4831 10.2769C40.3827 10.1502 40.4095 9.96342 40.5367 9.86339L42.0299 8.70966C42.1571 8.60963 42.3446 8.63631 42.445 8.76302C42.5454 8.88973 42.5187 9.07646 42.3914 9.17649L40.8983 10.3302C40.8447 10.3702 40.7777 10.3902 40.7175 10.3902Z" fill="#1C1C1C"/>
                            <path d="M41.3659 12.4108C41.2789 12.4108 41.1918 12.3708 41.1315 12.2974C41.0311 12.1707 41.0579 11.984 41.1851 11.884L44.0844 9.66987C44.2117 9.56984 44.3991 9.59651 44.4996 9.72322C44.6 9.84993 44.5732 10.0367 44.446 10.1367L41.5467 12.3508C41.4931 12.3908 41.4262 12.4108 41.3659 12.4108Z" fill="#1C1C1C"/>
                            <path d="M41.99 14.7183C41.8962 14.7183 41.8092 14.6783 41.7489 14.5916C41.6552 14.4583 41.6887 14.2782 41.8159 14.1782L44.1394 12.5309C44.2733 12.4376 44.4608 12.4709 44.5545 12.5976C44.6483 12.731 44.6148 12.9111 44.4876 13.0111L42.1641 14.6583C42.1105 14.6983 42.0502 14.7183 41.99 14.7183Z" fill="#1C1C1C"/>
                            <path d="M49.4551 51.7108C49.3144 51.7108 49.1738 51.6642 49.0533 51.5708L7.1034 18.2662C6.82887 18.0461 6.782 17.646 7.00296 17.3659C7.22393 17.0924 7.62568 17.0458 7.90691 17.2658L49.8635 50.5704C50.138 50.7905 50.1849 51.1907 49.9639 51.4708C49.83 51.6308 49.6425 51.7108 49.4551 51.7108Z" fill="#1C1C1C"/>
                            <path d="M53.1184 53.5848L47.4336 51.7575L49.9245 48.6631L53.1184 53.5848Z" fill="white"/>
                            <path d="M53.3728 53.4313L53.2388 53.2313L51.056 49.8835L50.9957 49.7701L50.1654 48.503C50.1119 48.4296 50.0248 48.383 49.9311 48.3696C49.8708 48.3696 49.8105 48.3896 49.757 48.4297C49.7235 48.443 49.7034 48.463 49.6833 48.483L48.7124 49.6767L47.9156 50.6704L47.2058 51.5774C47.1456 51.6507 47.1255 51.7508 47.1523 51.8375C47.1857 51.9375 47.2527 52.0109 47.3464 52.0375L49.2347 52.6444L53.0313 53.8715C53.0648 53.8848 53.0915 53.8848 53.125 53.8848C53.2188 53.8848 53.3058 53.8448 53.3594 53.7715C53.4129 53.7114 53.433 53.6381 53.4196 53.5714C53.4129 53.518 53.4062 53.4714 53.3728 53.4313ZM49.3552 52.0709L47.929 51.6107L48.3843 51.0505L49.1945 50.0435L49.9043 49.1699L50.5404 50.1569L52.4286 53.0646L49.3552 52.0709Z" fill="#1C1C1C"/>
                            <path d="M18.1658 26.3155L13.7465 28.1894L4.75391 21.1137L9.01251 19.113L18.1658 26.3155Z" fill="white"/>
                            <path d="M18.3472 26.0821L16.1844 24.3749C16.171 24.3749 15.7492 24.0414 15.7492 24.0414L13.8676 22.5543C13.8542 22.5543 13.4859 22.2608 13.4859 22.2608L11.8521 20.9737L11.7785 20.9137L11.524 20.7203L11.4437 20.6469L11.3031 20.5336L10.225 19.6866L9.82998 19.3665L9.19387 18.873C9.13361 18.833 9.07334 18.813 8.99969 18.813C8.95951 18.813 8.91934 18.813 8.87916 18.833L8.20957 19.1464L4.61386 20.8337C4.52012 20.887 4.45986 20.9671 4.43977 21.0671C4.42638 21.1805 4.47325 21.2805 4.5536 21.3405L6.90387 23.1945C6.91726 23.2078 8.49749 24.4549 8.49749 24.4549L8.73185 24.635L8.98629 24.835L11.1491 26.5356C11.1826 26.5556 11.2093 26.5756 11.2428 26.589L13.5529 28.4296C13.6065 28.4696 13.6667 28.4896 13.7337 28.4896C13.7739 28.4896 13.814 28.4763 13.8475 28.4696L17.8182 26.7824L18.2735 26.589C18.374 26.5489 18.4342 26.4556 18.4543 26.3555V26.3022C18.4543 26.2155 18.4141 26.1288 18.3472 26.0821ZM17.2892 26.3622L13.7873 27.8494L11.9258 26.3822L11.3834 25.9621L9.91033 24.795L9.37466 24.3749L9.32109 24.3415L9.06665 24.1415L8.83229 23.9481L7.68059 23.0411L7.14492 22.6209L5.30354 21.1738L8.72515 19.5666L8.96621 19.4532L10.9348 21.0004L11.1692 21.1805L11.4236 21.3805L17.5838 26.2288L17.2892 26.3622Z" fill="#1C1C1C"/>
                            <path d="M11.3385 26.589C11.218 26.589 11.1108 26.5156 11.064 26.4023C11.0037 26.2489 11.0774 26.0822 11.2314 26.0221L13.0928 25.2819C13.2468 25.2219 13.4142 25.2952 13.4745 25.4486C13.5348 25.602 13.4611 25.7687 13.3071 25.8287L11.4523 26.569C11.4122 26.5823 11.3787 26.589 11.3385 26.589Z" fill="#1C1C1C"/>
                            <path d="M9.38146 24.9818C9.26094 24.9818 9.1538 24.9151 9.10693 24.795C9.04667 24.6417 9.12032 24.4749 9.27433 24.4149L12.6424 23.0678C12.7964 23.0078 12.9638 23.0811 13.024 23.2345C13.0843 23.3879 13.0106 23.5546 12.8566 23.6146L9.4886 24.9618C9.45512 24.9751 9.42164 24.9818 9.38146 24.9818Z" fill="#1C1C1C"/>
                            <path d="M7.09631 23.2545C6.97578 23.2545 6.86865 23.1811 6.82178 23.0678C6.76151 22.9144 6.83517 22.7476 6.98917 22.6876L9.68093 21.6139C9.83494 21.5539 10.0023 21.6273 10.0626 21.7807C10.1229 21.934 10.0492 22.1008 9.8952 22.1608L7.20344 23.2345C7.16996 23.2478 7.12979 23.2545 7.09631 23.2545Z" fill="#1C1C1C"/>
                            <path d="M10.7069 14.3982L9.30078 18.7597L18.4005 26.0221L19.9674 21.7874L10.7069 14.3982Z" fill="white"/>
                            <path d="M11.8057 20.3802L11.5914 20.2201C11.5713 20.2001 10.4598 19.3131 10.4598 19.3131L10.3995 19.5065C10.3862 19.5465 10.3661 19.5799 10.346 19.6066L11.3838 20.4335L11.4843 20.5135L11.6182 20.6136L11.8593 20.8136C11.9195 20.7403 11.9798 20.6603 12.04 20.5802L11.8057 20.3802ZM11.8057 20.3802L11.5914 20.2201C11.5713 20.2001 10.4598 19.3131 10.4598 19.3131L10.3995 19.5065C10.3862 19.5465 10.3661 19.5799 10.346 19.6066L11.3838 20.4335L11.4843 20.5135L11.6182 20.6136L11.8593 20.8136C11.9195 20.7403 11.9798 20.6603 12.04 20.5802L11.8057 20.3802ZM20.1488 21.5539L14.8657 17.3391L14.6113 17.1391L14.3769 16.959L10.895 14.1714C10.8147 14.1114 10.7143 14.0914 10.6205 14.118C10.5268 14.138 10.4464 14.2181 10.4196 14.3114L9.14741 18.2661L9.01349 18.6662C8.9934 18.7196 8.9934 18.7663 9.0001 18.8196C9.01349 18.893 9.06036 18.9397 9.11393 18.993L9.93083 19.6466C9.96431 19.6666 11.2031 20.6603 11.2031 20.6603L11.4374 20.8403L11.5111 20.9003C11.5445 20.9337 11.5646 20.9404 11.5847 20.9537C11.5981 20.9737 11.6182 20.9737 11.6383 20.987L11.6986 21.0471L15.85 24.3548C15.8701 24.3748 15.8902 24.3949 15.9237 24.4082L18.2271 26.2622C18.2806 26.3022 18.3409 26.3222 18.4079 26.3222C18.4279 26.3222 18.448 26.3222 18.4681 26.3088C18.5819 26.2888 18.6489 26.2155 18.6824 26.1288L18.7761 25.8954L20.2626 21.894C20.2894 21.7673 20.2492 21.6339 20.1488 21.5539ZM18.2605 25.5352L16.379 24.0347L15.9036 23.6546L14.1158 22.2275L13.6337 21.834L12.0869 20.6069L12.0467 20.5736L11.8057 20.3735L11.5914 20.2134C11.5713 20.1934 10.4598 19.3065 10.4598 19.3065L10.1451 19.053L9.96431 18.8997L9.64291 18.6462L10.8549 14.885L13.9752 17.3791L14.2095 17.5592L14.464 17.7593L19.6131 21.874L18.2672 25.4952L18.2605 25.5352ZM11.8057 20.3802L11.5914 20.2201C11.5713 20.2001 10.4598 19.3131 10.4598 19.3131L10.3995 19.5065C10.3862 19.5465 10.3661 19.5799 10.346 19.6066L11.3838 20.4335L11.4843 20.5135L11.6182 20.6136L11.8593 20.8136C11.9195 20.7403 11.9798 20.6603 12.04 20.5802L11.8057 20.3802ZM11.8057 20.3802L11.5914 20.2201C11.5713 20.2001 10.4598 19.3131 10.4598 19.3131L10.3995 19.5065C10.3862 19.5465 10.3661 19.5799 10.346 19.6066L11.3838 20.4335L11.4843 20.5135L11.6182 20.6136L11.8593 20.8136C11.9195 20.7403 11.9798 20.6603 12.04 20.5802L11.8057 20.3802Z" fill="#1C1C1C"/>
                            <path d="M10.1259 19.7133C10.0992 19.7133 10.0657 19.7066 10.0389 19.6999C9.88489 19.6533 9.79785 19.4865 9.84472 19.3332L10.7085 16.5322C10.7554 16.3788 10.9228 16.2921 11.0768 16.3388C11.2308 16.3855 11.3178 16.5522 11.2709 16.7056L10.4072 19.5065C10.367 19.6266 10.2532 19.7133 10.1259 19.7133Z" fill="#1C1C1C"/>
                            <path d="M11.7392 21.0005C11.7057 21.0005 11.6723 20.9938 11.6388 20.9871C11.4848 20.9338 11.4044 20.767 11.458 20.6137L12.0807 18.8331C12.1343 18.6797 12.3017 18.5996 12.4557 18.653C12.6097 18.7063 12.69 18.8731 12.6365 19.0265L12.0138 20.8071C11.9736 20.9204 11.8597 21.0005 11.7392 21.0005Z" fill="#1C1C1C"/>
                            <path d="M13.7861 22.5675C13.7526 22.5675 13.7191 22.5608 13.6857 22.5475C13.5317 22.4942 13.4513 22.3274 13.5049 22.174L14.7369 18.7396C14.7905 18.5862 14.9579 18.5061 15.1119 18.5595C15.2659 18.6128 15.3462 18.7796 15.2927 18.933L14.0606 22.3674C14.0205 22.4875 13.9066 22.5675 13.7861 22.5675Z" fill="#1C1C1C"/>
                            <path d="M16.0231 24.4216C15.9829 24.4216 15.9494 24.415 15.9092 24.4016C15.7552 24.3416 15.6883 24.1682 15.7485 24.0148L16.8266 21.3873C16.8868 21.2339 17.0609 21.1672 17.2149 21.2272C17.3689 21.2872 17.4359 21.4606 17.3756 21.614L16.2976 24.2416C16.2507 24.3549 16.1436 24.4216 16.0231 24.4216Z" fill="#1C1C1C"/>
                        </svg>
                    </figure>

                    <!-- Tabs -->
                    <div class="nav nav-pills nav-pills-dark" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-goal-tab" data-bs-toggle="tab" data-bs-target="#nav-goal" type="button" role="tab" aria-controls="nav-goal" aria-selected="false">Our Story</button>
                        <button class="nav-link " id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission" aria-selected="true">Our Mission</button>
                        <button class="nav-link " id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision" aria-selected="true">Our Vision</button>
                        <button class="nav-link " id="nav-culture-tab" data-bs-toggle="tab" data-bs-target="#nav-culture" type="button" role="tab" aria-controls="nav-culture" aria-selected="true">Culture</button>
                        <button class="nav-link " id="nav-values-tab" data-bs-toggle="tab" data-bs-target="#nav-values" type="button" role="tab" aria-controls="nav-values" aria-selected="true">Values</button>
                    </div>

                    <!-- Tab content -->
                    <div class="tab-content mt-4" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-goal" role="tabpanel" aria-labelledby="nav-goal-tab" tabindex="0">
                            <h5 class="mb-3">Fifteen Years Designing Outcomes For Ambitious Indian Entrepreneurs</h5>
                            <p class="mb-2">We began with a belief: every business deserves design. Since then, we’ve built brands, platforms, and playbooks that help founders launch faster, grow, and endure.</p>
                            <!-- List -->
                            <ul class="list-group list-group-borderless mb-3">
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Started small; now powering startups across categories.</li>
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Design-first methods turning ideas into measurable outcomes.</li>
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Entrepreneurial partners, not vendors, from day one.</li>
                            </ul>
                            <!-- Button -->
                            <a class="icon-link icon-link-hover" href="<?=base_url('our-story');?>">Know about more<i class="bi bi-arrow-right"></i> </a>
                        </div>

                        <!-- Mission content -->
                        <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab" tabindex="0">
                            <h5 class="mb-3">Make Design The Growth Engine For Every Business</h5>
                            <p class="mb-2">We align brand, technology, and marketing into one system that compounds results—delivering clarity, speed, and accountability while empowering founders to build sustainable, resilient companies worldwide.</p>
                            <!-- List -->
                            <ul class="list-group list-group-borderless mb-3">
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Unite strategy, build, marketing into measurable pipelines.</li>
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Prioritize outcomes, not vanity metrics or noise.</li>
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Empower teams with playbooks, tools, and training.</li>
                            </ul>
                            <!-- Button -->
                            <a class="icon-link icon-link-hover" href="<?=base_url('mission-vision');?>">Know about more<i class="bi bi-arrow-right"></i> </a>
                        </div>

                        <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab" tabindex="0">
                            <h5 class="mb-3">Entrepreneurship Powered By Design, Data, And Discipline Everywhere</h5>
                            <p class="mb-2">A world where founders access world-class branding, technology, and growth frameworks—affordable, ethical, and privacy-ready—so new ventures compete fairly and scale responsibly across markets and communities.</p>
                            <!-- List -->
                            <ul class="list-group list-group-borderless mb-3">
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Democratize capability, not merely deliverables.</li>
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Build resilience alongside rapid growth.</li>
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Prove impact transparently, continuously, credibly.</li>
                            </ul>
                            <!-- Button -->
                            <a class="icon-link icon-link-hover" href="<?=base_url('mission-vision');?>">Know about more<i class="bi bi-arrow-right"></i> </a>
                        </div>

                        <div class="tab-pane fade" id="nav-culture" role="tabpanel" aria-labelledby="nav-culture-tab" tabindex="0">
                            <h5 class="mb-3">Small Teams, Big Ownership, Relentless Curiosity, Kindness Always</h5>
                            <p class="mb-2">We favor makers over meetings, prototypes over promises, and feedback over ego—working transparently, learning fast, and celebrating wins that our clients and users feel daily.</p>
                            <!-- List -->
                            <ul class="list-group list-group-borderless mb-3">
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Default to action; document the learning.</li>
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Respect time; protect deep work.</li>
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Debate hard; commit together.</li>
                            </ul>
                            <!-- Button -->
                            <a class="icon-link icon-link-hover" href="<?=base_url('culture-values');?>">Know about more<i class="bi bi-arrow-right"></i> </a>
                        </div>

                        <div class="tab-pane fade" id="nav-values" role="tabpanel" aria-labelledby="nav-values-tab" tabindex="0">
                            <h5 class="mb-3">Clarity, Craft, Integrity, Outcomes, Inclusivity, Long-Termism, Joy, Stewardship</h5>
                            <p class="mb-2">We simplify the complex, build carefully, tell the truth, measure impact, welcome perspectives, plan beyond quarters, enjoy the craft, and leave systems stronger than found.</p>
                            <!-- List -->
                            <ul class="list-group list-group-borderless mb-3">
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Truth over theatre, always.</li>
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Accessibility and inclusion by default.</li>
                                <li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Measure, learn, improve, repeat.</li>
                            </ul>
                            <!-- Button -->
                            <a class="icon-link icon-link-hover" href="<?=base_url('culture-values');?>">Know about more<i class="bi bi-arrow-right"></i> </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-5 mt-7 mt-lg-0">
                <div class="position-relative d-flex justify-content-center">
                    <img src="https://mizzle.webestica.com/assets/images/about/04.jpg" class="rounded" alt="">

                    <div class="d-inline-block bg-dark shadow rounded-4 position-absolute end-0 top-0 p-3 mt-n5 me-5" data-bs-theme="dark">
                        <figure class="mb-2">
                            <svg width="103" height="25" viewBox="0 0 103 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-mode" d="M27.2904 9.09106L37.5808 9.09106V10.9814L33.5291 10.9814V21.6377H31.3082V10.9814H27.2734L27.2904 9.09106ZM37.1401 12.5539H39.0388V14.3104H39.0727C39.1405 14.0595 39.2592 13.8253 39.4287 13.5911C39.5982 13.3569 39.8017 13.1394 40.056 12.9554C40.2933 12.7547 40.5646 12.6041 40.8697 12.487C41.1579 12.3699 41.4631 12.303 41.7682 12.303C42.0056 12.303 42.1751 12.3197 42.2599 12.3197C42.3446 12.3364 42.4463 12.3532 42.5311 12.3532V14.277C42.3955 14.2435 42.2429 14.2268 42.0903 14.2101C41.9377 14.1933 41.8021 14.1766 41.6495 14.1766C41.3105 14.1766 40.9884 14.2435 40.6832 14.3774C40.3781 14.5112 40.1238 14.7119 39.8864 14.9629C39.666 15.2305 39.4796 15.5484 39.3439 15.9331C39.2083 16.3179 39.1405 16.7696 39.1405 17.2714V21.5875H37.1062L37.1401 12.5539ZM51.8552 21.6377H49.8548V20.3663H49.8209C49.5666 20.8347 49.1936 21.186 48.702 21.4704C48.2103 21.7548 47.7018 21.8886 47.1932 21.8886C45.9895 21.8886 45.108 21.6042 44.5655 21.002C44.023 20.4164 43.7517 19.5131 43.7517 18.3253V12.5539H45.7861V18.1246C45.7861 18.9276 45.9386 19.4964 46.2608 19.8142C46.5659 20.1488 47.0067 20.3161 47.5661 20.3161C47.9899 20.3161 48.346 20.2492 48.6342 20.1153C48.9224 19.9815 49.1597 19.8142 49.3292 19.5967C49.5157 19.3793 49.6344 19.1116 49.7192 18.8105C49.8039 18.5094 49.8378 18.1748 49.8378 17.8235V12.5539H51.8722V21.6377H51.8552ZM55.3136 18.7268C55.3814 19.3123 55.6018 19.7138 55.9917 19.9648C56.3817 20.199 56.8563 20.3161 57.3988 20.3161C57.5853 20.3161 57.8057 20.2993 58.0431 20.2659C58.2804 20.2324 58.5177 20.1822 58.7212 20.0986C58.9416 20.015 59.1111 19.8979 59.2467 19.7306C59.3823 19.5633 59.4502 19.3625 59.4332 19.1116C59.4162 18.8607 59.3315 18.6432 59.145 18.4759C58.9585 18.3086 58.7381 18.1915 58.4669 18.0744C58.1956 17.974 57.8735 17.8904 57.5175 17.8235C57.1615 17.7566 56.8055 17.6729 56.4325 17.5893C56.0596 17.5056 55.6866 17.4053 55.3306 17.2882C54.9746 17.1711 54.6694 17.0205 54.3812 16.803C54.11 16.6023 53.8726 16.3514 53.7201 16.0335C53.5505 15.7157 53.4658 15.3476 53.4658 14.8792C53.4658 14.3774 53.5844 13.9759 53.8387 13.6413C54.0761 13.3067 54.3982 13.0391 54.7711 12.8383C55.1441 12.6376 55.5679 12.487 56.0257 12.4034C56.4834 12.3197 56.9242 12.2863 57.331 12.2863C57.8057 12.2863 58.2634 12.3364 58.6873 12.4368C59.1111 12.5372 59.518 12.6878 59.857 12.922C60.213 13.1394 60.5012 13.4405 60.7216 13.7918C60.959 14.1432 61.0946 14.5781 61.1624 15.08H59.0433C58.9416 14.5948 58.7212 14.277 58.3821 14.1097C58.0261 13.9424 57.6362 13.8588 57.1785 13.8588C57.0428 13.8588 56.8563 13.8755 56.6699 13.8922C56.4664 13.9257 56.2969 13.9591 56.1104 14.0261C55.9409 14.093 55.7883 14.1933 55.6696 14.3104C55.551 14.4275 55.4832 14.5948 55.4832 14.7956C55.4832 15.0465 55.5679 15.2305 55.7375 15.3811C55.907 15.5316 56.1274 15.6487 56.4156 15.7658C56.6868 15.8662 57.0089 15.9499 57.3649 16.0168C57.721 16.0837 58.0939 16.1673 58.4669 16.251C58.8398 16.3346 59.1959 16.435 59.5519 16.5521C59.9079 16.6692 60.23 16.8198 60.5012 17.0372C60.7725 17.238 61.0098 17.4889 61.1794 17.79C61.3489 18.0911 61.4336 18.4759 61.4336 18.9109C61.4336 19.4462 61.315 19.8979 61.0607 20.2826C60.8064 20.6507 60.4843 20.9685 60.0944 21.2027C59.7044 21.4369 59.2467 21.6042 58.772 21.7213C58.2804 21.8217 57.8057 21.8886 57.331 21.8886C56.7546 21.8886 56.2121 21.8217 55.7205 21.6878C55.2289 21.554 54.7881 21.3533 54.4321 21.1023C54.0761 20.8347 53.7879 20.5168 53.5844 20.1153C53.381 19.7306 53.2623 19.2622 53.2454 18.7101H55.2967V18.7268H55.3136ZM62.01 12.5539H63.5528V9.8104L65.5871 9.8104V12.5372H67.418V14.0261L65.5871 14.0261V18.8774C65.5871 19.0949 65.6041 19.2622 65.621 19.4294C65.638 19.58 65.6888 19.7138 65.7397 19.8142C65.8075 19.9146 65.9092 19.9982 66.0279 20.0484C66.1635 20.0986 66.3331 20.1321 66.5704 20.1321C66.706 20.1321 66.8586 20.1321 66.9942 20.1153C67.1298 20.0986 67.2824 20.0819 67.418 20.0484V21.6042C67.1977 21.6376 66.9773 21.6544 66.7569 21.6711C66.5365 21.7046 66.3331 21.7046 66.0957 21.7046C65.5532 21.7046 65.1294 21.6544 64.8073 21.554C64.4852 21.4536 64.2309 21.3031 64.0444 21.1191C63.8579 20.9183 63.7392 20.6841 63.6714 20.3997C63.6036 20.1153 63.5697 19.764 63.5528 19.396V14.0428H62.01V12.5205V12.5539ZM68.8421 12.5539H70.7578V13.7918H70.7917C71.0799 13.2565 71.4698 12.8885 71.9784 12.6543C72.487 12.4201 73.0295 12.303 73.6398 12.303C74.3688 12.303 74.996 12.4201 75.5385 12.6878C76.081 12.9387 76.5218 13.2733 76.8778 13.7249C77.2338 14.1599 77.5051 14.6785 77.6746 15.264C77.8441 15.8495 77.9458 16.4852 77.9458 17.1376C77.9458 17.7566 77.8611 18.3421 77.7085 18.9109C77.539 19.4796 77.3016 19.9982 76.9795 20.4332C76.6574 20.8681 76.2505 21.2194 75.7419 21.4871C75.2334 21.7547 74.657 21.8886 73.9788 21.8886C73.6906 21.8886 73.3855 21.8551 73.0973 21.8049C72.8091 21.7548 72.5209 21.6711 72.2496 21.554C71.9784 21.4369 71.7241 21.2863 71.5037 21.1023C71.2664 20.9183 71.0799 20.7008 70.9273 20.4666H70.8934V25.0001H68.859V12.5539H68.8421ZM75.9454 17.1041C75.9454 16.7027 75.8945 16.3012 75.7759 15.9164C75.6741 15.5316 75.5046 15.1971 75.2842 14.8959C75.0638 14.5948 74.7926 14.3606 74.4874 14.1766C74.1653 13.9926 73.7924 13.909 73.3855 13.909C72.5378 13.909 71.8936 14.1933 71.4528 14.7789C71.029 15.3644 70.8086 16.1506 70.8086 17.1209C70.8086 17.5893 70.8595 18.0075 70.9782 18.3923C71.0968 18.777 71.2494 19.1116 71.4868 19.396C71.7071 19.6804 71.9784 19.8979 72.3005 20.0651C72.6226 20.2324 72.9786 20.3161 73.4024 20.3161C73.8771 20.3161 74.2501 20.2157 74.5722 20.0317C74.8943 19.8477 75.1486 19.5967 75.369 19.3123C75.5724 19.0112 75.725 18.6767 75.8098 18.2919C75.8945 17.8904 75.9454 17.5056 75.9454 17.1041ZM79.5225 9.09106H81.5568V10.9814H79.5225V9.09106ZM79.5225 12.5539H81.5568V21.6377H79.5225V12.5539ZM83.3708 9.09106H85.4051V21.6377H83.3708V9.09106ZM91.6099 21.8886C90.8809 21.8886 90.2198 21.7715 89.6434 21.5205C89.067 21.2696 88.5923 20.9518 88.1854 20.5335C87.7955 20.1153 87.4903 19.5967 87.2869 19.0112C87.0835 18.4257 86.9648 17.7733 86.9648 17.0874C86.9648 16.4015 87.0665 15.7658 87.2869 15.1803C87.4903 14.5948 87.7955 14.093 88.1854 13.658C88.5753 13.2398 89.067 12.9052 89.6434 12.671C90.2198 12.4368 90.8809 12.303 91.6099 12.303C92.3389 12.303 93.0001 12.4201 93.5765 12.671C94.1529 12.9052 94.6275 13.2398 95.0344 13.658C95.4243 14.0762 95.7295 14.5948 95.9329 15.1803C96.1364 15.7658 96.255 16.4015 96.255 17.0874C96.255 17.79 96.1533 18.4257 95.9329 19.0112C95.7125 19.5967 95.4243 20.0986 95.0344 20.5335C94.6445 20.9518 94.1529 21.2863 93.5765 21.5205C93.0001 21.7547 92.3558 21.8886 91.6099 21.8886ZM91.6099 20.2993C92.0507 20.2993 92.4576 20.199 92.7797 20.015C93.1187 19.8309 93.373 19.58 93.5934 19.2789C93.8138 18.9778 93.9664 18.6265 94.0681 18.2584C94.1698 17.8737 94.2207 17.4889 94.2207 17.0874C94.2207 16.7027 94.1698 16.3179 94.0681 15.9331C93.9664 15.5484 93.8138 15.2138 93.5934 14.9127C93.373 14.6116 93.1018 14.3774 92.7797 14.1933C92.4406 14.0093 92.0507 13.909 91.6099 13.909C91.1691 13.909 90.7623 14.0093 90.4402 14.1933C90.1011 14.3774 89.8468 14.6283 89.6264 14.9127C89.406 15.2138 89.2534 15.5484 89.1517 15.9331C89.05 16.3179 88.9992 16.7027 88.9992 17.0874C88.9992 17.4889 89.05 17.8737 89.1517 18.2584C89.2534 18.6432 89.406 18.9778 89.6264 19.2789C89.8468 19.58 90.1181 19.8309 90.4402 20.015C90.7792 20.2157 91.1691 20.2993 91.6099 20.2993ZM96.8653 12.5539H98.4081V9.8104H100.442V12.5372H102.273V14.0261H100.442V18.8774C100.442 19.0949 100.459 19.2622 100.476 19.4294C100.493 19.58 100.544 19.7138 100.595 19.8142C100.663 19.9146 100.765 19.9982 100.883 20.0484C101.019 20.0986 101.188 20.1321 101.426 20.1321C101.561 20.1321 101.714 20.1321 101.85 20.1153C101.985 20.0986 102.138 20.0819 102.273 20.0484V21.6042C102.053 21.6376 101.833 21.6544 101.612 21.6711C101.392 21.7046 101.188 21.7046 100.951 21.7046C100.409 21.7046 99.9847 21.6544 99.6626 21.554C99.3405 21.4536 99.0862 21.3031 98.8997 21.1191C98.7132 20.9183 98.5945 20.6841 98.5267 20.3997C98.4589 20.1153 98.425 19.764 98.4081 19.396V14.0428H96.8653V12.5205V12.5539Z"/>
                                <path d="M25 8.68493L15.4488 8.68493L12.5087 0L9.55113 8.68493L0 8.6683L7.72441 14.0423L4.76687 22.7272L12.4913 17.3532L20.2157 22.7272L17.2755 14.0423L25 8.68493Z" fill="#00B67A"/>
                                <path d="M18.1818 16.7942L17.4898 14.7727L12.5 18.1818L18.1818 16.7942Z" fill="#005128"/>
                            </svg>
                        </figure>
                        <img src="https://mizzle.webestica.com/assets/images/elements/trustpilot-star.svg" class="h-20px" alt="Rating-img">
                        <p class="small mb-0 mt-2">Trustpilot score <span class="fw-bold heading-color">4.7 | 27 reviews</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>

<?php $this->load->view('frontend/component/industries'); ?>

<section class="p-0">
    <div class="container text-center">
        <span class="heading-color bg-light small rounded-3 px-3 py-2">Outcomes, in real life.</span>
        <h3 class="my-4">How founders used our Six to scale</h3>
        <p class="mb-4">Explore concise before–after narratives detailing brand, build, demand, ops, security, and performance—what we shipped, why it mattered, and how growth compounded.</p>
    </div>
</section>
<div class="slider-container">
   <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active" style="background-image: url('https://s7d9.scene7.com/is/image/hitachivantara/st-galler-case-study-rectangular:tabscustomerstory?fmt=webp');">
            <div class="carousel-caption">
               <img src="<?=base_url('assets/frontend/img/connected.png')?>">
               <p>For Connected Mind, we built ethical mental-health branding, secure telehealth flows, SOS features, multilingual website, appointment funnels, privacy-ready analytics, and ORM care—launching campaigns across wellness, improving conversions, and establishing compliant digital operations with measurable outcomes.</p>
               <a href="#" class="btn-link">Read customer story →</a>
            </div>
         </div>
         <div class="carousel-item" style="background-image: url('https://s7d9.scene7.com/is/image/hitachivantara/st-galler-case-study-rectangular:tabscustomerstory?fmt=webp');">
            <div class="carousel-caption">
               <img src="<?=base_url('assets/frontend/img/lod.webp')?>">
               <p>For Lords of Detailing, we sharpened brand system, engineered booking website, enabled franchise microsites, GMB and reviews ops, hyperlocal ads, portals, and performance dashboards—lifting footfall, lead quality, and franchise pipeline while standardizing templates and playbooks.</p>
               <a href="#" class="btn-link">Read customer story →</a>
            </div>
         </div>
         <div class="carousel-item" style="background-image: url('https://s7d9.scene7.com/is/image/hitachivantara/st-galler-case-study-rectangular:tabscustomerstory?fmt=webp');">
            <div class="carousel-caption">
               <img src="<?=base_url('assets/frontend/img/indosoil.png')?>">
               <p>For Indosoil, we developed eco-friendly product branding, multilingual website, distributor onboarding, e-commerce enablement, farmer education content, GIS-driven service areas, retail activation toolkits, and analytics—improving channel velocity, inbound leads, and trust with impact-focused storytelling and dashboards.</p>
               <a href="#" class="btn-link">Read customer story →</a>
            </div>
         </div>
         <div class="carousel-item" style="background-image: url('https://s7d9.scene7.com/is/image/hitachivantara/st-galler-case-study-rectangular:tabscustomerstory?fmt=webp');">
            <div class="carousel-caption">
               <img src="<?=base_url('assets/frontend/img/behtreen.svg')?>">
               <p>For Behtreen, we structured a quarter-long digital plan, rebuilt listings, launched Amazon storefront, sponsored ads, creative assets, and review ops; ran SEO and social calendars, performance dashboards, and marketplace analytics—raising visibility, conversions, and e-commerce revenue.</p>
               <a href="#" class="btn-link">Read customer story →</a>
            </div>
         </div>
         <div class="carousel-item" style="background-image: url('https://s7d9.scene7.com/is/image/hitachivantara/st-galler-case-study-rectangular:tabscustomerstory?fmt=webp');">
            <div class="carousel-caption">
               <img src="<?=base_url('assets/frontend/img/wedding.png')?>">
               <p>For Weddingclap, we built a state-of-the-art e-commerce and custom wedding web portal with a robust backend, integrated vendor onboarding, and analytics; and we established their retail model—pricing, inventory, and store ops—aligning digital and offline growth.</p>
               <a href="#" class="btn-link">Read customer story →</a>
            </div>
         </div>
      </div>
      <a class="carousel-control-prev" href="#customCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#customCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </a>
   </div>
   <div class="pawan">
      <a href="#customCarousel" data-bs-slide-to="0" class="active">Connected Mind</a>
      <a href="#customCarousel" data-bs-slide-to="1">Lords of Detailing</a>
      <a href="#customCarousel" data-bs-slide-to="2">Indosoil</a>
      <a href="#customCarousel" data-bs-slide-to="3">Behtreen</a>
      <a href="#customCarousel" data-bs-slide-to="4">Weddingclap</a>
   </div>
</div>


<style type="text/css">
.latest-event-box, .latest-event-box-last {
    bottom: 0;
    height: auto;
    padding: 20px;
    position: absolute;
    width: 100%;
}    
.grid-do_more figure {
    position: relative;
    float: left;
    overflow: hidden;
    width: 100%;
    background-color: #fff;
    cursor: pointer;
    margin: 0;
}
.grid-do_more figure img {
    position: relative;
    display: block;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
}
.bottom-gradient-do_more {
    background: rgba(0, 0, 0, 0) linear-gradient(0deg, rgb(0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 23%, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0) 68%, rgba(0, 0, 0, 0) 81%, rgba(0, 0, 0, 0) 92%, rgba(0, 0, 0, 0) 100%) repeat scroll 0 0;
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform: translateY(100%);
    transition: all 0.5s ease 0.1s;
}
.bottom-gradient-do_more::before {
    content: "";
    position: absolute;
    top: -2px;
    left: -2px;
    width: 0;
    height: 0;
    background: transparent;
    border: 2px solid transparent;
}
.bottom-gradient-do_more::after {
    content: "";
    position: absolute;
    top: -2px;
    left: -2px;
    width: 0;
    height: 0;
    background: transparent;
    border: 2px solid transparent;
}
.title-box-yellow {
    background-color: #ab6604;
    color: #ffffff;
    padding: 4px 8px;
    display: inline-block;
    position: relative;
    font-size: 11px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 700;
}
.title-box-yellow:after {
    border-left: 0 solid transparent;
    border-right: 20px solid transparent;
    border-top: 24px solid #ab6604;
    clear: both;
    content: "";
    height: 0;
    position: absolute;
    right: -20px;
    top: 0;
    width: 0;
}
.do_more-grid-desc {
    color: #fff;
    font-size: 18px;
    line-height: 20px;
    font-weight: 500;
}
.grid-do_more figure:hover .bottom-gradient-do_more {
    background: rgba(0, 0, 0, 0) linear-gradient(0deg, rgb(0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 100%) repeat scroll 0 0;
    transform: translateY(0px);
}
</style>
<section class="grid-do_more pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h6 class="fbdvs m-auto mb-3">Ideas that compound into measurable growth</h6> 
                <h3>Insights that turn strategy into systems, and systems into outcomes</h3>
                <p>Practical research, playbooks, and proofs from real engagements—covering brand, build, demand, operations, security, and performance—to help founders choose better bets, avoid waste, and scale sustainable revenue with confidence over time.</p>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-md-6"> 
                <a href="#">
                    <figure class="img-effect"> 
                        <img src="https://www.infosysbpm.com/content/dam/infosys-bpm/en/sitecollectionimages/25/ai-agents-to-revolutionize-finance-and-accounting-services.jpg" alt="Infosys BPMn" class="img-responsive">
                        <div class="bottom-gradient-do_more"></div>
                        <div class="latest-event-box-last">
                            <p class="title-box-yellow">White Paper</p>
                            <p class="do_more-grid-desc">Deep dive frameworks with diagrams and checklists to implement tomorrow, not someday, at your scale.</p>
                        </div>
                    </figure>
                </a> 
            </div>
            <div class="col-md-6"> 
                <div class="row g-2">
                    <div class="col-md-6"> 
                        <a href="#">
                            <figure class="img-effect"> 
                                <img src="https://www.infosysbpm.com/content/dam/infosys-bpm/en/sitecollectionimages/24/ai-first/7.jpg" class="img-responsive">
                                <div class="bottom-gradient-do_more"> </div>
                                <div class="latest-event-box-last">
                                      <p class="title-box-yellow">Webinar</p>
                                      <p class="do_more-grid-desc">Live demos showing stacks, tactics, and measurement; bring questions and leave with templates and playbooks.</p>
                                </div>
                            </figure>
                        </a> 
                    </div>
                    <div class="col-md-6"> 
                        <a href="#">
                            <figure class="img-effect"> 
                                <img src="https://www.infosysbpm.com/content/dam/infosys-bpm/en/sitecollectionimages/24/ai-first/3.jpg" class="img-responsive">
                                <div class="bottom-gradient-do_more"> </div>
                                <div class="latest-event-box-last">
                                  <p class="title-box-yellow">Case Study</p>
                                  <p class="do_more-grid-desc">Before-after narratives with numbers, artifacts, and lessons you can reuse immediately across similar markets today.</p>
                                </div>
                            </figure>
                        </a> 
                    </div>
                    <div class="col-md-6"> 
                        <a href="#">
                            <figure class="img-effect"> 
                                <img src="https://www.infosysbpm.com/content/dam/infosys-bpm/en/sitecollectionimages/24/ai-first/8.jpg" class="img-responsive">
                                <div class="bottom-gradient-do_more"> </div>
                                <div class="latest-event-box-last">
                                    <p class="title-box-yellow">Report</p>
                                    <p class="do_more-grid-desc">Quarterly benchmarks by category and city; compare metrics, spot gaps, and prioritize improvements with confidence.</p>
                                </div>
                            </figure>
                        </a> 
                    </div>
                    <div class="col-md-6"> 
                        <a href="#">
                            <figure class="img-effect"> 
                                <img src="https://www.infosysbpm.com/content/dam/infosys-bpm/en/sitecollectionimages/24/ai-first/9.jpg" class="img-responsive">
                                <div class="bottom-gradient-do_more"> </div>
                                <div class="latest-event-box-last">
                                    <p class="title-box-yellow">Podcast</p>
                                    <p class="do_more-grid-desc">Operators and founders unpack wins, misses, and rituals you can copy today, for any stage.</p>
                                </div>
                            </figure>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="overflow-hidden">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7 mb-lg-0">
                <h3 class="mb-2">Why Mirashka’s Six Segments Fit Business Perfectly</h3>
                <p class="mb-0">A complete, end-to-end operating system: brand, build, demand, ops, security, and performance—sequenced to launch faster, waste less, and scale confidently.</p>

                <hr class="my-4">

                <!-- Features item -->
                <div class="row g-4 mb-4 mb-sm-5">
                    <div class="col-sm-6">
                        <div class="d-flex mb-3">
                            <div class="icon-md flex-shrink-0 text-white bg-dark bg-opacity-10 rounded-circle"><i class="bi bi-diagram-3 fa-xl"></i></div>
                            <div class="ms-3">
                                <h6 class="mb-0 mb-sm-2">Whole-Lifecycle Coverage</h6>
                                <p class="mb-0">From first spark to scaled revenue, every growth stage has a dedicated, expert-led lane.</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="icon-md flex-shrink-0 text-white bg-dark bg-opacity-10 rounded-circle"><i class="bi bi-pencil-fill fa-xl"></i></div>
                            <div class="ms-3">
                                <h6 class="mb-0 mb-sm-2">Compounding Effects</h6>
                                <p class="mb-0">Every release strengthens the next—systems, assets, and insights compound into durable advantage.</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="icon-md flex-shrink-0 text-white bg-dark bg-opacity-10 rounded-circle"><i class="bi bi-lock fa-xl"></i></div>
                            <div class="ms-3">
                                <h6 class="mb-0 mb-sm-2">Security Everywhere</h6>
                                <p class="mb-0">Trust gates sit across phases: pre-release checks, VAPT, ORM, incident playbooks, audits.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="d-flex mb-3">
                            <div class="icon-md flex-shrink-0 text-white bg-dark bg-opacity-10 rounded-circle"><i class="bi bi-people fa-xl"></i></div>
                            <div class="ms-3">
                                <h6 class="mb-0 mb-sm-2">One Accountability Chain</h6>
                                <p class="mb-0">Single partner across disciplines means fewer handoffs, clearer SLAs, faster decision cycles.</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="icon-md flex-shrink-0 text-white bg-dark bg-opacity-10 rounded-circle"><i class="bi bi-shield-check fa-xl"></i></div>
                            <div class="ms-3">
                                <h6 class="mb-0 mb-sm-2">Measurable By Design</h6>
                                <p class="mb-0">Each segment carries KPIs—recall, vitals, SoV, SLA, MTTR, CAC/LTV—reported transparently.</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="icon-md flex-shrink-0 text-white bg-dark bg-opacity-10 rounded-circle"><i class="bi bi-boxes fa-xl"></i></div>
                            <div class="ms-3">
                                <h6 class="mb-0 mb-sm-2">Tight Interlocks</h6>
                                <p class="mb-0">Brand tokens flow into UI; content fuels SEO; winners become SOPs—nothing is orphaned.</p>
                            </div>
                        </div>
                    </div>
                </div> 

            </div>

            <div class="col-lg-5">
                <div class="row justify-content-end">
                    <div class="col-lg-11 position-relative mt-5">
                        <figure class="position-absolute top-50 start-0 translate-middle z-index-2">
                            <svg width="159" height="155" viewBox="0 0 159 155" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-primary" d="M14.2394 111.637C13.5965 111.365 12.9265 111.083 12.2734 110.839C10.1612 110.017 8.07613 109.206 5.88225 108.354C6.18466 107.629 6.68446 107.288 7.12302 106.862C8.19051 105.834 9.28521 104.815 10.1758 103.596C10.9576 102.585 11.4775 101.445 11.7254 100.202C11.7797 99.9745 11.7898 99.6988 11.5177 99.597C11.3272 99.5257 11.0449 99.4511 10.8681 99.5091C10.4294 99.6864 10.035 99.9113 9.6304 100.163C6.57033 102.123 4.06486 104.755 1.43689 107.217C1.2567 107.367 1.12074 107.565 0.984778 107.762C0.525929 108.491 0.553501 109.495 1.0979 110.195C1.43134 110.63 1.85998 110.977 2.36679 111.198C5.43823 112.441 8.5844 113.401 11.9004 113.742C12.5874 113.813 13.3322 113.812 13.985 113.56C14.4509 113.393 14.8385 113.103 14.8213 112.569C14.8551 112.147 14.6374 111.817 14.2394 111.637Z"/>
                                <path class="fill-primary" d="M14.8846 105.45C20.7137 105.459 26.5019 105.079 32.2524 104.22C34.1942 103.923 36.1122 103.523 37.9995 102.957C45.8716 100.656 51.4064 95.6497 55.0392 88.3477C56.5889 85.2023 57.6011 81.9178 58.2869 78.511C58.8572 75.7441 59.3459 72.9467 59.889 70.1696C60.4084 67.5388 60.9822 64.9284 62.0933 62.4571C64.0642 58.1033 67.4234 55.7593 72.1948 55.5273C73.3 55.4753 74.3815 55.5697 75.4767 55.7933C77.9595 56.288 80.2996 57.164 82.5752 58.2951C84.5345 59.2769 86.521 60.2688 88.4904 61.2233C92.5722 63.2479 96.5579 62.877 100.461 60.7368C101.709 60.0552 102.879 59.2511 104.004 58.3995C105.252 57.4694 106.449 56.4272 107.662 55.4224C109.492 53.9338 111.348 52.4554 113.221 51.0145C114.612 49.9517 116.104 49.1133 117.703 48.4076C121.273 46.8257 124.759 47.0439 128.126 48.9874C129.63 49.8606 131.066 50.8326 132.521 51.7501C134.651 53.106 136.821 54.353 139.287 55.0587C142.28 55.9306 145.171 55.8329 147.949 54.2959C148.231 54.3705 148.445 54.2955 148.557 53.9959L148.595 53.9789C149.016 54.0126 149.329 53.7571 149.649 53.5663C151.278 52.5305 152.773 51.3518 154.086 49.9182C155.694 48.6884 156.7 47.0781 157.349 45.1788C156.06 46.4661 154.888 47.8588 153.786 49.3093C152.154 50.9338 150.077 51.9258 148.183 53.1728C147.877 53.2445 147.571 53.3162 147.282 53.4254C144.551 54.4213 141.902 54.2058 139.259 53.0613C137.286 52.1987 135.585 50.9411 133.874 49.7107C132.36 48.6163 130.887 47.413 129.278 46.4072C125.251 43.9062 121.054 43.515 116.671 45.4447C115.223 46.0822 113.879 46.8524 112.577 47.762C110.775 49.0123 109.086 50.4599 107.45 51.9279C105.815 53.3959 104.153 54.8537 102.5 56.2842C101.303 57.3265 100.011 58.2089 98.58 58.8839C95.8563 60.1928 93.1459 60.3891 90.4213 58.9656C88.8158 58.1163 87.268 57.1955 85.6625 56.3462C82.4617 54.6203 79.2404 52.9489 75.6217 52.3394C69.4351 51.2966 64.2324 53.0126 60.4832 58.222C59.2425 59.9619 58.3896 61.909 57.8258 63.9953C56.7458 67.8754 56.1861 71.8571 55.4529 75.8049C54.6655 79.9807 53.6773 84.1125 51.662 87.9219C48.8956 93.1576 45.0678 97.251 39.5354 99.6818C37.349 100.633 35.1251 101.353 32.8161 101.886C29.1435 102.746 25.4062 103.365 21.6654 103.828C19.3189 104.129 16.9928 104.376 14.6463 104.678C14.2586 104.719 13.7553 104.655 13.5616 105.172C13.9324 105.59 14.4255 105.433 14.8846 105.45Z"/>
                                <path class="fill-primary" d="M157.352 45.087C157.342 45.1142 157.314 45.104 157.304 45.1313C157.294 45.1585 157.284 45.1857 157.274 45.213C157.284 45.1857 157.321 45.1687 157.321 45.1687C157.331 45.1414 157.342 45.1142 157.352 45.087Z"/>
                                <path class="fill-primary" d="M157.889 43.6438C157.655 44.2701 157.502 44.6786 157.349 45.087C157.91 44.583 157.92 44.5557 157.889 43.6438Z"/>
                            </svg>
                        </figure>

                        <figure class="position-absolute top-0 start-100 translate-middle mt-8 ms-5 d-none d-xl-block">
                            <svg class="fill-mode" width="96" height="99" viewBox="0 0 96 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M66.5204 64.3653C68.4878 62.2239 69.8711 59.7411 70.3936 56.886C72.4225 45.5894 64.3072 35.5653 52.1035 36.6825C44.603 37.3653 38.9777 44.5653 39.8999 52.0446C40.6684 58.2205 45.9556 62.4101 51.8576 61.448C54.6549 60.9825 56.776 59.4929 58.0363 56.886C59.02 54.8377 58.7126 52.5101 57.2985 51.0205C55.7923 49.4377 51.8576 48.6308 49.798 49.4377C49.4599 49.5618 49.2447 50.2136 49.4599 50.5239C49.7673 50.9273 50.1054 51.2687 50.4743 51.6101C51.1506 52.2308 51.8576 52.8205 52.5031 53.4722C52.9028 53.8756 52.872 54.4032 52.4724 54.8067C51.5195 55.8618 50.3206 56.048 49.0603 55.6756C46.9393 55.0239 45.8019 53.4411 45.4023 51.2998C44.3571 45.7136 49.4292 42.0205 53.1487 41.7722C58.6511 41.3687 63.5694 44.7205 65.1679 49.9963C66.7356 55.086 65.2294 59.7411 60.9873 62.9377C59.7884 63.8377 58.4666 64.5515 57.0219 65.017C53.0872 66.3204 49.1525 66.3515 45.2793 65.017C37.9325 62.5032 34.1823 56.6377 35.1352 48.5998C35.7193 43.6963 37.7788 39.4446 41.0065 35.7825C42.3898 34.1998 43.8653 32.7101 46.0478 32.3067C46.14 32.3067 46.2015 32.2446 46.2937 32.2136C46.5089 32.0894 46.5396 31.5308 46.3245 31.3136C46.0478 30.9722 45.6789 30.7549 45.2793 30.7239C44.4493 30.5998 43.6501 30.7239 42.8201 31.0032C41.2832 31.5618 40.0536 32.4929 38.8855 33.6101C34.336 37.9239 31.6616 43.2308 31.0468 49.4998C30.1861 58.4377 34.2745 65.048 41.8365 68.7101C44.8182 70.1377 47.9844 70.7273 51.2736 70.7584C52.3494 70.6963 53.4253 70.6653 54.5012 70.5101C59.2351 69.8584 63.2928 67.9032 66.5204 64.3653Z"/>
                                <path d="M0.769309 44.5963C2.36777 45.8998 3.99697 47.2032 5.65692 48.4756C7.99313 50.2446 10.6367 51.0205 13.8337 51.1136C13.7722 51.1136 14.0488 51.1446 14.264 51.0825C14.4792 51.0205 14.7866 50.9274 14.8481 50.7412C14.9096 50.586 14.8173 50.2446 14.6944 50.0894C14.0796 49.5308 13.4955 48.9101 12.7885 48.4756C10.1449 46.8929 7.53204 45.3101 4.70399 44.0998C3.6281 43.6343 2.52147 43.3239 1.41484 42.9515C1.10745 42.8584 0.769309 42.8584 0.431173 42.8584C0.123776 42.8584 -0.152881 43.3549 0.00081747 43.6032C0.246735 43.9446 0.461913 44.3481 0.769309 44.5963Z"/>
                                <path d="M55.6683 15.2692C55.822 15.2692 56.0064 15.3002 56.1294 15.2071C56.6212 14.8657 56.8364 14.3071 57.0823 13.7795C58.4349 10.614 60.1563 7.66572 62.0007 4.77951C62.6462 3.78641 63.2303 2.79331 63.8451 1.8002C64.0602 1.45882 64.2447 1.05537 64.3676 0.68296C64.3984 0.558822 64.3369 0.372615 64.2447 0.217443C64.091 -0.0308331 63.8143 0.00020143 63.5991 0.0933049C63.384 0.186408 63.1688 0.341581 62.9536 0.465719C58.0967 3.91055 56.1601 8.93813 55.4531 14.6795C55.4839 14.7726 55.4839 14.9278 55.5453 15.114C55.5453 15.1761 55.6376 15.2692 55.6683 15.2692Z"/>
                                <path d="M24.5905 26.6586C23.3916 23.0896 22.1928 19.5207 20.9325 15.9827C20.3791 14.4 19.6721 12.8793 18.9959 11.3586C18.8729 11.0793 18.627 10.831 18.4425 10.6138C18.2274 10.7069 18.0122 10.7379 17.9507 10.831C17.7048 11.2034 17.797 11.6379 17.8278 12.0414C18.2888 17.9689 20.6251 23.1827 23.8835 28.0551C23.9757 28.1793 24.0986 28.3345 24.2216 28.3965C24.3446 28.4586 24.5597 28.5517 24.6827 28.4896C24.8057 28.4586 24.9286 28.2414 24.8979 28.1172C24.8364 27.6207 24.7442 27.1241 24.5905 26.6586Z"/>
                                <path d="M56.5302 83.9173C56.4072 83.8862 56.1613 83.9483 56.0998 84.0414C55.7924 84.7241 55.4851 85.4069 55.2699 86.1207C54.6243 88.1379 53.8251 90.0621 52.3189 91.5828C51.9192 91.9862 51.6119 92.5138 51.2737 93.0104C50.3208 94.4069 49.6753 95.9586 49.0912 97.5104C48.9682 97.8207 48.9682 98.1621 48.9375 98.5035C48.9375 98.6586 48.999 98.9379 49.0912 98.9379C49.3064 99 49.6445 99.0311 49.7675 98.9069C51.1815 97.2621 52.5033 95.5241 54.0095 93.9724C55.9461 91.8931 56.8376 89.4724 56.8683 86.6793C56.8683 86.3379 56.9298 85.9966 56.9606 85.469C56.9298 85.1897 56.9298 84.6931 56.8683 84.1966C56.8376 84.0724 56.6532 83.9173 56.5302 83.9173Z"/>
                                <path d="M80.4469 37.086C81.031 37.1481 81.615 37.1791 82.1683 37.055C83.8897 36.7136 85.6112 36.6205 87.3633 36.7136C89.8533 36.9308 92.3124 36.4033 94.7716 36.124C95.079 36.0929 95.4171 35.9377 95.6938 35.7826C95.8167 35.7205 96.0319 35.4722 96.0012 35.4412C95.8782 35.2239 95.7245 35.0067 95.5401 34.9136C95.3249 34.7895 95.079 34.7584 94.8331 34.7274C92.5276 34.4791 90.2221 34.2619 87.9166 34.0446C85.2423 33.7653 82.8753 34.7895 80.5391 35.8446C80.3854 35.9067 80.2625 36.0308 80.1702 36.155C80.078 36.2791 79.9551 36.4964 80.0165 36.5895C80.078 36.7757 80.2625 37.055 80.4469 37.086Z"/>
                                <path d="M78.4176 68.4311C78.2332 68.6173 78.1717 68.8656 78.3254 69.1139C78.4484 69.3311 78.5713 69.5484 78.7865 69.7035C80.7231 71.1001 82.0141 72.9932 83.2437 75.0104C84.3196 76.8104 85.7951 78.269 87.3936 79.6346C87.6088 79.8208 87.9469 80.069 88.2543 79.7587C88.3773 79.6035 88.4387 79.2311 88.3773 79.0759C87.0247 76.5001 85.7644 73.8621 84.0737 71.4725C82.8134 69.7346 80.8768 68.9277 78.9709 68.2139C78.6943 68.2759 78.5406 68.338 78.4176 68.4311Z"/>
                                <path d="M18.9031 80.3173C16.1058 81.0621 13.8311 82.6759 11.8023 84.7242C11.7408 84.7863 11.6793 84.8483 11.6793 84.9104C11.6486 84.9725 11.6486 85.0966 11.6793 85.1587C11.7715 85.2518 11.9252 85.4069 12.0174 85.4069C12.2634 85.3759 12.5093 85.2828 12.7245 85.1587C16.0443 83.1414 19.6409 82.0242 23.4526 81.5276C23.9444 81.4656 24.4363 81.3725 24.8974 80.7207C22.8071 79.7897 20.8397 79.7897 18.9031 80.3173Z"/>
                            </svg>
                        </figure>

                        <div class="card border p-4">
                            <h6>Recent Project</h6>
                            <img src="<?= base_url() ?>assets/frontend/images/about/07.jpg" class="card-img mb-3" alt="card image">
                            <h6>Design webflow multipurpose SaaS theme</h6>
                            <ul class="nav nav-divider mb-2 mb-sm-3">
                                <li class="nav-item">Tuesday, Jan 28</li>
                                <li class="nav-item">11:30 PM</li>
                            </ul>
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="<?= base_url() ?>assets/frontend/images/avatar/02.jpg" alt="avatar">
                                </div>
                                <div class="ms-2">
                                    <small class="mb-0 fw-bold">Emma Watson</small>
                                </div>
                            </div>
                            <a href="<?= base_url('about-us') ?>" class="btn btn-dark-soft mb-0">Know More About Us</a>
                        </div>

                        <div class="bg-body rounded-4 shadow d-flex align-items-center position-absolute top-0 end-0 d-none d-sm-flex mt-n5 me-xl-n6 p-3">
                            <div class="avatar">
                                <img class="avatar-img rounded-circle" src="<?= base_url() ?>assets/frontend/images/avatar/05.jpg" alt="avatar">
                            </div>
                            <div class="mx-3">
                                <h6 class="mb-0">Followers Gain</h6>
                                <small>Form the last 7 days</small>
                            </div>
                            <div class="badge bg-primary">24.7%</div>
                        </div>

                        <ul class="list-inline bg-body d-flex flex-column rounded shadow position-absolute top-0 start-0 d-none d-sm-flex p-2 mb-0 mt-3 ms-xl-n5">
                            <li class="list-inline-item me-0"> <a class="btn btn-xs btn-icon bg-facebook" href="#"><i class="fab fa-fw fa-facebook-f lh-base"></i></a> </li>
                            <li class="list-inline-item me-0"> <a class="btn btn-xs btn-icon bg-instagram" href="#"><i class="fab fa-fw fa-instagram lh-base"></i></a> </li>
                            <li class="list-inline-item me-0"> <a class="btn btn-xs btn-icon bg-twitter" href="#"><i class="fab fa-fw fa-twitter lh-base"></i></a> </li>
                            <li class="list-inline-item me-0"> <a class="btn btn-xs btn-icon bg-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in lh-base"></i></a> </li>
                            <li class="list-inline-item me-0"> <a class="btn btn-xs btn-icon bg-youtube" href="#"><i class="fab fa-fw fa-youtube lh-base"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>

<!-- <section class="bg-light overflow-hidden" >
   <div class="container">
      <div class="row g-4 align-items-center mb-4 mb-lg-5">
         <div class="col-lg-5">
            <h2 class="mb-0">Integrates with your workflow</h2>
         </div>
         <div class="col-lg-5 ms-auto text-lg-end">
            <div class="d-inline-block justify-content-center mx-auto bg-dark rounded px-5 py-3">
               <span class="text-white">Explore our</span><a class="ms-2" href="integrations.html">Integration library<span class="bi-chevron-right small ms-1"></span></a>
            </div>
         </div>
      </div>
      <div class="row g-4 g-lg-5">
         <div class="col-sm-6 col-lg-4 col-xl-3 ">
            <div class="card card-hover-shadow border-primary-hover border h-100 p-4 ">
               <div class="card-body p-0">
                  <div class="d-flex gap-3 align-items-center mb-3">
                  <img src="<?= base_url('assets/frontend/images/elements/github.svg') ?>" class="h-40px" alt="Integrations-icon">

                     <h6 class="mb-0">Github</h6>
                  </div>
                  <p>GitHub employs Git, a distributed version control system, to track changes to code over time. </p>
               </div>
               <div class="card-footer bg-transparent p-0 mt-6">
                  <a href="integration-single.html" class="icon-link icon-link-hover heading-color text-primary-hover stretched-link mb-0">View integration<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card card-hover-shadow border-primary-hover border h-100 p-4">
               <div class="card-body p-0">
                  <div class="d-flex gap-3 align-items-center mb-3">
                     <img src="<?=base_url('assets/frontend/images/elements/dropbox.svg') ?>" class="h-40px" alt="Integrations-icon">
                     <h6 class="mb-0">Dropbox</h6>
                  </div>
                  <p>Integrating Dropbox with backup solutions can provide an additional layer of data protection.</p>
               </div>
               <div class="card-footer bg-transparent p-0 mt-6">
                  <a href="integration-single.html" class="icon-link icon-link-hover heading-color text-primary-hover stretched-link mb-0">View integration<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card card-hover-shadow border-primary-hover border h-100 p-4">
               <div class="card-body p-0">
                  <div class="d-flex gap-3 align-items-center mb-3">
                     <img src="<?=base_url('assets/frontend/images/elements/reddit.svg') ?>" class="h-40px" alt="Integrations-icon">
                     <h6 class="mb-0">Reddit</h6>
                  </div>
                  <p>With Reddit integration, you can easily share Reddit posts or comments on other like blogs or websites.</p>
               </div>
               <div class="card-footer bg-transparent p-0 mt-6">
                  <a href="integration-single.html" class="icon-link icon-link-hover heading-color text-primary-hover stretched-link mb-0">View integration<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card card-hover-shadow border-primary-hover border h-100 p-4">
               <div class="card-body p-0">
                  <div class="d-flex gap-3 align-items-center mb-3">
                     <img src="<?=base_url('assets/frontend/images/elements/mailchimp.svg') ?>" class="h-40px" alt="Integrations-icon">
                     <h6 class="mb-0">Mailchimp</h6>
                  </div>
                  <p>Integrating with data analysis tools allows for deeper segmentation and personalized messaging.  </p>
               </div>
               <div class="card-footer bg-transparent p-0 mt-6">
                  <a href="integration-single.html" class="icon-link icon-link-hover heading-color text-primary-hover stretched-link mb-0">View integration<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card card-hover-shadow border-primary-hover border h-100 p-4">
               <div class="card-body p-0">
                  <div class="d-flex gap-3 align-items-center mb-3">
                     <img src="<?=base_url('assets/frontend/images/elements/shopify.svg') ?>" class="h-40px" alt="Integrations-icon">
                     <h6 class="mb-0">Shopify</h6>
                  </div>
                  <p>Shopify employs Git, a distributed version control system, to track changes to code over time. </p>
               </div>
               <div class="card-footer bg-transparent p-0 mt-6">
                  <a href="integration-single.html" class="icon-link icon-link-hover heading-color text-primary-hover stretched-link mb-0">View integration<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card card-hover-shadow border-primary-hover border h-100 p-4">
               <div class="card-body p-0">
                  <div class="d-flex gap-3 align-items-center mb-3">
                     <img src="<?=base_url('assets/frontend/images/elements/slack.svg') ?>" class="h-40px" alt="Integrations-icon">
                     <h6 class="mb-0">Slack</h6>
                  </div>
                  <p>Integrating Slack with project management tools like Trello, Asana, or Jira enables teams to receive.</p>
               </div>
               <div class="card-footer bg-transparent p-0 mt-6">
                  <a href="integration-single.html" class="icon-link icon-link-hover heading-color text-primary-hover stretched-link mb-0">View integration<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card card-hover-shadow border-primary-hover border h-100 p-4">
               <div class="card-body p-0">
                  <div class="d-flex gap-3 align-items-center mb-3">
                     <img src="<?=base_url('assets/frontend/images/elements/google-drive.svg') ?>" class="h-40px" alt="Integrations-icon">
                     <h6 class="mb-0">Drive</h6>
                  </div>
                  <p>GitHub employs Git, a distributed version control system, to track changes to code over time. </p>
               </div>
               <div class="card-footer bg-transparent p-0 mt-6">
                  <a href="integration-single.html" class="icon-link icon-link-hover heading-color text-primary-hover stretched-link mb-0">View integration<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card card-hover-shadow border-primary-hover border h-100 p-4">
               <div class="card-body p-0">
                  <div class="d-flex gap-3 align-items-center mb-3">
                     <img src="<?=base_url('assets/frontend/images/elements/webflow.svg') ?>" class="h-40px" alt="Integrations-icon">
                     <h6 class="mb-0">Webflow</h6>
                  </div>
                  <p>Integrating Webflow with CRM systems like HubSpot or Salesforce enables seamless data synchronization.</p>
               </div>
               <div class="card-footer bg-transparent p-0 mt-6">
                  <a href="integration-single.html" class="icon-link icon-link-hover heading-color text-primary-hover stretched-link mb-0">View integration<i class="bi bi-arrow-right"></i> </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->

<style type="text/css">
.card-keypartner {
    background-color: #fff;
    height: 7.3rem;
    padding: 10px 20px;
    text-align: center;
    position: relative;
    display: flex;
    -webkit-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
    align-items: center;
    justify-content: center;
}   
.card-keypartner:hover {
    background: #e69d0b;
}
</style>
<section class="bg-dark overflow-hidden" >
   <div class="container">
      <div class="row g-4 align-items-center mb-4 mb-lg-5">
         <div class="col-lg-8">
            <h2 class="mb-0 text-white">Our Partner Ecosystem</h2>
         </div>
         <div class="col-lg-4 ms-auto text-lg-end">
           <a class="ms-2 text-white" href="#">Explore Partner Ecosystem <span class="bi-chevron-right small ms-1"></span></a>
         </div>
      </div>

      <div class="row g-2 align-items-center">
          <div class="col-6 col-sm-3 col-lg-2">
                <div class="card-keypartner">
                    <img src="https://www.persistent.com/wp-content/uploads/2021/04/appian-world.svg">
                </div>
          </div>
          <div class="col-6 col-sm-3 col-lg-2">
                <div class="card-keypartner">
                    <img src="https://www.persistent.com/wp-content/uploads/2024/02/Ecosystem-AWS-Logo.svg">
                </div>
          </div>
          <div class="col-6 col-sm-3 col-lg-2">
                <div class="card-keypartner">
                    <img src="https://www.persistent.com/wp-content/uploads/2024/07/IBM-Platinum-Partner-Logo-for-Grid-Layout.svg">
                </div>
          </div>
          <div class="col-6 col-sm-3 col-lg-2">
                <div class="card-keypartner">
                    <img src="https://www.persistent.com/wp-content/uploads/2024/01/salesforce-bwc.svg">
                </div>
          </div>
          <div class="col-6 col-sm-3 col-lg-2">
                <div class="card-keypartner">
                    <img src="https://www.persistent.com/wp-content/uploads/2022/02/Partner-Ecosystem-Google-Cloud.svg">
                </div>
          </div>
          <div class="col-6 col-sm-3 col-lg-2">
                <div class="card-keypartner">
                    <img src="https://www.persistent.com/wp-content/uploads/2023/06/partner-ecosystem-red-hat-logo.svg">
                </div>
          </div>
          <div class="col-6 col-sm-3 col-lg-2">
                <div class="card-keypartner">
                    <img src="https://www.persistent.com/wp-content/uploads/2024/02/Ecosystem-Microsoft-Logo.svg">
                </div>
          </div>
          <div class="col-6 col-sm-3 col-lg-2">
                <div class="card-keypartner">
                    <img src="https://www.persistent.com/wp-content/uploads/2022/01/Mambu-and-Persistent-Partnership.svg">
                </div>
          </div>
          <div class="col-6 col-sm-3 col-lg-2">
                <div class="card-keypartner">
                    <img src="https://www.persistent.com/wp-content/uploads/2020/08/Outsystems-H.svg">
                </div>
          </div>
          <div class="col-6 col-sm-3 col-lg-2">
                <div class="card-keypartner">
                    <img src="https://www.persistent.com/wp-content/uploads/2020/09/Dassault-Systems.svg">
                </div>
          </div>
          <div class="col-6 col-sm-3 col-lg-2">
                <div class="card-keypartner">
                    <img src="https://www.persistent.com/wp-content/uploads/2023/06/partner-ecosystem-DataStax-logo.svg">
                </div>
          </div>
          <div class="col-6 col-sm-3 col-lg-2">
                <div class="card-keypartner">
                    <img src="https://www.persistent.com/wp-content/uploads/2021/02/FinMkt-partner-logo.svg">
                </div>
          </div>
      </div>
   </div>
</section>

<section class="pt-7">
    <div class="container">
  
        <div class="row">
            <div class="col-md-12 text-center">
                <h6 class="fbdvs m-auto mb-3">Portfolio tagline</h6> 
                <h3>Portfolio heading</h3>
                <p>Practical research, playbooks, and proofs from real engagements—covering brand, build, demand, operations, security, and performance—to help founders choose better bets, avoid waste, and scale sustainable revenue with confidence over time.</p>
            </div>
        </div>

        <div class="d-lg-flex align-items-center justify-content-center mt-2">
            <h6 class="mb-lg-0 me-3">Browse by:</h6>
            <div class="grid-menu" data-target=".filter-container">
                <ul class="nav nav-pills nav-pills-primary-soft gap-2">
                    <li class="nav-item">
                        <a class="nav-link active" data-filter="*">All work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-filter=".marketing">Marketing</a>          
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-filter=".design">Web design</a>        
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" data-filter=".business">Development</a>        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-filter=".brand">Brand design</a>        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-filter=".ui">UI/UX design</a>        
                    </li>
                </ul>
            </div>
        </div>

        <!-- Portfolio item START -->
        <div class="row g-4 filter-container mt-3" data-isotope='{"layoutMode": "masonry"}'>
            <!-- Item -->
            <div class="col-sm-6 col-lg-4 grid-item marketing business brand">
                <div class="card card-element-hover card-metro-hover">
                    <!-- Card Image -->              
                    <img src="https://mizzle.webestica.com/assets/images/portfolio/masonry/01.jpg" alt="portfolio-img">  

                    <!-- Card elements -->
                    <div class="card-img-overlay hover-element d-flex"> 
                        <!-- Info -->
                        <div class="card-text mt-auto">
                            <h6 class="mb-0"><a href="portfolio-case-studies-v1.html" class="text-white stretched-link">Dynamic Workflows Website</a></h6>
                            <small class="text-white">UI/UX design</small>
                        </div>
                    </div>                      
                </div>
            </div>

            <!-- Item -->
            <div class="col-sm-6 col-lg-4 grid-item brand ui">
                <div class="card card-element-hover card-metro-hover">
                    <!-- Card Image -->              
                    <img src="https://mizzle.webestica.com/assets/images/portfolio/masonry/04.jpg" alt="portfolio-img">  
                        
                    <!-- Card elements -->
                    <div class="card-img-overlay hover-element d-flex"> 
                        <!-- Info -->
                        <div class="card-text mt-auto">
                            <h6 class="mb-0"><a href="portfolio-case-studies-v2.html" class="text-white stretched-link">ElevateTech Redesign</a></h6>
                            <small class="text-white">Brand design</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-sm-6 col-lg-4 grid-item ui">
                <div class="card card-element-hover card-metro-hover">
                    <!-- Card Image -->              
                    <img src="https://mizzle.webestica.com/assets/images/portfolio/masonry/09.jpg" alt="portfolio-img"> 
                    
                    <!-- Card elements -->
                    <div class="card-img-overlay hover-element d-flex"> 
                        <!-- Info -->
                        <div class="card-text mt-auto">
                            <h6 class="mb-0"><a href="portfolio-case-studies-v1.html" class="text-white stretched-link">UI/UX Enhancement for SnapMediae</a></h6>
                            <small class="text-white">UI/UX design</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-sm-6 col-lg-4 grid-item design marketing">
                <div class="card card-element-hover card-metro-hover">
                    <!-- Card Image -->              
                    <img src="https://mizzle.webestica.com/assets/images/portfolio/masonry/05.jpg" alt="portfolio-img">
                    
                    <!-- Card elements -->
                    <div class="card-img-overlay hover-element d-flex"> 
                        <!-- Info -->
                        <div class="card-text mt-auto">
                            <h6 class="mb-0"><a href="portfolio-case-studies-v2.html" class="text-white stretched-link">Sustainability Initiative</a></h6>
                            <small class="text-white">Business dev</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-sm-6 col-lg-4 grid-item business design brand">
                <div class="card card-element-hover card-metro-hover">
                    <!-- Card Image -->              
                    <img src="https://mizzle.webestica.com/assets/images/portfolio/masonry/02.jpg" alt="portfolio-img">      
                    
                    <!-- Card elements -->
                    <div class="card-img-overlay hover-element d-flex"> 
                        <!-- Info -->
                        <div class="card-text mt-auto">
                            <h6 class="mb-0"><a href="portfolio-case-studies-v2.html" class="text-white stretched-link">User-Centric Redesign</a></h6>
                            <small class="text-white">Web design</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-sm-6 col-lg-4 grid-item business design brand">
                <div class="card card-element-hover card-metro-hover">
                    <!-- Card Image -->              
                    <img src="https://mizzle.webestica.com/assets/images/portfolio/masonry/07.jpg" alt="portfolio-img">      
                    
                    <!-- Card elements -->
                    <div class="card-img-overlay hover-element d-flex"> 
                        <!-- Info -->
                        <div class="card-text mt-auto">
                            <h6 class="mb-0"><a href="portfolio-case-studies-v1.html" class="text-white stretched-link">Website Optimization for TechWave</a></h6>
                            <small class="text-white">Web design</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-sm-6 col-lg-4 grid-item business design">
                <div class="card card-element-hover card-metro-hover">
                    <!-- Card Image -->              
                    <img src="https://mizzle.webestica.com/assets/images/portfolio/masonry/06.jpg" alt="portfolio-img"> 
                    
                    <!-- Card elements -->
                    <div class="card-img-overlay hover-element d-flex"> 
                        <!-- Info -->
                        <div class="card-text mt-auto">
                            <h6 class="mb-0"><a href="portfolio-case-studies-v2.html" class="text-white stretched-link">E-commerce Expansion</a></h6>
                            <small class="text-white">Digital Marketing</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-sm-6 col-lg-4 grid-item business design">
                <div class="card card-element-hover card-metro-hover">
                    <!-- Card Image -->              
                    <img src="https://mizzle.webestica.com/assets/images/portfolio/masonry/08.jpg" alt="portfolio-img"> 
                    
                    <!-- Card elements -->
                    <div class="card-img-overlay hover-element d-flex"> 
                        <!-- Info -->
                        <div class="card-text mt-auto">
                            <h6 class="mb-0"><a href="portfolio-case-studies-v1.html" class="text-white stretched-link">A Triumph of Software</a></h6>
                            <small class="text-white">Digital Marketing</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-sm-6 col-lg-4 grid-item ui">
                <div class="card card-element-hover card-metro-hover">
                    <!-- Card Image -->              
                    <img src="https://mizzle.webestica.com/assets/images/portfolio/masonry/03.jpg" alt="portfolio-img"> 
                    
                    <!-- Card elements -->
                    <div class="card-img-overlay hover-element d-flex"> 
                        <!-- Info -->
                        <div class="card-text mt-auto">
                            <h6 class="mb-0"><a href="portfolio-case-studies-v1.html" class="text-white stretched-link">Social Media Engagement</a></h6>
                            <small class="text-white">UI/UX design</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item END -->

        <!-- button -->
        <div class="text-center mt-7">
            <button class="btn btn-lg btn-outline-light mb-0"><i class="fa-solid fa-spinner fa-lg me-2"></i>Load more work</button>
        </div>  

    </div>  
</section>

<section class="bg-light">
    <div class="container">
        <!-- Title -->
        <div class="inner-container-small text-center mb-4 mb-sm-7">
            <h2 class="mb-4">Build with a deep focus and data analytics</h2>
            <p class="mb-0">The chatbot can be personalized to match the brand voice and tone, making it feel like an extension of the company's customer support team.</p>
        </div>

        <div class="row mt-7">
            <!-- Video START -->
            <div class="col-md-10 mx-auto">

                <!-- Mac desk START -->
                <div class="mac_container position-relative">
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-0 start-0 mt-n7 z-index-2">
                        <svg class="fill-primary" width="177" height="187" viewBox="0 0 177 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M145.997 54.7907C146.303 55.9483 147.111 56.7781 148.142 57.4275C148.71 57.7851 148.555 58.3776 148.482 58.842C148.419 59.2452 148.287 59.5844 148.46 60.0065C148.532 60.1801 148.397 60.5706 148.231 60.6875C147.703 61.0627 147.243 61.5096 146.628 61.801C144.465 62.8271 142.147 63.2656 139.827 63.6105C137.458 63.9623 135.087 64.3768 132.677 64.3899C131.927 64.3937 131.928 64.407 131.735 63.5032C133.049 63.4002 134.363 63.3426 135.664 63.1811C136.697 63.0532 137.712 62.7983 138.828 62.5815C138.54 62.2938 138.316 62.2013 137.914 62.2829C135.722 62.7261 133.518 63.0936 131.162 63.1237C131.131 62.9437 131.093 62.7258 131.055 62.5095C131.106 62.4847 131.219 62.4301 131.412 62.3365L130.707 62.0338C130.804 61.5801 130.891 61.1692 131.005 60.6343C131.35 60.3272 132.108 60.4369 132.465 59.8406C133.144 60.1569 133.745 59.7031 134.378 59.6166C135.162 59.5101 135.923 59.235 136.538 59.0732C136.659 58.644 136.732 58.316 136.843 57.9997C137.23 56.8911 137.253 56.9328 138.132 56.5166C139.109 56.0533 140.247 55.939 141.077 55.158C141.13 55.1076 141.254 55.0794 141.321 55.1043C142.025 55.371 142.442 55.0921 142.889 54.5154C143.264 54.0318 143.905 54.1232 144.48 54.34C144.921 54.5069 145.385 54.6119 145.997 54.7907Z"/>
                            <path d="M24.428 116.334C25.1448 115.73 25.1448 115.73 24.5158 114.968C24.5615 114.364 25.1989 113.883 24.9199 113.199C25.284 112.72 25.6931 112.269 26.002 111.757C26.5002 110.931 27.3748 110.769 28.1599 110.519C28.6932 110.349 29.2345 110.164 29.7889 110.038C30.4375 109.89 31.0639 109.649 31.7116 109.499C32.2986 109.364 32.901 109.291 33.4982 109.203C33.6642 109.179 33.8684 109.145 34.0013 109.216C34.3549 109.405 34.657 109.384 35.0322 109.236C35.7537 108.952 36.4793 109.31 37.1858 109.407C37.844 109.499 38.4753 109.88 39.0822 110.203C39.3141 110.325 39.8134 110.578 39.2077 110.944C39.1647 110.97 39.2822 111.239 39.3021 111.399C39.3227 111.566 39.3736 111.86 39.3118 111.89C38.5819 112.237 38.8737 112.524 39.2484 112.987C39.8001 113.669 39.649 113.875 39.0359 114.806C38.6624 115.372 38.3638 116.014 37.677 116.145C35.8203 116.497 33.9632 116.877 32.0655 116.221C31.3051 115.958 30.4472 115.833 29.6556 116.213C28.9735 116.541 28.1709 116.608 27.6086 117.214C27.4389 117.397 27.114 117.444 26.8523 117.53C26.2949 117.713 25.7631 117.711 25.1905 117.476C24.5955 117.232 24.6639 116.708 24.428 116.334Z"/>
                            <path d="M107.925 54.6811C107.026 55.0396 106.183 55.3027 105.408 55.6985C103.185 56.8338 100.753 56.7813 98.3713 57.0078C97.3016 57.1097 96.3873 56.5562 95.4595 56.133C95.2986 56.0594 95.2371 55.767 95.123 55.5624C95.5551 55.5356 95.9599 55.5105 96.5508 55.4736L94.8167 54.7282C94.7925 54.2801 94.8495 53.8726 94.7301 53.5265C94.5819 53.097 94.7873 52.772 94.9803 52.5195C95.2049 52.2253 95.6012 52.0623 95.9543 51.8212C96.7809 52.4066 97.6969 52.376 98.6818 52.2735C98.7451 51.83 99.2289 51.4823 98.9919 50.909C98.9415 50.7875 99.0535 50.5078 99.1765 50.4194C100.182 49.6971 101.007 48.6351 102.422 48.6597C102.677 48.6645 103 48.6868 103.173 48.5503C103.434 48.3445 103.784 48.7803 103.999 48.3272C104.177 47.9543 104.459 48.3627 104.699 48.3852C104.996 48.413 105.301 48.4077 105.588 48.477C105.851 48.5403 106.095 48.6843 106.349 48.7937C106.766 50.1287 107.562 51.2137 108.543 52.2046C108.334 53.0393 108.123 53.8866 107.925 54.6811Z"/>
                            <path d="M3.22725 135.018C3.01142 134.651 2.82621 134.358 2.6643 134.052C2.60584 133.94 2.59095 133.8 2.57731 133.67C2.53843 133.299 3.1029 133.289 3.04058 132.867C2.99194 132.536 2.97883 132.167 3.07829 131.856C3.16105 131.598 3.61758 131.359 3.57889 131.185C3.49264 130.796 3.50464 130.591 3.90481 130.457C3.97853 130.432 4.01395 130.239 4.03446 130.118C4.18727 129.225 4.18475 129.224 5.15765 129.129C5.0126 128.997 4.88744 128.882 4.65873 128.674C5.06032 128.695 5.36079 128.675 5.64444 128.734C5.99106 128.805 6.32811 128.932 6.66056 129.057C6.99508 129.182 7.31918 129.336 7.73596 129.297L6.56754 128.649C6.58429 128.605 6.60126 128.561 6.61867 128.516C6.845 128.585 7.07915 128.636 7.29634 128.728C8.39764 129.193 9.47652 129.718 10.5979 130.126C11.5873 130.486 12.3905 131.027 12.9544 131.916C12.6709 132.036 12.2909 132.102 12.664 132.539C13.0715 133.016 12.857 133.407 12.3933 133.832C12.9178 134.161 13.5636 134.486 12.9514 135.326L11.5434 134.721C11.5047 134.777 11.4652 134.834 11.426 134.891C11.8428 135.245 12.2597 135.599 12.6887 135.963C12.2313 136.259 11.7885 136.473 11.2316 136.153C11.0752 136.064 10.8129 136.179 10.6028 136.162C9.68931 136.086 9.68926 136.081 9.38524 136.736C9.32706 136.861 9.27587 136.989 9.22141 137.116L9.07184 137.464C8.61231 137.647 8.17897 137.804 7.7589 137.99C6.86549 138.388 5.968 138.251 5.08368 137.997C4.64531 137.87 4.24938 137.593 3.80988 137.474C3.32539 137.343 3.08927 136.963 2.85718 136.617C2.39472 135.928 2.4732 135.694 3.22725 135.018Z"/>
                            <path d="M45.1232 65.2617C45.2584 65.9616 45.403 66.6418 45.5014 67.3281C45.5109 67.3946 45.2383 67.5014 45.0079 67.6442C45.1784 67.8653 45.3473 68.0383 45.4581 68.2427C45.5893 68.4833 45.6663 68.7532 45.7726 69.0081C45.9873 69.5241 46.2494 70.0452 45.4624 70.3332C45.4026 70.3556 45.3917 70.4965 45.3469 70.5761C45.0273 71.1423 44.9322 71.7719 44.1975 72.164C43.6059 72.4798 43.0766 72.978 42.4099 73.2273C41.7843 73.4605 41.1793 73.7203 40.4896 73.7742C39.4305 73.8564 38.3836 73.9374 37.4391 73.3399C37.2022 73.19 37.0439 72.915 36.7713 72.6108C37.1705 72.4037 37.4404 72.2637 37.7561 72.1004C37.159 71.5986 36.3433 71.2982 36.012 70.4027C36.3054 70.2335 36.5888 70.07 36.9424 69.8661L36.0159 69.4679C36.2322 68.5719 36.2712 67.6903 36.6811 66.8754C36.9162 66.4081 37.2463 66.0587 37.6679 65.8802C38.2092 65.6505 38.682 65.2875 39.2978 65.1747C39.8547 65.073 40.3863 64.8352 40.9624 64.7248C41.9093 64.5441 42.8389 64.7449 43.7755 64.7177C44.2221 64.7044 44.6802 65.0713 45.1232 65.2617Z"/>
                            <path d="M46.2804 129.498L49.0061 130.67C48.426 130.121 47.7113 129.866 47.0284 129.547C46.7534 129.419 46.3502 129.401 46.3291 128.992C46.3067 128.569 46.2946 128.127 46.4009 127.727C46.4376 127.59 46.8499 127.475 47.0823 127.488C47.332 127.501 47.5726 127.677 47.8446 127.794C47.8471 127.546 47.799 127.376 47.8598 127.269C47.9856 127.049 48.3374 126.822 48.3017 126.666C48.0996 125.798 48.7296 125.211 48.9848 124.513C49.1002 124.196 49.5073 123.818 49.8217 123.777C50.595 123.68 51.0987 123.027 51.9901 122.955C52.3057 123.076 52.7066 123.2 53.2579 123.055C53.9802 122.865 54.8069 122.793 55.5419 123.264C55.8837 123.483 56.2915 123.599 56.74 123.792C56.8815 124.879 56.9937 125.994 57.1795 127.097C57.3743 128.251 56.6292 128.905 55.8957 129.501C55.36 129.936 54.8984 130.629 54.033 130.482C52.9291 131.494 51.5109 131.149 50.2239 131.389C49.3586 131.551 48.583 131.201 47.8174 131.023C47.1848 130.876 46.6825 130.169 46.1228 129.71C46.1753 129.639 46.2282 129.568 46.2804 129.498Z"/>
                            <path d="M70.5926 110.828C69.8281 111.133 69.0176 111.456 68.1052 111.82C67.6827 111.638 67.1604 111.466 66.7002 111.189C66.5294 111.086 66.4586 110.745 66.4359 110.504C66.4267 110.412 66.6809 110.296 66.8165 110.19C66.5305 109.848 66.0829 109.528 66.471 108.956C66.5438 108.85 66.6214 108.688 66.5917 108.582C66.4737 108.163 66.3624 107.714 66.6436 107.365C67.1481 106.738 67.6053 105.994 68.3353 105.65C69.7792 104.97 71.284 104.381 72.9227 104.438C73.8997 104.472 74.8905 104.55 75.8376 104.771C76.2517 104.868 76.7353 105.198 76.8534 105.769C77.0486 106.707 77.2959 107.636 77.4597 108.58C77.5152 108.902 77.4763 109.304 77.3247 109.586C76.3715 111.363 74.9375 112.305 72.6182 111.955C72.2802 111.904 71.8821 111.958 71.6155 111.795C71.2299 111.559 70.9384 111.168 70.5926 110.828Z"/>
                            <path d="M117.847 127.388C117.571 127.329 117.295 127.27 117.018 127.211C118.028 127.648 117.947 128.878 118.706 129.48C118.978 129.695 118.92 130.208 118.668 130.323C118.258 130.511 118.371 130.807 118.409 131.029C118.511 131.618 118.314 131.997 117.837 132.349C116.462 133.364 115.132 134.45 113.335 134.625C112.4 135.364 111.22 135.191 110.158 135.443C109.642 135.566 109.063 135.427 108.45 135.404C108.087 134.829 108.444 134.373 109.022 133.885C108.703 133.819 108.44 133.687 108.221 133.738C107.919 133.81 107.907 133.589 107.908 133.476C107.913 132.959 107.974 132.449 107.783 131.94C107.736 131.815 107.877 131.58 107.99 131.446C108.193 131.206 108.471 131.045 108.353 130.631C108.32 130.513 108.583 130.291 108.737 130.146C110.066 128.906 111.503 127.884 113.383 127.619C113.637 127.584 113.968 127.401 114.248 127.277C115.048 126.923 115.893 127.156 116.679 126.953C117.202 126.82 117.519 127.034 117.847 127.388Z"/>
                            <path d="M91.7672 24.8247C91.547 24.6914 91.3267 24.5567 91.0847 24.4087C91.1914 24.3453 91.2532 24.2747 91.3141 24.2755C92.2508 24.2918 93.1886 24.214 94.1227 24.389C94.7102 24.499 95.2887 24.5664 95.4832 25.2642C95.6155 25.7395 96.5858 25.7315 96.1984 26.507C96.6387 27.1399 96.321 27.7134 96.0335 28.2693C96.3799 28.5727 96.7377 28.8211 97.0145 29.1413C97.3269 29.5007 97.1767 30.157 96.7095 30.7302C96.6033 30.8604 96.3966 30.9421 96.3498 31.0845C95.9876 32.1812 95.9964 32.1824 94.9713 32.2693C94.4601 32.312 93.9473 32.41 93.4379 32.3949C92.8165 32.3769 92.3452 32.5594 91.8854 32.9972C91.2027 33.647 90.29 33.8676 89.4099 33.6518C88.6128 33.4571 88.0808 32.8153 87.8304 31.9216C88.401 31.7779 88.9702 31.6335 89.7678 31.4315C89.1539 31.1676 88.7378 30.9967 88.3291 30.8104C87.922 30.6261 88.0252 30.6171 88.0117 29.8426C88.0021 29.2882 88.5441 28.7258 88.0154 28.1815C88.1945 27.7162 88.3745 27.2513 88.554 26.7849C88.8844 25.9237 89.299 25.2133 90.4096 25.223C90.8495 25.2269 91.2921 24.9722 91.7672 24.8247Z"/>
                            <path d="M44.107 152.712C43.459 153.621 42.5969 153.667 41.933 153.49C41.084 153.264 40.1846 153.198 39.3681 152.77C38.3108 152.216 37.1992 151.745 36.0708 151.357C35.5233 151.169 35.277 150.66 34.7775 150.454C34.6477 150.401 34.4752 150.114 34.5167 150.032C34.8351 149.394 34.2607 148.779 34.5511 148.091C34.7441 147.636 34.5125 147.001 34.4652 146.377C35.1831 146.091 35.0212 144.756 36.3034 144.825C36.9667 145.426 37.9354 145.056 38.829 145.173C38.9537 145.19 39.1033 145.116 39.2089 145.16C40.4687 145.689 41.7218 146.232 43.0851 146.818C42.8176 146.944 42.7019 146.999 42.4138 147.134C42.7381 147.192 42.9584 147.302 43.078 147.234C43.206 147.162 43.2123 146.897 43.3284 146.767C43.3808 146.708 43.5787 146.75 43.6947 146.791C43.7479 146.809 43.8138 146.971 43.7879 147.008C43.5956 147.289 43.3815 147.557 43.1557 147.853C43.5492 148.291 43.9691 148.758 44.2831 149.108C44.1087 149.443 44.004 149.643 43.8999 149.842C44.4206 149.637 44.3732 150.11 44.5331 150.357C44.6949 150.608 44.9019 150.83 45.0765 151.049C44.6463 151.811 44.0031 151.888 43.2288 151.808C43.5289 152.116 43.7977 152.394 44.107 152.712Z"/>
                            <path d="M142.716 84.3152C142.415 84.9644 141.971 85.5099 142.563 86.1407C141.625 86.3733 141.096 86.221 140.769 85.4333C140.544 84.8894 140.167 84.4326 140.038 83.808C139.926 83.2613 139.343 82.8277 139.086 82.2877C138.888 81.8727 138.872 81.3703 138.776 80.9068C138.933 80.8421 139.103 80.7729 139.37 80.6632C139.426 80.9259 139.482 81.1839 139.537 81.442C139.598 81.442 139.658 81.4414 139.718 81.4414C139.797 81.132 139.876 80.8232 139.964 80.4756C140.132 80.4449 140.508 80.4876 140.713 80.3201C141.944 79.3147 143.426 78.9719 144.92 78.6814C145.41 78.5859 145.939 78.7078 146.448 78.6805C147.705 78.6135 147.954 78.5635 148.829 79.1248C149.462 79.5304 150.135 79.9671 150.461 80.741C150.589 81.0465 150.808 81.4079 151.083 81.5396C151.779 81.8718 151.726 82.3095 151.443 82.8658C151.364 83.0212 151.312 83.1991 151.287 83.3727C151.127 84.4857 151.054 84.5767 150.076 84.7453C148.627 84.9954 147.181 84.791 145.738 84.6785C144.719 84.599 143.705 84.4371 142.716 84.3152Z"/>
                            <path d="M121.835 94.4787C121.131 95.0122 120.474 95.576 119.647 95.9019C118.103 96.5084 116.595 97.223 115.016 97.716C113.357 98.2345 111.689 98.8214 109.998 98.8377C109.465 98.5303 110.375 98.0553 109.719 97.7567C109.532 97.6711 109.548 97.1292 109.479 96.7951C109.308 95.9655 109.387 95.5771 110.082 95.3249C110.767 95.0762 111.171 94.6209 111.556 94.0752C112.151 93.2323 113.138 92.8985 113.918 92.2932C114.751 91.6455 115.766 91.3648 116.718 90.9566C117.21 90.7452 117.662 90.4132 118.169 90.2677C118.679 90.1213 119.256 90.0328 119.767 90.1229C120.078 90.1783 120.414 90.5741 120.573 90.8986C120.769 91.2989 121.163 91.618 121.113 92.1498C121.083 92.4573 121.401 92.5488 121.627 92.7083C121.887 92.8917 122.2 93.1206 121.628 93.4621C121.229 93.7011 121.459 94.1453 121.835 94.4787Z"/>
                            <path d="M136.472 40.1805C135.254 41.3715 133.878 41.518 132.535 41.6733C131.354 41.8095 130.155 41.8815 128.967 41.8493C127.781 41.8178 126.52 42.1082 125.38 41.2466C126.412 40.6056 127.599 41.2053 128.793 40.6764C127.433 40.2827 126.149 40.5244 124.646 40.2742C125.098 39.9209 125.262 39.7928 125.462 39.6353C125.258 39.5008 125.044 39.3595 124.83 39.2197C124.923 38.805 125.013 38.3963 125.12 37.9146C125.36 37.8766 125.706 37.8427 126.045 37.7685C127.361 37.483 127.358 37.4765 128.384 36.3706C128.499 36.2468 128.642 36.1471 128.783 36.0505C129.857 35.3143 130.973 34.7028 132.323 34.6237C132.822 34.5945 133.697 34.6377 134.13 34.8381C134.231 34.8855 134.388 34.8517 134.506 34.8136C134.808 34.7182 134.959 34.8855 134.986 35.129C135.063 35.8387 135.59 36.3584 135.751 37.0273C135.82 37.3139 136.018 37.4446 136.268 37.5987C136.608 37.8088 136.773 38.7242 136.554 39.022C136.418 39.2073 135.984 39.1778 136.142 39.5774C136.225 39.7875 136.359 39.977 136.472 40.1805Z"/>
                            <path d="M89.1868 68.5912C89.1283 68.8288 89.0665 69.0775 88.9818 69.4213C89.2737 69.3968 89.4812 69.3789 89.6988 69.3603C90.0427 70.2228 90.4007 71.1207 90.7703 72.0465C90.7254 72.1509 90.6515 72.2704 90.6217 72.3998C90.2729 73.9381 89.0565 74.5392 87.7415 74.9115C86.7142 75.2023 85.6469 75.3732 84.5538 75.3933C83.8714 75.4058 83.2459 75.41 82.5487 74.8918C83.6848 74.868 84.6962 74.8464 85.7081 74.825C85.7152 74.7469 85.7228 74.669 85.73 74.5905C85.5555 74.5525 85.3806 74.4828 85.2057 74.4815C84.4829 74.4761 83.7589 74.5119 83.0375 74.4893C82.7178 74.4794 82.2782 74.5636 82.4035 73.9216C82.4423 73.7236 82.0972 73.4494 81.9251 73.2115C81.7741 73.0031 81.6191 72.7975 81.4964 72.631C81.6972 72.0138 82.2189 72.2314 82.5924 71.9533C82.2284 71.8989 81.8643 71.8444 81.3851 71.7731C81.3163 71.5184 81.2243 71.178 81.1317 70.8375C81.3599 70.7457 81.705 70.6424 81.3216 70.2442C80.9076 69.813 80.8464 69.4125 81.3985 69.0434C81.4488 69.0099 81.5136 68.9234 81.5016 68.8819C81.2679 68.0789 81.9048 67.9389 82.3962 67.825C83.5707 67.5539 84.7755 67.7065 85.9641 67.7529C86.2432 67.7636 86.8916 67.8044 86.6283 68.4913C86.6133 68.5302 86.8108 68.6498 86.9092 68.7313C87.0037 68.6053 87.2057 68.436 87.1746 68.3592C86.9577 67.8173 87.5411 67.8264 87.6121 67.9011C88.0494 68.3589 88.7933 68.0534 89.1868 68.5912Z"/>
                            <path d="M60.1016 61.539C60.3147 61.4539 60.5285 61.3688 60.8524 61.2392C60.5112 61.0434 60.2297 60.8815 59.9227 60.7049C60.0379 60.1352 60.1316 59.537 60.2859 58.9549C60.3792 58.6032 60.5307 58.2545 60.7233 57.9465C60.8705 57.7119 61.2541 58.1107 61.4967 57.6593C61.6536 57.3676 62.2689 57.356 62.7202 57.2946C63.0866 57.2445 63.6041 57.7777 63.8523 57.0964C64.2742 57.2508 64.6967 57.4053 65.1192 57.5587C65.16 57.5741 65.2036 57.5818 65.2463 57.5929L67.9449 56.5169C68.0318 56.3148 68.0978 56.0893 68.2179 55.8986C68.4042 55.6051 68.8627 55.4 68.987 55.6448C69.2632 56.1896 69.838 55.6729 70.0797 56.0798C69.9519 57.1887 69.8514 57.5124 69.368 58.2516C69.8868 58.2374 70.339 58.2252 70.9073 58.2103C70.9749 58.3905 71.2012 58.687 71.129 58.8524C70.6711 59.8956 70.4631 61.1112 69.3192 61.7249C69.0088 61.8911 68.7195 62.1288 68.3887 62.2194C67.6341 62.4266 66.8621 62.5703 66.0936 62.7251C65.7148 62.8013 65.3278 62.839 64.9464 62.9046C64.3558 63.0062 63.7289 62.6314 63.1623 63.0394C62.6383 62.7154 62.0791 62.8492 61.5094 62.8433C60.7353 62.8355 60.1804 62.3956 60.1016 61.539Z"/>
                            <path d="M24.4201 92.6484C24.6329 92.1533 24.778 91.8144 24.9238 91.4764C25.1196 91.0237 25.2545 90.5005 25.954 90.6782C26.0315 90.6982 26.2157 90.5766 26.2389 90.4905C26.3899 89.9196 26.957 89.9985 27.3212 89.766C28.3098 89.1352 29.3635 89.4325 30.3814 89.6063C30.9619 89.7052 31.2661 90.0374 31.367 90.7899C31.4803 91.6344 31.3685 92.5824 31.9007 93.3574C31.7336 93.768 32.2272 94.3747 31.5132 94.6312C31.41 94.6685 31.3196 94.8107 31.2728 94.9246C30.6145 96.5411 29.2628 97.1487 27.6753 97.459C26.8702 97.6168 26.0852 97.9101 25.2473 97.7475C24.9035 97.6809 24.5639 97.5824 24.2334 97.4668C24.1247 97.4295 23.9688 97.2891 23.9739 97.204C24.0206 96.4599 23.6721 95.7544 23.717 95.0325C23.7728 94.1427 24.0445 93.2821 24.4201 92.6484Z"/>
                            <path d="M85.1622 121.171C85.5341 121.11 85.8079 121.066 86.3399 120.98C85.923 120.73 85.7815 120.643 85.6369 120.56C85.1575 120.288 85.158 120.289 85.3668 119.625C85.3927 119.542 85.456 119.424 85.423 119.376C85.0904 118.889 85.1571 118.381 85.4916 117.983C85.8704 117.531 86.3053 117.059 86.8188 116.802C88.8218 115.798 90.9977 115.636 93.1932 115.728C93.5675 115.744 93.9306 116.025 94.2939 116.181C94.1918 116.36 94.1118 116.501 94.0312 116.643C94.5005 116.807 94.794 117.055 94.6726 117.634C94.6365 117.807 94.781 118.128 94.9349 118.213C95.4606 118.503 94.9509 118.951 95.152 119.271C94.5173 119.37 94.89 120.17 94.381 120.37C93.8938 120.561 93.4312 120.911 92.9335 120.962C91.8375 121.074 90.7144 121.149 89.6272 121.024C89.0712 120.959 88.6498 121.037 88.2631 121.32C87.6363 121.781 86.9717 122.063 86.1902 122.083C85.5378 122.1 85.5384 122.113 85.1622 121.171Z"/>
                            <path d="M80.624 91.0137C80.4978 90.9595 80.3092 90.9142 80.1693 90.8056C80.0759 90.7328 80.0816 90.5217 79.9874 90.4624C79.8844 90.3978 79.702 90.4728 79.5812 90.4225C79.4742 90.3776 79.4078 90.1714 79.3165 90.1668C79.1486 90.1582 78.9628 90.2206 78.8091 90.3009C78.7068 90.354 78.6473 90.4902 78.5292 90.6391C78.8385 90.6783 79.0875 90.7098 79.3374 90.741C78.8711 91.072 78.4389 91.4767 77.8741 90.974C78.033 90.8226 78.19 90.6744 78.384 90.4901C77.622 90.0765 77.7186 90.9893 77.2214 91.1111C77.4485 90.7176 77.2817 90.3187 77.5163 89.9257C77.625 89.7434 77.3224 89.3152 77.1692 88.8985C77.6818 88.6315 78.256 88.332 78.928 87.9818C78.6288 87.7908 78.4158 87.6546 78.1564 87.489C78.3006 86.8287 78.4488 86.1517 78.5983 85.4672C79.1525 85.3208 79.6398 85.2295 80.0983 85.0602C80.495 84.9128 80.8412 84.6246 81.2407 84.49C82.3684 84.1105 83.5386 84.2218 84.6843 84.3589C85.0944 84.4076 85.7209 84.5368 85.5193 85.274C86.1887 85.5579 85.9856 86.305 86.2724 86.8047C86.6314 87.4307 86.4199 88.1743 85.7862 88.8025C84.8371 89.7432 83.6269 90.1093 82.4489 90.4644C81.859 90.6417 81.2743 90.8744 80.624 91.0137Z"/>
                            <path d="M106.096 77.1603C106.254 76.9853 106.406 76.8162 106.581 76.6227C105.532 76.1173 104.758 77.0928 103.708 76.8237C103.903 76.6426 104.023 76.4785 104.184 76.3917C104.444 76.2527 104.73 76.1649 105.107 76.0146C104.533 75.8743 104.384 75.881 103.886 76.029C103.366 75.0139 103.366 75.0139 103.702 74.2241C104.377 74.0006 105.18 73.9069 105.758 73.497C106.396 73.0447 107.114 73.1391 107.767 72.884C108.392 72.6407 109.114 72.6108 109.798 72.5656C110.173 72.5403 110.623 72.5754 110.924 72.7656C111.305 73.0064 111.83 73.4387 111.822 73.7773C111.809 74.3347 112.191 74.3728 112.415 74.6465C112.722 75.021 112.985 75.4664 112.849 76.0171C112.769 76.3387 112.844 76.7949 112.651 76.9726C112.178 77.4048 111.632 77.8263 111.04 78.0411C109.921 78.4463 108.756 78.7382 107.592 78.9962C107.301 79.0612 106.941 78.8189 106.48 78.6772C106.745 78.538 106.849 78.4825 107.071 78.3649C106.383 78.1795 106.405 77.5177 106.096 77.1603Z"/>
                            <path d="M149.811 103.865C149.471 104.129 149.308 104.257 149.148 104.381C150.058 105.11 150.08 105.204 149.346 105.888C149.96 105.888 150.451 105.887 150.985 105.887C151.019 106.162 151.052 106.444 151.087 106.729C150.499 106.964 149.902 107.202 149.249 107.462C149.749 108.003 150.36 107.369 150.926 107.701C150.729 108.42 150.098 108.615 149.506 108.824C149.181 108.937 148.808 108.913 148.491 109.037C147.074 109.59 145.621 110.008 144.14 110.344C144.008 110.374 143.883 110.441 143.756 110.495C143.071 110.787 142.393 111.109 141.608 110.815C141.518 110.192 142.096 110.13 142.529 109.918C142.111 109.333 141.696 110.091 141.294 109.876C140.805 109.63 141.856 108.95 140.931 108.84L141.523 107.465C141.969 107.19 142.415 106.909 142.868 106.64C143.322 106.37 143.844 106.287 144.283 105.906C144.71 105.537 145.377 105.457 145.915 105.202C146.266 105.036 146.664 105.005 146.954 104.622C147.163 104.346 147.704 104.382 147.846 103.886C147.885 103.748 148.224 103.613 148.42 103.619C148.796 103.63 149.167 103.743 149.811 103.865Z"/>
                            <path d="M61.1012 76.0729C61.3179 75.6484 61.2217 75.2495 61.6818 74.9738C61.6643 75.2069 61.6519 75.3759 61.6382 75.5603C62.2118 75.6293 62.7893 75.6799 63.358 75.7793C63.5038 75.8049 63.7352 75.9866 63.7344 76.095C63.7306 76.6971 64.2125 77.087 64.3423 77.6129C64.4001 77.8457 64.3303 78.1275 64.2577 78.3683C64.2208 78.4888 63.9888 78.5497 63.9515 78.67C63.9061 78.8166 63.9734 78.9978 63.9937 79.1815C63.1296 79.0682 63.1032 79.0437 62.4417 79.7764C62.0457 80.2148 61.4949 80.1045 61.0207 80.3322C61.1594 80.4884 61.2933 80.6392 61.4437 80.808C61.2544 80.8785 61.0397 81.0417 60.9188 80.9892C59.4082 80.3321 59.3736 80.319 58.1699 80.6199C58.6867 81.3034 59.4034 80.7273 60.0901 80.9746C59.9818 81.147 59.8845 81.4325 59.792 81.4307C58.8634 81.4162 57.9055 81.5906 57.177 80.6765C56.9508 80.3928 56.8089 80.2981 56.9548 79.9419C57.0452 79.7226 57.0179 79.4332 56.9783 79.1861C56.8766 78.5459 56.7386 77.9121 56.6032 77.2165C56.8396 77.1724 57.0585 77.1319 57.0052 77.1415C57.4833 76.8443 56.877 76.0595 57.738 76.3456C57.9825 76.4265 57.6467 75.658 58.2639 75.9232C58.5024 76.0258 58.9297 75.6902 59.2448 75.5645C59.4149 75.7309 59.5776 75.8892 59.74 76.0479C59.8102 76.0041 59.8803 75.9603 59.9507 75.9161C59.788 75.7153 59.6254 75.5146 59.4212 75.2619C59.9044 75.2009 60.1842 75.165 60.5514 75.1181C60.7213 75.4134 60.9114 75.743 61.1012 76.0729Z"/>
                            <path d="M80.6889 135.08C80.1943 135.214 79.8028 135.32 79.3672 135.438C79.5787 135.684 79.7129 135.84 79.888 136.044C79.4488 136.434 78.9292 136.6 78.4143 136.711C77.276 136.954 76.1081 137.019 74.9648 137.27C74.262 137.425 73.5773 137.158 72.9441 136.705C73.0755 136.076 73.81 136.243 74.1893 135.834L72.9526 135.303C73.2161 134.335 73.47 133.403 73.7031 132.549C74.8258 132.03 75.8853 131.826 77.0023 131.838C77.6389 131.845 78.2438 131.555 78.9221 131.679C79.1903 131.728 79.3841 132.182 79.7313 131.875C79.7369 131.87 79.982 132.119 79.9789 132.122C79.4819 132.653 80.3029 133.257 79.8967 133.799C79.8701 133.834 80.0578 134.041 80.1601 134.157C80.2721 134.284 80.4204 134.383 80.5146 134.52C80.5855 134.623 80.5956 134.766 80.6889 135.08Z"/>
                            <path d="M108.148 113.549C108.646 113.548 109.009 113.547 109.526 113.546C109.26 113.289 109.138 113.171 109.009 113.046C109.068 113.004 109.132 112.921 109.183 112.929C109.668 113.001 110.129 112.954 110.595 112.782C110.873 112.679 111.187 112.653 111.487 112.63C112.019 112.591 112.453 112.398 112.769 111.919C112.639 111.766 112.504 111.609 112.442 111.536C112.725 111.373 113.034 111.196 113.263 111.064C113.421 111.132 113.497 111.144 113.501 111.169C113.552 111.463 113.592 111.759 113.631 112.03C114.004 112.117 114.343 112.196 114.85 112.314C114.502 112.616 114.31 112.78 114.035 113.017C114.298 113.327 114.563 113.639 114.847 113.973C114.793 114.152 114.73 114.362 114.653 114.618L115.217 114.861C115.421 115.704 115.132 116.199 114.39 116.535C113.581 116.902 112.825 117.382 111.906 117.715C111.846 117.383 111.789 117.063 111.726 116.711C111.153 116.631 110.588 116.685 109.985 116.855C109.382 117.024 108.716 116.973 108.1 117.017C107.802 116.448 108.267 116.3 108.558 116.02C108.436 115.951 108.325 115.833 108.215 115.834C107.533 115.842 107.297 115.61 107.504 115.059C107.698 114.542 107.936 114.042 108.148 113.549Z"/>
                            <path d="M97.6308 151.861C98.0372 151.784 98.3694 151.72 98.7836 151.641C98.6323 151.51 98.5523 151.384 98.4501 151.361C97.9542 151.25 97.4522 151.167 96.8842 151.062L97.2016 150.324C97.3618 150.317 97.558 150.309 97.9464 150.293L96.9086 149.846C96.9199 149.68 96.9573 149.551 96.9306 149.437C96.8685 149.177 96.6696 148.722 96.7095 148.701C97.1138 148.492 97.1249 148.025 97.3797 147.763C97.7592 147.373 98.2618 147.064 98.8544 147.326C99.0316 147.404 99.1283 147.725 99.293 147.754C99.4269 147.777 99.5942 147.463 99.7735 147.425C99.9199 147.393 100.224 147.516 100.254 147.626C100.375 148.069 100.746 148.142 101.075 148.257C101.485 148.399 101.651 148.677 101.6 149.074C101.545 149.497 101.749 149.689 102.076 149.923C102.537 150.255 102.726 150.75 102.447 151.331C102.35 151.532 102.264 151.746 102.222 151.963C102.115 152.515 101.721 153.099 101.283 153.098C100.214 153.093 99.1212 153.283 98.1023 152.722C97.7051 152.503 97.6946 152.203 97.6308 151.861Z"/>
                            <path d="M92.2876 101.301C92.5161 101.026 92.7542 100.737 93.0472 100.383C92.7116 100.035 92.3404 99.8155 91.8189 100.021C91.6057 99.4014 92.3431 99.3675 92.4646 98.9026C92.2617 98.7673 92.0484 98.6243 91.839 98.4847C91.62 97.9855 92.4279 97.9674 92.2869 97.4173C92.1424 96.8547 92.8921 97.0506 93.127 96.7261C93.2588 96.5439 93.55 96.4455 93.7889 96.3776C94.5789 96.1522 95.4387 96.4334 96.2258 96.0107C96.4139 95.9095 96.7983 96.1718 97.1862 96.2978C96.5302 96.8596 97.6415 97.3886 97.0789 97.9596C97.3296 98.3174 98.0343 98.3841 97.7766 99.1877C97.6028 99.2096 97.3304 99.2437 96.9421 99.2919C97.1983 99.5854 97.3227 99.7276 97.4507 99.8738C97.3674 100.35 96.9097 100.388 96.6116 100.428C95.6193 100.56 94.7525 100.912 93.9404 101.499C93.4407 101.861 92.8523 101.924 92.2876 101.301Z"/>
                            <path d="M55.8827 92.9763C56.0945 93.7776 56.251 94.3684 56.4534 95.1314L55.9946 96.1986C55.2153 96.3557 54.3668 96.151 53.6074 96.5503C52.7432 96.255 51.9761 96.6106 51.177 96.8626C50.9224 96.9425 50.5841 96.7563 50.2094 96.6756C50.237 96.4701 50.3187 96.2901 50.2706 96.1568C49.7781 94.7901 50.6854 94.0919 51.6411 93.5822C52.4568 93.147 53.3994 92.8889 54.3159 92.7261C54.8352 92.6335 55.4167 92.8919 55.8827 92.9763Z"/>
                        </svg>
                    </figure>

                    <div class="mac_scaler">
                        <div class="mac_holder">
                            <div class="mac_screen">
                                <div class="mac_camera"></div>
                                <div class="mac_screen_content" data-jarallax-video="https://www.youtube.com/watch?v=OQQ4a4Os6cE">
                                </div>
                            </div>
                            <div class="mac_bottom">
                                <div class="mac_bottom_top_half">
                                    <div class="mac_thumb_space"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mac desk START -->

                <!-- Content -->
                <div class="text-center mt-7">
                    <p class="lead mx-md-7 mb-5">We provide digital transformation solutions, enabling companies to make their visions. Far shed each high read are men over day.</p>
                    <!-- Buttons -->
                    <div class="d-grid d-sm-flex justify-content-center gap-2 gap-sm-4 mb-1">
                        <a href="sign-up.html" class="btn btn-lg btn-dark mb-0">Sign up and start design</a>
                        <a href="contact-v1.html" class="icon-link icon-link-hover heading-color text-primary-hover m-auto m-sm-0 mb-0">Let's do this!<i class="bi bi-arrow-right"></i> </a>
                    </div>
                    <span class="small">Start a free trial. *No credit card required</span>
                </div>
            </div>
            <!-- Video END -->
        </div>
    </div>
</section>

<section class="bg-dark" data-bs-theme="dark">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="col-lg-5 mb-5">
                <div data-sticky data-margin-top="100" data-sticky-for="768">
                    <h5>From idea to everyday growth</h5>
                    <h3 class="mb-4">Our SPROUT™ process, built for founders</h3>
                    <p class="mb-0">We turn clarity into customers. Six plain-spoken steps that move your idea from sketch to sales—without waste, rework, or guesswork.</p>
                    <hr class="my-5 text-white">
                    <div class="d-flex align-items-sm-center mb-3">
                        <div class="avatar avatar-xl flex-shrink-0">
                            <img class="avatar-img rounded-circle" src="https://mizzle.webestica.com/assets/images/avatar/05.jpg" alt="avatar">
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-1">Animesh Singh</h6>
                            <p class="mb-0">Chief Brand Gardener</p>
                        </div>
                    </div>
                    <q class="fs-6 fw-normal heading-color mb-4">Great brands are not invented; they are cultivated—seeded with clarity, watered by craft, and pruned by truth—until customers volunteer your story as their own, everywhere.</q>
                </div>
            </div>

            <div class="col-lg-6 ms-auto">
                <div class="card border p-4 p-sm-5 mb-5">
                    <div class="card-body p-0 pb-5">
                        <div class="icon-lg bg-primary rounded-circle fw-bold text-white mb-3">01</div>
                        <h4 class="mb-3">Seed the insight, align the intent</h4>
                        <p class="heading-color">Establish truths, define ICPs, choose goals, budgets, and success metrics before making anything that matters.</p>
                        <ul class="list-group list-group-borderless">
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Founder interviews, market and competitor scan</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Analytics, tech, security baselines audit</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Problem–solution and value hypothesis</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>90-day plan and success metrics</li>
                        </ul>
                    </div>

                    <div class="card-footer bg-transparent text-center p-0">
                        <img src="https://mizzle.webestica.com/assets/images/elements/saas-decoration/decoration-4.png" alt="">
                    </div>
                </div>

                <div class="card border p-4 p-sm-5 mb-5">
                    <div class="card-body p-0 pb-5">
                        <div class="icon-lg bg-primary rounded-circle fw-bold text-white mb-3">02</div>
                        <h4 class="mb-3">Plant positioning and cohesive brand system</h4>
                        <p class="heading-color">Craft narrative, tone, visuals, guidelines, and launch assets that resonate and differentiate consistently across touchpoints.</p>
                        <ul class="list-group list-group-borderless">
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Positioning, messaging, voice architecture</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Logo, typography, color, design tokens</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Brand playbook and launch kit</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Asset templates for teams</li>
                        </ul>
                    </div>

                    <div class="card-footer bg-transparent text-center p-0">
                        <img src="https://mizzle.webestica.com/assets/images/elements/saas-decoration/decoration-2.png" alt="">
                    </div>
                </div>

                <div class="card border p-4 p-sm-5 mb-5">
                    <div class="card-body p-0 pb-5">
                        <div class="icon-lg bg-primary rounded-circle fw-bold text-white mb-3">03</div>
                        <h4 class="mb-3">Root the product in solid engineering</h4>
                        <p class="heading-color">Design UX, build secure stacks, integrate APIs, automate delivery, and document everything for scalability tomorrow.</p>
                        <ul class="list-group list-group-borderless">
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>IA, wireframes, interactive prototypes</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Web/app, CMS/e-com, integrations</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>CI/CD, testing, observability</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Accessibility and Core Web Vitals</li>
                        </ul>
                    </div>

                    <div class="card-footer bg-transparent text-center p-0">
                        <img src="https://mizzle.webestica.com/assets/images/elements/saas-decoration/decoration-3.png" alt="">
                    </div>
                </div>

                <div class="card border p-4 p-sm-5 mb-5">
                    <div class="card-body p-0 pb-5">
                        <div class="icon-lg bg-primary rounded-circle fw-bold text-white mb-3">04</div>
                        <h4 class="mb-3">Oxygenate demand with PR and community</h4>
                        <p class="heading-color">Publish content, orchestrate SEO, run social, manage reviews, and spark local discovery loops that convert.</p>
                        <ul class="list-group list-group-borderless">
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Topical maps, content calendar, newsroom</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>GMB ops, reviews, hyperlocal plays</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Influencers, UGC, partnerships</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>PR outreach and monitoring</li>
                        </ul>
                    </div>

                    <div class="card-footer bg-transparent text-center p-0">
                        <img src="https://mizzle.webestica.com/assets/images/elements/saas-decoration/decoration-3.png" alt="">
                    </div>
                </div>

                <div class="card border p-4 p-sm-5 mb-5">
                    <div class="card-body p-0 pb-5">
                        <div class="icon-lg bg-primary rounded-circle fw-bold text-white mb-3">05</div>
                        <h4 class="mb-3">Underpin trust with security and governance</h4>
                        <p class="heading-color">Harden access, remediate vulnerabilities, monitor continuously, and prepare crisis runbooks to protect reputation and data.</p>
                        <ul class="list-group list-group-borderless">
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>VAPT, IAM, backups/DR drills</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Policies, logging, alerting, SLAs</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>ORM listening, escalation protocols</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Compliance and audit trails</li>
                        </ul>
                    </div>

                    <div class="card-footer bg-transparent text-center p-0">
                        <img src="https://mizzle.webestica.com/assets/images/elements/saas-decoration/decoration-3.png" alt="">
                    </div>
                </div>

                <div class="card border p-4 p-sm-5 mb-5">
                    <div class="card-body p-0 pb-5">
                        <div class="icon-lg bg-primary rounded-circle fw-bold text-white mb-3">06</div>
                        <h4 class="mb-3">Thrive through experiments, automation, and scale</h4>
                        <p class="heading-color">Run CRO, model incrementality, automate winners, and reallocate budgets towards proven, compounding growth over time.</p>
                        <ul class="list-group list-group-borderless">
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Experiment backlog and cadence</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Hyperlocal targeting, offer tests</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Dashboards: CAC, LTV, payback</li>
                           <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Weekly kill/scale rules</li>
                        </ul>
                    </div>

                    <div class="card-footer bg-transparent text-center p-0">
                        <img src="https://mizzle.webestica.com/assets/images/elements/saas-decoration/decoration-3.png" alt="">
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section>
    <div class="container">
      <div class="row g-4 g-lg-6" style="padding-top: 20px;">
         <!-- Feature item -->
         <div class="col-xl-4">
            <div class="card card-body d-flex p-4 border h-100 flex-md-row flex-xl-column">
               <!-- Content -->
               <div class="me-md-5 me-xl-0 mb-4 mb-md-0">
                  <!-- Icon -->
                  <figure class="text-primary mb-3">
                     <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.74136 18.8326C9.60765 18.6411 9.54079 18.5453 9.48641 18.4446C9.36533 18.2205 9.2882 17.9753 9.25914 17.7222C9.24609 17.6085 9.24609 17.4917 9.24609 17.2582V14.1914H14.7461V17.2582C14.7461 19.1702 14.7461 20.1262 14.5249 20.5566C14.0158 21.5471 12.7956 21.931 11.8111 21.4103C11.3833 21.1841 10.836 20.4002 9.74136 18.8326Z" fill="currentColor"/>
                        <path d="M17.5114 9.84101C19.375 6.88684 20.3067 5.40976 19.9484 4.21191C19.8359 3.83574 19.6441 3.48802 19.386 3.19214C18.5641 2.25 16.8176 2.25 13.3248 2.25H10.6405C7.12482 2.25 5.36697 2.25 4.54466 3.1974C4.28652 3.49482 4.09526 3.84421 3.98384 4.22194C3.6289 5.42518 4.57619 6.90596 6.47077 9.86751L9.23438 14.1875H14.7695L17.5114 9.84101Z" fill="currentColor" fill-opacity="0.25"/>
                     </svg>
                  </figure>
                  <h5 class="card-title mb-3">Expertise in SaaS implements</h5>
                  <p class="mb-3">Our platform offers a comprehensive suite of features designed to empower your business.</p>
                  <a href="#" class="btn btn-dark mb-0">View Integration</a>
               </div>
               <!-- Image -->
               <div class="mt-auto p-0">
                  <img src="<?=base_url('assets/frontend/images/elements/integration.png') ?>" alt="feature-img">
               </div>
            </div>
         </div>
         <!-- Feature group items -->
         <div class="col-xl-8">
            <div class="row g-4 g-lg-6">
               <!-- Feature item -->
               <div class="col-12">
                  <div class="card bg-primary bg-opacity-10 overflow-hidden p-5 pb-0">
                     <div class="row g-4">
                        <div class="col-md-6">
                           <div class="card-body p-0">
                              <!-- Icon -->
                              <figure class="text-primary mb-3">
                                 <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2.25C8.20507 2.25 6.75 3.70507 6.75 5.5V6.25H13.25V5.5C13.25 3.70507 11.7949 2.25 10 2.25Z" fill="currentColor"/>
                                    <path d="M17.75 17.25H18.5C20.2949 17.25 21.75 15.7949 21.75 14C21.75 12.2051 20.2949 10.75 18.5 10.75H17.75V17.25Z" fill="currentColor"/>
                                    <path d="M4.5 12.25C5.4665 12.25 6.25 13.0335 6.25 14C6.25 14.9665 5.4665 15.75 4.5 15.75H3.53571C3.03452 15.75 2.78393 15.75 2.60098 15.865C2.50557 15.9249 2.4249 16.0056 2.36496 16.101C2.25 16.2839 2.25 16.5345 2.25 17.0357C2.25 18.8734 2.25 19.7923 2.67151 20.4631C2.89131 20.8129 3.1871 21.1087 3.53691 21.3285C4.20774 21.75 5.12659 21.75 6.96429 21.75C7.46548 21.75 7.71607 21.75 7.89903 21.635C7.99443 21.5751 8.0751 21.4944 8.13505 21.399C8.25 21.2161 8.25 20.9655 8.25 20.4643L8.25 19.5C8.25 18.5335 9.0335 17.75 10 17.75C10.9665 17.75 11.75 18.5335 11.75 19.5V20.4643C11.75 20.9655 11.75 21.2161 11.865 21.399C11.9249 21.4944 12.0056 21.5751 12.101 21.635C12.2839 21.75 12.5345 21.75 13.0357 21.75H13.25C14.8846 21.75 15.7019 21.75 16.3179 21.4136C16.7806 21.161 17.161 20.7806 17.4136 20.3179C17.75 19.7019 17.75 18.8846 17.75 17.25V10.75C17.75 9.1154 17.75 8.2981 17.4136 7.68207C17.161 7.21936 16.7806 6.83904 16.3179 6.58638C15.7019 6.25 14.8846 6.25 13.25 6.25H6.75C5.1154 6.25 4.2981 6.25 3.68206 6.58638C3.21936 6.83904 2.83904 7.21936 2.58638 7.68206C2.25 8.2981 2.25 9.1154 2.25 10.75V10.9643C2.25 11.4655 2.25 11.7161 2.36496 11.899C2.4249 11.9944 2.50557 12.0751 2.60098 12.135C2.78393 12.25 3.03452 12.25 3.53572 12.25H4.5Z" fill="currentColor" fill-opacity="0.25"/>
                                 </svg>
                              </figure>
                              <!-- Title and content -->
                              <h5 class="card-title mb-3 text-white">Collaborating on work shouldn't be this hard</h5>
                              <p class="mb-3">We provide digital transformation solutions, enabling companies to make their visions. </p>
                              <a href="#" class="btn btn-white  mb-5">Explore Now</a>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <!-- Image -->
                           <div class="me-n9 mb-n6">
                              <img src="<?=base_url('assets/frontend/images/elements/saas-feature.png') ?>" class="card-img border border-dark border-5" alt="feature-img">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Feature item -->
               <div class="col-lg-6">
                  <div class="card bg-dark rounded h-100 overflow-hidden p-5">
                     <!-- SVG decoration -->
                     <figure class="position-absolute bottom-0 end-0 mb-n4 me-n5">
                        <svg class="fill-white opacity-1" width="220px" height="209px" viewBox="0 0 220 209" style="enable-background:new 0 0 220 209;" xml:space="preserve">
                           <path d="M84.3,120.6c-1.1-0.3-1.9-0.8-2.4-1.6c-1-1.4-0.7-3.3,0.8-5.2l15.9-21.1c2.2-2.9,6.5-5.3,10.6-5.8 c2.3-0.3,4.2,0,5.4,1l14.9,11.6c1,0.8,1.4,1.9,1.2,3.2c-0.6,3.1-4.6,6.5-9.3,8l-30.9,9.5C88.2,121,85.9,121.1,84.3,120.6z  M112.7,87.7c-1-0.3-2.1-0.3-3.4-0.1c-3.9,0.5-8.1,2.8-10.1,5.6l-15.9,21.1c-1.3,1.7-1.6,3.3-0.8,4.5c1.2,1.7,4.3,2,8,0.9 l30.8-9.5c5.2-1.6,8.4-5,8.9-7.5c0.2-1.1-0.1-2-1-2.6l-14.9-11.6C113.8,88.1,113.3,87.9,112.7,87.7z"></path>
                           <path d="M82.9,123.4c-1-0.3-1.8-0.7-2.4-1.4c-1.1-1.4-1-3.3,0.4-5.4l15.2-23.5c3.5-5.4,12.9-8.9,17-6.3l17.8,11.1 c1.2,0.8,1.8,1.9,1.6,3.3c-0.3,3.3-4.4,7.2-9.4,9l-32.9,12.4C87.5,123.6,84.9,123.9,82.9,123.4z M111.6,86.7 c-4.3-1.1-11.9,2.1-14.9,6.7l-15.2,23.5c-1.2,1.9-1.4,3.5-0.5,4.7c1.4,1.8,5.1,1.9,9,0.4l32.9-12.4c5.5-2.1,8.7-5.9,9-8.5 c0.1-1.2-0.3-2.1-1.4-2.7l-17.8-11.1C112.5,87,112.1,86.9,111.6,86.7z"></path>
                           <path d="M81.7,126.3c-0.9-0.3-1.7-0.7-2.3-1.3c-1.3-1.3-1.3-3.3,0-5.6l14.1-25.9c3.3-6,13.2-10.4,18-8l20.8,10.3 c1.4,0.7,2.2,1.9,2.2,3.5c-0.1,3.5-4,7.8-9.3,10.2l-34.9,15.6C87,126.5,83.9,126.9,81.7,126.3z M110.3,85.8 c-4.8-1.3-13.4,2.9-16.2,8.1l-14.1,25.9c-1.1,2-1.1,3.7-0.1,4.9c1.4,1.5,5.1,2.1,10.1-0.1l34.9-15.6c5.7-2.6,8.9-6.8,8.9-9.6 c0-1.3-0.6-2.3-1.8-2.9l-20.8-10.3C111,86,110.6,85.9,110.3,85.8z"></path>
                           <path d="M80.7,129.6c-0.9-0.2-1.6-0.6-2.2-1.2c-1.4-1.3-1.6-3.4-0.5-5.8l12.7-28.4c2.9-6.6,13.4-11.9,18.9-9.8 l24.1,9.3c1.7,0.7,2.7,1.9,2.8,3.6c0.2,3.7-3.6,8.4-9.1,11.3l-36.8,19.1C86.9,129.6,83.2,130.2,80.7,129.6z M108.8,84.8 c-5.3-1.4-14.9,3.7-17.5,9.7l-12.7,28.4c-1,2.1-0.8,4,0.4,5.1c1.7,1.6,5.9,2,11.3-0.8L127,108c5.9-3.1,9-7.8,8.8-10.7 c-0.1-1.4-0.9-2.5-2.4-3L109.3,85C109.2,84.9,109,84.9,108.8,84.8z"></path>
                           <path d="M79.9,133c-0.8-0.2-1.5-0.5-2.1-1c-1.6-1.3-2-3.4-1.1-5.9l10.8-30.9c2.5-7.1,13.4-13.6,19.7-11.8l27.5,7.9 c2,0.6,3.2,1.9,3.4,3.7c0.5,3.8-3.2,9.1-8.8,12.4l-38.3,23C87,132.9,82.8,133.8,79.9,133z M107,84c-6-1.6-16.5,4.7-18.8,11.4 l-10.8,30.9c-0.8,2.3-0.5,4.1,0.9,5.3c2.4,2,7.6,1.3,12.5-1.7l38.3-23c6.1-3.7,8.9-8.7,8.5-11.8c-0.2-1.6-1.2-2.7-3-3.2L107.2,84 C107.1,84,107.1,84,107,84z"></path>
                           <path d="M79.5,136.8c-0.7-0.2-1.3-0.5-1.9-0.9c-1.8-1.3-2.4-3.4-1.7-6.1l8.5-33.4c2-7.7,13.2-15.4,20.4-14l31.2,6.2 c2.3,0.5,3.8,1.8,4.2,3.8c0.8,4.1-2.6,9.6-8.4,13.6L92,133.3C87.5,136.4,82.8,137.7,79.5,136.8z M136.2,89.4 c-0.1,0-0.3-0.1-0.5-0.1l-31.2-6.2c-6.8-1.3-17.8,6.2-19.6,13.5L76.4,130c-0.6,2.4-0.1,4.3,1.5,5.4c2.9,2,8.6,0.9,13.8-2.6 l39.7-27.2c6.2-4.3,8.8-9.7,8.1-12.9C139.1,91,138,89.9,136.2,89.4z"></path>
                           <path d="M79.3,140.7c-0.6-0.2-1.1-0.4-1.6-0.7c-2-1.2-2.9-3.4-2.4-6.2L80.9,98c1.3-8.2,12.8-17.2,20.9-16.3l35.1,4.1 c2.7,0.3,4.5,1.7,5.1,3.9c1.2,4.2-2,10.3-7.8,14.7l-40.7,31.8C88.5,140,83,141.7,79.3,140.7z M136.7,86.2l0,0.3l-35.1-4.1 c-7.6-0.9-18.9,7.9-20.2,15.7l-5.6,35.8c-0.4,2.6,0.3,4.5,2.1,5.6c3.4,2,9.6,0.5,15-3.8l40.7-31.7c5.6-4.3,8.7-10.1,7.6-14.1 c-0.5-2-2.1-3.2-4.6-3.4L136.7,86.2z"></path>
                           <path d="M79.5,144.9c-0.4-0.1-0.9-0.3-1.3-0.5c-2.3-1.1-3.4-3.3-3.3-6.3l2.2-38.2c0.5-8.8,12.2-19.1,21.2-18.8 l39.1,1.6c3.1,0.1,5.3,1.5,6.1,3.9c1.5,4.3-1.4,10.8-7,15.9l-41.3,36.6C90,143.8,83.8,146,79.5,144.9z M137.4,83.1l0,0.3 l-39.1-1.6c-8.5-0.3-20,9.8-20.5,18.2l-2.2,38.2c-0.2,2.7,0.8,4.7,2.9,5.7c4,1.9,10.7-0.2,16.3-5.1l41.3-36.6 c5.5-4.9,8.3-11.1,6.8-15.2c-0.8-2.2-2.7-3.4-5.5-3.5L137.4,83.1z"></path>
                           <path d="M80.2,149.2c-0.3-0.1-0.6-0.2-0.8-0.3c-2.6-1-4.1-3.2-4.2-6.3l-1.8-40.4c-0.2-4.1,2-9,6.1-13.3 c4.5-4.8,10.3-7.9,15.1-8.1l43.2-1.3c3.5-0.1,6.1,1.3,7.3,3.9c2,4.5-0.5,11.3-6.1,17l-41.4,41.8C92,147.8,85.1,150.5,80.2,149.2z  M140.6,80.4c-0.8-0.2-1.7-0.3-2.7-0.3l-43.2,1.3c-4.7,0.1-10.3,3.1-14.7,7.9c-3.9,4.2-6.1,9-5.9,12.9l1.8,40.4 c0.1,2.8,1.4,4.8,3.8,5.7c4.6,1.8,11.8-0.9,17.5-6.6l41.4-41.8c5.3-5.4,7.8-12.1,6-16.3C143.8,82.1,142.4,80.9,140.6,80.4z"></path>
                           <path d="M81.4,153.8c-0.1,0-0.1,0-0.2,0c-2.9-0.8-4.8-3.1-5.3-6.3L69.5,105c-0.6-4.2,1.1-9.3,4.8-14 c4.4-5.7,10.6-9.6,16.1-10.1l47.5-4.8c4-0.4,7,1,8.5,3.9c2.4,4.6,0.4,11.9-5,18.1l-41,47.3C94.7,151.8,86.9,155.3,81.4,153.8z  M137.9,76.4l0,0.3l-47.5,4.8c-5.4,0.5-11.4,4.3-15.7,9.9c-3.6,4.6-5.3,9.5-4.7,13.6l6.5,42.5c0.5,3,2.1,5,4.8,5.8 c5.3,1.5,12.9-1.9,18.5-8.3l41-47.2c5.2-6,7.2-13,4.9-17.3c-1.4-2.6-4.2-3.9-7.9-3.5L137.9,76.4z"></path>
                           <path d="M83.2,158.5c-3-0.8-5-2.9-5.9-6.1l-11.8-44.3c-1.1-4.2,0.1-9.6,3.5-14.7c4.2-6.6,10.7-11.3,16.9-12.4 l51.8-8.7c4.5-0.8,8.1,0.6,10,3.7c2.9,4.7,1.4,12.3-3.7,19.1L104,148.1c-5.6,7.4-13.9,11.7-20.1,10.5 C83.6,158.6,83.4,158.5,83.2,158.5z M142.6,73.1c-1.4-0.4-3.1-0.4-4.9-0.1l-51.8,8.7c-6,1-12.4,5.6-16.5,12.1 c-3.2,5-4.5,10.2-3.4,14.2l11.8,44.3c0.9,3.2,2.9,5.2,6.1,5.8c6,1.2,14-3,19.5-10.2l39.9-52.9c4.9-6.5,6.4-13.9,3.7-18.4 C146.1,74.7,144.5,73.6,142.6,73.1z"></path>
                           <path d="M85.6,163.2c-2.9-0.8-5.1-2.8-6.3-5.7l-18-45.7c-1.7-4.2-0.9-9.8,2-15.4c3.9-7.3,10.7-13.1,17.5-14.7 l56.1-13.2c5-1.2,9.3,0.1,11.7,3.5c3.4,4.8,2.5,12.7-2.2,20L108.2,151c-5.3,8.1-13.8,13.3-20.8,12.6 C86.7,163.5,86.2,163.4,85.6,163.2z M137,68.8l0.1,0.3L80.9,82.3c-6.6,1.6-13.3,7.2-17,14.4c-2.8,5.4-3.5,10.8-1.9,14.9l18,45.7 c1.3,3.3,3.9,5.3,7.5,5.6c6.8,0.7,15.1-4.4,20.2-12.3l38.1-58.9c4.6-7.1,5.5-14.7,2.3-19.3c-2.3-3.2-6.2-4.4-11-3.2L137,68.8z"></path>
                           <path d="M88.7,168.1c-2.9-0.8-5.1-2.6-6.6-5.3L57.3,116c-2.3-4.3-2.1-10.2,0.4-16.2C61,91.7,68,85,75.3,82.7 l60.3-18.2c5.6-1.7,10.5-0.5,13.5,3.1c4,4.8,3.7,13.1-0.5,20.9l-35.4,65c-4.8,8.8-13.5,14.9-21.2,14.9 C90.8,168.5,89.7,168.3,88.7,168.1z M135.8,65.1L75.5,83.3c-7.2,2.2-14,8.7-17.3,16.7c-2.4,5.8-2.6,11.5-0.4,15.6l24.9,46.8 c1.8,3.5,5.1,5.4,9.2,5.4c7.5,0,16-6,20.7-14.6l35.4-65c4.2-7.6,4.4-15.6,0.6-20.2C145.8,64.6,141.1,63.5,135.8,65.1z"></path>
                           <path d="M92.6,172.9c-2.8-0.7-5.1-2.4-6.8-4.8l-32.6-47.4c-3-4.3-3.5-10.5-1.4-17c2.8-8.9,9.7-16.5,17.6-19.4 l64.4-23.9c6.2-2.3,11.8-1.3,15.5,2.6c4.6,4.9,5.1,13.2,1.4,21.7L118.9,156c-4.3,9.6-12.8,16.5-21.3,17.3 C95.8,173.4,94.1,173.3,92.6,172.9z M143.5,60.2c-2.8-0.8-6.1-0.5-9.5,0.7L69.6,84.9c-7.7,2.9-14.5,10.3-17.2,19 c-2,6.3-1.5,12.3,1.3,16.4l32.6,47.4c2.5,3.6,6.5,5.4,11.2,5c8.2-0.7,16.6-7.6,20.7-16.9l31.8-71.3c3.7-8.2,3.2-16.3-1.2-21 C147.4,61.9,145.6,60.8,143.5,60.2z"></path>
                           <path d="M97.3,177.7c-2.6-0.7-5-2.1-6.8-4.3l-41.2-47.4c-3.8-4.3-5-10.8-3.4-17.8C48,98.6,54.8,90,63.1,86.4 l68.3-30.1c6.7-3,13.2-2.3,17.7,1.9c5.3,4.9,6.6,13.5,3.5,22.4l-27.1,77.6c-3.5,10.1-11.9,18.1-20.9,19.8 C102,178.3,99.5,178.3,97.3,177.7z M131.5,56.5l0.1,0.3L63.3,86.9c-8.1,3.6-14.7,12-16.8,21.3c-1.5,6.8-0.3,13.1,3.3,17.3 L90.9,173c3.3,3.8,8.1,5.3,13.5,4.3c8.8-1.7,17-9.5,20.4-19.4L152,80.3c3-8.7,1.8-17.1-3.4-21.8c-4.3-4-10.5-4.6-17-1.7 L131.5,56.5z"></path>
                           <path d="M102.9,182.3c-2.5-0.7-4.7-1.9-6.7-3.7l-50.6-46.8c-4.7-4.3-6.7-11.2-5.7-18.8c1.4-10.1,7.8-19.5,16.5-24 L128.2,52c7.3-3.7,14.6-3.4,20,0.9c6.1,4.8,8.3,13.7,6,23.1L133,159.7c-2.7,10.7-10.6,19.4-20.1,22.2 C109.3,183,105.9,183.1,102.9,182.3z M128.4,52.2l0.1,0.3L56.6,89.6c-8.5,4.4-14.8,13.6-16.2,23.5c-1,7.4,1,14.1,5.5,18.2 l50.6,46.8c4.2,3.9,10,5.1,16.1,3.3c9.3-2.7,17-11.3,19.6-21.8l21.3-83.8c2.3-9.2,0.1-17.7-5.7-22.4c-5.2-4.2-12.3-4.5-19.3-0.8 L128.4,52.2z"></path>
                           <path d="M109.3,186.7c-2.2-0.6-4.3-1.6-6.2-3l-61-45.4c-5.7-4.3-8.8-11.5-8.3-19.8c0.6-10.7,6.5-20.7,15.5-26.1 l75.1-44.6c7.7-4.6,16.1-4.7,22.5-0.3c7,4.7,10.3,13.5,8.7,23.6l-14.1,90c-1.7,11-9.1,20.7-18.7,24.6 C118.1,187.4,113.4,187.8,109.3,186.7z M124.4,48l0.2,0.3L49.5,92.9c-8.8,5.2-14.6,15-15.2,25.6c-0.4,8.1,2.5,15.1,8.1,19.3 l61,45.4c5.3,3.9,12.2,4.6,19,1.9c9.4-3.9,16.7-13.3,18.4-24.2l14.1-90c1.5-9.8-1.6-18.3-8.4-22.9c-6.2-4.2-14.4-4.1-21.9,0.4 L124.4,48z"></path>
                           <path d="M116.6,190.8c-1.9-0.5-3.7-1.3-5.5-2.3l-72.2-43.1c-7-4.2-11.1-11.8-11.4-20.9c-0.3-11.1,5.1-21.8,14.2-28 l77.8-52.8c8.1-5.5,17.5-6.2,25.1-1.9c8,4.5,12.4,13.4,11.8,23.9l-5.5,95.9c-0.7,11.4-7.1,21.7-16.9,26.9 C128.2,191.5,122.2,192.2,116.6,190.8z M119.6,43.9l0.2,0.3L42,97c-8.9,6-14.2,16.6-13.9,27.5c0.3,8.9,4.3,16.3,11.1,20.4 l72.2,43.1c6.6,3.9,14.7,4,22.2,0c9.6-5.1,15.9-15.2,16.6-26.4l5.5-95.9c0.6-10.2-3.7-18.9-11.5-23.3c-7.4-4.2-16.6-3.5-24.5,1.9 L119.6,43.9z"></path>
                           <path d="M124.9,194.4c-1.5-0.4-2.9-0.9-4.3-1.6L36.2,153c-8.4-4-13.9-12-15-22c-1.3-11.4,3.6-22.8,12.6-29.8 l79.8-61.7c8.4-6.5,18.8-7.9,27.7-3.8c9.1,4.2,14.8,13.2,15.3,24.1l4.6,101.5c0.5,11.6-5.1,22.7-14.6,29 C139.9,195,132.1,196.4,124.9,194.4z M137.2,35c-7.7-2.1-16.1-0.2-23.1,5.2l-79.8,61.7c-8.8,6.8-13.6,18-12.4,29.2 c1.1,9.8,6.4,17.6,14.6,21.5l84.4,39.8c8.2,3.8,17.4,3,25.5-2.4c9.3-6.2,14.8-17.1,14.3-28.5L156.1,60 c-0.5-10.6-6.1-19.5-14.9-23.6C139.9,35.8,138.5,35.3,137.2,35z"></path>
                           <path d="M134,197.6c-0.8-0.2-1.6-0.5-2.5-0.8l-97.4-35.4c-9.9-3.6-17.1-12.2-19.1-23c-2.2-11.7,1.8-23.4,10.8-31.3 l81.1-71.2c8.6-7.6,19.9-9.8,30.3-6.1c10.4,3.8,17.6,12.8,19.3,24.1l16.3,106.6c1.8,11.8-2.6,23.4-11.9,30.9 C153.2,197.8,143.2,200,134,197.6z M134.5,29.6c-9.5-2.5-19.5-0.1-27.2,6.7l-81.1,71.2c-8.8,7.7-12.8,19.2-10.6,30.7 c2,10.6,9,19,18.7,22.5l97.4,35.4c9.7,3.5,20.5,1.6,28.8-5.2c9.1-7.4,13.4-18.7,11.6-30.3L155.9,54c-1.7-11.1-8.8-19.9-18.9-23.6 C136.2,30.1,135.3,29.8,134.5,29.6z"></path>
                           <path d="M144,200.1L32.8,170.3C21,167.1,12,158.2,8.9,146.4c-3.2-11.8,0.1-24,8.7-32.6L99,32.4 c8.7-8.6,20.9-11.9,32.7-8.7c11.8,3.2,20.8,12.1,23.9,23.9l29.8,111.1c3.2,11.8-0.1,24-8.7,32.6C168,200,155.8,203.3,144,200.1z  M99.2,32.6l0.2,0.2L18,114.2c-8.5,8.5-11.7,20.5-8.6,32c3.1,11.6,11.9,20.3,23.5,23.5l111.2,29.8c11.6,3.1,23.6-0.1,32.1-8.6 c8.5-8.5,11.7-20.5,8.6-32L155,47.7c-3.1-11.6-11.9-20.4-23.5-23.5c-11.6-3.1-23.6,0.1-32.1,8.6L99.2,32.6z"></path>
                        </svg>
                     </figure>
                     <!-- Card body -->
                     <div class="card-body bg-transparent p-0">
                        <h5 class="text-white mb-0">Want to see how to apply this in projects?</h5>
                     </div>
                     <!-- Card footer -->
                     <div class="card-footer bg-transparent p-0 mt-6">
                        <a href="portfolio-list.html" class="btn btn-white mb-0">See our work</a>
                     </div>
                  </div>
               </div>
               <!-- Feature item -->
               <div class="col-lg-6">
                  <div class="card bg-light rounded h-100 overflow-hidden p-4">
                     <!-- Card body -->
                     <div class="card-body bg-transparent p-0">
                        <!-- Icon SVG -->
                        <figure class="text-primary">
                           <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4.95 9.83377C3.51099 9.1789 2.79149 8.85147 2.55187 8.40828C2.3112 7.96313 2.3112 7.42663 2.55187 6.98148C2.79149 6.53829 3.51099 6.21086 4.95 5.55599L10.8816 2.8566C11.37 2.63435 11.6142 2.52322 11.872 2.50115C11.9572 2.49386 12.0428 2.49386 12.128 2.50115C12.3858 2.52322 12.63 2.63435 13.1184 2.8566L19.05 5.55599C20.489 6.21086 21.2085 6.53829 21.4481 6.98148C21.6888 7.42663 21.6888 7.96313 21.4481 8.40828C21.2085 8.85147 20.489 9.1789 19.05 9.83377L13.1184 12.5332C12.63 12.7554 12.3858 12.8665 12.128 12.8886C12.0428 12.8959 11.9572 12.8959 11.872 12.8886C11.6142 12.8665 11.37 12.7554 10.8816 12.5332L4.95 9.83377Z" fill="currentColor" fill-opacity="0.25"/>
                              <path d="M4.95 9.83377C3.51099 10.4886 2.79149 10.8161 2.55187 11.2593C2.3112 11.7044 2.3112 12.2409 2.55187 12.6861C2.79149 13.1292 3.51099 13.4567 4.95 14.1115L10.8816 16.8109C11.37 17.0332 11.6142 17.1443 11.872 17.1664C11.9572 17.1737 12.0428 17.1737 12.128 17.1664C12.3858 17.1443 12.63 17.0332 13.1184 16.8109L19.05 14.1115C20.489 13.4567 21.2085 13.1292 21.4481 12.6861C21.6888 12.2409 21.6888 11.7044 21.4481 11.2593C21.2085 10.8161 20.489 10.4886 19.05 9.83377L13.1184 12.5332C12.63 12.7554 12.3858 12.8665 12.128 12.8886C12.0428 12.8959 11.9572 12.8959 11.872 12.8886C11.6142 12.8665 11.37 12.7554 10.8816 12.5332L4.95 9.83377Z" fill="currentColor" fill-opacity="0.25"/>
                              <path d="M4.95 14.1115C3.51099 14.7664 2.79149 15.0938 2.55187 15.537C2.3112 15.9822 2.3112 16.5187 2.55187 16.9638C2.79149 17.407 3.51099 17.7345 4.95 18.3893L10.8816 21.0887C11.37 21.311 11.6142 21.4221 11.872 21.4442C11.9572 21.4515 12.0428 21.4515 12.128 21.4442C12.3858 21.4221 12.63 21.311 13.1184 21.0887L19.05 18.3893C20.489 17.7345 21.2085 17.407 21.4481 16.9638C21.6888 16.5187 21.6888 15.9822 21.4481 15.537C21.2085 15.0938 20.489 14.7664 19.05 14.1115L13.1184 16.8109C12.63 17.0332 12.3858 17.1443 12.128 17.1664C12.0428 17.1737 11.9572 17.1737 11.872 17.1664C11.6142 17.1443 11.37 17.0332 10.8816 16.8109L4.95 14.1115Z" fill="currentColor" fill-opacity="0.25"/>
                              <path d="M6 10.2734L10.8827 12.4929C11.3707 12.7146 11.6146 12.8255 11.8722 12.8476C11.9572 12.8548 12.0428 12.8548 12.1278 12.8476C12.3854 12.8255 12.6293 12.7146 13.1173 12.4929L18 10.2734M6 14.2734L10.8827 16.4929C11.3707 16.7146 11.6146 16.8255 11.8722 16.8476C11.9572 16.8548 12.0428 16.8548 12.1278 16.8476C12.3854 16.8255 12.6293 16.7146 13.1173 16.4929L18 14.2734" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </figure>
                        <!-- Title -->
                        <h5 class="mb-3">Data Protection</h5>
                        <p class="mb-0">Ample order up in of in ready. Timed blind had now those ought set often which. Or snug dull he show more true wish.</p>
                     </div>
                     <!-- Card footer -->
                     <div class="card-footer bg-transparent p-0 mt-6">
                        <a href="#" class="btn btn-primary">Learn more</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Row END -->
         </div>
      </div>
   </div>
</section>

<section class="bg-opacity-10" style="background: #e6f8ed;">
    <div class="container">
        <div class="row g-sm-6 align-items-center">
            <!-- Content -->
            <div class="col-lg-6 mb-5 mb-sm-0">
                <!-- Title -->
                <h4 class="mb-0">Technology-Driven Franchise Marketing System Blueprint for Sustainable Scale</h4>

                <!-- List -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <ul class="list-group list-group-borderless">
                            <li class="list-group-item heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Centralized lead routing CRM</li>
                            <li class="list-group-item heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Multi-location SEO playbooks standardized</li>
                            <li class="list-group-item heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>GMB optimization and google reviews</li>
                            <li class="list-group-item heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Hyperlocal ads with geofencing</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="list-group list-group-borderless">
                            <li class="list-group-item heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Unified content asset library</li>
                            <li class="list-group-item heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Marketing automation and drip</li>
                            <li class="list-group-item heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Performance dashboards and attribution</li>
                            <li class="list-group-item heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Franchisee portals and approvals</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="col-lg-6 position-relative">
                <!-- Image -->
                <img src="https://mizzle.webestica.com/assets/images/elements/comming-soon.png" class="position-relative z-index-2" alt="CTA-image">

                <!-- SVG decoration -->
                <figure class="position-absolute top-0 start-0 mt-n5">
                    <svg width="96" height="99" viewBox="0 0 96 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-mode" d="M66.5204 64.3653C68.4878 62.2239 69.8711 59.7411 70.3936 56.886C72.4225 45.5894 64.3072 35.5653 52.1035 36.6825C44.603 37.3653 38.9777 44.5653 39.8999 52.0446C40.6684 58.2205 45.9556 62.4101 51.8576 61.448C54.6549 60.9825 56.776 59.4929 58.0363 56.886C59.02 54.8377 58.7126 52.5101 57.2985 51.0205C55.7923 49.4377 51.8576 48.6308 49.798 49.4377C49.4599 49.5618 49.2447 50.2136 49.4599 50.5239C49.7673 50.9273 50.1054 51.2687 50.4743 51.6101C51.1506 52.2308 51.8576 52.8205 52.5031 53.4722C52.9028 53.8756 52.872 54.4032 52.4724 54.8067C51.5195 55.8618 50.3206 56.048 49.0603 55.6756C46.9393 55.0239 45.8019 53.4411 45.4023 51.2998C44.3571 45.7136 49.4292 42.0205 53.1487 41.7722C58.6511 41.3687 63.5694 44.7205 65.1679 49.9963C66.7356 55.086 65.2294 59.7411 60.9873 62.9377C59.7884 63.8377 58.4666 64.5515 57.0219 65.017C53.0872 66.3204 49.1525 66.3515 45.2793 65.017C37.9325 62.5032 34.1823 56.6377 35.1352 48.5998C35.7193 43.6963 37.7788 39.4446 41.0065 35.7825C42.3898 34.1998 43.8653 32.7101 46.0478 32.3067C46.14 32.3067 46.2015 32.2446 46.2937 32.2136C46.5089 32.0894 46.5396 31.5308 46.3245 31.3136C46.0478 30.9722 45.6789 30.7549 45.2793 30.7239C44.4493 30.5998 43.6501 30.7239 42.8201 31.0032C41.2832 31.5618 40.0536 32.4929 38.8855 33.6101C34.336 37.9239 31.6616 43.2308 31.0468 49.4998C30.1861 58.4377 34.2745 65.048 41.8365 68.7101C44.8182 70.1377 47.9844 70.7273 51.2736 70.7584C52.3494 70.6963 53.4253 70.6653 54.5012 70.5101C59.2351 69.8584 63.2928 67.9032 66.5204 64.3653Z"></path>
                        <path class="fill-primary" d="M0.769309 44.5963C2.36777 45.8998 3.99697 47.2032 5.65692 48.4756C7.99313 50.2446 10.6367 51.0205 13.8337 51.1136C13.7722 51.1136 14.0488 51.1446 14.264 51.0825C14.4792 51.0205 14.7866 50.9274 14.8481 50.7412C14.9096 50.586 14.8173 50.2446 14.6944 50.0894C14.0796 49.5308 13.4955 48.9101 12.7885 48.4756C10.1449 46.8929 7.53204 45.3101 4.70399 44.0998C3.6281 43.6343 2.52147 43.3239 1.41484 42.9515C1.10745 42.8584 0.769309 42.8584 0.431173 42.8584C0.123776 42.8584 -0.152881 43.3549 0.00081747 43.6032C0.246735 43.9446 0.461913 44.3481 0.769309 44.5963Z"></path>
                        <path class="fill-primary" d="M55.6683 15.2692C55.822 15.2692 56.0064 15.3002 56.1294 15.2071C56.6212 14.8657 56.8364 14.3071 57.0823 13.7795C58.4349 10.614 60.1563 7.66572 62.0007 4.77951C62.6462 3.78641 63.2303 2.79331 63.8451 1.8002C64.0602 1.45882 64.2447 1.05537 64.3676 0.68296C64.3984 0.558822 64.3369 0.372615 64.2447 0.217443C64.091 -0.0308331 63.8143 0.00020143 63.5991 0.0933049C63.384 0.186408 63.1688 0.341581 62.9536 0.465719C58.0967 3.91055 56.1601 8.93813 55.4531 14.6795C55.4839 14.7726 55.4839 14.9278 55.5453 15.114C55.5453 15.1761 55.6376 15.2692 55.6683 15.2692Z"></path>
                        <path class="fill-primary" d="M24.5905 26.6586C23.3916 23.0896 22.1928 19.5207 20.9325 15.9827C20.3791 14.4 19.6721 12.8793 18.9959 11.3586C18.8729 11.0793 18.627 10.831 18.4425 10.6138C18.2274 10.7069 18.0122 10.7379 17.9507 10.831C17.7048 11.2034 17.797 11.6379 17.8278 12.0414C18.2888 17.9689 20.6251 23.1827 23.8835 28.0551C23.9757 28.1793 24.0986 28.3345 24.2216 28.3965C24.3446 28.4586 24.5597 28.5517 24.6827 28.4896C24.8057 28.4586 24.9286 28.2414 24.8979 28.1172C24.8364 27.6207 24.7442 27.1241 24.5905 26.6586Z"></path>
                        <path class="fill-primary" d="M56.5302 83.9173C56.4072 83.8862 56.1613 83.9483 56.0998 84.0414C55.7924 84.7241 55.4851 85.4069 55.2699 86.1207C54.6243 88.1379 53.8251 90.0621 52.3189 91.5828C51.9192 91.9862 51.6119 92.5138 51.2737 93.0104C50.3208 94.4069 49.6753 95.9586 49.0912 97.5104C48.9682 97.8207 48.9682 98.1621 48.9375 98.5035C48.9375 98.6586 48.999 98.9379 49.0912 98.9379C49.3064 99 49.6445 99.0311 49.7675 98.9069C51.1815 97.2621 52.5033 95.5241 54.0095 93.9724C55.9461 91.8931 56.8376 89.4724 56.8683 86.6793C56.8683 86.3379 56.9298 85.9966 56.9606 85.469C56.9298 85.1897 56.9298 84.6931 56.8683 84.1966C56.8376 84.0724 56.6532 83.9173 56.5302 83.9173Z"></path>
                        <path class="fill-primary" d="M80.4469 37.086C81.031 37.1481 81.615 37.1791 82.1683 37.055C83.8897 36.7136 85.6112 36.6205 87.3633 36.7136C89.8533 36.9308 92.3124 36.4033 94.7716 36.124C95.079 36.0929 95.4171 35.9377 95.6938 35.7826C95.8167 35.7205 96.0319 35.4722 96.0012 35.4412C95.8782 35.2239 95.7245 35.0067 95.5401 34.9136C95.3249 34.7895 95.079 34.7584 94.8331 34.7274C92.5276 34.4791 90.2221 34.2619 87.9166 34.0446C85.2423 33.7653 82.8753 34.7895 80.5391 35.8446C80.3854 35.9067 80.2625 36.0308 80.1702 36.155C80.078 36.2791 79.9551 36.4964 80.0165 36.5895C80.078 36.7757 80.2625 37.055 80.4469 37.086Z"></path>
                        <path class="fill-primary" d="M78.4176 68.4311C78.2332 68.6173 78.1717 68.8656 78.3254 69.1139C78.4484 69.3311 78.5713 69.5484 78.7865 69.7035C80.7231 71.1001 82.0141 72.9932 83.2437 75.0104C84.3196 76.8104 85.7951 78.269 87.3936 79.6346C87.6088 79.8208 87.9469 80.069 88.2543 79.7587C88.3773 79.6035 88.4387 79.2311 88.3773 79.0759C87.0247 76.5001 85.7644 73.8621 84.0737 71.4725C82.8134 69.7346 80.8768 68.9277 78.9709 68.2139C78.6943 68.2759 78.5406 68.338 78.4176 68.4311Z"></path>
                        <path class="fill-primary" d="M18.9031 80.3173C16.1058 81.0621 13.8311 82.6759 11.8023 84.7242C11.7408 84.7863 11.6793 84.8483 11.6793 84.9104C11.6486 84.9725 11.6486 85.0966 11.6793 85.1587C11.7715 85.2518 11.9252 85.4069 12.0174 85.4069C12.2634 85.3759 12.5093 85.2828 12.7245 85.1587C16.0443 83.1414 19.6409 82.0242 23.4526 81.5276C23.9444 81.4656 24.4363 81.3725 24.8974 80.7207C22.8071 79.7897 20.8397 79.7897 18.9031 80.3173Z"></path>
                    </svg>
                </figure>

                <!-- SVG decoration -->
                <figure class="position-absolute end-0 bottom-0 mb-5">
                    <svg class="fill-dark" width="78" height="86" viewBox="0 0 78 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M58.1663 52.6936C57.2433 52.922 56.3362 53.183 55.4053 53.3705C49.0479 54.6836 43.0644 57.0976 37.1287 59.6911C34.0096 61.053 30.986 62.5537 28.1057 64.405C24.7877 66.5417 21.788 69.0862 19.0032 71.8836C15.4465 75.4475 11.9694 79.1012 8.50824 82.763C7.64095 83.6765 6.94872 84.7612 5.99391 86.0008C5.5722 84.8509 5.66768 84.125 6.25648 83.4236C7.16355 82.339 7.99901 81.1727 8.96973 80.1533C12.7253 76.2386 16.4809 72.324 20.3161 68.4909C22.8463 65.9627 25.8142 64.0053 28.9014 62.2927C35.7362 58.5085 42.9132 55.5073 50.3607 53.2319C52.1192 52.6936 53.9572 52.3919 55.7793 52.0983C56.559 51.9759 57.3786 52.1472 58.1743 52.188C58.1743 52.3592 58.1742 52.5224 58.1663 52.6936Z"></path>
                        <path d="M0.00390625 83.4154C1.49182 81.2949 3.07521 79.2316 4.43582 77.0215C5.40654 75.4393 6.11469 73.6858 6.87854 71.9813C8.15162 69.1351 9.40083 66.2806 10.5943 63.4017C11.0717 62.26 11.3741 61.0529 11.7799 59.8867C12.7665 57.0649 13.785 54.2512 14.7716 51.4294C15.7901 48.5016 16.2118 45.4596 16.4107 42.3686C16.4425 41.9119 16.3869 41.4063 16.5778 41.0311C16.7449 40.6967 17.1984 40.5092 17.5247 40.2563C17.7475 40.5907 18.0498 40.9088 18.1692 41.2839C18.2646 41.5694 18.1373 41.9282 18.1214 42.2545C17.8668 46.8949 16.5221 51.2745 14.9387 55.5806C13.2917 60.0498 11.6128 64.5109 9.75888 68.8986C7.77765 73.5961 5.50202 78.1551 2.05675 81.9637C1.48386 82.5998 0.823452 83.1544 0.210782 83.7498C0.139171 83.6274 0.0675602 83.5214 0.00390625 83.4154Z"></path>
                        <path d="M34.957 48.3875C34.1852 47.2294 34.3602 46.5117 34.7819 45.8103C35.4821 44.6359 36.1982 43.4697 36.9064 42.2953C38.9751 38.8292 41.0677 35.3794 43.0808 31.8889C44.0993 30.1191 45.0939 28.3167 45.8657 26.4328C46.3988 25.1361 46.542 23.6681 46.8523 22.2735C46.8762 22.1512 46.8046 22.0125 46.8125 21.882C46.8682 21.042 47.4809 20.3325 47.9185 20.6506C48.3084 20.936 48.7221 21.6292 48.6505 22.0451C48.4437 23.1869 48.1174 24.3613 47.6082 25.3889C45.6668 29.3036 43.6935 33.2019 41.6088 37.035C40.1209 39.7753 38.4182 42.3932 36.8348 45.0845C36.4767 45.688 36.2539 46.3731 35.9197 47.001C35.681 47.4088 35.3707 47.784 34.957 48.3875Z"></path>
                        <path d="M68.3681 68.0586C67.3019 68.1402 66.8802 67.7324 66.8563 66.8353C66.7847 63.9972 66.2675 61.2325 65.3843 58.5411C65.1536 57.8479 65.1377 57.1547 66.0129 57.0079C66.7052 56.8856 66.9996 57.4157 67.111 58.0763C67.5645 60.8573 68.0578 63.6302 68.4875 66.4194C68.567 66.9576 68.4079 67.5367 68.3681 68.0586Z"></path>
                        <path d="M61.1509 56.4287C60.9997 56.9588 60.944 57.5215 60.6894 57.9619C59.1696 60.6206 57.5862 63.2386 56.0506 65.8891C55.5732 66.7047 55.1594 67.561 54.6343 68.5478C53.8307 67.7404 53.4408 67.1043 54.1728 66.248C56.4484 63.5729 57.7693 60.3026 59.4402 57.2524C59.7823 56.6326 60.0926 56.1514 61.1509 56.4287Z"></path>
                        <path d="M12.2033 36.2847C12.4818 38.0544 12.458 38.0707 11.3042 38.5519C9.01269 39.5143 6.73706 40.4929 4.45348 41.4716C3.44297 41.9038 3.31566 41.8223 2.92578 40.4848C5.97322 39.1065 9.00474 37.7364 12.2033 36.2847Z"></path>
                        <path d="M31.7987 34.001C31.5998 34.5882 31.377 35.2407 31.194 35.7708C28.8627 35.0776 26.8019 34.4659 24.7411 33.8624C24.3751 33.7564 23.9215 33.7645 23.6669 33.5362C23.3805 33.2752 23.2611 32.8103 23.0781 32.4352C23.4441 32.2884 23.8579 31.9459 24.1841 32.0111C26.5393 32.5086 28.8866 33.0876 31.2338 33.6504C31.3452 33.6748 31.4486 33.7727 31.7987 34.001Z"></path>
                        <path d="M69.3222 55.915C69.8473 56.91 70.3009 57.8479 70.834 58.7368C71.5023 59.8378 72.1707 60.947 72.9743 61.9501C73.4438 62.5373 73.4517 63.0593 73.0459 63.4997C72.5765 64.0135 71.8843 63.8667 71.5501 63.3284C70.3327 61.3303 69.1392 59.3077 68.073 57.2281C67.6194 56.3391 68.2639 55.9314 69.3222 55.915Z"></path>
                        <path d="M52.9551 28.8386C51.873 28.3493 51.7457 27.6316 51.7059 26.8079C51.5786 24.5162 51.4354 22.2245 50.4487 20.0959C50.2259 19.6229 50.2419 19.0928 50.8307 19.0276C51.133 18.9949 51.6423 19.3375 51.7855 19.6392C52.1435 20.3977 52.4538 21.2214 52.5971 22.0533C52.9153 23.9209 53.1461 25.8048 53.3609 27.6887C53.3848 28.0068 53.1222 28.3656 52.9551 28.8386Z"></path>
                        <path d="M69.9609 53.24C71.5045 53.4928 72.8731 53.6967 74.2417 53.9332C75.1726 54.0963 76.0876 54.3328 77.0265 54.447C77.8699 54.553 78.0848 55.0179 77.9813 55.7845C77.8699 56.5919 77.2493 56.7958 76.7162 56.5348C74.8384 55.6377 72.8492 55.3523 70.8282 55.1321C70.0405 55.0505 70.0485 54.9853 69.9609 53.24Z"></path>
                        <path d="M20.6819 40.1992C21.5094 41.2431 22.321 42.1565 22.9973 43.1515C23.7293 44.2199 24.4056 45.3372 24.9706 46.4953C25.1377 46.8378 24.8671 47.4087 24.8035 47.8817C24.3738 47.7268 23.8168 47.6941 23.5543 47.3924C23.1007 46.8623 22.87 46.1446 22.4801 45.5492C21.7401 44.4238 21.0161 43.2657 20.1567 42.2299C19.4884 41.4225 19.4884 40.9087 20.6819 40.1992Z"></path>
                        <path d="M20.5234 20.0959C21.5101 20.2509 21.4146 21.0175 21.3271 21.4905C20.8019 24.3613 20.1813 27.2157 19.5845 30.1109C18.6695 30.3964 17.9295 30.1436 18.2399 29.1812C19.0833 26.547 19.3697 23.823 19.8551 21.1235C19.9187 20.7402 20.3086 20.414 20.5234 20.0959Z"></path>
                        <path d="M56.9658 14.5664C58.4538 14.86 59.9576 15.0884 61.4216 15.4554C62.3685 15.6919 62.6947 16.2954 62.3923 16.956C62.0661 17.6818 61.4057 17.5921 60.9204 17.3393C59.2813 16.4911 57.5626 16.2546 55.7644 16.3606C55.5257 16.3769 55.2154 16.3117 55.0483 16.1567C54.8414 15.9692 54.6107 15.6266 54.6345 15.382C54.6663 15.1454 54.9926 14.8111 55.2233 14.7785C55.7803 14.6887 56.3611 14.7458 56.9261 14.7458C56.942 14.6887 56.9499 14.6235 56.9658 14.5664Z"></path>
                        <path d="M28.1863 44.5381C27.7168 44.1874 27.1678 43.902 26.7859 43.4697C25.5526 42.0588 24.3909 40.5827 23.1815 39.1554C22.7836 38.6824 22.6484 38.1686 23.1417 37.8098C23.3804 37.6385 24.0488 37.7282 24.2636 37.9647C25.7038 39.449 27.1121 40.966 28.425 42.5645C28.7273 42.9315 28.6239 43.641 28.7114 44.1874C28.5284 44.3016 28.3534 44.4158 28.1863 44.5381Z"></path>
                        <path d="M60.49 47.9877C60.0603 47.8491 59.5113 47.8409 59.3283 47.5718C57.9915 45.59 56.1297 44.2525 53.9336 42.9476C54.4508 42.3604 54.8407 41.92 55.2146 41.4878C59.9569 45.223 60.6013 45.9978 60.49 47.9877Z"></path>
                        <path d="M13.0865 32.6066C12.6488 32.3049 12.1953 32.0357 11.7816 31.7014C10.4528 30.633 9.13196 29.5483 7.83501 28.4392C7.47695 28.1292 6.91998 27.6725 6.96772 27.3626C7.03138 26.9141 7.56448 26.5308 7.83501 26.1882C9.70484 27.7459 11.4474 29.1405 13.0944 30.633C13.4525 30.9592 13.4684 31.6851 13.6355 32.2233C13.4604 32.3538 13.2774 32.4843 13.0865 32.6066Z"></path>
                        <path d="M49.1122 8.72714C48.8576 8.28674 48.3563 7.83003 48.3882 7.4141C48.5632 5.20396 48.8497 2.99381 49.1441 0.791818C49.1759 0.547153 49.526 0.343264 49.8363 0.000732422C50.2341 0.685796 50.5365 1.21591 50.8468 1.75417C50.7513 1.75417 50.6479 1.76233 50.5524 1.76233C50.2898 4.02956 50.0193 6.2968 49.7567 8.55588C49.5419 8.61296 49.3271 8.67005 49.1122 8.72714Z"></path>
                        <path d="M51.2461 58.9816C53.3546 57.4076 55.4791 55.8254 57.5797 54.2595C58.4867 54.6591 58.3992 55.2463 57.9457 55.8335C57.6751 56.1761 57.2853 56.437 56.9272 56.7062C55.5507 57.7419 54.1662 58.7695 52.7738 59.7971C51.9781 60.3843 51.7792 60.2783 51.2461 58.9816Z"></path>
                        <path d="M68.8047 50.9075C69.2105 50.2958 69.5924 49.5618 70.1176 48.9665C71.2235 47.7105 72.433 46.5525 73.5549 45.3047C73.9527 44.8643 74.3744 44.5707 74.8677 44.9132C75.5361 45.3781 75.1542 46.0142 74.812 46.4464C74.3744 46.9929 73.7856 47.4169 73.2764 47.9063C72.2579 48.8931 71.2474 49.8962 70.2369 50.8912C69.8709 51.2664 69.5049 51.6986 68.8047 50.9075Z"></path>
                        <path d="M42.977 16.271C40.1763 16.32 38.1075 14.5013 35.625 13.8651C36.4127 12.1851 36.4048 12.2504 37.5664 12.7968C39.0146 13.4737 40.5025 14.0772 42.0143 14.6155C42.7065 14.852 43.1919 15.0885 42.977 16.271Z"></path>
                        <path d="M38.3477 8.30308C39.4298 6.71275 39.6923 6.79431 40.6631 8.25414C41.2917 9.19203 42.2783 9.88525 43.1138 10.6845C43.3843 10.9455 43.7662 11.1412 43.9333 11.4593C44.0447 11.6795 43.9651 12.1362 43.798 12.3401C43.6469 12.5195 43.1774 12.6337 42.9864 12.5276C42.326 12.1362 41.6815 11.6958 41.1246 11.1738C40.2016 10.2849 39.3422 9.32252 38.3477 8.30308Z"></path>
                        <path d="M15.1309 39.0085C14.192 42.0097 11.9562 44.0486 10.4524 46.691C9.64076 46.0222 9.93516 45.3535 10.2296 44.8478C11.3276 42.9639 12.5052 41.1289 13.6351 39.2613C13.9613 38.7312 14.3273 38.5273 15.1309 39.0085Z"></path>
                        <path d="M52.6367 18.106C52.9072 17.7879 53.0584 17.4699 53.2971 17.3802C53.5438 17.2823 53.9416 17.3149 54.1405 17.4617C54.427 17.6901 54.5623 18.0978 54.8089 18.3914C55.5568 19.2722 56.3287 20.1204 57.0766 20.9931C57.5619 21.5558 57.4744 22.5345 56.8697 22.8362C56.265 23.138 55.8592 22.9178 55.4852 22.2898C54.8964 21.2948 54.1485 20.3977 53.4881 19.4517C53.2016 19.0357 52.955 18.6035 52.6367 18.106Z"></path>
                        <path d="M26.6668 24.6467C27.2556 25.8374 27.3034 26.4083 26.4997 27.0689C25.2266 28.121 24.1047 29.3688 22.959 30.5758C22.3861 31.1793 21.9325 31.1467 21.3438 30.4698C22.959 28.4554 24.7333 26.6367 26.6668 24.6467Z"></path>
                        <path d="M38.871 21.7271C38.4732 21.197 38.1708 20.7893 37.7969 20.2836C38.1231 20.0063 38.3698 19.6312 38.6721 19.5659C40.2714 19.2397 41.8787 18.9869 43.4859 18.7177C43.6133 18.6933 43.7406 18.7096 43.8679 18.7014C44.4408 18.6851 44.9341 18.8646 44.9341 19.5251C44.9341 20.145 44.5283 20.4549 43.9156 20.3896C42.1492 20.2102 40.534 20.6669 38.871 21.7271Z"></path>
                        <path d="M63.9457 39.4002C63.9457 42.0263 63.9457 44.6605 63.9457 47.2213C63.0943 47.6291 62.6407 47.4578 62.6407 46.626C62.6407 44.6116 62.6328 42.5971 62.7442 40.5909C62.7681 40.1097 63.2216 39.6612 63.4762 39.1963C63.6274 39.2615 63.7865 39.3268 63.9457 39.4002Z"></path>
                        <path d="M69.0926 41.0229C68.5674 43.5267 68.0502 46.0222 67.533 48.5097C67.3898 48.5423 67.2466 48.5668 67.1034 48.5994C66.9204 48.1916 66.5305 47.7675 66.5782 47.3924C66.809 45.4595 67.1591 43.5348 67.4614 41.602C67.6047 40.6559 68.1537 40.6641 69.0926 41.0229Z"></path>
                        <path d="M57.0229 3.83393C55.901 5.49765 54.7791 7.15323 53.5856 8.93113C53.0286 8.79249 52.3205 8.7354 52.7899 7.75673C53.3946 6.49263 54.0312 5.23668 54.7314 4.02966C55.2883 3.05915 55.6623 3.04284 57.0229 3.83393Z"></path>
                        <path d="M60.7625 9.07794C60.5 9.53465 60.3408 10.1545 59.9509 10.4073C58.7654 11.1658 57.4844 11.7611 56.259 12.4462C55.71 12.7561 55.2008 12.7072 54.9939 12.1444C54.9064 11.8998 55.2644 11.337 55.5588 11.1331C56.7205 10.342 57.922 9.61621 59.1473 8.93114C59.4974 8.73541 59.9669 8.75172 60.3727 8.67017C60.5 8.80065 60.6352 8.9393 60.7625 9.07794Z"></path>
                        <path d="M14.238 22.9829C14.6438 23.929 14.8905 24.4346 15.0735 24.9565C15.4952 26.1717 15.8612 27.4114 16.2829 28.6265C16.5853 29.5073 16.5693 30.1761 15.169 30.2739C14.5642 28.4471 13.88 26.5877 13.3628 24.6793C13.2673 24.3367 13.8004 23.7985 14.238 22.9829Z"></path>
                        <path d="M62.9977 64.6905C61.836 64.3398 61.653 63.8097 61.7883 63.0593C62.0508 61.5832 62.2418 60.0989 62.5521 58.6391C62.6237 58.2884 63.0216 58.0111 63.2682 57.7012C63.491 58.0355 63.9366 58.3944 63.9048 58.688C63.6581 60.6698 63.3239 62.6353 62.9977 64.6905Z"></path>
                        <path d="M56.4428 48.3221C56.3552 49.3497 56.0767 49.9451 55.1219 49.5862C54.1194 49.2111 53.1248 48.787 52.162 48.3221C51.5812 48.0448 50.9287 47.637 51.3823 46.8296C51.7164 46.2261 52.2973 46.2751 52.8861 46.5768C54.0716 47.1885 55.2731 47.7594 56.4428 48.3221Z"></path>
                        <path d="M46.5422 10.4317C46.1921 10.2359 45.6829 10.1381 45.5078 9.8363C44.8952 8.78423 44.378 7.66693 43.8528 6.56593C43.5744 5.97873 43.8051 5.44862 44.3541 5.32629C44.6246 5.2692 45.1577 5.66882 45.301 5.98689C45.8977 7.31624 46.391 8.69452 46.9241 10.0565C46.8048 10.1788 46.6695 10.3012 46.5422 10.4317Z"></path>
                        <path d="M6.95703 34.0093C8.46881 33.4874 9.84533 33.6423 11.2059 33.7483C11.3969 33.7647 11.6436 34.1806 11.7072 34.4497C11.747 34.621 11.5003 35.0532 11.3889 35.0532C10.084 35.0451 8.77117 35.0043 7.47422 34.8901C7.30713 34.8738 7.17982 34.4089 6.95703 34.0093Z"></path>
                    </svg>
                </figure>
            </div>
        </div>
    </div>
</section> 

<section >
   <div class="container">
      <!-- Title -->
      <div class="inner-container-small text-center mb-4 mb-sm-5">
         <h2 class="mb-4">Customer Success Stories</h2>
         <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum natus voluptate delectus laborum quae totam rem minima, nisi, amet quibusdam eaque magni nesciunt perferendis tenetur, ullam cumque harum similique dolor.</p>
      </div>
      <!-- Skillset START -->
      <div class="row mb-7">
         <div class="col-md-10 mx-auto">
            <div class="row row-cols-2 row-cols-md-3 g-4 justify-content-center align-items-center">
               <!-- Item -->
               <div class="col">
                  <div class="d-flex justify-content-center">
                     <h2 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="150" data-purecounter-delay="300">80</h2>
                     <span class="h2 text-primary mb-0">+</span>
                  </div>
                  <p class="text-center heading-color mb-0">Companies using our solutions</p>
               </div>
               <!-- Item -->
               <div class="col">
                  <div class="d-flex justify-content-center">
                     <h2 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="94"  data-purecounter-delay="300">70</h2>
                     <span class="h2 text-primary mb-0">%</span>
                  </div>
                  <p class="text-center heading-color mb-0">Increase of operational efficiency</p>
               </div>
               <!-- Item -->
               <div class="col">
                  <div class="d-flex justify-content-center">
                     <h2 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="600" data-purecounter-delay="300">98</h2>
                     <span class="h2 text-primary mb-0">+</span>
                  </div>
                  <p class="text-center heading-color mb-0">Various of website perform</p>
               </div>
            </div>
         </div>
      </div>
      <!-- Skillset END -->
      <div class="row g-4 g-lg-6 "   style="padding-bottom: 30px;">
         <!-- Newsletter -->
         <div class="col-xl-5 position-relative order-1">
            <div class="card bg-dark p-4 p-sm-5 overflow-hidden h-100" data-bs-theme="dark">
               <!-- Card body -->
               <div class="card-body z-index-1 p-0 mb-5">
                  <!-- Badge -->
                  <div class="text-bg-primary d-inline-block rounded small py-1 px-2 mb-3"> <i class="bi bi-patch-check me-2"></i>Weekly news</div>
                  <!-- Title -->
                  <h4 class="card-title">Subscribe to our mailing list and stay to date</h4>
               </div>
               <!-- Card footer -->
               <div class="card-footer bg-transparent p-0 z-index-1">
                  <form class="input-group mb-2">
                     <input class="form-control form-control-lg rounded border me-3" type="email" placeholder="Enter your email">
                     <button type="button" class="btn btn-white rounded-2 mb-0"><i class="bi bi-send-fill"></i></button>
                  </form>
                  <span class="text-white">✌️ We promise not to spam!</span>
               </div>
            </div>
         </div>
         <!-- Testimonials START -->
         <div class="col-xl-7 order-xl-2">
            <div class="swiper overflow-hidden" data-swiper-options='{
               "loop": false,
               "pagination":{
               "el":".swiper-pagination",
               "type":"fraction"
               },
               "navigation":{
               "nextEl":".swiper-button-next",
               "prevEl":".swiper-button-prev"
               }}'>
               <!-- Slider items -->
               <div class="swiper-wrapper pb-4 pb-md-6">
                  <!-- Slider item -->
                  <div class="swiper-slide">
                     <div class="card p-3 border">
                        <div class="row g-4">
                           <div class="col-md-4">
                              <!-- User image -->
                              <img src="<?=base_url('assets/frontend/images/team/01.jpg') ?>" class="img-fluid card-img" alt="testimonial img">
                           </div>
                           <div class="col-md-8">
                              <div class="card-body d-flex flex-column align-items-start h-100 p-2">
                                 <!-- Client image -->
                                 <img src="<?=base_url('assets/frontend/images/client/04.svg') ?>" class="h-30px mb-3" alt="client-img">
                                 <!-- Review -->
                                 <q class="mb-3 heading-color">"Timed voice share led him to Timed voice share led him to widen noisy young. At weddings believed laughing"</q>
                                 <!-- Star -->
                                 <div class="d-flex flex-column mt-auto">
                                    <ul class="list-inline mb-0">
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="heading-color fw-bold mb-0">Emma Watson</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Slider item -->
                  <div class="swiper-slide">
                     <div class="card p-3 border">
                        <div class="row g-4">
                           <div class="col-md-4">
                              <!-- User image -->
                              <img src="<?=base_url('assets/frontend/images/team/07.jpg') ?>"  class="img-fluid card-img" alt="testimonial img">
                           </div>
                           <div class="col-md-8">
                              <div class="card-body d-flex flex-column align-items-start h-100 p-2">
                                 <!-- Client image -->
                                 <img src="<?=base_url('assets/frontend/images/client/04.svg') ?>" class="h-30px mb-3" alt="client-img">
                                 <!-- Review -->
                                 <q class="mb-3 heading-color">Fulfilled direction use continually set him propriety continued. Farther-related bed and passage comfort civilly. Concluded boy perpetual old supposing.</q>
                                 <!-- Star -->
                                 <div class="d-flex flex-column mt-auto">
                                    <ul class="list-inline mb-0">
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="heading-color fw-bold mb-0">Samuel Bishop</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Slider item -->
                  <div class="swiper-slide">
                     <div class="card p-3 border">
                        <div class="row g-4">
                           <div class="col-md-4">
                              <!-- User image -->
                              <img img src="<?=base_url('assets/frontend/images/team/07.jpg') ?>"  class="img-fluid card-img" alt="testimonial img">
                           </div>
                           <div class="col-md-8">
                              <div class="card-body d-flex flex-column align-items-start h-100 p-2">
                                 <!-- Client image -->
                                 <img src="<?=base_url('assets/frontend/images/client/05.svg') ?>" class="h-30px mb-3" alt="client-img">
                                 <!-- Review -->
                                 <q class="mb-3 heading-color">Farther-related bed and passage comfort civilly. Concluded boy perpetual old supposing.</q>
                                 <!-- Star -->
                                 <div class="d-flex flex-column mt-auto">
                                    <ul class="list-inline mb-0">
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="heading-color fw-bold mb-0">Lori Stevens</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Slider item -->
                  <div class="swiper-slide">
                     <div class="card p-3 border">
                        <div class="row g-4">
                           <div class="col-md-4">
                              <!-- User image -->
                              <img src="<?=base_url('assets/frontend/images/team/06.jpg') ?>"  class="img-fluid card-img" alt="testimonial img">
                           </div>
                           <div class="col-md-8">
                              <div class="card-body d-flex flex-column align-items-start h-100 p-2">
                                 <!-- Client image -->
                                 <img src="<?=base_url('assets/frontend/images/client/03.svg') ?>" class="h-30px mb-3" alt="client-img">
                                 <!-- Review -->
                                 <q class="mb-3 heading-color">Incorporating gratitude into our daily here we write down three things we are grateful for each day.</q>
                                 <!-- Star -->
                                 <div class="d-flex flex-column mt-auto">
                                    <ul class="list-inline mb-0">
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-fill text-warning"></i></li>
                                       <li class="list-inline-item small me-0"><i class="bi bi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="heading-color fw-bold mb-0">Amanda Reed</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Slider Pagination -->
               <div class="d-flex gap-3 ">
                  <a href="#" class="btn btn-dark border btn-icon btn-lg rounded-circle mb-0 swiper-button-prev"><i class="bi bi-arrow-left"></i></a>
                  <a href="#" class="btn btn-dark border btn-icon btn-lg rounded-circle mb-0 swiper-button-next"><i class="bi bi-arrow-right"></i></a>
               </div>
            </div>
         </div>
         <!-- Testimonials END -->
      </div>
   </div>
</section>
<!-- =======================
   Testimonials END -->
   <!-- =======================
Left right feature START -->
<section class="bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!-- Content -->
            <div class="col-lg-6 col-xl-5 mb-6 mb-lg-0">
                <h2 class="mb-sm-4">Get More Done with Our Holistic Solution</h2>
                <p class="mb-sm-5">Streamline your tasks and achieve more with a single, all-encompassing platform designed to meet your needs from start to finish.</p>

                <h6 class="fw-semibold mb-5">#1 most selling author of GetBootstrap</h6>

                <!-- Counter -->
                <div class="d-flex align-items-center mb-4">
                    <div class="w-25 border-end h-100 me-4 me-sm-5 flex-shrink-0">
                        <div class="d-flex">
                            <h4 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="200"  data-purecounter-delay="300">0</h4>
                            <span class="h4 text-primary mb-0">+</span>
                        </div>
                    </div>
                    <p class="heading-color mb-0">A Wide Range of Clients, Spanning Freelancers to Corporate Giants</p>
                </div>

                <!-- Counter -->
                <div class="d-flex align-items-center">
                    <div class="w-25 border-end h-100 me-4 me-sm-5 flex-shrink-0">
                        <div class="d-flex">
                            <h4 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="14"   data-purecounter-delay="300">0</h4>
                            <span class="h4 text-primary mb-0">K+</span>
                        </div>
                    </div>
                    <p class="heading-color mb-0">Resolved all kinds of questions and inquiries over the last 5 years</p>
                </div>
            </div>

            <!-- Image -->
            <div class="col-lg-6 ms-auto">
                <div class="position-relative d-flex flex-column h-100">
                    <!-- Image -->
                    <div class="col-md-9 mx-auto z-index-2">
                        <img src="https://mizzle.webestica.com/assets/images/elements/saas-decoration/23.png" alt="">
                    </div>
                    <!-- Background -->
                    <div class="bg-light border rounded-3 h-50 w-100 position-absolute bottom-0 start-0"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Left right feature END -->


<?php $this->load->view('frontend/component/blog'); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $("button.rounded-pill").click(function() {
        var id = $(this).attr("id"); 
        $("button.rounded-pill").removeClass("active");
        $(this).addClass("active");
        $("#appendHere").load("<?= base_url('main/loadSection/') ?>" + id);
    });
});

const carousel = document.getElementById('customCarousel');
const pawanLinks = document.querySelectorAll('.pawan a');

carousel.addEventListener('slid.bs.carousel', function (event) {

   pawanLinks.forEach(link => link.classList.remove('active'));

   
   const activeIndex = event.to;
   pawanLinks[activeIndex].classList.add('active');
});
</script>
