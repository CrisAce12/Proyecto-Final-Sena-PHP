<?php
    
    session_start();

    require('../views/templates/header.php');

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $accion = strval($_POST['accion']);
        
        if($accion == 'buscar'){

            

        }else {
            
            require('../views/index.php');

        }

    }else{

        $accion = strval($_GET['accion']);

        switch ($accion) {
            
            case 'inicio':
                require('../views/index.php');
            break; 
            
            case 'libro':
                header("Location:libroController.php");
            break;    

            case 'tramite':
                header("Location:tramiteController.php");
            break;    

            case 'noticia':
                header("Location:noticiaController.php");
            break;    

            case 'usuario':
                header("Location:usuarioController.php");
            break;
            
            case 'login':
                header("Location:loginController.php");
            break;

            case 'registro':
                header("Location:registerController.php");
            break;

            case 'privacidad':
                require('../views/privacyPolicy/index.php');
            break;

            default:
                require('../views/index.php');
                break;
        }

    }

    require('../views/templates/footer.php');
    
?>