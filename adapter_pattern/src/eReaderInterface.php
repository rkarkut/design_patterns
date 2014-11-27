<?php
/**
 * Created by PhpStorm.
 * User: rkarkut
 * Date: 27/11/14
 * Time: 21:22
 */

namespace Acme;

/**
 * Interface eReaderInterface
 *
 * @package Acme
 */
interface eReaderInterface {

    public function turnOn();
    public function pressNextButton();
} 