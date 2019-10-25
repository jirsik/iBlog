<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
   
    public function welcome() {
        return view('pages.welcome');
   }
}
