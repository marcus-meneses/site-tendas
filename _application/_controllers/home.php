<?php

class Home extends Controller 
{
	
	public function index( array $data = null ) 
    {
    	$indexView = $this->loadView('index'); //load ok
	}


	public function produto( array $data = null) {
		$productView = $this->loadView('produto', $this->urldata); 
	}


	public function sobre( array $data = null) {
		$productView = $this->loadView('about'); 
	}

	
	public function cases( array $data = null) {
		$productView = $this->loadView('cases', $data); 
	}


	public function engenharia( array $data = null) {
		$productView = $this->loadView('engenharia'); 
	}


	public function app(array $data = null) {
		$this->login($data);
	}


	public function login(array $data = null) {
		$loginView = $this->loadView('login'); 
	}


}