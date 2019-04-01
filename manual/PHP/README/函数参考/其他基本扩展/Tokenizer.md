# Tokenizer

* [token_get_all - 将提供的源码按 PHP 标记进行分割](#tokengetall)
* [token_name - 获取提供的 PHP 解析器代号的符号名称](#tokenname)

## token_get_all

```php
<?php

declare(strict_types = 1);

var_dump(token_get_all('<?php phpinfo(); ?>'));
var_dump(token_get_all('/* foo */'));

```

## token_name

```php
<?php

declare(strict_types = 1);

var_dump(token_name(260));        // string(6) "T_EVAL"
var_dump(token_name(T_FUNCTION)); // string(10) "T_FUNCTION"

```

