# Float 浮点型

浮点型（也叫浮点数，双精度数或实数）可以用以下任一语法定义：

```php
<?php

declare(strict_types = 1);

$foo = 1.001;
$foo = 1.2e3;
$foo = 7e-10;

```

转换为浮点型：

```php
<?php

declare(strict_types = 1);

var_dump((float) -0.0001);        // float(-0.0001)
var_dump((float) 'abc122.34343'); // float(0)
var_dump((float) '122.34343abc'); // float(122.34343)

```

