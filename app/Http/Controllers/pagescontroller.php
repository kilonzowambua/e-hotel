<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index()
    {
    return views(welcome);
    }

    public function rooms1()
    {
    return views(rooms);
    }
    public function rooms() {
    return views(rooms);
     }
}
