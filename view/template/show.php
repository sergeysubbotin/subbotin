<?php ob_start() ?>

<h2><?php echo $post['title'];?></h2>
<div><b>дата:</b> <?php echo $post['date'];?></div>
<div><b>автор:</b> <?php echo $post['autor'];?></div>
<div><b>текст:</b> <?php echo $post['content'];?></div>

<?php $content = ob_get_clean();?>
<?php include "view/template/layout.php";?>