<?php
namespace app\admin\model;

use think\Db;
use think\Model;

class Health extends Model{
    public static function tableName(){
        return "{{%health}}";
    }
}