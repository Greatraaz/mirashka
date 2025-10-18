<div class="main-content">
	<div class="page-content">
	    <div class="container-fluid">
	        <div class="page-title-box">
	            <div class="row align-items-center">
	                <div class="col-md-8">
	                    <h6 class="page-title"><?= $sub_title ?></h6>
	                    <ol class="breadcrumb m-0">
	                        <li class="breadcrumb-item"><a href="#"><?= $site_title ?></a></li>
	                        <li class="breadcrumb-item"><a href="#"> <?= $sub_title ?></a></li>
	                        <li class="breadcrumb-item active" aria-current="page">List</li>
	                    </ol>
	                </div>
	                <div class="col-md-4">
	                    <div class="float-end d-none d-md-block">
	                        <div class="add-new"><a class="btn btn-primary" href="<?= base_url(); ?>admin/franchise/add" >Add New</a></div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-12">
	                <div class="card">
	                    <div class="card-body">
	                        <div class="table-responsive">
	                            <table id="datatable" class="table table-vertical-middle table-selectable">
	                                <thead>
	                                    <tr>
	                                        <th>No.</th>
	                                        <th>Image</th>	                                            
	                                        <th>Franchise Name</th>
	                                        <th>Email</th>
	                                        <th>Mobile</th>
	                                        <th>Status</th>
	                                        <th>Action</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <?php
	                                      $i=1;
                                          foreach($franchise as $node)
                                          {
                                            ?>
                                            <tr>
                                                <td><?=$i ?></td>
                                                <td><img width="100" src="<?=base_url($node['image'])?>"></td>
                                                <td><?=$node['name'] ?></td>
                                                <td><?=$node['email'] ?></td>
                                                <td><?=$node['mobile'] ?></td>
                                                <td>
                                                     <?php if($node['status']==1){ ?>
                                                        <span class="hand-mouse badge bg-success">Active</span>
                                                    <?php }else{ ?>
                                                        <span class="hand-mouse badge bg-danger">Non Active</span>
                                                    <?php } ?>
                                                </td>

                                                <td> 
                                                    <div class='display-inline table-action-buttons'>
                                                        <a href='<?=base_url();?>admin/franchise/edit/<?=encryptId($node['id']) ?>'
                                                            class='view btn btn-primary btn-sm'><i
                                                                class='fas fa-edit'></i></a>
                                                    </div>
                                                    <div class='display-inline table-action-buttons'>
                                                        <a href='#' onclick="deleteFranchise(<?=$node['id'] ?>);"
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

<script>
	
	function deleteFranchise(id)
    {
        var data=new Array();
        data['delete_id'] = id;
        data['url'] = '<?= base_url(); ?>admin/franchise/delete';
        var error = deleteItemAlert(data);
          
    }
</script>

            
       