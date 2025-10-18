<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title><?=$site_title;?> - Forget Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/admin/images/favicon.webp">
    
        <!-- Bootstrap Css -->
        <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="<?php echo base_url(); ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="<?php echo base_url(); ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    
    </head>

    <body data-sidebar="dark" style="background-image: url('<?php echo base_url(); ?>assets/admin/images/bg.jpg');">

        <!-- Begin page -->
        <div id="layout-wrapper">
        	
     <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary">
                                <div class="text-primary text-center p-4">
                                    <h5 class="text-white font-size-20 p-2">Reset Password</h5>
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="<?php echo base_url(); ?>assets/admin/images/favicon.webp" width="75" alt="logo">
                                    </a>
                                </div>
                            </div>
    
                            <div class="card-body p-4">
                                
                                <div class="p-3">

                                    <div class="alert alert-success mt-5" role="alert">
                                        Enter your Email and instructions will be sent to you!
                                    </div>

                                    <div class="error_message error"></div>
                                    <form class=" mt-4" action="#">
    
                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Email</label>
                                            <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                        </div>
                
                                        <div class="row  mb-0">
                                            <div class="col-12 text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                            </div>
                                        </div>
    
                                    </form>
    
                                </div>
                                <div class="mt-5 text-center">
                                    <p>Remember It ? <a href="<?= base_url(); ?>admin/login" class="fw-medium text-primary"> Sign In here </a> </p>
                                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> <?=$site_title;?> Crafted with <i class="mdi mdi-heart text-danger"></i> by <?=$powered_by;?></p>
                                </div>
                            </div>
    
                        </div>
    
                        
    
                    </div>
                </div>
            </div>
        </div>
    
    
     <!-- JAVASCRIPT -->
        <script src="<?php echo base_url(); ?>assets/admin/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/node-waves/waves.min.js"></script>


        <script src="<?php echo base_url(); ?>assets/admin/js/app.js"></script>
        
        
       
         <script>
         
         /********************************************************************************************
            *********************************************************************************************
            *       ADMIN LOGIN
            *********************************************************************************************
            *********************************************************************************************/   

   
   
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
        	              $('.section.loader-section').hide();
        	            }
        	            
        	        }
            });
          
       })
   
    </script>


    </body>

</html>
