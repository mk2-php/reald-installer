<?php

namespace App\Controller;

use Reald\Core\Debug;
use Reald\FormUi\FormUi;

use App\Validator\TestValidator;

class FormuiController extends Controller{

    public function index(){

        $form = new FormUi;

        $this->Response->setData([
            "form" => $form,
        ]);

        if($this->Request->post()->exists()){

            $post = $this->Request->post()->get();

            $validator = new TestValidator;

            $vres = $validator->verify($post);

            if(!$vres->toJuge()){
                $form->setError($vres->toArray()); 
                return;               
            }

            Debug::out($post);
        }

    }

}