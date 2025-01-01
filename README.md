# PHP Pass-by-Reference Bug
This repository demonstrates a common pitfall in PHP related to pass-by-reference when working with arrays.  The `modifyArray` function intends to double each element's value. However, due to improper reference handling, modifying a copy of the array does not affect the original. The `processArray` function demonstrates the correct use of references and the expected behavior.

## How to reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.