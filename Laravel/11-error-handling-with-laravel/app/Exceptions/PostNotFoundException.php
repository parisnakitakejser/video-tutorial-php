<?php

namespace App\Exceptions;

use Exception;

class PostNotFoundException extends Exception
{
    function report() {}

    function render() {
        return view('errors.post-not-found');
    }
}
