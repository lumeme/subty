<?php

include 'cors.php';
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$data = new stdClass; //Data es un objeto vacio
if (isset($_POST)) {
    $data2 = json_decode(file_get_contents("php://input"), TRUE); //Recibe el contenido del post
    //Vars
    $data->name = htmlspecialchars($data2['name']);
    $data->email = htmlspecialchars($data2['email']);
    $data->phone = htmlspecialchars($data2['phone']);
    $data->message = htmlspecialchars($data2['message']);
    //Vars
    if ($data->email != "" && $data->name != "" && $data->phone != "" && $data->message != "") {
        if (filter_var($data->email, FILTER_VALIDATE_EMAIL)) {
            $mail = new PHPMailer(true); //Mail es un nuevo objeto mail, el objeto mail viene de la libreria PHPMailer
            try {

                //                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP(); //Send using SMTP
                $mail->CharSet = 'UTF-8';
                $mail->Host = 'in-v3.mailjet.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth = true;                                   //Enable SMTP authentication
                $mail->Username = 'e5be97b51e9a178511f46c87ced2eea8';                     //SMTP username
                $mail->Password = '9e2a4876b7eb9c53ed29e9d0d9493f04';                               //SMTP password
                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure =PHPMailer::ENCRYPTION_STARTTLS`
                //Set sender
                $mail->setFrom('info@subty.studio', 'Subty Studio');
                //Add a recipients
                $mail->addAddress('info@subty.studio', 'Subty Studio');
                $mail->addAddress('iglesiaslucia008@gmail.com', 'Lucia Iglesias');
                // $mail->addAddress('joacolinares2003@gmail.com', 'Joaquin Linares');
                $mail->addReplyTo($data->email, $data->name);
                //End recipients
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Subty';
                $mail->Body = "<h2>Recibiste un nuevo contacto desde SUBTY:</h2>
                                      <strong>Nombre:</strong> $data->name <br>
                                      <strong>Email:</strong> $data->email <br>
                                      <strong>Telefono:</strong> $data->phone <br>
                                      <strong>Mensaje:</strong> $data->message <br>
                                    ";
                $mail->send();

                $data->return = true;
                $data->info = "Mensaje enviado correctamente";
            } catch (Exception $e) {
                $data->info = "Ocurrió un problema al enviar el email. Error: {$mail->ErrorInfo}";
                $data->return = false;
            }
        } else {
            $data->info = 'Por favor ingrese un email válido';
            $data->return = false;
        }
    } else {
        $data->info = 'Por favor complete todos los campos para continuar';
        $data->return = false;
    }
    $dataRes = [
        'inf' => [
            'result' => $data->return,
            'info' => $data->info
        ]
    ];
    echo json_encode($dataRes);
}
