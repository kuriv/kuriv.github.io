## 目录

* [启动Web服务器](#启动web服务器)
* [启动时指定根目录](#启动时指定根目录)
* [使用路由脚本](#使用路由脚本)



## 启动Web服务器

命令行：

```sh
cd C:/Project/nginx-1.14.2/html/
php -S localhost:8080
```

终端显示：

```
PHP 7.3.0 Development Server started at Sat Mar  2 20:56:01 2019
Listening on http://localhost:8080
Document root is C:\Project\nginx-1.14.2\html
Press Ctrl-C to quit.
```

访问 `http://localhost:8080/index.php` ，终端显示：

```
PHP 7.3.0 Development Server started at Sat Mar  2 20:56:01 2019
Listening on http://localhost:8080
Document root is C:\Project\nginx-1.14.2\html
Press Ctrl-C to quit.
[Sat Mar  2 20:56:15 2019] [::1]:8054 [200]: /index.php
[Sat Mar  2 20:56:15 2019] [::1]:8055 [200]: /favicon.ico
```



## 启动时指定根目录

命令行：

```sh
php -S localhost:8080 -t C:/Project/nginx-1.14.2/html/
```

终端显示：

```
PHP 7.3.0 Development Server started at Sat Mar  2 20:56:42 2019
Listening on http://localhost:8080
Document root is C:\Project\nginx-1.14.2\html
Press Ctrl-C to quit.
```

访问 `http://localhost:8080/index.php` ，终端显示：

```
PHP 7.3.0 Development Server started at Sat Mar  2 20:56:42 2019
Listening on http://localhost:8080
Document root is C:\Project\nginx-1.14.2\html
Press Ctrl-C to quit.
[Sat Mar  2 20:57:01 2019] [::1]:8124 [200]: /index.php
[Sat Mar  2 20:57:01 2019] [::1]:8125 [200]: /favicon.ico
```



## 使用路由脚本

router.php

```php
<?php

declare(strict_types = 1);

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if (file_exists(__DIR__ . $uri)) {
    return false;
}

echo '404 Not Found';

```

命令行：

```sh
cd C:/Project/nginx-1.14.2/html/
php -S localhost:8080 router.php
```

终端显示：

```
PHP 7.3.0 Development Server started at Sat Mar  2 20:57:39 2019
Listening on http://localhost:8080
Document root is C:\Project\nginx-1.14.2\html
Press Ctrl-C to quit.
```

访问 `http://localhost:8080/index.php` ，终端显示：

```
PHP 7.3.0 Development Server started at Sat Mar  2 20:57:39 2019
Listening on http://localhost:8080
Document root is C:\Project\nginx-1.14.2\html
Press Ctrl-C to quit.
[Sat Mar  2 20:58:10 2019] [::1]:8226 [200]: /index.php
[Sat Mar  2 20:58:10 2019] [::1]:8227 [200]: /favicon.ico
```