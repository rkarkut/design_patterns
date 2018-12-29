<?php

use Acme\Form;
use Acme\InputElement;
use Acme\TextElement;

require_once 'vendor/autoload.php';

$form = new Form();
$form->addElement(new TextElement('First Name:'));
$form->addElement(new InputElement());
$form->addElement(new TextElement('Last Name:'));
$form->addElement(new InputElement());
echo $form->render();
