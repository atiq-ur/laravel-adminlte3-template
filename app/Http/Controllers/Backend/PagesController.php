<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * this function redirect admin user to home page
     * index page
     * @return view
     */
    public function index() {
        return view('backend.pages.index');
    }
}
