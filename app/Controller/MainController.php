<?php

namespace App\Controller;

use Exception;
use Reald\Core\Debug;
use Reald\Core\Controller;
use App\Model\TestModel;
use App\Pack\TestPack;

use App\Table\Test01Table;

class MainController extends Controller{

    public function handleBefore(){

        $this
            ->setAutoRender(true)
            ->setTemplate("default")
        ;
   }

    public function index(){}

    public function index_post(){

        $this->setAutoRender(false);
        
        print_r($this->Request->post()->get());
    }

}