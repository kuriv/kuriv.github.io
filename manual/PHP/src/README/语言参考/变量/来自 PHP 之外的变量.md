# 来自 PHP 之外的变量

当一个表单提交给 `PHP` 脚本时，表单中的信息会自动在脚本中可用。

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

上例中的 `example.php` 文件内容：

```php
<?php

declare(strict_types = 1);

var_dump($_POST['username'], $_POST['password']);

```

变量名中的点和空格被转换成下划线。

```html
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="example.php" method="post">
            <input type="text" name="foo.bar">
            <input type="text" name="baz qux">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
```

上例中的 `example.php` 文件内容：

```php
<?php

declare(strict_types = 1);

var_dump($_POST['foo_bar'], $_POST['baz_qux']);

```

`PHP` 也懂得表单变量上下文中的数组。例如可以将相关的变量编成组，或者用此特性从多选输入框中取得值。

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

上例中的 `example.php` 文件内容：

```php
<?php

declare(strict_types = 1);

var_dump($_POST['info'], $_POST['option']);

```

当提交表单时，可以用一幅图像代替标准的提交按钮。当用户点击到图像中的某处时，相应的表单会被传送到服务器，并加上两个变量，它们包含了用户点击图像的坐标。有经验的用户可能会注意到被浏览器发送的实际变量名包含的是一个点而不是下划线（即 `image.x` 和 `image.y` ），但 `PHP` 自动将点转换成了下划线。

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

上例中的 `example.php` 文件内容：

```php
<?php

declare(strict_types = 1);

var_dump($_POST['image_x'], $_POST['image_y']);

```

`PHP` 透明地支持 `RFC 6265` 定义中的 `HTTP Cookie` 。 `Cookie` 是一种在浏览器端存储数据并能追踪或识别再次访问的用户的机制。可以用 `setcookie()` 函数设定 `Cookie`。 `Cookie` 是 `HTTP` 信息头中的一部分，因此 `setcookie()` 函数必须在向浏览器发送任何输出之前调用。

```php
<?php

declare(strict_types = 1);

setcookie('foo', 'foo', time() + 60 * 60);
setcookie('bar', 'bar', time() + 60 * 60);

```

