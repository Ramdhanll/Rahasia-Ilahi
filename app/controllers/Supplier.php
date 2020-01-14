<?php 

class Supplier extends Controller {

  public function index() {
    $data['judul'] = 'Data Supplier';
    $data['suppliers'] = $this->model('Supplier_model')->getAllSupplier();
    $data['supplier_sidebar'] = true;
    $this->view('templates/header', $data);
    $this->view('templates/sidebar',$data);
    $this->view('/supplier/index',$data);
    $this->view('templates/footer');
  }

  public function tambah() {
    $data['judul'] = 'Tambah Supplier';
    $data['supplier_sidebar'] = true;
    $this->view('templates/header', $data);
    $this->view('templates/sidebar',$data);
    $this->view('/supplier/tambah');
    $this->view('templates/footer');
  }

  public function insert() {
    if ($this->model('supplier_model')->tambahDataSupplier($_POST) > 0) {
      Flasher::setFlash('Supplier','Berhasi ', 'ditambahkan', 'success');
      header("Location: " . BASEURL . "/supplier");
      exit;
      } else {
      Flasher::setFlash('Supplier','Gagal', 'ditambahkan', 'danger');
      header("Location: " . BASEURL . "/supplier");
      exit;
    }
  }

  public function edit($id) {
    $data['judul'] = 'Edit Supplier';
    $data['supplier'] = $this->model('Supplier_model')->getSupplierById($id);
    $data['supplier_sidebar'] = true;
    $this->view('templates/header',$data);
    $this->view('templates/sidebar',$data);
    $this->view('/supplier/edit', $data);
    $this->view('templates/footer');
  }

  public function edit_proses() {
    if ($this->model('supplier_model')->editDataSupplier($_POST) > 0) {
      Flasher::setFlash('Supplier','Berhasi ', 'diedit', 'success');
      header("Location: " . BASEURL . "/supplier");
      exit;
      } else {
      Flasher::setFlash('Supplier','Gagal', 'diedit', 'danger');
      header("Location: " . BASEURL . "/supplier");
      exit;
    }
  }

  public function hapus($id) {
    if ($this->model('Supplier_model')->hapusDataSupplier($id) > 0) {
      Flasher::setFlash('Supplier','Berhasi ', 'dihapus', 'success');
      header("Location: " . BASEURL . "/supplier");
      exit;
  } else {
      Flasher::setFlash('Supplier','Gagal', 'dihapus', 'danger');
      header("Location: " . BASEURL . "/supplier");
      exit;
  }
  }

}

?>