<!DOCTYPE html>
<html lang="es">
  <head>
     <title>REPOSITORIO</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="" />
   
    <link href="css/bootstrap.css" rel="stylesheet">
   
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">
   
    <link href="css/estiloscorreo.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
  </head>


  <body>

      <div class="header-top">
        <div class="container">
          
        </div>
      </div>
      <div class="logo-wrap">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
              <a href="index.html">
                <img class="img-fluid" src="img/logo.png" alt="">
              </a>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
              <h1>BIENVENIDOS AL RESPOSITORIO WEB</h1>
            </div>
          </div>
        </div>
      </div>
    <nav class="menu-principal">
            <a href="index.php"  >Inicio</a>
            <a href="cursos.html">Curso</a>
             <a href="Ranking.html">Ranking</a>
              <a href="reportes.html">Reportes</a>
               <a href="Noticias.html">Noticias</a>
               <a href="Nosotros.html" >Nosotros</a>
                <a href="Contactame.html">Contactenos</a>
                <a href="#" class="active">enviar correo</a>
                 <a href="logout.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
        </nav>
        <h1>Formulario de envio de correos</h1>
        <div class="contact">
        <div class="contact-main">
        <form method="post">
        <h3>Tu correo electrónico</h3>
        <input type="email" placeholder="tu_correo" class="hola"  name="customer_email" required />
        
        <h3>Tu nombre</h3>
        <input type="text" placeholder="nombre" class="hola"  name="customer_name" required />
        <h3>Asunto</h3>
        <input type="text" placeholder="asunto" class="hola"  name="subject" required />
        <h3>Mensaje</h3>
        <textarea  name="message" placeholder="mensaje" required /></textarea>
     <?php
            if (isset($_POST['send'])){
                include("sendemail.php");//Mando a llamar la funcion que se encarga de enviar el correo electronico
                
                /*Configuracion de variables para enviar el correo*/
                $mail_username="72866529@continental.edu.pe";//Correo electronico saliente ejemplo: tucorreo@gmail.com
                $mail_userpassword="72866529J";//Tu contraseña de gmail
                $mail_addAddress="jlopezpalomino1996@gmail.com";//correo electronico que recibira el mensaje
               

                $template="email_template.html";//Ruta de la plantilla HTML para enviar nuestro mensaje
                
                /*Inicio captura de datos enviados por $_POST para enviar el correo */
                $mail_setFromEmail=$_POST['customer_email'];
                $mail_setFromName=$_POST['customer_name'];
                $txt_message=$_POST['message'];
                $mail_subject=$_POST['subject'];
                
                sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_setFromName,$mail_addAddress,$txt_message,$mail_subject,$template);//Enviar el mensaje
            }
        ?>
    </div>
    <div class="enviar">
        <div class="contact-check">
            
        </div>
        <div class="contact-enviar">
          <input type="submit" value="Enviar mensaje" name="send">
        </div>
        <div class="clear"> </div>
        </form>
</div>
</div>

  </body>
  <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</html>