<?php

class Orcamentos extends View 
{
	public function afterConstruct()
	{
	 
	$this->loadTemplateComponent('adminheader');
 

//print_r($this);

	$item[1]['nome'] = 'Tenda tensionada';
	$item[1]['description'] = '<p style="text-align: justify;">Temos opções exclusivas para deixar o seu projeto único e a <strong>Tenda Tensionada</strong> é mais um produto especial da Tendas &amp; Cia, com design não convencional e original. A <strong>Tenda Tensionada</strong> proporciona um design particular, atendendo a necessidade do cliente com precisão.<br><br>A<strong> Tenda Tensionada</strong>&nbsp;oferece a possibilidade de&nbsp;criar estruturas em diferentes formas e dimensões, fazendo que o ambiente seja particularmente agradável e encantador, sem jamais esquecer da segurança, qualidade e praticidade que a <strong>TENDAS &amp; COMPANHIA</strong> possui.</p><p style="text-align: justify;">A <strong>Tenda Tensionda</strong> possui uma estrutura e cobertura fabricadas com a mesma matéria prima das tendas piramidais, diferenciando apenas no visual e design não convencional.</p>';
 	$item[2]['nome'] = 'Tenda piramidal';
	$item[2]['description'] = '<p style="text-align: justify;"><strong>Tenda Piramidal</strong> possui uma estrutura fabricada em chapa de ferro tubular com medidas de 13” a 18” e soldada por sistema MIG. A <strong>Tenda Piramidal</strong> possui uma galvanização de alta resistência, montada por um moderno sistema de encaixe e unida com parafusos e conexões em aço inoxidável.<br> <br>A<strong> Tenda Piramidal</strong> possui emendas unidas por solda eletrônica e rádiofrequência, reforçada com material de maior espessura nos pontos de tensionamento e ruptura. A <strong>Tenda Piramidal</strong> possui uma lona de Cobertura em PVC calambrado, com reforço em poliéster impermeável, blackout solar, anti-chama e anti-mofo, além de ser vulcanizada em alta temperatura, garantindo maior durabilidade do produto. Disponível em diversos tamanhos, com grande variedade de cores.</p><p style="text-align: justify;">Medidas especiais da <strong>Tenda Piramidal</strong> também são fabricadas sob-encomenda, para melhor cobrir seu espaço disponível.</p>';
 	$item[3]['nome'] = 'Tenda sanfonada';
	$item[3]['description'] = '<p style="text-align: justify;">O modelo mais popular do mercado com a qualidade e garantia de um produto exclusivo.</p><p style="text-align: justify;">Assim é a <strong>Tenda Sanfonada</strong> da Tendas &amp; Cia. Ideal para eventos esportivos, feiras e exposições, comércio, divulgações e lazer, a <strong>Tenda Sanfonada</strong> é um produto que se adapta com perfeição a necessidade do cliente, em diversos ambientes. Confere conforto e segurança imediatos, afinal, a <strong>Tenda Sanfonada</strong> é uma estrutura portátil, sinônimo de resistência, praticidade e montagem rápida.<br><br><strong>Tenda Sanfonada&nbsp;</strong>é sinônimo de praticidade, resistencia, beleza e de montagem rápida. Com estrutura totalmente&nbsp;portátil, oferecendo sombra e conforto de imediatos onde quer que você esteja.</p><p style="text-align: justify;">A <strong>Tenda Sanfonada</strong> possui uma estrutura metálica fabricada em chapas de ferro Metalon, nas espessuras de 15x15, 20x20 e 30x30 polegadas, armados em forma de sanfonas, unidas por parafusos em conexões em aço com galvanização de alta resistência. A <strong>Tenda Sanfonada</strong> possui uma lona produzida em nylon 600 com 50% de PVC e 50% de Poliéster em sua composição, além de reforço nos cantos e sustentação através de velcros.<br> <br>A <strong>Tenda Sanfonada</strong> tem uso para várias finalidades como: eventos esportivos, feiras, exposições, comércio, divulgações, lazer etc. Permite a aplicação da logomarca do cliente em sua lona através de silk ou impressão digital. Pés de sustentação tipo telescópico com altura que mede de 1,30 à 2,05 metros.</p>';
	$item[4]['nome'] = 'Galpão lonado';
	$item[4]['description'] = '<p><strong>Tenda Galpão</strong> planejada para finalidades organizacionais e ambientes que necessitam de grandes áreas cobertas. A <strong>Tenda Galpão</strong> é ideal para o seu negócio, pois atende perfeitamente soluções específicas para montagem e fixação do espaço solicitado, conferindo ao cliente funcionabilidade e tecnologia, seja na cidade ou campo.<br> <br>A <strong>Tenda Galpão</strong> pode ser utilizada em todos os gêneros de exposições, inclusive com sistemas de ar-condicionado. Os pavilhões podem ter boca de 15, 20, 25 ou 30 metros em sua largura, com módulos de 5 em 5 metros de comprimento.<br> <br><strong>Dados técnicos:</strong> <br>- Montagem rápida e segura;<br>- Técnicos especializados e soluções objetivas;<br>- Lonas de alta resistência;<br>- Não necessita fundação;<br>- Acoplados de acordo com a necessidade do cliente e disposição da área;<br>- Suportam ventos conforme padrões e normas brasileiras;<br>- Opções de lonas translúcidas em alguns vãos, para iluminação natural;<br>- Maior custo benefício em relação às construções civis.</p>';
 	$item[5]['nome'] = 'Tenda cristal';
	$item[5]['description']= '<p style="text-align: justify;">A <strong>Tenda Piramidal Cristal</strong> é que faltava para seu evento ser ainda mais exclusivo! Com uma estrutura diferenciada, oferecendo conforto e espaços aconchegantes, a <strong>Tenda Piramidal Cristal</strong> é ideal para shows, casamentos, feiras e muitos outros eventos. Um produto capaz de transforma o ambiente em um espaço de requinte e elegância, produzida sob encomenda e fabricada em todas as medidas padrões da <strong>Tenda Piramidal</strong>, bem como, medidas em formato especial.<br><br>O grande diferencial da <strong>Tenda Piramidal Cristal</strong> é sua lona de cobertura cristal, totalmente transparente e confeccionada em tecido sintético resistente, anti mofo e anti chamas, com aplicação bloqueadores de raios ultra-violeta. A <strong>Tenda Piramidal Cristal</strong> é garantia de um ambiente clean, inovador e cheio de charme.</p><p style="text-align: justify;">Você ainda pode optar por modelos com sistemas de climatização. Faça seu orçamento!</p>';
 	$item[6]['nome'] = 'Tenda bolha';
	$item[6]['description']= '<p style="text-align: justify;">Um evento deve superar as expectativas de seu público e a&nbsp;<strong>Tenda Bolha</strong>&nbsp;é uma estrutura grandiosa, perfeita para eventos de grande proporção. Feita para impressionar, a&nbsp;<strong>Tenda Bolha</strong>&nbsp;possui um design especial e diferenciado que garante efeitos visuais impressionantes, conferindo originalidade e beleza ao seu projeto.<br><br>Os melhores produtos têm garantia de conforto e segurança, por isso a&nbsp;<strong>Tenda Bolha</strong>&nbsp;possui uma estrutura metálica treliçada, que confere maior estabilidade para o produto. A estrutura da&nbsp;<strong>Tenda Bolha</strong>&nbsp;é constituída por 11 arcos de altura central (8 metros) e área interna de 201 m² podendo ser composta por 2 módulos extensores de 5 metros de comprimento cada um, chegando a 370 m² de área interna proporcionando um espaço ainda mais amplo para atender as necessidades do cliente.</p>';
 	$item[7]['nome'] = 'Barricada Antiavalanche';
	$item[7]['description']= '<p style="text-align: justify;">Um evento organizado é garantia de sucesso e lucro, por isso as <strong>Barricadas</strong> são o que faltava no seu projeto. Resistentes e fáceis de montar, as <strong>Barricadas</strong> limitam espaço de modo seguro e eficiente em shows, jogos desportivos, eventos públicos, feiras e muito mais!<br><br>Usada para grandes públicos com a função de conter multidões, daí o nome <strong>anti-avalanche</strong>, normalmente usada na frente dos palcos.&nbsp;Fabricada na estrutura metálica galvanizada à frio, composta de chapa moeda compondo a parte frontal de contenção vazada para que não crie retenção ao som e ecoe, piso de apoio envolto por um quadrante de metalon 50x30 na #14, interligado por barras de metalon 30x20 na #18 com mão francesa em metalon 40x20 na #18 medindo 1,15m, que tem a função de travar a <strong>barricada</strong> para que a mesma fique em posição vertical.</p>';
 	$item[8]['nome'] = 'Barricada gradil';
	$item[8]['description'] = '<p style="text-align: justify;"><strong>Fabricação de estruturas metálicas compostas pelas seguintes peças:</strong><br>- 01 Quandrante principal que contorna a estrutura feito em tubo de ferro na medida de 1”1/2 #14 com 02 barras de 3mt de comprimento e 02 barras de 1,3mt.<br>-02 Pés de sustentação produzidos em tubos de ferro 1”1/2 com medida de 0,65cm formando a base de sustentação e 02 pinos de encaixe para girar a estrutura para um melhor posicionamento.<br>- 02 Encaixes laterais no tubo vertical da estrutura sendo macho em tubo de ferro de 7/8 medindo 6cm e fêmea em tubo de ferro de 1/2” com medida de 12cm.<br>-20 Tubos de ferro 7/8 verticais posicionados como divisórias de 15cm em 15cm na medida de 99cm de comprimento.<br>-Toda estrutura é soldada através de sistema MIG e acabamento dos tubos feitos por processo químico de galvanização à frio.</p>';
 	$item[9]['nome'] = 'Piso tablado';
	$item[9]['description']= '<p>O <strong>Piso Tablado</strong> é um dos melhores produtos oferecidos pela Tendas &amp; Cia. Constituído por compensado naval de alta qualidade, o que garante mais estabilidade do produto e resistência a grandes cargas. O <strong>Piso Tablado</strong> pode ser instalado em qualquer área, feito para obter um nivelamento perfeito do terreno, oferecendo mais segurança e conforto ao seu espaço.<br><br>As medidas das placas do <strong>Piso Tablado</strong> é de 1 m². E se o seu projeto exige requinte e elegância, o <strong>Piso Tablado</strong> apresenta a vantagem de poder ser carpetado dando um acabamento especial.<br></p>';
 	$item[10]['nome'] = 'Balcão';
	$item[10]['description']= '<p style="text-align: justify;">Balcão em Aluminio disponíveis nas medidas de 1mt x 0,50cm ou 1,50mt x 0,50, sendo composto por chapa xadrez em alumínio na parte horizontal e na parte frontal do mesmo, com pés em ferro galvanizado à frio de 13cm, estrutura em metalon 30x30 na chapa 18 e travessas de reforço ao meio também em metalon 30x30 e chapa 18, com sistema de dobradiça para desmontagem e redução de volume para melhor armazenagem.</p>';
 	$item[11]['nome'] = 'Piso elevado';
	$item[11]['description']= '<p style="text-align: justify;">É ótimo poder contar com um produto que atende perfeitamente ao que precisamos, e o Piso Elevado é mais um produto Tendas &amp; Cia. que faz com que o seu projeto saia melhor que o planejado. Feito para proporcionar um nivelamento total do solo, o Piso Elevado é montado de acordo com as especificações do cliente, capaz de suportar grandes volumes e cargas pesadas.</p><p style="text-align: justify;">Fabricado em compensado naval, o Piso Elevado é feito por um processo de prensagem de alta resistência, fazendo com que a estrutura seja resistente o suficiente para não danificar mesmo que molhado. As medidas padrões do Piso Elevado são de 2,20m x 1,60m, alturas que variam de 13cm a 1,96 mt do solo.</p>';
 	$item[12]['nome'] = 'Container Habitável';
	$item[12]['description']= 'Container Modular aguardando descrição.';
 
 $this->item = $item;

	$this->loadWidget('adminside');
	$this->loadWidget('orcamentoslist');

	$this->loadTemplateComponent('adminfooter');
	
	}
}