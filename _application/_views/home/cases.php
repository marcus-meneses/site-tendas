<?php

class Cases extends View 
{
	public function afterConstruct()
	{
	 
	$this->loadTemplateComponent('header');
	$this->loadWidget('header');


	$this->casesdata = array(

		array(), 
		array('nome'=>"Camarote - Carnaval", 'texto'=>'<h3>Sobre o case:</h3><p>As festas e eventos de Carnaval são sinônimos de folia e curtição, mas um evento bem sucedido, feito com planejamento e organização, é garantia de lucro e sucesso. Por isso as coberturas e acessórios da Tendas & Cia. são o que faltava no seu projeto. Resistentes e com montagem rápida e segura, os diversos modelos de Tendas e Coberturas limitam o espaço de modo funcional, sem deixar de lado o conforto dos seus convidados.</p><p>Se a sua festa de Carnaval conta com um espaço V.I.P., invista nos ambientes exclusivos e climatizados com os Camarotes Tendas & Cia. Eles são a solução perfeita para quem busca requinte e qualidade.</p><p>Nosso trabalho é garantir o melhor e o máximo de qualidade para seu projeto.</p>'),
		array('nome'=>"Galpão Treliçado Hangar", 'texto'=>''),
		array('nome'=>"Feirão de Carros", 'texto'=>''),
		array('nome'=>"Congresso do Produtor Rural - Dia de Campo", 'texto'=>'<h3>Sobre o case:</h3><p>Montagem de toda a estrutura do Dia de Campo.</p>'),
	);

	$this->loadWidget('casedetails');
	$this->loadWidget('jumbo');

	$this->loadTemplateComponent('footer');
	
	}
}