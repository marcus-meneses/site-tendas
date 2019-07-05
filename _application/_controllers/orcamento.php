<?php

class Orcamento extends Controller 
{
	
	public function index( array $data = null ) 
    {
    	$this->especifico($data);
	}

	public function especifico( array $data = null ) 
    {

    	$orcamentoView = $this->loadView('especifico', $data);  
	}

	public function rapido( array $data = null ) 
    {
    	$orcamentoView = $this->loadView('rapido');  
	}

	public function enviar( array $data = null ) {

		$this->loadModel('orcamentoData');

		$orcie = $_POST;
		$this->orcamentoDataModel->addOrcamento($orcie);
		
		$orcamentoView = $this->loadView('index'); 

	}



}