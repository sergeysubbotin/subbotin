<?php
class UsersController
{

	
function list_action()
{
$postsModel=new PostsModel();
$posts=$postsModel->get_all_posts();
$html=render_template('view/template/list.php', array('posts'=>$posts));
return $html;
//require "view/template/list.php";
}
}