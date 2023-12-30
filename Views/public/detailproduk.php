<!-- <header>
  <?php include 'layouts/_header2.php'; ?>
</header> -->



<section class="text-gray-700 body-font overflow-hidden bg-gray-100 border">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap border border-gray-500 p-9 bg-gray-200 rounded-xl">
        <img alt="ecommerce" class="flex  w-56 h-72  object- object-center rounded" src="http://localhost/pbl-mvc-alfin/assets/images/card/<?= $produk['photo']?>">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="text-sm title-font text-gray-500 tracking-widest">Nama Produk</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?= $produk['nama_produk']?></h1>
          <p class="leading-relaxed"><?= $produk['deskripsi']?></p>
          <div class="mt-10 -mb-5">
          <span class="text-3xl font-bold">Varian Rasa</span>
        </div>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
            
            <div class="flex">
              
              <button class="border-2 border-gray-700  bg-gray-200 rounded-xl w-20 h-10 focus:outline-none">Pedas</button>
              <button class="border-2 border-gray-700 ml-1 bg-gray-200 rounded-xl w-20 h-10 focus:outline-none">Manis</button>
            </div>
            <div class="flex ml-6 items-center">
            
              <div class="relative">
               
                <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                </span>
              </div>
            </div>
          </div>
          <div class="flex">
            <span class="title-font font-medium text-2xl text-gray-900">Rp.<?= $produk['harga']?></span>
            <button class="flex ml-auto text-white bg-green-500 border-0 py-2 px-6 focus:outline-none  rounded">Pesan Disini</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
<?php include 'layouts/_footer.php'; ?>
</footer>