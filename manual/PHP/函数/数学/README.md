## 目录

* [abs - 绝对值](#abs)
* [acos - 反余弦](#acos)
* [acosh - 反双曲余弦](#acosh)
* [asin - 反正弦](#asin)
* [asinh - 反双曲正弦](#asinh)
* [atan2 - 两个参数的反正切](#atan2)
* [atan - 反正切](#atan)
* [atanh - 反双曲正切](#atanh)
* [base_convert - 在任意进制之间转换数字](#base_convert)
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
* [is_finite - 判断是否为有限值](#is_finite)
* [is_infinite - 判断是否为无限值](#is_infinite)
* [is_nan - 判断是否为合法数值](#is_nan)
* [lcg_value - 返回范围为 (0, 1) 的一个伪随机数](#lcg_value)
* [log10 - 以 10 为底的对数](#log10)
* [log1p - 返回 log(1 + number)](#log1p)
* [log - 自然对数](#log)
* [max - 找出最大值](#max)
* [min - 找出最小值](#min)
* [mt_getrandmax - 获取随机数最大的可能值](#mt_getrandmax)
* [mt_rand - 生成更好的随机数](#mt_rand)
* [mt_srand - 播下一个更好的随机数发生器种子](#mt_srand)
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

$abs = abs(-4.2); // $abs = 4.2;
$abs = abs(0);    // $abs = 0;
$abs = abs(5);    // $abs = 5;

```



## acos

```php
<?php

declare(strict_types = 1);

$acos = acos(-1); // $acos = 3.1415926535898;
$acos = acos(0);  // $acos = 1.5707963267949;
$acos = acos(1);  // $acos = 0;

```



## acosh

```php
<?php

declare(strict_types = 1);

$acosh = acosh(1);  // $acosh = 0;
$acosh = acosh(10); // $acosh = 2.9932228461264;
$acosh = acosh(20); // $acosh = 3.6882538673613;

```



## asin

```php
<?php

declare(strict_types = 1);

$asin = asin(-1); // $asin = -1.5707963267949;
$asin = asin(0);  // $asin = 0;
$asin = asin(1);  // $asin = 1.5707963267949;

```



## asinh

```php
<?php

declare(strict_types = 1);

$asinh = asinh(-1); // $asinh = -0.88137358701954;
$asinh = asinh(0);  // $asinh = 0;
$asinh = asinh(1);  // $asinh = 0.88137358701954;

```



## atan2

```php
<?php

declare(strict_types = 1);

$atan2 = atan2(-1, -1); // $atan2 = -2.3561944901923;
$atan2 = atan2(1, 1);   // $atan2 = 0.78539816339745;
$atan2 = atan2(10, 20); // $atan2 = 0.46364760900081;

```



## atan

```php
<?php

declare(strict_types = 1);

$atan = atan(-1); // $atan = -0.78539816339745;
$atan = atan(0);  // $atan = 0;
$atan = atan(1);  // $atan = 0.78539816339745;

```



## atanh

```php
<?php

declare(strict_types = 1);

$atanh = atanh(-0.5); // $atanh = -0.54930614433405;
$atanh = atanh(0);    // $atanh = 0;
$atanh = atanh(0.5);  // $atanh = 0.54930614433405;

```



## base_convert

```php
<?php

declare(strict_types = 1);

$base_convert = base_convert('11', 2, 10);     // $base_convert = '3';
$base_convert = base_convert('0031', 8, 10);   // $base_convert = '25';
$base_convert = base_convert('A37334', 16, 2); // $base_convert = '101000110111001100110100';

```



## bindec

```php
<?php

declare(strict_types = 1);

$bindec = bindec('11');     // $bindec = 3;
$bindec = bindec('110011'); // $bindec = 51;
$bindec = bindec('111111'); // $bindec = 63;

```



## ceil

```php
<?php

declare(strict_types = 1);

$ceil = ceil(-3.14); // $ceil = -3;
$ceil = ceil(4.3);   // $ceil = 5;
$ceil = ceil(9.999); // $ceil = 10;

```



## cos

```php
<?php

declare(strict_types = 1);

$cos = cos(-1); // $cos = 0.54030230586814;
$cos = cos(0);  // $cos = 1;
$cos = cos(1);  // $cos = 0.54030230586814;

```



## cosh

```php
<?php

declare(strict_types = 1);

$cosh = cosh(-1); // $cosh = 1.5430806348152;
$cosh = cosh(0);  // $cosh = 1;
$cosh = cosh(1);  // $cosh = 1.5430806348152;

```



## decbin

```php
<?php

declare(strict_types = 1);

$decbin = decbin(11); // $decbin = '1011';
$decbin = decbin(12); // $decbin = '1100';
$decbin = decbin(26); // $decbin = '11010';

```



## dechex

```php
<?php

declare(strict_types = 1);

$dechex = dechex(10);  // $dechex = 'a';
$dechex = dechex(47);  // $dechex = '2f';
$dechex = dechex(100); // $dechex = '64';

```



## decoct

```php
<?php

declare(strict_types = 1);

$decoct = decoct(15);  // $decoct = '17';
$decoct = decoct(100); // $decoct = '144';
$decoct = decoct(264); // $decoct = '410';

```



## deg2rad

```php
<?php

declare(strict_types = 1);

$deg2rad = deg2rad(30);  // $deg2rad = 0.5235987755983;
$deg2rad = deg2rad(90);  // $deg2rad = 1.5707963267949;
$deg2rad = deg2rad(180); // $deg2rad = 3.1415926535898;

```



## exp

```php
<?php

declare(strict_types = 1);

$exp = exp(0);   // $exp = 1;
$exp = exp(5.7); // $exp = 298.86740096706;
$exp = exp(12);  // $exp = 162754.791419;

```



## expm1

```php
<?php

declare(strict_types = 1);

$expm1 = expm1(0);   // $expm1 = 0;
$expm1 = expm1(5.7); // $expm1 = 297.86740096706
$expm1 = expm1(12);  // $expm1 = 162753.791419

```



## floor

```php
<?php

declare(strict_types = 1);

$floor = floor(-3.14); // $floor = -4;
$floor = floor(4.3);   // $floor = 4;
$floor = floor(9.999); // $floor = 9;

```



## fmod

```php
<?php

declare(strict_types = 1);

$fmod = fmod(-10, 3);   // $fmod = -1;
$fmod = fmod(5, 2);     // $fmod = 1;
$fmod = fmod(5.7, 1.3); // $fmod = 0.5;

```



## getrandmax

```php
<?php

declare(strict_types = 1);

$getrandmax = getrandmax();

```



## hexdec

```php
<?php

declare(strict_types = 1);

$hexdec = hexdec('a');  // $hexdec = 10;
$hexdec = hexdec('a0'); // $hexdec = 160;
$hexdec = hexdec('ee'); // $hexdec = 238;

```



## hypot

```php
<?php

declare(strict_types = 1);

$hypot = hypot(1, 3); // $hypot = 3.1622776601684;
$hypot = hypot(2, 3); // $hypot = 3.605551275464;
$hypot = hypot(3, 6); // $hypot = 6.7082039324994;

```



## intdiv

```php
<?php

declare(strict_types = 1);

$intdiv = intdiv(-3, -2); // $intdiv = 1;
$intdiv = intdiv(-3, 2);  // $intdiv = -1;
$intdiv = intdiv(3, 2);   // $intdiv = 1;

```



## is_finite

```php
<?php

declare(strict_types = 1);

$is_finite = is_finite(log(0)); // $is_finite = false;
$is_finite = is_finite(2);      // $is_finite = true;
$is_finite = is_finite(100);    // $is_finite = true;

```



## is_infinite

```php
<?php

declare(strict_types = 1);

$is_infinite = is_infinite(log(0)); // $is_infinite = true;
$is_infinite = is_infinite(2);      // $is_infinite = false;
$is_infinite = is_infinite(100);    // $is_infinite = false;

```



## is_nan

```php
<?php

declare(strict_types = 1);

$is_nan = is_nan(acos(8)); // $is_nan = true;
$is_nan = is_nan(0);       // $is_nan = false;
$is_nan = is_nan(1);       // $is_nan = false;

```



## lcg_value

```php
<?php

declare(strict_types = 1);

$lcg_value = lcg_value();

```



## log10

```php
<?php

declare(strict_types = 1);

$log10 = log10(1);      // $log10 = 0;
$log10 = log10(2);      // $log10 = 0.30102999566398;
$log10 = log10(2.7183); // $log10 = 0.43429738512451;

```



## log1p

```php
<?php

declare(strict_types = 1);

$log1p = log1p(0); // $log1p = 0;
$log1p = log1p(1); // $log1p = 0.69314718055995;
$log1p = log1p(2); // $log1p = 1.0986122886681;

```



## log

```php
<?php

declare(strict_types = 1);

$log = log(1);    // $log = 0;
$log = log(1, 2); // $log = 0;
$log = log(2, 2); // $log = 1;

```



## max

```php
<?php

declare(strict_types = 1);

$max = max(1, 3, 5, 6, 7);           // $max = 7;
$max = max([2, 4, 5]);               // $max = 5;
$max = max('hello', 0);              // $max = 'hello';
$max = max(0, 'hello');              // $max = 0;
$max = max('42', 3);                 // $max = '42';
$max = max([2, 4, 8], [2, 5, 7]);    // $max = [0 => 2, 1 => 5, 2 => 7];
$max = max([2, 2, 2], [1, 1, 1, 1]); // $max = [0 => 1, 1 => 1, 2 => 1, 3 => 1];
$max = max('hello', [2, 5, 7], 42);  // $max = [0 => 2, 1 => 5, 2 => 7];

```



## min

```php
<?php

declare(strict_types = 1);

$min = min(2, 3, 1, 6, 7);           // $min = 1;
$min = min([2, 4, 5]);               // $min = 2;
$min = min('hello', 0);              // $min = hello;
$min = min(0, 'hello');              // $min = 0;
$min = min('42', -1);                // $min = -1;
$min = min([2, 4, 8], [2, 5, 1]);    // $min = [0 => 2, 1 => 4, 2 => 8];
$min = min([2, 2, 2], [2, 1, 1, 1]); // $min = [0 => 2, 1 => 2, 2 => 2];
$min = min('hello', [2, 5, 7], 42);  // $min = 'hello';

```



## mt_getrandmax

```php
<?php

declare(strict_types = 1);

$mt_getrandmax = mt_getrandmax();

```



## mt_rand

```php
<?php

declare(strict_types = 1);

$mt_rand = mt_rand();
$mt_rand = mt_rand(5, 15);

```



## mt_srand

```php
<?php

declare(strict_types = 1);

mt_srand(intval(microtime(true) * 10000));

```



## octdec

```php
<?php

declare(strict_types = 1);

$octdec = octdec('77');  // $octdec = 63;
$octdec = octdec('100'); // $octdec = 64;
$octdec = octdec('777'); // $octdec = 511;

```



## pi

```php
<?php

declare(strict_types = 1);

$pi = pi(); // $pi = 3.1415926535898;

```



## pow

```php
<?php

declare(strict_types = 1);

$pow = pow(0, 0);   // $pow = 1;
$pow = pow(-1, 20); // $pow = 1;
$pow = pow(2, 8);   // $pow = 256;

```



## rad2deg

```php
<?php

declare(strict_types = 1);

$rad2deg = rad2deg(0.5235987755983); // $rad2deg = 30;
$rad2deg = rad2deg(1.5707963267949); // $rad2deg = 90;
$rad2deg = rad2deg(3.1415926535898); // $rad2deg = 180;

```



## rand

```php
<?php

declare(strict_types = 1);

$rand = rand();
$rand = rand(5, 15);

```



## round

```php
<?php

declare(strict_types = 1);

$round = round(3.4);                         // $round = 3;
$round = round(3.5);                         // $round = 4;
$round = round(3.6, 0);                      // $round = 4;
$round = round(1.95583, 2);                  // $round = 1.96;
$round = round(1241757, -3);                 // $round = 1242000;
$round = round(9.5, 0, PHP_ROUND_HALF_UP);   // $round = 10;
$round = round(9.5, 0, PHP_ROUND_HALF_DOWN); // $round = 9;
$round = round(9.5, 0, PHP_ROUND_HALF_EVEN); // $round = 10;
$round = round(9.5, 0, PHP_ROUND_HALF_ODD);  // $round = 9;

```



## sin

```php
<?php

declare(strict_types = 1);

$sin = sin(-1); // $sin = -0.8414709848079;
$sin = sin(0);  // $sin = 0;
$sin = sin(1);  // $sin = 0.8414709848079;
```



## sinh

```php
<?php

declare(strict_types = 1);

$sinh = sinh(-1); // $sinh = -1.1752011936438;
$sinh = sinh(0);  // $sinh = 0;
$sinh = sinh(1);  // $sinh = 1.1752011936438;
```



## sqrt

```php
<?php

declare(strict_types = 1);

$sqrt = sqrt(8);  // $sqrt = 2.8284271247462;
$sqrt = sqrt(9);  // $sqrt = 3;
$sqrt = sqrt(10); // $sqrt = 3.1622776601684;

```



## srand

```php
<?php

declare(strict_types = 1);

srand(intval(microtime(true)  * 10000));

```



## tan

```php
<?php

declare(strict_types = 1);

$tan = tan(-1); // $tan = -1.5574077246549;
$tan = tan(0);  // $tan = 0;
$tan = tan(1);  // $tan = 1.5574077246549;

```



## tanh

```php
<?php

declare(strict_types = 1);

$tanh = tanh(-1); // $tanh = -0.76159415595576;
$tanh = tanh(0);  // $tanh = 0;
$tanh = tanh(1);  // $tanh = 0.76159415595576;

```