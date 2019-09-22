<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
    	return view('admins.products.all');
    }

    public function create() {
    	return view('admins.products.new');
    }
}
