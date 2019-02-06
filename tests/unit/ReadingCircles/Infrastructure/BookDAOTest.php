<?php

use MyApp\ReadingCircles\Infrastructure\DAOs\BookDAO;

class BookDAOTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testCreate()
    {
        $isbn = '9784274217623';
        $title = 'エクストリームプログラミング';
        BookDAO::create([
            'isbn' => $isbn,
            'title' => $title,
        ]);

       $this->tester->seeRecord('books', ['isbn' => $isbn]);
     }
}