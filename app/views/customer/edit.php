<?php 
$dashboard = false;
$stock = false;
$customer = true;

?>
<div class="app-main__outer">
  <div class="card">
    <h5 class="card-header bg-dark text-white">Edit Data Customer</h5>
    <form action="<?=BASEURL;?>/customer/edit_proses" method="post" class="p-5" style="width:40%">
      <div class="form-group">
        <label for="nama">Customer</label>
        <input type="text"
          class="form-control" name="nama" id="nama" value="<?=$data['customer']['nama']?>" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text"
          class="form-control" name="alamat" id="alamat" value="<?=$data['customer']['alamat']?>" required>
      </div>
      <div class="form-group">
        <label for="kota">Kota</label>
        <input type="text"
          class="form-control" name="kota" id="kota" value="<?=$data['customer']['kota']?>" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email"
          class="form-control" name="email" id="email" value="<?=$data['customer']['email']?>" required>
      </div>
      <div class="form-group">
        <label for="no_telepon">No Telepon</label>
        <input type="number"
          class="form-control" name="no_telepon" id="no_telepon" value="<?=$data['customer']['no_telepon']?>" required>
      </div>
      <input type="hidden" name="id_customer" value="<?=$data['customer']['id_customer']?>">
      <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
    </form>
  </div>
</div>
      
