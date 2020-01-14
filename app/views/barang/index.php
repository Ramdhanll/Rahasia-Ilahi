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
    <h5 class="card-header bg-dark text-white">Data Barang
      <a href="<?=BASEURL;?>/barang/tambah" class="btn btn-primary ml-auto font-weight-bold">Tambah Data</a>
    </h5>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Supplier</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Stock</th>
            <th scope="col">Berat</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1;
              $j = 0;
        ?>
        <?php foreach ($data['items'] as $item) : ?>
          <tr>
            <td><?= $i++?></td>
            <td><?= $item['supplier'] ?></td>
            <td><?= $item['nama_barang'] ?></td>
            <td scope="row"><?= rupiah($item['harga_barang']) ?></td>
            <td><?= $item['stock'] ?></td>
            <td><?= $item['berat'] ?></td>
            <td><?= $item['tanggal_masuk'] ?></td>
            <td>
              <a href="<?= BASEURL; ?>/barang/edit/<?= $item['id_barang']; ?>" class="btn btn-warning"> <i class="fas fa-edit    "></i> </a>
              <a href="<?= BASEURL; ?>/barang/hapus/<?= $item['id_barang']; ?>" class="btn btn-danger ml-1"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>
      
