<?php 

class Barang extends Controller
{
  public function index() {
    $data['judul'] = 'Data Barang';
    $data['stock_sidebar'] = true;
    $data['items'] = $this->model('Barang_model')->getAllBarangJoin();

    $this->view('templates/header',$data);
    $this->view('templates/sidebar',$data);
    $this->view('/barang/index',$data);
    $this->view('templates/footer');
  }

  

  public function tambah() {
    $data['judul'] = 'Tambah Barang';
    $data['stock_sidebar'] = true;
    $data['suppliers'] = $this->model('Supplier_model')->getAllSupplier();
    $this->view('templates/header',$data);
    $this->view('templates/sidebar',$data);
    $this->view('/barang/tambah',$data);
    $this->view('templates/footer');
  }

  public function insert() {
    if ($this->model('barang_model')->tambahDataBarang($_POST) > 0) {
      Flasher::setFlash('Barang','Berhasi ', 'ditambahkan', 'success');
      header("Location: " . BASEURL . "/barang");
      exit;
      } else {
      Flasher::setFlash('Barang','Gagal', 'ditambahkan', 'danger');
      header("Location: " . BASEURL . "/barang");
      exit;
    }
  }

  
  public function edit($id) {
    $data['judul'] = 'Edit Barang';
    $data['item'] = $this->model('Barang_model')->getBarangById($id);
    $data['suppliers'] = $this->model('Supplier_model')->getAllSupplier();
    $data['stock_sidebar'] = true;
    $this->view('templates/header',$data);
    $this->view('templates/sidebar',$data);
    $this->view('/barang/edit', $data);
    $this->view('templates/footer');

  }

  public function edit_proses() {
    if ($this->model('Barang_model')->editDataBarang($_POST) > 0) {
      Flasher::setFlash('Barang','Berhasi ', 'diedit', 'success');
      header("Location: " . BASEURL . "/barang");
      exit;
      } else {
      Flasher::setFlash('Barang','Gagal', 'diedit', 'danger');
      header("Location: " . BASEURL . "/barang");
      exit;
    }
  }

  public function hapus($id) {
    if ($this->model('Barang_model')->hapusDataBarang($id) > 0) {
      Flasher::setFlash('Barang','Berhasi ', 'dihapus', 'success');
      header("Location: " . BASEURL . "/barang");
      exit;
  } else {
      Flasher::setFlash('Barang','Gagal', 'dihapus', 'danger');
      header("Location: " . BASEURL . "/barang");
      exit;
  }
  }

}



?>