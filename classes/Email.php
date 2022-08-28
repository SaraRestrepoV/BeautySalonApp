<?php 

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;
    
    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {

        // create a new object
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = 'a49ff0c52df0d2';
        $phpmailer->Password = '004557aac0e518';
    
        $phpmailer->setFrom('accounts@appsalon.com');
        $phpmailer->addAddress('accounts@appsalon.com', 'BeautyAppSalon.com');
        $phpmailer->Subject = 'Confirm your account';

        // Set HTML
        $phpmailer->isHTML(TRUE);
        $phpmailer->CharSet = 'UTF-8'; 
        $phpmailer->Body = "
        <html>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');
        h2 {
            font-size: 25px;
            font-weight: 500;
            line-height: 25px;
        }
    
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
    
        p {
            line-height: 18px;
        }
    
        a {
            position: relative;
            z-index: 0;
            display: inline-block;
            margin: 20px 0;
        }
    
        a button {
            padding: 0.7em 2em;
            font-size: 16px !important;
            font-weight: 500;
            background: #000000;
            color: #ffffff;
            border: none;
            text-transform: uppercase;
            cursor: pointer;
        }
        p span {
            font-size: 12px;
        }
        div p{
            border-bottom: 1px solid #000000;
            border-top: none;
            margin-top: 40px;
        }
    </style>
    <body>
        <h1>BeautySalonApp</h1>
        <h2>Thank you for registering!</h2>
        <p>Please confirm your email address so you can start enjoying all BeautySalonApp services.</p>
        <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'><button>Check</button></a>
        <p>If you have not registered with BeautySalonApp, please ignore this email.</p>
        <div><p></p></div>
        <p><span>This email was sent from a notification-only address that cannot accept incoming email. Please do not reply to this message.</span></p>
    </body>
    </html>";
    
        //Enviar el mail
        $phpmailer->send();
    }

    public function enviarInstrucciones() {
        
        // create a new object
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = 'a49ff0c52df0d2';
        $phpmailer->Password = '004557aac0e518';
    
        $phpmailer->setFrom('cuentas@appsalon.com');
        $phpmailer->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $phpmailer->Subject = 'Reset your account';

        // Set HTML
        $phpmailer->isHTML(TRUE);
        $phpmailer->CharSet = 'UTF-8'; 
        $phpmailer->Body = "
        <html>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');
        h2 {
            font-size: 25px;
            font-weight: 500;
            line-height: 25px;
        }
    
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
    
        p {
            line-height: 18px;
        }
    
        a {
            position: relative;
            z-index: 0;
            display: inline-block;
            margin: 20px 0;
        }
    
        a button {
            padding: 0.7em 2em;
            font-size: 16px !important;
            font-weight: 500;
            background: #000000;
            color: #ffffff;
            border: none;
            text-transform: uppercase;
            cursor: pointer;
        }
        p span {
            font-size: 12px;
        }
        div p{
            border-bottom: 1px solid #000000;
            border-top: none;
            margin-top: 40px;
        }
    </style>
    <body>
        <h1>BeautySalonApp</h1>
        <h2>Hello, " . $this->nombre . ". Forgot your password? don't worry</h2>
        <p>To reestablish your account click on the following link</p>
        <a href='http://localhost:3000/recuperar?token=" . $this->token . "'><button>Remember password</button></a>
        <p>If you did not ask for a password change, ignore this e-mail.</p>
        <div><p></p></div>
        <p><span>This email was sent from a notification-only address that cannot accept incoming email. Please do not reply to this message.</span></p>
    </body>
    </html>";
    
        //Enviar el mail
        $phpmailer->send();
    }
}