<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessCheckoutController extends Controller
{
    public function index()
    {
        return view('pages.success');
    }
}
