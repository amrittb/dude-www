<?php

$app->get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

$app->post('/ask', array(
    'as' => 'ask',
    'uses' => 'HomeController@ask'
));