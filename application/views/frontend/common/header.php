<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <?php
         $title = $title ?? $this->siteTitle;
         $description = $description ?? $this->siteTitle;
         $keywords = $keywords ?? $this->siteTitle;
         ?>
      <title><?= $title ?></title>
      <meta name="title" content="<?= $title ?>">
      <meta name="description" content="<?= $description ?>">
      <meta name="keywords" content="<?= $keywords ?>">
      <link rel="canonical" href="<?= $canonical ?>">
      <meta name="author" content="<?= $this->siteTitle ?>">
      <meta property="og:title" content="<?= $title ?>" />
      <meta property="og:type" content="website" />
      <meta name="robots" content="<?= isset($meta_robots) ? $meta_robots : 'index, follow'; ?>">
      <meta property="og:url" content="<?= $canonical ?>" />
      <meta property="og:image" content="<?= base_url('assets/frontend/img/favicon.png') ?>" />
      <meta property="og:description" content="<?= $description ?>" />
      <meta property="og:site_name" content="<?= $this->siteTitle ?>" />
      <meta name="twitter:image" content="<?= base_url('assets/frontend/img/favicon.png') ?>">
      <!-- Favicon Icon -->
      <link rel="icon" href="<?= base_url('assets/frontend/img/favicon-32x32.png') ?>" sizes="32x32">
      <link rel="icon" href="<?= base_url('assets/frontend/img/favicon-48x48.png') ?>" sizes="48x48">
      <link rel="icon" href="<?= base_url('assets/frontend/img/favicon.svg') ?>" type="image/svg+xml">
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">
      <!-- Plugins CSS -->
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/vendor/font-awesome/css/all.min.css') ?>">
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css') ?>">
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/vendor/swiper/swiper-bundle.min.css') ?>">
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/css/style.css') ?>">
      <link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/css/pr.css') ?>">
      <style type="text/css">

         @media (max-width: 375px) {
         .hide-below-se {
         display: none !important;
         }
         }
         .header-style {
         background-color: white;
         position: fixed;
         top: 0px;
         left: 0;
         width: 100%;
         z-index: 1000;
         box-shadow: 0px 0px 13px 1px rgba(180, 199, 240, 0.5);
         }
      </style>
      <script>
         function showContent(contentId) {
            const allContent = document.querySelectorAll('.content-section');
            allContent.forEach(function(section) {
               section.style.display = 'none';
            });
         
            const selectedContent = document.getElementById('content-' + contentId);
            if (selectedContent) {
               selectedContent.style.display = 'block';
            }
         }
      </script>
   </head>
   <body>
      <!-- Header START -->
      <header class=" header-style">
         <!-- Logo Nav START -->
         <nav class="navbar navbar-expand-xl " style="height: 68px;">
            <div class="container mw-100 pe-3 ps-5 mbresponsive">
               <!-- Logo START -->
               <a class="navbar-brand me-0" href="<?= base_url() ?>">
                  <img class="light-mode-item navbar-brand-item" src="<?= base_url('assets/frontend/img/logo.png') ?>" alt="logo">
                  <img class="dark-mode-item navbar-brand-item" src="<?= base_url('assets/frontend/img/logo.png') ?>" alt="logo">
                  <!-- Logo END -->
                  <!-- Main navbar START -->
                  <div class="navbar-collapse  collapse" id="navbarCollapse">
                     <ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">
                        <li class="nav-item dropdown dropdown-fullwidth me-n2">
               <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Who We are </a>
               <?php $this->load->view('frontend/component/megamenu/whowe'); ?>
               </li>
               <li class="nav-item dropdown dropdown-fullwidth me-n2">
               <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">What We Do </a>
               <?php $this->load->view('frontend/component/megamenu/what'); ?>
               </li>  
               <li class="nav-item dropdown dropdown-fullwidth me-n2">
               <a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Industries</a>
               <?php $this->load->view('frontend/component/megamenu/industries'); ?>
               </li>
               <li class="nav-item dropdown dropdown-fullwidth me-n2">
               <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ecosystem</a>
               <?php $this->load->view('frontend/component/megamenu/solution'); ?>
               </li>


               <li class="nav-item dropdown me-n2">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Client Stories</a>
                  <?php $this->load->view('frontend/component/megamenu/client'); ?>
					</li>
               
               <li class="nav-item dropdown dropdown-fullwidth me-n2">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Insights</a>
                   <?php $this->load->view('frontend/component/megamenu/insights'); ?>
					</li>
             
               <li class="nav-item dropdown dropdown-fullwidth me-n2">  
               <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Connect With Us </a>                    

						               <?php $this->load->view('frontend/component/megamenu/connect'); ?>
					</li>
               </ul>
               </div>
               <!-- Main navbar END -->
               <!-- Buttons -->
               <ul class="nav align-items-center dropdown-hover ms-sm-2">
                  <li class="nav-item me-2 hide-below-se d-sm-block">
                     <a href="" class="btn btn-sm btn-light mb-0 bg-danger text-white"><i class="bi bi-person-circle me-1"></i>Start a Project</a>
                  </li>
                  <li class="nav-item">
                     <button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-animation">
                     <span></span>
                     <span></span>
                     <span></span>
                     </span>
                     </button>
                  </li>
               </ul>
            </div>
         </nav>
         <!-- Logo Nav END -->
      </header>
      <!-- Header END -->
      <main>