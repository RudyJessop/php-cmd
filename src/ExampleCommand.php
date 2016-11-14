<?php

namespace CTL;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;



class ExampleCommand extends Command{

  public function configure(){
    $this->setName('newCmd')
          ->setDescription('Explaining listed Command.')
          ->addArgument('ArgumentName', InputArgument::REQUIRED, 'Argument Example')
          ->addOption('flag_name', InputOption::VALUE_OPTIONAL, 'Allowed to add flags', 'Hello');
  }

  public function execute(InputInterface $input, OutputInterface $output){

      $msg = 'Hello, ' . $value = $input->getArgument('name');
      $output->writeln("<info>{$msg}</info>");
  }

}