<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function auth()
    {
        $authHeader = \request()->header('Authorization');
    }
}
