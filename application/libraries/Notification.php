<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Notification {

    var $CI;
    public $mail;

    public function __construct() {
        $this->CI = & get_instance();
    }

    public function sendNotification($subject, $emailParam) {

// echo "string";die;
        try {
            $body = '<html>
            <body>
            <table align="center" style="border: 1px solid #ddd;border-radius: 2px;width: 45%;padding: 0px 14px 15px 14px;">
            <tr>
            <td align="center">
            <br>
            <img>


            </td>

            </tr>
            <tr>
            <td align = "left" style = "font-size: 14px;
            font-family: sans-serif;
            font-weight: 700;
            color: darkgray;
            padding: 0px 10px 0px 12px;
            "> Hello ' . $emailParam['name'] . '
            </td>
            </tr>
            <tr>
            <td>
            <p style = "font-size: 12px;
            font-family: sans-serif;
            font-weight: 700;
            color: black;
            padding: 0px 10px 0px 12px;">
            Thank you for connecting with us. You are always being our priority. Our  support team  will reach you shortly. 
            </p>

            <p style = "font-size: 12px;
            font-family: sans-serif;
            font-weight: 700;
            color: darkgray;
            padding: 0px 10px 0px 12px;">
            Thank you. Have a nice day!
            </p>
            </td>
            </tr>
            </table>
            </body>
            </html>';
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            $mail->isSMTP();
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->SMTPDebug = 0;
          $mail->SMTPAuth = true; // There was a syntax error here (SMPTAuth)
          $mail->SMTPSecure = 'tls';
          $mail->Host = "smtp.gmail.com";
          $mail->Mailer = "smtp";
            $mail->Port = 587;                             // Enable SMTP authentication
            $mail->Username = SENDERMAIL;                 // SMTP username
            $mail->Password = SENDERPASS;

            $mail->SMTPAuth = true; // TCP port to connect to
            $mail->setFrom(SENDERMAIL, COMPONY_NAME_FULL);
            $mail->addAddress($emailParam['email']);               // Name is optional
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->send();
            // print_r($mail);
           // echo 'Message has been sent';
        } catch (Exception $e) {
            return false;
        }
//        die;
    }

    public function sendNotificationAdmin($subject, $emailData) {
//        echo $ImgPath;
//        die;
        try {
            $body = '<html>
            <body>
            <table align = "center" style = "border: 1px solid #ddd;border-radius: 2px;width: 45%;padding: 0px 14px 15px 14px;">
            <tr>
            <td align="center">
            <br>
            <img >



            </td>

            </tr>
            <tr>
            <td align = "left" style = "font-size: 14px;
            font-family: sans-serif;
            font-weight: 700;
            color: darkgray;
            padding: 0px 10px 0px 12px;
            ">

            Hello Admin
            </td>
            </tr>
            <tr>
            <td>
            <p style = "font-size: 12px;
            font-family: sans-serif;
            font-weight: 700;
            color: black;
            padding: 0px 10px 0px 12px;">


            New Enquiry found  <br>
            Visitor Details:

            </p>
            <b>Name</b>: ' . $emailData['name'] . '<br>
            <b>Email</b>: ' . $emailData['email'] . '<br>

            <b>User Message</b> :'.$emailData['msg']. '<br>


            </td>
            </tr>
            </table>
            </body>
            </html>';
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            $mail->isSMTP();
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->SMTPDebug = 0;
          $mail->SMTPAuth = true; // There was a syntax error here (SMPTAuth)
          $mail->SMTPSecure = 'tls';
          $mail->Host = "smtp.gmail.com";
          $mail->Mailer = "smtp";
          $mail->Port = 587;       
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = SENDERMAIL;                 // SMTP username
            $mail->Password = SENDERPASS;
            // $mail->AddCC = CCMAIL;
            $mail->SMTPAuth = true; // TCP port to connect to
            $mail->setFrom(SENDERMAIL,COMPONY_NAME_FULL);
            $mail->addAddress(COMPONY_EMAIL);
//             if (!empty($ImgPath)) {
// //                echo "in";
// //                die;
//                 $mail->AddAttachment($ImgPath);
//             }// Name is optional
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->send();
            // echo "sent";
        } catch (Exception $ex) {
            return false;
        }
    }

}

?>