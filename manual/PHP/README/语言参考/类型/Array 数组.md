## Array 数组

* [基本语法](#基本语法)
* [转换为数组](#转换为数组)

### 基本语法

附例一：

```php
<?php

declare(strict_types = 1);

$foo = array(2, 4, 5);
$bar = [0 => 2, 1 => 4, 2 => 5];

```

附例二：

```php
<?php

declare(strict_types = 1);

$foo = array(
    'foo' => 'cat',
    'bar' => 'dog'
);
$bar = [
    'foo' => 'cat',
    'bar' => 'dog'
];

```

附例三：

```php
<?php

declare(strict_types = 1);

$foo = [
    1    => 'foo',
    '1'  => 'bar',
    1.5  => 'baz',
    true => 'qux'
];

var_dump($foo); // array(1) { [1]=> string(3) "qux" }

```

附例四：

```php
<?php

declare(strict_types = 1);

$foo = ['foo', 'bar', 6 => 'baz', 'qux'];

var_dump($foo); // array(4) { [0]=> string(3) "foo" [1]=> string(3) "bar" [6]=> string(3) "baz" [7]=> string(3) "qux" }

```

附例五：

```php
<?php

declare(strict_types = 1);

/**
 * Just a test function.
 *
 * @param  void
 * @return array
 */
function foo(): array
{
    return [2, 4, 5];
}

var_dump(foo()[1]); // int(4)

```

附例六：

```php
<?php

declare(strict_types = 1);

$foo = [
    'foo' => 'cat',
    'bar' => 'dog'
];

$foo[] = 'bird';
$foo['qux'] = 'horse';
unset($foo['foo']);

var_dump($foo); // array(3) { ["bar"]=> string(3) "dog" [0]=> string(4) "bird" ["qux"]=> string(5) "horse" }

```

附例七：

```php
<?php

declare(strict_types = 1);

$foo = [1, 2, 3, 4, 5];

var_dump($foo); // array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }

foreach ($foo as $key => $value) {
    unset($foo[$key]);
}

var_dump($foo); // array(0) { }

$foo[] = 6;

var_dump($foo); // array(1) { [5]=> int(6) }

$foo = array_values($foo);
$foo[] = 7;

var_dump($foo); // array(2) { [0]=> int(6) [1]=> int(7) }

```

附例八：

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5];

foreach ($foo as &$value) {
    $value += 1;
}
unset($value);

var_dump($foo); // array(3) { [0]=> int(3) [1]=> int(5) [2]=> int(6) }

```

### 转换为数组

```php
<?php

declare(strict_types = 1);

class Foo
{
}

class Bar
{
    /**
     * Public property.
     *
     * @var string
     */
    public $public = 'public';

    /**
     * Protected property.
     *
     * @var string
     */
    protected $protected = 'protected';

    /**
     * Private property.
     *
     * @var null
     */
    private $private;
}

var_dump((array) null);    // array(0) { }
var_dump((array) true);    // array(1) { [0]=> bool(true) }
var_dump((array) false);   // array(1) { [0]=> bool(false) }
var_dump((array) 0);       // array(1) { [0]=> int(0) }
var_dump((array) 1);       // array(1) { [0]=> int(1) }
var_dump((array) 1.001);   // array(1) { [0]=> float(1.001) }
var_dump((array) 'foo');   // array(1) { [0]=> string(3) "foo" }
var_dump((array) new Foo); // array(0) { }
var_dump((array) new Bar); // array(3) { ["public"]=> string(6) "public" ["\0*\0protected"]=> string(9) "protected" ["\0Bar\0private"]=> NULL }

```

