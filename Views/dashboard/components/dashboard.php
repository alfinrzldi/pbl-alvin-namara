<div class="container mx-auto">
    <div class="m-6">
        <div class="flex flex-wrap mx-6 gap-4 md:gap-0">
            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-green-400">
                    <div class="p-3 rounded-full bg-green-600 bg-opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">Kategori</h4>
                        <p class="text-2xl">
                            <?= count($kategoris); ?>
                        </p>
                        <p class="text-sm"><a href="kategori.html" class="">Lihat Detail</a></p>
                    </div>
                </div>
            </div>

            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-blue-400">
                    <div class="p-3 rounded-full bg-blue-600 bg-opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                            </path>
                            <circle cx="10.5" cy="19.5" r="1.5"></circle>
                            <circle cx="17.5" cy="19.5" r="1.5"></circle>
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">Produk </h4>
                        <p class="text-2xl">
                            <?= count($produks); ?>
                        </p>
                        <p class="text-sm"><a href="kategori.html" class="">Lihat Detail</a></p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>