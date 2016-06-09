<?php

$app->get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

$app->post('/createApplication', array(
    'as' => 'createApplication',
    'uses' => 'HomeController@createApplication'
));

$app->post('/ask', array(
    'as' => 'ask',
    'uses' => 'HomeController@ask'
));