<?php

class Engenharia extends View 
{

public $quotitem;

	public function afterConstruct()
	{
	 

	$this->loadTemplateComponent('header');
	$this->loadWidget('header');

 	



	$this->loadTemplateComponent('footer');
	
	}
}