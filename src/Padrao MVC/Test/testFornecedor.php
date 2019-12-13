<?php
    require_once '../Model/Fornecedor.php';
	
	class TestHospede extends PHPUnit\Framework\TestCase{
		
		public function testConstrutor(){
            $obj = new Fornecedor(null,"Nike", "99501250689", "1854525152", "nike@gmail.com");
            
			$this->assertEquals("Nike", $obj->getNome(), "Nome errado");
			$this->assertEquals("99501250689", $obj->getCnpj(), "CNPJ errado");
			$this->assertEquals("1854525152", $obj->getTel(), "Telefone errado");
			$this->assertEquals("nike@gmail.com", $obj->getEmail(), "Email errado");
		}
	}
?>