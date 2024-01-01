<div class="bg-gradient-to-r from-gray-300 to-pink-200 min-h-screen flex flex-col justify-center items-center">
<a href="/">
            <h1 class="text-4xl font-regular text-center text-button mb-2" >Namara<span class="font-light text-buttontext" >Snack</span></h1>
        </a>    
<div class="bg-yellow-300 rounded-3xl shadow-lg p-8 w-[80%] lg:w-1/3">
        <a href="index.html">
            <h1 class="text-3xl font-regular text-center text-gray-900 mb-8">Forgot Password</h1>
        </a>
        <form action="/resetpassword/reset" class="space-y-6" method="POST">
            <input type="hidden" name="id" value="<?=$user['id']?>">
            <div>
                <label class="block text-gray-900 font-regular mb-2" for="password">
                    Password
                </label>
                <input class="w-full px-4 py-2 text-white rounded-lg border bg-gray-800 border-gray-400" id="password" name="password"
                    required type="password" placeholder="Password" >
            </div>
            <div class="flex justify-around">
            </div>
            <div>
                <button class="-mt-10 w-full text-gray-900 border-2 border-gray-700 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    type="submit">
                    Go
                </button>
           
        </form>
    </div>
</div>