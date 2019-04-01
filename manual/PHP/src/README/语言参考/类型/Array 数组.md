# Array 数组

`PHP` 中的数组实际上是一个有序映射。映射是一种把 `values` 关联到 `keys` 的类型。此类型在很多方面做了优化，因此可以把它当成真正的数组，或列表（向量），散列表（是映射的一种实现），字典，集合，栈，队列以及更多可能性。由于数组元素的值也可以是另一个数组，树形结构和多维数组也是允许的。

可以用 `array()` 语言结构来新建一个数组。它接受任意数量用逗号分隔的键值对。

最后一个数组单元之后的逗号可以省略。

还可以使用短数组定义语法，用 `[]` 替代 `array()` 。

```php
<?php

declare(strict_types = 1);

$foo = array(2, 4, 5);
$bar = [0 => 2, 1 => 4, 2 => 5];
$baz = array(
    'foo' => 'cat',
    'bar' => 'dog'
);
$qux = [
    'foo' => 'cat',
    'bar' => 'dog'
];

```

数组的键名可以是整型或者字符串。数组的值可以是任意类型。

此外数组的键会有如下的强制转换：

* 包含有合法整型值的字符串会被转换为整型。例如键名 `"8"` 实际会被储存为 `8` 。但是 `"08"` 则不会强制转换，因为其不是一个合法的十进制数值。
* 浮点类型也会被转换为整型，意味着其小数部分会被舍去。例如键名 `8.7` 实际会被储存为 `8` 。
* 布尔类型也会被转换成整型。即键名 `true` 实际会被储存为 `1` ，而键名 `false` 会被储存为 `0` 。
* `null` 会被转换为空字符串，即键名 `null` 实际会被储存为 `""` 。
* 数组和对象不能被用为键名。坚持这么做会导致警告。

如果在数组定义中多个单元都使用了同一个键名，则只使用了最后一个，之前的都被覆盖了。

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

如果对给出的值没有指定键名，则取当前最大的整数索引值，新的键名将是该值加一。如果指定的键名已经有了值，则该值会被覆盖。

```php
<?php

declare(strict_types = 1);

$foo = ['foo', 'bar', 6 => 'baz', 'qux'];
var_dump($foo); // array(4) { [0]=> string(3) "foo" [1]=> string(3) "bar" [6]=> string(3) "baz" [7]=> string(3) "qux" }

```

可以用直接对函数或方法调用的结果进行数组解引用。

```php
<?php

declare(strict_types = 1);

/**
 * Return an array.
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

可以通过明示地设定其中的值来修改一个已有数组。

这是通过在方括号内指定键名来给数组赋值实现的。也可以省略键名，在这种情况下给变量名加上一对空的方括号 `[]` 。

要修改数组中的某个键值，通过其键名给该单元赋一个新值。要删除某键值对，对其调用 `unset()` 函数。

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

最大整数键名不一定当前就在数组中，它只要在上次数组重新生成索引后曾经存在过就行了。

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

直接改变数组的值可以通过引用传递来做到。

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

转换为数组：

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

