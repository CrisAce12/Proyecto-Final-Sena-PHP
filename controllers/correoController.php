<?php

    session_start();

    require('../views/templates/header.php');

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $accion = $_POST["accion"];

        if($accion=="enviarCorreo"){

            $destinatario = "crisace52@gmail.com";
                
            $nombre = "nombre";
            $asunto = "asunto";
            $mensaje = "mensaje";
            
            $header = "From: crisace52@gmail.com"."\r\n"."Reply-To: noreply@example.com"."\r\n"."X-Mailer: PHP/". phpversion();
            
            $mensajeCompleto = $mensaje."\nAtentamente: ".$nombre;

            mail($destinatario,$asunto,$mensajeCompleto,$header);

            header('Location:landingController.php');

        } 
        else{

            header('Location:landingController.php');

        }

    }
    elseif($_SERVER["REQUEST_METHOD"]=="GET"){

        require('../views/correo/correo.php');

    }

    require('../views/templates/footer.php');

?>