<?php

require_once "vendor/autoload.php";

class Person
{
    public function read($book)
    {
        $book->open();
        $book->turnPage();
    }
}

//(new Person)->read(new Book);
(new Person)->read(new Acme\KindleAdapter(new Acme\Kindle()));