<?php ob_start() ?>


<h2>администрирование странички</h2>
<form action="/2ktvrp/subbotin/index.php/add" method="POST" name="add_data">
	

		<table>
			<tr>
				<td>автор:</td>
				<td><input type="text" name="add_autor"></td>
			</tr>
			
			<tr>
				<td>заголовок:</td>
				<td><input type="text" name="add_title"></td>
			</tr>
			<tr>
				<td>текст:</td>
				<td><textarea name="add_content"></textarea></td>
			</tr>
			<tr>
				<td><input type="reset" name="reset" value="очистить"> </td>
				<td><input type="submit" name="add" value="добавить"></td>
			</tr>
		</table>
</form>
<h2>список постов</h2>
		<ol>
			<?php foreach ($posts as $post): ?>
				<li>
					<a href="show?id=<?php echo $post['id'];?>">
					<?php echo $post['title'];?>
					</a>
					<a href="edit?id=<?php echo $post['id'];?>">
					редактировать
					</a>
					<a href="delete?id=<?php echo $post['id'];?>">
					удалить
					</a>
				</li>
			<?php endforeach; ?> 	
		</ol>
		<?php $content=ob_get_clean();?>
		<?php include "view/template/layout.php";?>

			
		