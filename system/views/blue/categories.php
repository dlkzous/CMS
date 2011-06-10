<div id="menu">
	<ul>
		<li class="title"><a href="#">Categories</a></li>
		<? foreach ($categories as $category) { ?>
			<li><a href="<?= BASE_URL ?>main/index/<?=$category['name']?>/<?=$category['id']?>"><?= $category['name'] ?></a></li>
		<? } ?>
	</ul>
</div>
