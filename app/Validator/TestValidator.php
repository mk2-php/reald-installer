<?php

namespace App\Validator;

use Reald\Validate\Validator;

class TestValidator extends Validator{

    public $rules = [
        "name"=>[
            [
                "rule" => "required",
                "message" => "name is not entered.",
            ],
        ],
    ];

}