<div class="bg-gradient-to-r from-gray-300 to-pink-200 min-h-screen flex flex-col justify-center items-center">
    <a href="/">
        <h1 class="text-4xl font-regular text-center text-button mb-2">Namara<span
                class="font-light text-buttontext">Snack</span></h1>
    </a>
    <div class="bg-yellow-300 rounded-3xl   p-8 w-[80%] lg:w-1/4">
        <a href="index.php">
            <h1 class="text-3xl font-regular text-center text-black mb-5 ">Checkout</h1>
        </a>
        <form class="space-y-6" action="/sendwhatsapp" method="POST">
            <input type="hidden" name="nama_produk" value="<?=$checkoutdata['nama_produk']?>">
            <input type="hidden" name="harga" value="<?=$checkoutdata['harga']?>">
            <input type="hidden" name="quantity" value="<?=$checkoutdata['quantity']?>">
            <div>
                <label class="block text-gray-900 font-regular mb-2" for="email">
                    No Handphone
                </label>
                <input id="no_hp" name="no_hp" type="text" placeholder="No Handphone"
                    class=" w-full text-white px-4 py-2 rounded-lg border bg-gray-800 border-gray-300 text-gray-900">
            </div>
            <div>
                <label class="block text-gray-900 font-regular mb-2" for="nama">
                    Nama
                </label>
                <input id="nama" name="nama" type="text" placeholder="Nama" required
                    class="w-full px-4 py-2 text-white rounded-lg border border-gray-400 bg-gray-800">
            </div>
            <div>
                <label class="block text-gray-900 font-regular mb-2" for="informasi">
                </label>
                <textarea cols="10" rows="3" id="informasi" name="informasi" type="text"
                    placeholder="Informasi Tambahan Pesanan" required
                    class="w-full px-4 py-2 text-white rounded-lg border border-gray-400 bg-gray-800"></textarea>
            </div>

            <div>
                <button type="submit"
                    class="-mt-10 w-full text-gray-900 border-2 border-gray-700 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Pesan Disini</button>
            </div>
        </form>
    </div>
</div>