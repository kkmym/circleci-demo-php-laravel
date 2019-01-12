<?php

namespace MyApp\ReadingCircles\Domain\Models;

class Book
{
    /**
     * @var BookId
     */
    protected $bookId;

    /**
     * @var BookIsbn
     */
    protected $bookIsbn;

    /**
     * @var string
     */
    protected $title;

    /**
     * 
     */
    public function __construct(BookId $bookId, BookIsbn $bookIsbn, string $title)
    {
        $this->bookId = $bookId;
        $this->bookIsbn = $bookIsbn;
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function id()
    {
        return $this->bookId->value();
    }

    /**
     * @return BookId
     */
    public function getBookId()
    {
        return $this->bookId;
    }

    /**
     * @return string
     */
    public function isbn()
    {
        return $this->bookIsbn->value();
    }

    /**
     * @return BookIsbn
     */
    public function getBookIsbn()
    {
        return $this->bookIsbn;
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->title;
    }
}