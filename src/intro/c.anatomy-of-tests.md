Official docs:
https://phpunit.readthedocs.io/en/9.0/index.html

The anatomy of a test class
Task: Open up /tests/intro/EmailTest.php and follow along while we go through the anatomy of a test class.
PHPUnit tests are written in PHP using PHPUnit's own assertion methods to dictate whether the test passes or fails.
Test files are classes, and take on the name of the class they're testing followed by 'Test'. Being PHP, they follow the PHP standards for casing.
Task: Test classes usually extend TestCase. Check out this file to see what it contains ('/vendor/phpunit/phpunit/src/Framework/TestCase.php').
Test classes will often, but not always, contain a protected 'setUp' function at the top of the class. This is a function that is run before every test, and is used to set up any scenario that is used by all or most of your tests. For example, if you're testing a subscriptions class, you might want to create a user and attach a subscription to it before every test.
If you have bits of code that you're repeating but aren't used at the beginning of all tests, you can create helper functions within the test class. This is done the same way as you'd make a helper function in a normal class.
Tests functions are public so that the tests can be read.
Test names should be 'intention-revealing', i.e. naming the test after what it intends to test. Think of it as a sentence - '[If successful, this test will show that the tested class] CanBeCreatedFromValidEmailAddress'.
For the function to be recognised by the test, it must either be preceded by 'test' ('testCanBeCreatedFromValidEmailAddress'), or have a documentation block which declares '@test'.
Tests can either be in camelCase or snake_case. Some people choose camelCase so as to be in-line with Laravel and PSR-1, some people choose snake_case because it's easier to read or because certain other PHP frameworks encourage it. Both are acceptable, though camelCase is the one chosen for the PHPUnit docs.
