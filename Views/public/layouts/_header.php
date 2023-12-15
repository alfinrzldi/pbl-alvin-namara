<nav class="  w-full z-20 top-0 start-0 border-b border-gray-200 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="assets/images/icon/logo-namara.png" class="h-8" alt="NamaraSnack Logo">
        <span class="self-center font-semibold whitespace-nowrap text-button text-lg lg:text-3xl">Namara<span class="font-light text-buttontext">Snack</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <div class="mr-4 gap-2 mt-[6px] flex justify-between" >
      <a href="<?= isset($_SESSION['role_user']) ? '/profile' : '/login' ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
    </a>
    <a href="">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg> 
    </a>
    </div>
       <a href="<?= isset($_SESSION['role_user']) ? '/logout' : '/login' ?>">
        <button type="button" class="text-white bg-yellow-500 hover:bg-yellow-800 hover:text-black hover:duration-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center"><?= isset($_SESSION['role_user']) ? 'Logout' : 'Login   ' ?></button> </a>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-end justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
        
        <li>
          <a href="/" class="block py-2 px-3 text-black rounded md:text-black md:hover:text-blue-700 lg:text-black md:p-2 lg:p-2" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#category" class="block py-2 px-3 text-black rounded md:hover:rounded-xl md:hover:text-blue-700 md:p-2 lg:p-2">Category</a>
        </li>
        <li>
          <a href="#produk" class="block py-2 px-3 text-black rounded md:hover:rounded-xl md:hover:text-blue-700 md:p-2 lg:p-2">Produk</a>
        </li>
        <li>
          <a href="#footer" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-2 lg:p-2">Contact</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>