<?php
namespace Acme;

/**
 * Class TextElement
 * @package Acme
 */
class TextElement implements RenderableInterface
{
    /** @var string */
    private $text;

    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return $this->text;
    }
}
