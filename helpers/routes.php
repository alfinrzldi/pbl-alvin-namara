<?php
class Routes {
    public static function getRoutes(): array {
        return [
            '/' => 'HomeController@index',
            '/profile' => 'HomeController@profile',
            '/login' => 'AuthController@loginForm',
            '/logout' => 'AuthController@logout',
            '/verifylogin' => 'AuthController@verifyLogin',
            '/registerUser' => 'AuthController@registerUser',
            '/register' => 'AuthController@registrationForm',
            '/dashboard' => 'DashboardController@index',
            '/detailproduk/(\d+)' => 'HomeController@detail',
            '/kategoriproduk/(\d+)' => 'HomeController@kategoriproduk',
            '/forgotpassword' => 'ForgotPasswordController@index',
            '/forgotpassword/send' => 'ForgotPasswordController@send',
            '/resetpassword' => 'ForgotPasswordController@resetPasswordForm',
            '/resetpassword/reset' => 'ForgotPasswordController@resetPassword',
            '/checkout' => 'HomeController@checkout',
            '/sendwhatsapp' => 'HomeController@sendwhatsapp',

            //Dashboard User
            '/dashboard/users' => 'UserController@index',
            '/dashboard/user/save' => 'UserController@save',
            '/dashboard/user/update' => 'UserController@update',
            '/dashboard/user/delete/(\d+)' => 'UserController@delete',

            //Detail

            //Dashboard Kategori
            // '/dashboard/kategoris' => 'KategoriController@index',
            // '/dashboard/kategori/save' => 'KategoriController@save',
            // '/dashboard/kategori/update' => 'KategoriController@update',
            // '/dashboard/kategori/delete/(\d+)' => 'KategoriController@delete',

            '/dashboard/kategoris' => 'KategoriController@index',
            '/dashboard/kategori/save' => 'KategoriController@save',
            '/dashboard/kategori/update' => 'KategoriController@update',
            '/dashboard/kategori/delete/(\d+)' => 'KategoriController@delete',
            

            //Dashboard Produk
            '/dashboard/produks' => 'ProdukController@index',
            '/dashboard/produk/save' => 'ProdukController@save',
            '/dashboard/produk/update' => 'ProdukController@update',
            '/dashboard/produk/delete/(\d+)' => 'ProdukController@delete',

            //route untuk API disini
            '/api/users' => 'ApiController@getUsers',
            '/api/kategoris' => 'ApiController@getKategoris',
            '/api/kategori/(\d+)' => 'ApiController@getKategoriById',
            '/api/produks' => 'ApiController@getProduks',
        ];
    }
}
?>