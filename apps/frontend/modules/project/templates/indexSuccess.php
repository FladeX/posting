<?php slot('title', 'Задания - posting.ru') ?>

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
