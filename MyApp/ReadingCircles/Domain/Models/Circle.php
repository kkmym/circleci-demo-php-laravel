<?php

namespace MyApp\ReadingCircles\Domain\Models;

class Circle
{

    protected $readingBook;
    protected $organizers;
    protected $urls;

    public function __construct(Book $readingBook, array $organizers, array $urls = null)
    {
        // $organizers が Member の配列であることを確認
        // 1) array_map
        // 2) Collection

        // 1)
        $isMemberInstance = function($instance) {
            return ($instance instanceof Member);
        };
        if (in_array(false, array_map($isMemberInstance, $organizers))) {
            throw new \Exception('Memberのみ受付');
        }

        $this->readingBook = $readingBook;
        $this->organizers = $organizers;
        $this->urls = $urls;
    }

    public function getBook()
    {

    }

    public function getOrganaizers()
    {

    }

    public function getOrganizer(int $memberId)
    {

    }

    public function getUrls()
    {

    }
}
