<?php

use PHPUnit\Framework\TestCase;

final class PackerTest extends TestCase
{
    /**
     * @test
     */
    public function uncompressed_file_must_produce_same_hash_as_orignal_file()
    {
        $compressInput = __DIR__ . '/../../demo/test.txt';
        $compressOutput = __DIR__ . '/../../demo/output.txt';
        $unCompressInput = __DIR__ . '/../../demo/output.txt';
        $unCompressOutput = __DIR__ . '/../../demo/uncompressed.txt';
        $scriptFile = __DIR__ . '/../../scripts/packer.php';

        exec("php " . $scriptFile . " --input " . $compressInput . " --output " . $compressOutput . " --type compress");
        exec("php " . $scriptFile . " --input " . $unCompressInput . " --output " . $unCompressOutput  . " --type uncompress");        

        $this->assertEquals(sha1_file($compressInput), sha1_file($unCompressOutput));
    }
}

