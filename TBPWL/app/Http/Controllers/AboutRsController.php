<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//redirect
use Illuminate\Http\RedirectResponse;
//database
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AboutRsController extends Controller
{
    public function about_rs(){
        return view('admin.about_rs');
    }

}