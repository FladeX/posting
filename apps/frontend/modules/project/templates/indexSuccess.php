<?php slot('title', 'Задания - posting.ru') ?>

<?php slot('breadcrumbs', '<h2>Текущие задания</h2> <a href="#">Архив</a>') ?>

<div id="sidebar">
	<div class="sidebarBlock">
		<a id="addTaskLink" href="<?php echo url_for('project/new') ?>">добавить задание</a>
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

	<table id="tasksTable" class="dataTable">
	<thead>
	<tr>
		<th>
			<a href="#" class="sortDesc">дата добавления</a>
		</th>
		<th>
			<a href="#">цена</a>
		</th>
		<th class="last">
			<a href="#">претенденты</a>
		</th>
	</tr>
	</thead>
	<tbody>

	<?php foreach ($projectss as $i => $projects): ?>
	<tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
		<td>
			<span class="date">[<?php echo $projects->getDateTimeObject('created_at')->format('d.m.Y/h:m') ?>]</span>
			<span class="title">
				<a href="<?php echo url_for('project/show?id='.$projects->getId()) ?>"><?php echo $projects->getTitle() ?></a>
			</span>
			<span class="description">
				<?php echo $projects->getText() ?>
			</span>
		</td>
		<td class="value">120</td>
		<td class="value last">2</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>

	<div id="paging">
		<div class="numbers">
			<span class="current">1</span>
			<a href="#">2</a>
			<a href="#">3</a>
			<a href="#">4</a>
			<a href="#">5</a>
			<a href="#">6</a>
			<a href="#">7</a>
			<a href="#">8</a>
			<a href="#">9</a>
			<a href="#">10</a>
			<span>...</span>
			<a href="#">25</a>
		</div>
		<div class="keys">
			<div class="next">
				<a href="#">следующая</a>
			</div>
			<div class="prev">предыдущая</div>
		</div>
	</div>

</div><!-- #primaryContent -->