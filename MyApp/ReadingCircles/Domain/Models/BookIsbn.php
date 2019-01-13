<?php

namespace MyApp\ReadingCircles\Domain\Models;

class BookIsbn
{
    protected $isbn;

    public function __construct(string $isbn)
    {
        // @TODO ISBNとしての妥当性チェック
        $this->isbn = $isbn;
    }

    public function value()
    {
        return $this->isbn;
    }
}
