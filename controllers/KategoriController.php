<?php
require_once 'Models/Kategori.php';

class KategoriController
{

    private $kategoriModel;

    public function __construct()
    {
        $this->kategoriModel = new Kategori();
    }

    public function index()
    {
        $kategoris = $this->kategoriModel->findAll();

        view('dashboard/index', ['kategoris' => $kategoris, 'page' => 'kategori']);
    }

    public function save()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nama = $_POST['nama_kategori'];
            
            $targetDirectory = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/card/';
            $targetFile = $targetDirectory . basename($_FILES['photo']['name']);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            $allowedExtensions = ['jpg', 'jpeg', 'png'];
            if (!in_array($imageFileType, $allowedExtensions)) {
                $_SESSION['flash_message'] = "Gagal Gambar Harus jpg, jpeg dan png";
                header('Location: /dashboard/kategoris');
                die;
            }

            if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
                $data = [
                    'nama_kategori' => $nama,
                    'photo' => basename($_FILES['photo']['name'])
                ];
            } else {
                $data = [
                    'nama_kategori' => $nama,
                    'photo' => ''
                ];
            }

           
            $result = $this->kategoriModel->store($data);
        }   
        if ($result === true) {
            $message = [
                'tipe' => 'success',
                'pesan' => 'Data berhasil disimpan!',
            ];
        } else {
            // Handle exceptions thrown from kategoriModel's save method
            $message = [
                'tipe' => 'error',
                'pesan' => $result,
            ];
        }

        $_SESSION['flash_message'] = $message;
        header('Location: /dashboard/kategoris');
    }

    public function update()
    {
        $result = $this->kategoriModel->edit($_POST);
        if ($result === true) {
            $message = [
                'tipe' => 'success',
                'pesan' => 'Data berhasil diperbarui!',
            ];
        } else {
            // Handle exceptions thrown from kategoriModel's save method
            $message = [
                'tipe' => 'error',
                'pesan' => $result,
            ];
        }

        $_SESSION['flash_message'] = $message;
        header('Location: /dashboard/kategoris');
    }

    public function delete($id)
    {
        $result = $this->kategoriModel->destroy($id);
        if ($result === true) {
            $message = [
                'tipe' => 'success',
                'pesan' => 'Data berhasil dihapus!',
            ];
        } else {
            // Handle exceptions thrown from kategoriModel's save method
            $message = [
                'tipe' => 'error',
                'pesan' => $result,
            ];
        }

        $_SESSION['flash_message'] = $message;
        header('Location: /dashboard/kategoris');
    }
}

?>