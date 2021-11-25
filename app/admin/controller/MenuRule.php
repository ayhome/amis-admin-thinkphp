<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\admin\PHPTree;
use think\Request;
use think\facade\Db;
class MenuRule extends Base
{
  use \think\admin\traits\admin\MenuRule;
  public function getModel()
  {
    return new \think\admin\model\MenuRule();
  }

}
