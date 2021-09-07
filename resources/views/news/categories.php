<p>Category List</p>
<ul>
<?php foreach ($categories as $category):?>
<li><a href="<?=route('category.show', ['name' => $category['name']])?>"><?=$category['name']?></a></li>
<?php endforeach;?>
</ul>

