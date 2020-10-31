<?php
class Home extends Controller{
	function SayHi(){
		$trung = $this->model("SinhvienModel");
		echo $trung->GetSV();
	}
	function Show($a,$b){
		$trung=$this->model("SinhvienModel");
		$tong =$trung->Tong($a,$b); 
		$this->view("aodep",["number"=>$tong,"Page"=>"news","SV"=>$trung->Sinhvien()]);
	 	}
}

?>