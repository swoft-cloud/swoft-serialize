<?php declare(strict_types=1);

namespace Swoft\Serialize\Concern;

use Swoft\Serialize\Contract\SerializeInterface;

/**
 * Class SerializeAwareTrait
 *
 * @since 1.0
 */
trait SerializeAwareTrait
{
    /**
     * @var SerializeInterface
     */
    private $serializer;

    /**
     * @return SerializeInterface
     */
    public function getSerializer(): SerializeInterface
    {
        if (!$this->serializer) {
            $this->serializer = new PhpSerializer();
        }

        return $this->serializer;
    }

    /**
     * @param SerializeInterface $serializer
     */
    public function setSerializer(SerializeInterface $serializer): void
    {
        $this->serializer = $serializer;
    }
}
