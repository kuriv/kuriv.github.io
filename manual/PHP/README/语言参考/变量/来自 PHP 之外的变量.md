## 来自 PHP 之外的变量

* [基本语法](#基本语法)

### 基本语法

附例一：

```html
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="example.php" method="post">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" value="Login">
        </form>
    </body>
</html>
```

example.php

```php
<?php

declare(strict_types = 1);

var_dump($_POST['username'], $_POST['password']);

```

附例二：

```html
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="example.php" method="post">
            <input type="text" name="foo.bar">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
```

example.php

```php
<?php

declare(strict_types = 1);

var_dump($_POST['foo_bar']);

```

附例三：

```html
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="example.php" method="post">
            <input type="text" name="info[name]">
            <input type="text" name="info[age]">
            <input type="text" name="info[gender]">
            <select name="option[]" multiple="multiple">
                <option value="foo">foo</option>
                <option value="bar">bar</option>
                <option value="baz">baz</option>
                <option value="qux">qux</option>
            </select>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
```

example.php

```php
<?php

declare(strict_types = 1);

var_dump($_POST['info'], $_POST['option']);

```

附例四：

```html
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="example.php" method="post">
            <input type="image" name="image" src="https://github.com/fluidicon.png">
        </form>
    </body>
</html>
```

example.php

```php
<?php

declare(strict_types = 1);

var_dump($_POST['image_x'], $_POST['image_y']);

```

附例五：

```php
<?php

declare(strict_types = 1);

setcookie('foo', 'foo', time() + 60 * 60);
setcookie('bar', 'bar', time() + 60 * 60);

```

