<?php
/**
 * Created by PhpStorm.
 * User: suzilong
 * Date: 2017/6/18
 * Time: 下午5:08
 */
namespace App\Http\Controllers;

use App\Student;

class StudentController extends Controller
{
    //学生列表页

    public function index () {

        $students = Student::get();

        return view('student.index',[
            'students' => $students
        ]);
    }
}