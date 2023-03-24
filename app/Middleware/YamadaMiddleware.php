<?php

namespace App\Middleware;

use Reald\Core\Middleware;

class YamadaMiddleware extends Middleware{

    public function handleBefore(){

        echo "<p>Yamada Middleware before...</p>";
    }

    public function handleAfter(){

        echo "<p>Yamada Middleware after...</p>";
    }
}
