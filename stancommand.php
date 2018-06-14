#! /usr/bin/env php

<?php

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

require "vendor/autoload.php";

$app = new Application('Stancommand demo', '1.0');

$app->register('sayHelloTo')
    ->setDescription('greet a person')
    ->addArgument('name', InputArgument::OPTIONAL, 'Your Name.')
    ->setCode(function (InputInterface $input, OutputInterface $output) {
        $message = 'Hello, ' . $input->getArgument('name');
        $output->writeln("<info>{$message}</info>");
    });

$app->run();