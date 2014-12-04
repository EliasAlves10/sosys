<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
			<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
				<title>SOSsys</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="author" content="EliasAlves">
			<link rel="shortcut icon" href="../imagens/logotipo_teste.png">
			<link href="../css/bootstrap.css" rel="stylesheet">
			<link href="../css/theme.css" rel="stylesheet">
			<link href="../css/font-awesome.min.css" rel="stylesheet">
			<link href="../css/alertify.css" rel="stylesheet">
			<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		</head>
		<body>
		<?php session_start();?>
	<div id="wrap">
				<div class="navbar navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container-fluid">
							<div class="logo"> 
								 <a href="javascript:void();"><img src="../imagens/logotipo_teste.png"width="35"height="35" title="SOSsys&copy"alt="Realm Admin Template"></a>
							</div>
							 <div class="top-menu visible-desktop">
								<ul class="pull-right">  
									  <li style="position:absolute;right:4px; top:2px;"><a href="../controller/logout.php""><img src="../ico/exit.png" title="Sair do Sistema."width="22"height="28" alt="Painel de Vagas"><b>Sair</b></a></li>
								</ul>
							  </div>
						</div>
					</div>
				</div>
		<div class="container-fluid">
				<!-- Side menu // as mascaras -->
					<script type="text/javascript">
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
									v=v.replace(/\D/g,"")                 //Remove tudo o que n„o È dÌgito
									v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o terceiro e o quarto dÌgitos
									v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o setimo e o oitava dÌgitos
									v=v.replace(/(\d{3})(\d)/,"$1-$2")   //Coloca ponto entre o decimoprimeiro e o decimosegundo dÌgitos
									return v
								}
						
								//////// Mascara Data ////////
								function dateMask(inputData, e)
								{
								if(document.all) // Internet Explorer
								var tecla = event.keyCode;
								else //Outros Browsers
								var tecla = e.which;
								if(tecla >= 47 && tecla < 58)
								{
								var data = inputData.value;
								if ((data.length == 2 || data.length == 5) && tecla != 47 )
								{
								data += '/';
								inputData.value = data;
								}
								}
								else
								if(tecla == 8 || tecla == 0) return true;
								else return false;
								} 
								//////////End Mascara Data //////////////////////////

												
					</script>
					
				<div class="sidebar-nav nav-collapse collapse">
											<div class="user_side clearfix">
											  <img src="../ico/admin.png" alt="admin">
											 <h6><?php
											include"user.php";
											?>
											</h6>
											</div>
										<div class="accordion" id="accordion2">
											  <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle active b_F79999" href="home.php"><img src="../ico/vagas.png" width="30"height="30" alt="Painel de Vagas"><span><b>Painel de Vagas</b></span></a>
												</div>
											  </div>
											<div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle b_C3F7A7 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse1"><img src="../ico/people.png" width="30"height="30" alt="Painel de Vagas"><span><b>Pacientes<b></span></a>
												</div>
											<div id="collapse1" class="accordion-body collapse">
												  <div class="accordion-inner">
													<a class="accordion-toggle" href="internacao.php"><img src="../ico/users_into.png" width="30"height="30" alt="Interna√ß√£o">Interna√ß√£o</a>
													<a class="accordion-toggle" href="list_editer.php"><img src="../ico/alter.png" width="29"height="29" alt="Alterar">Editar Dados</a>
													<a class="accordion-toggle" href="list_pacientes.php"><img src="../ico/list.png" width="29"height="29" alt="Alta">Listar Pacientes</a>
													<a class="accordion-toggle" href="list_historico.php"><img src="../ico/archive.png" width="29"height="29" alt="Alta">Hist√≥rico</a>
												  </div>
											</div>
										  </div>
											<div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse2"><img src="../ico/hospital.png" width="29"height="29" alt="Hospital"><span>Hospital</span></a>
												</div>
												<div id="collapse2" class="accordion-body collapse">
												  <div class="accordion-inner">
													<a class="accordion-toggle" href="insert_hospital.php"><img src="../ico/cads.png" width="29"height="29" alt="Cadastro">Cadastrar</a>
													<a class="accordion-toggle" href="list_hospital.php"><img src="../ico/alterhosp.png" width="29"height="29" alt="Alterar">Listar H√≥spitais</a>
													<a class="accordion-toggle" href="insert_leito.php"><img src="../ico/leito.png" width="27"height="27" alt="Cadastrar Leito">Cadastrar Leito</a>
													<a class="accordion-toggle" href="list_leito.php"><img src="../ico/lista.png" width="29"height="29" alt="Listar Leito">Listar Leitos</a>
												  </div>
												</div>
											 </div>
											 <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse3"><img src="../ico/medico.png" width="29"height="29" alt="Medico"><span>M√©dico</span></a>
												</div>
												<div id="collapse3" class="accordion-body collapse">
												  <div class="accordion-inner">
													<a class="accordion-toggle" href="insert_medico.php"><img src="../ico/doctor-icon.png" width="29"height="29" alt="Cadastro">Cadastrar</a>
													<a class="accordion-toggle" href="list_medico.php"><img src="../ico/anamnese_icon.png" width="27"height="27" alt="Excluir">Listar M√©dicos</a>												  </div>
												</div>
											 </div>
											  <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse4"><img src="../ico/pessoal.png" width="29"height="29" alt="Hospital"><span>Usuarios</span></a>
												</div>
												<div id="collapse4" class="accordion-body collapse">
												  <div class="accordion-inner">
													<a class="accordion-toggle" href="insert_user.php"><img src="../ico/add_user.png" width="29"height="29" alt="Cadastro">Cadastrar</a>
													<a class="accordion-toggle" href="list_user.php"><img src="../ico/alter_user.png" width="29"height="29" alt="Alterar">Listar Usuarios</a>
												  </div>
												</div>
											 </div>
											   <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse5"><img src="../ico/uso.png" width="29"height="29" alt="Hospital"><span>Visitantes</span></a>
												</div>
												<div id="collapse5" class="accordion-body collapse">
												  <div class="accordion-inner">
													<a class="accordion-toggle" href="list_user.php"><img src="../ico/livfro20de20visitas2013.png" width="29"height="29" alt="Alterar">Registrar Visitantes</a>
												  </div>
												</div>
											 </div>
											 <div class="accordion-group">
												<div class="accordion-heading">
													<a class="accordion-toggle b_F5C294" href="sobre.php"><img src="../ico/info.png" width="26"height="26" alt="Painel de Vagas"><span>Sobre</span></a>
												</div>
											  </div>      
										</div>
				</div>
						  <!-- /Side menu -->
			<div class="main_container" id="forms_page">
						<div class="row-fluid">
							<ul class="breadcrumb">
								<li><a href="home.php">Home</a> <span class="divider">/</span></li>
								<li><a href="javascript:void();">Usuarios</a> <span class="divider">/</span></li>
								<li class="active">Cadastrar</li>
							</ul>
							<h2 class="heading">
								Cadastro de Usuarios
								<div class="btn-group pull-right">
									<a href="insert_user.php">
										<button class="btn">
											Cadastrar Usuario 
										</button>
									</a>	
									<a href="list_user.php">
										<button class="btn">
											Listar Usuarios
										</button>
									</a>
								</div>
							</h2>
						</div>
						<div class="row-fluid">
							<div class="widget widget-padding span12">
								<div class="widget-header">
									<i>+</i>
									<h5>Dados do Usuario</h5>
									<div class="widget-buttons">
										<a href="#" data-title="Collapse" data-collapsed="false"
											class="tip collapse"><img src="../imagens/sort_both.png"/></a>
									</div>
								</div>
								<form class="form-horizontal" name="forms"action="../model/cads_user.php" method="post">
									<div class="widget-body">
										<div class="widget-forms clearfix">					
											<div class="control-group">
												<label class="control-label">Login:</label>
												<div class="controls">
													<input class="span7"autofocus="true" autocomplete="off" required value="" type="text" name="login_usuario" placeholder="Login do Usuario" autocomplete="off"/>
												</div>
												<br/><label class="control-label">Confirma√ß√£o de Login:</label>
												<div class="controls">
													<input class="span7" required value="" autocomplete="off" name="confirm_login_usuario" oninput="validasenha(this);" onsubmit="validasenha(this);" type="text"   onpaste="return false;" autocomplete="off"placeholder="Confirma√ß√£o de login do Usuario" />
													<span class="help-inline">Digite o login aqui novamente para confirmar.</span>
												</div>
												<br /> <label class="control-label">CPF:</label>
												<div class="controls">
													<input class="span7" value="" autocomplete="off" maxlength="14" required name="cpf_usuario" onkeypress="javascript: mascara(this, cpf_mask);"type="text" placeholder="CPF do Usuario"autocomplete="off"/>
													<span class="help-inline">Digite Apenas os n√∫meros.</span>
												</div>
												<br /> <label class="control-label">Senha:</label>
												<div class="controls">
													<input class="span7" value=""autocomplete="off" maxlength="14" required name="senha_usuario" type="password" placeholder="Senha do Usuario"autocomplete="off"/>
												</div>
											</div>
											<div class="control-group">
													<br /><label class="control-label">Nivel de Acesso:</label>
													<div class="controls">			                       
													  <label class="radio">
														<input type="radio" value="1" name="nivel" id="administrador" />
														Administrador
													  </label> 
													  <label class="radio">
														<input type="radio" value="2" name="nivel" id="medico" />
														M√©dico(a)
													  </label> 
													   <label class="radio">
														<input type="radio" value="3" name="nivel" id="enfermeiro" />
														Enfermeiro(a) / Tec.Enfermagem / Aux. de Enfermagem
													  </label> 
													</div>
											</div>
										</div>
									</div>
									<div class="widget-footer">
										<button class="btn btn-success" type="submit">Salvar</button>
										<button class="btn btn-danger" type="reset">Apagar</button>
									</div>
								</form>
							</div>
						</div>
				<div class="row-fluid"></div>
			</div>
		</div>
<!-- /Main window -->
		<script type="text/javascript">
        function validaCPF(input){

            if (input.value.length > 11 || input.value.length < 11)
                input.setCustomValidity('CPF inv·lido');
            else input.setCustomValidity('');

        }
        function validasenha(input) {
		if(document.forms.login_usuario.value!=document.forms.confirm_login_usuario.value) 
		input.setCustomValidity("Os logins digitados n„o combinam. Tente novamente.");
			else input.setCustomValidity('');
	
}

function validarCPF( cpf ){
	var filtro = /^\d{3}.\d{3}.\d{3}-\d{2}$/i;
	
	if(!filtro.test(cpf))
	{
		input.setCustomValidity("CPF n„o digitado. Tente novamente.");
		return false;
	}
   
	cpf = remove(cpf, ".");
	cpf = remove(cpf, "-");
	
	if(cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" ||
		cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" ||
		cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" ||
		cpf == "88888888888" || cpf == "99999999999")
	{
		input.setCustomValidity("CPF inv·lido. Tente novamente.");
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
		input.setCustomValidity("CPF inv·lido. Tente novamente.");
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
		input.setCustomValidity("CPF inv·lido. Tente novamente.");
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
	v=v.replace(/\D/g,"")                 //Remove tudo o que n„o È dÌgito
	v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o terceiro e o quarto dÌgitos
	v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o setimo e o oitava dÌgitos
	v=v.replace(/(\d{3})(\d)/,"$1-$2")   //Coloca ponto entre o decimoprimeiro e o decimosegundo dÌgitos
	return v
}
		
    </script>		

	</div>
<!--/.fluid-container-->
				<footer>
					<div id="footerLogo" >
						 <section>
								<p>Copyright © 2013 - SOSsys. - Todos os direitos reservados</p>
						 </section>
					</div>
				</footer>
	</div><!--/.fluid-container-->
	</div><!-- wrap ends-->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../js/raphael-min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src='../js/sparkline.js'></script>
    <script type="text/javascript" src='../js/morris.min.js'></script>
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>   
    <script type="text/javascript" src="../js/jquery.masonry.min.js"></script>   
    <script type="text/javascript" src="../js/jquery.imagesloaded.min.js"></script>   
    <script type="text/javascript" src="../js/jquery.facybox.js"></script>   
    <script type="text/javascript" src="../js/jquery.alertify.min.js"></script> 
    <script type="text/javascript" src="../js/jquery.knob.js"></script>
    <script type='text/javascript' src="../js/fullcalendar.min.js"></script>
    <script type='text/javascript' src="../js/jquery.gritter.min.js"></script>
    <script type="text/javascript" src="../js/realm.js"></script>
    <script type="text/javascript" src="../js/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput-1.3.min.js"></script>
</body>
</html>