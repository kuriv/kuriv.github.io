## 目录

* [base64_decode - 对使用 MIME base64 编码的数据进行解码](#base64_decode)
* [base64_encode - 使用 MIME base64 对数据进行编码](#base64_encode)
* [get_headers - 取得服务器响应一个 HTTP 请求所发送的所有报头](#get_headers)
* [get_meta_tags - 从一个文件中提取所有的 meta 标签 content 属性，返回一个数组](#get_meta_tags)
* [http_build_query - 生成 URL-encode 之后的请求字符串](#http_build_query)
* [parse_url - 解析 URL，返回其组成部分](#parse_url)
* [rawurldecode - 对已编码的 URL 字符串进行解码](#rawurldecode)
* [rawurlencode - 按照 RFC 3986 对 URL 进行编码](#rawurlencode)
* [urldecode - 对已编码的 URL 字符串进行解码](#urldecode)
* [urlencode - 编码 URL 字符串](#urlencode)



## base64_decode

```php
<?php

declare(strict_types = 1);

$base64_decode = base64_decode('VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZy4='); // $base64_decode = 'This is an encoded string.';
$base64_decode = base64_decode('_');                                    // $base64_decode = '';
$base64_decode = base64_decode('_', true);                              // $base64_decode = false;

```



## base64_encode

```php
<?php

declare(strict_types = 1);

$base64_encode = base64_encode('This is an encoded string.'); // $base64_encode = 'VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZy4=';
$base64_encode = base64_encode('_');                          // $base64_encode = 'Xw==';
$base64_encode = base64_encode(' ');                          // $base64_encode = 'IA==';

```



## get_headers

```php
<?php

declare(strict_types = 1);

$get_headers = get_headers('https://secure.php.net/');
$get_headers = get_headers('https://secure.php.net/', 1);
$get_headers = get_headers('https://www.github.com/', 1);

```



## get_meta_tags

```php
<?php

declare(strict_types = 1);

$get_meta_tags = get_meta_tags('https://secure.php.net/');
$get_meta_tags = get_meta_tags('https://www.github.com/');
$get_meta_tags = get_meta_tags(__DIR__ . '/meta.html', true);

```



## http_build_query

```php
<?php

declare(strict_types = 1);

$http_build_query = http_build_query(['foo' => 'cat', 'bar' => 'dog']);            // $http_build_query = 'foo=cat&bar=dog';
$http_build_query = http_build_query(['foo' => 'cat', 'bar' => ['dog']]);          // $http_build_query = 'foo=cat&bar%5B0%5D=dog';
$http_build_query = http_build_query([1 => 'foo', 2 => 'bar'], 'query_');          // $http_build_query = 'query_1=foo&query_2=bar';
$http_build_query = http_build_query([1 => 'foo', 2 => 'bar'], 'query_', '&amp;'); // $http_build_query = 'query_1=foo&amp;query_2=bar';

```



## parse_url

```php
<?php

declare(strict_types = 1);

$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor');                   // $parse_url = ['scheme' => 'http', 'host' => 'hostname', 'user' => 'username', 'pass' => 'password', 'path' => '/path', 'query' => 'arg=value', 'fragment' => 'anchor'];
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_SCHEME);   // $parse_url = 'http';
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_HOST);     // $parse_url = 'hostname';
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_PORT);     // $parse_url = NULL;
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_USER);     // $parse_url = 'username';
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_PASS);     // $parse_url = 'password';
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_PATH);     // $parse_url = '/path';
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_QUERY);    // $parse_url = 'arg=value';
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_FRAGMENT); // $parse_url = 'anchor';

```



## rawurldecode

```php
<?php

declare(strict_types = 1);

$rawurldecode = rawurldecode('foo%3Dcat%26bar%3Ddog');       // $rawurldecode = 'foo=cat&bar=dog';
$rawurldecode = rawurldecode('foo%3Dcat%26bar%3D%20dog%20'); // $rawurldecode = 'foo=cat&bar= dog ';
$rawurldecode = rawurldecode('foo%3Dcat%26bar%3Ddog+bird');  // $rawurldecode = 'foo=cat&bar=dog+bird';

```



## rawurlencode

```php
<?php

declare(strict_types = 1);

$rawurlencode = rawurlencode('foo=cat&bar=dog');      // $rawurlencode = 'foo%3Dcat%26bar%3Ddog';
$rawurlencode = rawurlencode('foo=cat&bar= dog ');    // $rawurlencode = 'foo%3Dcat%26bar%3D%20dog%20';
$rawurlencode = rawurlencode('foo=cat&bar=dog bird'); // $rawurlencode = 'foo%3Dcat%26bar%3Ddog%20bird';

```



## urldecode

```php
<?php

declare(strict_types = 1);

$urldecode = urldecode('foo%3Dcat%26bar%3Ddog');       // $urldecode = 'foo=cat&bar=dog';
$urldecode = urldecode('foo%3Dcat%26bar%3D%20dog%20'); // $urldecode = 'foo=cat&bar= dog ';
$urldecode = urldecode('foo%3Dcat%26bar%3Ddog+bird');  // $urldecode = 'foo=cat&bar=dog bird';

```



## urlencode

```php
<?php

declare(strict_types = 1);

$urlencode = urlencode('foo=cat&bar=dog');      // $urlencode = 'foo%3Dcat%26bar%3Ddog';
$urlencode = urlencode('foo=cat&bar= dog ');    // $urlencode = 'foo%3Dcat%26bar%3D+dog+';
$urlencode = urlencode('foo=cat&bar=dog bird'); // $urlencode = 'foo%3Dcat%26bar%3Ddog+bird';

```