<?php

namespace App\Controller;

use Reald\Log\Log;

class LogController extends Controller{

    public function index(){

        $log = new Log;
        $log->out("access");
        
    }

}