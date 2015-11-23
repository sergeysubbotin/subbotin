<?php
class PostsModel{
private $dbh;
private $user="sergei";
private $pass="123";
private $db="subbotin";
private $charset="UTF8";
private $host="localhost";




function PostsModel()
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
	$sql="SELECT id,title FROM post";
	$stmt=$this->dbh->query($sql);
	$posts=array();

	while($row=$stmt->fetch())
	{
		$posts[]=$row;
	}		
	return $posts;
}

public function get_post_by_id($id)
{

	//$link=open_database_connection();
	$sql="SELECT `title`,`date`,`autor`,`content` FROM `post` WHERE id=?";
	$stmt=$this->dbh->prepare($sql);
	$stmt->execute([$id]);

	//$result=mysql_query($sql,$link);
	$post = $stmt->fetch();
	//close_database_connection($link);	
	var_dump($post);
	return $post;	
}

public function add_post($autor,$date,$title,$new_content)
{

	$sql="INSERT INTO `post` (`autor`, `date`, `title`, `content`) VALUES (?, ?, ?, ?)";
	//$add=mysql_query($sql,$link);
	//close_database_connection($link);
	$stmt=$this->dbh->prepare($sql); 
	$stmt->execute([$autor,$date,$title,$new_content]);
	//header('location:admin');
}
public function delete_post($id)
{
$sql="DELETE FROM `post` where `id`=?" ;
$stmt=$this->dbh->prepare($sql); 
$stmt->execute([$id]);

}

}