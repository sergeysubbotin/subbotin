<?php ob_start() ?>

<h1>мы учимся линуксу</h1>
<p>уже лучше, но все равно очень плохо</p>


		<?php $content=ob_get_clean();?>
		<?php include "view/template/layout.php";?>