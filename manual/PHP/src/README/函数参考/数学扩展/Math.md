# Math

* [abs - 绝对值](#abs)
* [acos - 反余弦](#acos)
* [acosh - 反双曲余弦](#acosh)
* [asin - 反正弦](#asin)
* [asinh - 反双曲正弦](#asinh)
* [atan2 - 两个参数的反正切](#atan2)
* [atan - 反正切](#atan)
* [atanh - 反双曲正切](#atanh)
* [base_convert - 在任意进制之间转换数字](#baseconvert)
* [bindec - 进制转换为十进制](#bindec)
* [ceil - 向上取整](#ceil)
* [cos - 余弦](#cos)
* [cosh - 双曲余弦](#cosh)
* [decbin - 十进制转换为二进制](#decbin)
* [dechex - 十进制转换为十六进制](#dechex)
* [decoct - 十进制转换为八进制](#decoct)
* [deg2rad - 将角度转换为弧度](#deg2rad)
* [exp - 计算 e(2.718282) 的指数](#exp)
* [expm1 - 返回 exp(number) - 1](#expm1)
* [floor - 向下取整](#floor)
* [fmod - 返回除法的浮点数余数](#fmod)
* [getrandmax - 获取随机数最大的可能值](#getrandmax)
* [hexdec - 十六进制转换为十进制](#hexdec)
* [hypot - 计算直角三角形的斜边长度](#hypot)
* [intdiv - 对除法结果取整](#intdiv)
* [is_finite - 判断是否为有限值](#isfinite)
* [is_infinite - 判断是否为无限值](#isinfinite)
* [is_nan - 判断是否为合法数值](#isnan)
* [lcg_value - 返回范围为 (0, 1) 的一个伪随机数](#lcgvalue)
* [log10 - 以 10 为底的对数](#log10)
* [log1p - 返回 log(1 + number)](#log1p)
* [log - 自然对数](#log)
* [max - 找出最大值](#max)
* [min - 找出最小值](#min)
* [mt_getrandmax - 获取随机数最大的可能值](#mtgetrandmax)
* [mt_rand - 生成更好的随机数](#mtrand)
* [mt_srand - 播下一个更好的随机数发生器种子](#mtsrand)
* [octdec - 八进制转换为十进制](#octdec)
* [pi - 获取圆周率值](#pi)
* [pow - 指数表达式](#pow)
* [rad2deg - 将弧度转换为角度](#rad2deg)
* [rand - 生成一个随机数](#rand)
* [round - 四舍五入](#round)
* [sin - 正弦](#sin)
* [sinh - 双曲正弦](#sinh)
* [sqrt - 平方根](#sqrt)
* [srand - 播下随机数发生器种子](#srand)
* [tan - 正切](#tan)
* [tanh - 双曲正切](#tanh)

## abs

```php
<?php

declare(strict_types = 1);

var_dump(abs(-4.2)); // float(4.2)
var_dump(abs(0));    // int(0)
var_dump(abs(5));    // int(5)

```

## acos

```php
<?php

declare(strict_types = 1);

var_dump(acos(-1)); // float(3.1415926535898)
var_dump(acos(0));  // float(1.5707963267949)
var_dump(acos(1));  // float(0)

```

## acosh

```php
<?php

declare(strict_types = 1);

var_dump(acosh(1));  // float(0)
var_dump(acosh(10)); // float(2.9932228461264)
var_dump(acosh(20)); // float(3.6882538673613)

```

## asin

```php
<?php

declare(strict_types = 1);

var_dump(asin(-1)); // float(-1.5707963267949)
var_dump(asin(0));  // float(0)
var_dump(asin(1));  // float(1.5707963267949)

```

## asinh

```php
<?php

declare(strict_types = 1);

var_dump(asinh(-1)); // float(-0.88137358701954)
var_dump(asinh(0));  // float(0)
var_dump(asinh(1));  // float(0.88137358701954)

```

## atan2

```php
<?php

declare(strict_types = 1);

var_dump(atan2(-1, -1)); // float(-2.3561944901923)
var_dump(atan2(1, 1));   // float(0.78539816339745)
var_dump(atan2(10, 20)); // float(0.46364760900081)

```

