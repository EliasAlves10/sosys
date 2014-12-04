<?php
/**
 * Classe Usuario
 * Author:Elias Alves
 */
class Usuario{
 /**
 ** Atributos da classe Usuario
 */
	private $id_usuario;
    private $login_usuario;
    private $senha_usuario;
	private $cpf_usuario;
	
   // get e set somente do id necessario;)//
    public function getId_usuario(){
        return $this-> id_usuario;
    }

    public function setId_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

	function Usuario($login_usuario,$cpf_usuario,$senha_usuario){
		$this->login_usuario  = $login_usuario;
		$this->cpf_usuario  = 	$cpf_usuario;
	// A senha será submetida a um hash,é uma criptografia sem volta.
		$this->senha_usuario = md5($senha_usuario);
	}

	 function autentica(){
   //Aqui estara o metodo de acesso ao bd.
   $login_usuario  = $this->login_usuario;
   $senha_usuario = $this->senha_usuario;
   $query = "SELECT login_usuario, senha_usuario FROM usuarios WHERE login_usuario=$login_usuario AND senha_usuario=$senha_usuario";
   $resultados = mysql_query($query) or die(mysql_error();
   if (mysql_num_rows($resultados)>0){
		$this-> geraSessao($this);
			return true;
	}else{
    return false;
		}
	}
	function geraSessao($usuario){
	//Aqui é gerada a sessão ao usuario.
	   session_start();
	   $_SESSION['usuario'] = $usuario;
	}	
 }

?>

