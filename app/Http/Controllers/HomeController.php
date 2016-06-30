<?php
namespace App\Http\Controllers;

use Symfony\Component\Console\Application;
use App\Http\Command\pythonCommand;

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
        $answer = "I do not get it.";
        if(!Filter::spamCheck($question)) {

            $process = new Process('./pyRun Bot.Chat.Ask "' . $question . '"');
            $answer = $process->run();

            // executes after the command finishes
            if (!$process->isSuccessful()) {
              throw new ProcessFailedException($process);
            } else{
                echo $answer;
                return true;
            }

        } else {
            // spam words found on the input
            // TODO: store spam to database
            echo "Please do not use spam words. Be a good guy";
        }

    }

}
