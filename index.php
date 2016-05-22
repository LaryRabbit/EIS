<!DOCTYPE html>
<html>
	<head>
        <!--SCRIPT PARA LOS ANUNCIOS-->
		
        <script type="text/javascript">
              var images2 = new Array();
                    images2[0] = "./Img/anuncio1.png";
                    images2[1] = "./Img/anuncio2.png";
                    images2[2] = "./Img/anuncio3.png";
              var x = 0;

              function changeImage() {
                document.getElementById('ad').src = images2[x];
                if (x < 2) {
                  x += 1;
                } else {
                  x = 0;
                }
              }
              window.onload = function() {
                setInterval(function () {
                  changeImage();
                }, 3000);
              }
        </script><!--FIN DE SCRIPT PARA ANUNCIOS-->
        
		<title>EIS</title>
		<meta charset="utf-8">
		<script type="text/javascript" src="./Scr/jquery-2.2.0.js"></script>
		<script type="text/javascript" src="./Scr/moment.min.js"></script>
		<script type="text/javascript" src="./Scr/bootstrap.js"></script>
		<script type="text/javascript" src="./Scr/bootstrap-datetimepicker.js"></script>
		<link type="text/css" rel="stylesheet" href="./Css/bootstrap.css">
		<link type="text/css" rel="stylesheet" href="./Css/letras.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<?php
		include("Modelo/abre_conexion.php");
		?>
		<div class="container-fluid" style="padding-bottom:9px;" id="header">
			<img src="./Img/SEP.png" height="64px" style="float:left; padding-left:15px;">
			<img class="img-head" src="./Img/logoIPNGris.png" style="float:right; padding-top:15px; padding-right:15px;">
		</div>

		<nav class="navbar navbar-inverse navbar-static-top" style="height:84px;" id="top-bar">
			<div class="container-fluid" style="padding-left:51px; padding-right:51px;">
				<div class="navbar-header">
					<a class="navbar-brand" href=".">
						<img id="logoSGCE" src="./Img/logoSGCE.png">
					</a>
					<div style="padding-top:33px;">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-bar" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
				</div>

				<div class="collapse navbar-collapse" id="header-bar">
					<ul class="nav navbar-nav navbar-right" style="padding-top:12px;">

						<?php
						if (isset($_COOKIE["cargo"])) {
						?>
						<?php if($_COOKIE["cargo"]==1){ ?>

						<!--  Administrador NO NECESITAMOS EST PARTE PERO DEJALA-->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span><img src="./Img/bookmarkGreen.png" height="30px"></span> Administrador<span class="caret"></span>
							</a>
							<ul class="dropdown-menu dark">
								<li><a href="./Vista/AdministrarDepartamentos.php">
									<span><img src="./Img/Admin_Dep.png" height="36px"></span>
									Administrar departamentos
									</a></li>
								<li><a href="./Vista/AdministrarAreas.php">
									<span><img src="./Img/Admin_Area.png" height="36px"></span>
									Administrar areas
									</a></li>
								<li><a href="./Vista/AdministrarCuentas.php">
									<span><img src="./Img/Admin_Cont.png" height="36px"></span>
									Administrar cuentas
									</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span><img src="./Img/user0.png" height="45px" hspace="15px"></span> Welcome<span class="caret"></span>
							</a>
							<ul class="dropdown-menu dark">
								<li><a href="./Vista/CambiarContrasena.php">
									<span><img src="./Img/Edit2.png" height="36px"></span>
									Change password
									</a></li>
								<li><a href="cierra_sesion.php">
									<span><img src="./Img/Out.png" height="36px"></span>
									Log out
									</a></li>
							</ul>
						</li>


						<?php }else{?> 


						<! Personal administrativo AHORA LLAMADO USUARIO REGISTRADO, el visitante no puede hacer nada-->                    

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span><img src="./Img/bookmarkGreen.png" height="30px"></span> User<span class="caret"></span>
							</a>
							<ul class="dropdown-menu dark">
								<li><a href="./Vista/Calendario.php">
									<span><img src="./Img/333.png" height="36px"></span>
									Encrypt file
									</a></li>
								<li><a href="./Vista/VerInformesYS.php">
									<span><img src="./Img/22.png" height="36px"></span>
									Decrypt file
									</a></li>
								<li><a href="./Vista/SolicitudesCita.php">
									<span><img src="./Img/11.png" height="36px"></span>
									PDFario
									</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span><img src="./Img/loginiGreen.png" height="30px"></span> Welcome<span class="caret"></span>
							</a>
							<ul class="dropdown-menu dark">
								<li><a href="./Vista/CambiarContrasena.php">
									<span><img src="./Img/Edit2.png" height="36px"></span>
									Change password
									</a></li>
								<li><a href="cierra_sesion.php">
									<span><img src="./Img/Out.png" height="36px"></span>
									Log out
									</a></li>
							</ul>
						</li>



						<?php } ?>


						<?php
						}else{
						?>

						<!--  Visitante -->
						<li class="">
							<a href="Vista/IniciarSesion.php">
                                Sign in
								<span><img src="./Img/logo.png" height="45px" hspace="15px"></span> 
							</a>
						</li>

						<?php
						}			
						?>
					</ul>
				</div>
			</div>
		</nav>

		<div id="main-content" class="container-fluid" align="center" style="padding-bottom: 50px;">
			<div class="container col-md-12" style="margin-bottom: 20px;">
				<img id="ad" src="anuncio.png" class="img-responsive" alt="Responsive image" >
			</div>
			<div class="row" style="margin-top: 50px; margin-bottom: 20px;">
				<div class="col-md-4 col-md-offset-1" align="left">
					<h4>
						<p><strong>Contact information</strong></p>
						<p><strong>Address:</strong><br>
							Av. Juan de Dios Bátiz esq. Av. Miguel Othón de Mendizábal,
							Col. Lindavista. Demarcación Territorial Gustavo A. Madero.
							Ciudad de México C.P. 07738
						</p>
						<p><strong>E-mail:</strong><br>
							pandapps@outlook.com
						</p>						
						<p><strong>Contributors:</strong><br>
							Nathaniel Cabrera Herrera<br>
                            N. Larissa Jiménez Samaniego<br>
                            Etnan J. Lopez Torres
						</p>
					</h4>
				</div>
				<div class="col-md-4 col-md-offset-2" align="left">
					<h4><p><strong>Location map</strong></p></h4>
					<div id="map">
					</div>
				</div>
				<script>
					function initMap() {
						var mapDiv = document.getElementById('map');
						var map = new google.maps.Map(mapDiv, {
							center: {lat: 19.5043238, lng: -99.146794},
							zoom: 17,
						});
					}
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer>
				</script>
			</div>
		</div>

		<nav class="navbar navbar-inverse navbar-fixed-bottom" id="bottom-bar">
			<div class="container-fluid" style="padding-right:51px;">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#footer-bar" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="footer-bar">
					<ul class="nav navbar-nav navbar-right">
						<p class="navbar-text">@2016 PandApps Inc.</p>
						<a class="navbar-brand" href="https://www.facebook.com/siePandas">
							<img src="./Img/fb3.png" height="24px">
						</a>
						<a class="navbar-brand" href="https://twitter.com/escomunidad?ref_src=twsrc%5Etfw">
							<img src="./Img/twitter1.png" height="24px">
						</a>
						<a class="navbar-brand" href="https://plus.google.com/u/0/109607303416604816797/posts">
							<img src="./Img/google+.png" height="24px">
						</a>
					</ul>
				</div>
			</div>
		</nav>		

		<script type="text/javascript">
			$(document).ready(function (){
				// Sticky bar plz
				$(window).scroll(function() {
					if ($(window).scrollTop() >= $("#header").height()) {
						$("#top-bar").addClass("navbar-fixed-top");
						$("#main-content").css({"padding-top":"90px"});
					}
					else {
						$("#top-bar").removeClass("navbar-fixed-top");
						$("#main-content").css({"padding-top":"0px"});
					}
				});

				if ($(window).width() <= 886) {
					$("#top-bar").removeAttr("style");
				}

				$(window).resize(function() {
					if ($(window).width() > 886) {
						$("#top-bar").attr({"style":"height:84px;"});
					}
					else {
						$("#top-bar").removeAttr("style");
					}
				}); 
			});
		</script>

	</body>
</html>
