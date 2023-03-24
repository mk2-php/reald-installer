<?php

return [
    "/" => "controller:main|action:index",
    "/edit" => "controller:main|action:edit",
    "post|/edit" => "controller:main|action:edit_post",
    "/detail"=>[
        "/"=>"controller:main|action:detail"
    ],
];