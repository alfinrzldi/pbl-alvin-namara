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
            view("public/index", ['produks' => $produks, 'kategoris' => $kategoris]);
        } 
    }

    public function profile()
    {
       view("public/profile");
}
}
?>