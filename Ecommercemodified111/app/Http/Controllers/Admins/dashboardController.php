<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;





class dashboardController 
{
    public function index()
    {
        return view('admin.dashboard');
    }

}
