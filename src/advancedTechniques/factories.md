Factories for test data
You can use Laravel's model factory functionality to create default test objects. For example, you can declare a default subscriptions object that has a particular plan and user, and use this to create generic subscriptions throughout your tests.
[example]
The test data you use to declare your factory can be overridden in the test. For example, if you need your subscription to have a different plan for just one test, you can override it when you create the subscription in the test.
[example]
A Collection of many objects can be created by adding an integer argument after the class of the factory you want to create. For example, creating a Collection of three subscriptions at once.
[ $subscriptions = factory(App/Subscription::class, 3)->make(); ]
Task: There are more cool things that factories can do for more advanced testing. Each pick a different one to research, then tell each other what you learned (https://laravel.com/docs/7.x/database-testing).
