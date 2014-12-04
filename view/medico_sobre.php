<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<html>
		<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
			<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
				<title>SOSsys</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="author" content="EliasAlves">
			<link rel="shortcut icon" href="../imagens/logotipo_teste.png">
			<link href="../css/bootstrap.css" rel="stylesheet">
			<link href="../css/style_sobre.css" rel="stylesheet">
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
									  <li style="position:absolute;right:4px; top:2px;"><a href="../controller/logout.php""><img src="../ico/exit.png" title="Sair do Sistema."width="22"height="28" alt="Painel de Vagas"><b title="Sair">Sair</b></a></li>
									</ul>
							  </div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
				<!-- Side menu -->
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
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse5"><img src="../ico/Uso.png" width="29"height="29" alt=""><span>Visitantes</span></a>
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
								<li><a href="home.php">Home</a> <span class="divider">/</span></li>
								<li class="active">Sobre</li>
								
							</ul>
							<h2 class="heading">
								Sobre
							</h2>
						</div>
						<div class="row-fluid">
							<div class="widget widget-padding span12">
								<div class="widget-header">
									<i>+</i>
									<h5>O Sistema que salva vidas.</h5>
									<div class="widget-buttons">
										<a href="#" data-title="Collapse" data-collapsed="false"
											class="tip collapse"><img src="../imagens/sort_both.png"/></a>
									</div>
								</div>
								
									<div class="widget-body">
										<div class="widget-forms clearfix">					
											<div class="control-group">
												
	<p>
		De acordo com pesquisas auxiliadas por profissionais da área de saúde um dos principais problemas enfrentados nas emergências realizadas pelo SAMU é a falta de informação quanto à disposição de leitos nas unidades de terapia intensivas (UTI). Dificultando um atendimento onde vida e morte está lado a lado.
	</p>   
	<p> 
		Em nossa capital acontece varias intercorrências na área da saúde, disponibilizamos de um serviço de atendimento para urgência e emergência o SAMU solicitando serviços ao mesmo é realizado os primeiros socorros, e acontece a transferência para o atendimento hospitalar, mas quando o atendimento é emergente, ou seja, aquele que a vitima não pode esperar, surge o problema da vaga disponível na unidade de terapia intensiva.
	</p>
	<p> 
		Com base nessa deficiência importante em que a vida é prioridade, viabilizamos a necessidade da utilização de um sistema onde mostra com antecipação o local da vaga determinada e a quantidade das mesmas para o serviço do SAMU, assim para suprir essa necessidade surgiu o SOSsys.             
	</p>

		<br>
			<pre class="componente1">
				<img align="left"src="../imagens/adriano_lima.jpg"width="140"height="140" class="img-polaroid">
					<div class="conter1">
						Nome:Adriano da Silva Lima
						Contribuição:Programação Back-end em PHP e Implementações no Banco de dados.
					</div>	
			</pre>
		    <pre class="componente2">
			    <img align="left" src="../imagens/alexandre_tavares.jpg"width="140"height="140" class="img-polaroid">
					<div class="conter2">
					    Nome:Alexandre Tavares
					    Contribuição:Engenharia do sistema(UML).
					</div>
		    </pre>
			<pre>
				<img  align="left" src="../imagens/elias_alves.jpg"width="137"height="140" class="img-polaroid">
					<div class="conter3">
					    Nome:Elias Alves de Sousa
					    Contribuição:Programação Back-end e Front-end em PHP.
					</div>
			</pre>					
											
											
										</div>
									</div>
									<div class="widget-footer">
										
									</div>
								
							</div>
						</div>
				<div class="row-fluid"></div>
			</div>
		</div>
<!-- /Main window -->

	</div>
<!--/.fluid-container-->
	</div><!-- wrap ends-->			  
				  <!-- fim conteiner -->
				<footer>
					<div id="footerLogo" >
						 <section>
								<p>Copyright ɠ2013 - SOSsys. - Todos os direitos reservados</p>
						 </section>
					</div>
				</footer>
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