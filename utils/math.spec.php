<?php

use PHPUnit\Framework\TestCase;
require_once("math.php");

final class MathTest extends TestCase
{
  public function testCanAddTwoNumbers()
  {
    $this->assertEquals(20, sum(10, 10));
  }

  public function testShouldFailWithStrings()
  {
    $this->expectException(InvalidArgumentException::class);
    sum("abc", "def");
  }
}

?>
