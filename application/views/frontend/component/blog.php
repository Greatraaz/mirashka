<?php 
   $json_url = 'https://mirashka.digital/mirashka-blog/wp-json/wp/v2/posts?per_page=3&page=1&_embed';
   $ch = curl_init($json_url);
    $options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => array('Content-type: application/json')
    );
    curl_setopt_array($ch, $options);
    $result =  curl_exec($ch);
    curl_close($ch);
    $blogs = json_decode($result, true);

    if ($blogs) {
?>
<Section>
	<div class="container">
		<div class="row align-items-center g-4 mb-5">
			<div class="col-md-6">
				<h2 class="mb-0">Take a look at the latest articles & blogs</h2>
			</div>
			<div class="col-md-5 ms-auto text-sm-end">
				<a href="<?=base_url('blog')?>" class="btn btn-light btn-lg mb-0">View all blogs</a>
			</div>
		</div>

		<div class="row g-4 g-xl-5">
			<?php foreach($blogs as $node=>$blog){ 
	            $date = new DateTime($blog['date']);
	            $formattedDate = $date->format('d M, Y');
	            $image = isset($blog['_embedded']['wp:featuredmedia'][0]['source_url']) 
	            ? $blog['_embedded']['wp:featuredmedia'][0]['source_url'] 
	            : base_url('assets/frontend/img/blog/blog-01.jpg');
	            $author = isset($blog['_embedded']['author'][0]['name']) ? $blog['_embedded']['author'][0]['name'] : 'Connected Minds ';
	            $authorImage = isset($blog['_embedded']['author'][0]['avatar_urls']['48']) ? $blog['_embedded']['author'][0]['avatar_urls']['48'] : base_url('assets/frontend/images/favicon.png');
	         ?> 
			<div class="col-md-4">
				<article class="card card-img-scale shadow overflow-hidden h-100">
					<div class="card-img-scale-wrapper">
						<img src="<?=$image ?>" alt="<?=$blog['slug']; ?>" class="img-scale card-img-top">
					</div>
					<div class="card-body p-4">
						<h6 class="card-title mb-4">
							<a href="<?=base_url('blog/') . $blog['slug'] ?>" class="stretched-link"><?=$blog['title']['rendered'] ?></a>
						</h6>
						<ul class="nav heading-color small nav-divider mb-0">
							<li class="nav-item">By <?=$author; ?></li>
							<li class="nav-item"><i class="bi bi-calendar me-1"></i><?=$formattedDate; ?></li>
						</ul>
					</div>
				</article>
			</div>
			<?php } ?>
		</div>
	</div>
</Section>
<?php } ?>