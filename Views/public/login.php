<div class="bg-gradient-to-r from-gray-300 to-pink-200 min-h-screen flex flex-col justify-center items-center">
<a href="/">
            <h1 class="text-4xl font-regular text-center text-button mb-2" >Namara<span class="font-light text-buttontext" >Snack</span></h1>
        </a>
    <div class="bg-yellow-300 rounded-3xl   p-8 w-[80%] lg:w-1/4">
    <a href="index.php">
            <h1 class="text-3xl font-regular text-center text-black mb-5 ">Sign In</h1>
        </a>
        <form class="space-y-6" action="/verifylogin" method="POST">
            <div>
                <label class="block text-gray-900 font-regular mb-2" for="email">
                    Email
                </label>
                <input id="email" name="email" type="email" placeholder="Email"
                    class=" w-full text-white px-4 py-2 rounded-lg border bg-gray-800 border-gray-300 text-gray-900">
            </div>
            <div>
                <label class="block text-gray-900 font-regular mb-2" for="password">
                    Password
                </label>
                <input id="password" name="password" type="password"  placeholder="Password" required
                    class="w-full px-4 py-2 text-white rounded-lg border border-gray-400 bg-gray-800">
            </div>
            <div class="flex justify-around">
                <div class="">
                    <a href="/register"
                        class="text-gray-800 hover:text-blue-500 focus:outline-none focus:underline transition duration-150 ease-in-out">Buat
                        Akun</a>
                </div>
                <div class="">
                    <a href="#"
                        class="text-gray-800 hover:text-blue-500 focus:outline-none focus:underline transition duration-150 ease-in-out">Lupa
                        password?</a>
                </div>
            </div>
            <div>
            <button type="submit" class="-mt-10 w-full text-gray-900 border-2 border-gray-700 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign In</button>
            </div>
        </form>
    </div>
</div>