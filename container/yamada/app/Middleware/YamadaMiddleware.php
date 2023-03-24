<?php

namespace Container\Yamada\App\Middleware;

use Reald\Core\Middleware;

class YamadaMiddleware extends Middleware{

    public function handleBefore(){

        echo "yamada middleware before....<br>";
        
    }
}