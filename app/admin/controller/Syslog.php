<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\admin\PHPTree;
use think\Request;
use think\facade\Db;
class Syslog extends Base
{
  public function getModel()
  {
    return new \think\admin\model\Syslog();
  }

}
