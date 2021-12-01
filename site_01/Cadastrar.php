<?php
	
	class Cadastrar{
		
		

		public static function cadastrarform($nome,$email,$descricao){
			$sql = MySql::conectar()->prepare("INSERT INTO `form` VALUES (null,?,?,?)");
			$sql->execute(array($nome,$email,$descricao));
		}

	}

		?>