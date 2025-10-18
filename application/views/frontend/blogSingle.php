<!-- Hero Module -->
<!-- <div class="container-fluid ">
	<div class="row px-0">
		<div class="col-12 col-md-5 px-0 d-flex m-0 position-relative">
			<img class="img-fluid hero-img" style="object-fit:cover; filter: grayscale(100%);" src="<?= $blog[0]['fimg_url'] ?>" alt="Hero Image">
			<div class="hero-red-overlay position-absolute top-0 start-0 w-100 h-100"></div>
		</div>
		<div class="col-12 col-md-7 hero-bg-dark text-white p-5 ">
			<h4 class="text-uppercase  text-white " style="padding-top: 90px;">Lorem ipsum</h4>
			<h1 class="display-2 hero-heading text-uppercase text-white">Wet-Formed Fiberglass</h1>
			<p class="lead hero-description ">The fiberglass-mat product is used in roofing materials such as fiberglass shingles and commercial roofing materials.</p>
		</div>
	</div>
</div> -->
<!-- =======================
Main detail START -->
<section class="py-8 py-sm-9 position-relative" style="background:url(https://mizzle.webestica.com/assets/images/bg/05.jpg) no-repeat; background-size:cover; background-position:center;">
	<!-- Bg overlay -->
	<div class="bg-overlay bg-black opacity-7"></div>

	<div class="container position-relative z-index-1">
		<!-- Hero START -->
		<div class="row g-4 g-xxl-5">
			<!-- Hero content START -->
			<div class="col-lg-8 text-center mx-auto">
				<!-- Bread crumb -->
				<div class="d-flex justify-content-center position-relative mb-2">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-dots breadcrumb-dark pb-0 mb-0">
							<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?= $blog[0]['title']['rendered'] ?></li>
						</ol>
					</nav>
				</div>
				<!-- Title -->
				<h3 class="mb-0 text-white"><?= $blog[0]['title']['rendered'] ?></h3>
			</div>
			<!-- Hero content END -->
		</div>
		<!-- Hero END -->
	</div>
</section>




<!-- =======================
Blog list and sidebar START -->
<section >
	<div class="container">
		<div class="row g-xl-7">
			<!-- Blog list START -->
			<div class="col-lg-8">
				<!-- Title -->
<img class="img-fluid hero-img" style="object-fit:cover;" src="<?= $blog[0]['fimg_url'] ?>" alt="Hero Image">
				<h3 class="entry-title mt-4"><?= $blog[0]['title']['rendered'] ?></h3>

				<div class="mt-25">
					<p><?= $blog[0]['content']['rendered'] ?></p>
				</div>

			</div>
			<!-- Blog list END -->

			<!-- Sidebar START -->
			<div class="col-lg-4 ">
				<!-- Subscribe box -->
				<div class="card card-body bg-light p-4">
					<!-- Svg icon -->
					<svg class="mb-3" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1113_392)">
							<path class="fill-primary" d="M22.5492 24.7427C23.8548 25.6131 26.1456 25.6132 27.4515 24.7426C27.4517 24.7425 27.452 24.7423 27.4522 24.7422L49.7048 9.90706C48.9749 7.79611 46.9686 6.27539 44.6128 6.27539H5.38754C3.03156 6.27539 1.0254 7.79611 0.29541 9.90706L22.5485 24.7423C22.5488 24.7425 22.549 24.7425 22.5492 24.7427Z" />
							<path class="fill-mode" d="M29.077 27.1812C29.0767 27.1814 29.0765 27.1816 29.0763 27.1817C27.9335 27.9435 26.4665 28.3244 25 28.3244C23.5332 28.3244 22.0668 27.9436 20.9239 27.1816C20.9237 27.1815 20.9236 27.1814 20.9234 27.1813L0 13.2324V38.3373C0 41.3077 2.41672 43.7244 5.38735 43.7244H44.6128C47.5834 43.7244 50 41.3077 50 38.3373V13.2324L29.077 27.1812Z" />
						</g>
						<defs>
							<clipPath id="clip0_1113_392">
								<rect width="50" height="50" fill="white" />
							</clipPath>
						</defs>
					</svg>
					<!-- Title -->
					<h6 class="mb-3">Get the latest Mizzle article delivered to your inbox</h6>
					<!-- Newsletter -->
					<form>
						<input type="email" class="form-control mb-2" placeholder="Email address">
						<button type="submit" class="btn btn-dark mb-0">Subscribe</button>
					</form>
				</div>

				<!-- Advertisement -->
				<div class="card text-bg-dark mt-5">
					<img src="<?= base_url('assets/frontend/images/blog/adv.jpg" class="card-img" alt="adv image') ?>">
					<div class="card-img-overlay">
						<h5 class="card-title">Advertisement</h5>
					</div>
				</div>

				<!-- Social button -->
				<div class="mt-5">
					<h6 class="mb-3">Follow us on:</h6>
					<ul class="list-inline mb-0">
						<li class="list-inline-item"> <a class="btn btn-round bg-facebook" href="#"><i class="fab fa-fw fa-facebook-f lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-round bg-instagram" href="#"><i class="fab fa-fw fa-instagram lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-round bg-twitter" href="#"><i class="fab fa-fw fa-twitter lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-round bg-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in lh-base"></i></a> </li>
						<li class="list-inline-item"> <a class="btn btn-round bg-youtube" href="#"><i class="fab fa-fw fa-youtube lh-base"></i></a> </li>
					</ul>
				</div>

				<!-- Popular tags -->
				<div class="align-items-center mt-5">
					<h6 class="mb-3 d-inline-block">Popular Tags:</h6>
					<ul class="list-inline mb-0 social-media-btn">
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">blog</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">business</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">bootstrap</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">data science</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">deep learning</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">Adventure</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">Community</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">Tutorials</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">Interview</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">Photography</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">Classic</a> </li>
					</ul>
				</div>

			</div>
			<!-- Sidebar END -->


		</div>
	</div>
</section>
<!-- =======================
Blog list and sidebar END -->