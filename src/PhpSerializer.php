<?php declare(strict_types=1);

namespace Swoft\Serialize;

use Swoft\Serialize\Contract\SerializeInterface;
use function serialize;
use function unserialize;

/**
 * Class PhpSerializer
 *
 * @since 1.0
 */
class PhpSerializer implements SerializeInterface
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
