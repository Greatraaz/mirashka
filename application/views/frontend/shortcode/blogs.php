<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="title-style-4 text-center">
                <span class="bixol-subtitle before-line">Our Blog</span>
                <h2>Explore Our Expert Insights into the World of Car Detailing: The <?=$this->siteTitle;?> Blog</h2>
                <p>From Insider Tips to Product Reviews, Our Blog Offers a Wealth of Information on Car Care and Detailing Services to Help You Make Informed Decisions and Get the Most Out of Your Vehicle.</p>
            </div>
        </div>
    </div>
    <div class="home6-blog-bottom">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php $i=0; foreach($blogs as $node=>$blog){ 
                        $dt = date("d",strtotime($blog['date']));
                        $mt = date("M",strtotime($blog['date']));
                        $yr = date("Y",strtotime($blog['date']));
                    ?> 
                    <div class="col-lg-6">
                        <div class="blog-column">
                            <div class="thumb-wrapper">
                                <img loading="lazy" src="<?=$blog['fimg_url'] ?>" alt="lod-blog-img">
                            </div>
                            <div class="blog-content">
                                <div class="h6-headline">
                                    <a href="<?=base_url('blog/') . $blog['slug'] ?>"><h6><?=$blog['title']['rendered'] ?></h6></a>
                                </div>
                                <div class="blog-meta">
                                    <span><i class="fas fa-calendar-alt"></i><?=$dt ?> <?=$mt ?> <?=$yr ?></span>
                                    <span><i class="far fa-user"></i><?=$this->siteTitle;?></span>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <?php $i++; if($i==2) break; } ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-right">
                    <?php $i=0; foreach($blogs as $node=>$blog){ 
                        $dt = date("d",strtotime($blog['date']));
                        $mt = date("M",strtotime($blog['date']));
                        $yr = date("Y",strtotime($blog['date']));
                    ?> 
                        <?php if($i > 1) { ?>
                        <div class="blog-item">
                            <div class="thumb-wrapper">
                                <div class="thumb">
                                    <img loading="lazy" src="<?=$blog['fimg_url'] ?>" alt="dl-drop">
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="h6-headline">
                                    <a href="<?=base_url('blog/') . $blog['slug'] ?>"><h6><?=$blog['title']['rendered'] ?></h6></a>
                                </div>
                                <div class="blog-meta">
                                    <span><i class="fas fa-calendar-alt"></i><?=$dt ?> <?=$mt ?> <?=$yr ?></span>
                                    <span><i class="far fa-user"></i><?=$this->siteTitle;?></span>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    <?php $i++; if($i==5) break; } ?>
                </div>
            </div>
        </div>
    </div>
</div>