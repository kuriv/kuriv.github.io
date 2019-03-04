## 目录

* [chdir - 改变目录](#chdir)
* [closedir - 关闭目录句柄](#closedir)
* [dir - 返回一个 Directory 类实例](#dir)
* [getcwd - 取得当前工作目录](#getcwd)
* [opendir - 打开目录句柄](#opendir)
* [readdir - 从目录句柄中读取条目](#readdir)
* [rewinddir - 倒回目录句柄](#rewinddir)
* [scandir - 列出指定路径中的文件和目录](#scandir)



## chdir

```php
<?php

declare(strict_types = 1);

$chdir = chdir('./'); // $chdir = true;
$chdir = chdir('..'); // $chdir = true;
$chdir = chdir('/');  // $chdir = true;

```



## closedir

```php
<?php

declare(strict_types = 1);

closedir();
closedir(opendir(__DIR__));

```



## dir

```php
<?php

declare(strict_types = 1);

$dir = dir(__DIR__);

```



## getcwd

```php
<?php

declare(strict_types = 1);

$getcwd = getcwd();

```



## opendir

```php
<?php

declare(strict_types = 1);

$opendir = opendir(__DIR__);

```



## readdir

```php
<?php

declare(strict_types = 1);

$readdir = readdir(opendir(__DIR__));

```



## rewinddir

```php
<?php

declare(strict_types = 1);

rewinddir();
rewinddir(opendir(__DIR__));

```



## scandir

```php
<?php

declare(strict_types = 1);

$scandir = scandir(__DIR__);
$scandir = scandir(__DIR__, 1);

```