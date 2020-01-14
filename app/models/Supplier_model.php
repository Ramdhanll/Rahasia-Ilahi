<?php 

  class Supplier_model {
    private $table = 'tb_supplier';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSupplier()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSupplierById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_supplier=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataSupplier($data)
    {
        $query = "INSERT INTO tb_supplier
        VALUES
        ('', :supplier, :alamat, :kota, :email, :no_telepon)";

        $this->db->query($query);
        $this->db->bind('supplier', $data['supplier']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telepon', $data['no_telepon']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSupplier($id)
    {
        $query = "DELETE FROM tb_supplier WHERE id_supplier = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataSupplier($data)
    {

        $query = "UPDATE tb_supplier SET
        supplier = :supplier,
        alamat = :alamat,
        kota = :kota,
        email = :email,
        no_telepon = :no_telepon
        WHERE id_supplier = :id";

        $this->db->query($query);
        $this->db->bind('supplier', $data['supplier']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telepon', $data['no_telepon']);
        $this->db->bind('id', $data['id_supplier']);
        $this->db->execute();

        return $this->db->rowCount();
    }

  }

  
?>