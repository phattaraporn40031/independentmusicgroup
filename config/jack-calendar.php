<?php
    return [
        //AUTH USAGE
        "auth" => false,

        //prefix

        "prefix" => "home/calendar",

        //middleware
        //middle will not use when auth == false

        "middleware" => ['web', 'auth:web'],

    ];