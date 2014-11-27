<?php
/**
 * Created by PhpStorm.
 * User: rkarkut
 * Date: 27/11/14
 * Time: 21:23
 */

namespace Acme;

/**
 * Class KindleAdapter
 *
 * @package Acme
 */
class KindleAdapter {

    private $kindle;

    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }
    public function open()
    {
        $this->kindle->turnOn();
    }

    public function turnPage()
    {
        $this->kindle->pressNextButton();
    }
} 