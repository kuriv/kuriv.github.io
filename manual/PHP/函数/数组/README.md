## 目录

* [array_change_key_case - 将数组中的所有键名修改为全大写或全小写](#array_change_key_case)
* [array_chunk - 将一个数组分割成多个](#array_chunk)
* [array_column - 返回数组中指定的一列](#array_column)
* [array_combine - 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值](#array_combine)
* [array_count_values - 统计数组中所有的值](#array_count_values)
* [array_diff_assoc - 带索引检查来计算数组的差集](#array_diff_assoc)
* [array_diff_key - 对键名比较来计算数组的差集](#array_diff_key)
* [array_diff_uassoc - 使用用户提供的回调函数做索引检查来计算数组的差集](#array_diff_uassoc)
* [array_diff_ukey - 使用用户提供的回调函数对键名比较来计算数组的差集](#array_diff_ukey)
* [array_diff - 计算数组的差集](#array_diff)
* [array_fill_keys - 使用指定的键和值填充数组](#array_fill_keys)
* [array_fill - 用给定的值填充数组](#array_fill)
* [array_filter - 用回调函数过滤数组中的单元](#array_filter)
* [array_flip - 交换数组中的键和值](#array_flip)
* [array_intersect_assoc - 带索引检查来计算数组的交集](#array_intersect_assoc)
* [array_intersect_key - 对键名比较来计算数组的交集](#array_intersect_key)
* [array_intersect_uassoc - 使用用户提供的回调函数做索引检查来计算数组的交集](#array_intersect_uassoc)
* [array_intersect_ukey - 使用用户提供的回调函数对键名比较来计算数组的交集](#array_intersect_ukey)
* [array_intersect - 计算数组的交集](#array_intersect)
* [array_key_exists - 检查数组里是否有指定的键名或索引](#array_key_exists)
* [array_key_first - 获取数组的第一个键](#array_key_first)
* [array_key_last - 获取数组的最后一个键](#array_key_last)
* [array_keys - 返回数组中部分的或所有的键名](#array_keys)
* [array_map - 为数组的每个元素应用回调函数](#array_map)
* [array_merge_recursive - 递归地合并一个或多个数组](#array_merge_recursive)
* [array_merge - 合并一个或多个数组](#array_merge)
* [array_multisort - 对多个数组或多维数组进行排序](#array_multisort)
* [array_pad - 以指定长度将一个值填充进数组](#array_pad)
* [array_pop - 弹出数组最后一个单元（出栈）](#array_pop)
* [array_product - 计算数组中所有值的乘积](#array_product)
* [array_push - 将一个或多个单元压入数组的末尾（入栈）](#array_push)
* [array_rand - 从数组中随机取出一个或多个单元](#array_rand)
* [array_reduce - 用回调函数迭代地将数组简化为单一的值](#array_reduce)
* [array_replace_recursive - 使用传递的数组递归地替换第一个数组的元素](#array_replace_recursive)
* [array_replace - 使用传递的数组替换第一个数组的元素](#array_replace)
* [array_reverse - 返回单元顺序相反的数组](#array_reverse)
* [array_search - 在数组中搜索给定的值，如果成功则返回首个相应的键名](#array_search)
* [array_shift - 将数组开头的单元移出数组](#array_shift)
* [array_slice - 从数组中取出一段](#array_slice)
* [array_splice - 去掉数组中的某一部分并用其它值取代](#array_splice)
* [array_sum - 对数组中所有值求和](#array_sum)
* [array_udiff_assoc - 带索引检查来计算数组的差集，使用用户提供的回调函数比较数据](#array_udiff_assoc)
* [array_udiff_uassoc - 带索引检查来计算数组的差集，使用用户提供的回调函数比较数据和索引](#array_udiff_uassoc)
* [array_udiff - 使用用户提供的回调函数来计算数组的差集](#array_udiff)
* [array_uintersect_assoc - 带索引检查来计算数组的交集，使用用户提供的回调函数比较数据](#array_uintersect_assoc)
* [array_uintersect_uassoc - 带索引检查来计算数组的交集，使用用户提供的回调函数比较数据和索引](#array_uintersect_uassoc)
* [array_uintersect - 使用用户提供的回调函数来计算数组的交集](#array_uintersect)
* [array_unique - 移除数组中重复的值](#array_unique)
* [array_unshift - 在数组开头插入一个或多个单元](#array_unshift)
* [array_values - 返回数组中所有的值](#array_values)
* [array_walk_recursive - 使用用户自定义函数对数组中的每个元素递归地做回调处理](#array_walk_recursive)
* [array_walk - 使用用户自定义函数对数组中的每个元素做回调处理](#array_walk)
* [array - 新建一个数组](#array)
* [arsort - 对数组中的值进行逆向排序并保持索引关联](#arsort)
* [asort - 对数组中的值进行排序并保持索引关联](#asort)
* [compact - 创建一个包含变量名和它们的值的数组](#compact)
* [count - 计算数组中的单元数目，或对象中的属性个数](#count)
* [current - 返回数组中的当前单元](#current)
* [end - 将数组的内部指针指向最后一个单元](#end)
* [extract - 从数组中将变量导入到当前的符号表](#extract)
* [in_array - 检查数组中是否存在某个值](#in_array)
* [key_exists - 检查数组里是否有指定的键名或索引](#key_exists)
* [key - 从数组中取得键名](#key)
* [krsort - 对数组中的键名进行逆向排序](#krsort)
* [ksort - 对数组中的键名进行排序](#ksort)
* [list - 把数组中的值赋给一组变量](#list)
* [natcasesort - 用“自然排序”算法对数组中的值进行不区分大小写字母的排序并保持索引关联](#natcasesort)
* [natsort - 用“自然排序”算法对数组中的值进行排序并保持索引关联](#natsort)
* [next - 将数组中的内部指针向前移动一位](#next)
* [pos - 返回数组中的当前单元](#pos)
* [prev - 将数组的内部指针倒回一位](#prev)
* [range - 根据范围创建数组，包含指定的元素](#range)
* [reset - 将数组的内部指针指向第一个单元](#reset)
* [rsort - 对数组中的值进行逆向排序](#rsort)
* [shuffle - 打乱数组](#shuffle)
* [sizeof - 计算数组中的单元数目，或对象中的属性个数](#sizeof)
* [sort - 对数组中的值进行排序](#sort)
* [uasort - 使用用户自定义函数对数组中的值进行排序并保持索引关联](#uasort)
* [uksort - 使用用户自定义函数对数组中的键名进行排序](#uksort)
* [usort - 使用用户自定义函数对数组中的值进行排序](#usort)



## array_change_key_case

```php
<?php

declare(strict_types = 1);

$array_change_key_case = array_change_key_case([2, 4, 5]);                                    // $array_change_key_case = [0 => 2, 1 => 4, 2 => 5];
$array_change_key_case = array_change_key_case(['foo' => 'cat', 'bar' => 'dog']);             // $array_change_key_case = ['foo' => 'cat', 'bar' => 'dog'];
$array_change_key_case = array_change_key_case(['foo' => 'cat', 'bar' => 'dog'], CASE_LOWER); // $array_change_key_case = ['foo' => 'cat', 'bar' => 'dog'];
$array_change_key_case = array_change_key_case(['foo' => 'cat', 'bar' => 'dog'], CASE_UPPER); // $array_change_key_case = ['FOO' => 'cat', 'BAR' => 'dog'];
$array_change_key_case = array_change_key_case(['foo' => 'cat', 'FOO' => 'dog'], CASE_LOWER); // $array_change_key_case = ['foo' => 'dog'];
$array_change_key_case = array_change_key_case(['foo' => 'cat', 'FOO' => 'dog'], CASE_UPPER); // $array_change_key_case = ['FOO' => 'dog'];

```



## array_chunk

```php
<?php

declare(strict_types = 1);

$array_chunk = array_chunk([2, 4, 5], 2);                              // $array_chunk = [0 => [0 => 2, 1 => 4], 1 => [0 => 5]];
$array_chunk = array_chunk(['foo' => 'cat', 'bar' => 'dog'], 1);       // $array_chunk = [0 => [0 => 'cat'], 1 => [0 => 'dog']];
$array_chunk = array_chunk(['foo' => 'cat', 'bar' => 'dog'], 1, true); // $array_chunk = [0 => ['foo' => 'cat'], ['bar' => 'dog']];

```



## array_column

```php
<?php

declare(strict_types = 1);

$array_column = array_column([[2], [4], [5]], 0);                                                               // $array_column = [0 => 2, 1 => 4, 2 => 5];
$array_column = array_column([['id' => 2135, 'name' => 'cat'], ['id' => 3245, 'name' => 'dog']], 'name');       // $array_column = [0 => 'cat', 1 => 'dog'];
$array_column = array_column([['id' => 2135, 'name' => 'cat'], ['id' => 3245, 'name' => 'dog']], 'name', 'id'); // $array_column = [2135 => 'cat', 3245 => 'dog'];
$array_column = array_column([['id' => 2135, 'name' => 'cat'], ['id' => 3245, 'name' => 'dog']], null);         // $array_column = [0 => ['id' => 2135, 'name' => 'cat'], 1 => ['id' => 3245, 'name' => 'dog']];
$array_column = array_column([['id' => 2135, 'name' => 'cat'], ['id' => 3245, 'name' => 'dog']], null, 'id');   // $array_column = [2135 => ['id' => 2135, 'name' => 'cat'], 3245 => ['id' => 3245, 'name' => 'dog']];

```



## array_combine

```php
<?php

declare(strict_types = 1);

$array_combine = array_combine([0, 1, 2], [2, 4, 5]);               // $array_combine = [0 => 2, 1 => 4, 2 => 5];
$array_combine = array_combine([0, 0, 0], [2, 4, 5]);               // $array_combine = [0 => 5];
$array_combine = array_combine(['foo', 'bar'], ['cat', 'dog']);     // $array_combine = ['foo' => 'cat', 'bar' => 'dog'];
$array_combine = array_combine(['foo', 'bar'], [['cat'], ['dog']]); // $array_combine = ['foo' => [0 => 'cat'], 'bar' => [0 => 'dog']];

```



## array_count_values

```php
<?php

declare(strict_types = 1);

$array_count_values = array_count_values(['foo', 'bar']);               // $array_count_values = ['foo' => 1, 'bar' => 1];
$array_count_values = array_count_values(['foo', 'bar', 'FOO', 'BAR']); // $array_count_values = ['foo' => 1, 'bar' => 1, 'FOO' => 1, 'BAR' => 1];
$array_count_values = array_count_values([0, 1, 2, '2']);               // $array_count_values = [0 => 1, 1 => 1, 2 => 2];

```



## array_diff_assoc

```php
<?php

declare(strict_types = 1);

$array_diff_assoc = array_diff_assoc([2, 4, 5], [2, 4, 5]);                                                                                   // $array_diff_assoc = [];
$array_diff_assoc = array_diff_assoc([2, 4, 5], [2]);                                                                                         // $array_diff_assoc = [1 => 4, 2 => 5];
$array_diff_assoc = array_diff_assoc([2, 4, 5], ['2', '04', '05']);                                                                           // $array_diff_assoc = [1 => 4, 2 => 5];
$array_diff_assoc = array_diff_assoc(['foo' => 'cat'], ['bar' => 'dog']);                                                                     // $array_diff_assoc = ['foo' => 'cat'];
$array_diff_assoc = array_diff_assoc(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird']); // $array_diff_assoc = [];

```



## array_diff_key

```php
<?php

declare(strict_types = 1);

$array_diff_key = array_diff_key([2, 4, 5], [2, 4, 5]);                                                                                   // $array_diff_key = [];
$array_diff_key = array_diff_key([2, 4, 5], [2]);                                                                                         // $array_diff_key = [1 => 4, 2 => 5];
$array_diff_key = array_diff_key([2, 4, 5], ['0' => 'cat', 'bar' => 'dog']);                                                              // $array_diff_key = [1 => 4, 2 => 5];
$array_diff_key = array_diff_key(['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'], ['foo' => 0, 'bar' => 1]);                            // $array_diff_key = ['baz' => 'bird'];
$array_diff_key = array_diff_key(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird']); // $array_diff_key = [];

```



## array_diff_uassoc

```php
<?php

declare(strict_types = 1);

function array_diff_uassoc_func($a, $b)
{
    return ($a <=> $b);
}

$array_diff_uassoc = array_diff_uassoc([2, 4, 5], [2, 4, 5], 'array_diff_uassoc_func');                                                                                   // $array_diff_uassoc = [];
$array_diff_uassoc = array_diff_uassoc([2, 4, 5], [2], 'array_diff_uassoc_func');                                                                                         // $array_diff_uassoc = [1 => 4, 2 => 5];
$array_diff_uassoc = array_diff_uassoc([2, 4, 5], ['0' => '2', 'bar' => 'dog'], 'array_diff_uassoc_func');                                                                // $array_diff_uassoc = [1 => 4, 2 => 5];
$array_diff_uassoc = array_diff_uassoc(['foo' => 'cat'], ['bar' => 'dog'], 'array_diff_uassoc_func');                                                                     // $array_diff_uassoc = ['foo' => 'cat'];
$array_diff_uassoc = array_diff_uassoc(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird'], 'array_diff_uassoc_func'); // $array_diff_uassoc = [];

```



## array_diff_ukey

```php
<?php

declare(strict_types = 1);

function array_diff_ukey_func($a, $b)
{
    return ($a <=> $b);
}

$array_diff_ukey = array_diff_ukey([2, 4, 5], [2, 4, 5], 'array_diff_ukey_func');                                                                                   // $array_diff_ukey = [];
$array_diff_ukey = array_diff_ukey([2, 4, 5], [2], 'array_diff_ukey_func');                                                                                         // $array_diff_ukey = [1 => 4, 2 => 5];
$array_diff_ukey = array_diff_ukey([2, 4, 5], ['0' => 'cat', 'bar' => 'dog'], 'array_diff_ukey_func');                                                              // $array_diff_ukey = [1 => 4, 2 => 5];
$array_diff_ukey = array_diff_ukey(['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'], ['foo' => 0, 'bar' => 1], 'array_diff_ukey_func');                            // $array_diff_ukey = ['baz' => 'bird'];
$array_diff_ukey = array_diff_ukey(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird'], 'array_diff_ukey_func'); // $array_diff_ukey = [];

```



## array_diff

```php
<?php

declare(strict_types = 1);

$array_diff = array_diff([2, 4, 5], [2, 4, 5]);    // $array_diff = [];
$array_diff = array_diff([2, 4, 5], ['2']);        // $array_diff = [1 => 4, 2 => 5];
$array_diff = array_diff([2, 4, 5, 2], [0, 1, 2]); // $array_diff = [1 => 4, 2 => 5];
$array_diff = array_diff([2, 4, 5], [0], [2]);     // $array_diff = [1 => 4, 2 => 5];

```



## array_fill_keys

```php
<?php

declare(strict_types = 1);

$array_fill_keys = array_fill_keys([2, 4, 5], 0);                                  // $array_fill_keys = [2 => 0, 4 => 0, 5 => 0];
$array_fill_keys = array_fill_keys(['foo', 'bar', 'baz'], 'cat');                  // $array_fill_keys = ['foo' => 'cat', 'bar' => 'cat', 'baz' => 'cat'];
$array_fill_keys = array_fill_keys(['foo', 'bar', 'baz'], ['cat', 'dog', 'bird']); // $array_fill_keys = ['foo' => [0 => 'cat', 1 => 'dog', 2 => 'bird'], 'bar' => [0 => 'cat', 1 => 'dog', 2 => 'bird'], 'baz' => [0 => 'cat', 1 => 'dog', 2 => 'bird']];

```



## array_fill

```php
<?php

declare(strict_types = 1);

$array_fill = array_fill(0, 3, 0);                   // $array_fill = [0 => 0, 1 => 0, 2 => 0];
$array_fill = array_fill(2, 3, 0);                   // $array_fill = [2 => 0, 3 => 0, 4 => 0];
$array_fill = array_fill(-2, 3, 0);                  // $array_fill = [-2 => 0, 0 => 0, 1 => 0];
$array_fill = array_fill(0, 3, array_fill(0, 3, 0)); // $array_fill = [0 => [0 => 0, 1 => 0, 2 => 0], 1 => [0 => 0, 1 => 0, 2 => 0], 2 => [0 => 0, 1 => 0, 2 => 0]];

```



## array_filter

```php
<?php

declare(strict_types = 1);

function array_filter_odd_func($value)
{
    return ($value & 1);
}

function array_filter_even_func($value)
{
    return !($value & 1);
}

function array_filter_both_func($value, $key)
{
    return ($value == 2 && $key == 0);
}

$array_filter = array_filter([2, 4, 5]);                                                  // $array_filter = [0 => 2, 1 => 4, 2 => 5];
$array_filter = array_filter(['foo', 0, 0.0, '0', '', []]);                               // $array_filter = [0 => 'foo'];
$array_filter = array_filter([2, 4, 5], 'array_filter_odd_func');                         // $array_filter = [2 => 5];
$array_filter = array_filter([2, 4, 5], 'array_filter_even_func');                        // $array_filter = [0 => 2, 1 => 4];
$array_filter = array_filter([2, 4, 5], 'array_filter_even_func', ARRAY_FILTER_USE_KEY);  // $array_filter = [0 => 2, 2 => 5];
$array_filter = array_filter([2, 4, 5], 'array_filter_both_func', ARRAY_FILTER_USE_BOTH); // $array_filter = [0 => 2];

```



## array_flip

```php
<?php

declare(strict_types = 1);

$array_flip = array_flip([2, 4, 5]);                                         // $array_flip = [2 => 0, 4 => 1, 5 => 2];
$array_flip = array_flip(['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird']); // $array_flip = ['cat' => 'foo', 'dog' => 'bar', 'bird' => 'baz'];
$array_flip = array_flip([2, 4, 5, '2', '4', '5']);                          // $array_flip = [2 => 3, 4 => 4, 5 => 5];

```



## array_intersect_assoc

```php
<?php

declare(strict_types = 1);

$array_intersect_assoc = array_intersect_assoc([2, 4, 5], [2, 4, 5]);                                                                                   // $array_intersect_assoc = [0 => 2, 1 => 4, 2 => 5];
$array_intersect_assoc = array_intersect_assoc([2, 4, 5], [2]);                                                                                         // $array_intersect_assoc = [0 => 2];
$array_intersect_assoc = array_intersect_assoc([2, 4, 5], ['2', '04', '05']);                                                                           // $array_intersect_assoc = [0 => 2];
$array_intersect_assoc = array_intersect_assoc(['foo' => 'cat'], ['bar' => 'dog']);                                                                     // $array_intersect_assoc = [];
$array_intersect_assoc = array_intersect_assoc(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird']); // $array_intersect_assoc = [];

```



## array_intersect_key

```php
<?php

declare(strict_types = 1);

$array_intersect_key = array_intersect_key([2, 4, 5], [2, 4, 5]);                                                                                   // $array_intersect_key = [0 => 2, 1 => 4, 2 => 5];
$array_intersect_key = array_intersect_key([2, 4, 5], [2]);                                                                                         // $array_intersect_key = [0 => 2];
$array_intersect_key = array_intersect_key([2, 4, 5], ['0' => 'cat', 'bar' => 'dog']);                                                              // $array_intersect_key = [0 => 2];
$array_intersect_key = array_intersect_key(['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'], ['foo' => 0, 'bar' => 1]);                            // $array_intersect_key = ['foo' => 'cat', 'bar' => 'dog'];
$array_intersect_key = array_intersect_key(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird']); // $array_intersect_key = [];

```



## array_intersect_uassoc

```php
<?php

declare(strict_types = 1);

function array_intersect_uassoc_func($a, $b)
{
    return ($a <=> $b);
}

$array_intersect_uassoc = array_intersect_uassoc([2, 4, 5], [2, 4, 5], 'array_intersect_uassoc_func');                                                                                   // $array_intersect_uassoc = [0 => 2, 1 => 4, 2 => 5];
$array_intersect_uassoc = array_intersect_uassoc([2, 4, 5], [2], 'array_intersect_uassoc_func');                                                                                         // $array_intersect_uassoc = [0 => 2];
$array_intersect_uassoc = array_intersect_uassoc([2, 4, 5], ['0' => '2', 'bar' => 'dog'], 'array_intersect_uassoc_func');                                                                // $array_intersect_uassoc = [0 => 2];
$array_intersect_uassoc = array_intersect_uassoc(['foo' => 'cat'], ['bar' => 'dog'], 'array_intersect_uassoc_func');                                                                     // $array_intersect_uassoc = [];
$array_intersect_uassoc = array_intersect_uassoc(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird'], 'array_intersect_uassoc_func'); // $array_intersect_uassoc = [];

```



## array_intersect_ukey

```php
<?php

declare(strict_types = 1);

function array_intersect_ukey_func($a, $b)
{
    return ($a <=> $b);
}

$array_intersect_ukey = array_intersect_ukey([2, 4, 5], [2, 4, 5], 'array_intersect_ukey_func');                                                                                   // $array_intersect_ukey = [0 => 2, 1 => 4, 2 => 5];
$array_intersect_ukey = array_intersect_ukey([2, 4, 5], [2], 'array_intersect_ukey_func');                                                                                         // $array_intersect_ukey = [0 => 2];
$array_intersect_ukey = array_intersect_ukey([2, 4, 5], ['0' => 'cat', 'bar' => 'dog'], 'array_intersect_ukey_func');                                                              // $array_intersect_ukey = [0 => 2];
$array_intersect_ukey = array_intersect_ukey(['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'], ['foo' => 0, 'bar' => 1], 'array_intersect_ukey_func');                            // $array_intersect_ukey = ['foo' => 'cat', 'bar' => 'dog'];
$array_intersect_ukey = array_intersect_ukey(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird'], 'array_intersect_ukey_func'); // $array_intersect_ukey = [];

```



## array_intersect

```php
<?php

declare(strict_types = 1);

$array_intersect = array_intersect([2, 4, 5], [2, 4, 5]);    // $array_intersect = [0 => 2, 1 => 4, 2 => 5];
$array_intersect = array_intersect([2, 4, 5], ['2']);        // $array_intersect = [0 => 2];
$array_intersect = array_intersect([2, 4, 5, 2], [0, 1, 2]); // $array_intersect = [0 => 2, 3 => 2];
$array_intersect = array_intersect([2, 4, 5], [0], [2]);     // $array_intersect = [];

```



## array_key_exists

```php
<?php

declare(strict_types = 1);

$array_key_exists = array_key_exists(0, [2, 4, 5]);                            // $array_key_exists = true;
$array_key_exists = array_key_exists('foo', [2, 4, 5]);                        // $array_key_exists = false;
$array_key_exists = array_key_exists('foo', ['foo' => 'cat', 'bar' => 'dog']); // $array_key_exists = true;

```



## array_key_first

```php
<?php

declare(strict_types = 1);

$array_key_first = array_key_first([2, 4, 5]);                        // $array_key_first = 0;
$array_key_first = array_key_first(['foo' => 'cat', 'bar' => 'dog']); // $array_key_first = 'foo';

```



## array_key_last

```php
<?php

declare(strict_types = 1);

$array_key_last = array_key_last([2, 4, 5]);                        // $array_key_last = 2;
$array_key_last = array_key_last(['foo' => 'cat', 'bar' => 'dog']); // $array_key_last = 'bar';

```



## array_keys

```php
<?php

declare(strict_types = 1);

$array_keys = array_keys([2, 4, 5]);                        // $array_keys = [0 => 0, 1 => 1, 2 => 2];
$array_keys = array_keys(['foo' => 'cat', 'bar' => 'dog']); // $array_keys = [0 => 'foo', 1 => 'bar'];
$array_keys = array_keys([2, 4, 5], '5');                   // $array_keys = [0 => 2];
$array_keys = array_keys([2, 4, 5], '5', true);             // $array_keys = [];

```



## array_map

```php
<?php

declare(strict_types = 1);

function array_map_cube_func($value)
{
    return pow($value, 3);
}

function array_map_sum_func($a, $b)
{
    return $a + $b;
}

$array_map = array_map('array_map_cube_func', [2, 4, 5]);                    // $array_map = [0 => 8, 1 => 64, 2 => 125];
$array_map = array_map('array_map_sum_func', [2, 4, 5], [2, 4, 5]);          // $array_map = [0 => 4, 1 => 8, 2 => 10];
$array_map = array_map('array_map_sum_func', [2, 4, 5], [2, 4, 5, 2, 4, 5]); // $array_map = [0 => 4, 1 => 8, 2 => 10, 3 => 2, 4 => 4, 5 => 5];
$array_map = array_map(null, ['foo' => 'cat']);                              // $array_map = ['foo' => 'cat'];
$array_map = array_map(null, [0], ['foo' => 'cat'], [1, 2]);                 // $array_map = [0 => [0 => 0, 1 => 'cat', 2 => 1], 1 => [0 => null, 1 => null, 2 => 2]];

```



## array_merge_recursive

```php
<?php

declare(strict_types = 1);

$array_merge_recursive = array_merge_recursive([2, 4, 5], [2, 4, 5]);                                                   // $array_merge_recursive = [0 => 2, 1 => 4, 2 => 5, 3 => 2, 4 => 4, 5 => 5];
$array_merge_recursive = array_merge_recursive([2, 4, 5], ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird']);           // $array_merge_recursive = [0 => 2, 1 => 4, 2 => 5, 'foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];
$array_merge_recursive = array_merge_recursive(['foo' => 'cat', 'bar' => 'dog'], ['foo' => 'dog', 'bar' => 'dog']);     // $array_merge_recursive = ['foo' => [0 => 'cat', 1 => 'dog'], 'bar' => [0 => 'dog', 1 => 'dog']];
$array_merge_recursive = array_merge_recursive(['foo' => 'cat', 'bar' => ['dog']], ['foo' => 'dog', 'bar' => 'cat']);   // $array_merge_recursive = ['foo' => [0 => 'cat', 1 => 'dog'], 'bar' => [0 => 'dog', 1 => 'cat']];
$array_merge_recursive = array_merge_recursive(['foo' => ['bar' => 'cat'], 2], [4, 'foo' => ['bar' => 'dog', 'bird']]); // $array_merge_recursive = ['foo' => ['bar' => [0 => 'cat', 1 => 'dog'], 0 => 'bird'], 0 => 2, 1 => 4];

```



## array_merge

```php
<?php

declare(strict_types = 1);

$array_merge = array_merge([2, 4, 5], [2, 4, 5]);                                                   // $array_merge = [0 => 2, 1 => 4, 2 => 5, 3 => 2, 4 => 4, 5 => 5];
$array_merge = array_merge([2, 4, 5], ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird']);           // $array_merge = [0 => 2, 1 => 4, 2 => 5, 'foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];
$array_merge = array_merge(['foo' => 'cat', 'bar' => 'dog'], ['foo' => 'dog', 'bar' => 'cat']);     // $array_merge = ['foo' => 'dog', 'bar' => 'cat'];
$array_merge = array_merge(['foo' => 'cat', 'bar' => ['dog']], ['foo' => 'dog', 'bar' => 'cat']);   // $array_merge = ['foo' => 'dog', 'bar' => 'cat'];
$array_merge = array_merge(['foo' => ['bar' => 'cat'], 2], [4, 'foo' => ['bar' => 'dog', 'bird']]); // $array_merge = ['foo' => ['bar' => 'dog', 0 => 'bird'], 0 => 2, 1 => 4];

```



## array_multisort

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5, 0, 1, 2];                                                                      // $foo = [0 => 0, 1 => 1, 2 => 2, 3 => 2, 4 => 4, 5 => 5];
$array_multisort = array_multisort($foo);                                                       // $array_multisort = true;

$foo = [2, 4, 5, 0, 1, 2];                                                                      // $foo = [0 => 0, 1 => 1, 2 => 2, 3 => 2, 4 => 4, 5 => 5];
$bar = [10, 100, 0, 100, 50, 0];                                                                // $bar = [0 => 100, 1 => 50, 2 => 0, 3 => 10, 4 => 100, 5 => 0];
$array_multisort = array_multisort($foo, $bar);                                                 // $array_multisort = true;

$foo = ['10', 11, 100, 100, 'a'];                                                               // $foo = [0 => '10', 1 => 'a', 2 => 11, 3 => 100, 4 => 100];
$bar = [1, 2, '2', 3, 1];                                                                       // $bar = [0 => 1, 1 => 1, 2 => 2, 3 => '2', 4 => 3];
$array_multisort = array_multisort($foo, SORT_REGULAR, $bar);                                   // $array_multisort = true;

$foo = ['foo' => '2cat', 'bar' => 'dog', 'baz' => '0bird'];                                     // $foo = ['bar' => 'dog', 'baz' => '0bird', 'foo' => '2cat'];
$bar = [2, 4, 5];                                                                               // $bar = [0 => 4, 1 => 5, 2 => 2];
$array_multisort = array_multisort($foo, SORT_NUMERIC, $bar);                                   // $array_multisort = true;

$foo = ['10', 11, 100, 100, 'a'];                                                               // $foo = [0 => '10', 1 => 100, 2 => 100, 3 => 11, 4 => 'a'];
$bar = [1, 2, '2', 3, 1];                                                                       // $bar = [0 => 1, 1 => '2', 2 => 3, 3 => 2, 4 => 1];
$array_multisort = array_multisort($foo, SORT_STRING, $bar);                                    // $array_multisort = true;

$foo = ['10', 11, 100, 100, 'a'];                                                               // $foo = [0 => '10', 1 => 100, 2 => 100, 3 => 11, 4 => 'a'];
$bar = [1, 2, '2', 3, 1];                                                                       // $bar = [0 => 1, 1 => '2', 2 => 3, 3 => 2, 4 => 1];
$array_multisort = array_multisort($foo, SORT_LOCALE_STRING, $bar);                             // $array_multisort = true;

$foo = ['10', 11, 100, 100, 'a'];                                                               // $foo = [0 => '10', 1 => 11, 2 => 100, 3 => 100, 4 => 'a'];
$bar = [1, 2, '2', 3, 1];                                                                       // $bar = [0 => 1, 1 => 2, 2 => '2', 3 => 3, 4 => 1];
$array_multisort = array_multisort($foo, SORT_NATURAL, $bar);                                   // $array_multisort = true;

$foo = ['a' => 'Cat1', 'b' => 'cat2', 'c' => 'Cat3', 'd' => 'cat20'];                           // $foo = ['a' => 'Cat1', 'c' => 'Cat3', 'b' => 'cat2', 'd' => 'cat20'];
$bar = [2, 4, 5, 0];                                                                            // $bar = [0 => 2, 1 => 5, 2 => 4, 3 => 0];
$array_multisort = array_multisort($foo, SORT_STRING, $bar);                                    // $array_multisort = true;

$foo = ['a' => 'Cat1', 'b' => 'cat2', 'c' => 'Cat3', 'd' => 'cat20'];                           // $foo = ['a' => 'Cat1', 'b' => 'cat2', 'd' => 'cat20', 'c' => 'Cat3'];
$bar = [2, 4, 5, 0];                                                                            // $bar = [0 => 2, 1 => 4, 2 => 0, 3 => 5];
$array_multisort = array_multisort($foo, SORT_STRING | SORT_FLAG_CASE, $bar);                   // $array_multisort = true;

$foo = ['a' => 'Cat1', 'b' => 'cat2', 'c' => 'Cat3', 'd' => 'cat20'];                           // $foo = ['a' => 'Cat1', 'b' => 'cat2', 'c' => 'Cat3', 'd' => 'cat20'];
$bar = [2, 4, 5, 0];                                                                            // $bar = [0 => 2, 1 => 4, 2 => 5, 3 => 0];
$array_multisort = array_multisort($foo, SORT_NATURAL | SORT_FLAG_CASE, $bar);                  // $array_multisort = true;

$foo = ['10', 11, 100, 100, 'a'];                                                               // $foo = [0 => '10', 1 => 100, 2 => 100, 3 => 11, 4 => 'a'];
$bar = [1, 2, '2', 3, 1];                                                                       // $bar = [0 => 1, 1 => 3, 2 => '2', 3 => 2, 4 => 1];
$array_multisort = array_multisort($foo, SORT_ASC, SORT_STRING, $bar, SORT_NUMERIC, SORT_DESC); // $array_multisort = true;

```



## array_pad

```php
<?php

declare(strict_types = 1);

$array_pad = array_pad([2, 4, 5], 5, 0);  // $array_pad = [0 => 2, 1 => 4, 2 => 5, 3 => 0, 4 => 0];
$array_pad = array_pad([2, 4, 5], -6, 1); // $array_pad = [0 => 1, 1 => 1, 2 => 1, 3 => 2, 4 => 4, 5 => 5];
$array_pad = array_pad([2, 4, 5], 2, 0);  // $array_pad = [0 => 2, 1 => 4, 2 => 5];

```



## array_pop

```php
<?php

declare(strict_types = 1);

$foo = [];                               // $foo = [];
$array_pop = array_pop($foo);            // $array_pop = null;

$foo = [2, 4, 5];                        // $foo = [0 => 2, 1 => 4];
$array_pop = array_pop($foo);            // $array_pop = 5;

$foo = ['foo' => 'cat', 'bar' => 'dog']; // $foo = ['foo' => 'cat', 'bar' => 'dog'];
$array_pop = array_pop($foo);            // $array_pop = 'dog';

```



## array_product

```php
<?php

declare(strict_types = 1);

$array_product = array_product([]);                               // $array_product = 1;
$array_product = array_product([2, 4, 5]);                        // $array_product = 40;
$array_product = array_product(['foo' => 'cat', 'bar' => 'dog']); // $array_product = 0;

```



## array_push

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5];                           // $foo = [0 => 2, 1 => 4, 2 => 5, 3 => []];
$array_push = array_push($foo, []);         // $array_push = 4;

$foo = ['foo' => 'cat', 'bar' => 'dog'];    // $foo = ['foo' => 'cat', 'bar' => 'dog', 0 => 'bird'];
$array_push = array_push($foo, 'bird');     // $array_push = 4;

$foo = ['foo' => 'cat', 'bar' => 'dog'];    // $foo = ['foo' => 'cat', 'bar' => 'dog', 0 => [], 1 => 'bird'];
$array_push = array_push($foo, [], 'bird'); // $array_push = 5;

```



## array_rand

```php
<?php

declare(strict_types = 1);

$array_rand = array_rand([2, 4, 5]);
$array_rand = array_rand(['foo' => 'cat', 'bar' => 'dog'], 1);
$array_rand = array_rand([2, 4, 5, 2, 4, 5], 2);

```



## array_reduce

```php
<?php

declare(strict_types = 1);

function array_reduce_func($a, $b)
{
    return $a + $b;
}

$array_reduce = array_reduce([2, 4, 5], 'array_reduce_func');     // $array_reduce = 11;
$array_reduce = array_reduce([2, 4, 5], 'array_reduce_func', 10); // $array_reduce = 21;
$array_reduce = array_reduce([], 'array_reduce_func', 10);        // $array_reduce = 10;

```



## array_replace_recursive

```php
<?php

declare(strict_types = 1);

$array_replace_recursive = array_replace_recursive([2, 4, 5], [0, 1, 2]);                                                                                                       // $array_replace_recursive = [0 => 0, 1 => 1, 2 => 2];
$array_replace_recursive = array_replace_recursive(['foo' => 'cat', 'bar' => 'dog'], ['foo' => 'bird']);                                                                        // $array_replace_recursive = ['foo' => 'bird', 'bar' => 'dog'];
$array_replace_recursive = array_replace_recursive(['foo' => 'cat', 'bar' => 'dog'], [0, 1, 2]);                                                                                // $array_replace_recursive = ['foo' => 'cat', 'bar' => 'dog', 0 => 0, 1 => 1, 2 => 2];
$array_replace_recursive = array_replace_recursive(['foo' => ['cat'], 'bar' => ['dog', 'bird']], ['foo' => ['horse'], 'bar' => ['dog']]);                                       // $array_replace_recursive = ['foo' => [0 => 'horse'], 'bar' => [0 => 'dog', 1 => 'bird']];
$array_replace_recursive = array_replace_recursive(['foo' => 'cat', 'bar' => ['dog', 'bird']], ['foo' => ['horse'], 'bar' => 'dog']);                                           // $array_replace_recursive = ['foo' => [0 => 'horse'], 'bar' => 'dog'];
$array_replace_recursive = array_replace_recursive(['foo' => ['cat'], 'bar' => ['dog', 'bird']], ['foo' => 'horse', 'bar' => ['dog']], ['foo' => ['horse'], 'bar' => ['dog']]); // $array_replace_recursive = ['foo' => [0 => 'horse'], 'bar' => [0 => 'dog', 1 => 'bird']];

```



## array_replace

```php
<?php

declare(strict_types = 1);

$array_replace = array_replace([2, 4, 5], [0, 1, 2]);                                                                                                       // $array_replace = [0 => 0, 1 => 1, 2 => 2];
$array_replace = array_replace(['foo' => 'cat', 'bar' => 'dog'], ['foo' => 'bird']);                                                                        // $array_replace = ['foo' => 'bird', 'bar' => 'dog'];
$array_replace = array_replace(['foo' => 'cat', 'bar' => 'dog'], [0, 1, 2]);                                                                                // $array_replace = ['foo' => 'cat', 'bar' => 'dog', 0 => 0, 1 => 1, 2 => 2];
$array_replace = array_replace(['foo' => ['cat'], 'bar' => ['dog', 'bird']], ['foo' => ['horse'], 'bar' => ['dog']]);                                       // $array_replace = ['foo' => [0 => 'horse'], 'bar' => [0 => 'dog']];
$array_replace = array_replace(['foo' => 'cat', 'bar' => ['dog', 'bird']], ['foo' => ['horse'], 'bar' => 'dog']);                                           // $array_replace = ['foo' => [0 => 'horse'], 'bar' => 'dog'];
$array_replace = array_replace(['foo' => ['cat'], 'bar' => ['dog', 'bird']], ['foo' => 'horse', 'bar' => ['dog']], ['foo' => ['horse'], 'bar' => ['dog']]); // $array_replace = ['foo' => [0 => 'horse'], 'bar' => [0 => 'dog']];

```



## array_reverse

```php
<?php

declare(strict_types = 1);

$array_reverse = array_reverse([2, 4, 5]);                        // $array_reverse = [0 => 5, 1 => 4, 2 => 2];
$array_reverse = array_reverse([2, 4, 5], true);                  // $array_reverse = [2 => 5, 1 => 4, 0 => 2];
$array_reverse = array_reverse(['foo' => 'cat', 'bar' => 'dog']); // $array_reverse = ['bar' => 'dog', 'foo' => 'cat'];

```



## array_search

```php
<?php

declare(strict_types = 1);

$array_search = array_search(0, [2, 4, 5]);                            // $array_search = false;
$array_search = array_search(5, [2, 4, 5]);                            // $array_search = 2;
$array_search = array_search('cat', ['foo' => 'cat', 'bar' => 'dog']); // $array_search = 'foo';
$array_search = array_search('CAT', ['foo' => 'cat', 'bar' => 'dog']); // $array_search = false;
$array_search = array_search('5', [2, 4, 5]);                          // $array_search = 2;
$array_search = array_search('5', [2, 4, 5], true);                    // $array_search = false;
$array_search = array_search(5, [2, 4, 5, 5, 5, 5]);                   // $array_search = 2;

```



## array_shift

```php
<?php

declare(strict_types = 1);

$foo = [];                               // $foo = [];
$array_shift = array_shift($foo);        // $array_shift = null;

$foo = [2, 4, 5];                        // $foo = [0 => 4, 1 => 5];
$array_shift = array_shift($foo);        // $array_shift = 2;

$foo = ['foo' => 'cat', 'bar' => 'dog']; // $foo = ['bar' => 'dog'];
$array_shift = array_shift($foo);        // $array_shift = 'cat';

```



## array_slice

```php
<?php

declare(strict_types = 1);

$array_slice = array_slice(['a', 'b', 'c', 'd', 'e'], 2);            // $array_slice = [0 => 'c', 1 => 'd', 2 => 'e'];
$array_slice = array_slice(['a', 'b', 'c', 'd', 'e'], 2, 0);         // $array_slice = [];
$array_slice = array_slice(['a', 'b', 'c', 'd', 'e'], 2, 1);         // $array_slice = [0 => 'c'];
$array_slice = array_slice(['a', 'b', 'c', 'd', 'e'], 2, -1);        // $array_slice = [0 => 'c', 1 => 'd'];
$array_slice = array_slice(['a', 'b', 'c', 'd', 'e'], -2);           // $array_slice = [0 => 'd', 1 => 'e'];
$array_slice = array_slice(['a', 'b', 'c', 'd', 'e'], -2, 1);        // $array_slice = [0 => 'd'];
$array_slice = array_slice(['a', 'b', 'c', 'd', 'e'], -2, -1);       // $array_slice = [0 => 'd'];
$array_slice = array_slice(['a', 'b', 'c', 'd', 'e'], -2, -1, true); // $array_slice = [3 => 'd'];

```



## array_splice

```php
<?php

declare(strict_types = 1);

$foo = ['a', 'b', 'c', 'd', 'e'];                            // $foo = [0 => 'a', 1 => 'b'];
$array_splice = array_splice($foo, 2);                       // $array_splice = [0 => 'c', 1 => 'd', 2 => 'e'];

$foo = ['a', 'b', 'c', 'd', 'e'];                            // $foo = [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 4 => 'e'];
$array_splice = array_splice($foo, 2, 0);                    // $array_splice = [];

$foo = ['a', 'b', 'c', 'd', 'e'];                            // $foo = [0 => 'a', 1 => 'b', 2 => 'd', 3 => 'e'];
$array_splice = array_splice($foo, 2, 1);                    // $array_splice = [0 => 'c'];

$foo = ['a', 'b', 'c', 'd', 'e'];                            // $foo = [0 => 'a', 1 => 'b', 2 => 'e'];
$array_splice = array_splice($foo, 2, -1);                   // $array_splice = [0 => 'c', 1 => 'd'];

$foo = ['a', 'b', 'c', 'd', 'e'];                            // $foo = [0 => 'a', 1 => 'b', 2 => 'c'];
$array_splice = array_splice($foo, -2);                      // $array_splice = [0 => 'd', 1 => 'e'];

$foo = ['a', 'b', 'c', 'd', 'e'];                            // $foo = [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'e'];
$array_splice = array_splice($foo, -2, 1);                   // $array_splice = [0 => 'd'];

$foo = ['a', 'b', 'c', 'd', 'e'];                            // $foo = [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'e'];
$array_splice = array_splice($foo, -2, -1);                  // $array_splice = [0 => 'd'];

$foo = ['a', 'b', 'c', 'd', 'e'];                            // $foo = [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'x', 4 => 'e'];
$array_splice = array_splice($foo, -2, -1, 'x');             // $array_splice = [0 => 'd'];

$foo = ['a', 'b', 'c', 'd', 'e'];                            // $foo = [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'x', 4 => 'e'];
$array_splice = array_splice($foo, -2, -1, ['x']);           // $array_splice = [0 => 'd'];

$foo = ['a', 'b', 'c', 'd', 'e'];                            // $foo = [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'x', 4 => 'y', 5 => 'z', 6 => 'e'];
$array_splice = array_splice($foo, -2, -1, ['x', 'y', 'z']); // $array_splice = [0 => 'd'];

```



## array_sum

```php
<?php

declare(strict_types = 1);

$array_sum = array_sum([]);              // $array_sum = 0;
$array_sum = array_sum([2, 4, 5]);       // $array_sum = 11;
$array_sum = array_sum([1.2, 2.3, 3.4]); // $array_sum = 6.9;

```



## array_udiff_assoc

```php
function array_udiff_assoc_func($a, $b)
{
    return ($a <=> $b);
}

$array_udiff_assoc = array_udiff_assoc([2, 4, 5], [2, 4, 5], 'array_udiff_assoc_func');                                                                                   // $array_udiff_assoc = [];
$array_udiff_assoc = array_udiff_assoc([2, 4, 5], [2], 'array_udiff_assoc_func');                                                                                         // $array_udiff_assoc = [1 => 4, 2 => 5];
$array_udiff_assoc = array_udiff_assoc([2, 4, 5], ['2', '04', '05'], 'array_udiff_assoc_func');                                                                           // $array_udiff_assoc = [];
$array_udiff_assoc = array_udiff_assoc(['foo' => 'cat'], ['bar' => 'dog'], 'array_udiff_assoc_func');                                                                     // $array_udiff_assoc = ['foo' => 'cat'];
$array_udiff_assoc = array_udiff_assoc(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird'], 'array_udiff_assoc_func'); // $array_udiff_assoc = [];
```



## array_udiff_uassoc

```php
<?php

declare(strict_types = 1);

function array_udiff_uassoc_value_func($a, $b)
{
    return ($a <=> $b);
}

function array_udiff_uassoc_key_func($a, $b)
{
    return ($a <=> $b);
}

$array_udiff_uassoc = array_udiff_uassoc([2, 4, 5], [2, 4, 5], 'array_udiff_uassoc_value_func', 'array_udiff_uassoc_key_func');                                                                                   // $array_udiff_uassoc = [];
$array_udiff_uassoc = array_udiff_uassoc([2, 4, 5], [2], 'array_udiff_uassoc_value_func', 'array_udiff_uassoc_key_func');                                                                                         // $array_udiff_uassoc = [1 => 4, 2 => 5];
$array_udiff_uassoc = array_udiff_uassoc([2, 4, 5], ['2', '04', '05'], 'array_udiff_uassoc_value_func', 'array_udiff_uassoc_key_func');                                                                           // $array_udiff_uassoc = [];
$array_udiff_uassoc = array_udiff_uassoc(['foo' => 'cat'], ['bar' => 'dog'], 'array_udiff_uassoc_value_func', 'array_udiff_uassoc_key_func');                                                                     // $array_udiff_uassoc = ['foo' => 'cat'];
$array_udiff_uassoc = array_udiff_uassoc(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird'], 'array_udiff_uassoc_value_func', 'array_udiff_uassoc_key_func'); // $array_udiff_uassoc = [];

```



## array_udiff

```php
<?php

declare(strict_types = 1);

function array_udiff_func($a, $b)
{
    return ($a <=> $b);
}

$array_udiff = array_udiff([2, 4, 5], [2, 4, 5], 'array_udiff_func');                                                                                   // $array_udiff = [];
$array_udiff = array_udiff([2, 4, 5], ['2'], 'array_udiff_func');                                                                                       // $array_udiff = [1 => 4, 2 => 5];
$array_udiff = array_udiff([2, 4, 5], ['2', '04', '05'], 'array_udiff_func');                                                                           // $array_udiff = [];
$array_udiff = array_udiff(['foo' => 'cat'], ['bar' => 'dog'], 'array_udiff_func');                                                                     // $array_udiff = ['foo' => 'cat'];
$array_udiff = array_udiff(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird'], 'array_udiff_func'); // $array_udiff = [];

```



## array_uintersect_assoc

```php
<?php

declare(strict_types = 1);

function array_uintersect_assoc_func($a, $b)
{
    return ($a <=> $b);
}

$array_uintersect_assoc = array_uintersect_assoc([2, 4, 5], [2, 4, 5], 'array_uintersect_assoc_func');                                                                       // $array_uintersect_assoc = [0 => 2, 1 => 4, 2 => 5];
$array_uintersect_assoc = array_uintersect_assoc([2, 4, 5], [2], 'array_uintersect_assoc_func');                                                                             // $array_uintersect_assoc = [0 => 2];
$array_uintersect_assoc = array_uintersect_assoc([2, 4, 5], ['2', '04', '05'], 'array_uintersect_assoc_func');                                                               // $array_uintersect_assoc = [0 => 2, 1 => 4, 2 => 5];
$array_uintersect_assoc = array_uintersect_assoc(['foo' => 'cat'], ['bar' => 'dog'], 'array_uintersect_assoc_func');                                                         // $array_uintersect_assoc = [];
$array_uintersect_assoc = array_uintersect_assoc(['a' => 'cat', 'b' => 'dog'], ['b' => 'dog', 'c' => 'bird'], ['a' => 'cat', 'c' => 'bird'], 'array_uintersect_assoc_func'); // $array_uintersect_assoc = [];

```



## array_uintersect_uassoc

```php
<?php

declare(strict_types = 1);

function array_uintersect_uassoc_value_func($a, $b)
{
    return ($a <=> $b);
}

function array_uintersect_uassoc_key_func($a, $b)
{
    return ($a <=> $b);
}

$array_uintersect_uassoc = array_uintersect_uassoc([2, 4, 5], [2, 4, 5], 'array_uintersect_uassoc_value_func', 'array_uintersect_uassoc_key_func');                                                                                   // $array_uintersect_uassoc = [0 => 2, 1 => 4, 2 => 5];
$array_uintersect_uassoc = array_uintersect_uassoc([2, 4, 5], [2], 'array_uintersect_uassoc_value_func', 'array_uintersect_uassoc_key_func');                                                                                         // $array_uintersect_uassoc = [0 => 2];
$array_uintersect_uassoc = array_uintersect_uassoc([2, 4, 5], ['2', '04', '05'], 'array_uintersect_uassoc_value_func', 'array_uintersect_uassoc_key_func');                                                                           // $array_uintersect_uassoc = [0 => 2, 1 => 4, 2 => 5];
$array_uintersect_uassoc = array_uintersect_uassoc(['foo' => 'cat'], ['bar' => 'dog'], 'array_uintersect_uassoc_value_func', 'array_uintersect_uassoc_key_func');                                                                     // $array_uintersect_uassoc = [];
$array_uintersect_uassoc = array_uintersect_uassoc(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird'], 'array_uintersect_uassoc_value_func', 'array_uintersect_uassoc_key_func'); // $array_uintersect_uassoc = [];

```



## array_uintersect

```php
<?php

declare(strict_types = 1);

function array_uintersect_func($a, $b)
{
    return ($a <=> $b);
}

$array_uintersect = array_uintersect([2, 4, 5], [2, 4, 5], 'array_uintersect_func');                                                                                   // $array_uintersect = [0 => 2, 1 => 4, 2 => 5];
$array_uintersect = array_uintersect([2, 4, 5], [2], 'array_uintersect_func');                                                                                         // $array_uintersect = [0 => 2];
$array_uintersect = array_uintersect([2, 4, 5], ['2', '04', '05'], 'array_uintersect_func');                                                                           // $array_uintersect = [0 => 2, 1 => 4, 2 => 5];
$array_uintersect = array_uintersect(['foo' => 'cat'], ['bar' => 'dog'], 'array_uintersect_func');                                                                     // $array_uintersect = [];
$array_uintersect = array_uintersect(['foo' => 'cat', 'bar' => 'dog'], ['bar' => 'dog', 'baz' => 'bird'], ['foo' => 'cat', 'baz' => 'bird'], 'array_uintersect_func'); // $array_uintersect = [];

```



## array_unique

```php
<?php

declare(strict_types = 1);

$array_unique = array_unique([2, 4, 5, 2, 4, 5]);                                                                  // $array_unique = [0 => 2, 1 => 4, 2 => 5];
$array_unique = array_unique([2, 4, 5, '2', '4', 5]);                                                              // $array_unique = [0 => 2, 1 => 4, 2 => 5];
$array_unique = array_unique(['foo' => '2cat', 'bar' => '2dog', 'baz' => '2bird', 'qux' => '2cat'], SORT_REGULAR); // $array_unique = ['foo' => '2cat', 'bar' => '2dog', 'baz' => '2bird'];
$array_unique = array_unique(['foo' => '2cat', 'bar' => '2dog', 'baz' => '2bird', 'qux' => '2cat'], SORT_NUMERIC); // $array_unique = ['foo' => '2cat'];
$array_unique = array_unique([2, 4, 5, '02', '04', '05'], SORT_STRING);                                            // $array_unique = [0 => 2, 1 => 4, 2 => 5, 3 => '02', 4 => '04', 5 => '05'];
$array_unique = array_unique([2, 4, 5, '02', '04', '05'], SORT_LOCALE_STRING);                                     // $array_unique = [0 => 2, 1 => 4, 2 => 5, 3 => '02', 4 => '04', 5 => '05'];

```



## array_unshift

```php
<?php

declare(strict_types = 1);

$foo = [];                                                              // $foo = [];
$array_unshift = array_unshift($foo);                                   // $array_unshift = 0;

$foo = [2, 4, 5];                                                       // $foo = [0 => 2, 1 => 2, 2 => 4, 3 => 5];
$array_unique = array_unshift($foo, 2);                                 // $array_unshift = 4;

$foo = [2, 4, 5];                                                       // $foo = [0 => 2, 1 => 4, 2 => 5, 3 => 2, 4 => 4, 5 => 5];
$array_unique = array_unshift($foo, 2, 4, 5);                           // $array_unshift = 6;

$foo = [2, 4, 5];                                                       // $foo = [0 => ['foo' => 'cat', 'bar' => 'dog'], 1 => 2, 2 => 4, 3 => 5];
$array_unshift = array_unshift($foo, ['foo' => 'cat', 'bar' => 'dog']); // $array_unshift = 4;

```



## array_values

```php
<?php

declare(strict_types = 1);

$array_values = array_values([2, 4, 5]);                        // $array_values = [0 => 2, 1 => 4, 2 => 5];
$array_values = array_values(['foo' => 'cat', 'bar' => 'dog']); // $array_values = [0 => 'cat', 1 => 'dog'];

```



## array_walk_recursive

```php
<?php

declare(strict_types = 1);

function array_walk_recursive_cube_func(&$value, $key)
{
    $value = pow($value, 3);
}

function array_walk_recursive_sum_func(&$value, $key, $data)
{
    $value += $data;
}

$foo = [2, 4, 5, [2, 4, 5]];                                                            // $foo = [0 => 8, 1 => 64, 2 => 125, 3 => [0 => 8, 1 => 64, 2 => 125]];
$array_walk_recursive = array_walk_recursive($foo, 'array_walk_recursive_cube_func');   // $array_walk_recursive = true;

$foo = [2, 4, 5, [2, 4, 5]];                                                            // $foo = [0 => 3, 1 => 5, 2 => 6, 3 => [0 => 3, 1 => 5, 2 => 6]];
$array_walk_recursive = array_walk_recursive($foo, 'array_walk_recursive_sum_func', 1); // $array_walk_recursive = true;

```



## array_walk

```php
<?php

declare(strict_types = 1);

function array_walk_cube_func(&$value, $key)
{
    $value = pow($value, 3);
}

function array_walk_sum_func(&$value, $key, $data)
{
    $value += $data;
}

$foo = [2, 4, 5];                                         // $foo = [0 => 8, 1 => 64, 2 => 125];
$array_walk = array_walk($foo, 'array_walk_cube_func');   // $array_walk = true;

$foo = [2, 4, 5];                                         // $foo = [0 => 3, 1 => 5, 2 => 6];
$array_walk = array_walk($foo, 'array_walk_sum_func', 1); // $array_walk = true;

```



## array

```php
<?php

declare(strict_types = 1);

$array = array(2, 4, 5);                        // $array = [0 => 2, 1 => 4, 2 => 5];
$array = array('foo' => 'cat', 'bar' => 'dog'); // $array = ['foo' => 'cat', 'bar' => 'dog'];
$array = array('foo' => 'cat', 2, 4, 5);        // $array = ['foo' => 'cat', 0 => 2, 1 => 4, 2 => 5]];

```



## arsort

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5, 0, 1, 2];                                                     // $foo = [2 => 5, 1 => 4, 0 => 2, 5 => 2, 4 => 1, 3 => 0];
$arsort = arsort($foo);                                                        // $arsort = true;

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];                      // $foo = ['bar' => 'dog', 'foo' => 'cat', 'baz' => 'bird'];
$arsort = arsort($foo);                                                        // $arsort = true;

$foo = ['2', 4, '5', 0, '1', 2];                                               // $foo = [2 => '5', 1 => 4, 0 => '2', 5 => 2, 4 => '1', 3 => 0];
$arsort = arsort($foo, SORT_REGULAR);                                          // $arsort = true;

$foo = ['foo' => '2cat', 'bar' => '1dog', 'baz' => '0bird'];                   // $foo = ['foo' => '2cat', 'bar' => '1dog', 'baz' => '0bird'];
$arsort = arsort($foo, SORT_NUMERIC);                                          // $arsort = true;

$foo = [20, 4, 5, 0, 1, 22];                                                   // $foo = [2 => 5, 1 => 4, 5 => 22, 0 => 20, 4 => 1, 3 => 0];
$arsort = arsort($foo, SORT_STRING);                                           // $arsort = true;

$foo = [20, 4, 5, 0, 1, 22];                                                   // $foo = [2 => 5, 1 => 4, 5 => 22, 0 => 20, 4 => 1, 3 => 0];
$arsort = arsort($foo, SORT_LOCALE_STRING);                                    // $arsort = true;

$foo = ['foo' => 'cat1', 'bar' => 'cat12', 'baz' => 'cat10', 'qux' => 'cat2']; // $foo = ['bar' => 'cat12', 'baz' => 'cat10', 'qux' => 'cat2', 'foo' => 'cat1'];
$arsort = arsort($foo, SORT_NATURAL);                                          // $arsort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];  // $foo = ['qux' => 'cat20', 'bar' => 'cat2', 'baz' => 'Cat3', 'foo' => 'Cat1'];
$arsort = arsort($foo, SORT_STRING);                                           // $arsort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];  // $foo = ['baz' => 'Cat3', 'qux' => 'cat20', 'bar' => 'cat2', 'foo' => 'Cat1'];
$arsort = arsort($foo, SORT_STRING | SORT_FLAG_CASE);                          // $arsort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];  // $foo = ['qux' => 'cat20', 'baz' => 'Cat3', 'bar' => 'cat2', 'foo' => 'Cat1'];
$arsort = arsort($foo, SORT_NATURAL | SORT_FLAG_CASE);                         // $arsort = true;

```



## asort

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5, 0, 1, 2];                                                     // $foo = [3 => 0, 4 => 1, 0 => 2, 5 => 2, 1 => 4, 2 => 5];
$asort = asort($foo);                                                          // $asort = true;

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];                      // $foo = ['baz' => 'bird', 'foo' => 'cat', 'bar' => 'dog'];
$asort = asort($foo);                                                          // $asort = true;

$foo = ['2', 4, '5', 0, '1', 2];                                               // $foo = [3 => 0, 4 => '1', 0 => '2', 5 => 2, 1 => 4, 2 => '5'];
$asort = asort($foo, SORT_REGULAR);                                            // $asort = true;

$foo = ['foo' => '2cat', 'bar' => '1dog', 'baz' => '0bird'];                   // $foo = ['baz' => '0bird', 'bar' => '1dog', 'foo' => '2cat'];
$asort = asort($foo, SORT_NUMERIC);                                            // $asort = true;

$foo = [20, 4, 5, 0, 1, 22];                                                   // $foo = [3 => 0, 4 => 1, 0 => 20, 5 => 22, 1 => 4, 2 => 5];
$asort = asort($foo, SORT_STRING);                                             // $asort = true;

$foo = [20, 4, 5, 0, 1, 22];                                                   // $foo = [3 => 0, 4 => 1, 0 => 20, 5 => 22, 1 => 4, 2 => 5];
$asort = asort($foo, SORT_LOCALE_STRING);                                      // $asort = true;

$foo = ['foo' => 'cat1', 'bar' => 'cat12', 'baz' => 'cat10', 'qux' => 'cat2']; // $foo = ['foo' => 'cat1', 'qux' => 'cat2', 'baz' => 'cat10', 'bar' => 'cat12'];
$asort = asort($foo, SORT_NATURAL);                                            // $asort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];  // $foo = ['foo' => 'Cat1', 'baz' => 'Cat3', 'bar' => 'cat2', 'qux' => 'cat20'];
$asort = asort($foo, SORT_STRING);                                             // $asort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];  // $foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'qux' => 'cat20', 'baz' => 'Cat3'];
$asort = asort($foo, SORT_STRING | SORT_FLAG_CASE);                            // $asort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];  // $foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];
$asort = asort($foo, SORT_NATURAL | SORT_FLAG_CASE);                           // $asort = true;

```



## compact

```php
<?php

declare(strict_types = 1);

$foo = 'cat';
$bar = 'dog';
$compact = compact('foo', 'bar');               // $compant = ['foo' => 'cat', 'bar' => 'dog'];

$foo = 'cat';
$bar = 'dog';
$baz = 'baz';
$qux = ['cat', 'dog', 'baz'];
$compact = compact('foo', 'bar', 'baz', 'qux'); // $compact = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'baz', 'qux' => [0 => 'cat', 1 => 'dog', 2 => 'baz']];

```



## count

```php
<?php

declare(strict_types = 1);

$count = count([2, 4, 5]);                                                      // $count = 3;
$count = count(['foo' => 'cat', 'bar' => 'dog']);                               // $count = 2;
$count = count([[2, 4, 5], ['foo' => 'cat', 'bar' => 'dog']]);                  // $count = 2;
$count = count([[2, 4, 5], ['foo' => 'cat', 'bar' => 'dog']], COUNT_RECURSIVE); // $count = 7;

```



## current

```php
<?php

declare(strict_types = 1);

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];

$current = current($foo); // $current = 'cat';

$next = next($foo);       // $next = 'dog';
$current = current($foo); // $current = 'dog';

$next = next($foo);       // $next = 'bird';
$current = current($foo); // $current = 'bird';

```



## end

```php
<?php

declare(strict_types = 1);

$foo = ['foo' => 'cat', 'bar' => 'dog', 'qux' => 'bird'];

$current = current($foo); // $current = 'cat';

$end = end($foo);         // $end = 'bird';
$current = current($foo); // $current = 'bird';

$prev = prev($foo);       // $prev = 'dog';
$current = current($foo); // $current = 'dog';

$end = end($foo);         // $end = 'bird';
$current = current($foo); // $current = 'bird';

```



## extract

```php
<?php

declare(strict_types = 1);

$array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];                    // $array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];
$extract = extract($array);                                                    // $extract = 3; $foo = 'cat'; $bar = 'dog'; $baz = 'bird';

$foo = 'foo';
$bar = 'bar';
$baz = 'baz';
$array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];                    // $array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];
$extract = extract($array, EXTR_OVERWRITE);                                    // $extract = 3; $foo = 'cat'; $bar = 'dog'; $baz = 'bird';

$foo = 'foo';
$bar = 'bar';
$baz = 'baz';
$array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];                    // $array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];
$extract = extract($array, EXTR_SKIP);                                         // $extract = 0; $foo = 'foo'; $bar = 'bar'; $baz = 'baz';

$foo = 'foo';
$bar = 'bar';
$baz = 'baz';
$array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird', 'qux' => 'horse'];  // $array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird', 'qux' => 'horse'];
$extract = extract($array, EXTR_PREFIX_SAME, 'prefix');                        // $extract = 4; $foo = 'foo'; $bar = 'bar'; $baz = 'baz'; $prefix_foo = 'cat'; $prefix_bar = 'dog'; $prefix_baz = 'bird'; $qux = 'horse';

$foo = 'foo';
$bar = 'bar';
$baz = 'baz';
$array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird', 'qux' => 'horse'];  // $array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird', 'qux' => 'horse'];
$extract = extract($array, EXTR_PREFIX_ALL, 'prefix');                         // $extract = 4; $foo = 'foo'; $bar = 'bar'; $baz = 'baz'; $prefix_foo = 'cat'; $prefix_bar = 'dog'; $prefix_baz = 'bird'; $prefix_qux = 'horse';

$foo = 'foo';
$bar = 'bar';
$baz = 'baz';
$array = [0 => 'cat', 1 => 'dog', 'baz' => 'bird'];                            // $array = [0 => 'cat', 1 => 'dog', 'baz' => 'bird'];
$extract = extract($array, EXTR_PREFIX_INVALID, 'prefix');                     // $extract = 3; $foo = 'foo'; $bar = 'bar'; $baz = 'baz'; $prefix_0 = 'cat'; $prefix_1 = 'dog'; $baz = 'bird';

$foo = 'foo';
$bar = 'bar';
$baz = 'baz';
$array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird', 'test' => 'horse']; // $array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird', 'test' => 'horse'];
$extract = extract($array, EXTR_IF_EXISTS);                                    // $extract = 3; $foo = 'cat'; $bar = 'dog'; $baz = 'bird';

$foo = 'foo';
$bar = 'bar';
$baz = 'baz';
$array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird', 'test' => 'horse']; // $array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird', 'test' => 'horse'];
$extract = extract($array, EXTR_PREFIX_IF_EXISTS, 'prefix');                   // $extract = 3; $foo = 'cat'; $bar = 'dog'; $baz = 'bird'; $prefix_foo = 'cat'; $prefix_bar = 'dog'; $prefix_baz = 'bird';

$foo = 'foo';
$bar = 'bar';
$baz = 'baz';
$array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];                    // $array = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];
$extract = extract($array, EXTR_PREFIX_ALL | EXTR_REFS, 'prefix');             // $extract = 4; $foo = 'cat'; $bar = 'dog'; $baz = 'bird'; $prefix_foo = 'cat'; $prefix_bar = 'dog'; $prefix_baz = 'bird';
list($prefix_foo, $prefix_bar, $prefix_baz) = [1, 11, 111];                    // $array = ['foo' => 1, 'bar' => 11, 'baz' => 111];

```



## in_array

```php
<?php

declare(strict_types = 1);

$in_array = in_array(5, [2, 4, 5]);                                             // $in_array = true;
$in_array = in_array(5, [2, 4, [5]]);                                           // $in_array = false;
$in_array = in_array('cat', ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird']); // $in_array = true;
$in_array = in_array('CAT', ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird']); // $in_array = false;
$in_array = in_array('5', [2, 4, 5]);                                           // $in_array = true;
$in_array = in_array('5', [2, 4, 5], true);                                     // $in_array = false;

```



## key_exists

```php
<?php

declare(strict_types = 1);

$key_exists = key_exists(0, [2, 4, 5]);                                             // $key_exists = true;
$key_exists = key_exists('foo', [2, 4, 5]);                                         // $key_exists = false;
$key_exists = key_exists('foo', ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird']); // $key_exists = true;

```



## key

```php
<?php

declare(strict_types = 1);

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];

$key = key($foo);   // $key = 'foo';

$next = next($foo); // $next = 'dog';
$key = key($foo);   // $key = 'bar';

$next = next($foo); // $next = 'bird';
$key = key($foo);   // $key = 'baz';

```



## krsort

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5, 0, 1, 2];                                                     // $foo = [5 => 2, 4 => 1, 3 => 0, 2 => 5, 1 => 4, 0 => 2];
$krsort = krsort($foo);                                                        // $krsort = true;

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];                      // $foo = ['foo' => 'cat', 'baz' => 'bird', 'bar' => 'dog'];
$krsort = krsort($foo);                                                        // $krsort = true;

$foo = ['2', 4, '5', 0, '1', 2];                                               // $foo = [5 => 2, 4 => '1', 3 => 0, 2 => '5', 1 => 4, 0 => '2'];
$krsort = krsort($foo, SORT_REGULAR);                                          // $krsort = true;

$foo = ['2cat' => 'foo', '1dog' => 'bar', '0bird' => 'baz'];                   // $foo = ['2cat' => 'foo', '1dog' => 'bar', '0bird' => 'baz'];
$krsort = krsort($foo, SORT_NUMERIC);                                          // $krsort = true;

$foo = ['cat1' => 'foo', 'cat12' => 'bar', 'cat10' => 'baz', 'cat2' => 'qux']; // $foo = ['cat2' => 'qux', 'cat12' => 'bar', 'cat10' => 'baz', 'cat1' => 'foo'];
$krsort = krsort($foo, SORT_STRING);                                           // $krsort = true;

$foo = ['cat1' => 'foo', 'cat12' => 'bar', 'cat10' => 'baz', 'cat2' => 'qux']; // $foo = ['cat2' => 'qux', 'cat12' => 'bar', 'cat10' => 'baz', 'cat1' => 'foo'];
$krsort = krsort($foo, SORT_LOCALE_STRING);                                    // $krsort = true;

$foo = ['cat1' => 'foo', 'cat12' => 'bar', 'cat10' => 'baz', 'cat2' => 'qux']; // $foo = ['cat12' => 'bar', 'cat10' => 'baz', 'cat2' => 'qux', 'cat1' => 'foo'];
$krsort = krsort($foo, SORT_NATURAL);                                          // $krsort = true;

$foo = ['Cat1' => 'foo', 'cat2' => 'bar', 'Cat3' => 'baz', 'cat20' => 'qux'];  // $foo = ['cat20' => 'qux', 'cat2' => 'bar', 'Cat3' => 'baz', 'Cat1' => 'foo'];
$krsort = krsort($foo, SORT_STRING);                                           // $krsort = true;

$foo = ['Cat1' => 'foo', 'cat2' => 'bar', 'Cat3' => 'baz', 'cat20' => 'qux'];  // $foo = ['Cat3' => 'baz', 'cat20' => 'qux', 'cat2' => 'bar', 'Cat1' => 'foo'];
$krsort = krsort($foo, SORT_STRING | SORT_FLAG_CASE);                          // $krsort = true;

$foo = ['Cat1' => 'foo', 'cat2' => 'bar', 'Cat3' => 'baz', 'cat20' => 'qux'];  // $foo = ['cat20' => 'qux', 'Cat3' => 'baz', 'cat2' => 'bar', 'Cat1' => 'foo'];
$krsort = krsort($foo, SORT_NATURAL | SORT_FLAG_CASE);                         // $krsort = true;

```



## ksort

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5, 0, 1, 2];                                                     // $foo = [0 => 2, 1 => 4, 2 => 5, 3 => 0, 4 => 1, 5 => 2];
$ksort = ksort($foo);                                                          // $ksort = true;

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];                      // $foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];
$ksort = ksort($foo);                                                          // $ksort = true;

$foo = ['2', 4, '5', 0, '1', 2];                                               // $foo = [0 => '2', 1 => 4, 2 => '5', 3 => 0, 4 => '1', 5 => 2];
$ksort = ksort($foo, SORT_REGULAR);                                            // $ksort = true;

$foo = ['2cat' => 'foo', '1dog' => 'bar', '0bird' => 'baz'];                   // $foo = ['0bird' => 'baz', '1dog' => 'bar', '2cat' => 'foo'];
$ksort = ksort($foo, SORT_NUMERIC);                                            // $ksort = true;

$foo = ['cat1' => 'foo', 'cat12' => 'bar', 'cat10' => 'baz', 'cat2' => 'qux']; // $foo = ['cat1' => 'foo', 'cat10' => 'baz', 'cat12' => 'bar', 'cat2' => 'qux'];
$ksort = ksort($foo, SORT_STRING);                                             // $ksort = true;

$foo = ['cat1' => 'foo', 'cat12' => 'bar', 'cat10' => 'baz', 'cat2' => 'qux']; // $foo = ['cat1' => 'foo', 'cat10' => 'baz', 'cat12' => 'bar', 'cat2' => 'qux'];
$ksort = ksort($foo, SORT_LOCALE_STRING);                                      // $ksort = true;

$foo = ['cat1' => 'foo', 'cat12' => 'bar', 'cat10' => 'baz', 'cat2' => 'qux']; // $foo = ['cat1' => 'foo', 'cat2' => 'qux', 'cat10' => 'baz', 'cat12' => 'bar'];
$ksort = ksort($foo, SORT_NATURAL);                                            // $ksort = true;

$foo = ['Cat1' => 'foo', 'cat2' => 'bar', 'Cat3' => 'baz', 'cat20' => 'qux'];  // $foo = ['Cat1' => 'foo', 'Cat3' => 'baz', 'cat2' => 'bar', 'cat20' => 'qux'];
$ksort = ksort($foo, SORT_STRING);                                             // $ksort = true;

$foo = ['Cat1' => 'foo', 'cat2' => 'bar', 'Cat3' => 'baz', 'cat20' => 'qux'];  // $foo = ['Cat1' => 'foo', 'cat2' => 'bar', 'cat20' => 'qux', 'Cat3' => 'baz'];
$ksort = ksort($foo, SORT_STRING | SORT_FLAG_CASE);                            // $ksort = true;

$foo = ['Cat1' => 'foo', 'cat2' => 'bar', 'Cat3' => 'baz', 'cat20' => 'qux'];  // $foo = ['Cat1' => 'foo', 'cat2' => 'bar', 'Cat3' => 'baz', 'cat20' => 'qux'];
$ksort = ksort($foo, SORT_NATURAL | SORT_FLAG_CASE);                           // $ksort = true;

```



## list

```php
<?php

declare(strict_types = 1);

list($foo, $bar, $baz) = [2, 4, 5];                                                                   // $foo = 2; $bar = 4; $baz = 5;
list($foo, , $baz) = [2, 4, 5];                                                                       // $foo = 2; $baz = 5;
list(, , $baz) = [2, 4, 5];                                                                           // $baz = 5;
list($foo, list($bar, $baz)) = [2, [4, 5]];                                                           // $foo = 2; $bar = 4; $baz = 5;
list($foo[0], $foo[1], $foo[2]) = [2, 4, 5];                                                          // $foo = [0 => 2, 1 => 4, 2 => 5];
list('foo' => $foo, 'bar' => $bar, 'baz' => $baz) = ['foo' => 'foo', 'bar' => 'bar', 'baz' => 'baz']; // $foo = 'foo'; $bar = 'bar'; $baz = 'baz';

```



## natcasesort

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5];                                                             // $foo = [0 => 2, 1 => 4, 2 => 5];
$natcasesort = natcasesort($foo);                                             // $natcasesort = true;

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];                     // $foo = ['baz' => 'bird', 'foo' => 'cat', 'bar' => 'dog'];
$natcasesort = natcasesort($foo);                                             // $natcasesort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20']; // $foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];
$natcasesort = natcasesort($foo);                                             // $natcasesort = true;

$foo = [-5, 3, -2, 0, -1000, 9, 1];                                           // $foo = [2 => -2, 0 => -5, 4 => -1000, 3 => 0, 6 => 1, 1 => 3, 5 => 9];
$natcasesort = natcasesort($foo);                                             // $natcasesort = true;

$foo = ['09', '8', '10', '009', '011', '0'];                                  // $foo = [5 => '0', 1 => '8', 0 => '09', 3 => '009', 2 => '10', 4 => '011'];
$natcasesort = natcasesort($foo);                                             // $natcasesort = true;

```



## natsort

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5];                                                             // $foo = [0 => 2, 1 => 4, 2 => 5];
$natsort = natsort($foo);                                                     // $natsort = true;

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];                     // $foo = ['baz' => 'bird', 'foo' => 'cat', 'bar' => 'dog'];
$natsort = natsort($foo);                                                     // $natsort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20']; // $foo = ['foo' => 'Cat1', 'baz' => 'Cat3', 'bar' => 'cat2', 'qux' => 'cat20'];
$natsort = natsort($foo);                                                     // $natsort = true;

$foo = [-5, 3, -2, 0, -1000, 9, 1];                                           // $foo = [2 => -2, 0 => -5, 4 => -1000, 3 => 0, 6 => 1, 1 => 3, 5 => 9];
$natsort = natsort($foo);                                                     // $natsort = true;

$foo = ['09', '8', '10', '009', '011', '0'];                                  // $foo = [5 => '0', 1 => '8', 0 => '09', 3 => '009', 2 => '10', 4 => '011'];
$natsort = natsort($foo);                                                     // $natsort = true;

```



## next

```php
<?php

declare(strict_types = 1);

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];

$current = current($foo); // $current = 'cat';

$next = next($foo);       // $next = 'dog';
$current = current($foo); // $current = 'dog';

$next = next($foo);       // $next = 'bird';
$current = current($foo); // $current = 'bird';

```



## pos

```php
<?php

declare(strict_types = 1);

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];

$pos = pos($foo);   // $pos = 'cat';

$next = next($foo); // $next = 'dog';
$pos = pos($foo);   // $pos = 'dog';

$next = next($foo); // $next = 'bird';
$pos = pos($foo);   // $pos = 'bird';

```



## prev

```php
<?php

declare(strict_types = 1);

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];

$current = current($foo); // $current = 'cat';

$next = next($foo);       // $next = 'dog';
$current = current($foo); // $current = 'dog';

$next = next($foo);       // $next = 'bird';
$current = current($foo); // $current = 'bird';

$prev = prev($foo);       // $prev = 'dog';
$current = current($foo); // $current = 'dog';

```



## range

```php
<?php

declare(strict_types = 1);

$range = range(0, 5);        // $range = [0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5];
$range = range(0, 50, 10);   // $range = [0 => 0, 1 => 10, 2 => 20, 3 => 30, 4 => 40, 5 => 50];
$range = range(5, 0, -2);    // $range = [0 => 5, 1 => 3, 2 => 1];
$range = range('a', 'd');    // $range = [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd'];
$range = range('a', 'd', 2); // $range = [0 => 'a', 1 => 'c'];
$range = range('d', 'a', 2); // $range = [0 => 'd', 1 => 'b'];

```



## reset

```php
<?php

declare(strict_types = 1);

$foo = ['foo' => 'cat', 'bar' => 'dog', 'qux' => 'bird'];

$current = current($foo); // $current = 'cat';

$next = next($foo);       // $next = 'dog';
$current = current($foo); // $current = 'dog';

$next = next($foo);       // $next = 'bird';
$current = current($foo); // $current = 'bird';

$reset = reset($foo);     // $reset = 'cat';
$current = current($foo); // $current = 'cat';

```



## rsort

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5, 0, 1, 2];                                                     // $foo = [0 => 5, 1 => 4, 2 => 2, 3 => 2, 4 => 1, 5 => 0];
$rsort = rsort($foo);                                                          // $rsort = true;

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];                      // $foo = [0 => 'dog', 1 => 'cat', 2 => 'bird'];
$rsort = rsort($foo);                                                          // $rsort = true;

$foo = ['2', 4, '5', 0, '1', 2];                                               // $foo = [0 => '5', 1 => 4, 2 => '2', 3 => 2, 4 => '1', 5 => 0];
$rsort = rsort($foo, SORT_REGULAR);                                            // $rsort = true;

$foo = ['foo' => '2cat', 'bar' => '1dog', 'baz' => '0bird'];                   // $foo = [0 => '2cat', 1 => '1dog', 2 => '0bird'];
$rsort = rsort($foo, SORT_NUMERIC);                                            // $rsort = true;

$foo = [20, 4, 5, 0, 1, 22];                                                   // $foo = [0 => 5, 1 => 4, 2 => 22, 3 => 20, 4 => 1, 5 => 0];
$rsort = rsort($foo, SORT_STRING);                                             // $rsort = true;

$foo = [20, 4, 5, 0, 1, 22];                                                   // $foo = [0 => 5, 1 => 4, 2 => 22, 3 => 20, 4 => 1, 5 => 0];
$rsort = rsort($foo, SORT_LOCALE_STRING);                                      // $rsort = true;

$foo = ['foo' => 'cat1', 'bar' => 'cat12', 'baz' => 'cat10', 'qux' => 'cat2']; // $foo = [0 => 'cat12', 1 => 'cat10', 2 => 'cat2', 3 => 'cat1'];
$rsort = rsort($foo, SORT_NATURAL);                                            // $rsort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];  // $foo = [0 => 'cat20', 1 => 'cat2', 2 => 'Cat3', 3 => 'Cat1'];
$rsort = rsort($foo, SORT_STRING);                                             // $rsort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];  // $foo = [0 => 'Cat3', 1 => 'cat20', 2 => 'cat2', 3 => 'Cat1'];
$rsort = rsort($foo, SORT_STRING | SORT_FLAG_CASE);                            // $rsort = true;

$foo = ['a' => 'Cat1', 'b' => 'cat2', 'c' => 'Cat3', 'd' => 'cat20'];          // $foo = [0 => 'cat20', 1 => 'Cat3', 2 => 'cat2', 3 => 'Cat1'];
$rsort = rsort($foo, SORT_NATURAL | SORT_FLAG_CASE);                           // $rsort = true;

```



## shuffle

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5];
$shuffle = shuffle($foo); // $shuffle = true;

$foo = ['foo' => 'cat', 'bar' => 'dog'];
$shuffle = shuffle($foo); // $shuffle = true;

$foo = [[2, 4, 5], ['foo' => 'cat', 'bar' => 'dog']];
$shuffle = shuffle($foo); // $shuffle = true;

```



## sizeof

```php
<?php

declare(strict_types = 1);

$sizeof = sizeof([2, 4, 5]);                                                      // $sizeof = 3;
$sizeof = sizeof(['foo' => 'cat', 'bar' => 'dog']);                               // $sizeof = 2;
$sizeof = sizeof([[2, 4, 5], ['foo' => 'cat', 'bar' => 'dog']]);                  // $sizeof = 2;
$sizeof = sizeof([[2, 4, 5], ['foo' => 'cat', 'bar' => 'dog']], COUNT_RECURSIVE); // $sizeof = 7;

```



## sort

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5, 0, 1, 2];                                                     // $foo = [0 => 0, 1 => 1, 2 => 2, 3 => 2, 4 => 4, 5 => 5];
$sort = sort($foo);                                                            // $sort = true;

$foo = ['foo' => 'cat', 'bar' => 'dog', 'baz' => 'bird'];                      // $foo = [0 => 'bird', 1 => 'cat', 2 => 'dog'];
$sort = sort($foo);                                                            // $sort = true;

$foo = ['2', 4, '5', 0, '1', 2];                                               // $foo = [0 => 0, 1 => '1', 2 => '2', 3 => 2, 4 => 4, 5 => '5'];
$sort = sort($foo, SORT_REGULAR);                                              // $sort = true;

$foo = ['foo' => '2cat', 'bar' => '1dog', 'baz' => '0bird'];                   // $foo = [0 => '0bird', 1 => '1dog', 2 => '2cat'];
$sort = sort($foo, SORT_NUMERIC);                                              // $sort = true;

$foo = [20, 4, 5, 0, 1, 22];                                                   // $foo = [0 => 0, 1 => 1, 2 => 20, 3 => 22, 4 => 4, 5 => 5];
$sort = sort($foo, SORT_STRING);                                               // $sort = true;

$foo = [20, 4, 5, 0, 1, 22];                                                   // $foo = [0 => 0, 1 => 1, 2 => 20, 3 => 22, 4 => 4, 5 => 5];
$sort = sort($foo, SORT_LOCALE_STRING);                                        // $sort = true;

$foo = ['foo' => 'cat1', 'bar' => 'cat12', 'baz' => 'cat10', 'qux' => 'cat2']; // $foo = [0 => 'cat1', 1 => 'cat2', 2 => 'cat10', 3 => 'cat12'];
$sort = sort($foo, SORT_NATURAL);                                              // $sort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];  // $foo = [0 => 'Cat1', 1 => 'Cat3', 2 => 'cat2', 3 => 'cat20'];
$sort = sort($foo, SORT_STRING);                                               // $sort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];  // $foo = [0 => 'Cat1', 1 => 'cat2', 2 => 'cat20', 3 => 'Cat3'];
$sort = sort($foo, SORT_STRING | SORT_FLAG_CASE);                              // $sort = true;

$foo = ['foo' => 'Cat1', 'bar' => 'cat2', 'baz' => 'Cat3', 'qux' => 'cat20'];  // $foo = [0 => 'Cat1', 1 => 'cat2', 2 => 'Cat3', 3 => 'cat20'];
$sort = sort($foo, SORT_NATURAL | SORT_FLAG_CASE);                             // $sort = true;

```



## uasort

```php
<?php

declare(strict_types = 1);

function uasort_asc_func($a, $b)
{
    return ($a <=> $b);
}

function uasort_desc_func($a, $b)
{
    return -($a <=> $b);
}

$foo = [2, 4, 5, 0, 1, 2];                  // $foo = [3 => 0, 4 => 1, 0 => 2, 5 => 2, 1 => 4, 2 => 5];
$uasort = uasort($foo, 'uasort_asc_func');  // $uasort = true;

$foo = [2, 4, 5, 0, 1, 2];                  // $foo = [2 => 5, 1 => 4, 0 => 2, 5 => 2, 4 => 1, 3 => 0];
$uasort = uasort($foo, 'uasort_desc_func'); // $uasort = true;

```



## uksort

```php
<?php

declare(strict_types = 1);

function uksort_asc_func($a, $b)
{
    return ($a <=> $b);
}

function uksort_desc_func($a, $b)
{
    return -($a <=> $b);
}

$foo = [2, 4, 5, 0, 1, 2];                 // $foo = [0 => 2, 1 => 4, 2 => 5, 3 => 0, 4 => 1, 5 => 2];
$usort = uksort($foo, 'uksort_asc_func');  // $uksort = true;

$foo = [2, 4, 5, 0, 1, 2];                 // $foo = [5 => 2, 4 => 1, 3 => 0, 2 => 5, 1 => 4, 0 => 2];
$usort = uksort($foo, 'uksort_desc_func'); // $uksort = true;

```



## usort

```php
<?php

declare(strict_types = 1);

function usort_one_func($a, $b)
{
    return ($a <=> $b);
}

function usort_cmp_func($a, $b)
{
    return strcmp($a['foo'], $b['foo']);
}

$foo = [2, 4, 5, 0, 1, 2];                                      // $foo = [0 => 0, 1 => 1, 2 => 2, 3 => 2, 4 => 4, 5 => 5];
$usort = usort($foo, 'usort_one_func');                         // $usort = true;

$foo = [['foo' => 'cat'], ['foo' => 'dog'], ['foo' => 'bird']]; // $foo = [0 => ['foo' => 'bird'], 1 => ['foo' => 'cat'], 2 => ['foo' => 'dog']];
$usort = usort($foo, 'usort_cmp_func');                         // $usort = true;

```