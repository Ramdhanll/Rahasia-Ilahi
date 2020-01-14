<?php 

class Transactions extends Controller {

  public function index() {
    $data['judul'] = 'Data Transactions';
    $data['transactions'] = $this->model('Transactions_model')->getAllTransactionsJoins();
    $data['transactions_sidebar'] = true;
    $this->view('templates/header', $data);
    $this->view('templates/sidebar',$data);
    $this->view('transactions/index',$data);
    $this->view('templates/footer');
  }

  public function tambah() {
    $data['judul'] = 'Tambah Transactions';
    $data['transactions_sidebar'] = true;
    $data['customers'] = $this->model('Customer_model')->getAllCustomer();
    $data['suppliers'] = $this->model('Supplier_model')->getAllSupplier();
    $data['items'] = $this->model('Barang_model')->getAllBarang();
    $this->view('templates/header', $data);
    $this->view('templates/sidebar',$data);
    $this->view('transactions/tambah', $data);
    $this->view('templates/footer');
  }

  public function insert() {
    if ($this->model('transactions_model')->tambahDataTransactions($_POST) > 0) {
      Flasher::setFlash('Transactions','Berhasi ', 'ditambahkan', 'success');
      header("Location: " . BASEURL . "/transactions");
      exit;
      } else {
      Flasher::setFlash('Transactions','Gagal', 'ditambahkan', 'danger');
      header("Location: " . BASEURL . "/transactions");
      exit;
    }
  }

  public function edit($id) {
    $data['judul'] = 'Edit Transactions';
    $data['transactions'] = $this->model('Transactions_model')->getTransactionsByIdJoin($id);
    $data['customers'] = $this->model('Customer_model')->getAllCustomer();
    $data['suppliers'] = $this->model('Supplier_model')->getAllSupplier();
    $data['transactions_sidebar'] = true;
    $data['selected_customer'] = $data['transactions']['nama'];
    $data['selected_supplier'] = $data['transactions']['supplier'];
    $data['selected_nama_barang'] = $data['transactions']['nama_barang'];
    $data['selected_id_barang'] = $data['transactions']['id_barang'];
    // var_dump($data['selected_customer']);
    // var_dump($data['selected_supplier']);
    // var_dump($data['selected_barang']);
    $this->view('templates/header',$data);
    $this->view('templates/sidebar',$data);
    $this->view('transactions/edit', $data);
    $this->view('templates/footer');
  }

  public function edit_proses() {
    var_dump($_POST);
    if ($this->model('transactions_model')->editDataTransactions($_POST) > 0) {
      Flasher::setFlash('Transactions','Berhasi ', 'diedit', 'success');
      header("Location: " . BASEURL . "/transactions");
      exit;
      } else {
      Flasher::setFlash('Transactions','Gagal ', 'diedit', 'danger');
      header("Location: " . BASEURL . "/transactions");
      exit;
    }
  }

  public function hapus($id) {
    if ($this->model('Transactions_model')->hapusDataTransactions($id) > 0) {
      Flasher::setFlash('Transactions','Berhasi ', 'dihapus', 'success');
      header("Location: " . BASEURL . "/transactions");
      exit;
  } else {
      Flasher::setFlash('Transactions','Gagal ', 'dihapus', 'danger');
      header("Location: " . BASEURL . "/transactions");
      exit;
  }
  }

  public function fetch() {
    if ($_POST['id_supplier']) {
      $id_supplier = $_POST['id_supplier'];
      $items = $this->model('barang_model')->getWhere($id_supplier);
      if ($items == null) {
        $output = '<option value="">-- Data barang kosong --</option>';
        
      }else {
        $output = '<option value="">-- Pilih Nama Barang --</option>';
        foreach ($items as $item ) {
          $output .= '<option value="'. $item['id_barang'] .'"> '. ucfirst($item['nama_barang']) .'</option>';
        }
      }
      echo $output;
    }
  }
  
  public function fetchHarga() {
    if ($_POST['item']) {
      $item = $_POST['item'];
      $items = $this->model('barang_model')->getWhereHarga($item);      
      echo $items['harga_barang'];
      
    }
  }
  

}

?>