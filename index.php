
<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, user-escalable=no, initial-scale=1 maximun-scale=1 minimun-scale=1">
		<meta charset="UTF-8">
		<title>REPOSITORIO</title>

		 <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/slider/estilos.css">
		<link rel="stylesheet" href="css/cursos/estilos.css">
		<link rel="stylesheet" href="css/slider.css">
          
	</head>
	<body>
		<header>
			
		
            <br>

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
            <a href="#" class="active" >Inicio</a>
            <a href="cursos.html">Curso</a>
             <a href="Ranking.html">Ranking</a>
              <a href="reportecurso.php">Reportes</a>
              <a href="Noticias.html">Noticias</a>
               <a href="Nosotros.html">Nosotros</a>
                <a href="Contactame.html">Contactenos</a>
                  <a href="enviarcorreo.php" >enviar correo</a>
                <a href="logout.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>

            </div>
                
        </nav>
        <div class="container-all">

        <input type="radio" id="1" name="image-slide" hidden/>
        <input type="radio" id="2" name="image-slide" hidden/>
        <input type="radio" id="3" name="image-slide" hidden/>
        <input type="radio" id="4" name="image-slide" hidden/>
        <input type="radio" id="5" name="image-slide" hidden/>
        <input type="radio" id="6" name="image-slide" hidden/>

        <div class="slide">

            <div class="item-slide">
                <img src="img/imagenslider/imagen1.jpg">
            </div>

            <div class="item-slide">
                <img src="img/imagenslider/imagen2.jpg">
            </div>

            <div class="item-slide">
                <img src="img/imagenslider/imagen3.png">
            </div>
            <div class="item-slide">
                <img src="img/imagenslider/imagen4.jpg">
            </div>
            <div class="item-slide">
                <img src="img/imagenslider/imagen5.png">
            </div>
            <div class="item-slide">
                <img src="img/imagenslider/imagen6.jpg">
            </div>

        </div>

        <div class="pagination">
           
            <label class="pagination-item" for="1">
                <img src="img/imagenslider/imagen1.jpg">
            </label>
            
            <label class="pagination-item" for="2">
                <img src="img/imagenslider/imagen2.jpg">
            </label>
            
            <label class="pagination-item" for="3">
                <img src="img/imagenslider/imagen3.png">
            </label>

            <label class="pagination-item" for="4">
                <img src="img/imagenslider/imagen4.jpg">
            </label>

            <label class="pagination-item" for="5">
                <img src="img/imagenslider/imagen5.png">
            </label>

            <label class="pagination-item" for="6">
                <img src="img/imagenslider/imagen6.jpg">
            </label>
            
        </div>
        
    </div>
    <section id="bienvenidos">
            <div class="contenedor">
                <br><h2>BIENVENIDOS A NUESTROS CURSOS</h2>
                <p>En esta parte encontraran todo acerca de nuestro cursos mas importantes del momento para una mejor enseñanza y aprendizaje hacia sus alumnos</p>
                </div>
            </section>
            
            <section id="blog">
                <h3>Lo último de nuestros Cursos</h3>
                <div class="contenedor">
                    <article>
                        <img src="img/imagencursos/blackboard.jpg">
                        <!--<h4>Plataforma Virtual Blackboard</h4>-->
                    </article>
                    <article>
                        <img src="img/imagencursos/zoom.jpg">
                        <!--<h4>Plataforma Virtual Zoom</h4>-->
                    </article>
                    <article>
                        <img src="img/imagencursos/moodle.jpg">
                        <!--<h4>Plataforma Virtual Moodle</h4>-->
                    </article>
                    <article>
                        <img src="img/imagencursos/udemy.png">
                        <!--<h4>Plataforma Virtual Udemy</h4>-->
                    </article>
                    <article>
                        <img src="img/imagencursos/edmodoo.jpg">
                        <!--<h4>Plataforma Virtual Edmodo</h4>-->
                    </article>	
                    <article>
                        <img src="img/imagencursos/schoology.jpg">
                        <!--<h4>Plataforma Virtual Schoology</h4>-->
                    </article>
                    <article>
                        <img src="img/imagencursos/clarolinee.jpg">
                        <!--<h4>Plataforma Virtual Claroline</h4>-->
                    </article>
                    <article>
                        <img src="img/imagencursos/chamilo.jpg">
                        <!--<h4>Plataforma Virtual Chamilo</h4>-->
                    </article>
                   
                </div>
            </section>
                <section id="blog">
                <h3>Preguntas Frecuentes</h3>
                <div class="contenedor">
                    <h4 class="pregunta">¿Las plataformas virtuales contenidas en este repositorio contienen otros idiomas?</h4>
                    <p class="pregunta">Todos las plataformas vistas en este repositorio tienen una version en español e ingles y algunas incluyen otros idiomas</p>
                    <h4 class="pregunta">¿El contenido de los videos estan en español?</h4>
                    <p class="pregunta">Todo el contenido de este repositorio esta hecho en español entre ellos los videos.</p>
                    <h4 class="pregunta">¿Cómo puedo verificar mi aprendizaje antes de iniciar a utilizar alguna pataforma virtual contenida ene ste repositorio?</h4>
                    <p class="pregunta">Al finalizar cada curso te evaluaran con casos practicos que han sido explicados claramente en los videos. El 99% de los docentes que terminaron algun curso no han tenido problemas en iniciar con el uso de dichas plataformas virtuales.</p>
                    <h4 class="pregunta">¿Al terminiar los cursos hay alguna certificación?</h4>
                    <p class="pregunta">Las certificaciones no estan disponibles en estos cursos ya que la empresa que adquirio este repositorio lo hizo para el uso exclusivo de sus docentes y en beneficio de sus estudiantes.</p>
                </div>
                <div class="contenedor">
                    <a href="preguntas frecuentes.html">Ver más</a>
                </div>
            </section>
             <div class="col-md-4 col-md-offset-4">
                <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  chat-icon="https://freesvg.org/img/1538298822.png"
  intent="WELCOME"
  chat-title="Repositorio Web"
  agent-id="6b339584-95b4-429c-80a6-5f692267b415"
  language-code="es"
></df-messenger>
            </div>
           
</header>
	</body>

</html>