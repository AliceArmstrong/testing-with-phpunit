Official docs:
https://phpunit.readthedocs.io/en/9.0/index.html

Config
phpunit.xml.dist - Standard config file for PHPUnit. Here you can declare the directory of the test suite, as well as optional extras such as colours for your command line output.
phpunit.xml - Same as above, but is removed from version control and therefore safer to use if you need to use env keys. Because of this, this is the one automatically used when projects contain both phpunit.xml.dist and phpunit.xml. This is likely going to be the extension you would use for production code.
