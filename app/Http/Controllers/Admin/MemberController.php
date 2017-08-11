<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //
    private $file = "Admin.member-";

    public function add()
    {

        return view($this->file . "add");
    }

    public function del()
    {

        return view($this->file . "del");
    }


    public function browse()
    {
        return view($this->file . "record-browse");
    }

    public function download()
    {

        return view($this->file . "record-download");

    }


    public function share()
    {
        return view($this->file . "record-share");
    }

    public function show()
    {
        return view($this->file . "show");
    }


    // 加盟
    public function lists()
    {
        $list = DB::table("job")->paginate(15);
        return view($this->file . "list")->with([
            'list' => $list
        ]);
    }

    // 首页应聘
    public function indexLists()
    {
        $list = DB::table("join")->paginate(15);
        return view($this->file . "indexList")->with([
            'list' => $list ,
        ]);
    }

    // 加入我们应聘
    public function joinLists()
    {
        $list = DB::table("recruitment")->paginate(15);
        return view($this->file . "joinLists")->with([
            'list' => $list
        ]);
    }


}
