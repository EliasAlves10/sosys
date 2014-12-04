<?php
    include_once '../includes/formataData.php';
?>
<!Doctype html>
<!--[if lt IE 7 ]><html class="ie6" lang="pt-BR"> <![endif]-->
<!--[if IE 7 ]><html class="ie7" lang="pt-BR"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="pt-BR"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="pt-BR"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="pt-BR">
    <!--<![endif]-->
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>SOSsys</title>
		<link rel="stylesheet" type="text/css" href="../css/style-position-progress.css" />
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/theme.css" rel="stylesheet">
		<link href="../css/font-awesome.min.css" rel="stylesheet">
		<link href="../css/alertify.css" rel="stylesheet">
		<script src="js/bootbox.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/alert.test.js" type="text/javascript"></script>
		<script src="js/bootbox.test.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
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
error_reporting(1);
ini_set(“display_errors”, 1 );

require"../controller/connect_bd.php";

		 
	 //Inserindo dados da internação//
	 $data_internacao = formata_data_db($_POST["data_internacao"]);
	 $diagnostico_paciente = $_POST["diagnostico_paciente"];
	 $tratamento_paciente = $_POST["tratamento_paciente"];
     $procedimento_paciente = $_POST["procedimento_paciente"];
	 $crm_medico = $_POST["crm_medico"];
	 $nome_hospital= $_POST["nome_hospital"];
	 $local_paciente = $_POST["local_paciente"];
	 $observacoes = $_POST["observacoes"];
	 
	 //Especificando dados....
      
	 $querry_internacao = mysql_query("INSERT INTO internacao(data_internacao,diagnostico_paciente,tratamento_paciente,procedimento_paciente,crm_medico,nome_hospital,local_paciente,observacoes)
	 VALUES('$data_internacao','$diagnostico_paciente','$tratamento_paciente','$procedimento_paciente','$crm_medico','$nome_hospital','$local_paciente','$observacoes')");
		
		//Apos tratamento dos erros,顩nformado que os dados s䯠inseridos ao cliente... 
            if($querry_internacao == TRUE){
                    echo"<script>alert('Internação realizada com sucesso.');</script>";
					header("Location :../view/medico_list_pacientes.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/medico_list_pacientes.php>";
									
            } else {
						//Erro ao incluir os dados no Banco de Dados!
						  echo"<script>alert('A internação não pode ser realizada ou por falta de vagas ou por problemas técnicos,tente colocar os dados de estado do paciente novamente,se não inicio o processo novamente clicando na opção internação no menu.');</script>";
						header("Location :../view/internacao.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/medico_internacao.php>";
						//  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/internacao.php>";
						
            }
             
?>
		<div class="positionProgress">
			<div class="progress-striped active">
			<p align="center">Aguarde...</p>
				<progress  class="bar bar-danger" style="width: 500%; height:26px;"id="pg" max="59" ></progress>
			</div>	
		</div>	

		</body>
	</head>
</html>	
	
