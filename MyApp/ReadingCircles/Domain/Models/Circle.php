<?php

namespace MyApp\ReadingCircles\Domain\Models;

class Circle
{
    public function __construct(Book $readingBook, User $organizer, array $usls = null)
    {
    }
}
