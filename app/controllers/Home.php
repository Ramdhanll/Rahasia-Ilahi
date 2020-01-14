<?php
class Home extends Controller
{
    public function index()
    {
        $data['suppliers'] = $this->model('Supplier_model')->getAllSupplier();
        $data['customers'] = $this->model('Customer_model')->getAllCustomer();
        $data['transactions'] = $this->model('Transactions_model')->getAllTransactions();
        $fee = 0;
        foreach ($data['transactions'] as $transaction) {
            // $fee += intval($transaction['total']) ;
            $fee += (int) $transaction['total'];
        }
        $data['total'] = $fee;
        $data['judul'] = 'Dashbord';
        $data['dashboard'] = true;
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('/dashboard/index', $data);
        $this->view('templates/footer');
    }
}
