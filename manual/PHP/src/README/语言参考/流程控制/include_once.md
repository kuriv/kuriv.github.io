# include_once

`include_once` 语句和 `include` 语句完全相同，唯一区别是 `PHP` 会检查该文件是否已经被包含过，如果是则不会再次包含。

```php
<?php

declare(strict_types = 1);

include_once __DIR__ . '/example.php';

```

