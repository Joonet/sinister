<?php
/**
 * Created by PhpStorm.
 * User: Jo
 * Date: 9/2/2017
 * Time: 10:23
 */
namespace app\admin\controller;

use think\Controller;
use think\Request;


class index4 extends Controller
{
    public function hello()
    {
        $request = Request::instance();
        echo $request->url();
        echo "<br/>";
        echo $this->request->url();
        echo "<br/>";
        echo $this->request->bind('user_name', '张三');

        echo "<br/>";
        echo $this->request->user_name;
        echo "<br/>";
        //helper
        echo request()->url();
        echo "<br/>";
        print_r($request->param());
        echo "<br/>";
        echo $request->param('name');
        echo "<br/>";
        print_r(input());
        echo "<br/>";
        echo input('en_name');
        echo "<br/>";

        echo $request->param('en_name','JaNE','strtolower');
        echo "<br/>";
        /*   request   */
        echo "get参数：";
        print_r($request->get());
        echo "<br/>";
        echo 'get参数：name：';
        echo $request->get('name');
        echo "<br/>";
        echo 'Post参数：';
        print_r($request->post());
        echo $request->post('name');
        echo "<br/>";
        echo 'cookie:';
        print_r($request->cookie());
        echo "<br/>";
        echo 'file:';
        print_r($request->file('image'));
        echo "<br/>";

        /**     input       */
        print_r(input('get.'));
        print_r(input('get.name'));
        echo "<br/>";
        print_r(input('cookie.'));

        echo "<br/>";
        echo $request->method();
        echo $request->ip();
        echo '是否是Ajax请求：'.($request->isAjax()?'是':'否');
        echo $request->domain();
        echo $request->baseFile();
        echo "<br/>";
        echo $request->url(true);
        echo $request->ext();
        echo "<br/>";
        echo $request->pathinfo();
        //param info
//        echo $request->query();
        echo "<br/>";
        echo $request->baseUrl();
        echo "<br/>";
        echo $request->module();
        echo $request->controller();
        echo $request->action();

    }

    public function hello2()
    {
        $data = array('name' => 'Jo', 'age' => 33);
        return json($data, 201);
//        return json_encode($data);
//        return xml($data);
//        $this->assign('name', '渲染 模版');
//        return $this->fetch('index/index2');
    }

    public function hello3()
    {
//        $this->success('正确页面跳转','hello2');
//        $this->error('页面提示错误跳转','admin/index/index2');
        $this->redirect('http://www.jd.com');
    }
}