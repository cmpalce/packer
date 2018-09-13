<?php

namespace Packer\src;

use Packer\src\PackerInterface;

class PackerGzc implements PackerInterface
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function compress()
    {
        $this->string = gzcompress($this->string);
    }

    public function unCompress()
    {
        $this->string = gzuncompress($this->string);
    }

    public function getString()
    {
        return $this->string;
    }
}
