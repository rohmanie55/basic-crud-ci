<div class="card mt-4">
    <div class="card-header">
    <h4>Edit Data Product</h4>
    </div>
    <form action="" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="">Nama Produk</label>
            <input name="name" value="<?= $item->name ?>" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Category Produk</label>
            <select name="category_id" class="form-control">
               <?php foreach($categoris as $category){ ?>
                <option <?php if($item->category_id==$category->id) {echo 'selected'; } ?> value="<?= $category->id ?>"><?=$category->name?></option>
                <?php }?>
            </select>
        </div>
    </div>
    <div class="card-footer text-right">
        <a href="<?= base_url('product') ?>" class="btn btn-secondary">Batal</a>
        <button class="btn btn-primary">Update</button>
    </div>
    </form>
</div>