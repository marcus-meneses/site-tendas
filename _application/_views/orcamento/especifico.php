<?php

class Especifico extends View 
{

public $quotitem;

	public function afterConstruct()
	{
	 

	$this->loadTemplateComponent('header');
	$this->loadWidget('header');

	$item[1] = 'Tenda tensionada';
	$item[2] = 'Tenda piramidal';
	$item[3] = 'Tenda sanfonada';
	$item[4] = 'Galpão lonado';
	$item[5] = 'Tenda cristal';
	$item[6] = 'Tenda bolha';
	$item[7] = 'Barricada Antiavalanche';
	$item[8] = 'Barricada gradil';
	$item[9] = 'Piso tablado';
	$item[10] = 'Balcão';
	$item[11] = 'Piso elevado'; 
	$item[12] = 'Container Modular'; 

	$this->quotitem = $item;

	$this->loadWidget('specificquotation');



	$this->loadTemplateComponent('footer');
	
	}
}