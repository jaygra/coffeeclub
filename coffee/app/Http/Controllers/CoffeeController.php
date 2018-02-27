<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    //
    public function showindex()
    {
        return view(index.blade.php);
    }
}
