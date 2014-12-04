<?php include_once '../includes/formataData.php';?>
<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<title>SOSsys</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="author" content="EliasAlves">
			<link rel="shortcut icon" href="../imagens/logotipo_teste.png">
			<link href="../css/bootstrap.css" rel="stylesheet">
			<link href="../css/theme.css" rel="stylesheet">
			<link href="../css/font-awesome.min.css" rel="stylesheet">
			<link href="../css/alertify.css" rel="stylesheet">
                        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
                        <script src="http://code.jquery.com/jquery-1.8.2.js"></script> 
                        <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
                         <script type="text/javascript">
                            jQuery(function($) {
                                $(".data").datepicker({
                                    dateFormat: 'dd/mm/yy',
                                    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
                                    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                                    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab', 'Dom'],
                                    monthNames: ['Janeiro', 'Fevereiro', 'Mar�o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                                    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                                    nextText: 'Próximo',
                                    prevText: 'Anterior'
                                });

                            });


                        </script>	
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
						
					
								//adiciona mascara ao RG
								function mrg(v){
								v=v.replace(/\D/g,'');
								v=v.replace(/^(\d{2})(\d)/g,"$1.$2");
								v=v.replace(/(\d{3})(\d)/g,"$1.$2");
								v=v.replace(/(\d{3})(\d)/g,"$1-$2");
								return v;
						}				
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
													<a class="accordion-toggle" href="list_hospital.php"><img src="../ico/alterhosp.png" width="29"height="29" alt="Alterar">Listar Hóspitais</a>
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
													<a class="accordion-toggle" href="list_medico.php"><img src="../ico/anamnese_icon.png" width="27"height="27" alt="Excluir">Listar Médicos</a></div>
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
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse5"><img src="../ico/Usuário-HM.png" width="29"height="29" alt=""><span>Visitantes</span></a>
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
								<li class="active">Internação</li>
							</ul>
							<h2 class="heading">
								Internação de Paciente
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
									<h5>Dados do Paciente</h5>
									<div class="widget-buttons">
										<a href="#" data-title="Collapse" data-collapsed="false"
											class="tip collapse"><img src="../imagens/sort_both.png"/></a>
									</div>
								</div>
								<form class="form-horizontal" name="forms"action="../model/cads_paciente.php" method="post">
									<div class="widget-body">
										<div class="widget-forms clearfix">					
											<div class="control-group">
												<label class="control-label">Nome:</label>
												<div class="controls">
													<input class="span7" required autofocus="true" value="" autocomplete="off" autofocus="true" type="text" name="nome_paciente" placeholder="Nome completo do paciente" />
												</div>
												<br /> <label class="control-label">CPF:</label>
												<div class="controls">
													<input class="span7" value="" autocomplete="off" maxlength="14" required name="cpf_paciente" onkeypress="javascript: mascara(this, cpf_mask);"type="text" placeholder="CPF do paciente"/>
													<span class="help-inline">Apenas números.</span> 
												</div>
												<br /> <label class="control-label">RG:</label>
												<div class="controls">
													<input class="span7" value="" maxlength="14" autocomplete="off" required id="rg" onkeypress="mascara(this, mrg);"name="rg_paciente" type="text" placeholder="RG do paciente"/>
													<span class="help-inline">Apenas números.</span>
												</div>
												<br /> <label class="control-label">Data de Nascimento:</label>
												<div class="controls">
													<input type="text" maxlength="10" autocomplete="off" value="" class="data" required name="dataNasc_paciente" placeholder="Qual a data de nascimento?">
												</div>
												<br /> <label class="control-label">Nome do Pai:</label>
												<div class="controls">
													<input  class="span7" value="" autocomplete="off" type="text"  name="pai_paciente" placeholder="Filiação paterna">
												</div>
												<br /> <label class="control-label">Nome da Mãe:</label>
												<div class="controls">
													<input  class="span7" value="" autocomplete="off" type="text" name="mae_paciente" placeholder="Filiação materna">
												</div>
												<div class="control-group">
													<br /><label class="control-label">Sexo</label>
													<div class="controls">			                       
													  <label class="radio">
														<input type="radio" value="Masculino" name="sexo" id="masculino" />
														Masculino
													  </label> 
													  <label class="radio">
														<input type="radio" value="Feminino" name="sexo" id="feminino" />
														Feminino
													  </label> 
													</div>
												  </div>
												
												 <label class="control-label">Endereço:</label>
												<div class="controls">
													<input class="span7" value="" autocomplete="off" name="endereco_paciente" required type="text" name="endereco_paciente" placeholder="Endereço do paciente"/>
												</div>
												<br /> <label class="control-label">Bairro:</label>
												<div class="controls">
													<input class="span7" value="" autocomplete="off" required name="bairro_paciente" type="text" placeholder="Bairro do paciente"/>
													<span class="help-inline">Bairro onde reside o paciente.</span>
												</div>
												<br /> <label class="control-label">Profissão:</label>
												<div class="controls">
													<input class="span7" value="" autocomplete="off" name="profissao_paciente" type="text" placeholder="Profissão do paciente"/>
												</div>
												<br />
											</div>

											<div class="control-group">
												<label class="control-label">Estado:</label>
												<div class="controls">
													<select tabindex="1" id="estado"size="1" name="estado_paciente" value="" class="span7" data-placeholder="Selecione.." ></select>
													<span class="help-inline">Estado natal do  paciente.</span>
												</div>
											</div>
											<label class="control-label">Cidade:</label>
												<div class="controls">
													<select class="span7" id="cidade"value="" required name="cidade_paciente" type="text" placeholder="Cidade natal do paciente "/></select>
													<span class="help-inline">Cidade natal do  paciente.</span>
												</div>
											<br />	
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
		</div><!-- /Main window -->
	</div><!--/.fluid-container-->
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
	<script type="text/javascript" src="js/jquery.maskedinput-1.3.min.js"></script>
</body>
</html>