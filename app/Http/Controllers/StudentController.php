<?php
/**
 * Created by PhpStorm.
 * User: suzilong
 * Date: 2017/6/18
 * Time: 下午5:08
 */
namespace App\Http\Controllers;


use App\Student;
use Illuminate\Support\Facades\Cache;

class StudentController extends Controller
{
    //学生列表页

    public function index () {

        $students = Student::get();

//        foreach ($students as $student)
//        {
//            echo '                       你好';
//            var_dump($student);
//        }
//
//
//        die();
        return view('student.index',[
            'students' => $students
        ]);
    }

    //缓存
    public function cache1() {
        //缓存10分钟
        Cache::put('key1', 'val1', '10');
    }

    public  function cache2() {
       $val = Cache::get('key1');
        var_dump($val);
    }
}