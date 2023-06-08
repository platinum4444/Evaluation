<?php
require_once './MVC/Models/user.php';
require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function submitForm($data)
    {
        $this->userModel->saveUserData($data['first-name'], $data['last-name'], $data['company'], $data['country'], $data['prefix'], $data['phone'], $data['email']);
    }

    public function sendMail($data, $to, $subject, $message)
{
    $firstName = $data['first-name'];
    $lastName = $data['last-name'];
    $company = $data['company'];
    $country = $data['country'];
    $prefix = $data['prefix'];
    $phoneNumber = $data['phone'];
    $emailAddress = $data['email'];

    $message .= "User registered with this data:\nName: $firstName $lastName\n";
    $message .= "Company: $company\n";
    $message .= "Country: $country\n";
    $message .= "Prefix: $prefix\n";
    $message .= "Phone Number: $phoneNumber\n";
    $message .= "Email Address: $emailAddress\n";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPDebug = 2;
        $mail->SMTPAuth = true;
        $mail->Username = '';
        $mail->Password = '';

        $mail->setFrom('', '');
        $mail->addAddress('');

        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
    } catch (Exception $e) {
        echo "Error sending email: " . $mail->ErrorInfo;
    }
}

} 
?>
    
        
