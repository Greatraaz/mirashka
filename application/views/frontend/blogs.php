<style type="text/css">
article img.card-img {
    height: 177px;
    object-fit: cover;
    border: 1px solid #e8e8e8;
}
.tfsa i{
	color: #dc860d;
}
.tfsa{
	margin-bottom: 10px;
}
</style>

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
			<!-- <ul class="nav nav-pills gap-1 nav-pills-light">
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
			</ul> -->
		</div>

		<!-- Blog grid -->
		<div class="row g-4 g-sm-5 g-xl-7 mt-0">

				<?php foreach($blogs as $node=>$blog){ 
               $date = new DateTime($blog['date']);
               $formattedDate = $date->format('d M, Y');
	            $author = isset($blog['_embedded']['author'][0]['name']) ? $blog['_embedded']['author'][0]['name'] : 'Mirashka ';
	           ?> 

				<!-- Item -->
				<div class="col-md-6 col-lg-4">
					<article class="card bg-transparent h-100 p-0">

						<!-- Card image -->
						<img src="<?= $blog['fimg_url'] ?? 'default_image.jpg' ?>" class="card-img" alt="Blog-img">

						<!-- Card Body -->
						<div class="card-body px-2 pb-4">
							<div class="d-flex gap-3 tfsa">
								<div>
									<i class="fa fa-user"></i> <?=$author; ?>
								</div>
								<div>
									<i class="fa fa-calendar-check"></i> <?=$formattedDate; ?>
								</div>
							</div>
							<h6 class="card-title mb-2">
								<a href="<?= base_url('blog/') . $blog['slug'] ?>">
									<?= $blog['title']['rendered'] ?>
								</a>
							</h6>
						</div>

						<!-- Card footer -->
						<div class="card-footer bg-transparent d-flex justify-content-between px-2 py-0">
							<a class="icon-link icon-link-hover stretched-link" href="<?= base_url('blog/') . $blog['slug'] ?>">
								Read Full Blog<i class="bi bi-arrow-right"></i>
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
					    $total_pages = ceil($total / 12);
					    $base_url = isset($category_slug) && $category_slug != ''
					        ? base_url('blog/category/' . $category_slug . '?page=')
					        : base_url('blog?page=');

					    for ($i = 1; $i <= $total_pages; $i++) { ?>
					        <li class="page-item <?= ($current == $i) ? 'active' : '' ?>">
					            <a class="page-link" href="<?= $base_url . $i; ?>"><?= $i; ?></a>
					        </li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<!-- Pagination END -->

	</div>
</section>
<!-- =======================
Blog list and sidebar END -->

