<?php

namespace app\common\model;

use think\Model;

class Admin extends Model
{
    //定义 管理员-档案的关联
    public function profile()
    {
        //第二个参数 默认是admin_id;第三个参数默认是id
        //return $this->hasOne('Profile','uid','id');
        return $this->hasOne('Profile','uid','id')->bind('idnum');
    }
}
