<!-- =======================
Main Banner START -->
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
							<li class="breadcrumb-item active" aria-current="page">Our Blogs</li>
						</ol>
					</nav>
				</div>
				<!-- Title -->
				<h1 class="mb-0 text-white">Our Blogs</h1>
			</div>
			<!-- Hero content END -->
		</div>
		<!-- Hero END -->
	</div>
</section>
<!-- =======================
Main Banner END -->

<!-- =======================
Main Banner END -->

<!-- =======================
Blog list and sidebar START -->
<section>
	<div class="container">
		<!-- Title & Tab -->
		<div class="d-lg-flex justify-content-between align-items-center">
			<!-- Title -->
			<h4 class="mb-3 mb-lg-0">Our Blog</h4>
			<!-- Tabs -->
			<ul class="nav nav-pills gap-1 nav-pills-light">
				<li class="nav-item">
					<a class="nav-link active">All blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link">Marketing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link">Design</a>
				</li>
				<li class="nav-item">
					<a class="nav-link">Lifestyle</a>
				</li>
				<li class="nav-item">
					<a class="nav-link">Technology</a>
				</li>
			</ul>
		</div>

		<!-- Blog grid -->
		<div class="row g-4 g-sm-5 g-xl-7 mt-0">

			<?php foreach ($blogs as $node => $blog) {
				$dt = date("d", strtotime($blog['date']));
				$mt = date("M", strtotime($blog['date']));
				$yr = date("y", strtotime($blog['date']));
			?>

				<!-- Item -->
				<div class="col-md-6 col-lg-4">
					<article class="card bg-transparent h-100 p-0">

						<!-- Card image -->
						<img src="<?= $blog['fimg_url'] ?? 'default_image.jpg' ?>" class="card-img" alt="Blog-img">

						<!-- Card Body -->
						<div class="card-body px-2 pb-4">
							<!-- Title -->
							<h6 class="card-title mb-2">
								<a href="<?= base_url('blog/') . $blog['slug'] ?>">
									<?= $blog['title']['rendered'] ?>
								</a>
							</h6>
							<p class="small mb-0">Consider your expertise, personal experiences, and what you can uniquely offer to your readers.</p>
						</div>

						<!-- Card footer -->
						<div class="card-footer bg-transparent d-flex justify-content-between px-2 py-0">
							<span class="heading-color fw-semibold mb-0">Bryan Knight</span>
							<a class="icon-link icon-link-hover stretched-link" href="<?= base_url('blog/') . $blog['slug'] ?>">
								Read more<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</article>
				</div>
			<?php } ?>

		</div>





		<!-- Pagination START -->
		<div class="row mt-7">
			<div class="col-12 mx-auto">
				<ul class="pagination pagination-primary-soft d-flex justify-content-center mb-0">
					<?php
					$current = isset($_GET['page']) ? $_GET['page'] : 1;
					$total = $total / 7;
					$total = $total + 1;
					for ($i = 1; $i < $total; $i++) { ?>
						<li class="page-item <?php if ($current == $i) { ?>active <?php } ?>"><a class="page-link" href="<?= base_url('blogs?page=' . $i); ?>"><?= $i; ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<!-- Pagination END -->

	</div>
</section>
<!-- =======================
Blog list and sidebar END -->


<!-- =======================
   Review START -->
<section class=" bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-11">
				<div class="row align-items-center">
					<!-- Slider START -->
					<div class="col-lg-6 order-2 mt-5 mt-lg-0">
						<div class="swiper mt-2 mt-md-4"
							data-swiper-options='{
                     "effect": "fade",
                     "grabCursor": "true",
                     "autoplay": {
                     "delay": 3000
                     }
                     }'>
							<!-- Slider items -->
							<div class="swiper-wrapper align-items-center">
								<!-- Item 1 -->
								<div class="swiper-slide card bg-transparent p-0 pe-md-7 position-relative">
									<!-- Image -->
									<img src="<?php echo base_url('assets/frontend/images/team/03.jpg'); ?>" class="rounded w-100" alt="review-img">
									<!-- Card body -->
									<div class="col-10 col-xl-9 card-body bg-body shadow rounded position-absolute end-0 bottom-0 p-xl-5 mb-4 me-4 z-index-2">
										<h6>"Mizzle is an essential tool for me and my team"</h6>
										<p>The chatbot can be personalized to match the brand voice and tone, making the company's customer support team more efficient.</p>
									</div>
								</div>
								<!-- Item 2 -->
								<div class="swiper-slide card bg-transparent p-0 pe-md-7 position-relative">
									<!-- Image -->
									<img src="<?php echo base_url('assets/frontend/images/team/02.jpg'); ?>" class="rounded w-100" alt="review-img">
									<!-- Card body -->
									<div class="col-10 col-xl-9 card-body bg-body shadow rounded position-absolute end-0 bottom-0 p-xl-5 mb-4 me-4 z-index-2">
										<h6>"Transformed My Agency's Results"</h6>
										<p>I can't say enough about the impact this platform has had on my agency. The automation tools, project management features, and seamless collaboration have transformed the way we work.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Slider END -->
					<!-- Title and Content START -->
					<div class="col-lg-6 ms-auto order-1 order-lg-2">
						<!-- Title -->
						<h2 class="my-3">Frequently Asked Questions.</h2>
						<p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed facere quia exercitationem quisquam corporis dolorum laboriosam vero rem, </p>
						<!-- Accordion START -->
						<div class="accordion accordion-icon accordion-border" id="accordionFaq">
							<!-- Item 1 -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-1">
									<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										How many items are there on this list?
									</button>
								</div>
								<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3 pb-0">
										Was our laughter raptures returned outweigh. Luckily cheered colonel I do we attack highest enabled. Tried law yet style child. The bore of true of no be deal...
									</div>
								</div>
							</div>
							<!-- Item 2 -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-2">
									<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										Can you describe Mizzle in just one sentence?
									</button>
								</div>
								<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3">
										September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance...
									</div>
								</div>
							</div>
							<!-- Item 3 -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-3">
									<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										What services do agencies provide?
									</button>
								</div>
								<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3">
										Agencies provide a wide range of services depending on their specialization, such as advertising campaigns, digital marketing, branding, creative design, public relations...
									</div>
								</div>
							</div>
							<!-- Item 4 -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-4">
									<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
										What is the role of a project manager?
									</button>
								</div>
								<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3">
										The role of a project manager is to oversee and manage the execution of projects, ensuring that they are completed on time, within budget, and meet the client's requirements.
									</div>
								</div>
							</div>
							<!-- Item 5 -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-5">
									<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
										How do agencies handle client feedback?
									</button>
								</div>
								<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3">
										Agencies handle client feedback by reviewing the input carefully, discussing necessary changes with the client, and implementing updates while maintaining communication to ensure satisfaction.
									</div>
								</div>
							</div>
						</div>
						<!-- Accordion END -->
						<hr class="my-6">
						<!-- Divider -->
					</div>
					<!-- Title and Content END -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
   Review END -->