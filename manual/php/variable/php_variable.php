<?php

declare(strict_types = 1);

/*
|----------------------------------------------------------------------
| boolval
|----------------------------------------------------------------------
|
| Get the boolean value of the variable.
|
*/

$boolval = boolval(-10);          // $boolval = true;
$boolval = boolval(0);            // $boolval = false;
$boolval = boolval(0.0);          // $boolval = false;
$boolval = boolval(0.0001);       // $boolval = true;
$boolval = boolval('');           // $boolval = false;
$boolval = boolval('false');      // $boolval = true;
$boolval = boolval('0');          // $boolval = false;
$boolval = boolval('1');          // $boolval = true;
$boolval = boolval([]);           // $boolval = false;
$boolval = boolval([0, 1, 2]);    // $boolval = true;
$boolval = boolval(new stdClass); // $boolval = true;

/*
|----------------------------------------------------------------------
| doubleval
|----------------------------------------------------------------------
|
| Get the float value of the variable.
|
*/

$doubleval = doubleval(-0.0001);        // $doubleval = -0.0001;
$doubleval = doubleval('abc122.34343'); // $doubleval = 0;
$doubleval = doubleval('122.34343abc'); // $doubleval = 122.34343;

/*
|----------------------------------------------------------------------
| empty
|----------------------------------------------------------------------
|
| Determine whether a variable is empty.
|
*/

$empty = empty(-10);          // $empty = false;
$empty = empty(0);            // $empty = true;
$empty = empty(0.0);          // $empty = true;
$empty = empty(0.0001);       // $empty = false;
$empty = empty('');           // $empty = true;
$empty = empty('false');      // $empty = false;
$empty = empty('0');          // $empty = true;
$empty = empty('1');          // $empty = false;
$empty = empty([]);           // $empty = true;
$empty = empty([0, 1, 2]);    // $empty = false;
$empty = empty(new stdClass); // $empty = false;

/*
|----------------------------------------------------------------------
| floatval
|----------------------------------------------------------------------
|
| Get the float value of the variable.
|
*/

$floatval = floatval(-0.0001);        // $floatval = -0.0001;
$floatval = floatval('abc122.34343'); // $floatval = 0;
$floatval = floatval('122.34343abc'); // $floatval = 122.34343;

/*
|----------------------------------------------------------------------
| get_defined_vars
|----------------------------------------------------------------------
|
| Returns an array of all defined variables.
|
*/

$get_defined_vars = get_defined_vars();

/*
|----------------------------------------------------------------------
| get_resource_type
|----------------------------------------------------------------------
|
| Returns the resource type.
|
*/

$get_resource_type = get_resource_type(tmpfile()); // $get_resource_type = 'stream';

/*
|----------------------------------------------------------------------
| intval
|----------------------------------------------------------------------
|
| Get the integer value of the variable.
|
*/

$intval = intval(-42);       // $intval = -42;
$intval = intval(42);        // $intval = 42;
$intval = intval(0.0001);    // $intval = 0;
$intval = intval(4.2);       // $intval = 4;
$intval = intval('+42');     // $intval = 42;
$intval = intval('-42');     // $intval = -42;
$intval = intval(1e7);       // $intval = 10000000;
$intval = intval('1e7');     // $intval = 1;
$intval = intval(0b11);      // $intval = 3;
$intval = intval('0b11');    // $intval = 0;
$intval = intval(042);       // $intval = 34;
$intval = intval('042');     // $intval = 42;
$intval = intval(0x99);      // $intval = 153;
$intval = intval('0x99');    // $intval = 0;
$intval = intval([]);        // $intval = 0;
$intval = intval([0, 1, 2]); // $intval = 1;
$intval = intval(42, 8);     // $intval = 42;
$intval = intval('42', 8);   // $intval = 34;

/*
|----------------------------------------------------------------------
| is_array
|----------------------------------------------------------------------
|
| Finds whether a variable is an array.
|
*/

$is_array = is_array(0);                            // $is_array = false;
$is_array = is_array([0, 1, 2]);                    // $is_array = true;
$is_array = is_array(['a' => 'cat', 'b' => 'dog']); // $is_array = true;

/*
|----------------------------------------------------------------------
| is_bool
|----------------------------------------------------------------------
|
| Finds out whether a variable is a boolean.
|
*/

$is_bool = is_bool(0);     // $is_bool = false;
$is_bool = is_bool(true);  // $is_bool = true;
$is_bool = is_bool(false); // $is_bool = true;

/*
|----------------------------------------------------------------------
| is_callable
|----------------------------------------------------------------------
|
| Verify that the contents of a variable can be called as a function.
|
*/

function is_callable_func()
{
}

$is_callable = is_callable('is_callable_func'); // $is_callable = true;

/*
|----------------------------------------------------------------------
| is_countable
|----------------------------------------------------------------------
|
| Verify that the contents of a variable is a countable value.
|
*/

$is_countable = is_countable(0);            // $is_countable = false;
$is_countable = is_countable([]);           // $is_countable = true;
$is_countable = is_countable(new stdClass); // $is_countable = false;

/*
|----------------------------------------------------------------------
| is_double
|----------------------------------------------------------------------
|
| Finds whether the type of a variable is float.
|
*/

$is_double = is_double(0);     // $is_double = false;
$is_double = is_double(27.25); // $is_double = true;
$is_double = is_double(1e7);   // $is_double = true;

/*
|----------------------------------------------------------------------
| is_float
|----------------------------------------------------------------------
|
| Finds whether the type of a variable is float.
|
*/

$is_float = is_float(0);     // $is_float = false;
$is_float = is_float(27.25); // $is_float = true;
$is_float = is_float(1e7);   // $is_float = true;

/*
|----------------------------------------------------------------------
| is_int
|----------------------------------------------------------------------
|
| Find whether the type of a variable is integer.
|
*/

$is_int = is_int(23);   // $is_int = true;
$is_int = is_int('23'); // $is_int = false;
$is_int = is_int(23.5); // $is_int = false;

/*
|----------------------------------------------------------------------
| is_integer
|----------------------------------------------------------------------
|
| Find whether the type of a variable is integer.
|
*/

$is_integer = is_integer(23);   // $is_integer = true;
$is_integer = is_integer('23'); // $is_integer = false;
$is_integer = is_integer(23.5); // $is_integer = false;


/*
|----------------------------------------------------------------------
| is_iterable
|----------------------------------------------------------------------
|
| Verify that the contents of a variable is an iterable value.
|
*/

$is_iterable = is_iterable(0);            // $is_iterable = false;
$is_iterable = is_iterable([0, 1, 2]);    // $is_iterable = true;
$is_iterable = is_iterable(new stdClass); // $is_iterable = false;

/*
|----------------------------------------------------------------------
| is_long
|----------------------------------------------------------------------
|
| Find whether the type of a variable is integer.
|
*/

$is_long = is_long(23);   // $is_long = true;
$is_long = is_long('23'); // $is_long = false;
$is_long = is_long(23.5); // $is_long = false;

/*
|----------------------------------------------------------------------
| is_null
|----------------------------------------------------------------------
|
| Finds whether a variable is null.
|
*/

$is_null = is_null(null); // $is_null = true;
$is_null = is_null('');   // $is_null = false;
$is_null = is_null(0);    // $is_null = false;

/*
|----------------------------------------------------------------------
| is_numeric
|----------------------------------------------------------------------
|
| Finds whether a variable is a number or a numeric string.
|
*/

$is_numeric = is_numeric(3);     // $is_numeric = true;
$is_numeric = is_numeric('3');   // $is_numeric = true;
$is_numeric = is_numeric('1.2'); // $is_numeric = true;

/*
|----------------------------------------------------------------------
| is_object
|----------------------------------------------------------------------
|
| Finds whether a variable is an object.
|
*/

$is_object = is_object(null);         // $is_object = false;
$is_object = is_object([]);           // $is_object = false;
$is_object = is_object(new stdClass); // $is_object = true;

/*
|----------------------------------------------------------------------
| is_real
|----------------------------------------------------------------------
|
| Finds whether the type of a variable is float.
|
*/

$is_real = is_real(0);     // $is_real = false;
$is_real = is_real(27.25); // $is_real = true;
$is_real = is_real(1e7);   // $is_real = true;

/*
|----------------------------------------------------------------------
| is_resource
|----------------------------------------------------------------------
|
| Finds whether a variable is a resource.
|
*/

$is_resource = is_resource(null);         // $is_resource = false;
$is_resource = is_resource(tmpfile());    // $is_resource = true;
$is_resource = is_resource(new stdClass); // $is_resource = false;

/*
|----------------------------------------------------------------------
| is_scalar
|----------------------------------------------------------------------
|
| Finds whether a variable is a scalar.
|
*/

$is_scalar = is_scalar(0);            // $is_scalar = true;
$is_scalar = is_scalar(0.1);          // $is_scalar = true;
$is_scalar = is_scalar('0');          // $is_scalar = true;
$is_scalar = is_scalar(false);        // $is_scalar = true;
$is_scalar = is_scalar([0, 1, 2]);    // $is_scalar = false;
$is_scalar = is_scalar(new stdClass); // $is_scalar = false;
$is_scalar = is_scalar(tmpfile());    // $is_scalar = false;

/*
|----------------------------------------------------------------------
| is_string
|----------------------------------------------------------------------
|
| Find whether the type of a variable is string.
|
*/

$is_string = is_string(0);   // $is_string = false;
$is_string = is_string('');  // $is_string = true;
$is_string = is_string('0'); // $is_string = true;

/*
|----------------------------------------------------------------------
| isset
|----------------------------------------------------------------------
|
| Determine if a variable is set and is not null.
|
*/

$isset = isset($variable);                // $isset = false;

$variable = null;
$isset = isset($variable);                // $isset = false;

$variable = '';
$isset = isset($variable);                // $isset = true;

$variable = 0;
$isset = isset($variable);                // $isset = true;

$variable2 = null;
$isset = isset($variable1, $variable2);   // $isset = false;

$variable3 = '';
$variable4 = 0;
$isset = isset($variable3, $variable4);   // $isset = true;

/*
|----------------------------------------------------------------------
| print_r
|----------------------------------------------------------------------
|
| Prints human-readable information about a variable.
|
*/

print_r([0, 1, 2]);
$print_r = print_r([0, 1, 2], true);

/*
|----------------------------------------------------------------------
| serialize
|----------------------------------------------------------------------
|
| Generates a storable representation of a value.
|
*/

$serialize = serialize(0);            // $serialize = 'i:0;';
$serialize = serialize([0, 1, 2]);    // $serialize = 'a:3:{i:0;i:0;i:1;i:1;i:2;i:2;}';
$serialize = serialize(new stdClass); // $serialize = 'O:8:"stdClass":0:{}';

/*
|----------------------------------------------------------------------
| settype
|----------------------------------------------------------------------
|
| Set the type of the variable.
|
*/

$variable = 0;
settype($variable, 'string');  // $variable = '0';

$variable = true;
settype($variable, 'string');  // $variable = '1';

$variable = '122.34343abc';
settype($variable, 'integer'); // $variable = 122;

$variable = 'abc122.34343';
settype($variable, 'integer'); // $variable = 0;

$variable = 'true';
settype($variable, 'bool');    // $variable = true;

$variable = 'false';
settype($variable, 'bool');    // $variable = true;

/*
|----------------------------------------------------------------------
| strval
|----------------------------------------------------------------------
|
| Get string value of the variable.
|
*/

$strval = strval(-10);    // $strval = '-10';
$strval = strval(0);      // $strval = '0';
$strval = strval(0.0001); // $strval = '0.0001';

/*
|----------------------------------------------------------------------
| unserialize
|----------------------------------------------------------------------
|
| Creates a PHP value from a stored representation.
|
*/

$unserialize = unserialize('i:0;');                           // $unserialize = 0;
$unserialize = unserialize('a:3:{i:0;i:0;i:1;i:1;i:2;i:2;}'); // $unserialize = [0, 1, 2];
$unserialize = unserialize('O:8:"stdClass":0:{}');            // $unserialize = new stdClass;

/*
|----------------------------------------------------------------------
| unset
|----------------------------------------------------------------------
|
| Unset a given variable.
|
*/

$variable = 0;
unset($variable);              // $variable is undefined.

$variable = [0, 1, 2];
unset($variable[0]);           // $variable = [1 => 1, 2 => 2];

$variable = new stdClass;
unset($variable);              // $variable is undefined.

$variable1 = 0;
$variable2 = [0, 1, 2];
unset($variable1, $variable2); // $variable1 and $variable2 is undefined.

/*
|----------------------------------------------------------------------
| var_dump
|----------------------------------------------------------------------
|
| Dumps information about a variable.
|
*/

var_dump(0);
var_dump([0, 1, 2]);
var_dump(0, [0, 1, 2], new stdClass);

/*
|----------------------------------------------------------------------
| var_export
|----------------------------------------------------------------------
|
| Outputs or returns a parsable string representation of the variable.
|
*/

var_export([0, 1, 2]);
$var_export = var_export([0, 1, 2], true);
