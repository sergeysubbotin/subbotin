<?php
/**
*соединение с БД
*выбор базы данных
*кодировка
*/
function open_database_connection()//
 {
	$link=mysql_connect("localhost", "sergei", "123");//*соединение с БД*/
	mysql_select_db("subbotin", $link);//
	mysql_query("SET NAMES utf8");//
	return $link;
}
function close_database_connection($link)
 {
	mysql_close($link);
}
function get_all_posts()
{

	$link=open_database_connection();
	$sql="SELECT * FROM post";
	$result=mysql_query($sql,$link);
	$posts=array();

	while($row=mysql_fetch_assoc($result))
	{
		$posts[]=$row;
	}
	close_database_connection($link);	
	return $posts;
}

function get_post($id)
{

	$link=open_database_connection();
	$sql="SELECT * FROM post WHERE id='$id'";
	$result=mysql_query($sql,$link);
	$post = mysql_fetch_assoc($result);
	close_database_connection($link);	
	return $post;
}

function add_post()
{
	$autor=$_POST['add_autor'];
	$date=date("Y-m-d H:i:s");
	$new_content=$_POST['add_content'];
	$title=$_POST['add_title'];
	$link=open_database_connection();
	$sql="INSERT INTO `post` (`id`, `autor`, `date`, `title`, `content`) VALUES (NULL, '$autor', '$date', '$title', '$new_content');";
	$add=mysql_query($sql,$link);
	close_database_connection($link);
	header('location:admin');
}
function edit_data($id)
{
	$autor=$_POST['autor'];	
	$new_content=$_POST['content'];
	$title=$_POST['title'];
	$link=open_database_connection();
	$sql="UPDATE `post` SET `autor` = '$autor', `title` = '$title', `content` = '$content' WHERE `id` = $id;";
	$add=mysql_query($sql,$link);
	close_database_connection($link);
	header('location:admin');
}