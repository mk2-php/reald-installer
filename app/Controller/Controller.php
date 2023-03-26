<?php

namespace App\Controller;

use Reald\Core\Controller AS BaseController;

class Controller extends BaseController{

    public function handleBefore(){
        
        $this
            ->setAutoRender(true)
            ->setTemplate("default")
        ;

    }
}