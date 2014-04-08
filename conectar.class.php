<?php
	/*	
	* @author Miguel d' Jesús <Mig_dj@hotmail.com>
	* @version 1.0 09/09/2013 
	* @package AppMovilPluss
	* 
	*/	
class conectar{
	// variable de coneccion 
	var $conn;	
	var $host = "localhost"; 
	var $user = "ACampApp";
	var $pass = "#App5??_2";
	// metodo de coneccion por defecto predeterminado un usuario general -- correlativo 1
	function conndef() {
		@$this->conn = mysql_connect($this->host,$this->user,$this->pass) 		
			or die ("Error Problemas de autenticacion. 1.1");
		@mysql_select_db ("campapp")  
			or die ("No se puede hubicar la base de datos Error 1.2");
				if ($this->conn) {				
				return $this->conn;
				} else {
				//echo "Conectado :D";
				}		
	}	
	// metodo de coneccion por defecto predeterminado de consulta general correlativo 2
	function defconsu() {				
		@$this->conn = mysql_connect($this->host,$this->user,$this->pass) 		
			or die ("Error Problemas de autenticacion. 2.1");
		@mysql_select_db ("crm")  
			or die ("No se puede hubicar la base de datos Error 2.2");
				if ($this->conn) {				
				return $this->conn;
				} else {
				//echo "Conectado :D";
				}		
	}	
	
	// Sentencia de desconeccion 
	function disconect() {
		if ($this->conn) {
			mysql_close($this->conn);
			//	echo "Desconectado :D";
		} 
	}
}
?>
