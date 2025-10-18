<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title"><?= $sub_title ?></h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#"><?= $site_title ?></a></li>
                            <li class="breadcrumb-item"><a href="#"> <?= $sub_title ?> </a></li>
                            <li class="breadcrumb-item active" aria-current="page">List</li>
                        </ol>
                    </div>
                    <div class="col-md-4">
                        <div class="float-end d-none d-md-block">
                            <div class="add-new">
                            	<a class="btn btn-primary" onclick="addData();">Add New</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        	<div id="get-table-data">
	                            <div class="table-responsive">
	                                <table id="datatable" class="table table-vertical-middle table-selectable">

	                                    <!-- Table Head Start -->
	                                    <thead>
	                                        <tr>
	                                            <th>Sr. No.</th>
	                                            <th>Image</th>
	                                            <th>Industry</th>
	                                            <th>Status</th>
	                                            <th>Action</th>
	                                        </tr>
	                                    </thead><!-- Table Head End -->

	                                    <!-- Table Body Start -->
	                                    <tbody>
	                                    <?php
	                                        $i=1;
                                            foreach($industry as $node)
                                            {
                                                ?> 
                                                <tr style="height:15px;">
                                                    <td><?=$i ?></td>
                                                    <td><img width="100" src="<?=base_url($node['image'])?>"></td>
                                                    <td><?=$node['name'] ?></td>
                                                    <td>
                                                        <?php if($node['status']==1){ ?>
                                                        <span class="badge bg-success">Active</span>
                                                        <?php }else{ ?>
                                                        <span class="badge bg-danger">Non Active</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <div class='display-inline table-action-buttons'>
                                                            <a href='javascript:void(0)' onclick="editItem(<?=$node['id'] ?>)" 
                                                                class='view btn btn-primary btn-sm'><i
                                                                    class='fas fa-edit'></i></a>
                                                        </div>
                                                        <div class='display-inline table-action-buttons'>
                                                            <a href='javascript:void(0)' onclick="deleteItem(<?=$node['id'] ?>);"
                                                                class='delete btn btn-primary btn-sm' data-repeater-delete=''><i
                                                                    class='fas fa-trash-alt'></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                            } 
	                                    ?>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> 
    </div>
    <!-- End Page-content -->

    <!-- End Page-content -->
	<div id="addModal" class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Industry</h5>
	        <button type="button" class="close" onclick="hideModal()">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="message error"></div>
	      	<form class="add-form mt-4" action="<?= base_url(); ?>admin/industry/add" return_url="<?= base_url(); ?>admin/industry">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter industry name" >
                        <div class="name error"></div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control image-file" name="image">
                        <div class="image error"></div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" >Select Icon</label>
                        <select class="form-control" name="icon" >
                            <option value="">-- Select Icon --</option>
                            <option value="w-icon-shipping">w-icon-shipping</option>
                            <option value="w-icon-truck2">w-icon-truck2</option>
                        </select>
                        <div class="icon error"></div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" >Status</label>
                        <select class="form-control" name="status">
                            <option value="1">Active</option>
                            <option value="0">Non Active</option>
                        </select>
                    </div>                                          
                    <div class="mb-3 row">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Submit</button>
                            <div class="message"></div>
                        </div>
                    </div>
                </div>
            </form>
	      </div>
	    </div>
	  </div>
	</div>

	<div id="editModal" class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Industry Edit</h5>
	        <button type="button" class="close"  onclick="hideModal()">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div id="data"></div>
	      </div>
	    </div>
	  </div>
	</div>

    <script>

	    function editItem(id) {
	    	$('.section.loader-section').show(); 
            var id = id;
            $.ajax({
                    type: 'POST',
                    url: "<?=base_url('admin/industry/edit');?>",
                    data: {id:id},
                    success: function(response)
                    {
                        console.log(response);
                        $('#editModal').show();
                        $('#data').html(response); 
                        $('.section.loader-section').hide();   
                    }
                });
	    }

	    $(document).on('submit','form.add-form',function(e){    
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
                        $('.name').text(response['name']);
                        $('.icon').text(response['icon']);
                        $('.image').text(response['image']);
                        $('.message').text(response['message']);
                    }
                    $('.section.loader-section').hide();    
                }
            });
        })	   

        $(document).on('submit','form.edit-form',function(e){    
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
                        $('.name').text(response['name']);
                        $('.message').text(response['message']);
                    }
                    $('.section.loader-section').hide();    
                }
            });
        })	  

        function deleteItem(id) {
	        var data = new Array();
	        data['delete_id'] = id;
	        data['url'] = '<?= base_url(); ?>admin/industry/deleteItem';
	        var error = deleteItemAlert(data);
	    } 
    </script>