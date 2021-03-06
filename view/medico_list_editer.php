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
									v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
									v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o terceiro e o quarto dígitos
									v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o setimo e o oitava dígitos
									v=v.replace(/(\d{3})(\d)/,"$1-$2")   //Coloca ponto entre o decimoprimeiro e o decimosegundo dígitos
									return v
								}
						
								//////// Mascara Data ////////
								function dateMask(inputData, e){
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
											  <img src="../ico/doctor-icon.png" alt="admin">
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
													<a class="accordion-toggle" href="medico_internacao.php"><img src="../ico/users_into.png" width="30"height="30" alt="Internação">Internação</a>
													<a class="accordion-toggle" href="medico_list_editer.php"><img src="../ico/alter.png" width="29"height="29" alt="Alterar">Editar Dados</a>
													<a class="accordion-toggle" href="medico_list_pacientes.php"><img src="../ico/list.png" width="29"height="29" alt="Alta">Listar Pacientes</a>
													<a class="accordion-toggle" href="medico_list_historico.php"><img src="../ico/archive.png" width="29"height="29" alt="Alta">Histórico</a>
												  </div>
											</div>
										  </div>
											<div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse5"><img src="../ico/Usuário-HM.png" width="29"height="29" alt="Hospital"><span>Visitantes</span></a>
												</div>
												<div id="collapse5" class="accordion-body collapse">
												  <div class="accordion-inner">
													<a class="accordion-toggle" href="#"><img src="../ico/livfro20de20visitas2013.png" width="29"height="29" alt="Alterar">Registrar Visitantes</a>
												  </div>
												</div>
											 </div>
											 <div class="accordion-group">
												<div class="accordion-heading">
													<a class="accordion-toggle b_F5C294" href="medico_sobre.php"><img src="../ico/info.png" width="26"height="26" alt="Painel de Vagas"><span>Sobre</span></a>
												</div>
											  </div>      
										</div>
				</div>
						  <!-- /Side menu -->
			<div class="main_container" id="forms_page">
						<div class="row-fluid">
							<ul class="breadcrumb">
								<li><a href="menu_medico.php">Home</a> <span class="divider">/</span></li>
								<li><a href="javascript:void();">Usuarios</a> <span class="divider">/</span></li>
								<li class="active">Listar Usuarios</li>
							</ul>
							<h2 class="heading">
								Lista de Pacientes
								<div class="btn-group pull-right">
									<a href="medico_internacao.php">
										<button class="btn">
											Internar Paciente
										</button>
									</a>
									<a href="medico_list_editer.php">
										<button class="btn">
											Editar Dados 
										</button>
									</a>
									<a href="medico_list_pacientes.php">
										<button class="btn">
											Listar Pacientes
										</button>
									</a>
								</div>
							</h2>
						</div>
						<div class="row-fluid">
							<div class="widget widget-padding span12">
								<div class="widget-header">
									<i>+</i>
									<h5>Lista de Pacientes</h5>
									<div class="widget-buttons">
										<a href="#" data-title="Collapse" data-collapsed="false"
											class="tip collapse"><img src="../imagens/sort_both.png"/></a>
									</div>
								</div>
								<form class="form-horizontal" name="forms"action="" method="post">
									<div class="widget-body">
										<div class="widget-forms clearfix">					
											<!--Começa-->
											
										
		<table class='table table-bordered'border='1'>
				<thead>
					<tr class='success'>
						<th><small><center><p class=text-info>ID</p></small></center></th>
						<th><small><center><p class='text-info'>Nome</p></small></center></th>
						<th><small><center><p class='text-info'>CPF</p></small></center></th>
						<th><small><center><p class='text-info'>RG</p></small></center></th>
						
						<th colspan='3'><small><center><p class='text-info'>Opções de Alteração</p></center></small></th>
					</tr>
				</thead>	
								
					<!-- exibimos, aqui, todos os Usuarios -->
<?php
error_reporting(0);
ini_set(“display_errors”, 0 );

     include "../controller/connect_bd.php";
		session_start();
		  
     $pega_dados = mysql_query("SELECT id,nome_paciente,cpf_paciente,rg_paciente FROM paciente ");
    
     
     while($mostra_dados = mysql_fetch_array($pega_dados)){
		 $id = $mostra_dados['id'];
         $nome_paciente = $mostra_dados['nome_paciente'];
         $cpf_paciente = $mostra_dados['cpf_paciente'];
		 $rg_paciente = $mostra_dados['rg_paciente'];
		 
				echo"<tr class='warning'>";
						echo"<th><small><center>$id</center></small></th>";
						echo"<th><small><center>$nome_paciente</center></small></th>";
						echo"<th><small><center>$cpf_paciente</center></small></th>";
						echo"<th><small><center>$rg_paciente</center></small></th>";
						echo"<th><center><a href='medico_editer_paciente.php?id=$id'><input class='btn btn-primary' type='button' value='Dados Paciente'></a></center></th>";
						echo"<th><center><a href='medico_editer_respaciente.php?id=$id'><input class='btn btn-primary' type='button' value='Dados Responsavel'></a></center></th>";
						echo"<th><center><a href='medico_editer_dados_internacao.php?id=$id'><input class='btn btn-primary' type='button' value='Dados Internação'></a></center></th>";
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
								<p>Copyright © 2014 - SOSsys. - Todos os direitos reservados</p>
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