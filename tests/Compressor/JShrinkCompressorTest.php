<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: wyrihaximus
 * Date: 6/25/14
 * Time: 5:32 PM.
 */

namespace WyriHaximus\HtmlCompress\Tests\Compressor;

use WyriHaximus\HtmlCompress\Compressor\JShrinkCompressor;

/**
 * @internal
 */
final class JShrinkCompressorTest extends AbstractVendorCompressorTest
{
    const COMPRESSOR = JShrinkCompressor::class;

    public function testException(): void
    {
        $input = "var a = '";
        $output = $this->compressor->compress($input);
        self::assertSame($input, $output);
    }
}
