## String 字符串

* [基本语法](#基本语法)
* [更多语法](#更多语法)
* [转换为字符串](#转换为字符串)

### 基本语法

附例一：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

```

附例二：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';
$bar = "$foo\r\nbar";

```

附例三：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';
$bar = <<<EOT
$foo
\r\n
bar
EOT;

```

附例四：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';
$bar = <<<'EOT'
$foo
\r\n
bar
EOT;

```

### 更多语法

附例一：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

var_dump("foo bar $foo baz qux"); // string(19) "foo bar foo baz qux"
var_dump("foo bar $foobaz qux");  // string(12) "foo bar  qux"

```

附例二：

```php
<?php

declare(strict_types = 1);

$foo = ['foo' => 'cat', 'dog', 'bird'];

var_dump("foo bar $foo[foo]baz qux"); // string(18) "foo bar catbaz qux"
var_dump("foo bar $foo[0] baz qux");  // string(19) "foo bar dog baz qux"
var_dump("foo bar $foo[1] baz qux");  // string(20) "foo bar bird baz qux"
var_dump("foo bar $foo[0]baz qux");   // string(18) "foo bar dogbaz qux"
var_dump("foo bar $foo[1]baz qux");   // string(19) "foo bar birdbaz qux"

```

附例三：

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Just a test property.
     *
     * @var string
     */
    public $foo = 'foo';
}

$foo = new Foo;

var_dump("foo bar $foo->foo baz qux"); // string(19) "foo bar foo baz qux"
var_dump("foo bar $foo->foobaz qux");  // string(12) "foo bar  qux"

```

附例四：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

var_dump("foo bar { $foo} baz qux"); // string(22) "foo bar { foo} baz qux"
var_dump("foo bar {$foo} baz qux");  // string(19) "foo bar foo baz qux"
var_dump("foo bar ${foo} baz qux");  // string(19) "foo bar foo baz qux"
var_dump("foo bar {$foo}baz qux");   // string(18) "foo bar foobaz qux"

```

附例五：

```php
<?php

declare(strict_types = 1);

$foo = ['foo' => 'cat', 'dog', 'bird'];

var_dump("foo bar {$foo['foo']}baz qux"); // string(18) "foo bar catbaz qux"
var_dump("foo bar {$foo[0]} baz qux");    // string(19) "foo bar dog baz qux"
var_dump("foo bar {$foo[1]} baz qux");    // string(20) "foo bar bird baz qux"
var_dump("foo bar {$foo[0]}baz qux");     // string(18) "foo bar dogbaz qux"
var_dump("foo bar {$foo[1]}baz qux");     // string(19) "foo bar birdbaz qux"

```

附例六：

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Just a test property.
     *
     * @var string
     */
    public $foo = 'foo';
}

$foo = new Foo;

var_dump("foo bar {$foo->foo} baz qux"); // string(19) "foo bar foo baz qux"
var_dump("foo bar {$foo->foo}baz qux");  // string(18) "foo bar foobaz qux"

```

附例七：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

var_dump($foo[0]); // string(1) "f"
var_dump($foo[1]); // string(1) "o"
var_dump($foo[2]); // string(1) "o"

```

附例八：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';
$foo[strlen($foo) - 1] = '0';

var_dump($foo); // string(3) "fo0"

```

附例九：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

var_dump($foo['1']);          // string(1) "o"
var_dump(isset($foo['1']));   // bool(true)

var_dump($foo['1.0']);        // string(1) "o"
var_dump(isset($foo['1.0'])); // bool(false)

var_dump($foo['x']);          // string(1) "f"
var_dump(isset($foo['x']));   // bool(false)

var_dump($foo['1x']);         // string(1) "o"
var_dump(isset($foo['1x']));  // bool(false)

```

### 转换为字符串

```php
<?php

declare(strict_types = 1);

var_dump((string) -10);    // string(3) "-10"
var_dump((string) 0);      // string(1) "0"
var_dump((string) 0.0001); // string(6) "0.0001"
var_dump((string) true);   // string(1) "1"
var_dump((string) false);  // string(0) ""
var_dump((string) 1e7);    // string(8) "10000000"

```

