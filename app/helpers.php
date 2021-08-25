<?php

function locale()
{
    return app()->getLocale();
}

/**
* The functions returning the production statement
*
* @var boolean
*/
function production() {
    return config('app.env') === 'production';
}

function prod() {
    return production();
}

/**
* The functions returning the development statement
*
* @var boolean
*/
function development() {
    return !prod();
}

function dev() {
    return development();
}
