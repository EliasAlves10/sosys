<!Doctype html>
<!--[if lt IE 7 ]><html class="ie6" lang="pt-BR"> <![endif]-->
<!--[if IE 7 ]><html class="ie7" lang="pt-BR"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="pt-BR"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="pt-BR"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="pt-BR">
    <!--<![endif]-->
	<head>
        <title>SOSsys</title>
		
			<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
			<meta http-equiv="Content-Style-Type" content="text/css" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<meta charset="ISO-8859-1">
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<meta http-equiv="Cache-Control" content="no-cache, no-store" />
			<meta http-equiv="Pragma" content="no-cache, no-store" />
			<meta name="author" content="EliasAlves"/>
			  <!-- Utiliza��o mobile -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			  <!-- Arquivos de Estiliza��o em css -->
			    <link rel="shortcut icon" href="../imagens/logotipo_teste.png"/>
				<link media="screen" href="../css/style.css" type="text/css"  rel="stylesheet">
				<link media="print" href="../css/style_page.css" type="text/css"  rel="stylesheet">
				<link media="screen" href="../css/jquery.fancybox.css" type="text/css"  rel="stylesheet">
				<link media="print" href="../css/jquery.fancybox.css" type="text/css"  rel="stylesheet">
				<link media="screen" href="../css/learncafe.rating.css" type="text/css"  rel="stylesheet">
				<link media="print" href="../css/learncafe.rating.css" type="text/css"  rel="stylesheet">
				<link rel="stylesheet" type="text/css" href="../css/jquery.qtip.min.css" />
           <meta name="viewport" content="width=device-width, user-scalable=no">
         <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		        <!-- Javascript com utiliza��o da biblioteca Jquery -->
				<script src="../js/jquery.js" type="text/javascript"></script>
				<script src="../js/bootstrap.min.js" type="text/javascript"></script>
				<script src="../js/bootstrap.js" type="text/javascript"></script>
			    <script src="../js/jquery-1.10.2.min.js"></script>
				<script src="../js/jquery.cycle.all.js"></script>
				<script src="../js/jquery.cookie.js"></script>
				<script src="../js/jquery.fancybox.js"></script>
				<script src="../js/learncafe.general.js"></script>
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
				<script type="text/javascript" src="../js/jquery.maskedinput-1.3.min.js"></script>
				<script type="text/javascript" src="../js/jquery.qtip.min.js"></script>                     
				
    </head>
	<?php
	include "../controller/connect_bd.php";	  
	?>
    <body class="act-home">
		<div id="wrapper">
		<header class="topo">
                <section >
                    <a href="javascript:void();"><img src="../imagens/logotipo_teste.png" class="fotologo"title="SOSsys &copy"id="logoTop" height="80" width="207"></a>
					<div class="choice-lang">
						<div class="btn-toolbar">
							<div class="btn-group">
								<a  href="../index.php"><i class="icon-align-left"><img src="../imagens/lang_bra.png"  class="fotoindi" title="Indioma Portugués (Brasil)" width="25" height="25"></i></a>
								<a  href="index.php"><i class="icon-align-center"><img src="../imagens/lang_esp.png"title="Indioma Español"style="border: #32CD32 Solid 1px;"width="25" height="25"/></i></a>
								<a  href="../eng/index.php"><i class="icon-align-right"><img src="../imagens/lang_brit.jpg" title="Indioma Inglés (EE.UU.)"width="25"width="25" height="25"/></i></a>
							</div>
						</div>
					</div>
				</section>
        </header>
			<div id="titulo"><h1>Efetue o login para acessar o sistema</h1></div>
				<section id="conteudo" class="acesso">
					<div id="loginAcesso"  class="expose">
						<div class="divForm" style="margin-top:0px;">
							<a href="javascript:void();" style="text-decoration: none">
								<h2>Iniciar sesión - Ya estoy registrado</h2>
							</a>
							<p>Acceda al sistema de información a los datos a continuación</p><br/>
						<!-- Inicio do formul�rio  de login -->	
						<form method="post" action="">
								<fieldset>
									<b>Login:</b><br>
										<input type="text" required autofocus="true" autocomplete="on" placeholder="Registro de Usuario"  id="usr_login" name="login_usuario" value="" maxlength="64" class="inputText usr_email"/>
									<b>Contraseña:</b><br>
										<input type="password" required autocomplete="off" placeholder="Contraseña de Usuario"  name="senha_usuario" value="" maxlength="64" class="inputText usr_password" />
								</fieldset>
								<div style="float: left;">
										<input class="btn btnEntrar btn_small" type="submit" value="Ingrese" /> &nbsp;
										<input class="btn btnRecusar btn_small" type="reset" value="Borrar" />&nbsp;
								</div>
								<div style="float: left; font-size:11px; padding-top: 10px;">
									<label for="usr_save" style="display: block; padding-left: 15px; text-indent: -15px;">
										<input type="checkbox" name="usr_save" id="usr_save" value="1" style="width: 13px; height: 13px; padding: 0; margin:0; vertical-align: bottom; position: relative; top: -1px;" checked="checked" /> 
										Seguir conectado?
									</label>
								</div>
								<a class='fancybox fancybox.ajax' href="#" style="float: right; font-size:11px; padding-top: 10px;">¿Olvidaste tu contraseña?clic aquí.</a>
							</form>
						</div>
					</div>
								
						<div id="signup" class="expose">
							<div class="divForm" style="margin-top:0px;">
											<a href="javascript:void();" style="text-decoration: none">
												<h2>Registrarse - Uno nuevo usuario</h2>
											</a>
											<p>Crear una cuenta gratis para acceder al sistema</p><br />
											<!-- Inicio do formul�rio  de cadastro ONMOUSEOVER = "alert('Esta &eacute; uma mensagem gerada pelo recurso OnMouseOver em uma frase.')"); -->	
										<form  method="post" name="cads" action="model/recebe_dados.php">
											<fieldset>
												<div id="div_email">
													<div style="float: left; margin-right:8px;">
														<b>Login:</b><img src="../imagens/icon_info.gif" border="0" align="absmiddle" title="Rellena sus datos de acceso correcta para que podamos contactar con usted." style="cursor:help">
														<input type="text" required id="usr_login"  placeholder="Registro de Usuario" name="login_usuario" value="" maxlength="64" class="inputText usr_email"  autocomplete="off" />
													</div>
													<div style="float: left;">
															<b>Confirme su login:</b> <img src="../imagens/icon_info.gif" border="0" align="absmiddle" title="Confirme su nombre de usuario para asegurarse de estar orreto y sin errores tipográficos." style="cursor:help">
															<br><input type="text" required  id="usr_login_confirm" oninput="validasenha(this);" onsubmit="validasenha(this);" placeholder="Confirme su login" name="confirm_login_usuario" value="" maxlength="64" class="inputText usr_email"  onpaste="return false;" autocomplete="off" />
													</div>
													
													<div style="clear: both;"></div>
												</div>
												<b>Contraseña:</b> <img src="../imagens/icon_info.gif" border="0" align="absmiddle" title="Contraseña de Usuario." style="cursor:help"><br>
												<input type="password" required id="usr_fullname" placeholder="Contraseña de Usuario"name="senha_usuario" value="" maxlength="120" class="inputText usr_password" autocomplete="off" />
												<b>Carné de identidad:</b> <img src="../imagens/icon_info.gif" border="0" align="absmiddle" title="Su Carné de identidad lo convierte en el registro más seguro y sencillo." style="cursor:help"><br>
												<input type="text" required placeholder="Carné de identidad" alt="usr_cpf" name="cpf_usuario" id="cpf"   value="" maxlength="14" class="inputText usr_cpf"  autocomplete="off" />
												<div style="margin: 4px 0px 14px; font-size: 12px; float: left; width: 100%;" id="div_usr_terms">
													<label for="usr_terms" style="display: block; text-indent: -15px; float: left; width: 100%;">
														<input type="checkbox"  name="nivel" id="usr_terms" value="3"   style="width: 13px; height: 13px; padding: 0px; vertical-align: bottom; position: relative; float: left; margin: 0px;" />
														<a class="fancybox fancybox.ajax"   href="condiciones_de_uso.php"target="_blank"style="float: left; padding-left: 20px; line-height: 12px;">Yo estoy de acuerdo con las condiciones de uso</a>
														<img src="../imagens/icon_info.gif" border="0" align="absmiddle" title="Você somente poderá utilizar nossos serviços caso concorde com nossos termos e condições de uso." style="cursor: help; float: right; margin-right: 127px; margin-top: -2px;">
													</label>
											    </div>
											</fieldset>
											<button style="color: #1E90FF; margin-bottom:0px;" class="btnCadastreAgora btn_small" onclick="validasenha(this);" type="submit" id="submit" value="submit">Registrar</button>
									<div style="clear: both"></div>
							</div>
						</div>
					</form>	
					
	<script type="text/javascript">
        function validaCPF(input){

            if (input.value.length > 11 || input.value.length < 11)
                input.setCustomValidity('CPF inválido');
            else input.setCustomValidity('');

        }
        function validasenha(input) {
		if(document.cads.login_usuario.value!=document.cads.confirm_login_usuario.value) 
		input.setCustomValidity("Inicios de sesión mecanografiadas no coinciden. Inténtelo de nuevo.");
			else input.setCustomValidity('');
	
}

function validarCPF( cpf ){
	var filtro = /^\d{3}.\d{3}.\d{3}-\d{2}$/i;
	
	if(!filtro.test(cpf))
	{
		input.setCustomValidity("CPF intentarlo de nuevo sin tipo.");
		return false;
	}
   
	cpf = remove(cpf, ".");
	cpf = remove(cpf, "-");
	
	if(cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" ||
		cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" ||
		cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" ||
		cpf == "88888888888" || cpf == "99999999999")
	{
		input.setCustomValidity("CPF intentarlo de nuevo sin tipo.");
		return false;
   }

	soma = 0;
	for(i = 0; i < 9; i++)
	{
		soma += parseInt(cpf.charAt(i)) * (10 - i);
	}
	
	resto = 11 - (soma % 11);
	if(resto == 10 || resto == 11)
	{
		resto = 0;
	}
	if(resto != parseInt(cpf.charAt(9))){
		input.setCustomValidity("CPF intentarlo de nuevo sin tipo.");
		return false;
	}
	
	soma = 0;
	for(i = 0; i < 10; i ++)
	{
		soma += parseInt(cpf.charAt(i)) * (11 - i);
	}
	resto = 11 - (soma % 11);
	if(resto == 10 || resto == 11)
	{
		resto = 0;
	}
	
	if(resto != parseInt(cpf.charAt(10))){
		input.setCustomValidity("CPF intentarlo de nuevo sin tipo.");
		return false;
	}
	
	return true;
 }
 
function remove(str, sub) {
	i = str.indexOf(sub);
	r = "";
	if (i == -1) return str;
	{
		r += str.substring(0,i) + remove(str.substring(i + sub.length), sub);
	}
	
	return r;
}

/**
   * MASCARA ( mascara(o,f) e execmascara() ) CRIADAS POR ELCIO LUIZ
   * elcio.com.br
   */
function mascara(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execmascara()",1)
}

function execmascara(){
	v_obj.value=v_fun(v_obj.value)
}

function cpf_mask(v){
	v=v.replace(/\D/g,"")                 //Remove tudo o que n�o � d�gito
	v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o terceiro e o quarto d�gitos
	v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o setimo e o oitava d�gitos
	v=v.replace(/(\d{3})(\d)/,"$1-$2")   //Coloca ponto entre o decimoprimeiro e o decimosegundo d�gitos
	return v
}
		
    </script>					
	<script type="text/javascript">
   
    var interval,
            minutes = 0,
            seconds = 59,
            el = $('#login-message'),
            warning = $("#error").is(':contains("Seu limite de tentativas foi atingido")');

    (function($) {
        if (warning) {
            el.css("display", "block");
            interval = setInterval(function() {
                if (seconds == 0) {
                    if (minutes == 0) {
                        el.css("display", "none");
                        clearInterval(interval);
                        return;
                    } else {
                        minutes--;
                        seconds = 60;
                    }
                }
                if (minutes > 0) {
                    var minute_text = minutes + (minutes > 1 ? ' minutos' : ' minuto');
                } else {
                    var minute_text = '';
                }
                var second_text = seconds > 1 ? 'segundos' : 'segundo';
                el.text('Aguarde ' + minute_text + ' ' + seconds + ' ' + second_text + ' e tente de novo.');
                seconds--;
            }, 1000);
        }
        ;
    })(jQuery);

// submit andler need the document ready statement

// Monitor of signup form
    $('form.novaConta').submit(function(event) {
        event.preventDefault();
        form = $(this);
// make the validation
        if (checkFields(true)) {
// Disable the signup bottom
            form.find('input[type="submit"]').attr("disabled", "true");
// loading image animation
            form.addClass('active');
            var _data = {};
            $(form).find('input, textarea, select').each(function(i, obj) {
                _data[$(obj).attr('name')] = $(this).val();
            });
            // submit the information via post to controller via ajax
            $.ajax({
                type: "POST",
                url: "acount/signup",
                data: _data,
                dataType: 'json',
                success: function(feedback) {
                    // parse feedback and print message
                    message = $("<div />").html(feedback.msg).text();
                    // if the signup form has no error
                    if (feedback.status) {
                        // show the generated password to the user
                        window.location = feedback.redirect;
                        // redirect the user
                    }
                    else {
                        // show the errors
                        learn.alert(message);
                    }
                    // enable bottom
                    form.find('input[type="submit"]').removeAttr('disabled');
                    // remove loading image animation
                    form.removeClass('active');
                }
            });
        }
        // cancel form default action
        return false;
    });
	</script> 
	</div>
 </section>
    <div id="overlay"></div>
	      <footer>
                <div id="footerLogo" >
                 <section>
                        <p>Copyright © 2014 - SOSsys. - Reservados todos los derechos.</p>
							<div style="position:absolute;left:1092px;top:7px;">
							<div class="btn-group-social" style="">
								<a href="#"><i class="icon-align-left"><img src="../ico/social-icons.png"></i></a>
								
							</div>	
						</div>
                 </section>
                </div>
            </footer>
          
       <script type="text/javascript">
            $(document).ready(function() {
                $('[title]').qtip({
                    position: {
                        my: 'bottom left',
                        viewport: $(window),
                        target: 'mouse',
                        adjust: { x: 6, y: -6 }
                    },
                    style: {
                        classes: 'ui-tooltip-dark ui-tooltip-shadow'
                    }
                });
            });
        </script>
        <script type="text/javascript">
                setTimeout(function(){var a=document.createElement("script");
                var b=document.getElementsByTagName("script")[0];
                a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0020/3520.js?"+Math.floor(new Date().getTime()/3600000);
                a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
        </script>
	</body>
</html>	