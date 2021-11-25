<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\facade\Db;
class Dept extends Base
{
  use \think\admin\traits\admin\Dept;
  
  public function append()
  {
    return ['code_txt'];
  }
  public function getModel()
  {
    return new \think\admin\model\Dept();
  }

}
