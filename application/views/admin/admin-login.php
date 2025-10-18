<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?=$site_title;?> - Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/images/favicon.webp">
        <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/admin/css/raj_custom.css"rel="stylesheet" type="text/css">
    </head>
    <body data-sidebar="dark" class="bg-transparent" style="background-image: url('<?php echo base_url(); ?>assets/frontend/images/slider/service/banner1.webp');">
        	
        <div class="account-pages my-5 pt-5">
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary">
                                <div class="text-primary text-center p-4">
                                    <h5 class="text-white font-size-20">Admin Login</h5>
                                    <p class="text-white-50">Sign in to continue to <?=$site_title;?></p>
                                    <a href="<?php echo base_url(); ?>" class="logo logo-admin">
                                        <img src="<?php echo base_url(); ?>assets/admin/images/favicon.webp" width="45" alt="logo">
                                    </a>
                                </div>
                            </div>

                            <div class="card-body p-4">
                                <div class="p-3">
                                    <!-- <h3>Login</h3> -->
                                    <div class="error_message error"></div>
                                    <form class="admin-login mt-4" action="<?= base_url(); ?>login/adminlogin">

                                        <div class="mb-4">
                                            <label class="form-label" for="username">Username <sup>*</sup></label>
                                            <input type="text" class="form-control login" id="username" placeholder="User name or email address *">
                                            <div class="username_error error"></div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Password<sup>*</sup></label>
                                            <input type="password" class="form-control password " id="userpassword" placeholder="Password *">
                                            <div class="password_error error"></div>
                                        </div>
                                            
                                        </div>
                                        <div class="col-12 text-center">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit" style="width: 100%;"><b>Log In</b></button>
                                        </div>

                                    </form>

                                </div>
                                <div class="text-center">                        
                                    <p class="mb-20">© <script>document.write(new Date().getFullYear())</script> <?=$site_title;?> Crafted with <i class="mdi mdi-heart text-danger"></i> by <?=$powered_by;?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <script src="<?php echo base_url(); ?>assets/admin/libs/jquery/jquery.min.js"></script>
    <script>
       $(document).on('submit','form.admin-login',function(e){
          e.preventDefault();
          $('.section.loader-section').show();
          
          var form = $(this);
          var url = form.attr('action');
          
          var login=$('.login').val();
          var pass=$('.password').val();
          
            $.ajax({
            		type: 'POST',
        	        url: url,
        	        data: {login:login,pass:pass},
        	        dataType:'json',
        	        success: function(response)
        	        {
        	            if(response['status']==1)
        	            {
        	              window.location.replace(response['last_url']);
        	            }
        	            else
        	            {
        	              $('.username_error').text(response['username_error']);
        	              $('.password_error').text(response['password_error']);
        	              $('.error_message').text(response['message']);
        	            }
        	            
        	        }
            });
          
       })
   
    </script>


    </body>

</html>
