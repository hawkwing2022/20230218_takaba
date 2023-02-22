<?php

namespace App\Http\Controllers;

use App\Models\Laraappli;
use Illuminate\Http\Request;

class LaraappliController extends Controller
{
    public function index(Request $Request)
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $form = $request -> all();
        Laraappli::create($form);
        return redirect('/thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
