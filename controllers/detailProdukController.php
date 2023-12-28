<?php

class DetailProdukController {
    public function index() {
        view('detail/index', ['page' => 'dashboard']);
    }

    public function produk() {
        view('dashboard/index', ['page' => 'produk']);
    }
}
?>