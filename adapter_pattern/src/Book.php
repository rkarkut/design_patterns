<?php
/**
 * Created by PhpStorm.
 * User: rkarkut
 * Date: 27/11/14
 * Time: 21:22
 */

namespace Acme;

/**
 * Class Book
 *
 * @package Acme
 */
class Book {

    public function open()
    {
        var_dump('open a paper book');
    }

    public function turnPage()
    {
        var_dump('turning a page of a paper book');
    }
} 