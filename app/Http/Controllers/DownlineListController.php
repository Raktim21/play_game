<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownlineListController extends Controller
{
    public function index()
    {
        return view('backend.downlist.index');
    }
}
