<?php

namespace Packer\src;

class PackerIo
{
    private $originalString;

    public function __construct()
    {
        $this->originalString = '';
    }

    public function scan($input)
    {
        $fh = fopen($input, 'r');
        while ($line = fgets($fh)) {
            $this->originalString .= $line;
        }
        fclose($fh);
    }

    public function write($output, $compressed)
    {
        $fp = fopen($output, 'w');
        fwrite($fp, $compressed);
        fclose($fp);
    }

    public function getContent()
    {
        return  $this->originalString;
    }
}
