<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Commando\Command;
use Packer\src\PackerCli;
use Packer\src\PackerIo;
use Packer\src\PackerFactory;

$params = (new PackerCli(new Command()))();

$io = new PackerIo();
$io->scan($params['input']);

$packer = PackerFactory::create(PackerFactory::TYPE_GCZ, $io->getContent());

if ($params['type'] === 'compress') {
    $packer->compress();
} else {
    $packer->unCompress();
}

$io->write($params['output'], $packer->getString());
