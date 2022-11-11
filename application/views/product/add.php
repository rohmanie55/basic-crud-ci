<div class="card mt-4">
    <div class="card-header">
    <h4>Tambah Data Product</h4>
    </div>
    <form action="" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="">Nama Produk</label>
            <input name="name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Category Produk</label>
            <select name="category_id" class="form-control">
               <?php foreach($categoris as $category){ ?>
                <option value="<?= $category->id ?>"><?=$category->name?></option>
                <?php }?>
            </select>
        </div>
    </div>
    <div class="card-footer text-right">
        <a href="<?= base_url('product') ?>" class="btn btn-secondary">Batal</a>
        <button class="btn btn-primary">Simpan</button>
    </div>
    </form>
</div>