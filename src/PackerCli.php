<?php

namespace Packer\src;

use Commando\Command;

class PackerCli
{
    private $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function __invoke()
    {
        $this->command->option('i')
               ->aka('input')
               ->describedAs('String to be compressed input file path with name.')
               ->require();

        $this->command->option('o')
               ->aka('output')
               ->describedAs('Ouput file path with name of the compressed string.')
               ->require();

        $this->command->option('t')
               ->aka('type')
               ->describedAs('Value is "compress" or "uncompress".')
                ->must(function($type) {
                    return in_array($type, ['compress', 'uncompress']);
                })
               ->require();

        return $this->command;
    }
}
