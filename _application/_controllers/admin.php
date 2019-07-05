<?php

class Admin extends Controller 
{	
	public function index( array $data = null ) 
	{
		//$adminView = $this->loadView('index'); 
		$this->orcamentos();
		return 0;
	}

	public function logon( array $data = null) {
		
		$this->loadService('authentication');
		$autie = $this->authenticationService->authenticate($_POST['login'], $_POST['password']);

		if (!$autie) $this->App->authorizationService->unsetUserCredentials(); 

   	   	$this->App->rRedirect(HTTP_ADDRESS.'admin/index');
	   	return 0;
	}
	
	public function logout( array $data = null ) 
	{
		$autie = $this->App->authorizationService->unsetUserCredentials(); 
		$this->App->redirect(HTTP_ADDRESS.'admin/index');
		return 0;
	}	

	public function orcamentos( array $data = null ) 
	{


 
		if (!isset($this->urldata[0])) {
			$this->urldata[0] = 0;
		}

		



		$this->loadModel('orcamentoData');
		$lisd = $this->orcamentoDataModel->getOrcamentosOffset($this->urldata[0], $this->urldata[0]+50, 'DESC');
 

		
		$adminView = $this->loadView('orcamentos', $lisd); 
	}	


	public function orcamento( array $data = null) 
	{

		$this->loadModel('orcamentoData');
		$lisd = $this->orcamentoDataModel->getOrcamento($this->urldata[0]);

		$adminView = $this->loadView('orcamento', $lisd); 

	}


	public function setstatus( array $data = null ) 
	{
		


		$this->loadModel('orcamentoData');
        $this->orcamentoDataModel->setOrcamentoStatus($this->urldata[0], $this->urldata[1]);
		$this->urldata = [];

		$this->orcamentos();
		return 0;
	}	


}