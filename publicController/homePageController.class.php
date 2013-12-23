<?php

class homePageController extends BaseController {

    function __construct($smarty, $function = 'index') {
        parent::__construct($smarty);

        $this->$function();
    }

    function index() {
    	$this->setDirTemplates('public');
        $this->setBaseTemplate('homePage');
        $this->display();
    }


    function login(){
    	$this->setDirTemplates('public');
        $this->setBaseTemplate(__FUNCTION__);
        $this->display();
    }

}

?>