<?php
 
use Bolstad\Oklahoma\HTTP;
 
class HTTPTest extends PHPUnit_Framework_TestCase {
 
  public function testNachHasCheese()
  {
    $nacho = new HTTP;
    $this->assertTrue($nacho->hasCheese());
  }
 
}
