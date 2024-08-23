<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    return require base_path("views/" . $path);
}

function isUrl($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}