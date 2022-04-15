<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testAPI extends Controller
{
    function index()
    {
        return DB::select("SELECT * FROM employees;");
    }
}
