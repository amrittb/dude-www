<?php
/**
 * Created by PhpStorm.
 * User: rsanjib
 * Date: 6/15/16
 * Time: 11:53 PM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Commander;
use App\Http\Controllers\fileHandler;

class Filter extends controller
{
    public function spamCheck($text){

        $textToAppend = "kernel.respond wordFilter(\"$text\")";
        fileHandler::appendToFile('python/spamFilter.py'. $textToAppend);
        Commander::pythonCommand('python python/spamFilter.py');
    }

}