<?php

namespace App\Controller;

use Reald\FormUi\FormUi;
use Reald\Encrypt\Encrypt;

class EncryptController extends Controller{

    public function index(){

        $form = new FormUi;

        $this->Response->setData([
            "form" => $form,
        ]);
        
        if($this->Request->post()->exists()){
            
            $post = $this->Request->post()->get();

            $encrypt = new Encrypt;

            if($post["mode"] == 1){

                $encstr = $encrypt->encode($post);

                $this->Response->setData([
                    "encStr" => $encstr,
                ]);
            }
            else if($post["mode"] == 2){

                $decode = $encrypt->decode($post["encode"]);

                $this->Response->setData([
                    "decode" => $decode,
                ]);
            }

        }
    }

}