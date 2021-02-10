<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class newscontroller extends Controller
{
    //
    public function add()
    {
        return view('ad,om.news.create');
    }
}
