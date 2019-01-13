<?php

namespace ReadingCircles;

use MyApp\ReadingCircles\Domain\Models\Circle;
use MyApp\ReadingCircles\Domain\Models\Book;
use MyApp\ReadingCircles\Domain\Models\BookId;
use MyApp\ReadingCircles\Domain\Models\BookIsbn;
use MyApp\ReadingCircles\Domain\Models\Member;
use MyApp\ReadingCircles\Domain\Models\MemberId;
use MyApp\ReadingCircles\Domain\Models\MemberLoginId;
use MyApp\ReadingCircles\Domain\Models\Url;

class CircleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testCircle()
    {
        $book = new Book(new BookId(), new BookIsbn('1234567890'), 'テスト');
        $organizer = new Member(new MemberId(), new MemberLoginId('1234abcd'), '名前登録用', '名前表示用');
        $url = new Url('https://qiita.com/ushironoko/items/a2420cf4a28af56907e5');
        $circle = new Circle($book, [$organizer], [$url]);

        $this->assertEquals($circle->getReadingBook()->title(), 'テスト');
        $this->assertEquals(($circle->getOrganaizers())[0]->loginId(), '1234abcd');
    }
}
