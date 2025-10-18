<label class="form-label">Image</label>
<div class="main-product-image">
    <img width="80px" src="<?=base_url();?><?=$industry['image'];?>">
</div>
<div class="message error"></div>
<form class="edit-form mt-4" action="<?= base_url(); ?>admin/industry/update" return_url="<?= base_url(); ?>admin/industry">
    <div class="row">
        <input type="hidden" name="id" value="<?=$industry['id'];?>">
        <input type="hidden" name="slug" value="<?=$industry['slug'];?>">
        <div class="mb-3 col-md-6">
            <label class="form-label" for="industry-name">industry Name</label>
            <input type="text" class="form-control" name="name" value="<?=$industry['name'];?>" placeholder="Enter industry Name" >
            <div class="name error"></div>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="industry-image">industry Image</label>
            <input type="file" class="form-control image-file" name="image">
            <div class="image error"></div>
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" >Status</label>
            <select class="form-control" name="status">
                <option <?php if($industry['status']==1){ echo "selected";} ?> value="1">Active</option>
                <option <?php if($industry['status']==0){ echo "selected";} ?> value="0">Non Active</option>
            </select>
        </div>                                          
        <div class="mb-3 row">
            <div class="col-12 text-center">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Submit</button>
                <div class="message"></div>
            </div>
        </div>
</form>