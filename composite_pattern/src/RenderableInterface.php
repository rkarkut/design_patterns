<?php
namespace Acme;

/**
 * Interface RenderableInterface
 * @package Acme
 */
interface RenderableInterface
{
    /**
     * @return string
     */
    public function render(): string;
}
