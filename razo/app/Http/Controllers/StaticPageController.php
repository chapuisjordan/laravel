<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function static()
    {
        $randomNumber = rand(1, 10);
        var_dump($randomNumber);
        return view('index', [
            'randomNumber' => $randomNumber,
        ]);
    }
}
