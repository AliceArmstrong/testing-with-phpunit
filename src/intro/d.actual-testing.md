Official docs:
https://phpunit.readthedocs.io/en/9.0/index.html

The actual testing bit
Use PHP to set up the scenario you want to test. This might include setting any extra variables needed or instantiating a class to be tested.
The final part of the test is making the actual assertion. This is done by checking that the result of the test is what you expect it to be using PHPUnit's inbuilt assertion methods. For example, checking that a subscription has the correct ID.
[ $this->assertEquals($subscription->id, 1) ]
Task: There are many different assertion methods. Familiarise yourself with them to give yourself an idea about what sort of things you can test for (https://phpunit.de/manual/6.5/en/appendixes.assertions.html).
