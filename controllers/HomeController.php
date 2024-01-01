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

            if (isset($_GET['kategori'])) {
                $produks = $produkModel->getProdukByKategori($_GET['kategori']);
            }
            view("public/index", ['produks' => $produks, 'kategoris' => $kategoris]);
        }
    }

    public function detail($id)
    {
        if (isset($_SESSION['role_user'])) {
            $produkModel = new Produk();
            $produk = $produkModel->findById($id);
            view("public/detailproduk", ['produk' => $produk]);
        } else {
            header("Location: /login");
        }
    }

    public function checkout()
    {
        $checkoutdata = [
            'nama_produk' => $_POST['nama_produk'],
            'harga' => $_POST['harga'],
            'quantity' => $_POST['quantity'],
        ];

        view("public/checkout", ["checkoutdata" => $checkoutdata]);
    }

    public function sendwhatsapp()
    {
        $nama_produk = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $quantity = $_POST['quantity'];
        $nama_pemesan = $_POST['nama'];
        $no_handphone = $_POST['no_hp'];
        $informasi = $_POST['informasi'];
        $tanggal = date("Y/m/d");

        $pesan = urlencode("🛒 **Konfirmasi Pembelian**\nRincian Pesanan :\n📅 Nama Pemesan : $nama_pemesan\nNo Handphone Pemesan : $no_handphone\n📅 Tanggal Pembelian: $tanggal\n🛍️ Produk:\nNama Produk : $nama_produk\nJumlah : $quantity\nTotal Pesanan : " . $harga * $quantity . "\nInformasi tambahan : $informasi");

        header("Location: "."https://api.whatsapp.com/send?phone=6283150165410&text=$pesan");
    }

    public function profile()
    {
        view("public/profile");
    }
}
?>