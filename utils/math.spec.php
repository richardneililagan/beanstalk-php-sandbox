<?php

use PHPUnit\Framework\TestCase;
require_once("math.php");

final class MathTest extends TestCase
{
  public function testCanAddTwoNumbers(): void 
  {
    $this->assertEquals(20, sum(10, 10));
  }
}

?>
