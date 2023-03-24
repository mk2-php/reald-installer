<?php

namespace Container\Yamada\App\Hook;

use Reald\Core\Hook;

class SampleHook extends Hook{

    public function test($v1, $v2){

        echo $v1."..".$v2."....";

        echo "[sample fook test method....OK!]";
    }
}