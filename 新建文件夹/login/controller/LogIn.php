<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Guest;
class LogIn extends Controller{
	
	public function index(){
		if(request()->isGet()){
			return $this->fetch();
		}
		if(request()->isPost()){
			$data=input('post.');
			$guest=new Guest();
			$result=$guest->where('username',$data['username'])->find();
			if($result){
				if ($data['password']==$result['password']){
					session('username',$data['username']);
					return $this->fetch('index/index');
				}else{
				return 	$this->error('密码错误');
									}
			}else{
				return $this->error('您未注册，请注册后再使用');
			}
			
		}
		
	}
	
	
	
}