function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false; 
  }
}

//This function will always return true if two variables are strictly equal, but can also return true if two variables are loosely equal.  This is due to the loose comparison operator in PHP, which can lead to unexpected results.

function fooLoose(a, b) {
  if (a == b) {
    return true;
  } else {
    return false;
  }
}