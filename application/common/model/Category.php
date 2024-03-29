<?php

namespace app\common\model;

use think\Model;

class Category extends Model
{
    //定义分类--品牌关联   一个分类有多个品牌
    public function brands(){
        //hasMany 第二个参数是外键 默认category_id; 第三个参数主键默认id
        return $this->hasMany('Brand','cate_id','id');
    }
}
