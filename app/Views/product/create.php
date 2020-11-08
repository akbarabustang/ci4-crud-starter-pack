<?php echo view('layouts/header') ?>
 
    <div class="container mt-5 mb-5 text-center">
    <h4>CONTOH CRUD CODEIGNITER 4</h4>
    </div>
    <div class="container">
        <h4>Add New</h4>
        <hr>
        <form action="<?php echo base_url('product/store'); ?>" method="post">
 
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="product_name" class="form-control" placeholder="product name">
            </div>
            <div class="form-group">
                <label for="">Product Description</label>
                <textarea name="product_description"class="form-control" placeholder="Product Description"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="<?php echo base_url('product'); ?>" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>

<?php echo view('layouts/footer') ?> 