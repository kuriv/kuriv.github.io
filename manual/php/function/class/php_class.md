# Class Functions

> see [https://secure.php.net/manual/en/ref.classobj.php](https://secure.php.net/manual/en/ref.classobj.php) for more information.

[![build][build-image]][build-url]

## Table of contents

* [class_alias](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#class_alias) - Creates an alias for a class.
* [class_exists](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#class_exists) - Checks if the class has been defined.
* [get_called_class](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#get_called_class) - The "Late Static Binding" class name.
* [get_class_methods](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#get_class_methods) - Gets the class methods names.
* [get_class_vars](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#get_class_vars) - Get the default properties of the class.
* [get_class](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#get_class) - Returns the name of the class of an object.
* [get_declared_classes](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#get_declared_classes) - Returns an array with the name of the defined classes.
* [get_declared_interfaces](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#get_declared_interfaces) - Returns an array of all declared interfaces.
* [get_declared_traits](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#get_declared_traits) - Returns an array of all declared traits.
* [get_object_vars](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#get_object_vars) - Gets the properties of the given object.
* [get_parent_class](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#get_parent_class) - Retrieves the parent class name for object or class.
* [interface_exists](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#interface_exists) - Checks if the interface has been defined.
* [is_a](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#is_a) - Check if this object is a subclass of this class or has this class.
* [is_subclass_of](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#is_subclass_of) - Check if this object is a subclass of this class.
* [method_exists](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#method_exists) - Checks if the class method exists.
* [property_exists](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#property_exists) - Checks if the object or class has a property.
* [trait_exists](https://github.com/kuriv/kuriv.github.io/blob/master/manual/php/function/class/php_class.md#trait_exists) - Checks if the trait exists.

### class_alias

> Creates an alias for a class.

```php
$class_alias = class_alias('\Manual\ClassA', '\Manual\ClassAlias'); // $class_alias = true;
$classAlias = new \Manual\ClassAlias;

$class_alias = $classA == $classAlias;                              // $class_alias = true;
$class_alias = $classA === $classAlias;                             // $class_alias = false;
$class_alias = $classA instanceof \Manual\ClassA;                   // $class_alias = true;
$class_alias = $classA instanceof \Manual\classAlias;               // $class_alias = true;
$class_alias = $classAlias instanceof \Manual\ClassA;               // $class_alias = true;
$class_alias = $classAlias instanceof \Manual\classAlias;           // $class_alias = true;
```

### class_exists

> Checks if the class has been defined.

```php
$class_exists = class_exists('stdClass');       // $class_exists = true;
$class_exists = class_exists('ClassA');         // $class_exists = false;
$class_exists = class_exists('\Manual\ClassA'); // $class_exists = true;
```

### get_called_class

> The "Late Static Binding" class name.

```php
$get_called_class = $classA::getCalledClass(); // $get_called_class = 'Manual\ClassA';
$get_called_class = $classA::getStaticClass(); // $get_called_class = 'Manual\ClassA';
$get_called_class = $classB::getCalledClass(); // $get_called_class = 'Manual\ClassB';
$get_called_class = $classB::getStaticClass(); // $get_called_class = 'Manual\ClassB';
```

### get_class_methods

> Gets the class methods names.

```php
$get_class_methods = get_class_methods('\Manual\ClassA'); // $get_class_methods = [0 => 'getCalledClass', 1 => 'getStaticClass', 2 => 'getClassMethods', 3 => 'publicFunc', 4 => 'getclassVars', 5 => 'getClass', 6 => 'getParentClass'];
$get_class_methods = get_class_methods('\Manual\ClassB'); // $get_class_methods = [0 => 'getCalledClass', 1 => 'getStaticClass', 2 => 'getClassMethods', 3 => 'publicFunc', 4 => 'getclassVars', 5 => 'getClass', 6 => 'getParentClass'];
$get_class_methods = get_class_methods($classA);          // $get_class_methods = [0 => 'getCalledClass', 1 => 'getStaticClass', 2 => 'getClassMethods', 3 => 'publicFunc', 4 => 'getclassVars', 5 => 'getClass', 6 => 'getParentClass'];
$get_class_methods = get_class_methods($classB);          // $get_class_methods = [0 => 'getCalledClass', 1 => 'getStaticClass', 2 => 'getClassMethods', 3 => 'publicFunc', 4 => 'getclassVars', 5 => 'getClass', 6 => 'getParentClass'];
$get_class_methods = $classA::getClassMethods();          // $get_class_methods = [0 => 'getCalledClass', 1 => 'getStaticClass', 2 => 'getClassMethods', 3 => 'publicFunc', 4 => 'protectedFunc', 5 => 'privateFunc',  6 => 'getclassVars', 7 => 'getClass', 8 => 'getParentClass'];
$get_class_methods = $classB::getClassMethods();          // $get_class_methods = [0 => 'getCalledClass', 1 => 'getStaticClass', 2 => 'getClassMethods', 3 => 'publicFunc', 4 => 'protectedFunc', 5 => 'privateFunc',  6 => 'getclassVars', 7 => 'getClass', 8 => 'getParentClass'];
```

### get_class_vars

> Get the default properties of the class.

```php
$get_class_vars = get_class_vars('\Manual\ClassA'); // $get_class_vars = ['public' => 'cat'];
$get_class_vars = get_class_vars('\Manual\ClassB'); // $get_class_vars = ['public' => 'cat'];
$get_class_vars = $classA::getclassVars();          // $get_class_vars = ['public' => 'cat', 'protected' => 'dog', 'private' => null];
$get_class_vars = $classB::getclassVars();          // $get_class_vars = ['public' => 'cat', 'protected' => 'dog', 'private' => null];
```

### get_class

> Returns the name of the class of an object.

```php
$get_class = get_class($classA);  // $get_class = 'Manual\ClassA';
$get_class = get_class($classB);  // $get_class = 'Manual\ClassB';
$get_class = $classA->getClass(); // $get_class = 'Manual\ClassA';
$get_class = $classB->getClass(); // $get_class = 'Manual\ClassB';
```

### get_declared_classes

> Returns an array with the name of the defined classes.

```php
$get_declared_classes = get_declared_classes();
```

### get_declared_interfaces

> Returns an array of all declared interfaces.

```php
$get_declared_interfaces = get_declared_interfaces();
```

### get_declared_traits

> Returns an array of all declared traits.

```php
$get_declared_traits = get_declared_traits();
```

### get_object_vars

> Gets the properties of the given object.

```php
$get_object_vars = get_object_vars(new stdClass); // $get_object_vars = [];
$get_object_vars = get_object_vars($classA);      // $get_object_vars = ['public' => 'cat'];
$get_object_vars = get_object_vars($classB);      // $get_object_vars = ['public' => 'cat'];
```

### get_parent_class

> Retrieves the parent class name for object or class.

```php
$get_parent_class = get_parent_class('ClassA');         // $get_parent_class = false;
$get_parent_class = get_parent_class('\Manual\ClassA'); // $get_parent_class = false;
$get_parent_class = get_parent_class('\Manual\ClassB'); // $get_parent_class = 'Manual\ClassA';
$get_parent_class = get_parent_class($classA);          // $get_parent_class = false;
$get_parent_class = get_parent_class($classB);          // $get_parent_class = 'Manual\ClassA';
$get_parent_class = $classA::getParentClass();          // $get_parent_class = false;
$get_parent_class = $classB::getParentClass();          // $get_parent_class = 'Manual\ClassA';
```

### interface_exists

> Checks if the interface has been defined.

```php
$interface_exists = interface_exists('InterfaceA');         // $interface_exists = false;
$interface_exists = interface_exists('\Manual\InterfaceA'); // $interface_exists = true;
$interface_exists = interface_exists('\Manual\InterfaceB'); // $interface_exists = true;
```

### is_a

> Check if this object is a subclass of this class or has this class.

```php
$is_a = is_a('ClassB', 'ClassA');                       // $is_a = false;
$is_a = is_a('\Manual\ClassB', '\Manual\ClassA');       // $is_a = false;
$is_a = is_a('\Manual\ClassB', '\Manual\ClassA', true); // $is_a = true;
$is_a = is_a($classB, 'ClassA');                        // $is_a = false;
$is_a = is_a($classB, '\Manual\ClassA');                // $is_a = true;
$is_a = is_a($classB, '\Manual\ClassB');                // $is_a = true;
$is_a = $classB instanceof \Manual\ClassA;              // $is_a = true;
$is_a = $classB instanceof \Manual\ClassB;              // $is_a = true;
```

### is_subclass_of

> Check if this object is a subclass of this class.

```php
$is_subclass_of = is_subclass_of('ClassB', 'ClassA');                        // $is_subclass_of = false;
$is_subclass_of = is_subclass_of('\Manual\ClassB', '\Manual\ClassA');        // $is_subclass_of = true;
$is_subclass_of = is_subclass_of('\Manual\ClassB', '\Manual\ClassA', false); // $is_subclass_of = false;
$is_subclass_of = is_subclass_of($classB, 'ClassA');                         // $is_subclass_of = false;
$is_subclass_of = is_subclass_of($classB, '\Manual\ClassA');                 // $is_subclass_of = true;
$is_subclass_of = is_subclass_of($classB, '\Manual\ClassB');                 // $is_subclass_of = false;
```

### method_exists

> Checks if the class method exists.

```php
$method_exists = method_exists('ClassA', 'publicFunc');          // $method_exists = false;
$method_exists = method_exists('\Manual\ClassA', 'publicFunc');  // $method_exists = true;
$method_exists = method_exists('\Manual\ClassA', 'privateFunc'); // $method_exists = true;
$method_exists = method_exists('\Manual\ClassB', 'publicFunc');  // $method_exists = true;
$method_exists = method_exists('\Manual\ClassB', 'privateFunc'); // $method_exists = true;
$method_exists = method_exists($classA, 'publicFunc');           // $method_exists = true;
$method_exists = method_exists($classA, 'privateFunc');          // $method_exists = true;
$method_exists = method_exists($classB, 'publicFunc');           // $method_exists = true;
$method_exists = method_exists($classB, 'privateFunc');          // $method_exists = true;
```

### property_exists

> Checks if the object or class has a property.

```php
$property_exists = property_exists('ClassA', 'public');          // $property_exists = false;
$property_exists = property_exists('\Manual\ClassA', 'public');  // $property_exists = true;
$property_exists = property_exists('\Manual\ClassA', 'private'); // $property_exists = true;
$property_exists = property_exists('\Manual\ClassB', 'public');  // $property_exists = true;
$property_exists = property_exists('\Manual\ClassB', 'private'); // $property_exists = false;
$property_exists = property_exists($classA, 'public');           // $property_exists = true;
$property_exists = property_exists($classA, 'private');          // $property_exists = true;
$property_exists = property_exists($classB, 'public');           // $property_exists = true;
$property_exists = property_exists($classB, 'private');          // $property_exists = false;
```

### trait_exists

> Checks if the trait exists.

```php
$trait_exists = trait_exists('TraitA');         // $trait_exists = false;
$trait_exists = trait_exists('\Manual\TraitA'); // $trait_exists = true;
$trait_exists = trait_exists('\Manual\TraitB'); // $trait_exists = true;
```



[build-image]: https://raw.githubusercontent.com/kuriv/kuriv.github.io/master/.cloud/kuriv.github.io/b0979b5893ae07e68ffb8edea2fdce8c.svg?sanitize=true
[build-url]: https://github.com/kuriv/kuriv.github.io