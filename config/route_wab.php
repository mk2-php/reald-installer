<?php

return [
    "/" => "controller:main|action:index|middleware:test",
    "post|/" => "controller:main|action:index_post",
    "/p2" => [
        "/" => "controller:p2|action:index",
        "/edit" => [
            "/" => "controller:p2|action:edit",
            "post|/" => "controller:p2|action:edit_post",
            "/special" => "controller:p2|action:special_edit",
        ],
        "/edit/save" => "controller:p2|action:edit",
    ],
    "post|/p3"=>[
        "/"=>"controller:p3|action:index",
    ],
    "/yamada" => "container:yamada|middleware:yamada",
];
