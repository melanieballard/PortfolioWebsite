<?php

namespace app\models;
use app\core\Model;
use app\core\Database;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$_ENV = parse_ini_file(filename: '../.env');

class User

{
    use Model;

    public function email($postData){

        if (isset($postData['firstName'], $postData['lastName'], $postData['email'], $postData['subject'], $postData['message'])) {
            // Get form data
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            // Concatenate first and last name
            $name = $firstName . ' ' . $lastName;

            // Set recipient email address (change to your desired email address)
            $to = "melanieb.1379@gmail.com";

            // PHPMailer configuration
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // SMTP server address
                $mail->SMTPAuth = true;
                $mail->Username = "melanieb.1379@gmail.com"; // SMTP username
                $mail->Password = $_ENV["GMAIL"]; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587; // TCP port to connect to

                //Recipients
                $mail->setFrom($email, $name);
                $mail->addAddress($to);

                // Content
                $mail->isHTML(false); // Set email format to plain text
                $mail->Subject = $subject;
                $mail->Body    = $message;

                // Send email
                $mail->send();
                echo "Email sent successfully!";
            } catch (Exception $e) {
                http_response_code(500); // Server error
                echo "Failed to send email. Error: {$mail->ErrorInfo}";
            }
        } else {
            http_response_code(400); // Bad request
            echo "Error: Invalid request.";
        }
    }
}