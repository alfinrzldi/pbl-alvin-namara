<header>
  <?php include 'layouts/_header.php'; ?>
</header>

<body>

<div class="bg-white w-full flex flex-col gap-5 px-3 md:px-16 lg:px-28 md:flex-row text-[#161931]">
    
    <main class="w-full min-h-screen py-1 md:w-2/3 lg:w-3/4">
        <div class="p-2 md:p-4">
            <div class="w-full sm:max-w-xl sm:rounded-lg">
                <h1 class="text-3xl" >
                    Profile
                    <?= $_SESSION['username'] ?>
                </h1>
                <div class="text-lg" >
                <small>
                    Silahkan Masukkan Untuk Memperbarui Profil
                </small>
                </div>
                    </div>

                    <div class="items-center  text-[#202142]">

                    

                        <div class="mb-2 sm:mb-6">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                email</label>
                            <input type="email" id="email"
                                class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                placeholder="Email" required>
                        </div>

                        <div class="mb-2 sm:mb-6">
                            <label for="profession"
                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Profession</label>
                            <input type="password" id="password"
                                class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                placeholder="Password" required>
                        </div>

                        <div class="mb-6">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Bio</label>
                            <textarea id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-indigo-900 bg-indigo-50 rounded-lg border border-indigo-300 focus:ring-indigo-500 focus:border-indigo-500 "
                                placeholder="Write your bio here..."></textarea>
                        </div>

                        <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-3 pt-0">Roles</legend>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="adminRadio" value="1"
                            ${user.role==1 ? 'checked' : '' }>
                        <label class="form-check-label" for="adminRadio">Admin</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="gridRadios2" value="0"
                            ${user.role==0 ? 'checked' : '' }>
                        <label class="form-check-label" for="gridRadios2">User</label>
                    </div>
                </div>
            </fieldset>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="text-white bg-indigo-700  hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Save</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


</body>

                <?php include 'layouts/_footer.php'; ?>