<?php
?>
<h2>список постов</h2>
		<ol>
			<?php foreach ($posts as $post): ?>
				<li>
					<a href="index.php/showusers?id=<?php echo $users['uid'];?>">
					<?php echo $users['lastname'];?>
					</a>
				</li>
			<?php endforeach; ?> 	
		</ol>

		<?php $content=ob_get_clean();?>
		<?php include "view/template/layout.php";
		?>