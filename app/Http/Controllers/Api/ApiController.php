<?php

namespace App\Http\Controllers\Api;

//use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

//use App\Http\Model;

class ApiController extends Controller
{

    private $RecruitmentModel;

    public function __construct()
    {
        //      $this->RecruitmentModel = new Model\RecruitmentModel();
    }

    // 求职应聘
    public function obRecruitment(Request $request)
    {
        $this->validate($request , [
            'name2' => 'required' , // 名字
            'sex' => 'required' ,  // 性别
            'school' => 'required' ,// 学校
            'major' => 'required' ,// 专业
            'age2' => 'required' ,// 年龄
            'tel2' => 'required' ,// 联系方式
            'hobby' => 'required'  // 喜好
        ]);
    }

    /**
     * 加盟
     * @param Request $request
     * return json array
     */
    public function joinUs(Request $request)
    {
        $this->validate($request , [
            'name' => 'required' , // 名字
            'sex' => 'required' ,  // 性别
            'age' => 'required' ,// 年龄
            'tel' => 'required' ,// 电话号码
            'scope' => 'required' ,// 服务范围
            'hobby' => 'required' ,// 兴趣爱好
        ]);

        // 添加数据库
        $return = $this->RecruitmentModel->Insert(array (
            'recruitment_name' => $request->input('name') , 'recruitment_sex' => $request->input('sex') , 'recruitment_age' => $request->input('age') , 'recruitment_tel' => $request->input('tel') , 'recruitment_scope' => $request->input('scope') , 'recruitment_hobby' => $request->input('hobby') , 'recruitment_time' => time() ,
        ));
        if($return){
            echo json_encode(array ("info" => 0 , "message" => "添加成功"));
        } else {
            echo json_decode(array ('info' => '1' , 'message' => '添加失败'));
        }
    }

    public function admin_login()
    {

    }

    /**
     * 修改浏览次数
     * @param Request $request
     */
    public function updateBrowseNumber(Request $request)
    {
        $num = intval($request->input("new_bro_num")) + 1;
        $return = DB::table('news')->where('new_id' , '=' , intval($request->input("id")))->update(array ('new_bro_num' => $num));
        echo $return;
    }


}
