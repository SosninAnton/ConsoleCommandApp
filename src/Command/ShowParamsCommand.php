<?php

namespace App\Command;

class ShowParamsCommand implements \SosninAnton\ConsoleCommand\Contracts\Command
{

    public function getName(): string
    {
        return 'command_name';
    }

    public function getDescription(): string
    {
        return 'Command shows all arguments and options';
    }

    public function handle(array $arguments, array $options): string
    {
       $result = 'Called command: '.$this->getName().PHP_EOL.PHP_EOL;

       $result.='Arguments:'.PHP_EOL;

       foreach ($arguments as $argument){
           $result.='    - '.$argument.PHP_EOL;
       }

        $result.='Options:'.PHP_EOL;

        foreach ($options as $optionName => $optionValue) {
            $result.='    - '.$optionName.PHP_EOL;
            if (is_array($optionValue)){
                foreach ($optionValue as $value) {
                    $result.='        - '.$value.PHP_EOL;
                }
            } else {
                $result.='        - '.$optionValue.PHP_EOL;
            }
        }

       return $result;

    }
}