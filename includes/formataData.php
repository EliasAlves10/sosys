<?php
    //funcao retorna data no padra mysql
  function formata_data_db($data){
        if(!empty($data)){
		list($dia,$mes,$ano)	= explode("/",$data);
            
		return $ano."-".$mes."-".$dia;
        }else{
            return $data;
        }        
 }
 function formata_data($data){
       if(!empty($data)){
	    list($ano,$mes,$dia)	= explode("-",$data);
            return $dia."/".$mes."/".$ano;
        }else{
            return $data;
        }
 }      
?>
