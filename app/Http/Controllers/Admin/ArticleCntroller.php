<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ArticleCntroller extends Controller
{
    //
    private $file = "Admin.article-";

    public function add()
    {
        return view($this->file . "add");
    }

    public function lists()
    {
        return view($this->file . "list");
    }

}
