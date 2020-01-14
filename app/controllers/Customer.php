<?php 

class Customer extends Controller {

  public function index() {
    $data['judul'] = 'Data Customer';
    $data['customers'] = $this->model('Customer_model')->getAllCustomer();
    $data['customer_sidebar'] = true;
    $this->view('templates/header', $data);
    $this->view('templates/sidebar',$data);
    $this->view('/customer/index',$data);
    $this->view('templates/footer');
  }

  public function tambah() {
    $data['judul'] = 'Tambah Customer';
    $data['customer_sidebar'] = true;
    $this->view('templates/header', $data);
    $this->view('templates/sidebar',$data);
    $this->view('/customer/tambah');
    $this->view('templates/footer');
  }

  public function insert() {
    if ($this->model('customer_model')->tambahDataCustomer($_POST) > 0) {
      Flasher::setFlash('Customer','Berhasi ', 'ditambahkan', 'success');
      header("Location: " . BASEURL . "/customer");
      exit;
      } else {
      Flasher::setFlash('Customer','Gagal', 'ditambahkan', 'danger');
      header("Location: " . BASEURL . "/customer");
      exit;
    }
  }

  public function edit($id) {
    $data['judul'] = 'Edit Customer';
    $data['customer'] = $this->model('Customer_model')->getCustomerById($id);
    $data['customer_sidebar'] = true;
    $this->view('templates/header',$data);
    $this->view('templates/sidebar',$data);
    $this->view('/customer/edit', $data);
    $this->view('templates/footer');
  }

  public function edit_proses() {
    if ($this->model('customer_model')->editDataCustomer($_POST) > 0) {
      Flasher::setFlash('Customer','Berhasi ', 'diedit', 'success');
      header("Location: " . BASEURL . "/customer");
      exit;
      } else {
      Flasher::setFlash('Customer','Gagal', 'diedit', 'danger');
      header("Location: " . BASEURL . "/customer");
      exit;
    }
  }

  public function hapus($id) {
    if ($this->model('Customer_model')->hapusDataCustomer($id) > 0) {
      Flasher::setFlash('Customer','Berhasi ', 'dihapus', 'success');
      header("Location: " . BASEURL . "/customer");
      exit;
  } else {
      Flasher::setFlash('Customer','Gagal', 'dihapus', 'danger');
      header("Location: " . BASEURL . "/customer");
      exit;
  }
  }

}

?>