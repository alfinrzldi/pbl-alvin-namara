<div class="max-w-4xl mx-auto mt-10">
  <div class="text-center">
    <h1 class="text-4xl font-bold mb-6 text-button">Dashboard Produk</h1>
  </div>

  <div class="mb-3 rounded-full p-2">
    <button data-modal-target="produkModal" data-modal-toggle="produkModal"
      class="produk-tambah text-white bg-yellow-500 hover:bg-yellow-800 hover:text-black hover:duration-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2"
      type="button">
      Tambah Produk
    </button>
  </div>
  <!-- Tabel Produk -->
  <div class="bg-white overflow-hidden shadow-md rounded-lg w-auto p-2" style="overflow-x:auto;" >
    <table class=" sm:w-full divide-gray-200" id="table_produk">
      <thead class="">
        <tr class="">
          <th scope="col" class="px-6 py-5 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">ID
          </th>
          <th scope="col" class="px-6 py-5 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
            Kategori</th>
          <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
            Produk</th>
          <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
            Harga
          </th>
          <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
            Deskripsi
          </th>
          <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
            Photo</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <!-- isi tabel dihandle ajax melalui API -->
      </tbody>
    </table>
  </div>
</div>

<div id="produkModal" tabindex="-1" aria-hidden="true"
  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
  <div class="relative p-4 w-full max-w-md max-h-full">
    <!-- Modal content -->
    <div class="relative bg-gray-400 rounded-lg shadow">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t bg-button">
        <h3 class="text-lg font-semibold text-gray-900" id="modal-header">
          Tambah Produk
        </h3>
        <button type="button"
          class="text-gray-800 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-toggle="produkModal">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <form class="p-4 md:p-5 bg-button" action="produk/save" method="POST" enctype="multipart/form-data">
        <div id="modal-content">
          <!-- dari javascript -->
        </div>
        <button type="submit" id="submit"
          class="text-white inline-flex items-center bg-gray-800 hover:bg-gray-400 hover:duration-75 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
          <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
              clip-rule="evenodd"></path>
          </svg>
          Simpan
        </button>
      </form>
    </div>
  </div>
</div>
<script>
  function getCategoryName(kategori) {
    switch (kategori) {
      default:
        return 'Pisang';
    }
  }
  //isi tabel body dinamis
  $.ajax({
    url: '/api/produks',
    type: 'GET',
    success: function (response) {
      const tbody = response.map((item, index) => `
            <tr>
                <td class='text-center' >${index + 1}</td>
                <td class='text-center' >${item.nama_kategori
        }</td>
                <td class='text-center' >${item.nama_produk}</td>
                <td class='text-center' >${item.harga}</td>
                <td class='text-center' >${item.deskripsi}</td>
                <td class='text-center' ><img src="/assets/images/card/${item.photo}" alt="Foto " width="100" height="100"></td>
                
                <td class='py-3' >
                    <button type='button' class='focus:outline-none text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2.5 mt-5 ml-10 produk-edit' data-modal-target='produkModal' data-modal-toggle='produkModal' data-bs-id='${item.id}'><i class='bi bi-pencil-square'></i>Edit</button>
                    <button type='button' class='focus:outline-none text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-5  ml-10 produk-delete' data-modal-target='produkModal' data-modal-toggle='produkModal' data-bs-id='${item.id}'><i class='bi bi-trash'></i>Hapus</a>
                </td>
            </tr>
        `).join('');
      $('#table_produk tbody').append(tbody);
    }
  });

  document.addEventListener('DOMContentLoaded', function () {
    $.ajax({
      url: '/api/produks',
      type: 'GET',
      success: function (response) {

        $(".produk-tambah").on("click", function () {
          $.ajax({
            url: '/api/kategoris',
            type: 'GET',
            success: function (response) {
              $("#modal-header").text("Tambah Produk");
              $("#modal-content").html(`
                            <input type="hidden" name="id">
                            <div class="grid gap-4 mb-4 grid-cols-2">
                              <div class="col-span-2">

                              <label for="nama_produk" class="block mb-2 text-sm font-bold text-gray-900">Kategori</label>
            <select class="form-select" id="kategori_select" name="kategori_id"
                                aria-label="Kategori Select">
                            </select>
                            
                                <label for="nama_produk" class="block mb-2 text-sm font-bold text-gray-900">Nama
                                  Produk</label>
                                <input type="text" name="nama_produk" id="nama_produk"
                                  class="bg-gray-800 border border-gray-300 text-white text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                  placeholder="Nama Produk" required="">

                                 


                                  <label for="harga" class="block pt-5 mb-2 text-sm font-bold text-gray-900">Harga</label>
                                <input type="text" name="harga" id="harga"
                                  class="bg-gray-800 border border-gray-300 text-white text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                  placeholder="Harga" required="">

                                  <label for="deskripsi" class="block pt-5 mb-2 text-sm  font-bold text-gray-900">Deskripsi</label>
                                <input type="" name="deskripsi" id="deskripsi"
                                  class="bg-gray-800 border border-gray-300 text-white text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                  placeholder="Deskripsi" required="">

                                  <label for="photo" class=" mt-5 block mb-2 text-sm font-bold text-gray-900">Upload Photo</label>
                                  <input type="file" name="photo" id="photo"
                                  class="bg-gray-800 border border-gray-300 text-white text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                  required="">
                              </div>  
                            </div>
                            `);
              $("#submit").html("Simpan");
              $("form").attr("action", "produk/save");
              let kategoriSelect = $('#kategori_select');
              kategoriSelect.empty();
              kategoriSelect.append('<option>Pilih Kategori</option>');

              response.forEach(function (kategori) {
                kategoriSelect.append(`<option value="${kategori.id}">${kategori.nama_kategori}</option>`);
              });
            }
          });
        });
        $(".produk-edit").on("click", function () {
          const userId = $(this).data('bs-id');
          $.ajax({
            url: '/api/kategoris',
            type: 'GET',
            success: function (responses) {
          const produk = response.find(item => item.id === userId);
          $("#modal-header").text("Edit Produk");
          $("#modal-content").html(`
            <input type="hidden" name="id" value="${produk.id}">
            <div class="grid gap-4 mb-4 grid-cols-2">
              <div class="col-span-2">

              <label for="nama_produk" class="block mb-2 text-sm font-bold text-gray-900">Kategori</label>
            <select class="form-select" id="kategori_select" name="kategori_id"
                                aria-label="Kategori Select" value="${produk.kategori_id}">
                            </select>
             

                <label for="nama_produk" class="block mb-2 text-sm font-bold text-gray-800">Nama
                  Produk</label>
                <input type="text" name="nama_produk" id="nama_produk"
                  class="bg-gray-800 border border-gray-300 text-gray-100 text-sm rounded-lg  block w-full p-2.5"
                  placeholder="Nama Produk" required="" value="${produk.nama_produk}">

                  <label for="harga" class="block pt-3 mb-2 text-sm font-bold text-gray-800 ">Harga</label>
                <input type="text" name="harga" id="harga"
                  class="bg-gray-800 border border-gray-300 text-gray-100 text-sm rounded-lg  block w-full p-2.5"
                  placeholder="Harga" required="" value="${produk.harga}">

                  <label for="deskripsi" class="block pt-3 mb-2 text-sm font-bold text-gray-800 ">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi"
                  class="bg-gray-800 border border-gray-300 text-gray-100 text-sm rounded-lg  block w-full p-2.5"
                  placeholder="deskripsi" required="" value="${produk.deskripsi}">

                  <label for="photo" class="block pt-3 mb-2 text-sm font-bold text-gray-800 ">Ganti Foto</label>
                <input type="file" name="photo" id="photo"
                  class="bg-gray-800 border border-gray-300 text-gray-100 text-sm rounded-lg  block w-full p-2.5"
                  placeholder="photo" value="${produk.photo}">
              </div>
            </div>
          `);
          $("#submit").html("Update");
          $("form").attr("action", "produk/update");
          let kategoriSelect = $('#kategori_select');
              kategoriSelect.empty();
              

              responses.forEach(function (kategori) {
                kategoriSelect.append(`<option value="${kategori.id}"  ${kategori.id == produk.kategori_id ? 'selected' : ''} >${kategori.nama_kategori}</option>`);
              });
            }
          });
        });

        $(".produk-delete").on("click", function () {
          const userId = $(this).data('bs-id');
          const produk = response.find(item => item.id === userId);
          $("#modal-header").text("Hapus Produk");
          $("#modal-content").html(`<h3 class='text-white mb-5'>Apakah anda ingin menghapus data ${produk.nama_produk} ini ?</h3>`);
          $("#submit").html("Hapus");
          $("form").attr("action", `produk/delete/${produk.id}`);
        });
      }
    });
  });
</script>