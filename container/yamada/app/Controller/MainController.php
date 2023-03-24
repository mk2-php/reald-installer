<?php

namespace Container\Yamada\App\Controller;

use Exception;
use Reald\Core\Controller;
use App\Model\TestModel;
use Container\Other2\App\Model\Test2Model as otherTestModel;

class MainController extends Controller{

    public function index(){

        $this->setAutoRender(true)
            ->setTemplateParent("default")
            //->setTemplate("default")
        ;

    }

    public function edit(){
        echo "module Yamada main Edit....OK";

    }

}