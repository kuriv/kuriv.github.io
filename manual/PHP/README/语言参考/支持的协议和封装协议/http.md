# http://

允许通过 `HTTP` 的 `GET` 方法，以只读访问文件或资源。 `HTTP` 请求会附带一个 `Host` 头，用于兼容基于域名的虚拟主机。 如果在 `php.ini` 文件中或字节流上下文配置了 `user_agent` 字符串，它也会被包含在请求之中。数据流允许读取资源的 `body` ，而 `headers` 则储存在了 `$http_response_header` 变量里。如果需要知道文档资源来自哪个 `URL` （经过所有重定向的处理后）， 需要处理数据流返回的系列响应报头。

```php
<?php

declare(strict_types = 1);

$data = file_get_contents('https://github.com/');

```

