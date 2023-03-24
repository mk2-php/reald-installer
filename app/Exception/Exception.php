<?php

namespace App\Exception;

use Reald\Core\Exception As BaseException;

class Exception extends BaseException{

    public function handle($exception){

        $this->Response->setData([
            "exception" => $exception
        ]);
            
        if($this->Response->code() == 404){
            $this->setView("Error/404");
        }
        else{
            $this->setView("Error/500");
        }
    }
}