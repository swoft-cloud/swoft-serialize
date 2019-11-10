<?php declare(strict_types=1);

namespace Swoft\DataParser;

use Swoft\DataParser\Contract\DataParserInterface;

/**
 * Class DataParserAwareTrait
 *
 * @since 1.0
 */
trait DataParserAwareTrait
{
    /**
     * @var DataParserInterface
     */
    private $parser;

    /**
     * @return DataParserInterface
     */
    public function getParser(): DataParserInterface
    {
        if (!$this->parser) {
            $this->parser = new PhpParser();
        }

        return $this->parser;
    }

    /**
     * @param DataParserInterface $parser
     */
    public function setParser(DataParserInterface $parser): void
    {
        $this->parser = $parser;
    }
}
