<?php 
  require_once('conexion/conexion.php');  
  $query = 'SELECT * FROM usuarios ORDER BY id DESC'; 
  $usuarios=$mysqli->query($query);
  
if(isset($_POST['create_pdf'])){
  require_once('tcpdf/tcpdf.php');
  
  $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
  
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('Miguel Caro');
  $pdf->SetTitle($_POST['reporte_name']);
  
  $pdf->setPrintHeader(false); 
  $pdf->setPrintFooter(false);
  $pdf->SetMargins(20, 20, 20, false); 
  $pdf->SetAutoPageBreak(true, 20); 
  $pdf->SetFont('Helvetica', '', 10);
  $pdf->addPage();

  $content = '';
  
  $content .= '
    <div class="row">
          <div class="col-md-12">
              <h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
        
      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th>DNI</th>
            <th>A. PATERNO</th>
            <th>A. MATERNO</th>
            <th>NOMBRES</th>
            <th>CURSO</th>
            
          </tr>
        </thead>
  ';
  
  
  while ($user=$usuarios->fetch_assoc()) { 
      if($user['activo']=='A'){  $color= '#f5f5f5'; }else{ $color= '#fbb2b2'; }
  $content .= '
    <tr bgcolor="'.$color.'">
            <td>'.$user['dni'].'</td>
            <td>'.$user['paterno'].'</td>
            <td>'.$user['materno'].'</td>
            <td>'.$user['nombres'].'</td>
            <td>'.$user['curso'].'</td>
            
        </tr>
  ';
  }
  
  $content .= '</table>';
  
  $content .= '
    <div class="row padding">
          <div class="col-md-12" style="text-align:center;">
              <span>Pdf Creator </span><a href="http://www.redecodifica.com">By Alexis De La Torre Ruiz</a>
            </div>
        </div>
      
  ';
  
  $pdf->writeHTML($content, true, 0, true, 0);

  $pdf->lastPage();
  $pdf->output('Reporte.pdf', 'I');
}

?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>REPORTES </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
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
    <link href="css.estilos/bootstrap.min.css" rel="stylesheet">
    <link href="css.estilos/style.css" rel="stylesheet">
    
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
              <a href="#" class="active">Reportes</a>
               <a href="Noticias.html">Noticias</a>
               <a href="Nosotros.html">Nosotros</a>
                <a href="contactame.html" >Contactenos</a>
                   <a href="enviarcorreo.php" >enviar correo</a>
                 <a href="logout.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
            
        </nav>
        <div class="imagen">
      <ul id="dx">
        <li><img src="img/imagen10.jpg" alt=""></li>
      </ul> 
      
    </div>
    <div class="container-fluid">
        <div class="row padding">
          <div class="col-md-12">
              <?php $h1 = "Reporte de Cursos Terminados";  
               echo '<h1>'.$h1.'</h1>'
        ?>
            </div>
        </div>
      <div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>DNI</th>
            <th>A. PATERNO</th>
            <th>A. MATERNO</th>
            <th>NOMBRES</th>
            <th>CURSO</th>
           
          </tr>
        </thead>
        <tbody>
        <?php 
      while ($user=$usuarios->fetch_assoc()) {   ?>
          <tr class="<?php if($user['activo']=='A'){ echo 'active';}else{ echo 'danger';} ?>">
            <td><?php echo $user['dni']; ?></td>
            <td><?php echo $user['paterno']; ?></td>
            <td><?php echo $user['materno']; ?></td>
            <td><?php echo $user['nombres']; ?></td>
            <td><?php echo $user['curso']; ?></td>
       
          </tr>
         <?php } ?>
        </tbody>
      </table>
              <div class="col-md-12">
                <form method="post">
                  <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                  <input type="submit" name="create_pdf" class="btn btn-danger pull-right" value="Generar PDF">
                </form>
              </div>
        </div>
    </div>

  </body>
</html>
