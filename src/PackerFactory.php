<?php

namespace Packer\src;

use Packer\src\PackerGzc;

class PackerFactory
{
    public const TYPE_GCZ = 0;

    public static function create($packerFormat, $content)
    {
        switch ($packerFormat) {
            case self::TYPE_GCZ:
                return new PackerGzc($content);
                break;
            default:
                return new PackerGzc($content);
                break;
        }
    }
}
