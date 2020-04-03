Official docs:
https://phpunit.readthedocs.io/en/9.0/index.html

(Fix coverage script)

Practical challenge:
Refactor the existing test in tests/intro/ to use setUp and a helper method.
Then create two new tests to check for x new assertions. At least one assertion will require the overriding of factory data.
Come back and talk about anything that was challenging, anything you learned.

Challenge = user, user has and returns email. Test that user is created, test that email is there, test that email is right email, test that user created with invalid email doesn't work. SetUp should create a User and attach an email.
