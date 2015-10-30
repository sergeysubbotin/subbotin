<?php ob_start() ?>

<h2>администрирование странички</h2>
<form action="index.php/add" method="POST" name="add_data">
	

		<table>
			<tr>
				<td>автор:</td>
				<td><input type="textname=add_autor"></td>
			</tr>
			<tr>
				<td>дата:</td>
				<td><input type="textname=add_date"></td>
			</tr>
			<tr>
				<td>заголовок:</td>
				<td><input type="textname=add_title"></td>
			</tr>
			<tr>
				<td>текст:</td>
				<td><textarea name="add_content"></textarea></td>
			</tr>
			<tr>
				<td><input type="reset" name="reset" value="очистить"> </td>
				<td><input type="submit" name="submit" value="добавить"></td>
			</tr>
		</table>
</form>


			
		<?php $content=ob_get_clean();?>
		<?php include "view/template/layout.php";?>