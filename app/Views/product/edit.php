<?php echo view('layouts/header') ?>

    <div class="container mt-5 mb-5 text-center">
        <h4>CONTOH CRUD CODEIGNITER 4</h4>
    </div>
    <div class="container">
        <h4>Edit Product</h4>
        <hr>
        <form action="<?php echo base_url('product/update/'.$product['id']); ?>" method="post">
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" name="product_name" value="<?php echo $product['product_name']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Deskripsi Produk</label>
                <textarea name="product_description" class="form-control"><?php echo $product['product_description']; ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?php echo base_url('product'); ?>" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>

<?php echo view('layouts/footer') ?>