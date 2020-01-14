<?php 
function rupiah($angka){
	
  $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
  return $hasil_rupiah;

}
?>
<div class="app-main__outer">
<div class="row">
  <div class="col-lg-12">
      <?php flasher::flash() ?>
  </div>
</div>
  <div class="card">
    <h5 class="card-header bg-dark text-white">Data Transactions
      <a href="<?=BASEURL;?>/transactions/tambah" class="btn btn-primary ml-auto font-weight-bold">Tambah Data</a>
    </h5>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Customer</th>
            <th scope="col">Supplier</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">QTY</th>
            <th scope="col">Total</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($data['transactions'] as $transaction) : ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= $transaction['nama'] ?></td>
            <td><?= $transaction['supplier'] ?></td>
            <td><?= ucwords($transaction['nama_barang']) ?></td>
            <td><?= $transaction['qty'] ?></td>
            <td scope="row"><?= rupiah($transaction['total']) ?></td>
            <td><?= $transaction['tanggal'] ?></td>
            <td>
              <a href="<?= BASEURL; ?>/transactions/edit/<?= $transaction['id_transactions']; ?>" class="btn btn-warning"> <i class="fas fa-edit    "></i> </a>
              <a href="<?= BASEURL; ?>/transactions/hapus/<?= $transaction['id_transactions']; ?>" class="btn btn-danger ml-1"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>
      
