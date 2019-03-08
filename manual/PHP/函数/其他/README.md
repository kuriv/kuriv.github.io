## 目录

* [connection_aborted - 检查客户端是否已经断开](#connection_aborted)
* [connection_status - 返回连接的状态位](#connection_status)
* [constant - 返回一个常量的值](#constant)
* [define - 定义一个常量](#define)
* [defined - 检查某个名称的常量是否存在](#defined)
* [die - 输出一个消息并且退出当前脚本](#die)
* [eval - 把字符串作为代码执行](#eval)
* [exit - 输出一个消息并且退出当前脚本](#exit)
* [get_browser - 获取浏览器具有的功能](#get_browser)
* [\_\_halt_compiler - 中断编译器的执行](#\_\_halt_compiler)
* [highlight_file - 语法高亮一个文件](#highlight_file)
* [highlight_string - 语法高亮字符串](#highlight_string)
* [hrtime - 获取系统的高分辨率时间](#hrtime)
* [ignore_user_abort - 设置客户端断开连接时是否中断脚本的执行](#ignore_user_abort)
* [pack - 将数据打包成二进制字符串](#pack)
* [php_strip_whitespace - 返回删除注释和空格后的PHP源码](#php_strip_whitespace)
* [show_source - 语法高亮一个文件](#show_source)
* [sleep - 延缓执行](#sleep)
* [time_nanosleep - 延缓执行若干秒和纳秒](#time_nanosleep)
* [time_sleep_until - 使脚本延缓到指定的时间为止](#time_sleep_until)
* [uniqid - 生成一个唯一 ID](#uniqid)
* [unpack - 从二进制字符串中解压缩数据](#unpack)
* [usleep - 以指定的微秒数延迟执行](#usleep)



## connection_aborted

```php
<?php

declare(strict_types = 1);

$connection_aborted = connection_aborted();

```



## connection_status

```php
<?php

declare(strict_types = 1);

$connection_status = connection_status();

```



## constant

```php
<?php

declare(strict_types = 1);

$define = define('FOO', 'foo'); // $define = true;

class Foo
{
    /**
     * Just a test constant.
     *
     * @var string
     */
    const FOO = 'foo';
}

$constant = constant('foo');      // $constant = NULL;
$constant = constant('FOO');      // $constant = 'foo';
$constant = constant('Foo::FOO'); // $constant = 'foo';

```



## define

```php
<?php

declare(strict_types = 1);

$define = define('FOO', 'foo');          // $define = true;
$define = define('BAR', 'bar');          // $define = true;
$define = define('BAZ', ['foo', 'bar']); // $define = true;

```



## defined

```php
<?php

declare(strict_types = 1);

$define = define('FOO', 'foo'); // $define = true;

class Foo
{
    /**
     * Just a test constant.
     *
     * @var string
     */
    const FOO = 'foo';
}

$defined = defined('foo');      // $defined = false;
$defined = defined('FOO');      // $defined = true;
$defined = defined('Foo::FOO'); // $defined = true;

```



## die

```php
<?php

declare(strict_types = 1);

die('foo');

```



## eval

```php
<?php

declare(strict_types = 1);

$foo = 'foo';                                  // $foo = 'foo';
$bar = 'bar';                                  // $bar = 'bar';
$baz = 'This is a string with $foo and $bar.'; // $baz = 'This is a string with $foo and $bar.';
eval("\$baz = \"$baz\";");                     // $baz = 'This is a string with foo and bar.';

```



## exit

```php
<?php

declare(strict_types = 1);

exit('foo');

```



## get_browser

```php
<?php

declare(strict_types = 1);

$get_browser = get_browser(null);
$get_browser = get_browser(null, true);

```

为了能让该函数运作，请在 `php.ini` 中配置 `browscap.ini` 文件的正确位置，文件下载地址： [https://browscap.org](https://browscap.org)



## \_\_halt_compiler

```php
<?php

declare(strict_types = 1);

__halt_compiler();

§RW$FG$%ZDS$TSG$TSZ%U();
§$"§%"§$!!();

```



## highlight_file

```php
<?php

declare(strict_types = 1);

$highlight_file = highlight_file(__DIR__ . '/example.php', false); // $highlight_file = true;
$highlight_file = highlight_file(__DIR__ . '/example.php', true);

```



## highlight_string

```php
<?php

declare(strict_types = 1);

$highlight_string = highlight_string('<?php phpinfo(); ?>', false); // $highlight_string = true;
$highlight_string = highlight_string('<?php phpinfo(); ?>', true);

```



## hrtime

```php
<?php

declare(strict_types = 1);

$hrtime = hrtime();
$hrtime = hrtime(true);

```



## ignore_user_abort

```php
<?php

declare(strict_types = 1);

$ignore_user_abort = ignore_user_abort();      // $ignore_user_abort = 0;
$ignore_user_abort = ignore_user_abort(true);  // $ignore_user_abort = 0;
$ignore_user_abort = ignore_user_abort(false); // $ignore_user_abort = 1;

```



## pack

```php
<?php

declare(strict_types = 1);

$pack = pack('C3', 80, 72, 80); // $pack = 'PHP';

```



## php_strip_whitespace

```php
<?php

declare(strict_types = 1);

$php_strip_whitespace = php_strip_whitespace(__DIR__ . '/example.php');

```



## show_source

```php
<?php

declare(strict_types = 1);

$show_source = show_source(__DIR__ . '/example.php', false); // $show_source = true;
$show_source = show_source(__DIR__ . '/example.php', true);

```



## sleep

```php
<?php

declare(strict_types = 1);

$sleep = sleep(2); // $sleep = 0;

```



## time_nanosleep

```php
<?php

declare(strict_types = 1);

$time_nanosleep = time_nanosleep(2, 100000); // $time_nanosleep = true;

```



## time_sleep_until

```php
<?php

declare(strict_types = 1);

$time_sleep_until = time_sleep_until(microtime(true) + 2); // $time_sleep_until = true;

```



## uniqid

```php
<?php

declare(strict_types = 1);

$uniqid = uniqid();
$uniqid = uniqid('');
$uniqid = uniqid('prefix_');
$uniqid = uniqid('', true);
$uniqid = uniqid('prefix_', true);

```



## unpack

```php
<?php

declare(strict_types = 1);

$unpack = unpack('C3', 'PHP'); // $unpack = [1 => 80, 2 => 72, 3 => 80];

```



## usleep

```php
<?php

declare(strict_types = 1);

usleep(2000000);

```