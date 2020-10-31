<?php
class App{
	protected $controller="Home";//tạo các biến và gán chúng vì có thể người dùng chưa nhập gì vào thanh địa chỉ
	protected $action="SayHi";//gán biến bằng rỗng
	protected $params=[];
	function __construct(){//Khi tạo lớp app mặc địch code sẽ chạy hàm với tên App .Vậy nên cần tọa hàm __construct
		$arr = $this->UrlProcess();
		//Xử lý controller
		if(file_exists("./mvc/controllers/".$arr[0].".php")){
			$this->controller=$arr[0];
			unset($arr[0]);//Xóa phần tử thứ 0 của mảng
		}
		require_once"./mvc/controllers/".$this->controller.".php";
		$this->controller=new $this->controller;
		//xử lý action
        if(isset($arr[1])){
        	if(method_exists($this->controller,$arr[1])){//Kiểm tra hàm trong lớp đó có tồn tại hay không
        		$this->action= $arr[1];
        	}
        	unset($arr[1]);
        }
		//XỬ lya params
		if(isset($arr)){
			$this->params=array_values($arr);
		}
		else{
			$this->params= [];
		}
		call_user_func_array([$this->controller,$this->action], $this->params);

	}
	function UrlProcess(){
		if(isset($_GET["url"])){
			return explode("/", filter_var(trim($_GET["url"])));
			
		}
	}
}
?>