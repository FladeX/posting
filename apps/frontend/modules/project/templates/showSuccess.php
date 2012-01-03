<?php slot('title', $projects->getTitle()) ?>

<?php slot('breadcrumbs', '<div id="breadcrumbs"><a href="#">Текущие задания</a> > </div><h2>' . $projects->getTitle() . '</h2>') ?>

<div id="mainContent">
	<h1 class="contentHeader"><?php echo $projects->getTitle() ?></h1>

	<div id="sidebar">
		<div class="sidebarBlock customer">
			<div class="date">[<?php echo $projects->getDateTimeObject('created_at')->format('d.m.Y/h:m') ?>]</div>

			<div><a href="#"><?php echo $projects->getAuthorId() ?></a></div>

			<div class="rating">
				<img src="/images/icon_star_half.png">
				<img src="/images/icon_star_empty.png">
				<img src="/images/icon_star_empty.png">
				<img src="/images/icon_star_empty.png">
				<img src="/images/icon_star_empty.png">
				/ 2
			</div>
		</div>

		<div id="taskInfo" class="sidebarBlock">
			<table>
			<tbody>
			<tr>
				<td>Цена:</td>
				<td class="value price"><?php echo $projects->getPrice() ?> wmr</td>
			</tr>
			<tr>
				<td>Открыт до:</td>
				<td class="value">
					5.03.2011 <br />
					осталось 12 ч. 35 мин.
				</td>
			</tr>
			<tr>
				<td>Просмотров:</td>
				<td class="value"><?php echo ($projects->getViewsGuests() + $projects->getViewsUsers()) ?> / <?php echo $projects->getViewsUsers() ?> пользователей</td>
			</tr>
			<tr>
				<td>Претендентов:</td>
				<td class="value">4</td>
			</tr>
			</tbody>
			</table>
		</div>

	</div>

	<div id="primaryContent">
		<div id="taskDescription">
			<p class="first">
				<?php echo $projects->getText() ?>
			</p>
		</div>

		<div class="innerMenu">
			<ul>
				<li>
					<a href="#" class="current first">претенденты</a>
				</li>
				<li>
					<a href="#" class="bidLink">участвовать</a>
				</li>
			</ul>
		</div>

		<table id="bidsTable" class="dataTable">
		<thead>
		<tr>
			<th colspan="2">
				<a href="#" class="sortDesc">рейтинг</a>
			</th>
			<th>
				<a href="#">срок</a>
			</th>
			<th class="last">
				<a href="#">добавлено</a>
			</th>
		</tr>
		</thead>

		<tbody>
		<tr class="odd">
			<td class="avatar">
				<img src="/images/fake_avatar_1.png" alt="" />
			</td>
			<td class="userInfo">
				<div class="title">Степан Трофимов</div>
				<div class="rating">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					/ 302
				</div>
			</td>
			<td class="value deadline">1 день</td>
			<td class="value last">1.03.2011/15:35</td>
		</tr>

		<tr>
			<td class="avatar">
				<img src="/images/fake_avatar_2.png" alt="" />
			</td>
			<td class="userInfo">
				<div class="title">Екатерина Селиверстова</div>
				<div class="rating">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					/ 255
				</div>
			</td>
			<td class="value deadline">1 день</td>
			<td class="value last">1.03.2011/15:35</td>
		</tr>

		<tr class="odd">
			<td class="avatar">
				<img src="/images/fake_avatar_3.png" alt="" />
			</td>
			<td class="userInfo">
				<div class="title">Ангелина Рычкова</div>
				<div class="rating">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					/ 221
				</div>

				<span class="description">
					Здравствуйте! <br />
					Тема просто замечательная, с удовольствием сделаю статью по ней.
					Подробности предлагаю обсудить в асе (605823731).
				</span>
			</td>
			<td class="value deadline">1 день</td>
			<td class="value last">1.03.2011/15:35</td>
		</tr>

		<tr>
			<td class="avatar">
				<img src="/images/fake_avatar_4.png" alt="" />
			</td>
			<td class="userInfo">
				<div class="title">Василий Пупкин</div>
				<div class="rating">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					<img src="/images/icon_star.png">
					/ 217
				</div>
			</td>
			<td class="value deadline">1 день</td>
			<td class="value last">1.03.2011/15:35</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>