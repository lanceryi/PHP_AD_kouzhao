<?php

namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
	
	protected $connection = array(
		// 'db_host'  => '127.0.0.1',
		// 'db_name'  => 'kouzhao_vip4',
		// 'db_user'  => 'root',
		// 'db_pwd'   => 'root@123',
		'db_host'  => '211.149.141.248',
		'db_name'  => 'kouzhao_vip4',
		'db_user'  => 'master',
		'db_pwd'   => 'master@0013',
		'db_port'  => '3306',
		'db_type'  => 'mysql',
		'DB_CHARSET'=> 'utf8'
	);
	
	public function login($user,$pwd){
		if(empty($user)){
			return false;
		}else{
			$result = $this->query("select name, password from user where name ='{$user}' and password = '{$pwd}'");
			return $result;
		}
	}
	

	
}