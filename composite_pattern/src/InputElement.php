<?php
namespace Acme;

/**
 * Class InputElement
 * @package Acme
 */
class InputElement implements RenderableInterface
{
    /**
     * @return string
     */
    public function render(): string
    {
        return '<input type="text" />';
    }
}
