<div class="app-main__outer">
  <div class="card">
    <h5 class="card-header bg-dark text-white">Tambah Data Transactions</h5>
    <form action="<?=BASEURL;?>/transactions/insert" method="post" class="pl-4 pt-3" style="width:40%">
      <div class="form-group">
        <label for="customer">Customer</label>
        <select class="form-control" name="customer" id="customer">
          <option value="">-- Pilih Customer --</option>
          <?php foreach ($data['customers'] as $customer) : ?>
            <option value="<?=$customer['id_customer']?>"><?=$customer['nama']?></option>
          <?php endforeach;?>
        </select>
      </div>
      <div class="form-group">
        <label for="supplier">Supplier</label>
        <select class="form-control" name="supplier" id="supplierchange" required>
        <option value="">-- Pilih Supplier --</option>
          <?php foreach ($data['suppliers'] as $supplier) : ?>
            <option value="<?=$supplier['id_supplier']?>"><?=$supplier['supplier']?></option>
          <?php endforeach;?>
        </select>
      </div>
      <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <select class="form-control" name="nama_barang" id="nama_barang_dynamic" required>
        <option value="">-- Pilih Nama Barang --</option>
        </select>
      </div>
      <div class="form-group">
        <label for="qty">QTY</label>
        <input type="number"
          class="form-control qty_clas" name="qty" id="qty_press" required value=''>
      </div>
      <div class="form-group">
        <label for="total">Total</label>
        <input type="number"
          class="form-control total_result" name="total" id="total_result" value='' required>
      </div>
      <div class="form-group">
        <label for="tanggal">tanggal</label>
        <input type="date"
          class="form-control" name="tanggal" id="tanggal" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
    </form>
  </div>
</div>
