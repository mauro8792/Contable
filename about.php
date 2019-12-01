<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php $c=$_GET['c']; ?>
<?php $i=$_GET['i']; ?>
<title>Estudio Contable MTA</title>
<meta name="description" content="">
<meta name="keywords" content="">

<link href="http://fonts.googleapis.com/css?family=Cardo:400italic,400|Lato:400,400italic,700" rel="stylesheet">

<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- favicon.ico and apple-touch-icon.png -->

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="screen.css">
<!-- custom CSS -->
<link rel="stylesheet" href="custom.css">

<!-- All JavaScript at the bottom, except this Modernizr build.  -->
<script src="js/libs/modernizr-2.5.3.min.js"></script>
<script src="js/libs/respond.min.js"></script>					 

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="js/libs/jquery.min.js"></script>
<link rel="stylesheet" href="css/prettyPhoto.css" media="all">
<script src="js/jquery.prettyPhoto.js"></script>
<!-- scripts  -->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/general.js"></script>
<!-- carousel -->
<script src="js/jquery.jcarousel.min.js"></script>
<script src="js/jquery.tools.min.js"></script>
<!-- sliders -->
<script src="js/slides.min.jquery.js"></script>
<!--/ sliders -->
  
</head>
<body style="background-color:#dadada; background-image:url(images/pattern_1.png)">  
<div class="body_wrap">

<div class="header_container">
	<?php include_once("cabeza.php"); ?>

<!-- top Slider/Image -->
<div class="header_image">
	
    <div class="topimage">
		<img src="images/temp/head_image_1.jpg" alt="">
		<div class="caption">
			<p><span>Seremos sus aliados estratégicos...!</span></p>
		</div>
    </div>
    
</div>
<!--/ top Slider/Image -->

</div>

<div class="container">
<!-- middle -->
	

<div id="middle" class="cols2 sidebar_left">
	
    <div class="content" role="main">
	
    
    	<article class="post-item post-detail">
		
        	<?php if ($c==1) { ?>
					<h1>Ideologia:</h1>          
			<?php } elseif ($c==2) { ?>
					<h1>Misión:</h1>      
			<?php } elseif ($c==3) { ?>
					<h1>Visión:</h1>       
			<?php } elseif ($c==4) { ?>
					<h1>Servicios:</h1>         
			<?php } elseif ($c==5) { ?>
					<h1>Herramientas:</h1>          
			<?php } elseif ($c==6) { ?>
					<h1>Nuestros principales clientes:</h1>          
			<?php } else { ?>
					<h1>Ideologia:</h1>          
			<?php } ?>
			
            
			<div class="entry">
                
				
			<?php if ($c==1) { ?>
				<p>La Actualidad de nuestro país y el mundo muestran un escenario altamente competitivo. Se vuelve indispensable contar con herramientas de administración modernas, confiables, rápidas y orientadas al mejor desenvolvimiento del negocio. </p>
				<p>Somos un equipo joven de contadores Públicos y Lic. en Administración que busca la excelencia en las actividades que realiza. Conocedores de las particularidades de esta hermosa ciudad, brindamos a nuestros clientes el apoyo profesional necesario para que ellos puedan volcar en sus negocios toda su energía.</p>
				<p>Seremos sus aliados estratégicos, juntos lograremos obtener los mejores resultados que su idea puede generar. </p>
				<p>Estaremos esperando cualquier consulta o sugerencia. Su idea puede ser un gran negocio. Daremos juntos lo mejor para ello.       </p>
			<?php } elseif ($c==2) { ?>
					<p>Brindar a nuestros clientes un asesoramiento integral de altísima calidad.</p>
				<p>Junto con todos los servicios Contables, Administrativos, Tributarios y Societarios; dar confianza, calidad, agilidad, lealtad, experiencia y la atención personalizada sus emprendimientos necesitan.</p>
				<p>Crearles y fortalecer las herramientas necesarias para que su negocio se vuelva, sólido, confiable y competitivo.</p>    
			<?php } elseif ($c==3) { ?>
					<p>La visión de una empresa es una exposición clara que indica hacia dónde se dirige la empresa a largo plazo y en qué se deberá convertir, tomando en cuenta el impacto de las nuevas tecnologías, de las necesidades y expectativas cambiantes de los clientes, de la aparición de nuevas condiciones del mercado, etc.</p>
				<p>Nuestra visión es ser considerados por nuestros clientes como el primer amigo de su idea. Ser para nuestros clientes y nuestro ámbito de desarrollo, una opinión calificada y confiable.</p>    
			<?php } elseif ($c==4) { ?>		
                    <div class="tabs_framed small_tabs">
                
                    <ul class="tabs">
                        <li><a href="#tabs_2_1">Impuestos</a></li>
                        <li><a href="#tabs_2_2">Contabilidad</a></li>
                        <li><a href="#tabs_2_3">Sueldos y Previsional</a></li>
                        <li><a href="#tabs_2_4">Sociedades</a></li>
                        <li><a href="#tabs_2_5">Consultoria</a></li>
                        <li><a href="#tabs_2_6">Jubilaciones y Pensiones</a></li>
                    </ul>
                    
                    <div id="tabs_2_1" class="tabcontent">
                    	<div class="inner">
						<ul>
							<li>Inicio de la actividad Personas Físicas (Monotributo, Impuesto al Valor Agregado, Impuesto a las Ganancias, Autónomos), y Personas Jurídicas: Sociedades, Asociaciones, Fundaciones, y otras asociaciones.</li>
							<li>Inscripciones ante AFIP y Rentas-Convenio Multilateral y Contribuyentes locales.</li>
							<li>Liquidación de Impuestos a las Ganancias, Bienes Personales, IVA ,Responsables Sustitutos, etc.</li>
							<li>Confección declaraciones juradas informativas (CITI VENTAS, CITI COMPRAS, BIENES REGISTRABLES, etc).</li>
							<li>Liquidación ingresos brutos, convenio multilateral, confección declaraciones juradas anuales.</li>
							<li>Confección planes de facilidades AFIP y Rentas provinciales.</li>
							<li>Contestación de requerimientos AFIP y defensas ante el fisco.</li>
							<li>Modificaciones en las actividades declaradas en las inscripciones de acuerdo a la evolución o transformación que vaya sufriendo el negocio.</li>
							<li>Regímenes de información (RG 4120, CITI Ventas, CITI Compras).</li>
							<li>Recategorización monotributistas.</li>
							<li>Reempadronamiento Autónomos.</li>
							<li>Régimen de información donaciones para entidades que reciban donaciones.</li>
							<li>Atención de requerimientos de organismos de fiscalización y control.</li>
							<li>Pericias impositivas.</li>
							<li>Blanqueos impositivos, Moratorias y Planes de facilidades de pago.</li>
							<li>Actualización permanente en novedades impositivas.</li>
							<li>Asesoramiento Integral Impositivo.</li>
						</ul>
                        </div>
                    </div>
                    
                    <div id="tabs_2_2" class="tabcontent">
                    	<div class="inner">
						<ul>
							<li>Registro Contable de las operaciones del Contribuyente.</li>
							<li>Confección de Balances Anuales.</li>
							<li>Certificaciones e Informes Contables.</li>
							<li>Balances de gestión para tomas de decisiones comerciales.</li>
							<li>Auditorías contables y operativas.</li>
							<li>Implementación de sistemas informáticos contables y de costos.</li>
							<li>Auditorías de Control Interno.</li>
							<li>Reportes Periodicos y Balances de Corte.</li>
							<li>Organización de Sistemas Administrativos.</li>
							<li>Análisis de Estructuras de Costos.</li>
							<li>Flujos de Fondos para análisis Crediticios para Entidades Financieras.</li>
							<li>Copiado de Libros Contables.</li>
							<li>Pericias Contables.</li>
							<li>Asesoramiento Contable Integral.</li>
						</ul>
                        </div>
	              	</div>
                    
                    <div id="tabs_2_3" class="tabcontent">
                    	<div class="inner">
                    	<ul>
							<li>Evaluación de distintas formas de contratación laboral.</li>
							<li>Inscripciones y altas ante AFIP y Sindicatos.</li>
							<li>Tramitación alta temprana empleados.</li>
							<li>Liquidación de sueldos y jornales mensuales o quincenales.</li>
							<li>Registraciones en el Libro Sueldos y Jornales.</li>
							<li>Liquidación Cargas Sociales, confección Formulario 931.</li>
							<li>Boletas de Sindicatos.</li>
							<li>Liquidaciones finales, liquidaciones por despido.</li>
							<li>Asesoramiento integral en materia laboral ley de Contrato de Trabajo.</li>
							<li>Asesoramiento integral en temas previsionales.</li>
							<li>Régimen de trabajadores autónomos.</li>
							<li>Confección planes de facilidades-SICAM.</li>
							<li>Atención de requerimientos de organismos de fiscalización y control.</li>
							<li>Pericias laborales.</li>
							<li>Asesoramiento laboral integral.</li>
						</ul>
                        </div>
                    </div>
                    
                    <div id="tabs_2_4" class="tabcontent">
                    	<div class="inner">
                    	<ul>
							<li>Asesoramiento en la elección del tipo societario más conveniente.</li>
							<li>Asesoramiento en la constitución de la sociedad.</li>
							<li>Trámites ante IGJ.</li>
							<li>Confección de libros Societarios.</li>
							<li>Valuacion de fondos de comercio.</li>
							<li>Valuación de empresas en marcha.</li>							
							<li>Disoluciones, absorciones, fusiones.</li>
						</ul>
                        </div>
                    </div>
                    
                    <div id="tabs_2_5" class="tabcontent">
                    	<div class="inner">
                    	<ul>
							<li><strong><span style="text-decoration: underline;">Analisis Estrategico y de Gestion</span></strong></li>
							<ul>
								<li>Analisis de Estructuras y Escenarios.</li>														
								<li>Analisis Estrategico de crecimiento.</li>
								<li>Indicadores Financieros y Economicos del emprendimiento.</li>
								<li>Herramientas para la toma de decisiones.</li>
							</ul>	
							<li><strong><span style="text-decoration: underline;">Desarrollo de Areas de Gerencia y Administracion</span></strong></li>
							<ul>
								<li>Tableros de Comandos y Masterplaning a medida de cada empresa.</li>
								<li>Herramientas de control de gestion.</li>
								<li>Entreganamiento In Company en tareas gerenciales y administrativas.</li>
								<li>Consultoria en desarrollo de Soft y paginas de Internet.</li>
							</ul>
							<li><strong><span style="text-decoration: underline;">Plan de Negocios e Informes</span></strong></li>
							<ul>
								<li>Confeccion de planes de negocios para su empresa.</li>															
								<li>Preparación de Informes economicos, financieros y comerciales.</li>
								<li>Asesoramiento en formulacion de textos para websites e institucionales.</li>
							</ul>
							<li><strong><span style="text-decoration: underline;">Programas y Mecanismos de Financiamiento</span></strong></li>
							<ul>
								<li>Confeccion de Carpetas Crediticias.</li>															
								<li>Analisis de Flujos de Fondos Propios.</li>
								<li>Analisis de otras formas de financiamiento Internas y Externas.</li>
							</ul>
						</ul>
                        </div>
                    </div>
					
					
                    <div id="tabs_2_6" class="tabcontent">
                    	<div class="inner">
                    	<ul>
							<li>Hombres próximos a cumplir los 65 años.</li>
							<li>Mujeres próximas a cumplir los 60 años.</li>
							<li>Con y Sin Aportes Jubilatorios.</li>
							<li>Reajustes Jubilatorios.</li>
							<li>Amas de Casa.</li>
							<li>Jubilaciones Anticipadas.</li>							
						</ul>
                        </div>
                    </div>
                    
                </div>
				
			<?php } elseif ($c==5) { ?>		
			
			<h3 class="toggle box">AFIP <span class="ico"></span></h3>
                        <div class="toggle_content boxed">
                        <p><a href="http://www.afip.gov.ar" target="_blank">Página Principal - AFIP</a></p>
                        <p><a href="https://auth.afip.gov.ar/contribuyente/?action=SYSTEM&system=coc_contribuyente" target="_blank">Tramites y Operaciones Cambiarias</a></p>
                        <p><a href="https://seti.afip.gob.ar/av/seleccionVencimientos.do" target="_blank">Vencimientos AFIP</a></p>
                        <p><a href="http://www.afip.gov.ar/genericos/Banco/default.asp" target="_blank">Nomina de Banco Habilitados para el pago de impuestos</a></p>
                        <p><a href="https://seti.afip.gob.ar/padron-puc-constancia-internet/ConsultaConstanciaAction.do" target="_blank">Constancia de CUIT o Monotributo</a></p>
                        <p><a href="http://www.afip.gov.ar/genericos/calculoInteres/" target="_blank">Calculo de Intereses Resarcitorios y Punitorios</a></p>
                        <p><a href="http://www.afip.gov.ar/genericos/datos_de_dependencias/agencias/agencias_main.asp" target="_blank">Dirección de las agencias de AFIP </a></p>
                        <p><a href="http://www.afip.gov.ar/genericos/imprentas/facturas.asp" target="_blank">Verificación de validez de comprobantes emitidos</a></p>
                        </div>
			<h3 class="toggle box">ARBA <span class="ico"></span></h3>
                        <div class="toggle_content boxed">
                        <p><a href="https://www.arba.gov.ar" target="_blank">Pagina Principal - ARBA</a></p>
                        <p><a href="https://orion.arba.gov.ar/Login/login?service=http%3A%2F%2Fmarvin.arba.gov.ar%2FAvisoDeudas%2Fsso%2FgenerarAvisoForwardSSO.do" target="_blank">Ingresos Brutos - Consulta de Deuda</a></p>
                        <p><a href="http://www.arba.gov.ar/Informacion/IBrutos/linksIIBB/ConsultaDeducciones.asp?Lugar=E" target="_blank">Ingresos Brutos - Deducciones Informadas</a></p>
                        <p><a href="https://orion.arba.gov.ar/Login/login?service=http%3A%2F%2Fmarvin.arba.gov.ar%2FArbanet%2Fsso%2Finicial%2FcontinuarPreLiq.do" target="_blank">Ingresos Brutos - Anticipo Arbanet</a></p>
                        <p><a href="https://orion.arba.gov.ar/Login/login?service=http%3A%2F%2Fmarvin.arba.gov.ar%2FWebConstancias%2Fseguridad%2FConstancia.do" target="_blank">Ingresos Brutos - Cosntancia de Inscripcion</a></p>
                        <p><a href="http://marvin.arba.gov.ar/AvisoDeudas/?imp=" target="_blank">Automotor-Inmobiliario - Consulta de Deuda</a></p>
                        <p><a href="http://www.arba.gov.ar/DefaultArba.asp?contenidoCentro=http://www.arba.gov.ar/Aplicaciones/Moratorias/PlanesdePago.asp?imp=&lugar=C" target="_blank">Automotor-Inmobiliario - Planes de Pago</a></p>
                        <p><a href="http://orion.arba.gov.ar/Liquidacion/jsp/generarLiquidacion.jsp?imp=&leyenda=Liquidaci%F3n%20con%20beneficios%20del%20plan%20de%20pago,%20deuda%20vencida%20al%2031/12/2011&opcion=2&leyendaBenef=31/12/2010&leyendaBenefActual=Liquidaci%F3n%20con%20beneficios%20del%20plan%20de%20pago,%20cuotas%20desde%2001/01/2012%20al%2031/12/2012&oi=&conc=" target="_blank">Automotor-Inmobiliario - Liquidacion de Contado</a></p>
                        <p><a href="https://orion.arba.gov.ar/Login/login?service=http%3A%2F%2Fmarvin.arba.gov.ar%2FTGBienes%2F" target="_blank">Sellos - Presentacion Declaracion Jurada</a></p>                        
                        </div>

			<h3 class="toggle box">MUNICIPALIDAD DE MAR DEL PLATA <span class="ico"></span></h3>
                        <div class="toggle_content boxed">
                        <p><a href="http://www.mardelplata.gov.ar" target="_blank">Pagina Municipalidad de Gral Pueyrredon</a></p>
                        <p><a href="http://appsvr.mardelplata.gob.ar/consultas/appcontainer/appcontainer.asp?app=ARM_SHCONSUCC" target="_blank">Tasas de Comercio - Cta Cte</a></p>
                        <p><a href="http://www.mardelplata.gob.ar/5009020300" target="_blank">Tasas de Comercio - Declaracion Jurada</a></p>
                        <p><a href="http://appsvr.mardelplata.gob.ar/consultas/appcontainer/appcontainer.asp?app=ARM_SHRELCC" target="_blank">Tasas de Comercio - Reliquidacion Cuotas</a></p>
                        <p><a href="http://appsvr.mardelplata.gob.ar/consultas/appcontainer/appcontainer.asp?app=ARM_SHREEMPADRONA" target="_blank">Tasas de Comercio - Reempadronamiento</a></p>
                        <p><a href="http://appsvr.mardelplata.gob.ar/consultas/appcontainer/appcontainer.asp?app=AUTDEUDA" target="_blank">Automotor - Consulta Consulta de Deuda</a></p>
                        <p><a href="http://appsvr.mardelplata.gob.ar/consultas/appcontainer/appcontainer.asp?app=RELCTAAUTOMOTOR" target="_blank">Automotor - Patente Automotor</a></p>
                        <p><a href="http://marvin.arba.gov.ar/ConsultasGenerales/dominiosMunicipalizados.do" target="_blank">Automotor - Radicación de Vehiculos municipalizados</a></p>
                        </div>
			
			<h3 class="toggle box">TRABAJADORES <span class="ico"></span></h3>
                        <div class="toggle_content boxed">
								<p><a href="http://www.anses.gob.ar" target="_blank">Pagina Principal- ANSES</a></p>                        
                        <p><a href="http://servicioswww.anses.gov.ar/ConstanciadeCuil2/Inicio.aspx" target="_blank">Constancia de CUIL</a></p>
                        <p><a href="http://www.anses.gov.ar/info_util/oficinas/default.php" target="_blank">Delegaciones ANSES</a></p>
                        <p><a href="http://www.sssalud.gov.ar/index/index.php?cat=consultas&opc=bus_os_padron" target="_blank">Padrón de Obras Sociales </a></p>
                        </div>
			

			
			<h3 class="toggle box">BOLETÍN OFICIAL <span class="ico"></span></h3>
                        <div class="toggle_content boxed">
                        <p><a href="http://www.boletinoficial.gov.ar/Inicio/Intro.castle" target="_blank">BOLETÍN OFICIAL</a></p>
                        </div>
			
			<h3 class="toggle box">COTIZACIONES <span class="ico"></span></h3>
                        <div class="toggle_content boxed">
                        <p><a href="http://www.jonestur.com/es/cotizacion-internacional/" target="_blank">Cotizaciones &#8211; Mar del Plata </a></p>
                        <p><a href="http://www.jonestur.com/es/conversor-divisas/#botonera-principal" target="_blank">Conversor de Divisas Mar del Plata</a></p>
                        </div>
			
			
			<?php } elseif ($c==6) { ?>		
				
						<!--	<div class="minigallery-list minigallery boxed">
                            <ul id="mycarouse3" class="jcarousel-skin-tango">
                            	  <li><a href="images/clientes/AMBAR-Hotel.JPG" data-rel="prettyPhoto[mg_2]" title="AMBAR-Hotel"><img src="images/clientes/AMBAR-Hotel.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/Ariana.JPG" data-rel="prettyPhoto[mg_2]" title="Ariana"><img src="images/clientes/Ariana.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/CUOM.JPG" data-rel="prettyPhoto[mg_2]" title="C.U.O.M"><img src="images/clientes/CUOM.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/delAguila.JPG" data-rel="prettyPhoto[mg_2]" title="delAguila"><img src="images/clientes/delAguila.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/elartedelbuencomer.JPG" data-rel="prettyPhoto[mg_2]" title="elartedelbuencomer"><img src="images/clientes/elartedelbuencomer.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/ElBodegon.JPG" data-rel="prettyPhoto[mg_2]" title="ElBodegon"><img src="images/clientes/ElBodegon.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/EmpresaHoteleradelAtlantico.JPG" data-rel="prettyPhoto[mg_2]" title="EmpresaHoteleradelAtlantico"><img src="images/clientes/EmpresaHoteleradelAtlantico.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/FARO-Electricidad e Iluminacion.JPG" data-rel="prettyPhoto[mg_2]" title="FARO-Electricidad e Iluminacion"><img src="images/clientes/FARO-Electricidad e Iluminacion.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/GranHotelManila.JPG" data-rel="prettyPhoto[mg_2]" title="GranHotelManila"><img src="images/clientes/GranHotelManila.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/GrupoPapel-DesarrollosElectronicos.JPG" data-rel="prettyPhoto[mg_2]" title="GrupoPapel-DesarrollosElectronicos"><img src="images/clientes/GrupoPapel-DesarrollosElectronicos.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/GrupoTmac.JPG" data-rel="prettyPhoto[mg_2]" title="GrupoTmac"><img src="images/clientes/GrupoTmac.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/Ladrillos.JPG" data-rel="prettyPhoto[mg_2]" title="Ladrillos"><img src="images/clientes/Ladrillos.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/Larroquettenis.JPG" data-rel="prettyPhoto[mg_2]" title="Larroquettenis"><img src="images/clientes/Larroquettenis.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/LASNENAS.JPG" data-rel="prettyPhoto[mg_2]" title="LASNENAS"><img src="images/clientes/LASNENAS.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/MartinRolle.JPG" data-rel="prettyPhoto[mg_2]" title="MartinRolle"><img src="images/clientes/MartinRolle.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/MascotaUrbana.JPG" data-rel="prettyPhoto[mg_2]" title="MascotaUrbana"><img src="images/clientes/MascotaUrbana.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/SanitariosCastelli.JPG" data-rel="prettyPhoto[mg_2]" title="SanitariosCastelli"><img src="images/clientes/SanitariosCastelli.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/shelter.JPG" data-rel="prettyPhoto[mg_2]" title="shelter"><img src="images/clientes/shelter.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/Smart!.JPG" data-rel="prettyPhoto[mg_2]" title="Smart!"><img src="images/clientes/Smart!.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/smart.JPG" data-rel="prettyPhoto[mg_2]" title="smart"><img src="images/clientes/smart.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/viaggio.JPG" data-rel="prettyPhoto[mg_2]" title="viaggio"><img src="images/clientes/viaggio.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/yamil.JPG" data-rel="prettyPhoto[mg_2]" title="shelter"><img src="images/clientes/yamil.JPG" width="90" height="90" alt=""><span></span></a></li>
                                <li><a href="images/clientes/rumenco.JPG" data-rel="prettyPhoto[mg_2]" title="rumenco"><img src="images/clientes/rumenco.JPG" width="90" height="90" alt=""><span></span></a></li>
                            </ul>
                        </div>
						-->
			
						
				<?php } else { ?>
				<p>La Actualidad de nuestro país y el mundo muestran un escenario altamente competitivo. Se vuelve indispensable contar con herramientas de administración modernas, confiables, rápidas y orientadas al mejor desenvolvimiento del negocio. </p>
				<p>Somos un equipo joven de contadores Públicos y Lic. en Administración que busca la excelencia en las actividades que realiza. Conocedores de las particularidades de esta hermosa ciudad, brindamos a nuestros clientes el apoyo profesional necesario para que ellos puedan volcar en sus negocios toda su energía.</p>
				<p>Seremos sus aliados estratégicos, juntos lograremos obtener los mejores resultados que su idea puede generar. </p>
				<p>Estaremos esperando cualquier consulta o sugerencia. Su idea puede ser un gran negocio. Daremos juntos lo mejor para ello.</p>

				
			<?php } ?>
				
            	
                  
				<h2 id="anchor2">Conozcanos:</h2>
                
                <div class="row">
<!--   
 Aca estaba Pablo

-->                    
                    <div class="col col_1_2">
                    	<div class="inner">	
                            
                            <div class="wp-caption alignnone">
                            <a href="#"><img src="images/temp/team_2.png" alt="Jacob Marshall"></a>
									 <p class="wp-caption-text">Claudio A. Minciacca
									 <a href="mailto:claudio@estudiocontablemta.com.ar"><font size="1">claudio@estudiocontablemta.com.ar</font></a>
                            +54-223-5137003        									 
									 </p>
                            </div>
                            
                      	</div>
                    </div>
                    
                    <div class="col col_1_2">
                    	<div class="inner">	
                            
                            <div class="wp-caption alignnone">
                            <a href="#"><img src="images/temp/team_3.png" alt="Marcia Lanham"></a>
                            <p class="wp-caption-text">German D. Aguilanti
									 <a href="mailto:german@estudiocontablemta.com.ar"><font size="1">german@estudiocontablemta.com.ar</font></a>
                            +54-223-6839116 	                            
                            </p>
                            </div>
                            
                      	</div>
                    </div>
                    
				</div>
   
                  
            	<div class="clear"></div>
				
				
						
						
            </div>
		</article>            
            
		</div>

    <!--/ content -->
    
    <!-- sidebar -->
    <div class="sidebar">
    	<a href="sf.php?c=6"><img src="sfsmall.jpg" alt=""></a>
        <!-- widget_text -->
        <div class="widget-container widget_text">
			<h3 class="widget-title">Estudio MTA:</h3>
            <div class="textwidget">
				<p>Estaremos esperando cualquier consulta o sugerencia. Su idea puede ser un gran negocio. Daremos juntos lo mejor para ello.</p>
            </div>
		</div>
        <!--/ widget_text -->
        
        <!-- widget_nav_menu, style2 -->
        <div class="widget-container widget_nav_menu nav_style2">
			<ul>
				<li><a href="about.php?c=1">Ideología</a></li>
                <li><a href="about.php?c=2">Nuestra Misión</a></li>                              
				<li><a href="about.php?c=3">Nuestra Visión</a></li>                        	
			</ul>
		</div>
        <!--/ widget_nav_menu, style2  -->
        
                
    </div> 
    <!--/ sidebar -->
           
    <div class="clear"></div>	    
</div>
<!--/ middle --> 
</div>
<!--/ container -->

<?php include_once("pie.php"); ?>
	<script type="text/javascript">
							jQuery(document).ready(function($) {
								$('#mycarouse3').jcarousel({
									easing: 'easeInOutQuint',
									animation: 600,
									auto: 3
								});
							});
                        </script>
                        <script type="text/javascript">
							jQuery(document).ready(function($) {
								$('a[data-rel]').each(function() {
	  							    $(this).attr('rel', $(this).data('rel'));
	  							});
	  							$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false});								
							});
						</script>	
</div>
</body>
</html>
