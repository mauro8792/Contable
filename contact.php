<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

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

<!-- # Scripts  -->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/general.js"></script>
<!-- carousel -->
<script src="js/jquery.jcarousel.min.js"></script>
<!-- sliders -->
<script src="js/slides.min.jquery.js"></script>
<!-- infield labels -->
<script src="js/jquery.infieldlabel.min.js"></script>
<script type="text/javascript" language="javascript" src="js/custom.js"></script>
</head>
<body style="background-color:#dadada; background-image:url(images/pattern_1.png)">  
<div class="body_wrap">

<div class="header_container">
	
	<?php include_once("cabeza.php"); ?>

<!-- top Slider/Image -->
<div class="header_image">
	
    <div class="topimage">
		<img src="images/temp/map.jpg" alt="">		
    </div>
    
</div>
<!--/ top Slider/Image -->

</div>

<div class="container">
<!-- middle -->
<div id="middle" class="cols2 sidebar_left">
	
    <div class="content" role="main">
    
    	<article class="post-item post-detail">
        	        
        	<h1>Complete para enviar un mensaje:</h1>          
			
            
			<div class="entry">
                
            	<p>Por medio del siguiente formulario nos puede enviar un email rápidamente: </p>
                
                <!-- contact form -->
                        <div class="add-comment" id="addcomments">
                            
                            <div class="comment-form">
                            <form action= "#" method="post" id="contactForm" class="ajax_form">
                                
                                <div class="row alignleft infieldlabel">
                                    <label for="name">Ingrese su nombre y apellido*</label>
                                    <input type="text" id="name" name="yourname" value="" class="inputtext input_middle required">
                                </div>
                                
                                <div class="space"></div>
                                
                                <div class="row alignleft infieldlabel">
                                    <label for="email">Ingrese su dirección de email*</label>
                                    <input type="text" id="email" name="email" value="" class="inputtext input_middle required">
                                </div>
								
                                <div class="clear"></div>   
                                
                                <div class="row alignleft selectField">
                                    <select class="select_styled" name="subject" id="subject" title="Select Subject">
			                        		<option value="0">Seleccione asunto*</option>
			                                <option value="1">Servicios</option>
			                                <option value="2">Contratar</option>
			                        </select>
                                </div>
                                
                                <div class="space"></div>                               
                               
								
                              <div class="clear"></div>   
                                
                                <div class="row infieldlabel">
                                    <label for="message">Escriba su mensaje*</label>
                                    <textarea id="message" cols="30" rows="10" name="message" class="textarea textarea_middle required"></textarea>
                                </div>
                                
                                <div class="row rowSubmit">
                                <input type="submit" id="send" value="ENVIAR MENSAJE" class="btn-submit">                                
                                
                              </div>
                            </form>
                            </div>
                        </div>
                <!--/ contact form -->
               
<div class="clear"></div>
            </div>
		</article>            
            
		</div>

    <!--/ content -->
    
    <!-- sidebar -->
    <div class="sidebar">

    	<!-- widget_contact -->
        <div class="widget-container widget_contact"> 
<a href="sf.php?c=6"><img src="sfsmall.jpg" alt=""></a>		
			<h3 class="widget-title">Nos encuentra:</h3>
            <div class="inner">   
            	
                <div class="contact-address">
                	<div class="name"><strong>Estudio Contable mta +asociados</strong></div>
					<div class="address">Moreno 3527 Piso 5 Of 501, (7600) Mar del Plata</div>
					<div class="phone"><em>Tel.:</em> <span>+54-223-4917583</span></div>
	                <div class="mail"><em>Email:</em> <a href="mailto:info@estudiocontablemta.com.ar">info@estudiocontablemta.com.ar</a></div>
				</div>
	            <!--      
				<div class="contact-social">
	            	<div><strong>Llamado:</strong> <br> <a href="#"><img src="images/icons/btn_skype.png" alt=""></a></div>
	                <div><strong>Siguenos:</strong> <br> <a href="#"><img src="images/icons/btn_twitter.png" alt=""></a></div>
	                <div><strong>Contactanos:</strong> <br> <a href="#"><img src="images/icons/btn_facebook.png" alt=""></a></div>
	           	<div class="clear"></div>
	            </div>
                    -->   
			</div>     
		</div>
        <!--/ widget_contact -->
        
                
    </div> 
    <!--/ sidebar -->
           
    <div class="clear"></div>	    
</div>
<!--/ middle --> 
</div>
<!--/ container -->

<?php include_once("pie.php"); ?>

</div>
</body>
</html>
