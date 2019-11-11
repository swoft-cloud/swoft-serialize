<?php declare(strict_types=1);

namespace Swoft\DataParser;

use RuntimeException;
use Swoft\DataParser\Contract\DataParserInterface;
use function extension_loaded;

/**
 * Class IgBinaryParser
 *
 * @since 2.0
 */
class IgBinaryParser implements DataParserInterface
{
    /**
     * @return bool
     */
    public static function isSupported(): bool
    {
        return extension_loaded('igbinary');
    }

    /**
     * Class constructor
     *
     * @throws RuntimeException
     */
    public function __construct()
    {
        if (!self::isSupported()) {
            throw new RuntimeException("The php extension 'msgpack' is required!");
        }
    }

    /**
     * @param mixed $data
     *
     * @return string
     */
    public function encode($data): string
    {
        /** @noinspection PhpComposerExtensionStubsInspection */
        return \igbinary_serialize($data);
    }

    /**
     * @param string $data
     *
     * @return mixed
     */
    public function decode(string $data)
    {
        /** @noinspection PhpComposerExtensionStubsInspection */
        return \igbinary_unserialize($data);
    }
}
