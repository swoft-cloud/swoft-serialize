<?php declare(strict_types=1);

namespace Swoft\Serialize\Contract;

/**
 * Class SerializeInterface
 *
 * @since 2.0.7
 */
interface SerializeInterface
{
    /**
     * @return bool
     */
    public static function isSupported(): bool;

    /**
     * @param array|object|mixed $data
     *
     * @return string
     */
    public function encode($data): string;

    /**
     * @param string $string
     *
     * @return array|object
     */
    public function decode(string $string);
}
