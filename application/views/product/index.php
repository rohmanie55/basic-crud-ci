<div class="card mt-4">
    <div class="card-header">
    <h4>Table Data Product</h4>
    </div>
    <div class="card-body">
    <div class="text-right mb-2">
        <a class="btn btn-primary" href="<?=base_url('product/add')?>">Tambah</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th width="10">No</th>
                <th>Nama</th>
                <th>Category</th>
                <th width="150">Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($products as $key=>$product){
            ?>
            <tr>
                <td><?=$key+1?></td>
                <td><?=$product->name?></td>
                <td><?=$product->category?></td>
                <td class="d-flex">
                    <a href="<?= base_url("product/edit/$product->id") ?>" class="btn btn-sm btn-info">Edit</a>
                    <form action="<?= base_url("product/delete/$product->id") ?>" onsubmit="return confirm('Apakah anda yakin?')">
                    <button class="btn ml-2 btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
    </div>
</div>