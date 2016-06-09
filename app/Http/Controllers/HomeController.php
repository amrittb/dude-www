<?php namespace App\Http\Controllers;

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

class HomeController extends Controller{

    public function index() {
        return view('index');
    }

    public function createApplication(){
        $application  = new Application('chatbot','1.0.0');
        $application->run();
    }
}