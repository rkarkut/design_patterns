<?php
namespace Acme;

/**
 * Class Form
 * @package Acme
 */
class Form implements RenderableInterface
{
    /** @var array */
    private $elements;

    /**
     * @return string
     */
    public function render(): string
    {
        $form = '<form>';
        foreach ($this->elements as $element) {
            $form .= $element->render();
        }
        $form .= '</form>';
        return $form;
    }

    /**
     * @param RenderableInterface $element
     */
    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
}
