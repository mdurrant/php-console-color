# PhpConsoleColor

####Purpose
This lightweight library only serves to make formatted console output code more readable.

Instead of:
```php
echo "\033[0;31Foo:\031[0m Bar";
```
We can do:
```php
$console->writeLn("<red>Foo:</red> Bar");
```

####Usage
```php
$console = new Console();
$console->write('This');
$console->write('is');
$console->write('a');
$console->write('<blue>Test</blue>');
$console->writeLn('Hello world!');
```
will output

![Example output](http://i.imgur.com/jmJe8vu.png)

####License
MIT
