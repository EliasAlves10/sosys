<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
			<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
				<title>SOSsys</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="author" content="EliasAlves">
			<link rel="shortcut icon" href="../imagens/logotipo_teste.png">
			<!-- Estilos CSS3-->
			<link href="../css/bootstrap.css" rel="stylesheet">
			<link href="../css/theme.css" rel="stylesheet">
			<link href="../css/font-awesome.min.css" rel="stylesheet">
			<link href="../css/alertify.css" rel="stylesheet">
		    <link href="../imagens/glyphicons-halflings.png">
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
										<li style="position:absolute;right:4px; top:2px;"><a href="../controller/logout.php"><img src="../ico/exit.png" title="Sair do Sistema."width="22"height="28" alt="Painel de Vagas"><b title="Sair">Sair</b></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<!-- Side menu -->
									<div class="sidebar-nav nav-collapse collapse">
										<div class="user_side clearfix">
											<img src="../ico/doctor-icon.png" alt="medico">
											<h6><?php
											include"user.php";
											?>
											</h6>
										</div>
										<div class="accordion" id="accordion2">
											  <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle active b_F79999" href="menu_medico.php"><img src="../ico/vagas.png" width="30"height="30" alt="Painel de Vagas"><span><b>Painel de Vagas</b></span></a>
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
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse5"><img src="../ico/Uso.png" width="29"height="29" alt="Hospital"><span>Configurações</span></a>
												</div>
												<div id="collapse5" class="accordion-body collapse">
												  <div class="accordion-inner">
													<a class="accordion-toggle" href="#"><img src="../ico/livfro20de20visitas2013.png" width="29"height="29" alt="Alterar">Atualizar dados</a>
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
						<!-- /End Side menu -->
				        <div class="main_container" id="forms_page">
							<div class="row-fluid">
								<ul class="breadcrumb">
									<li><a href="menu_medico.php">Home</a> <span class="divider">/</span></li>
									<li><a href="javascript:void();">Painel de Vagas</a> <span class="divider">/</span></li>
									<li class="active">Vagas atuais</li>
								</ul>
								<h2 class="heading">Painel de vagas</h2>
							</div>
							<div class="row-fluid">
								<div class="widget widget-padding span12">
									<div class="widget-header">
										<i>+</i>
										<h5>Painel de Vagas</h5>
										<div class="widget-buttons">
											<a href="#" data-title="Collapse" data-collapsed="false"class="tip collapse"><img src="../imagens/sort_both.png"/></a>
										</div>
									</div>
									<div class="widget-body">
											<div class="widget-forms clearfix">					
												<div class="control-group">
													<!--Aki começa o painel de vagas -->
													<table class='table table-bordered'border='1'>
														<thead>
															<tr class='success'>
																<th><small><center><p class=text-info>ID</p></center></small></th>
																<th><small><center><p class='text-info'>Nome</p></center></small></th>
																<th><small><center><p class='text-info'>Endereço</p></center></small></th>
																<th><small><center><p class='text-info'>Bairro</p></center></small></th>
																<th><small><center><p class='text-info'>Telefone</p></center></small></th>
																<th><small><center><p class='text-info'>Email do Hospital</p></center></small></th>
																<th colspan='1'><small><center><p class='text-info'>Vagas disponiveis</p></center></small></th>
															</tr>
														</thead>	
									
														<?php
															error_reporting(0);
															ini_set("display_errors", 0 );	
																 include "../controller/connect_bd.php";
																//querry para pegar dados do hospital//	  
																 $pega_dados = mysql_query("SELECT id,nome_hospital,endereco_hospital,bairro_hospital,telefone_hospital,email_hospital,total_leito FROM hospital");
																//while para selecionar dados a povoar a tabela resultante//																 
																 while($mostra_dados = mysql_fetch_array($pega_dados)){
																	 $id = $mostra_dados['id'];
																	 $nome_hospital = $mostra_dados['nome_hospital'];
																	 $endereco_hospital  = $mostra_dados['endereco_hospital'];
																	 $bairro_hospital = $mostra_dados['bairro_hospital'];
																	 $telefone_hospital = $mostra_dados['telefone_hospital'];
																	 $email_hospital = $mostra_dados['email_hospital'];
																	 $total_leito = $mostra_dados['total_leito'];
																	    //formando tabela//
																			echo"<tr class='warning'>";
																					echo"<th><small><center>$id</center></small></th>";
																					echo"<th><small><center>$nome_hospital</center></small></th>";
																					echo"<th><small><center>$endereco_hospital</center></small></th>";
																					echo"<th><small><center>$bairro_hospital</center></small></th>";
																					echo"<th><small><center>$telefone_hospital</center></small></th>";
																					echo"<th><small><center>$email_hospital</center></small></th>";
																					echo"<th><small><center>$total_leito</center></small></th>";
																			echo"</tr>";
																	}
															?>
																
													</table><!--Aki termina o painel de vagas -->
												</div>
											</div>
										</div>		
								<div class="row-fluid"></div>
							</div>
						</div><!-- End Main window -->
					</div><!--/.End fluid-container-->
				</div><!-- wrap ends-->			  
				<!-- fim do conteiner -->
			</div>	
				<footer>
					<div id="footerLogo">
					<!--section serve como rodape-->
						 <section>
								<p>Copyright ɠ2013 - SOSsys. - Todos os direitos reservados</p>
						 </section>
					</div>
				</footer>
			</div><!--/.fluid-container-->
	</div><!-- wrap ends-->	
			<!-- componentes javascript -->	
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