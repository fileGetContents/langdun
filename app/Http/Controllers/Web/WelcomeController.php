<?php

namespace App\Http\Controllers\Web;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    private  $file = "web.";


    public function index()
    {
        return view($this->file.'index');
    }

}
