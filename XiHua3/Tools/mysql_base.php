<?php
	/**
	 * 数据库操作类
	 * 作者：周杰
	 */
//1.首先定义一个公共类
	class mysqlDb{
		//2.属性字段
		//const 定义常量，常量一般用大写
		const USER="root";//1.数据库的登录账户
		 	
		const PWD="123456";//数据库的登录密码
		const HOST="127.0.0.1";//服务器名称
		private $dbName;//数据库名称
		//3.构造函数，初始化函数
		function __construct($dbName1){
			//把实例化参数赋值给属性字段
			
			$this->dbName=$dbName1;
			//调用连接池函数
			$this->connect();
			//调用链接数据库函数
			$this->selectDb();
		}
		//创建连接池函数
		function connect(){
	// self::HOST;  类的内部调用常量 self::常量名字
		 @mysql_connect(self::HOST,self::USER,self::PWD) or die("对不起链接失败！");
		
		}
		//链接数据库函数
		function selectDb(){
			mysql_select_db($this->dbName)or die("链接不到该数据库，请检查！");
			
			mysql_set_charset("gbk");//设置编码格式
		}
		function query($sql){
			 return mysql_query($sql);
		}
		
		//添加方法
		/**
		 * 添加数据 第一种方法
		 * 参数：$table 表名.$name字段名（格式 :1.以,分割）3.$val 添加值  格式同上
		 * 返回值：返回添加成功后的ID;
		 */
		function insert1($table,$name,$val){
			echo $sql="insert into $table($name) values($val)";
			$this->query($sql);
			return mysql_insert_id();
		}
	/**
		 * 添加数据 第二种方法
		 * 参数：$table 表名.$array字段名（格式 :以数组格式）例如：array(数据库字段=>添加的值);
		 * 返回值：返回添加成功后的ID;
		 */
		function insert2($table,$array){
			//遍历数组并且取出他的键
			foreach ($array as $k=>$v){
				$k1=$k1.$k.",";//遍历建 数据库的字段
				$v1=$v1."'".$v."'".",";//遍历值
			}
	
			$k1=substr($k1,0,-1);//拼接数据库字段
			$v1=substr($v1,0,-1);//拼接值
			echo $sql="insert into $table($k1) values($v1)";
			$this->query($sql);
			return mysql_insert_id();
		}
		/**
		 * 删除数据
		 * 参数：$table 表名.$where(条件)字段名（格式 :以数组格式）例如：array(数据库字段=>添加的值);
		 * 返回值：返回受影响行数
		 */
		function delete($table,$where){
		//遍历数组并且取出他的键
			foreach ($where as $k=>$v){
			$where1.=$k.'='."'"."$v"."'"." and ";
			}
			 $where1=substr($where1,0,-4);//拼接条件
			 $sql="delete from $table where  $where1";
			 $this->query($sql);
			return mysql_affected_rows();//返回受影响行数
		}
		/**
		 * 修改数据
		 * 参数：$table 表名.$where(条件)字段名（格式 :以数组格式）数组$array()[要修改的数据]例如：array(数据库字段=>添加的值);
		 * 返回值：返回受影响行数
		 */
		function update($table,$array,$where){
		//遍历条件
		foreach ($where as $k=>$v){
			$where1.=$k.'='."'"."$v"."'"." and ";
			}
			 $where1=substr($where1,0,-4);//拼接条件
			 
			 //遍历要修改的数据
			 foreach ($array as $k=>$v){
			 	$array1.=$k.'='."'"."$v"."'".",";
			 }
			 $array1=substr($array1, 0,-1);
			 $sql="update $table set $array1 where $where1";
			 $this->query($sql);
			 return mysql_affected_rows();
		}
		/**
		 * 查询所有数据
		 * 参数：$table 表名. $name(数组格式以下标的方式存储，查询的字段)
		 * 返回值：结果集
		 */
		function selectAll($table,$name){
                            $v1='';
			foreach ($name as $v) {
				$v1.=$v.",";
			}
			$v1=substr($v1, 0,-1);
			 return  $sql="select $v1 from $table order by id desc";
			
		/*	 while ($rs=mysql_fetch_array($query)){
			 		$a[]=$rs;
			 }
			 print_r($a);
		return  $a;*/
		}
		
		
		
		/**
		 * 模糊查询数据
		 * 参数：$table表名.,$name(数组格式，以下标形式储存，查询的字段),$where(数组储存条件和值)，$like(or 或 and);
		 * 返回值：结果集 select name from 表名 where 字段名 like '%值%'
		 */
		function likeSelect($table,$name,$where,$like){
			foreach ($name as $v){
				$v1.=$v.",";
			}
				$v1=substr($v1, 0,-1);
		//遍历条件
		foreach ($where as $k=>$v){
				$where1=$where1.$k.' like '."'".'%'.$v.'%'."'".' '.$like.' ';
			
			 	}
			 	//对$like进行字符串长度统计
			 	$num=strlen($like);
			 	//拼接条件
			 	$where1=substr($where1,0,-($num+1));
			 	//sql语句
			 return	$sql="select $v1 from $table where $where1 order by id desc";
			 	//执行
			 	//return $query=$this->query($sql);
		}
		
	/**
		 * 根据条件进行查询
		 * 参数：$table 表名. $name(数组格式以下标的方式存储，查询的字段),$where(数组存储条件和值)
		 * 返回值：结果集 select name from 表名 where 字段名 like %'值'%
		 */
		function  selectWhere($table,$name,$where){
                    $v1='';
				foreach ($name as $v) {
				$v1.=$v.",";
			}
			$v1=substr($v1, 0,-1);
                        $where1='';
			foreach ($where as $k=>$v){
				  $where1=$where1.$k.'='."'".$v."'"." and ";
			}
			$where1=substr($where1, 0,-4);
			return $sql="select $v1 from $table where $where1 order by id desc";
			 
			 //return $query=$this->query($sql);
			
		}
		
		
				/**
		 * 统计记录总条数(mysql_num_rows($result))
		 * 参数：$sql (sql语句)
		 * 返回值：总条数
		 */
		function count($sql){
			//mysql_num_rows() 返回结果集中行的数目
			return mysql_num_rows($this->query($sql));
		}
		/**
		 * 一共分为多少页
		 * 参数：$pageSize (页大小:每页显示多少记录),$sql (sql语句)
		 * 返回值：总页数
		 */
			function pageNum($pageSize,$sql){
				//返回总记录数
				$num=$this->count($sql);
				//判断总记录数%页大小是否整除，如果是，则总页数=总记录数/页大小；否则：总页数=（总记录数/页大小+1；
				if($num%$pageSize==0){
					//返回总页数
					 $pageNum=$num/$pageSize;
				}elseif ($num%$pageSize!=0){
					//intval:取整
					$pageNum=intval($num/$pageSize)+1;
				}
				//返回结果值：一共多少页数
				return $pageNum;
			}
		/**
		 * 判断当前页码
		 * 参数：$pageSize (页大小:每页显示多少记录),$sql (sql语句),$pageNo(当前页码)
		 * 返回值：当前页码数
		 */	
			function pageNo($pageSize,$sql,$pageNo){
				//调用pageNum函数，显示一共分为多少页:总页数
				$pageNum=$this->pageNum($pageSize, $sql);
				//判断当前页码，如果当前页码小于1，则代表当前页为首页；如果当前页码大于总页数，则代表当前页为尾页；
				if($pageNo<1){
					$pageNo=1;
				}elseif ($pageNo>$pageNum){
					$pageNo=$pageNum;
				}
				//返回当前页码
				return $pageNo;
			}
			/**
		 * 分页
		 * 参数：$pageSize (页大小:每页显示多少记录),$sql (结果集),$pageNo(当前页码)
		 * 返回值：当前页码数 limt 0,5; (当前页码数-1)*页大小
		 * limit 起始位置，条数()；起始位置=（当前页码-1）*页的大小
		 */	
			function page($pageSize,$sql,$pageNo){
				//调用pageNo函数，获取当前页码
				$pageNo=$this->pageNo($pageSize, $sql, $pageNo);
				//获取起始位置
				$pageStart=($pageNo-1)*$pageSize;
				//拼接SQL语句
				return  $sql=$sql." LIMIT $pageStart,$pageSize";
				
			}
		
		
	}
	//实例化
	$mysql_DB=new mysqlDb("php");
	//$mysql_DB->selectWhere("news_tb", array("id","title","text"), array("title"=>"oop","text"=>"足协"));
	//$a=array("id"=>"1","name"=>"张三","sex"=>"男");
		//$mysql_DB->insert2("sty_tb", $a);
		//$mysql_DB->insert1("stu_rb","name,sex","'kaka','男'")
	/* $query=$mysql_DB->selectAll("sina", array("*"));
	 while ($rs=mysql_fetch_array($query)){
	 	echo $rs['text'];
	 }*/
	/*  $array=$a->selectAll("sina", array("id","title","text"));
	echo  $b=$array[0]['title'];*/
	
	//类的外部访问常量      类名::常量名
  // echo  	mysqlDb::USER;
?>








