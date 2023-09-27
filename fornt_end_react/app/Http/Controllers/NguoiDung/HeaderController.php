<?php

namespace App\Http\Controllers\NguoiDung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HeaderController extends Controller
{
    public function index()
    {
        return view('layouts.nguoidung_header'); 
    }
}
