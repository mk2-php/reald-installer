<?php

namespace App\Controller;

use Reald\FormUi\FormUi;
use Reald\Session\Session;

class SessionController extends Controller{

    public function index(){

        $session = new Session;

        $form = new FormUi;

        $this->Response->setData([
            "form" => $form,
            "session" => $session,
        ]);
        
        if($this->Request->post()->exists()){

            $post = $this->Request->post()->get();


            $session->write("value_1", $post["value_1"]);

            $this->Response->redirect();            
        }


    }

}