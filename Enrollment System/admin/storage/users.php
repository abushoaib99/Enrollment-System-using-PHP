<?php
session_start();
class users{
	public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="student_information";
	public $conn;
	public $data;
	public $inform;
	
	public function __construct()
	{
		$this->conn=new mysqli($this->host,$this->username,$this->pass, $this->db_name);
		if($this->conn->connect_errno)
		{
			die("database connection failed".$this->conn->connect_errno);
		}
	}
	
	public function add_info($info)
	{
		$this->conn->query($info);
		return true;
		
	}
	
	public function student_profile()
	{
		$query=$this->conn->query("select * from studnet_profile");
		while($row=$query->fetch_array(MYSQLI_ASSOC))
		{
			if($query->num_rows>0)
			{
				$this->data[]=$row;
			}
		}
		
		return $this->data;
	}
	
	public function search($searchkey)
	{
		$query=$this->conn->query("select * from studnet_profile where roll_no Like '%$searchkey%' or studnet_name Like '%$searchkey%' or dept Like '%$searchkey%' or h_year Like '%$searchkey%' or phone Like '%$searchkey%' or h_board Like '%$searchkey%' or s_board Like '%$searchkey%' or h_roll Like '%$searchkey%' or s_roll Like '%$searchkey%'");
		while($row=$query->fetch_array(MYSQLI_ASSOC))
		{
			if($query->num_rows>0)
			{
				$this->data[]=$row;
			}
		}
		
		return $this->data;
	}
	
	
}
?>