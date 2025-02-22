function fooStrict(a, b) {
  if (a === b) {
    return true;
  } else {
    return false;
  }
}

//This function uses strict comparison to ensure type and value equality. This makes it reliable and avoids the type coercion issues of loose comparison.

//Example usage demonstrating the difference between loose and strict comparison
$a = 0;
$b = "0";

echo "Loose Comparison: ";
var_dump(fooLoose($a,$b)); // Returns true

echo "Strict Comparison: ";
var_dump(fooStrict($a,$b)); //Returns false