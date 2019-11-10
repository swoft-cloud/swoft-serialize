<?php declare(strict_types=1);

namespace Swoft\DataParser;

use Swoft\DataParser\Contract\DataParserInterface;
use function serialize;
use function unserialize;

/**
 * Class PhpParser
 *
 * @since 1.0
 */
class PhpParser implements DataParserInterface
{
    /**
     * @param mixed $data
     * @return string
     */
    public function encode($data): string
    {
        return serialize($data);
    }

    /**
     * @param string $data
     * @return mixed
     */
    public function decode(string $data)
    {
        return unserialize($data, ['allowed_classes' => false]);
    }
}
