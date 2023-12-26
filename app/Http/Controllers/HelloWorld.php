<?php

namespace App\Http\Controllers;

use Native\Laravel\Facades\Notification;

class HelloWorld extends Controller
{
    public function __invoke()
    {
        Notification::title('Hello, World!')
            ->message('This notification was sent from an *unencrypted* controller.')
            ->show();

        return 'Hello, World!';
    }
}
