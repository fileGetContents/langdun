<?php
namespace App\Http\Controllers\Web;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;

class WorkController extends Controller
{
    private $file = "web.";

    public function index()
    {
        return view($this->file . "work");
    }


    public function test(Request $request)
    {
        dump($_FILES);
        dump($request->file("file"));
        dump(Storage::allDirectories("upload"));
//        move_uploaded_file($_FILES['file']['tmp_name'] , "upload/111.png");
        $this->uploadDefFile($_FILES['file']['tmp_name'],"");
        return view("home");
    }

    /**
     * 上传文件
     * @param $tmp_name  string 临时文件
     * @param $new_name  string 名字
     * @param string $dir 文件夹
     * @return bool
     */
    public function uploadDefFile($tmp_name , $new_name , $dir = "upload")
    {
        $dir = Storage::allDirectories($dir);          // 获取目录
        $time = date("Ymd",time());
        $newDir ="upload/".$time; // 新的目录
        if(in_array($newDir , $dir)){
            return move_uploaded_file($tmp_name , $newDir . "/" . $new_name);
        } else {
            // 创建目录
            Storage::makeDirectory($newDir);
            return move_uploaded_file($tmp_name , $newDir . "/" . $new_name);
        }
    }
}
