<?php

namespace App\Middleware;

use Reald\Core\Middleware;

class TestMiddleware extends Middleware{

    public function handleBefore(){

        echo "<p>Test Middleware before...</p>";
    }

    public function handleAfter(){

        echo "<p>Test Middleware after...</p>";
    }
}
