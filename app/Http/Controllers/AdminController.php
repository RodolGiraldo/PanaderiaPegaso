<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index($correo)
    {
        return view('admin.index',$correo);
    }
}
