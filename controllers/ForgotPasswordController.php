<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
class ForgotPasswordController
{ 
    public function index()
   {
    view("public/forgotpassword");
   }

   public function send() {
    $mail = new PHPMailer(true);
    $email = $_POST['email'];
    $token = hash("sha256", bin2hex(random_bytes(16)));

    date_default_timezone_set('asia/makassar');
    
    $data = [
        'email' => $email,
        'token' => $token
    ];

    // print_r($email);
    // die;

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'finbot073@gmail.com';                     //SMTP username
        $mail->Password   = 'bpvbiosiaseflfzu';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('finbot073@gmail.com', 'Namara Snack');
        $mail->addAddress($email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset Password From Namara Snack';
        // $mail->Body = 'haii';
        $mail->Body    = '<h1>Click the link below to reset your password</h1>
                            <br>
                            <a href="http://localhost:8000/resetpassword?email=' . $email . '&token=' . $token . '">Reset Password</a>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


   public function reset_password($email, $token)
   {

    $user = $this->model('user')->getUserByEmail($email);
    if (!$user) {
        Flasher::setFlash('email tidak ditemukan', 'silahkan masukkan link yang valid!', 'error');
        header(`Location: 'http:localhost/pbl-mvc-alfin/ForgotPasswordController'`);
        exit;
    }

    if($user['token'] !== $token) {
        Flasher::setFlash('token tidak ditemukan', 'silahkan masukkan link yang valid!', 'error');
        header(`Location:'http:localhost/pbl-mvc-alfin/ForgotPasswordController'`);
        exit;
    }

    $data['email'] = $email;

    view('ForgotPasswordController/index', $data);
   }

   public function verify_reset_password()
   {
    $password = htmlspecialchars($_POST['NewPW']);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $data = [
        'password' =>$password_hash,
        'email' => $_POST['email']
    ];

    if ($this->model('User')->editPassword($data) > 0) {
        Flasher::setFlash('reset password', 'reset password berhasil silahkan login', 'success');
        header(`location:'http:localhost/pbl-mvc-alfin/ForgotPasswordController'`);
    } else {
        Flasher::setFlash('reset password', 'reset password gagal', 'error');
        header(`Location: 'http:localhost/pbl-mvc-alfin/ForgotPasswordController'`);
        exit;

   }
   
}
public function reset()
{
    view('public/resetpassword');
}

}

?>