<?php

namespace App\Exception;

use Reald\Core\ExceptionCLI AS BaseException;

class ExceptionCLI extends BaseException{

    public function handle($exception){
        echo "[ERROR!!]" . $exception;
    }

}