<?php 

  class Customer_model {
    private $table = 'tb_customer';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCustomer()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getCustomerById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_customer=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataCustomer($data)
    {
        $query = "INSERT INTO tb_customer
        VALUES
        ('', :nama, :alamat, :kota, :email, :no_telepon)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telepon', $data['no_telepon']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataCustomer($id)
    {
        $query = "DELETE FROM tb_customer WHERE id_customer = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataCustomer($data)
    {

        $query = "UPDATE tb_customer SET
        nama = :nama,
        alamat = :alamat,
        kota = :kota,
        email = :email,
        no_telepon = :no_telepon
        WHERE id_customer = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telepon', $data['no_telepon']);
        $this->db->bind('id', $data['id_customer']);
        $this->db->execute();

        return $this->db->rowCount();
    }

}


?>