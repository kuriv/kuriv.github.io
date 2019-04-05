# $http_response_header

`$http_response_header` 数组与 `get_headers()` 函数类似。当使用 `HTTP` 包装器时， `$http_response_header` 将会被 `HTTP` 响应头信息填充。

```php
<?php

declare(strict_types = 1);

$data = file_get_contents('https://github.com/');
var_dump($http_response_header);

```

