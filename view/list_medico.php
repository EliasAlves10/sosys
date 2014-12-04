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
									v=v.replace(/\D/g,"")                 //Remove tudo o que n�o � d�gito
									v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o terceiro e o quarto d�gitos
									v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o setimo e o oitava d�gitos
									v=v.replace(/(\d{3})(\d)/,"$1-$2")   //Coloca ponto entre o decimoprimeiro e o decimosegundo d�gitos
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
													<a class="accordion-toggle" href="internacao.php"><img src="../ico/users_into.png" width="30"height="30" alt="Internação">Internação</a>
													<a class="accordion-toggle" href="list_editer.php"><img src="../ico/alter.png" width="29"height="29" alt="Alterar">Editar Dados</a>
													<a class="accordion-toggle" href="list_pacientes.php"><img src="../ico/list.png" width="29"height="29" alt="Alta">Listar Pacientes</a>
													<a class="accordion-toggle" href="list_historico.php"><img src="../ico/archive.png" width="29"height="29" alt="Alta">Histórico</a>
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
													<a class="accordion-toggle" href="list_hospital.php"><img src="../ico/alterhosp.png" width="29"height="29" alt="Alterar">Listar Hospitais</a>
													<a class="accordion-toggle" href="insert_leito.php"><img src="../ico/leito.png" width="27"height="27" alt="Cadastrar Leito">Cadastrar Leito</a>
													<a class="accordion-toggle" href="list_leito.php"><img src="../ico/lista.png" width="29"height="29" alt="Listar Leito">Listar Leitos</a>
												  </div>
												</div>
											 </div>
											 <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse3"><img src="../ico/medico.png" width="29"height="29" alt="Medico"><span>Médico</span></a>
												</div>
												<div id="collapse3" class="accordion-body collapse">
												  <div class="accordion-inner">
													<a class="accordion-toggle" href="insert_medico.php"><img src="../ico/doctor-icon.png" width="29"height="29" alt="Cadastro">Cadastrar</a>
													<a class="accordion-toggle" href="list_medico.php"><img src="../ico/anamnese_icon.png" width="27"height="27" alt="Excluir">Listar Médicos</a>												  </div>
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
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse5"><img src="../ico/Uso.png" width="29"height="29" alt="Hospital"><span>Visitantes</span></a>
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
								<li><a href="javascript:void();">Médico</a> <span class="divider">/</span></li>
								<li class="active">Lista de Médicos</li>
							</ul>
							<h2 class="heading">
								Lista de Médicos
								<div class="btn-group pull-right">
									<a href="insert_medico.php">
										<button class="btn">
											Cadastrar Médico
										</button>
									</a>
									<a href="list_medico.php">
										<button class="btn">
											 Listar Médicos
										</button>
									</a>
								</div>
							</h2>
						</div>
						<div class="row-fluid">
							<div class="widget widget-padding span12">
								<div class="widget-header">
									<i>+</i>
									<h5>Lista de Médicos</h5>
									<div class="widget-buttons">
										<a href="#" data-title="Collapse" data-collapsed="false"
											class="tip collapse"><img src="../imagens/sort_both.png"/></a>
									</div>
								</div>
									<div class="widget-body">
										<div class="widget-forms clearfix">					
											<!--Come�a-->
											
		<table class='table table-bordered'border='1'>
				<thead>
					<tr class='success'>
						<th><small><center><p class=text-info>ID</p></center></small></th>
						<th><small><center><p class='text-info'>Nome</p></center></small></th>
						<th><small><center><p class='text-info'>CPF</p></center></small></th>
						<th><small><center><p class='text-info'>CRM</p></center></small></th>
						<th><small><center><p class='text-info'>Nacionalidade</p></center></small></th>
						<th><small><center><p class='text-info'>Telefone</p></center></small></th>
						<th><small><center><p class='text-info'>Email</p></center></small></th>
						<th colspan='2'><small><center><p class='text-info'>Operações</p></center></small></th>
					</tr>
				</thead>	
								
					<!-- exibimos, aqui, todos os Usuarios -->
<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

     include "../controller/connect_bd.php";
		session_start();
		  
     $pega_dados = mysql_query("SELECT id,nome_medico,cpf_medico,crm_medico,nacionalidade_medico,telefone_medico,email_medico FROM medico");
    
     
     while($mostra_dados = mysql_fetch_array($pega_dados)){
		 $id = $mostra_dados['id'];
         $nome_medico = $mostra_dados['nome_medico'];
         $cpf_medico  = $mostra_dados['cpf_medico'];
	     $crm_medico  = $mostra_dados['crm_medico'];
		 $nacionalidade_medico = $mostra_dados['nacionalidade_medico'];
		 $telefone_medico = $mostra_dados['telefone_medico'];
		 $email_medico = $mostra_dados['email_medico'];

         		echo"<tr class='warning'>";
						echo"<th><small><center>$id</center></small></th>";
						echo"<th><small><center>$nome_medico</center></small></th>";
						echo"<th><small><center>$cpf_medico</center></small></th>";
						echo"<th><small><center>$crm_medico</center></small></th>";
						echo"<th><small><center>$nacionalidade_medico</center></small></th>";
						echo"<th><small><center>$telefone_medico</center></small></th>";
						echo"<th><small><center>$email_medico</center></small></th>";
						echo"<th><center><a href='editer_medico.php?id=$id'><input class='btn btn-primary' type='button' value='Alterar'></a></center></th>";
						echo"<th><center><a href='../model/exc_medico.php?id=$id'><input class='btn btn-danger' type='button' value='Remover'></a></center></th>";
				echo"</tr>";
		}
?>
			
		</table>

										</div>
									</div>
									
								</form>
							</div>
						</div>
				<div class="row-fluid"></div>
			</div>
		</div>
<!-- /Main window -->

	</div>
<!--/.fluid-container-->
				<footer>
					<div id="footerLogo" >
						 <section>
								<p>Copyright  © 2014 - SOSsys. - Todos os direitos reservados</p>
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
	<script type="text/javascript" src="../js/jquery.maskedinput-1.3.min.js"></script>
</body>
</html>