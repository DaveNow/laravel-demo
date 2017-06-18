<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';

    //自动维护时间差
    public $timestamps = true;

    //获取和更新时的格式
    protected function getDateFormat()
    {
        return time(); // TODO: Change the autogenerated stub
    }

    protected function asDateTime($value)
    {
        return $value; // TODO: Change the autogenerated stub
    }


}