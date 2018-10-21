<?php
namespace Foo;


class BarTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $foo = 'Foo';
        $this->assertTrue($foo == 'Foo');
    }

    public function testMe2()
    {
        $bar = 'Foo';
        $this->assertEquals($bar, 'Bar');
    }
}