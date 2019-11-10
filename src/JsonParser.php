<?php declare(strict_types=1);

namespace Swoft\DataParser;

use Swoft\DataParser\Contract\DataParserInterface;
use Swoft\Stdlib\Helper\JsonHelper;

/**
 * Class JsonParser
 *
 * @since 1.0
 */
class JsonParser implements DataParserInterface
{
    /**
     * @var bool
     */
    private $assoc = true;

    /**
     * @var int
     */
    private $encodeOption = 0;

    /**
     * @var int
     */
    private $decodeOption = 0;

    /**
     * Class constructor.
     * @param null|bool $assoc
     */
    public function __construct($assoc = null)
    {
        if ($assoc !== null) {
            $this->setAssoc($assoc);
        }
    }

    /**
     * @param string $data
     * @return mixed
     */
    public function decode(string $data)
    {
        return JsonHelper::decode($data, $this->assoc, 512, $this->decodeOption);
    }

    /**
     * @param mixed $data
     * @return string
     */
    public function encode($data): string
    {
        return JsonHelper::encode($data, $this->encodeOption);
    }

    /**
     * @return bool
     */
    public function isAssoc(): bool
    {
        return $this->assoc;
    }

    /**
     * @param bool $assoc
     */
    public function setAssoc($assoc): void
    {
        $this->assoc = (bool)$assoc;
    }

    /**
     * @return int
     */
    public function getEncodeOption(): int
    {
        return $this->encodeOption;
    }

    /**
     * @param int $encodeOption
     */
    public function setEncodeOption(int $encodeOption): void
    {
        $this->encodeOption = $encodeOption;
    }

    /**
     * @return int
     */
    public function getDecodeOption(): int
    {
        return $this->decodeOption;
    }

    /**
     * @param int $decodeOption
     */
    public function setDecodeOption(int $decodeOption): void
    {
        $this->decodeOption = $decodeOption;
    }
}
