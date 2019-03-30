# $argv

`$argv` 是包含当运行于命令行下时传递给当前脚本的参数的数组。

```php
<?php

declare(strict_types = 1);

var_dump($argv);

```

当执行以下这条命令时：

```shell
php index.php foo bar
```

上例中的输出类似于：

```
array(3) {
  [0]=>
  string(9) "index.php"
  [1]=>
  string(3) "foo"
  [2]=>
  string(3) "bar"
}
```

