<?php if(!empty($_POST)){ ?>
<?php

$mails = array('email'=>'ferflo@hotmail.com', 'email'=>'eventas@rivher.com');

foreach($mails as $value){
	
	$body = 'Mensaje de:'.$_POST['nombre'];
	$body .= '<br>';
	$body .= 'Correo:'.$_POST['mail'];
	$body .= '<br>';
	$body .= 'Mensaje:'.$_POST['mensaje'];
	
	mail($value['email'],'Formulario de contacto',$body);
	
}

?>
<script type="text/javascript">
	alert('Se envio el mensaje gracias');
	window.location.reload();
</script>
<?php } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Compras</title>

<!--	CSS files -->

<!--  style river   -->
<link rel="stylesheet" type="text/css" href="css/reset.css" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" charset="utf-8" media="screen" />
<!--	end river style 	-->

<!--	style slider	-->
<link rel="stylesheet" href="css/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/themes/pascal/pascal.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/themes/orman/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/themes/nivo-slider.css" type="text/css" media="screen" />
<!--	end style slider	-->

<!--	Fancybox	-->
<link rel="stylesheet" type="text/css" href="css/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<!--	End Fancybox	-->

<!--	ui jQuery	-->
<link rel="stylesheet" href="css/ui/jquery-ui-1.8.16.custom.css" type="text/css" media="all" />
<!--	end ui jQuey	-->

<!--	End css files -->

<!--	JS files -->

<!-- 	Load jQuery	--->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<!--	End load jQuery  -->

<!--	ui jQuery	-->
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script> 
<script src="http://jquery-ui.googlecode.com/svn/tags/latest/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/i18n/jquery-ui-i18n.min.js" type="text/javascript"></script>
<script>
	$(function() {
		$( "#tabs" ).tabs({
			event: "mouseover"
		});
	});
function send(){
	
	if( $( '#nombre' ).val() == 0 ){
		alert('Porfavor, escriba su nombre');
		return false;		
	}
	
	if( valida_correo($( '#mail' ).val()) == false ){
		alert('Porfavor, escriba un correo correcto');
		return false;		
	}
	
	if( $( '#mensaje' ).val() == 0 ){
		alert('Porfavor, escriba un Mensaje');
		return false;		
	}
	
	$('#contacto').submit();	
}	

function valida_correo(correo) {
				 
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		    return (true);
					  
		  } else {
		   
		   
			 return (false);
			
		  }
	 }
	</script>
<!--	end ui jQuery	-->

<!--	Radius	-->
<script type="text/JavaScript" src="js/curvycorners.src.js"></script>
<script type="text/JavaScript" src="js/radius.js"></script>
<!--	End radius	-->



<!--	End js files -->

</head>

<body>

<div id="main">
	
    <div id="header">
    	
        <div class="banner"><img src="images/contacto-title.png" width="900" height="53" /></div>
       
    </div>	
    
    <div id="container-contacto">
    
        
        
       
        
       
  	
    <div id="tabs">
	<ul>
		 <li> <a id="preguntas" href="#tabs-4">Preguntas</a></li>
        <li><a href="#tabs-1">Contacto</a></li>
       
		<li> <a id="mapa" href="#tabs-2">Mapa</a></li>
		<li> <a id="chat" href="#tabs-3">Chat</a></li>
	</ul>
    
	<div id="tabs-1">
		<fieldset style="border:#FFFBF0 1px solid; width:450px;">
        <legend>Escribenos</legend>
        
        <div class="title">
        <p>SOLICITAMOS SOCIAS</p> 
		<p>COMERCIALES A NIVEL NACIONAL</p>
        </div>
        <form id="contacto" name="contacto" method="post">
    	
        <table style="text-align:left; float:left; margin: 10px 0 10px 40px;">
        <tr>
        <td><div class="title">Nombre</div></td><td><input name="nombre" id="nombre" class="ui-corner-all ui-widget-shadow" /></td>
        </tr>
        
        <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
        
        <tr>
        <td><div class="title">E-mail</div></td><td><input name="mail" id="mail" class="ui-corner-all ui-widget-shadow" /></td>
        </tr>
        
        <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
        
        <tr>
        <td style="vertical-align:top"><div class="title">Mensaje</div></td><td><textarea name="mensaje" id="mensaje" cols="25" rows="5" class="ui-corner-all ui-widget-shadow" /></textarea></td>
        </tr>
        
        <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
        
        <tr>
        <td colspan="2" style="text-align:right">
        <a href="javascript:void(0);" id="btn-send"  onclick="send();"/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;
        </a>
        </td>
        </tr>
        
        </table>
     
        </form>
        </fieldset>
        
        <div style=" width:300px; height:300px; float:right; margin-right:10px; margin-top:-400px">        
        
        <!--	AQUI LA IMAGEN	-->
        <img src="images/contacto/chat.png" title="Cobtacto" width="300" height="300" />
        
        <!--	AQUI FIN DE LA IMAGEN	-->
        
        
        </div>
        
        
    </div>
	<div id="tabs-2">
		
       
              
         <iframe width="500" height="330" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.mx/maps?f=q&amp;source=s_q&amp;hl=es&amp;q=Patria+379,+Jardines+de+La+Patria,+Zapopan,+Jalisco&amp;sll=26.91453,-99.269445&amp;sspn=16.199496,33.815918&amp;ie=UTF8&amp;cd=1&amp;geocode=FQqgOwEd7-zV-Q&amp;split=0&amp;hq=&amp;hnear=Patria+379,+Zapopan,+Jalisco&amp;ll=20.699199,-103.420744&amp;spn=0.026496,0.02429&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
       
       <div style="float:right; margin-right:70px;">
       
        <div class="title">
        
        <p> OFICINAS:</p>
        
        </div>
        
		<p>Av. Patria 379-A  C.P.45110</p> 
		<p>Col.Jardines de la Patria</p> 
 		<p>Zapopan, Jalisco, México.</p>
       
       <p>Tel.(52) 33  3165.0429</p>
 	   <p>3600.3523</p>

	   <p>Email: eventas@rivher.com</p>
       
       
         
       </div> 
       
      
        
	</div>
	<div id="tabs-3">
	 
     <div class="title">
        
        <p> Chat:</p>
     
     </div>   
        
        <iframe src="http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=666d9eed79041041@apps.messenger.live.com&mkt=es-MX&useTheme=true&themeName=pink&foreColor=444444&backColor=FFD5D5&linkColor=444444&borderColor=ED7B7B&buttonForeColor=AA3636&buttonBackColor=FAD6D6&buttonBorderColor=AA3636&buttonDisabledColor=FAD6D6&headerForeColor=444444&headerBackColor=F9A3A3&menuForeColor=E45A5A&menuBackColor=FFFFFF&chatForeColor=444444&chatBackColor=FEF6F6&chatDisabledColor=F6F6F6&chatErrorColor=760502&chatLabelColor=6E6C6C" width="388" height="345" style="border: solid 1px black; width: 388px; height: 348px;" frameborder="0"></iframe>
        
        
         <div style=" width:300px; height:300px; float:right; margin-right:40px;  margin-top:20px;">        
        
        <!--	AQUI LA IMAGEN	-->
        <img src="images/contacto/chat.png" title="Chat" width="300" height="300" />
        
        <!--	AQUI FIN DE LA IMAGEN	-->
        
        
        </div>
        
        
     </div>
     <div id="tabs-4">
		<fieldset style="border:#FFFBF0 1px solid; width:450px;">
        <legend>Preguntanos</legend>
        
        <div class="title">
        <p>Con gusto te respondemos tus dudas</p> 
		</div>
        <form id="contacto" name="contacto" method="post">
    	
        <table style="text-align:left; float:left; margin: 10px 0 10px 40px;">
        <tr>
        <td><div class="title">Nombre</div></td><td><input name="nombre" id="nombre" class="ui-corner-all ui-widget-shadow" /></td>
        </tr>
        
        <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
        
        <tr>
        <td><div class="title">E-mail</div></td><td><input name="mail" id="mail" class="ui-corner-all ui-widget-shadow" /></td>
        </tr>
        
        <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
        
        <tr>
        <td style="vertical-align:top"><div class="title">Pregunta</div></td><td><textarea name="mensaje" id="mensaje" cols="25" rows="5" class="ui-corner-all ui-widget-shadow" /></textarea></td>
        </tr>
        
        <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
        
        <tr>
        <td colspan="2" style="text-align:right">
        <a href="javascript:void(0);" id="btn-send"  onclick="send();"/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;
        </a>
        </td>
        </tr>
        
        </table>
     
        </form>
        </fieldset>
        
        <div style=" width:300px; height:300px; float:right; margin-right:10px; margin-top:-400px">        
        
        <!--	AQUI LA IMAGEN	-->
        <img src="images/contacto/chat.png" title="Pegutas Frecuentes" width="300" height="300" />	
        
        <!--	AQUI FIN DE LA IMAGEN	-->
        
        
        </div>
        
        
    </div>
     
     
     
     
     
    </div>
</div>
    	
   
    </div>
        
</div>
</body>
</html>
