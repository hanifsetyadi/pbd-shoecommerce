<?php if(Auth()->user()->isAdmin == 0): ?>
<h1>Bukan adminn</h1>
<?php elseif(auth()->user()->isAdmin == 1): ?>
    
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br>

<style>
    .button {
        border-radius: 5px;
        border: 3px;
        width: 5rem;
        font-size: 12px;

    }

    .add {
        background-color: forestgreen;
    }

    .edit {
        background-color: yellow;
    }

    .delete {
        background-color: red;
    }
    /* th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        width: 500px;
        align-content: center;
    } */

    a {
        color: blue;
    }

    .card{
        margin-top: 1rem;
    }
</style>
<div class="container">
    
    <a class="btn btn-success" href="<?php echo e(route('add')); ?>">Tambah</a>
    <div class="card">
        <div class="card-body">    
    <table class="table table-stripped-columns">
            <tbody>
                <tr>
                    <td class="header table-header">Nama Produk</td>
                    <td class="header table-header">Deskripsi</td>
                    <td class="header table-header">Harga</td>
                    <td class="header table-header">Stok</td>
                    <td class="header table-header">Action</td>
                </tr>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->nama_produk); ?></td>
                        <td><?php echo e($item->deskripsi); ?></td>
                        <td>Rp. <?php echo number_format($item->harga,0,',','.'); ?></td>
                        <td><?php echo e($item->stok); ?></td>
                        <td>
                            <div class="container">
                                
                                <a class="btn btn-warning" href="<?php echo e(route('editprod', $item->id_produk)); ?>">Edit</a>
                                <a class="btn btn-warning" href="<?php echo e(route('delete', $item->id_produk)); ?>">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
<?php endif; ?>



<?php /**PATH C:\xampp\htdocs\tokoSepatuFix\resources\views/edit.blade.php ENDPATH**/ ?>