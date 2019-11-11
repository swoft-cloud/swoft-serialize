<?php

namespace SwoftTest\Serialize;

use Swoft\Serialize\JsonSerializer;
use PHPUnit\Framework\TestCase;

/**
 * Class JsonSerializerTest
 * @covers JsonSerializer
 */
class JsonSerializerTest extends TestCase
{
    public function testDecode()
    {
        $str = '{"name": "value"}';

        $serializer = new JsonSerializer();
        $ret = $serializer->decode($str);

        $this->assertInternalType('array', $ret);
        $this->assertArrayHasKey('name', $ret);
    }

    public function testEncode()
    {
        $data = [
            'name' => 'value',
        ];

        $serializer = new JsonSerializer();
        $ret = $serializer->encode($data);

        $this->assertInternalType('string', $ret);
        $this->assertJson($ret);
    }
}
