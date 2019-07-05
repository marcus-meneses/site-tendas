<?php

class View  
{	
	private $name;
	//public $data;
	public $urlData;
	private $contents;

	public $App;
	
	private function __construct( $viewName, &$parentApp, array $data = null, $urldata = null)
	{
		$this->name = $viewName;
		$this->data = $data;
		$this->urlData = $urldata;
		$this->App = &$parentApp;

	 
      	foreach($data as $key => $value){
        	$this->{$key} = $value;
			
      	}

		//print_r($this);

		//$this->loadExceptionService();

		$this->afterConstruct();
	}
	
	public function __destruct() 
	{	
		$this->afterDestruct();
	}

	public static function create( $viewName, $appReference, $data = null, $urldata = null)
	{
		return new static( $viewName, $appReference, $data, $urldata );
	}
	
	public function afterConstruct()
	{
		
	}
	
	public function afterDestruct()
	{
		
	}
	
	public function render()
	{
	
	}


	public function loadTemplateComponent($templateSection) {

		global $config;

		if ($config['template']!=false) {

			$fileForInclusion = TEMPLATE . $templateSection . '.php' ;

			//echo $fileForInclusion;

			if ( file_exists( $fileForInclusion ) )	{
				require( $fileForInclusion );
			} else 	{
				$this->App->exceptionsService->raise( 'templateComponentNotFound' );
			}
		} else 	{
				$this->App->exceptionsService->raise( 'templateComponentInvalid' );
		}


	}


	public function loadCss( $cssname )
	{
		global $config;
		echo '<link rel="stylesheet" type="text/css" href="' . FRONT .$config['template']. '/css/' . $cssname . '.css" />';
	}

	public function loadJs( $jsname )
	{
		global $config;
		echo '<script type="text/javascript" src="' . FRONT .$config['template']. '/js/' . $jsname . '.js"></script>';
	}
	
	public function loadImg( $imgname, $class = null, $style = null )
	{
		global $config;

		$instyle = $style;
		if ( $class == null ) {
			echo '<img src="' . FRONT .$config['template']. '/img/' . $imgname . '" style="'.$instyle.'"/>';
		}
		else {
			echo '<img class="' . $class . '" src="' . FRONT .$config['template']. '/img/' . $imgname . '" style="'.$instyle.'" />';
		}
	}


	public function loadPublicImg( $imgname, $class = null, $style = null )
	{
		 
		$instyle = $style;
		if ( $class == null ) {
			echo '<img src="' . PUBLIC_FILES . $imgname . '" style="'.$instyle.'"/>';
		}
		else {
			echo '<img class="' . $class . '" src="' . PUBLIC_FILES  . $imgname . '" style="'.$instyle.'" />';
		}
	}


	public function publicFile( $imgname )
	{
 
			echo   PUBLIC_FILES . $imgname;
	 
	}

		public function publicFileReturn($imgname )  {

		$returnee = PUBLIC_FILES . $imgname;

		return $returnee;
		}


	public function imgFile( $imgname )
	{

		global $config;
 
			echo FRONT .$config['template']. '/img/' . $imgname;
	}



		
	public function loadFont( $fontname )
	{
		global $config;
		echo '<link rel="stylesheet" type="text/css" href="' . FRONT .$config['template']. '/fonts/' . $fontname . '-font.css" />';
	}
 

	
	public function loadWidget( $widgetName )
	{
		 
			$fileForInclusion = WIDGETS  . $widgetName . '.wid' ;

			//echo $fileForInclusion;

			if ( file_exists( $fileForInclusion ) )	{
				require( $fileForInclusion );
			} else 	{

				$this->App->exceptionsService->raise( 'widgetNotFound' );

			}


	}



}