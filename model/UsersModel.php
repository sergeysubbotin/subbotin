<?php
class UsersModel
{
private $dbh;
private $user="sergei";
private $pass="123";
private $db="subbotin";
private $charset="UTF8";
private $host="localhost";

function UsersModel()
{
	$dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
	$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
	
	$this->dbh=new PDO($dsn, $this->user, $this->pass, $opt);	
}
public function get_all_posts()
{	
	$sql="SELECT uid,lastname,firstname,email FROM users";
	$stmt=$this->dbh->query($sql);
	$posts=array();
	while($row=$stmt->fetch())
	{
		$posts[]=$row;
	}		
	return $posts;
}

}