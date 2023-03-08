<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use App\Models\Patner;
use PHPMailer\PHPMailer\Exception;
//Load composer's autoloader
require 'vendor/autoload.php';

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['patners'] = Patner::all();
        return view('front.index', $data);
    }

    function sendMail(Request $request){
        $subject = $request->input('subject');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                             
        try {
            // Pengaturan Server
           // $mail->SMTPDebug = 2;                                
            $mail->isSMTP();                                   
            $mail->Host = 'smtp.gmail.com';                
            $mail->SMTPAuth = true;                          
            $mail->Username = 'senofcourse@gmail.com';            
            $mail->Password = 'cghzypszizfkfivq';                  
            $mail->SMTPSecure = 'ssl';                           
            $mail->Port = 465;                                 

            // Siapa yang mengirim email
            $mail->setFrom("senofcourse@gmail.com");

            // Siapa yang akan menerima email
            $mail->addAddress('irvankurniawan624@gmail.com', 'Irvan');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);
            
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return view('front.index');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
}
