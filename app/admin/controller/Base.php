<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\facade\Db;
use think\facade\Cache;
use think\facade\Env;
use think\facade\Request;

class Base extends \app\BaseController
{
  use \think\admin\traits\admin\Base;
}
