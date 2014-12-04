<?php include_once '../includes/formataData.php';?>
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
		<script src="js/bootbox.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/alert.test.js" type="text/javascript"></script>
		<script src="js/bootbox.test.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
	    <link rel="stylesheet" type="text/css" href="../css/style-position-progress.css" />
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/theme.css" rel="stylesheet">
		<link href="../css/font-awesome.min.css" rel="stylesheet">
		<link href="../css/alertify.css" rel="stylesheet">
       	<link rel="shortcut icon" href="../imagens/logotipo_teste.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="author" content="EliasAlves">
			<!--<link href="../css/bootstrap.css" rel="stylesheet">
			<link href="../css/theme.css" rel="stylesheet">
			<link href="../css/font-awesome.min.css" rel="stylesheet">
			<link href="../css/alertify.css" rel="stylesheet">-->
               <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
               <script src="http://code.jquery.com/jquery-1.8.2.js"></script> 
               <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
               <script type="text/javascript">
                          jQuery(function($) {
                                $(".data").datepicker({
                                    dateFormat: 'dd/mm/yy',
                                    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
                                    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                                    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'S�b', 'Dom'],
                                    monthNames: ['Janeiro', 'Fevereiro', 'Mar�o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                                    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                                    nextText: 'Próximo',
                                    prevText: 'Anterior'
                                });

                            });


                        </script>	
		<script type="text/javascript">
		var progresso = new Number();
			var maximo = new Number();
			var progresso = 0;
			var maximo = 60;
				function start(){
				if(progresso + 1 < maximo){
				 progresso = progresso +1;
				 document.getElementById("pg").value=progresso;
				 setTimeout("start();",1);
				}
			}	
		</script>
	 </head>
     <body onload="start();">	 
<?php
require"../controller/connect_bd.php";

	//Inserindo dados no banco...
       $id = $_POST["id"];
      $nome_medico = $_POST["nome_medico"];
	  $cpf_medico = $_POST["cpf_medico"];
	  $rg_medico = $_POST["rg_medico"];
      $dataNasc_medico =  formata_data_db($_POST["dataNasc_medico"]);
	 $crm_medico = $_POST["crm_medico"];
	 $especialidade_medico = $_POST["especialidade_medico"];
	 $sexo = $_POST["sexo"];
	 $endereco_medico = $_POST["endereco_medico"];
	 $bairro_medico = $_POST["bairro_medico"];
	 $nacionalidade_medico = $_POST["nacionalidade_medico"];
	 $estado_medico = $_POST["estado_medico"];
        $cidade_medico = $_POST["cidade_medico"];
	 $telefone_medico = $_POST["telefone_medico"];
	 $email_medico = $_POST["email_medico"];
	 
       //echo "UPDATE medico SET nome_medico='$nome_medico',cpf_medico='$cpf_medico',rg_medico='$rg_medico',dataNasc_medico='$dataNasc_medico',crm_medico='$crm_medico',especialidade_medico='$especialidade_medico',sexo='$sexo',endereco_medico='$endereco_medico',bairro_medico='$bairro_medico',nacionalidade_medico='$nacionalidade_medico',estado_medico='$estado_medico',cidade_medico='$cidade_medico',telefone_medico='$telefone_medico',email_medico='$email_medico'WHERE id='$id'";
	  $cony = mysql_query("UPDATE medico SET nome_medico='$nome_medico',cpf_medico='$cpf_medico',rg_medico='$rg_medico',dataNasc_medico='$dataNasc_medico',crm_medico='$crm_medico',especialidade_medico='$especialidade_medico',sexo='$sexo',endereco_medico='$endereco_medico',bairro_medico='$bairro_medico',nacionalidade_medico='$nacionalidade_medico',estado_medico='$estado_medico',cidade_medico='$cidade_medico',telefone_medico='$telefone_medico',email_medico='$email_medico'WHERE id='$id'"); 
	 if( $cony == TRUE) {
	 echo"<script>alert(Dados alterados com sucesso!');</script>";
	            header("Location :../view/list_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/list_medico.php>"; 
	}else{
	 echo"<script>alert(Não foi possivel alterar os dados tente novamente!');</script>";
	          	header("Location :../view/list_medico.php");
				echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/list_medico.php>"; 
	}					
?>
		<div class="positionProgress">
			<div class="progress-striped active">
			 <p align="center">Aguarde...</p>
				<progress  class="bar bar-danger" style="width: 500%; height:26px;"id="pg" max="59" ></progress>
			</div>	
		</div>	
		</body>
</html>	
	
