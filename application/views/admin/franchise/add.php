<div class="main-content">
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <!-- start page title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title"><?= $sub_title ?></h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#"><?= $site_title ?></a></li>
                            <li class="breadcrumb-item"><a href="#"><?= $sub_title ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
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
                                <form class="add-form mt-4" action="<?= base_url(); ?>admin/franchise/store" return_url="<?= base_url(); ?>admin/franchise">
                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" >Select indusrty</label>
                                            <select class="form-control" name="industryId" required>
                                                <option value="">-- Select Industry --</option>
                                                <?php foreach($industry as $node) { ?>
                                                <option value="<?=$node['id'] ?>"> <?=$node['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <div class="industryId error"></div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="service_price">Business name</label>
                                            <input type="text" class="form-control" name="franchise_name" placeholder="Enter Business Name" >
                                            <div class="franchise_error error"></div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                            <div class="email_error error"></div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="mobile">Mobile</label>
                                            <input type="tel" class="form-control" name="mobile" placeholder="Enter Mobile No">
                                            <div class="mobile_error error"></div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                            <div class="password_error error"></div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">State</label>
                                            <select title="Select State" name="state" class="form-control" id="state-name">      
                                                <option value="">-- Select State --</option>
                                                <?php foreach ($states as $node) { ?>
                                                    <option value="<?=$node['id'] ?>"> <?=$node['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <div class="state_error error"></div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">City</label>
                                            <select title="Select City" name="city" class="form-control" id="city-name">      
                                                <option value="">-- Select City --</option>
                                            </select>
                                            <div class="city_error error"></div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Investment Range</label>
                                            <select title="Select Investment range" name="invRng" class="form-control">      
                                                <option value="">-- Select Investment --</option>                                           
                                                <option value="No Investment">No Investment</option>
                                                <option value="1 - 50000">1 - 50000</option>
                                                <option value="50000 - 1Lakh">50000 - 1Lakh</option>
                                                <option value="1Lakh - 2Lakh">1Lakh - 2Lakh</option>
                                                <option value="2lakhs - 5lakhs">2lakhs - 5lakhs</option>
                                                <option value="5lakhs - 10lakhs">5lakhs - 10lakhs</option>
                                                <option value="15Lakhs - 20Lakhs">15Lakhs - 20Lakhs</option>
                                                <option value="10Lakhs - 15Lakhs">10Lakhs - 15Lakhs</option>
                                                <option value="20lakhs - 30lakhs">20lakhs - 30lakhs</option>
                                                <option value="30lakhs - 40lakhs">30lakhs - 40lakhs</option>
                                                <option value="40Lakhs - 50Lakhs">40Lakhs - 50Lakhs</option>
                                                <option value="50Lakhs - 75Lakhs">50Lakhs - 75Lakhs</option>
                                                <option value="75Lakhs - 1Crore">75Lakhs - 1Crore</option>
                                                <option value="1crore - 2crore">1crore - 2crore</option>
                                                <option value="2Crore - 5Crore">2Crore - 5Crore</option>
                                                <option value="5Crore - 10Crore">5Crore - 10Crore</option>
                                                <option value="Above 10Crore">Above 10Crore</option>
                                            </select>
                                            <div class="invRng error"></div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="image">Franchise Main Image</label>
                                            <input type="file" class="form-control" name="image" accept="image/*">
                                            <div class="image_error error"></div>
                                        </div> 
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="address">Address</label>
                                            <textarea name="address" id="address" rows="4" cols="50" class="bord-pro"></textarea>
                                            <div class="address_error error"></div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">About</label>
                                            <textarea name="about" rows="4" cols="50" class="bord-pro"></textarea>
                                            <div class="about error"></div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="description">Description</label>
                                            <textarea name="description" rows="4" cols="50" class="bord-pro"></textarea>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="meta_title">Seo Meta Title</label>
                                            <textarea name="meta_title" rows="4" cols="50" class="bord-pro"></textarea>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="meta_description">Seo Meta Description</label>
                                            <textarea name="meta_description" rows="4" cols="50" class="bord-pro"></textarea>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="meta_keyword">Seo Meta Keyword</label>
                                            <textarea name="meta_keyword" rows="4" cols="50" class="bord-pro"></textarea>
                                        </div>
                                        <div class="mb-3 col-md-8">
                                            <label class="form-label">GMB Iframe Code</label>
                                            <input type="text" class="form-control" name="gmb" placeholder="Paste the GMB Map iframe Code Here <iframe></iframe>">
                                        </div>  
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" >Featured Listing</label>
                                            <select class="form-control" name="featured">
                                                <option value="0">No</option>
                                            	<option value="1">Yes</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" >Status</label>
                                            <select class="form-control" name="status">
                                                <option value="1">Active</option>
                                                <option value="0">Disable</option>
                                            </select>
                                        </div>                                      
                                        <div class="mb-3 row">
                                            <div class="col-12 text-center">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Submit</button>
                                                <div class="message"></div>
                                                <div class="error_message error"></div>
                                            </div>
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
</div>

<script type="text/javascript">

    jQuery(document).on('change', 'select#state-name', function (e) {

        e.preventDefault();
        var stateID = jQuery(this).val();

        $.ajax({
            url: '<?=base_url('admin/franchise/getcities');?>',
            type: 'post',
            data: {stateID: stateID},
            dataType: 'json',
            beforeSend: function () {
                jQuery('select#city-name').find("option:eq(0)").html("Please wait..");
            },
            success: function (json) {
                var options = '';
                options +='<option value="">Select City</option>';
                for (var i = 0; i < json.length; i++) {
                    options += '<option value="' + json[i].id + '">' + json[i].name + '</option>';
                }
                jQuery("select#city-name").html(options);

            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });
            
    $(document).on('submit','form.add-form',function(e)
    {
        e.preventDefault();
        $('.section.loader-section').show();
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
                async:true,
                success: function(response)
                {
                    if(response['status']==1)
                    {
                        $('.section.loader-section').hide();
                        successAlert(response);
                        window.location.replace(return_url);
                    }
                    else
                    {
                        $('.franchise_error').text(response['franchise_error']);
                        $('.email_error').text(response['email_error']);
                        $('.password_error').text(response['password_error']);
                        $('.mobile_error').text(response['mobile_error']);
                        $('.address_error').text(response['address_error']);
                        $('.state_error').text(response['state_error']);
                        $('.city_error').text(response['city_error']);
                        $('.industryId').text(response['industryId']);
                        $('.about').text(response['about']);
                        $('.invRng').text(response['invRng']);
                        $('.image_error').text(response['image_error']);
                        $('.error_message').text(response['message']);
                    }
                    $('.section.loader-section').hide();
                    
                }
        });
    })

</script>
        
        
        