<?php
namespace App\Http\Controllers\Web;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    private $file = "web.";

    public function index(Request $request)
    {
        // 获取新闻详情
        $new = $this->getNewsFirst(array ('new_id' => $request->id));
        return view($this->file . "news")->with([
            'new' => $new
        ]);
    }

    /**
     * 获取新闻信息
     * @param $array
     * @return mixed
     */
    public function getNewsFirst($array)
    {
        return DB::table('news')->where($array)->first();
    }
}
