<?php

class Login extends View 
{
	public function afterConstruct()
	{
	 
	$this->loadTemplateComponent('adminheader');
	//$this->loadWidget('header');

    $this->loadWidget('adminlogin');

	$this->loadTemplateComponent('adminfooter');
	
	}
}