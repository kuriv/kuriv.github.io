# require_once

`require_once` 语句和 `require` 语句完全相同，唯一区别是 `PHP` 会检查该文件是否已经被包含过，如果是则不会再次包含。

```php
<?php

declare(strict_types = 1);

require_once __DIR__ . '/example.php';

```

