<?php

namespace App\Http\Controllers;

ini_set('phpcrypter.decrypt', 1);

class HelloWorldBase extends Controller
{
    public function __invoke()
    {
        return (new HelloWorld)();
    }
}
