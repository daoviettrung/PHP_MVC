<?php
class SinhvienModel extends DB{
	public function GetSV(){
		//Can ket noi db
		return "Dao Viet Trung";
	}
	public  function Tong($a,$b){
		return $a+$b;
	}
	public function Sinhvien(){
		$qr = "SELECT * FROM sinhvien";
		return mysqli_query($this->con,$qr);
	}
}
?>