<?php

namespace App\Http\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class pythonCommand extends Command
{
    protected function configure(){
        $this->setName('question');
        $this->setDescription('Executes the python command ---python bot.py -a "Question here"---');

        // Declaring arguments to pass in the command
        // We pass question as only argument
        $this->addArgument('question', InputArgument::REQUIRED);

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }

}