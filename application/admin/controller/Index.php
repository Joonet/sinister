<?php
/**
 * Created by PhpStorm.
 * User: Jo
 * Date: 8/2/2017
 * Time: 11:59
 */
namespace app\admin\controller;
use think\Controller;
//use think\Request;
use think\Db;
use app\admin\model\GoodsBrands;

class Index extends Controller
{

    public function index($name = 'Jo', $sex = 'Male')
    {
//        echo $name.$sex;
        $data = array('name' => 'Jo', 'age' => 33);
        return json($data, 201);
//        print_r($this->request->param());
//        print_r($_GET);
//        print_r($_POST);
//        $data = Db::name('goods')->find();
//        print_r($data);
        $this->assign('name', $name);
        $this->assign('data', $data);
//        return $this->fetch();
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }

    public function index2()
    {
        $result = Db::execute('insert into tdb_fruitshop (id, name, num, price) VALUES(55,\'真蛋疼\', 19,88.1)');
        $result = Db::execute('insert into tdb_fruitshop (id, name, num, price) VALUES(55,\'真蛋疼\', 19,88.1)');
//        dump($result);
//        $result1 = Db::connect('db2')->query('show tables');
//        dump($result1);
//        $dd = Db::connect('db3');
//        $result3 = $dd->execute('insert into shit VALUES (?,?)',['haha', 21]);
//        dump($result3);
//        $dd->table('shit')
//            ->insert(['mname' => 'JJ', 'mage' => 33]);
//
//        $dd->table('shit')
//            ->where('mage = 33')
//            ->update(['mname' => 'Boring']);
//
//        $list = $dd->table('shit')
//            ->where('mage', 33)
//            ->select();
//        dump($list);
//
//        $dd->table('shit')
//            ->where('mage',21)
//            ->delete();

//        dump( $dd->table('shit')->select());
//        $result2 = Db::query('select *from tdb_fruitshop WHERE id = ?',[221]);
//        dump($result2);

        //

        $rr = Db::connect()->name('goods')->where('cate_id', 7)->field('goods_name,goods_price')->order('goods_price','desc')->select();
        dump($rr);

        Db::transaction(function (){
            $rr = Db::connect()->name('goods')->where('cate_id', 7)->field('goods_name,goods_price')->order('goods_price','desc')->select();
            dump($rr);
            Db::name('goods')->where('brand_id', 7)->delete();
            dump(Db::name('goods')->select());
            dump(Db::connect()->name('goods_brands')->select());
        });

//        Db::transaction();


        echo $this->request->url(true);
        return 'index22';
    }


    public function hello6()
    {
//        $result = Db::name('goods')->where('cate_id',5)->max('goods_price');
//        dump($result);
//        $goodsBrands = new GoodsBrandsModel;
//        $goodsBrands->id = '2';
//        $goodsBrands->name = '小鱼在家';
//        $goodsBrands->num = '99';
//        $goodsBrands->price = '12.02';
//        if($goodsBrands->save())
//        {
//            return 'Succeed!';
//        }
//        $modelList = GoodsBrands::all();
//        foreach ($modelList as $item) {
//            echo "<br/>";
//            echo $item['num'].$item['price'].$item['name'];
//        }

//        $mm = GoodsBrands::getByName('woca');
//        $mm['name']='jj';
//        if ($mm->save()){
//            echo 'Succeed';
//        }
//        if ($mm){
//            $mm->delete();
//            return 'Delete';
//        }
        $model = new GoodsBrands;
        $model['id']=29;
        $model['name'] = '麻花藤';
        $model['num'] = 33;
        $model['price'] = 1000.3;

        if ($model->isUpdate(false)->save()){
            echo 'Ss';
        }
//        $model::paginate()
    }

    public function add()
    {
        return 'hello,'.$_GET['name'];
//        $model = GoodsBrands::get(1);
//        echo $model->toJson();
//        if ($model)
//        {
//            echo "1"."<br/>";
//        }
//        $model['num']= 1;
//        echo "<br/>";
//        echo $model['num'];
//        if ($model->save()){
//            return 'Succeed inserting';
//        }
    }

}
