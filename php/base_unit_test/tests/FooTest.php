<?php
namespace Tests;

use App\Foo;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    /**
     * @var Foo
     */
    private $foo;

    protected function setUp()
    {
        parent::setUp();
        $this->foo = new Foo();
    }

    protected function tearDown()
    {
        parent::tearDown();
        $this->foo = null;
    }

    /**
     * @test
     */
    public function testBaz_ShouldReturnBaz_Successfully() {
        $this->assertEquals('baz',$this->foo->baz());
    }
}
