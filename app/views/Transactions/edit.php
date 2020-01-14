<div class="app-main__outer">
<?php 


?>
  <div class="card">
    <h5 class="card-header bg-dark text-white">Edit Data Transactions</h5>
    <form action="<?=BASEURL;?>/transactions/edit_proses" method="post" class="pl-4 pt-3" style="width:40%">
      <div class="form-group">
        <label for="customer">Customer</label>
        <select class="form-control" name="id_customer" id="customer">
          <option value="">-- Pilih Customer --</option>
          <?php foreach ($data['customers'] as $customer) : ?>
            <option <?= $data['selected_customer'] == $customer['nama'] ? 'selected' : '' ?> value="<?=$customer['id_customer']?>"><?=$customer['nama']?></option>
          <?php endforeach;?>
        </select>
      </div>
      <div class="form-group">
        <label for="supplier">Supplier</label>
        <select class="form-control" name="id_supplier" id="supplierchange" required>
        <option value="">-- Pilih Supplier --</option>
          <?php foreach ($data['suppliers'] as $supplier) : ?>
            <option <?= $data['selected_supplier'] == $supplier['supplier'] ? 'selected' : '' ?> value="<?=$supplier['id_supplier']?>"><?=$supplier['supplier']?></option>
          <?php endforeach;?>
        </select>
      </div>
      <div class="form-group">
        <label for="id_barang">Nama Barang</label>
        <select class="form-control" name="id_barang" id="nama_barang_dynamic" required>
        <option value="<?=$data['selected_id_barang']?>"><?=$data['selected_nama_barang']?></option>
        </select>
      </div>
      <div class="form-group">
        <label for="qty">QTY</label>
        <input type="number"
          class="form-control qty_clas" name="qty" id="qty_press" required value='<?=$data['transactions']['qty']?>'>
      </div>
      <div class="form-group">
        <label for="total">Total</label>
        <input type="number"
          class="form-control total_result" readOnly name="total" id="total_result" value='<?=$data['transactions']['total']?>' required>
      </div>
      <div class="form-group">
        <label for="tanggal">tanggal</label>
        <input type="date"
          class="form-control" name="tanggal" id="tanggal" value='<?=$data['transactions']['tanggal']?>' required>
      </div>
      <input type="hidden" name="id_transactions" value="<?=$data['transactions']['id_transactions']?>">
      <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
    </form>
  </div>
</div>
