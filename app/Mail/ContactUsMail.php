<?php

namespace App\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactUsMail
{
    public function sendMail($to, $subject, $body)
    {
        $mail = new PHPMailer(true);

        try {
       
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                       
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'rahulsingh54231@gmail.com';                
            $mail->Password   = 'hvjrngaierhmyfgu';                   
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
            $mail->Port       = 587;                                   

            $mail->setfrom('rishishekhawat.img@gmail.com', 'Rishi');
            $mail->addAddress($to);                                     
            $mail->isHTML(true);                                       
            $mail->Subject = $subject;
            $mail->Body    = $body;

            $mail->send();
            return 'Your Request has been sent';
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}