<?php
require_once 'Models/Produk.php';
require_once 'Models/Kategori.php';

class ProdukController
{

    private $produkModel;

    public function __construct()
    {
        $this->produkModel = new Produk();
    }

    public function index()
    {
        $produks = $this->produkModel->findAll();

        view('dashboard/index', ['produks' => $produks, 'page' => 'produk']);
    }


    public function save()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['nama_produk'];

            $targetDirectory = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/card/';
            $targetFile = $targetDirectory . basename($_FILES['photo']['name']);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            $allowedExtensions = ['jpg', 'jpeg', 'png'];
            if (!in_array($imageFileType, $allowedExtensions)) {
                $_SESSION['flash_message'] = "Gagal Gambar Harus jpg, jpeg dan png";
                header('Location: /dashboard/produks');
                die;
            }

            if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
                $_POST['photo'] = basename($_FILES['photo']['name']);
            } else {
                $_POST['photo'] = '';
            }

            $result = $this->produkModel->store($_POST);
            if ($result === true) {
                $message = [
                    'tipe' => 'success',
                    'pesan' => 'Data berhasil disimpan!',
                ];
            } else {
                // Handle exceptions thrown from produkModel's save method
                $message = [
                    'tipe' => 'error',
                    'pesan' => $result,
                ];
            }

            $_SESSION['flash_message'] = $message;
            header('Location: /dashboard/produks');
        }

    }

    public function update()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (!empty($_FILES['photo']['tmp_name'])) {
                $targetDirectory = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/card/';
                $targetFile = $targetDirectory . basename($_FILES['photo']['name']);
                $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                $allowedExtensions = ['jpg', 'jpeg', 'png'];
                if (!in_array($imageFileType, $allowedExtensions)) {
                    $_SESSION['flash_message'] = "Gagal Gambar Harus jpg, jpeg dan png";
                    header('Location: /dashboard/produks');
                    die;
                }

                if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
                    $_POST['photo'] = basename($_FILES['photo']['name']);
                } else {
                    $_POST['photo'] = '';
                }

                print_r($_FILES['photo']['tmp_name']);
                print_r($_POST['photo']);
            }
            
            $result = $this->produkModel->edit($_POST);
            if ($result === true) {
                $message = [
                    'tipe' => 'success',
                    'pesan' => 'Data berhasil diperbarui!',
                ];
            } else {
                // Handle exceptions thrown from produkModel's save method
                $message = [
                    'tipe' => 'error',
                    'pesan' => $result,
                ];
            }

            $_SESSION['flash_message'] = $message;
            header('Location: /dashboard/produks');
        }
    }

    public function delete($id)
    {
        $result = $this->produkModel->destroy($id);
        if ($result === true) {
            $message = [
                'tipe' => 'success',
                'pesan' => 'Data berhasil dihapus!',
            ];
        } else {
            // Handle exceptions thrown from produkModel's save method
            $message = [
                'tipe' => 'error',
                'pesan' => $result,
            ];
        }

        $_SESSION['flash_message'] = $message;
        header('Location: /dashboard/produks');
    }
}

?>