<?php 
$dashboard = false;
$stock = false;
$supplier = true;

?>
<div class="app-main__outer">
  <div class="card">
    <h5 class="card-header bg-dark text-white">Edit Data Supplier</h5>
    <form action="<?=BASEURL;?>/supplier/edit_proses" method="post" class="p-5" style="width:40%">
      <div class="form-group">
        <label for="supplier">Supplier</label>
        <input type="text"
          class="form-control" name="supplier" id="supplier" value="<?=$data['supplier']['supplier']?>" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text"
          class="form-control" name="alamat" id="alamat" value="<?=$data['supplier']['alamat']?>" required>
      </div>
      <div class="form-group">
        <label for="kota">Kota</label>
        <input type="text"
          class="form-control" name="kota" id="kota" value="<?=$data['supplier']['kota']?>" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email"
          class="form-control" name="email" id="email" value="<?=$data['supplier']['email']?>" required>
      </div>
      <div class="form-group">
        <label for="no_telepon">No Telepon</label>
        <input type="number"
          class="form-control" name="no_telepon" id="no_telepon" value="<?=$data['supplier']['no_telepon']?>" required>
      </div>
      <input type="hidden" name="id_supplier" value="<?=$data['supplier']['id_supplier']?>">
      <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
    </form>
  </div>
</div>
      
