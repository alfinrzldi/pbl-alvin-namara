<section class="w-full">
    <!-- Bagian Carousel -->
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-52 md:h-52 lg:h-96 overflow-hidden rounded-sm">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/images/carousel/Keripik Pisang Lumer.png"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-52 lg:h-96"
                    alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/images/carousel/Banana Lava & Banana Crispy Nugget.png"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-52 lg:h-96"
                    alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/images/carousel/Header.png"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-52 lg:h-96"
                    alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/images/carousel/Keripik Seblak.png"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-52 lg:h-96"
                    alt="...">
            </div>
        </div>
        <!-- Slider indicators -->

</section>



<!-- Bagian Category -->
<section>
    <div>
        <h3 id="category" class="flex justify-center font-bold text-2xl md:text-4xl mt-6 text-button">
            Category
        </h3>
    </div>

    <div class="p-1 flex flex-wrap items-center justify-center  ">
        <?php foreach ($kategoris as $index => $kategori) {
            ?>
            <div class="flex-shrink-0 m-6 relative overflow-hidden <?= $index % 2!= 0 ? 'bg-pinknamara' : 'bg-button' ?> rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64"
                data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                    style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                        fill="white" />
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                        style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                    </div>
                    <img class="relative w-40" src="/assets/images/card/<?= $kategori['photo']?>" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Category</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">
                            <?= $kategori['nama_kategori'] ?>
                        </span>
                        <a href="">
                            <button
                                class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button></a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>


<!-- Bagian Produk Test -->
<section>
    <div>
        <h3 id="produk" class="flex justify-center font-bold text-2xl md:text-4xl mt-6 text-button">
            Produk Kami
        </h3>
    </div>

    <div class="p-1 flex flex-wrap items-center justify-center">
<?php foreach ($produks as $index => $produk) { 
        ?>
        <div class="flex-shrink-0 m-6 relative overflow-hidden rounded-xl bg-gray-500 max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64"
            data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
            <div class="relative pt-10 px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40 h-[215px]" src="assets/images/card/<?= $produk['photo']?>" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block opacity-75 -mb-1">Produk</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">
                    <?= $produk['nama_produk'] ?>
                    </span>
                    
                    <a href="">
                        <button
                            class="bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button>
                    </a>
                </div>
            </div>
        </div>
<?php } ?>
    </div>
</section>


