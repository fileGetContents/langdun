<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    private $file = "Admin.product-";
    private $product;

    public function __construct()
    {
    }

    public function add()
    {
        return view($this->file . "add");
    }


    public function brand()
    {
        return view($this->file . "brand");
    }

    public function cateGory()
    {
        return view($this->file . "category");
    }


    public function cateGoryAdd()
    {
        return view($this->file . "category-add");
    }


    public function lists(Request $request)
    {

        return view($this->file . "list");
    }


}
