# PhpConsoleColor

####Purpose
This lightweight library only serves to make formatted console output code more readable.

Instead of:
```php
echo "\033[0;31Foo:\033[0m Bar";
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

####Colors

| Color Code | Info              |
|------------|-------------------|
| black      | Black             |
| red        | Red               |
| green      | Green             |
| yellow     | Yellow            |
| blue       | Blue              |
| purple     | Purple            |
| cyan       | Cyan              |
| white      | White             |
| blackB     | Black Bold        |
| redB       | Red Bold          |
| greenB     | Black Bold        |
| yellowB    | Yellow Bold       |
| blueB      | Blue Bold         |
| purpleB    | Purple Bold       |
| cyanB      | Cyan Bold         |
| whiteB     | White Bold        |
| blackU     | Black Underlined  |
| redU       | Red Underlined    |
| greenU     | Black Underlined  |
| yellowU    | Yellow Underlined |
| blueU      | Blue Underlined   |
| purpleU    | Purple Underlined |
| cyanU      | Cyan Underlined   |
| whiteU     | White Underlined  |

####License
MIT
