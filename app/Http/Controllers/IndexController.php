<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() 
    {
        dd(Listings::all());
        return inertia('Index/Index', ['message' => 'Hello this is data from controller!']);
    }

    public function show() 
    {
        return inertia('Index/Show');
    }
    
}
