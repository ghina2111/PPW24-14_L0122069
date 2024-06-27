<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // app/Http/Controllers/HomeController.php

public function __construct()
{
    $this->middleware('auth'); // Pastikan hanya pengguna yang terautentikasi yang bisa mengakses HomeController
}


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
