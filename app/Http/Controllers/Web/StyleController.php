<?php

namespace App\Http\Controllers\Web;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StyleController extends Controller
{

    private $file = "web.";

    public function one()
    {
        return view($this->file . "style_one");
    }


    public function two()
    {

        return view($this->file . "style_two");
    }

    public function three()
    {

        return view($this->file . "style_three");
    }

    public function four()
    {
        return view($this->file . "style_four");
    }

    public function five()
    {
        return view($this->file . "style_five");
    }

    public function six()
    {
        return view($this->file . "style_six");
    }

}
