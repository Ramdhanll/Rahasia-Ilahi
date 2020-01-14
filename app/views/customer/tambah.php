<?php 
$dashboard = false;
$stock = false;
$customer = true;

?>
<div class="app-main__outer">
  <div class="card">
    <h5 class="card-header bg-dark text-white">Tambah Data Customer</h5>
    <form action="<?=BASEURL;?>/customer/insert" method="post" class="p-5" style="width:40%">
      <div class="form-group">
        <label for="nama">Customer</label>
        <input type="text"
          class="form-control" name="nama" id="nama" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text"
          class="form-control" name="alamat" id="alamat" required>
      </div>
      <div class="form-group">
        <label for="kota">Kota</label>
        <input type="text"
          class="form-control" name="kota" id="kota" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email"
          class="form-control" name="email" id="email" required>
      </div>
      <div class="form-group">
        <label for="no_telepon">No Telepon</label>
        <input type="number"
          class="form-control" name="no_telepon" id="no_telepon" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
    </form>
  </div>
</div>
      
