<?php

class Index extends View 
{
	public function afterConstruct()
	{
	 
	$this->loadTemplateComponent('header');
	$this->loadWidget('headerhome');

	$this->loadWidget('carousel');
	$this->loadWidget('portfolio');

	$this->loadWidget('about');
	$this->loadWidget('videos');

	$this->loadWidget('jumbo');

	$this->loadWidget('contact');

	$this->loadTemplateComponent('footer');
	
	}
}