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
$posts=get_all_posts();
require "view/template/list.php";

?>