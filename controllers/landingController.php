<?php
    require('../views/templates/header.php');

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $accion = strval($_POST['accion']);

        if($accion == null || $accion == ''){

            require('../views/index.php');
    
        }
        elseif($accion == 'inicio'){
            
            require('../views/index.php');

        }
        elseif($accion == 'libro'){

            header("Location:libroController.php");

        }
        elseif($accion == 'tramite'){

            header("Location:tramiteController.php");

        }
        elseif($accion == 'noticia'){

            header("Location:noticiaController.php");

        }
        elseif($accion == 'usuario'){

            header("Location:usuarioController.php");

        }
        elseif($accion == 'buscar'){

            

        }

    }else{

        require('../views/index.php');

    }

    require('../views/templates/footer.php');
    
?>