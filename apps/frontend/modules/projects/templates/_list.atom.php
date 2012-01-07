<?php use_helper('Text') ?>
<?php foreach ($projects as $i => $project): ?>
  <?php if ($i < sfConfig::get('app_rss_projects_count')): ?>
	<entry>
		<title><?php echo $project->getTitle() ?></title>
		<link href="<?php echo url_for('projects_show', $project, true) ?>" />
		<id><?php echo sha1($project->getId()) ?></id>
		<updated><?php echo gmstrftime('%Y-%m-%dT%H:%M:%SZ', $project->getDateTimeObject('created_at')->format('U')) ?></updated>
		<summary><?php echo $project->getText() ?></summary>
		<author><name><?php echo $project->getAuthorId() ?></name></author>
	</entry>
  <?php endif; ?>
<?php endforeach ?>