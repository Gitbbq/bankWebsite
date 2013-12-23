<?php

class testController extends BaseController {

    function __construct($smarty, $function = 'index') {
        parent::__construct($smarty);

        $this->setDirTemplates('test');
        
        $this->$function();
    }

    function index() {
    	
        $this->setBaseTemplate(__FUNCTION__);
        $this->display();
    }


    function aaaa(){

        
        $this->setBaseTemplate(__FUNCTION__);
        $this->display();
    }

}

?>