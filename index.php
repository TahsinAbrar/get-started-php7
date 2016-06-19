<?php

require 'vendor/autoload.php';

/*
 * before PHP7
 * import was like this:
    use App\Person;
    use App\Animal;
 */

/*
 * now, with PHP7
 * we can use Grouped import
 */
use App\{Person, Animal};

// this will return new Object
var_dump(new Animal);
var_dump(new Person);
