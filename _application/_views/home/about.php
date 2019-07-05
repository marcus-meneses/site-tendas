<?php

class About extends View 
{

public $quotitem;

	public function afterConstruct()
	{
	 

	$this->loadTemplateComponent('header');
	$this->loadWidget('header');

 	
	$this->loadWidget('aboutus');


	$this->loadTemplateComponent('footer');
	
	}
}