<?php 

  class Transactions_model {
    private $table = 'tb_transactions';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTransactions()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllTransactionsJoins()
    {
        $this->db->query('SELECT * FROM ' . $this->table.' 
        INNER JOIN tb_customer ON ' . $this->table .'.id_customer = tb_customer.id_customer
        INNER JOIN tb_supplier ON ' . $this->table .'.id_supplier = tb_supplier.id_supplier
        INNER JOIN tb_barang ON ' . $this->table .'.id_barang = tb_barang.id_barang');
        return $this->db->resultSet();
    }

    public function getTransactionsById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_transactions=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getTransactionsByIdJoin($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . '
        INNER JOIN tb_customer ON ' . $this->table .'.id_customer = tb_customer.id_customer
        INNER JOIN tb_supplier ON ' . $this->table .'.id_supplier = tb_supplier.id_supplier
        INNER JOIN tb_barang ON ' . $this->table .'.id_barang = tb_barang.id_barang
        WHERE ' . $this->table . '.id_transactions=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getBarangById($supplier)
    {
        $this->db->query('SELECT nama_barang FROM tb_barang WHERE supplier=:supplier');
        $this->db->bind('supplier', $supplier);
        return $this->db->single();
    }

    public function tambahDataTransactions($data)
    {
        $query = "INSERT INTO tb_transactions
        VALUES
        ('', :customer, :supplier, :nama_barang, :qty, :total,:tanggal)";

        $this->db->query($query);
        $this->db->bind('customer', $data['customer']);
        $this->db->bind('supplier', $data['supplier']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('qty', $data['qty']);
        $this->db->bind('total', $data['total']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataTransactions($id)
    {
        $query = "DELETE FROM tb_transactions WHERE id_transactions = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataTransactions($data)
    {
        var_dump($data);
        $query = "UPDATE tb_transactions SET
        id_customer = :id_customer,
        id_supplier = :id_supplier,
        id_barang = :id_barang,
        qty = :qty,
        total = :total,
        tanggal = :tanggal
        WHERE id_transactions = :id_transactions";

        $this->db->query($query);
        $this->db->bind('id_customer', $data['id_customer']);
        $this->db->bind('id_supplier', $data['id_supplier']);
        $this->db->bind('id_barang', $data['id_barang']);
        $this->db->bind('qty', $data['qty']);
        $this->db->bind('total', $data['total']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('id_transactions', $data['id_transactions']);
        $this->db->execute();

        return $this->db->rowCount();
    }

 }


?>