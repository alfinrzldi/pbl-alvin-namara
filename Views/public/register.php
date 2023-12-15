<div class="bg-gradient-to-r from-gray-300 to-pink-200 min-h-screen flex flex-col justify-center items-center">
<a href="/">
            <h1 class="text-4xl font-regular text-center text-button mb-2" >Namara<span class="font-light text-buttontext" >Snack</span></h1>
        </a>    
<div class="bg-yellow-300 rounded-3xl shadow-lg p-8 w-[80%] lg:w-1/3">
        <a href="index.html">
            <h1 class="text-3xl font-regular text-center text-gray-900 mb-8">Register</h1>
        </a>
        <form action="/registerUser" class="space-y-6" method="POST">
            <div>
                <label class="block text-gray-900 font-regular  mb-2" for="username" >
                    Username
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="email" name="email"
                   required type="email">
            </div>
            <div>
                <label class="block text-gray-900 font-regular mb-2" for="password">
                    Password
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="password" name="password"
                    required type="password">
            </div>
            <div>
                <label class="block text-gray-900 font-regular mb-2" for="password2">
                    Konfirmasi Password
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="password2" name="password2"
                    required type="password">
            </div>
            <div class="flex justify-around">
            </div>
            <div>
                <button class="-mt-10 w-full text-gray-900 border-2 border-gray-700 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    type="submit">
                    Register
                </button>
            </div>
            <div class="mt-5" >
            <a href="/login"
                        class="text-gray-500 focus:outline-none focus:underline transition duration-150 ease-in-out ">Already Have an Account? <span class="text-gray-900 hover:text-blue-800 focus:outline-none focus:underline transition duration-150 ease-in-out " > Sign In </span>
                        </a>
                        </div>
        </form>
    </div>
</div>