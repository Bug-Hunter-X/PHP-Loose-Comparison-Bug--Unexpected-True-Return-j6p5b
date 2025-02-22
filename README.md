# PHP Loose Comparison Bug

This repository demonstrates a common error in PHP related to loose comparisons.  The `bug.php` file contains a function that uses loose comparison (`==`), leading to unexpected behavior when comparing values of different types.  The `bugSolution.php` file provides a corrected version using strict comparison (`===`).

**Problem:** Loose comparison in PHP can lead to unexpected true results even when the values are not strictly equal. For example, `0 == false` and `"0" == false` both evaluate to true. This can cause bugs in your code if you're expecting strict equality.

**Solution:** Always use strict comparison (`===`) when you need to check for exact type and value equality to avoid unexpected results.