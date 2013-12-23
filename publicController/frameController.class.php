<?php

class frameController extends BaseController {

	function __construct( $smarty, $function = 'index' ) {

		
		parent::__construct( $smarty );

		$this->setDirTemplates( 'frame' );


		$this->$function();
	}

	function index() {


		$this->setBaseTemplate( __FUNCTION__ );
		$this->display();
	}

	function left() {
		$this->setBaseTemplate( __FUNCTION__ );
		$this->display();
	}


	function headers(){

		$this->setBaseTemplate( 'header' );
		$this->display();

	}


}

?>
