# Directory Functions

> see [https://secure.php.net/manual/en/ref.dir.php](https://secure.php.net/manual/en/ref.dir.php) for more information.

[![build][build-image]][build-url]

## Table of contents

* [chdir](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/directory/php_directory.md#chdir) - Change directory.
* [closedir](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/directory/php_directory.md#closedir) - Close directory handle.
* [dir](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/directory/php_directory.md#dir) - Return an instance of the Directory class.
* [getcwd](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/directory/php_directory.md#getcwd) - Gets the current working directory.
* [opendir](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/directory/php_directory.md#opendir) - Open directory handle.
* [readdir](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/directory/php_directory.md#readdir) - Read entry from directory handle.
* [rewinddir](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/directory/php_directory.md#rewinddir) - Rewind directory handle.
* [scandir](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/directory/php_directory.md#scandir) - List files and directories inside the specified path.

### chdir

> Change directory.

```php
$chdir = chdir('./'); // $chdir = true;
$chdir = chdir('..'); // $chdir = true;
$chdir = chdir('/');  // $chdir = true;
```

### closedir

> Close directory handle.

```php
closedir();
closedir(opendir(__DIR__));
```

### dir

> Return an instance of the Directory class.

```php
$dir = dir(__DIR__);
```

### getcwd

> Gets the current working directory.

```php
$getcwd = getcwd();
```

### opendir

> Open directory handle.

```php
$opendir = opendir(__DIR__);
```

### readdir

> Read entry from directory handle.

```php
$readdir = readdir(opendir(__DIR__));
```

### rewinddir

> Rewind directory handle.

```php
rewinddir();
rewinddir(opendir(__DIR__));
```

### scandir

> List files and directories inside the specified path.

```php
$scandir = scandir(__DIR__);
$scandir = scandir(__DIR__, 1);
```



[build-image]: https://raw.githubusercontent.com/kuriv/kuriv.github.io/master/.cloud/kuriv.github.io/b0979b5893ae07e68ffb8edea2fdce8c.svg?sanitize=true
[build-url]: https://github.com/kuriv/kuriv.github.io