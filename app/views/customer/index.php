<?php 
$dashboard = false;
$stock = false;
$customer = true;

?>
<div class="app-main__outer">
<div class="row">
  <div class="col-lg-12">
      <?php flasher::flash() ?>
  </div>
</div>
  <div class="card">
    <h5 class="card-header bg-dark text-white">Data Customers
      <a href="<?=BASEURL;?>/customer/tambah" class="btn btn-primary ml-auto font-weight-bold">Tambah Data</a>
    </h5>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Customer</th>
            <th scope="col" width="250px">Alamat</th>
            <th scope="col">Kota</th>
            <th scope="col">Email</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($data['customers'] as $customer) : ?>
          <tr>
            <td><?= $i++ ?></td>
            <td scope="row"><?= $customer['nama'] ?></td>
            <td><?= $customer['alamat'] ?></td>
            <td><?= $customer['kota'] ?></td>
            <td scope="row"><?= $customer['email'] ?></td>
            <td><?= $customer['no_telepon'] ?></td>
            <td>
              <a href="<?= BASEURL; ?>/customer/edit/<?= $customer['id_customer']; ?>" class="btn btn-warning"> <i class="fas fa-edit    "></i> </a>
              <a href="<?= BASEURL; ?>/customer/hapus/<?= $customer['id_customer']; ?>" class="btn btn-danger ml-1"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>
      
