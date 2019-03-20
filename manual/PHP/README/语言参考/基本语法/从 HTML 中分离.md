## 从 HTML 中分离

* [基本语法](#基本语法)

### 基本语法

附例一：

```php
<p>foo</p>
<?php var_dump('bar'); ?>
<p>baz</p>
<?php var_dump('qux'); ?>

```

附例二：

```php
<?php if (isset($foo)) : ?>
    <p>foo</p>
<?php else : ?>
    <p>bar</p>
<?php endif; ?>

```

