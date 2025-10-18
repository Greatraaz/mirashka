            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Dashboard</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Welcome to <?= $site_title ?> Dashboard</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body dabbe" style="background-image: linear-gradient(to right, #192437, #00000000), url(./assets/admin/images/1.jpg);">
                                        <div class="mb-3">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="<?=base_url('assets/admin/images/Product.png');?>" >
                                                <h4 class="fw-medium font-size-24"><?=$industry; ?></h4>
                                            </div>
                                            <div class="mini-stat-label bg-info">
                                                <p class="mb-0">Industry</p>
                                            </div>
                                        </div>
                                        <div class="mar-2">
                                            <div class="float-end">
                                                <a href="<?=base_url(); ?>admin/industry" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>
                                           <p class="text-white-50 mb-0 mt-1">
                                            <a style="color: #fff;" href="<?=base_url(); ?>admin/industry">View Industry</a>
                                           </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body dabbe" style="background-image: linear-gradient(to right, #192437, #00000000), url(./assets/admin/images/2.jpg);">
                                        <div class="mb-3">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="<?=base_url('assets/admin/images/expressions-of-interest.png');?>" >
                                                <h4 class="fw-medium font-size-24"><?=$franchise; ?></h4>
                                            </div>
                                            <div class="mini-stat-label bg-info">
                                                <p class="mb-0">Franchise</p>
                                            </div>
                                        </div>
                                        <div class="mar-2">
                                            <div class="float-end">
                                                <a href="<?=base_url(); ?>admin/franchise" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>
                                           <p class="text-white-50 mb-0 mt-1">
                                            <a style="color: #fff;" href="<?=base_url(); ?>admin/franchise">View Franchise</a>
                                           </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    


                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>