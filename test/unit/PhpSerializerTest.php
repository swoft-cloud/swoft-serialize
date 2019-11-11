<?php

namespace SwoftTest\Serialize;

use Swoft\Serialize\PhpSerializer;
use PHPUnit\Framework\TestCase;

/**
 * Class PhpSerializerTest
 * @covers PhpSerializer
 */
class PhpSerializerTest extends TestCase
{
    public function testDecode()
    {
        $str = 'a:1:{s:4:"name";s:5:"value";}';

        $serializer = new PhpSerializer();
        $ret = $serializer->decode($str);

        $this->assertInternalType('array', $ret);
        $this->assertArrayHasKey('name', $ret);
    }

    public function testEncode()
    {
        $data = [
            'name' => 'value',
        ];

        $serializer = new PhpSerializer();
        $ret = $serializer->encode($data);

        $this->assertInternalType('string', $ret);
        $this->assertStringStartsWith('a:1:{', $ret);
    }
}
