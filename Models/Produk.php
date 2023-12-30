<?php
require_once('Model.php');

class Produk extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'produk';
    }

    public function getProdukByKategori($kategori_id)
    {
        $query = "SELECT p.* FROM {$this->table} p 
        JOIN Kategori k on p.kategori_id = k.id 
        WHERE k.id = :kategori_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':kategori_id', $kategori_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>