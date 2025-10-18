    <div class="main-content">
        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        
        <div class="account-pages my-5 pt-5">
            <div class="container">
                
                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Change Password</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#"><?= $site_title ?></a></li>
                                        <li class="breadcrumb-item"><a href="#">Password</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Change</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card overflow-hidden">
                             
                            <div class="card-body p-4">
                                    <div class="p-3">
                                        <div class="error_message error" style="text-align:center"></div>
                                        <form class="change-password mt-4" action="<?= base_url(); ?>ajax/admin/change_password" return_url="<?= base_url(); ?>admin">
                                        	
                                          <div class="row">
                                            <div class="mb-3 offset-3 col-md-6">
                                                <label class="form-label" for="business-category">Old Password<sup>*</sup></label>
                                                <input type="password" class="form-control" name="old-password" placeholder="Enter Old Password" >
                                                <div class="old_password_error error"></div>
                                            </div>
                                            <div class="mb-3 offset-3 col-md-6">
                                                <label class="form-label" for="business-category">New Password<sup>*</sup></label>
                                                <input type="password" class="form-control" name="new-password" placeholder="Enter New Password" >
                                                <div class="new_password_error error"></div>
                                            </div>
                                            <div class="mb-3 offset-3 col-md-6">
                                                <label class="form-label" for="business-category">Confirm Password<sup>*</sup></label>
                                                <input type="password" class="form-control" name="confirm-password" placeholder="Enter Confirm Password" >
                                                <div class="confirm_password_error error"></div>
                                            </div>
                                          
                                          <div class="mb-3 row">
                                              <div class="col-12 text-center">
                                                  <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Submit</button>
                                              </div>
                                          </div>
                                         
                                        </form>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            
            $(document).on('submit','form.change-password',function(e){
      
              e.preventDefault();
              
              var form = $(this);
              var url = form.attr('action');
              
              var return_url = form.attr('return_url');
              
               $.ajax({
                            type: 'POST',
                        url: url,
                        data: new FormData(this),
                        dataType:'json',
                        contentType: false,
                      processData: false,
                      cache:false,
                      async:false,
                        success: function(response)
                        {
                          if(response['status']==1)
                          {
                            $('.section.loader-section').hide();
                            successAlert(response);
                            setTimeout(function() {
                                        window.location.replace(return_url);
                                      }, 2000);
                          }
                          else
                          {
                            $('.old_password_error').text(response['old_password_error']);
                            $('.new_password_error').text(response['new_password_error']);
                            $('.confirm_password_error').text(response['confirm_password_error']);
                            $('.error_message').text(response['message']);
                          }
                              
                            
                         $('.section.loader-section').hide();
                            
                        }
                });
              

           });
   

        </script>
        
        
        
        
        