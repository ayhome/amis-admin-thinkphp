<?php

declare(strict_types=1);

namespace app\admin\controller;

class Index extends \think\admin\Controller
{
  public function index()
  {
    return '您好！这是一个[admin]示例应用';
  }
}