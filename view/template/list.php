<?php ob_start() ?>
<a href="2ktvrp/subbotin/index.php/users" >список пользователей</a>
<h2>список постов</h2>
		<ol>
			<?php foreach ($posts as $post): ?>
				<li>
					<a href="index.php/show?id=<?php echo $post['id'];?>">
					<?php echo $post['title'];?>
					</a>
				</li>
			<?php endforeach; ?> 	
		</ol>
		<?php $content=ob_get_clean();?>
		<?php include "view/template/layout.php";?>