<?php

function base_path($path){
    return BASE_PATH . $path;
}

function view($path, $attributes = null){
    if($attributes) {
        extract($attributes);
    }
    require base_path("Views/" . $path);
}