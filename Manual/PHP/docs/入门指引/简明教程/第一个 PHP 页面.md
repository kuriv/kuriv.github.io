# 第一个 PHP 页面

在 Web 服务器根目录下建立一个文件名为 `example.php` ，内容如下：

```php
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <p><?php echo 'Hello, World!'; ?></p>
    </body>
</html>
```

在浏览器的地址栏里输入 Web 服务器的 URL 访问这个文件，如果所有的设置都正确，那么这个文件将被 PHP 解析，浏览器中将会输出如下结果：

```html
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <p>Hello, World!</p>
    </body>
</html>
```

现在已经成功建立了一个简单的 PHP 脚本，那么再来建立一个最著名的 PHP 脚本！

```php
<?php

phpinfo();

```

