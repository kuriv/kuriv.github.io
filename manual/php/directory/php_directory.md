# Directory Functions

> see [https://secure.php.net/manual/en/ref.dir.php](https://secure.php.net/manual/en/ref.dir.php) for more information.

## Table of contents

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