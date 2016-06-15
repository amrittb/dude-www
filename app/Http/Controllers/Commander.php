<?php
/**
 * Created by PhpStorm.
 * User: rsanjib
 * Date: 6/15/16
 * Time: 11:55 PM
 */

namespace App\Http\Controllers;

use Symfony\Component\Console\Application;
use App\Http\Command\pythonCommand;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class Commander extends Controller
{
    public function pythonCommand($command){

        $process = new Process($command);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
            return false;
        }

        $process->clearErrorOutput();
        return $process->getOutput();

    }

}