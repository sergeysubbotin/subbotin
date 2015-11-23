<?php
/**
*контроллер содержит функции-экшены,
*которые заставляют модель вывести нужную
*информацию.
*/

/**
*массив $posts содержит выборку всех полей
*из таблицы post.
*подгружает файл list.php, содержащий вид вывода 
*информации из $posts в браузере
*/
function render_template($path, array $arg)
{
	extract($arg);
	ob_start();
	require $path;
	$html=ob_get_clean();
	return $html;
}


function list_action()
{
$postsModel=new PostsModel();
$posts=$postsModel->get_all_posts();
$html=render_template('view/template/list.php', array('posts'=>$posts));
return $html;
//require "view/template/list.php";
}

function admin_action()
{
	$posts=get_all_posts();
	$html=render_template('view/template/admin.php', array('posts'=>$posts));
	return $html;
	//require "view/template/admin.php";


}

function show_action($id)
{
	$postsModel = new PostsModel();
	$post=$postsModel->get_post_by_id($id);
	$html = render_template('view/template/show.php', array('post'=>$post));
	return $html;
	//require "view/template/show.php";
}

function add_action()
{
	add_post();
	//$post=get_post($id);
	//require "view/template/list.php";
}

function autor_action()
{
	require "view/template/autor.php";
}
function about_action()
{
	require "view/template/about.php";
}
function edit_action($id)
{
	//$post = get_post($id);
	$postsModel = new PostsModel();
	$post=$postsModel->get_post_by_id($id);
	$html = render_template('view/template/edit.php', array('post'=>$post));
	return $html;
	//require "view/template/admin.php";
}

?>