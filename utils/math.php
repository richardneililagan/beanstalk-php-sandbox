<?php

/**
 * Returns the sum of two numbers.
 */
function sum ($a, $b) {
  if (!is_numeric($a) || !is_numeric($b)) {
    throw new InvalidArgumentException("Error");
  }

  return $a + $b;
}

?>
