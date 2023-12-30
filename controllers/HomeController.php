<?php
require_once 'Models/Kategori.php';
require_once 'models/Produk.php';
class HomeController
{ 
    public function index()
    {
        if (isset($_SESSION['role_user']) && $_SESSION['role_user'] === 1) {
            view("dashboard/index");
        } else { 
            $kategoriModel = new Kategori();
            $kategoris = $kategoriModel->findAll();

            $produkModel = new Produk();
            $produks = $produkModel->findAll();

            if(isset($_GET['kategori'])){
                $produks = $produkModel->getProdukByKategori($_GET['kategori']);
            }
            view("public/index", ['produks' => $produks, 'kategoris' => $kategoris]);
        } 
    }

    public function detail($id)
    {
        if (isset($_SESSION['role_user']) && $_SESSION['role_user'] === 1) {
            view("dashboard/index");
        } else { 
            $produkModel = new Produk();
            $produk = $produkModel->findById($id);
            view("public/detailproduk", ['produk' => $produk]);
        } 
    }

    

    public function profile()
    {
       view("public/profile");
}
}
?>