<?php slot('title', 'Задания - posting.ru') ?>

<?php slot('breadcrumbs', '<h2>Текущие задания</h2> <a href="#">Архив</a>') ?>

<div id="sidebar">
	<div class="sidebarBlock">
		<a id="addTaskLink" href="<?php echo url_for('projects/new') ?>">добавить задание</a>
	</div>

	<div id="topCustomers" class="sidebarBlock">
		<h3>Лучшие заказчики</h3>
		<ul class="userList">
			<li class="odd">
				<img src="/images/fake_avatar_1.png" alt="" class="avatar" />
				<div class="content">
					<div class="title">Степан Трофимов</div>
					<div class="rating">
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						/ 302
					</div>
				</div>
			</li>
			<li>
				<img src="/images/fake_avatar_2.png" alt="" class="avatar" />
				<div class="content">
					<div class="title">Екатерина Селиверстова</div>
					<div class="rating">
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						/ 255
					</div>
				</div>
			</li>
			<li class="odd">
				<img src="/images/fake_avatar_3.png" alt="" class="avatar" />
				<div class="content">
					<div class="title">Ангелина Рычкова</div>
					<div class="rating">
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						/ 221
					</div>
				</div>
			</li>
			<li>
				<img src="/images/fake_avatar_4.png" alt="" class="avatar" />
				<div class="content">
					<div class="title">Василий Пупкин</div>
					<div class="rating">
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						<img src="/images/icon_star.png" />
						/ 217
					</div>
				</div>
			</li>
			<li class="odd">
				<img src="/images/fake_avatar_5.png" alt="" class="avatar" />
				<div class="content">
					<div class="title">Иван Семенов</div>
						<div class="rating">
							<img src="/images/icon_star.png" />
							<img src="/images/icon_star.png" />
							<img src="/images/icon_star.png" />
							<img src="/images/icon_star.png" />
							<img src="/images/icon_star.png" />
							/ 211
						</div>
					</div>
			</li>
		</ul>
	</div>

	<div id="searchBlock" class="sidebarBlock">
		<h3>Поиск</h3>
		<form action="#">
			<input id="searchQuery" type="text" name="query" />
			<input type="submit" value="Найти" />
		</form>
	</div>

	<div class="sidebarBlock">
		<div id="feedBlock" >
			<a href="#">RSS-лента</a>
		</div>
	</div>

</div>

<div id="primaryContent">

	<div id="priceMenu" class="innerMenu">
		<div class="title">
			<span>цена</span>/wmr
		</div>

		<ul>
			<li><a href="#" class="current">любая</a></li>
			<li><a href="#">до 150</a></li>
			<li><a href="#">150-1000</a></li>
			<li><a href="#">более 1000</a></li>
			<li><a href="#">договорная</a></li>
		</ul>
	</div>

	<?php include_partial('projects/list', array('projects' => $pager->getResults())) ?>

	<?php if ($pager->haveToPaginate()): ?>
	<div id="paging">
		<div class="numbers">
			<?php foreach ($pager->getLinks() as $page): ?>
				<?php if ($page == $pager->getPage()): ?>
					<span class="current"><?php echo $page ?></span>
				<?php else: ?>
					<a href="<?php echo url_for('projects', $projects) ?>page=<?php echo $page ?>"><?php echo $page ?></a>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
		<div class="keys">
			<div class="next">
				<?php if ($pager->getPage() != $pager->getNextPage()): ?>
					<a href="<?php echo url_for('projects', $projects) ?>page=<?php echo $pager->getNextPage() ?>">следующая</a>
				<?php else: ?>
					следующая
				<?php endif; ?>
			</div>
			<div class="prev">
				<?php if ($pager->getPage() != $pager->getPreviousPage()): ?>
					<a href="<?php echo url_for('projects', $projects) ?>page=<?php echo $pager->getPreviousPage() ?>">предыдущая</a>
				<?php else: ?>
					предыдущая
				<?php endif; ?>
			</div>
		</div>
	</div><!-- #paging -->
	<?php endif; ?>

</div><!-- #primaryContent -->