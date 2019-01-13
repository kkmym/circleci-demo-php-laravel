<?php

namespace MyApp\ReadingCircles\Domain\Models;

class Circle
{

    protected $readingBook;
    protected $organizers;
    protected $urls;

    public function __construct(Book $readingBook, array $organizers, array $urls = null)
    {
        //====================================================================
        // $organizers が Member の配列であることを確認
        // 1) array_map
        // 2) Collection

        $isMemberInstance = function($instance) {
            return ($instance instanceof Member);
        };
        // 1)
        /*
        if (in_array(false, array_map($isMemberInstance, $organizers))) {
            throw new \Exception('Memberのみ受付');
        }
        */

        // 2)
        $c = collect($organizers);
        if ($c->every($isMemberInstance) == false) {
            throw new \Exception('Memberのみ受付２');
        }
        //====================================================================

        $this->readingBook = $readingBook;
        $this->organizers = $organizers;
        $this->urls = $urls;
    }

    public function getReadingBook()
    {
        return $this->readingBook;
    }

    public function getOrganaizers()
    {
        return $this->organizers;
    }

    public function getOrganizer(int $memberId)
    {

    }

    public function getUrls()
    {

    }
}
