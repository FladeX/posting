<?php use_stylesheet('projects.css') ?>

<?php slot('title', 'Поиск - posting.ru') ?>

<?php slot('breadcrumbs', '<h2>Результаты поиска</h2>') ?>

<div id="sidebar">
	<div class="sidebarBlock">
		<a id="addTaskLink" href="<?php echo url_for('projects/new') ?>">добавить задание</a>
	</div>

	<div id="searchBlock" class="sidebarBlock">
		<h3>Поиск</h3>
		<form action="<?php echo url_for('projects_search') ?>" method="get">
			<input id="searchQuery" type="text" name="query" value="<?php echo $sf_request->getParameter('query') ?>" />
			<input type="submit" value="Найти" />
		</form>
	</div>

	<div class="sidebarBlock">
		<div id="feedBlock" >
			<a href="<?php echo url_for('projects', array('sf_format' => 'atom')) ?>">RSS-лента</a>
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

	<?php include_partial('projects/list', array('projects' => $projects)) ?>

</div><!-- #primaryContent -->