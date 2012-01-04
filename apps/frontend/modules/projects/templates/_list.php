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

<?php foreach ($projects as $i => $project): ?>
<tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
	<td>
		<span class="date">[<?php echo $project->getDateTimeObject('created_at')->format('d.m.Y/h:m') ?>]</span>
		<span class="title">
			<a href="<?php echo url_for('projects/show?id='.$project->getId()) ?>"><?php echo $project->getTitle() ?></a>
		</span>
		<span class="description">
			<?php echo $project->getText() ?>
		</span>
	</td>
	<td class="value"><?php echo $project->getPrice() ?></td>
	<td class="value last">2</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>