## 目录

* [token_get_all - 将提供的源码按 PHP 标记进行分割](#token_get_all)
* [token_name - 获取提供的 PHP 解析器代号的符号名称](#token_name)



## token_get_all

```php
<?php

declare(strict_types = 1);

$token_get_all = token_get_all('<?php phpinfo(); ?>');
$token_get_all = token_get_all('/* foo */');

```



## token_name

```php
<?php

declare(strict_types = 1);

$token_name = token_name(260);        // $token_name = 'T_EVAL';
$token_name = token_name(T_FUNCTION); // $token_name = 'T_FUNCTION';

```