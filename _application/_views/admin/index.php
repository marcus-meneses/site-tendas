<?php

class Index extends View 
{
	public function afterConstruct()
	{
	 
	$this->loadTemplateComponent('adminheader');
 
	$this->loadWidget('adminside');
	$this->loadWidget('adminindex');

	$this->loadTemplateComponent('adminfooter');
	
	}
}