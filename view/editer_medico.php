<?php include_once '../includes/formataData.php';?>
<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
			<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
				<title>SOSsys</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="author" content="EliasAlves">
			<link rel="shortcut icon" href="../imagens/logotipo_teste.png">
			<link href="../css/bootstrap.css" rel="stylesheet">
			<link href="../css/theme.css" rel="stylesheet">
			<link href="../css/font-awesome.min.css" rel="stylesheet">
			<link href="../css/alertify.css" rel="stylesheet">
			<link href="../css/style-page-medico.css" rel="stylesheet">
                        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
                        <script src="http://code.jquery.com/jquery-1.8.2.js"></script> 
                        <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
                         <script type="text/javascript">
                            jQuery(function($) {
                                $(".data").datepicker({
                                    dateFormat: 'dd/mm/yy',
                                    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
                                    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                                    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
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
													<a class="accordion-toggle" href="internacao.php"><img src="../ico/users_into.png" width="30"height="30" alt="Interna��o">Internação</a>
													<a class="accordion-toggle" href="list_editer.php"><img src="../ico/alter.png" width="29"height="29" alt="Alterar">Editar Dados</a>
													<a class="accordion-toggle" href="list_pacientes.php"><img src="../ico/list.jpg" width="29"height="29" alt="Alta">Listar Pacientes</a>
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
							 <?php
									
           require"../controller/connect_bd.php";
            $id = $_GET["id"];
            $consulta = mysql_query ("SELECT * FROM medico WHERE id = $id;");

            if($consulta == false) {
               

             } else {
               while($camp =@mysql_fetch_array($consulta)){
               $id= $camp["id"];
               $nome_medico = $camp["nome_medico"];
               $cpf_medico = $camp["cpf_medico"];
			   $rg_medico = $camp["rg_medico"];
			   $dataNasc_medico = $camp["dataNasc_medico"];
			   $crm_medico = $camp["crm_medico"];
			   $especialidade_medico = $camp["especialidade_medico"];
			   $sexo = $camp["sexo"];
			   $endereco_medico = $camp["endereco_medico"];
			   $bairro_medico = $camp["bairro_medico"];
			   $nacionalidade_medico = $camp["nacionalidade_medico"];
			   $estado_medico = $camp["estado_medico"];
			   $cidade_medico = $camp["cidade_medico"];
			   $telefone_medico = $camp["telefone_medico"];
			   $email_medico = $camp["email_medico"];
               }
            }

	?>
				
						  <!-- /Side menu -->
			<div class="main_container" id="forms_page">
						<div class="row-fluid">
							<ul class="breadcrumb">
								<li><a href="home.php">Home</a> <span class="divider">/</span></li>
								<li><a href="javascript:void();">Médico</a> <span class="divider">/</span></li>
								<li class="active">Cadatrar</li>
							</ul>
							<h2 class="heading">
								Cadastro de Médico
								<div class="btn-group pull-right">
									<a href="insert_medico.php">
										<button class="btn">
											Cadastrar Médicos
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
									<h5>Dados do Médico</h5>
									<div class="widget-buttons">
										<a href="#" data-title="Collapse" data-collapsed="false"
											class="tip collapse"><img src="../imagens/sort_both.png"/></a>
									</div>
								</div>
								<form class="form-horizontal" name="forms"action="../model/update_medico.php" method="post">
									<div class="widget-body">
										<div class="widget-forms clearfix">	
											<div class="control-group">
												<div class="controls">
													<input class="span7"  required value="<?php echo $id;?>" type="hidden" name="id" placeholder="Login do Usuario" autocomplete="off"/>
												</div><br/>
												<label class="control-label">Nome:</label>
												<div class="controls">
													<input class="span7" required value="<?php echo $nome_medico;?>" autofocus="true" type="text" name="nome_medico" placeholder="Nome do Médico" />
												</div>
												<br /> <label class="control-label">CPF:</label>
												<div class="controls">
													<input class="span7" value="<?php echo $cpf_medico;?>" maxlength="14" required name="cpf_medico" onkeypress="javascript: mascara(this, cpf_mask);"type="text" placeholder="CPF do Médico"/>
													<span class="help-inline">Digite apenas os números.</span> 
												</div>
												<br /> <label class="control-label">RG:</label>
												<div class="controls">
													<input class="span7" value="<?php echo $rg_medico;?>"  required name="rg_medico" id="rg" onkeypress="mascara(this, mrg);" size="14" maxlength="12"type="text" placeholder="RG do Médico"/>
													 <span class="help-inline">Digite apenas os números.</span>
												</div>
												<br /> <label class="control-label">Data de Nascimento:</label>
												<div class="controls">
                                                   <input type="text" maxlength="10" class="data" value="<?php echo formata_data($dataNasc_medico);?>" required name="dataNasc_medico" placeholder="Digite somente os numeros">
												</div>
												<br/>
												<div class="positionCRM">
												 <label class="control-label">CRM:</label>
												 	<div class="controls">
													<input  class="span3"value="<?php echo $crm_medico;?>" type="text" required name="crm_medico" placeholder="Digite aqui o CRM">
												</div>
												</div>
												<br /> <label class="control-label">Especialidade:</label>
												<div class="controls">
													<input  class="span7" value="<?php echo $especialidade_medico;?>" type="text" required name="especialidade_medico" placeholder="Digite aqui a Especialidade do Médico">
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
													<input class="span7" value="<?php echo $endereco_medico;?>" name="endereco_medico" required type="text" placeholder="Endereço do Médico"/>
												</div>
												
												<br /> <label class="control-label">Bairro:</label>
												<div class="controls">
													<input class="span7" value="<?php echo $bairro_medico;?>" required name="bairro_medico" type="text" placeholder="Bairro onde reside o Médico"/>
												</div>
												<br /> <label class="control-label">Nacionalidade:</label>
												<div class="controls">
													<input class="span7" value="<?php echo $nacionalidade_medico;?>"required name="nacionalidade_medico" type="text" placeholder="Nacionalidade do Médico"/>
												</div>
												
											</div>
											<div class="control-group">
												<label class="control-label">Estado:</label>
												<div class="controls">
													<input tabindex="1" size="1" name="estado_medico"id="estado" value="<?php echo $estado_medico;?>"class="span7" data-placeholder="Selecione.." ><!--</select>-->
													<span class="help-inline">Estado onde reside o médico.</span>
												</div>
											</div>
											<label class="control-label">Cidade:</label>
												<div class="controls">
													<input class="span7"value="<?php echo $cidade_medico;?>" id="cidade"required name="cidade_medico" type="text" data-placeholder="Selecione.."/><!--</select>-->
													<span class="help-inline">Cidade onde reside o médico.</span>
												</div>
												<br/>
												<div class="input-prepend">
												<label class="control-label">Telefone:</label>
														<div class="controls">
														<span class="add-on"><img src="../imagens/icone-telefone.png"style="6px center no-repeat;"></span>
															<input class="span18" onkeyup="mascara( this, mtel );" maxlength="16" value="<?php echo $telefone_medico;?>" required name="telefone_medico" type="tel" placeholder="DDD mais o n�mero somente"/>
															<span class="help-inline">Digite somente os numeros com o código sem o zero.</span>
														</div>	
											</div>
												<span class="help-inline"><span style=" top:826px;position:absolute;left:459px;">Digite somente os numeros iniciado pelo codigo sem o zero.</span></span>
											<br/><br/>
											<div>	
											<div class="input-prepend">
												<label class="control-label">Email:</label>
														<div class="controls">
														<span class="add-on">@</span>
															<input class="span18"  value="<?php echo $email_medico;?>"  name="email_medico" type="email" placeholder=""/>
														</div>
											</div>
											</div>
												<span class="help-inline"><span style=" top:876px;position:absolute;left:459px;">Digite aqui o email.</span></span>
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
		</div>
<!-- /Main window -->

	</div>
<!--/.fluid-container-->
				<footer>
					<div id="footerLogo">
						 <section>
								<p>Copyright  © 2013 - SOSsys. - Todos os direitos reservados</p>
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