<?php 

class Barang_model {
    private $table = 'tb_barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllBarangJoin()
    {
        $this->db->query('SELECT * FROM ' . $this->table.' INNER JOIN tb_supplier ON tb_barang.id_supplier = tb_supplier.id_supplier');;
        return $this->db->resultSet();
    }

    public function getBarangById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_barang=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getBarangByIdJoin($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table.' 
        INNER JOIN tb_supplier ON tb_barang.id_supplier = tb_supplier.id_supplier WHERE ' . $this->table.'.id_supplier= tb_barang.id_supplier');;
        return $this->db->single();
    }

    public function getWhere($id_supplier)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_supplier=:id_supplier');
        $this->db->bind('id_supplier', $id_supplier);
        return $this->db->resultSet();
    }

    public function getWhereHarga($id_barang)
    {
        $this->db->query('SELECT harga_barang FROM ' . $this->table . ' WHERE id_barang=:id_barang');
        $this->db->bind('id_barang', $id_barang);
        return $this->db->single();
    }

    public function tambahDataBarang($data)
    {
        $query = "INSERT INTO tb_barang
        VALUES
        ('', :id_supplier, :nama_barang, :harga_barang, :stock, :berat,:tanggal_masuk)";

        $this->db->query($query);
        $this->db->bind('id_supplier', $data['id_supplier']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('harga_barang', $data['harga_barang']);
        $this->db->bind('stock', $data['stock']);
        $this->db->bind('berat', $data['berat']);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBarang($id)
    {
        $query = "DELETE FROM tb_barang WHERE id_barang = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataBarang($data)
    {
        var_dump($data);
        $query = "UPDATE tb_barang SET
        id_supplier = :id_supplier,
        nama_barang = :nama_barang,
        harga_barang = :harga_barang,
        stock = :stock,
        berat = :berat,
        tanggal_masuk =:tanggal_masuk
        WHERE id_barang = :id";

        $this->db->query($query);
        $this->db->bind('id_supplier', $data['id_supplier']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('harga_barang', $data['harga_barang']);
        $this->db->bind('stock', $data['stock']);
        $this->db->bind('berat', $data['berat']);
        $this->db->bind('tanggal_masuk', $data['tanggal_masuk']);
        $this->db->bind('id', $data['id_barang']);
        $this->db->execute();

        return $this->db->rowCount();
    }

}

  
?>