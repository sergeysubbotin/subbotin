<?php
/**
*соединение с БД
*выбор базы данных
*кодировка
*/
function open_database_connection()/* */
 {
	$link=mysql_connect("localhost", "sergei", "123");/*соединение с БД*/
	mysql_select_db("subbotin", $link);/* */
	mysql_query("SET NAMES utf8");/**/
	return $link;

}
function close_database_connection($link){
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