<?php

namespace Packer\src;

interface PackerInterface
{
    public function __construct($string);

    public function compress();

    public function unCompress();

    public function getString();
}
