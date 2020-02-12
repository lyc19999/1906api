<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function testRedis()
    {
	 $key = '1906';
	 $val = time();
	 Redis::set($key,$val);
	 $value = Redis::get($key);
	 echo 'value:'.$value;
    }

    public function test002()
    {
	echo "Hello World";
    }
    
    public function test003()
    {
    	$user_info=[
	     'user_name'=>'zhangsan',
	     'email'    =>'zhangsan@qq.com',
	     'age'      =>11
        ];
	
	echo json_encode($user_info);
    }	    
}


















?>
