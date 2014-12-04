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
		    <link href="../jss/cidades-estados-v0.2.js" rel="stylesheet">
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
					<script type="text/javascript">
								/* Máscaras ER mascara para telefone */
								function mascara(o,f){
									v_obj=o
									v_fun=f
									setTimeout("execmascara()",1)
								}
								function execmascara(){
									v_obj.value=v_fun(v_obj.value)
								}
								function mtel(v){
									v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
									v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
									v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
									return v;
								
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
													<a class="accordion-toggle" href="internacao.php"><img src="../ico/users_into.png" width="30"height="30" alt="Internação">InternaÃ§Ã£o</a>
												    <a class="accordion-toggle" href="list_editer.php"><img src="../ico/alter.png" width="29"height="29" alt="Alterar">Editar Dados</a>
													<a class="accordion-toggle" href="list_pacientes.php"><img src="../ico/list.jpg" width="29"height="29" alt="Alta">Listar Pacientes</a>
													<a class="accordion-toggle" href="list_historico.php"><img src="../ico/archive.png" width="29"height="29" alt="Alta">HistÃ³rico</a>
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
													<a class="accordion-toggle" href="list_hospital.php"><img src="../ico/alterhosp.png" width="29"height="29" alt="Alterar">Listar HÃ³spitais</a>
												    <a class="accordion-toggle" href="insert_leito.php"><img src="../ico/leito.png" width="27"height="27" alt="Cadastrar Leito">Cadastrar Leito</a>
													<a class="accordion-toggle" href="list_leito.php"><img src="../ico/lista.png" width="29"height="29" alt="Listar Leito">Listar Leitos</a>
												  </div>
												</div>
											 </div>
											 <div class="accordion-group">
												<div class="accordion-heading">
												  <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse3"><img src="../ico/medico.png" width="29"height="29" alt="Medico"><span>MÃ©dico</span></a>
												</div>
												<div id="collapse3" class="accordion-body collapse">
												  <div class="accordion-inner">
													<a class="accordion-toggle" href="insert_medico.php"><img src="../ico/doctor-icon.png" width="29"height="29" alt="Cadastro">Cadastrar</a>
													<a class="accordion-toggle" href="list_medico.php"><img src="../ico/anamnese_icon.png" width="27"height="27" alt="Excluir">Listar MÃ©dicos</a>	
													</div>
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
								/* Máscaras ER mascara para telefone */
								function mascara(o,f){
									v_obj=o
									v_fun=f
									setTimeout("execmascara()",1)
								}
								function execmascara(){
									v_obj.value=v_fun(v_obj.value)
								}
								function mtel(v){
									v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
									v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
									v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
									return v;
								
				</script>
				<?php
					error_reporting(0);
				ini_set(â€œdisplay_errorsâ€, 0 );				
           require"../controller/connect_bd.php";
            $id = $_GET["id"];
            $consulta = mysql_query ("SELECT * FROM hospital WHERE id = $id;");

            if($consulta == false) {
               

             } else {
               while($camp =@mysql_fetch_array($consulta)){
               $id= $camp["id"];
               $nome_hospital = $camp["nome_hospital"];
			   $cnpj_hospital = $camp["cnpj_hospital"];
			   $endereco_hospital = $camp["endereco_hospital"];
			   $bairro_hospital = $camp["bairro_hospital"];
			   $estado_hospital = $camp["estado_hospital"];
			   $cidade_hospital = $camp["cidade_hospital"];
			   $telefone_hospital = $camp["telefone_hospital"];
			   $telefone2_hospital = $camp["telefone2_hospital"];
			   $email_hospital = $camp["email_hospital"];
			   $total_uti = $camp['total_uti'];
			   $total_leito = $camp['total_leito'];
               }
            }

       ?>
						  <!-- /Side menu -->
			<div class="main_container" id="forms_page">
						<div class="row-fluid">
							<ul class="breadcrumb">
								<li><a href="home.php">Home</a> <span class="divider">/</span></li>
								<li><a href="javascript:void();">Hospital</a> <span class="divider">/</span></li>
								<li class="active">Cadastrar</li>
							</ul>
							<h2 class="heading">
								Cadastro de Hospital
								<div class="btn-group pull-right">
									<a href="insert_hospital.php">
										<button class="btn">
											Cadastrar Hospital
										</button>
									</a>								
									<a href="list_hospital.php">
										<button class="btn">
											Listar Hospitais
										</button>
									</a>
									<a href="insert_leito.php">
										<button class="btn">
											Cadastrar Leito
										</button>
									</a>
									
								</div>
							</h2>
						</div>
						<div class="row-fluid">
							<div class="widget widget-padding span12">
								<div class="widget-header">
									<i>+</i>
									<h5>Dados do Hospital</h5>
									<div class="widget-buttons">
										<a href="#" data-title="Collapse" data-collapsed="false"
											class="tip collapse"><img src="../imagens/sort_both.png"/></a>
									</div>
								</div>
								<form class="form-horizontal" name="forms"action="../model/update_hospital.php" method="post">
									<div class="widget-body">
										<div class="widget-forms clearfix">					
											<div class="control-group">
											  <label class="control-label"></label>
												<div class="controls">
													<input class="span7" value="<?php echo $id;?>" type="hidden" name="id" placeholder="Login do Usuario" autocomplete="off"/>
												</div><br/>
												<label class="control-label">Nome:</label>
												<div class="controls">
													<input class="span7" autofocus="true" autocomplete="off" value="<?php echo $nome_hospital;?>" type="text" name="nome_hospital" placeholder="Nome do Hospital" />
												</div>
												<br /> <label class="control-label">CNPJ:</label>
												<div class="controls">
													<input class="span7" autocomplete="off" value="<?php echo $cnpj_hospital;?>" maxlength="14" required name="cnpj_hospital" onkeypress=""type="text" placeholder="CNPJ do Hospital"/>
												</div>
												 <br /><label class="control-label">EndereÃ§o</label>
												<div class="controls">
													<input class="span7" autocomplete="off" value="<?php echo $endereco_hospital;?>" name="endereco_hospital" required type="text" name="endereco_paciente" placeholder="Endereço do Hospital"/>
												</div>
												<br /> <label class="control-label">Bairro:</label>
												<div class="controls">
													<input class="span7"autocomplete="off" value="<?php echo $bairro_hospital;?>"required name="bairro_hospital" type="text" placeholder="Bairro do Hospital"/>
												</div>
											<br>	
											</div>
											 <label class="control-label">Estado:</label>
												<div class="controls">
													<input class="span7" autocomplete="off" id="estado" value="<?php echo $estado_hospital;?>" required name="estado_hospital" type="text" placeholder=""/>
												</div>	
											<br/>
											 <label class="control-label">Cidade:</label>
												<div class="controls">
													<input class="span7" autocomplete="off" id="cidade"value="<?php echo $cidade_hospital;?>"  required name="cidade_hospital" type="text" placeholder="Cidade do Hospital"/>
												</div>
														
											<br/>
											<div class="input-prepend">
												<label class="control-label">Telefone:</label>
														<div class="controls">
														<span class="add-on"><img src="../imagens/icone-telefone.png"style="6px center no-repeat;"></span>
															<input class="span18" autocomplete="off" onkeyup="mascara(this,mtel);" maxlength="16" value="<?php echo $telefone_hospital;?>" required name="telefone_hospital" type="tel" placeholder=""/>
														</div>	
											</div>
											<span class="help-inline"><span style=" top:540px;position:absolute;left:459px;">Digite somente os numeros com o código</span></span>
											<br/><br/>
												<div class="input-prepend">
												<label class="control-label">Telefone 2:</label>
														<div class="controls">
														<span class="add-on"><img src="../imagens/icone-telefone.png"style="6px center no-repeat;"></span>
															<input class="span18" autocomplete="off" onkeyup="mascara(this,mtel);" maxlength="16" value="<?php echo $telefone2_hospital;?>"name="telefone2_hospital" type="tel" placeholder=""/>
														</div>	
											</div>
											<span class="help-inline"><span style=" top:586px;position:absolute;left:459px;">Digite somente os numeros com o código</span></span>											
											<br/><br/>
											<div class="input-prepend">
												<label class="control-label">Email:</label>
														<div class="controls">
														<span class="add-on">@</span>
															<input class="span18"  autocomplete="off" value="<?php echo $email_hospital;?>"  name="email_hospital" type="email_hospital" placeholder=""/>
														</div>
											</div>
												<span class="help-inline"><span style=" top:635px;position:absolute;left:459px;">Digite aqui o email</span></span>
											<br/><br/>
											<div class="input-prepend">
												<label class="control-label">NÃºmero de UTIs:</label>
														<div class="controls">
														<span class="add-on">nÂ°</span>
															<input class="span18"  value="<?php echo $total_uti;?>"required name="total_uti" type="text" placeholder=""/>
														</div>
											</div>
											<span class="help-inline"><span style=" top:689px;position:absolute;left:459px;">Digite aqui o nÃºmero de UTIs</span></span>
											<br/><br/>
											<div class="input-prepend">
												<label class="control-label">NÃºmero de leitos total:</label>
														<div class="controls">
														<span class="add-on">nÂ°</span>
															<input class="span18" autocomplete="off"  value="<?php echo $total_leito;?>" required name="total_leito" type="text" placeholder=""/>
														</div>
											</div>
											<span class="help-inline"><span style=" top:740px;position:absolute;left:459px;">Digite aqui o nÃºmero de leitos das UTIs</span></span>
											<br/><br/>		
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
					<div id="footerLogo" >
						 <section>
								<p>Copyright  2013 - SOSsys. - Todos os direitos reservados</p>
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