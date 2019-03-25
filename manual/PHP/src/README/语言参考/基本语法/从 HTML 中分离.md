# 从 HTML 中分离

凡是在一对起始标记和结束标记之外的内容都会被 `PHP` 解析器忽略，这使得 `PHP` 文件可以具备混合内容。可以使 `PHP` 嵌入到 `HTML` 文档中去。

```php
<p>foo</p>
<?php var_dump('bar'); ?>
<p>baz</p>
<?php var_dump('qux'); ?>

```

当处于条件语句中间时，此时 `PHP` 解释器会根据条件判断来决定哪些输出哪些跳过。 `PHP` 将跳过条件语句未达成的段落，即使该段落位于 `PHP` 开始和结束标记之外。由于 `PHP` 解释器会在条件未达成时直接跳过该段条件语句块，因此 `PHP` 会根据条件来忽略之。

```php
<?php if (isset($foo)) : ?>
    <p>foo</p>
<?php else : ?>
    <p>bar</p>
<?php endif; ?>

```

