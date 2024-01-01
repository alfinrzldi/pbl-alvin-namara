
  <?php include 'layouts/_header2.php'; ?>




<section class="text-gray-700 body-font overflow-hidden bg-gray-100 border">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap border border-gray-500 p-9 bg-gray-200 rounded-xl">
      <img alt="ecommerce" class="flex  w-56 h-72  object- object-center rounded"
        src="http://localhost/pbl-mvc-alfin/assets/images/card/<?= $produk['photo'] ?>">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">Nama Produk</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">
          <?= $produk['nama_produk'] ?>
        </h1>
        <p class="leading-relaxed">
          <?= $produk['deskripsi'] ?>
        </p>
        <div class="mt-10 -mb-5">

        </div>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">


          <div class="flex ml-6 items-center">

            <div class="relative">

              <span
                class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
              </span>
            </div>
          </div>
        </div>
        <!-- Form Tambah Produk -->
        <form action="/checkout" method="POST" class="mt-6">
          <input type="hidden" name="harga" value="<?= $produk['harga'] ?>">
          <input type="hidden" name="nama_produk" value="<?= $produk['nama_produk'] ?>">

          <label for="quantity" class="block text-sm font-medium text-gray-600">Jumlah:</label>
          <span class="title-font font-medium text-2xl text-gray-900">Rp.
            <?= $produk['harga'] ?>
          </span>
          <br>
          <input type="number" id="quantity" name="quantity" min="1" class="w-16 p-2 border border-gray-300 rounded-md">
          <button type="submit" class="mt-4 px-4 py-2 bg-yellow-700 text-white rounded-md">Pesan Disini</button>
          <div class="flex">
          </div>
      </div>
    </div>
</section>

<footer>
  <?php include 'layouts/_footer2.php'; ?>
</footer>