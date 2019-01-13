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
        $isMemberInstance = function($instance) {
            return ($instance instanceof Member);
        };
        if (in_array(false, array_map($isMemberInstance, $organizers))) {
            throw new \Exception('Memberのみ受付');
        }

        // $urls が Url の配列であることを確認
        $isUrlInstance = function($instance) {
            return ($instance instanceof Url);
        };
        if (in_array(false, array_map($isUrlInstance, $urls))) {
            throw new \Exception('Urlのみ受付');
        }

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
