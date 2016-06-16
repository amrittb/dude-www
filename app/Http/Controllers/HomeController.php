<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\fileHandler;
use App\Http\Controllers\Commander;
use App\Http\Controllers\Filter;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function ask(Request $request)
    {
        $question = $request->input('question');

        if(!Filter::spamCheck($question)) {
            $txt = "print kernel.respond(\"$question\")";
            if(fileHandler::appendToFile('python\bot.py', $txt)){

                $pycommand = 'python bot.py';
                $answer = Commander::pythonCommand($pycommand);

//                fileHandler::undoChange("bot.py", $txt);

                echo $answer;

            } else{
                throwException('file could not be written');
            }

        } else {
            // spam words found on the input
            // TODO: store spam to database
            echo "Please do not use spam words. Be a good guy";
        }

    }

}