<?php
namespace  app\index\controller;
use think\Session; 
use think\Controller;
use think\Db;


class Register extends Controller{
	public function registers(){
			 return $this->fetch();
		}
		
		 public function zctj(){
		   $user=input('post.admin');
		    
		   $username=input('post.username');
		   $password=input('post.password');
		   $phone=input('post.phone'); 
		   $states=input('post.states');
		   $email=input('post.email'); 
		  if($user=='A'){
			  $a=Db::query('select * from guest');
	      foreach($a as $da){
		if($username==$da['username']){
			 $this->error('用户已存在');
		}
		  }
			  $d=Db::execute('insert into guest (username,password,phone,states,email) values(?,?,?,?,?)',[$username,$password,$phone,$states,$email]);
		       if(!empty($d)){
				$this->success('注册成功！！');
				}	
			  }
			  
			  
			  
		  if($user=='B'){
			  $a=Db::query('select * from admin');
	      foreach($a as $da){
		if($username==$da['username']){
			 $this->error('用户已存在');
			}  
			
		  }
			  $d=Db::execute('insert into admin (username,password,phone,states,email) values(?,?,?,?,?)',[$username,$password,$phone,$states,$email]);
		       if(!empty($d)){
				$this->success('注册成功！！');
				}	
			  }	  
		
	   
			 	   
		 
		
			
		
		  
		 }
}