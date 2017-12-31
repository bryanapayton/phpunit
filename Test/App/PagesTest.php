<?php
require(__DIR__.'/../../App/Pages.php'); 
class PagesTest extends PHPUnit\Framework\TestCase
{

public function testRenderReturnsHelloWorld()
{

$pages = new Pages();
$expected = 'Hello World';
$this->assertEquals($expected, $pages->render());

}

public function testReturnTrueReturnsTrue()
{
$pages = new Pages();
$this->assertTrue($pages->returnTrue());
}

public function testReturnArrayReturnValidArray()
{
$pages = new Pages();
$this->assertTrue(is_array($pages->returnArray()));
}
public function testReturnArrayReturnsNonEmptyArray()
{
$pages = new Pages();
$this->assertTrue((count($pages->returnArray()) > 0));
}

}
