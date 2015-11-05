<?php ob_start() ;
if ($_REQUEST['edit'])
{
	edit_data($_REQUEST['id']);
}
?>

<h2>редактирование статьи</h2>

<?php $content = ob_get_clean();?>
<?php include "view/template/layout.php";?>
<form action="edit_submit" method="POST" accept-charset="utf-8">
	

<table>
	
		<tr>
			<td>заголовок</td>
			<td><input type="text" name="title" value="<?php echo $post['title'];?>"></td>
		</tr>
	
	
		<tr>
			<td>автор:</td>
			<td><input type="text" name="autor" value="<?php echo $post['autor'];?>"></td>
		</tr>
		<tr>
			<td>текст:</td>
			<td><textarea name="content"><?php echo $post['content'];?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="edit" value="сохранить"></td>
		</tr>
	
</table>
</form>