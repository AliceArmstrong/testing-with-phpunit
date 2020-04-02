Official docs:
https://phpunit.readthedocs.io/en/9.0/index.html

Running tests
To run tests in the command line, you would run './vendor/bin/phpunit'. Alternatively, you could add that path to your $PATH variable (export PATH="$PATH:$HOME/Sites/testing-with-phpunit/vendor/bin" <- remember to update the path if you've not put this repo into '/Sites' like I have), which will allow you to run 'phpunit' to run all tests.
This project has some shortcut scripts in the composer.json. They are some examples of different flags you can use to improve your testing.
Task: Look up the flags used in the scripts, learn what they do, and see what other scripts exist (https://phpunit.readthedocs.io/en/9.0/textui.html).
The flag you will probably use the most is '--filter'. This allows you to run certain tests by specifying the folder or test name. When running this and other flags using a composer script, you will need to add an extra '--' to tell the composer script that you're passing it an extra variable.
Task: Try running 'composer test -- --filter EmailTest' and check out the output.
