<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

/**
 * php artisan make:controller CheckoutController --invokable
 */
class CheckoutController extends Controller
{
    public function __invoke(Request $request, $token)
    {
        return $this->getUser($token);
    }

    protected function getUser($token)
    {
        return User::find($token);
    }
}
