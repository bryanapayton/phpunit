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

}
