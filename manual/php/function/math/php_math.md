# Math Functions

> see [https://secure.php.net/manual/en/ref.math.php](https://secure.php.net/manual/en/ref.math.php) for more information.

[![build][build-image]][build-url]

## Table of contents

* [abs](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#abs) - Returns the absolute value of the variable.
* [acos](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#acos) - Returns the arc cosine of the variable in radians.
* [acosh](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#acosh) - Returns the inverse hyperbolic cosine of the variable.
* [asin](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#asin) - Returns the arc sine of the variable in radians.
* [asinh](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#asinh) - Returns the inverse hyperbolic sine of the variable.
* [atan2](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#atan2) - Returns the arc tangent of the two variables in radians.
* [atan](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#atan) - Returns the arc tangent of the variable in radians.
* [atanh](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#atanh) - Returns the inverse hyperbolic tangent of the variable.
* [base_convert](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#base_convert) - Convert a number between arbitrary bases.
* [bindec](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#bindec) - Binary to decimal.
* [ceil](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#ceil) - Returns the next highest integer by rounding up if necessary.
* [cos](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#cos) - Returns the cosine of the variable.
* [cosh](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#cosh) - Returns the hyperbolic cosine of the variable.
* [decbin](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#decbin) - Decimal to binary.
* [dechex](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#dechex) - Decimal to hexadecimal.
* [decoct](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#decoct) - Decimal to octal.
* [deg2rad](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#deg2rad) - Converts the number in degrees to the radian equivalent.
* [exp](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#exp) - Calculates the exponent of e(2.718282).
* [expm1](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#expm1) - Returns exp(number) - 1.
* [floor](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#floor) - Returns the next lowest integer by rounding down if necessary.
* [fmod](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#fmod) - Returns the floating point remainder of the division of the variable.
* [getrandmax](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#getrandmax) - Show the largest possible random value.
* [hexdec](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#hexdec) - Hexadecimal to decimal.
* [hypot](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#hypot) - Calculate the length of the hypotenuse of a right-angle triangle.
* [intdiv](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#intdiv) - Returns the integer quotient of the division of dividend by divisor.
* [is_finite](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#is_finite) - Finds whether a value is a legal finite number.
* [is_infinite](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#is_infinite) - Finds whether a value is infinite.
* [is_nan](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#is_nan) - Finds whether a value is not a number.
* [lcg_value](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#lcg_value) - Returns a pseudo random number in the range of (0, 1).
* [log10](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#log10) - Returns the base-10 logarithm of the variable.
* [log1p](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#log1p) - Returns log(1 + number).
* [log](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#log) - Returns the natural logarithm.
* [max](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#max) - Find the highest value.
* [min](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#min) - Find the lowest value.
* [mt_getrandmax](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#mt_getrandmax) - Show the largest possible random value.
* [mt_rand](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#mt_rand) - Generate a better random integer.
* [mt_srand](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#mt_srand) - Sowing a better random number generator seed.
* [octdec](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#octdec) - Octal to decimal.
* [pi](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#pi) - Returns the value of pi.
* [pow](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#pow) - Returns the power of the exponential expression.
* [rad2deg](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#rad2deg) - Converts the radian number to the equivalent number in degrees.
* [rand](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#rand) - Generate a random integer.
* [round](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#round) - Rounds a float.
* [sin](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#sin) - Returns the sine of the variable.
* [sinh](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#sinh) - Returns the hyperbolic sine of the variable.
* [sqrt](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#sqrt) - Returns the square root of the variable.
* [srand](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#srand) - Sowing a random number generator seed.
* [tan](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#tan) - Returns the tangent of the variable.
* [tanh](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/math/php_math.md#tanh) - Returns the hyperbolic tangent of the variable.

### abs

> Returns the absolute value of the variable.

```php
$abs = abs(-4.2); // $abs = 4.2;
$abs = abs(0);    // $abs = 0;
$abs = abs(5);    // $abs = 5;
```

### acos

> Returns the arc cosine of the variable in radians.

```php
$acos = acos(-1); // $acos = 3.1415926535898;
$acos = acos(0);  // $acos = 1.5707963267949;
$acos = acos(1);  // $acos = 0;
```

### acosh

> Returns the inverse hyperbolic cosine of the variable.

```php
$acosh = acosh(1);  // $acosh = 0;
$acosh = acosh(10); // $acosh = 2.9932228461264;
$acosh = acosh(20); // $acosh = 3.6882538673613;
```

### asin

> Returns the arc sine of the variable in radians.

```php
$asin = asin(-1); // $asin = -1.5707963267949;
$asin = asin(0);  // $asin = 0;
$asin = asin(1);  // $asin = 1.5707963267949;
```

### asinh

> Returns the inverse hyperbolic sine of the variable.

```php
$asinh = asinh(-1); // $asinh = -0.88137358701954;
$asinh = asinh(0);  // $asinh = 0;
$asinh = asinh(1);  // $asinh = 0.88137358701954;
```

### atan2

> Returns the arc tangent of the two variables in radians.

```php
$atan2 = atan2(-1, -1); // $atan2 = -2.3561944901923;
$atan2 = atan2(1, 1);   // $atan2 = 0.78539816339745;
$atan2 = atan2(10, 20); // $atan2 = 0.46364760900081;
```

### atan

> Returns the arc tangent of the variable in radians.

```php
$atan = atan(-1); // $atan = -0.78539816339745;
$atan = atan(0);  // $atan = 0;
$atan = atan(1);  // $atan = 0.78539816339745;
```

### atanh

> Returns the inverse hyperbolic tangent of the variable.

```php
$atanh = atanh(-0.5); // $atanh = -0.54930614433405;
$atanh = atanh(0);    // $atanh = 0;
$atanh = atanh(0.5);  // $atanh = 0.54930614433405;
```

### base_convert

> Convert a number between arbitrary bases.

```php
$base_convert = base_convert('11', 2, 10);     // $base_convert = '3';
$base_convert = base_convert('0031', 8, 10);   // $base_convert = '25';
$base_convert = base_convert('A37334', 16, 2); // $base_convert = '101000110111001100110100';
```

### bindec

> Binary to decimal.

```php
$bindec = bindec('11');     // $bindec = 3;
$bindec = bindec('110011'); // $bindec = 51;
$bindec = bindec('111111'); // $bindec = 63;
```

### ceil

> Returns the next highest integer by rounding up if necessary.

```php
$ceil = ceil(-3.14); // $ceil = -3;
$ceil = ceil(4.3);   // $ceil = 5;
$ceil = ceil(9.999); // $ceil = 10;
```

### cos

> Returns the cosine of the variable.

```php
$cos = cos(-1); // $cos = 0.54030230586814;
$cos = cos(0);  // $cos = 1;
$cos = cos(1);  // $cos = 0.54030230586814;
```

### cosh

> Returns the hyperbolic cosine of the variable.

```php
$cosh = cosh(-1); // $cosh = 1.5430806348152;
$cosh = cosh(0);  // $cosh = 1;
$cosh = cosh(1);  // $cosh = 1.5430806348152;
```

### decbin

> Decimal to binary.

```php
$decbin = decbin(11); // $decbin = '1011';
$decbin = decbin(12); // $decbin = '1100';
$decbin = decbin(26); // $decbin = '11010';
```

### dechex

> Decimal to hexadecimal.

```php
$dechex = dechex(10);  // $dechex = 'a';
$dechex = dechex(47);  // $dechex = '2f';
$dechex = dechex(100); // $dechex = '64';
```

### decoct

> Decimal to octal.

```php
$decoct = decoct(15);  // $decoct = '17';
$decoct = decoct(100); // $decoct = '144';
$decoct = decoct(264); // $decoct = '410';
```

### deg2rad

> Converts the number in degrees to the radian equivalent.

```php
$deg2rad = deg2rad(30);  // $deg2rad = 0.5235987755983;
$deg2rad = deg2rad(90);  // $deg2rad = 1.5707963267949;
$deg2rad = deg2rad(180); // $deg2rad = 3.1415926535898;
```

### exp

> Calculates the exponent of e(2.718282).

```php
$exp = exp(0);   // $exp = 1;
$exp = exp(5.7); // $exp = 298.86740096706;
$exp = exp(12);  // $exp = 162754.791419;
```

### expm1

> Returns exp(number) - 1.

```php
$expm1 = expm1(0);   // $expm1 = 0;
$expm1 = expm1(5.7); // $expm1 = 297.86740096706
$expm1 = expm1(12);  // $expm1 = 162753.791419
```

### floor

> Returns the next lowest integer by rounding down if necessary.

```php
$floor = floor(-3.14); // $floor = -4;
$floor = floor(4.3);   // $floor = 4;
$floor = floor(9.999); // $floor = 9;
```

### fmod

> Returns the floating point remainder of the division of the variable.

```php
$fmod = fmod(-10, 3);   // $fmod = -1;
$fmod = fmod(5, 2);     // $fmod = 1;
$fmod = fmod(5.7, 1.3); // $fmod = 0.5;
```

### getrandmax

> Show the largest possible random value.

```php
$getrandmax = getrandmax();
```

### hexdec

> Hexadecimal to decimal.

```php
$hexdec = hexdec('a');  // $hexdec = 10;
$hexdec = hexdec('a0'); // $hexdec = 160;
$hexdec = hexdec('ee'); // $hexdec = 238;
```

### hypot

> Calculate the length of the hypotenuse of a right-angle triangle.

```php
$hypot = hypot(1, 3); // $hypot = 3.1622776601684;
$hypot = hypot(2, 3); // $hypot = 3.605551275464;
$hypot = hypot(3, 6); // $hypot = 6.7082039324994;
```

### intdiv

> Returns the integer quotient of the division of dividend by divisor.

```php
$intdiv = intdiv(-3, -2); // $intdiv = 1;
$intdiv = intdiv(-3, 2);  // $intdiv = -1;
$intdiv = intdiv(3, 2);   // $intdiv = 1;
```

### is_finite

> Finds whether a value is a legal finite number.

```php
$is_finite = is_finite(log(0)); // $is_finite = false;
$is_finite = is_finite(2);      // $is_finite = true;
$is_finite = is_finite(100);    // $is_finite = true;
```

### is_infinite

> Finds whether a value is infinite.

```php
$is_infinite = is_infinite(log(0)); // $is_infinite = true;
$is_infinite = is_infinite(2);      // $is_infinite = false;
$is_infinite = is_infinite(100);    // $is_infinite = false;
```

### is_nan

> Finds whether a value is not a number.

```php
$is_nan = is_nan(acos(8)); // $is_nan = true;
$is_nan = is_nan(0);       // $is_nan = false;
$is_nan = is_nan(1);       // $is_nan = false;
```

### lcg_value

> Returns a pseudo random number in the range of (0, 1).

```php
$lcg_value = lcg_value(); // $lcg_value = 0 ~ 1;
```

### log10

> Returns the base-10 logarithm of the variable.

```php
$log10 = log10(1);      // $log10 = 0;
$log10 = log10(2);      // $log10 = 0.30102999566398;
$log10 = log10(2.7183); // $log10 = 0.43429738512451;
```

### log1p

> Returns log(1 + number).

```php
$log1p = log1p(0); // $log1p = 0;
$log1p = log1p(1); // $log1p = 0.69314718055995;
$log1p = log1p(2); // $log1p = 1.0986122886681;
```

### log

> Returns the natural logarithm.

```php
$log = log(1);    // $log = 0;
$log = log(1, 2); // $log = 0;
$log = log(2, 2); // $log = 1;
```

### max

> Find the highest value.

```php
$max = max(1, 3, 5, 6, 7);           // $max = 7;
$max = max([2, 4, 5]);               // $max = 5;
$max = max('hello', 0);              // $max = 'hello';
$max = max(0, 'hello');              // $max = 0;
$max = max('42', 3);                 // $max = '42';
$max = max([2, 4, 8], [2, 5, 7]);    // $max = [0 => 2, 1 => 5, 2 => 7];
$max = max([2, 2, 2], [1, 1, 1, 1]); // $max = [0 => 1, 1 => 1, 2 => 1, 3 => 1];
$max = max('hello', [2, 5, 7], 42);  // $max = [0 => 2, 1 => 5, 2 => 7];
```

### min

> Find the lowest value.

```php
$min = min(2, 3, 1, 6, 7);           // $min = 1;
$min = min([2, 4, 5]);               // $min = 2;
$min = min('hello', 0);              // $min = hello;
$min = min(0, 'hello');              // $min = 0;
$min = min('42', -1);                // $min = -1;
$min = min([2, 4, 8], [2, 5, 1]);    // $min = [0 => 2, 1 => 4, 2 => 8];
$min = min([2, 2, 2], [2, 1, 1, 1]); // $min = [0 => 2, 1 => 2, 2 => 2];
$min = min('hello', [2, 5, 7], 42);  // $min = 'hello';
```

### mt_getrandmax

> Show the largest possible random value.

```php
$mt_getrandmax = mt_getrandmax();
```

### mt_rand

> Generate a better random integer.

```php
$mt_rand = mt_rand();      // $mt_rand = 0 ~ mt_getrandmax();
$mt_rand = mt_rand(5, 15); // $mt_rand = 5 ~ 15;
```

### mt_srand

> Sowing a better random number generator seed.

```php
mt_srand(intval(microtime(true) * 10000));
```

### octdec

> Octal to decimal.

```php
$octdec = octdec('77');  // $octdec = 63;
$octdec = octdec('100'); // $octdec = 64;
$octdec = octdec('777'); // $octdec = 511;
```

### pi

> Returns the value of pi.

```php
$pi = pi(); // $pi = 3.1415926535898;
```

### pow

> Returns the power of the exponential expression.

```php
$pow = pow(0, 0);   // $pow = 1;
$pow = pow(-1, 20); // $pow = 1;
$pow = pow(2, 8);   // $pow = 256;
```

### rad2deg

> Converts the radian number to the equivalent number in degrees.

```php
$rad2deg = rad2deg(0.5235987755983); // $rad2deg = 30;
$rad2deg = rad2deg(1.5707963267949); // $rad2deg = 90;
$rad2deg = rad2deg(3.1415926535898); // $rad2deg = 180;
```

### rand

> Generate a random integer.

```php
$rand = rand();      // $rand = 0 ~ getrandmax();
$rand = rand(5, 15); // $rand = 5 ~ 15;
```

### round

> Rounds a float.

```php
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

### sin

> Returns the sine of the variable.

```php
$sin = sin(-1); // $sin = -0.8414709848079;
$sin = sin(0);  // $sin = 0;
$sin = sin(1);  // $sin = 0.8414709848079;
```

### sinh

> Returns the hyperbolic sine of the variable.

```php
$sinh = sinh(-1); // $sinh = -1.1752011936438;
$sinh = sinh(0);  // $sinh = 0;
$sinh = sinh(1);  // $sinh = 1.1752011936438;
```

### sqrt

> Returns the square root of the variable.

```php
$sqrt = sqrt(8);  // $sqrt = 2.8284271247462;
$sqrt = sqrt(9);  // $sqrt = 3;
$sqrt = sqrt(10); // $sqrt = 3.1622776601684;
```

### srand

> Sowing a random number generator seed.

```php
srand(intval(microtime(true)  * 10000));
```

### tan

> Returns the tangent of the variable.

```php
$tan = tan(-1); // $tan = -1.5574077246549;
$tan = tan(0);  // $tan = 0;
$tan = tan(1);  // $tan = 1.5574077246549;
```

### tanh

> Returns the hyperbolic tangent of the variable.

```php
$tanh = tanh(-1); // $tanh = -0.76159415595576;
$tanh = tanh(0);  // $tanh = 0;
$tanh = tanh(1);  // $tanh = 0.76159415595576;
```



[build-image]: https://raw.githubusercontent.com/kuriv/kuriv.github.io/master/.cloud/kuriv.github.io/b0979b5893ae07e68ffb8edea2fdce8c.svg?sanitize=true
[build-url]: https://github.com/kuriv/kuriv.github.io