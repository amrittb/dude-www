<?php namespace App\Http\Controllers;

use Symfony\Component\Console\Application;
use App\Http\Command\pythonCommand;

use Illuminate\Http\Request;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class HomeController extends Controller{

    public function index() {
        return view('index');
    }

    public function ask(Request $request){
        $question = $request->input('question');

        $txt = "print kernel.respond(\"$question\")";
        $botfile = file_put_contents('bot.py', $txt.PHP_EOL, FILE_APPEND);

        $process = new Process('python bot.py');
        $process->run();


// executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $process->clearErrorOutput();
        $answer = $process->getOutput();

        $this->undoChange("bot.py", $txt);

        echo $answer;

    }


    public function undoChange($filename, $change){
        $out = array();
        $data = file($filename);

        foreach($data as $line){
            if(trim($line) != $change) {
               $out[] = $line;
            }
        }

        $fp = fopen($filename,"w+");
        flock($fp, LOCK_EX);
        foreach($out as $line){
            fwrite($fp, $line);
        }

        flock($fp, LOCK_UN);
        fclose($fp);
    }

    public function createApplication(){

        $command = new pythonCommand();

        $application  = new Application('chatbot','1.0.0');
        $application->add($command);
        $application->run();
    }
}