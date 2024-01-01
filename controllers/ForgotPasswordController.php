<?php
require_once 'Models/User.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
class ForgotPasswordController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        view("public/forgotpassword");
    }

    public function send()
    {
        $email = $_POST['email'];
        $user = $this->userModel->getUserByEmail($email);
        if (!$user) {
            $message = [
                'tipe' => 'error',
                'pesan' => 'Email Tidak Terdaftar',
            ];
            $_SESSION['flash_message'] = $message;
            header('Location: /login');
            exit;
        }

        $mail = new PHPMailer(true);
        $token = hash("sha256", bin2hex(random_bytes(16)));

        date_default_timezone_set('asia/makassar');

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $mail->Username = 'finbot073@gmail.com';                     //SMTP username
            $mail->Password = 'bpvbiosiaseflfzu';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('finbot073@gmail.com', 'Namara Snack');
            $mail->addAddress($email);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Reset Password From Namara Snack';
            $mail->Body = '<h1>Click the link below to reset your password</h1>
                            <br>
                            <a href="http://localhost:8000/resetpassword?email=' . $email . '&token=' . $token . '">Reset Password</a>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();

            $result = $this->updateToken($email, $token);

            if ($result == "true") {
                $message = [
                    'tipe' => 'success',
                    'pesan' => 'Silahkan cek Email anda untuk mendapatkan tautan Reset Password',
                ];
            } else {
                $message = [
                    'tipe' => 'error',
                    'pesan' => "Terjadi kesalahan saat menyimpan token untuk email = $email",
                ];
            }


            $_SESSION['flash_message'] = $message;
            header('Location: /login');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function updateToken($email, $token)
    {
        $result = $this->userModel->setTokenUser($email, $token);
        return $result;
    }

    public function resetPasswordForm()
    {
        $user = $this->userModel->verifyToken($_GET['email'], $_GET['token']);

        if (!$user) {
            $message = [
                'tipe' => 'error',
                'pesan' => 'Terjadi Kesalahan Email dan Token tidak sesuai',
            ];
            $_SESSION['flash_message'] = $message;
            header("Location: /login");
        } else {
            view("public/resetpassword", ['user' => $user]);
        }
    }

    public function resetPassword()
    {
        $password = $_POST['password'];
        $id = $_POST['id'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'token' => '',
            'password' => $hashedPassword,
            'id' => $id,
        ];

        $result = $this->userModel->edit($data);
        if ($result === true) {
            $message = [
                'tipe' => 'success',
                'pesan' => 'Reset Password Berhasil! Silahkan login ulang',
            ];
        } else {
            // Handle exceptions thrown from UserModel's save method
            $message = [
                'tipe' => 'error',
                'pesan' => $result,
            ];
        }

        $_SESSION['flash_message'] = $message;
        header('location:/login');
    }

}

?>