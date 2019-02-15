# Tokenizer Functions

> see [https://secure.php.net/manual/en/ref.tokenizer.php](https://secure.php.net/manual/en/ref.tokenizer.php) for more information.

## Table of contents

### token_get_all

> Split given source into PHP tokens.

```php
$token_get_all = token_get_all('<?php echo;?>');
$token_get_all = token_get_all('/* comment */');

$variable = <<<php
<?php

class A
{
    const PUBLIC = 1;
}

php;
$token_get_all = token_get_all($variable, TOKEN_PARSE);
```

### token_name

> Get the symbolic name of a given PHP token.

```php
$token_name = token_name(260);        // $token_name = T_EVAL;
$token_name = token_name(T_FUNCTION); // $token_name = T_FUNCTION;
```