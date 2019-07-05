<?php

$authorization['systemForcedRedirect'] = 'home/login';
$authorization['any'] = array( 


								'home' => array( 'index' => true, 
												 'produto' => true,
												 'sobre'=> true,
												 'login'=>true
												  ), 

							   'orcamento' => array('especifico'=>true, 
							   						'rapido'=>true, 
							   						'enviar' => true),

							   'admin' => array('logon'=>true, 
							   					'logout'=>true),
						   
							   );


$authorization['admin'] = array('admin' => array( 'index'=>true,
												'logout'=>true,
												'logon'=>true,
												'orcamentos'=>true,
												'orcamento'=>true,
												'setstatus'=>true
											   ) );