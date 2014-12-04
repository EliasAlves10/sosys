<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
				<div class="sidebar-nav nav-collapse collapse">
											<div class="user_side clearfix">
											  <img src="../ico/admin.png" alt="admin">
											 <h6><?php
											//include "../controller/connect_bd.php";
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
													<a class="accordion-toggle" href="internacao.php"><img src="../ico/users_into.png" width="30"height="30" alt="Interna��o">Internação</a>
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
													<a class="accordion-toggle" href="list_hospital.php"><img src="../ico/alterhosp.png" width="29"height="29" alt="Alterar">Listar Hóspitais</a>
													<a class="accordion-toggle" href="insert_leito.php"><img src="../ico/leito.png" width="27"height="27" alt="Cadastrar Leito">Cadastrar Leito</a>
													<a class="accordion-toggle" href="list_leito.php"><img src="../ico/lista.png" width="29"height="29" alt="Listar Leito">Listar Leitos</a>
												  </div>
												</div>
											 </div>
											 <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse3"><img src="../ico/medico.png" width="29"height="29" alt="Medico"><span>M�dico</span></a>
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
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse5"><img src="../ico/Usu�rio-HM.png" width="29"height="29" alt="Hospital"><span>Visitantes</span></a>
												</div>
												<div id="collapse5" class="accordion-body collapse">
												  <div class="accordion-inner">
													<a class="accordion-toggle" href="#"><img src="../ico/livfro20de20visitas2013.png" width="29"height="29" alt="Alterar">Registrar Visitantes</a>
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
				<script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>
				<script type="text/javascript">
				window.onload = function() {
					new dgCidadesEstados(
						document.getElementById('estado'),
						document.getElementById('cidade'),
						true
					);
				}
				</script>
						  <!-- /Side menu -->
			<div class="main_container" id="forms_page">
						<div class="row-fluid">
							<ul class="breadcrumb">
								<li><a href="home.php">Home</a> <span class="divider">/</span></li>
								<li><a href="javascript:void();">Pacientes</a> <span class="divider">/</span></li>
								<li class="active">Interna��o</li>
							</ul>
							<h2 class="heading">
								Interna��o de Paciente
								<div class="btn-group pull-right">
									<a href="internacao.php">
										<button class="btn">
											Internar Paciente
										</button>
									</a>
									<a href="list_editer.php">
										<button class="btn">
											Editar Dados 
										</button>
									</a>
									<a href="list_pacientes.php">
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
										<h5>Dados do Responsavel</h5>
										<div class="widget-buttons">
											<a href="#" data-title="Collapse" data-collapsed="false"
												class="tip collapse"><img src="../imagens/sort_both.png"/></a>
										</div>
									</div>
								<script type="text/javascript">
								/* M�scaras ER mascara para telefone */
								function mascara(o,f){
									v_obj=o
									v_fun=f
									setTimeout("execmascara()",1)
								}
								function execmascara(){
									v_obj.value=v_fun(v_obj.value)
								}
								function mtel(v){
									v=v.replace(/\D/g,"");             //Remove tudo o que n�o � d�gito
									v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca par�nteses em volta dos dois primeiros d�gitos
									v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca h�fen entre o quarto e o quinto d�gitos
									return v;
									
}
								</script>
								<form class="form-horizontal" action="../model/cads_respaciente.php" method="post">
									<div class="widget-body">
										<div class="widget-forms clearfix">
                                               <!-- Inicio do menu -->	
												<div class="control-group">
													<label class="control-label">Nome:</label>
														<div class="controls">
															<input class="span7"autofocus="true" autocomplete="off"  value=""autofocus="true" type="text" name="nomeResp_paciente" placeholder="Nome completo do responsavel pelo paciente" />
														</div>
													<br/><label class="control-label">Endere�o:</label>
														<div class="controls">
															<input class="span7" autocomplete="off" value="" type="text" name="enderecoResp_paciente" placeholder="Endere�o do responsavel pelo paciente" />
														</div>
													<br /> <label class="control-label">Bairro:</label>
														<div class="controls">
															<input class="span7" autocomplete="off" value=""  name="bairroResp_paciente" type="text" placeholder="Bairro do responsavel pelo paciente"/>
														</div>
														<br/><div class="control-group">
												<label class="control-label">Estado:</label>
												<div class="controls">
													<select tabindex="1" size="1"id="estado" name="estadoResp_paciente" value="" class="span7" data-placeholder="Selecione.." ></select>
														<span class="help-inline">Estado onde reside o responsavel pelo paciente.</span>
												</div>
											</div>
												<label class="control-label">Cidade:</label>
														<div class="controls">
															<select class="span7" id="cidade" value=""  name="cidadeResp_paciente" type="text" placeholder="Cidade atual do responsavel pelo paciente "/></select>
															<span class="help-inline">Cidade onde reside o responsavel pelo paciente.</span>
													</div>
													<br/>
													<div class="input-prepend">
												<label class="control-label">Telefone:</label>
														<div class="controls">
														<span class="add-on"><img src="../imagens/icone-telefone.png"style="6px center no-repeat;"></span>
															<input class="span18" autocomplete="off" onkeyup="mascara( this, mtel );" maxlength="16" value=""  name="telefoneResp_paciente" type="tel" placeholder=""/>
															<span class="help-inline">Digite somente os numeros com o c�digo</span>
														</div>
												<br/>			
												<label class="control-label">Telefone 2:</label>
														<div class="controls">
														<span class="add-on"><img src="../imagens/icone-telefone.png"style="6px center no-repeat;"></span>
															<input class="span18" autocomplete="off" onkeyup="mascara( this, mtel );" maxlength="16" value=""  name="telefoneResp_paciente2" type="tel" placeholder=""/>
															<span class="help-inline">Digite somente os numeros com o c�digo</span>
														</div>				
													</div>	
														
												</div>
												<div class="widget-footer">
													<button class="btn btn-success" type="submit">Salvar</button>
													<button class="btn btn-danger" type="reset">Apagar</button>
												</div>
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
								<p>Copyright � 2013 - SOSsys. - Todos os direitos reservados</p>
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
</body>
</html>