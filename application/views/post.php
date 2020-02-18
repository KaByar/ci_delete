<h1>Post Page</h1>

<ul>
	<?php foreach($todos as $row):  ?> 
	<li><?=$row->description?></li>
	<?php endforeach; ?>

</ul>