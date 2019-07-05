<?php

class Index extends View 
{
	public function afterConstruct()
	{
	 
	$this->loadTemplateComponent('header');
	$this->loadWidget('header');

	$this->loadWidget('thanks');

	$this->loadTemplateComponent('footer');
	
	}
}