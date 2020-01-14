<?php 
?>
<div class="app-main__outer">
  <div class="card">
    <h5 class="card-header bg-dark text-white">Tambah Data Barang</h5>
    <form action="<?=BASEURL;?>/barang/insert" method="post" class="p-5" style="width:40%">
      <div class="form-group">
        <label for="supplier">Supplier</label>
        <select class="form-control" name="id_supplier" id="id_supplier">
          <option>-- Pilih Supplier --</option>
          <?php foreach ($data['suppliers'] as $supplier) : ?>
          <option value="<?=$supplier['id_supplier']?>"><?= $supplier['supplier'] ?></option>
          <?php endforeach;?>
        </select>
      </div>
      <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text"
          class="form-control" name="nama_barang" id="nama_barang" required>
      </div>
      <div class="form-group">
        <label for="harga_barang">Harga</label>
        <input type="number"
          class="form-control" name="harga_barang" id="harga_barang" required>
      </div>
      <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number"
          class="form-control" name="stock" id="stock" required>
      </div>
      <div class="form-group">
        <label for="berat">Berat</label>
        <input type="text"
          class="form-control" name="berat" id="berat" required placeholder="e.g : 200 Gram">
      </div>
      <div class="form-group">
        <label for="tanggal_masuk">Tanggal Masuk</label>
        <input type="date"
          class="form-control" name="tanggal_masuk" id="tanggal_masuk" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
    </form>
  </div>
</div>
      
