<?php

namespace MyApp\ReadingCircles\Domain\Models;

class BookIsbn
{
    protected $isbn;

    public function __construct(string $isbn)
    {
        $this->isbn = $isbn;
    }

    public function value()
    {
        return $this->isbn;
    }
}
