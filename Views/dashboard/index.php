<?php
if(!isset($_SESSION['role_user']) || $_SESSION['role_user'] !== 1) {
  echo "403 - Access Forbidden";
  exit;
}
?>

<?php include_once 'layouts/_header.php'; ?>

<div class="container-fluid z-0 min-vh-100">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <?php
      $pageMapping = [
        'produk' => 'components/produk.php',
        'kategori' => 'components/kategori.php',
        'user' => 'components/user.php'
      ];

      // Check if 'page' parameter is set and its value exists in the mapping array
      if(isset($page) && isset($pageMapping[$page])) {
        include_once $pageMapping[$page];
      } else {
        echo '
        <section class="p-24 border-4 border-b-gray-800">
          <div>
        <h3>Dashboard</h3>
          </div>
          <div class="bg-white border-2 p-5 box-border">
            <h4>
          Selamat datang <b>'.$_SESSION['username'].' </b> di NamaraSnack
          </h4>
        </div>
        </section>
        ';
      }
      ;
      ?>

    </main>
  </div>
</div>
<?php include 'layouts/_footer.php'; ?>