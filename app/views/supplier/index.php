<?php 
$dashboard = false;
$stock = false;
$supplier = true;

?>
<div class="app-main__outer">
<div class="row">
  <div class="col-lg-12">
      <?php flasher::flash() ?>
  </div>
</div>
  <div class="card">
    <h5 class="card-header bg-dark text-white">Data Suppliers
      <a href="<?=BASEURL;?>/supplier/tambah" class="btn btn-primary ml-auto font-weight-bold">Tambah Data</a>
    </h5>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Supplier</th>
            <th scope="col" width="250px">Alamat</th>
            <th scope="col">Kota</th>
            <th scope="col">Email</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($data['suppliers'] as $supplier) : ?>
          <tr>
            <td><?= $i++ ?></td>
            <td scope="row"><?= $supplier['supplier'] ?></th>
            <td><?= $supplier['alamat'] ?></td>
            <td><?= $supplier['kota'] ?></td>
            <td scope="row"><?= $supplier['email'] ?></td>
            <td><?= $supplier['no_telepon'] ?></td>
            <td>
              <a href="<?= BASEURL; ?>/supplier/edit/<?= $supplier['id_supplier']; ?>" class="btn btn-warning"> <i class="fas fa-edit    "></i> </a>
              <a href="<?= BASEURL; ?>/supplier/hapus/<?= $supplier['id_supplier']; ?>" class="btn btn-danger ml-1"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>
      
