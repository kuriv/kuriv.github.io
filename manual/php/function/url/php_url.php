<?php

declare(strict_types = 1);

/*
|----------------------------------------------------------------------
| base64_decode
|----------------------------------------------------------------------
|
| Decodes data encoded with MIME base64.
|
*/

$base64_decode = base64_decode('VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZy4='); // $base64_decode = 'This is an encoded string.';
$base64_decode = base64_decode('_');                                    // $base64_decode = '';
$base64_decode = base64_decode('_', true);                              // $base64_decode = false;

/*
|----------------------------------------------------------------------
| base64_encode
|----------------------------------------------------------------------
|
| Encodes data with MIME base64.
|
*/

$base64_encode = base64_encode('This is an encoded string.'); // $base64_encode = 'VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZy4=';
$base64_encode = base64_encode('');                           // $base64_encode = '';
$base64_encode = base64_encode('_');                          // $base64_encode = 'Xw==';

/*
|----------------------------------------------------------------------
| get_headers
|----------------------------------------------------------------------
|
| Fetches all the headers sent by the server.
|
*/

$get_headers = get_headers('https://secure.php.net/');
$get_headers = get_headers('https://secure.php.net/', 1);
$get_headers = get_headers('https://www.github.com/', 1);

/*
|----------------------------------------------------------------------
| get_meta_tags
|----------------------------------------------------------------------
|
| Extracts all meta tag content attributes from a file.
|
*/

$get_meta_tags = get_meta_tags('https://secure.php.net/');
$get_meta_tags = get_meta_tags('https://www.github.com/');
$get_meta_tags = get_meta_tags(__DIR__ . '/meta.html', true);

/*
|----------------------------------------------------------------------
| http_build_query
|----------------------------------------------------------------------
|
| Generate URL-encoded query string.
|
*/

$http_build_query = http_build_query(['a' => 'cat', 'b' => 'dog', 'c' => 'bird']); // $http_build_query = 'a=cat&b=dog&c=bird';
$http_build_query = http_build_query(['a' => 'cat', 'b' => ['c' => 'bird']]);      // $http_build_query = 'a=cat&b%5Bc%5D=bird';
$http_build_query = http_build_query([0, 1, 2], 'parameter_');                     // $http_build_query = 'parameter_0=0&parameter_1=1&parameter_2=2';
$http_build_query = http_build_query([0, 1, 2], 'parameter_', '&amp;');            // $http_build_query = 'parameter_0=0&amp;parameter_1=1&amp;parameter_2=2';

/*
|----------------------------------------------------------------------
| parse_url
|----------------------------------------------------------------------
|
| Parse a URL and return its components.
|
*/

$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor');                   // $parse_url = ['scheme' => 'http', 'host' => 'hostname', 'user' => 'username', 'pass' => 'password', 'path' => '/path', 'query' => 'arg=value', 'fragment' => 'anchor'];
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_SCHEME);   // $parse_url = 'http';
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_HOST);     // $parse_url = 'hostname';
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_PORT);     // $parse_url = null;
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_USER);     // $parse_url = 'username';
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_PASS);     // $parse_url = 'password';
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_PATH);     // $parse_url = '/path';
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_QUERY);    // $parse_url = 'arg=value';
$parse_url = parse_url('http://username:password@hostname/path?arg=value#anchor', PHP_URL_FRAGMENT); // $parse_url = 'anchor';

/*
|----------------------------------------------------------------------
| rawurldecode
|----------------------------------------------------------------------
|
| Decode URL-encoded strings.
|
*/

$rawurldecode = rawurldecode('a%3Dcat%26b%3Ddog%26c%3Dbird');       // $rawurldecode = 'a=cat&b=dog&c=bird';
$rawurldecode = rawurldecode('a%3Dcat%26b%3D%20dog%20%26c%3Dbird'); // $rawurldecode = 'a=cat&b= dog &c=bird';
$rawurldecode = rawurldecode('a%3Dcat%26b%3Ddog%2Bbird');           // $rawurldecode = 'a=cat&b=dog+bird';

/*
|----------------------------------------------------------------------
| rawurlencode
|----------------------------------------------------------------------
|
| URL-encode according to RFC 3986.
|
*/

$rawurlencode = rawurlencode('a=cat&b=dog&c=bird');   // $rawurlencode = 'a%3Dcat%26b%3Ddog%26c%3Dbird';
$rawurlencode = rawurlencode('a=cat&b= dog &c=bird'); // $rawurlencode = 'a%3Dcat%26b%3D%20dog%20%26c%3Dbird';
$rawurlencode = rawurlencode('a=cat&b=dog+bird');     // $rawurlencode = 'a%3Dcat%26b%3Ddog%2Bbird';

/*
|----------------------------------------------------------------------
| urldecode
|----------------------------------------------------------------------
|
| Decodes URL-encoded string.
|
*/

$urldecode = urldecode('a%3Dcat%26b%3Ddog%26c%3Dbird');   // $urldecode = 'a=cat&b=dog&c=bird';
$urldecode = urldecode('a%3Dcat%26b%3D+dog+%26c%3Dbird'); // $urldecode = 'a=cat&b= dog &c=bird';
$urldecode = urldecode('a%3Dcat%26b%3Ddog%2Bbird');       // $urldecode = 'a=cat&b=dog+bird';

/*
|----------------------------------------------------------------------
| urlencode
|----------------------------------------------------------------------
|
| URL-encodes string.
|
*/

$urlencode = urlencode('a=cat&b=dog&c=bird');   // $urlencode = 'a%3Dcat%26b%3Ddog%26c%3Dbird';
$urlencode = urlencode('a=cat&b= dog &c=bird'); // $urlencode = 'a%3Dcat%26b%3D+dog+%26c%3Dbird';
$urlencode = urlencode('a=cat&b=dog+bird');     // $urlencode = 'a%3Dcat%26b%3Ddog%2Bbird';
