<?php

$app->get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
