<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        // 给模板变量name赋值          
        $this->assign('name', 'thinkphp');
        // 批量赋值          
        $this->assign([
            'name' => 'thinkphp',
            'email' => 'thinkphp@qq.com'
        ]);
        return $this->fetch();
    }
}