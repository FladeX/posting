<?xml version="1.0" encoding="utf-8"?>
<feed xmlns="http://www.w3.org/2005/Atom">
	<title>Posting.ru</title>
	<subtitle>Проекты</subtitle>
	<link href="<?php echo url_for('projects', array('sf_format' => 'atom'), true) ?>" rel="self" />
	<link href="<?php echo url_for('homepage', true) ?>" />
	<updated><?php echo gmstrftime('%Y-%m-%dT%H:%M:%SZ', Doctrine_Core::getTable('projects')->getLatestProjects()->getDateTimeObject('created_at')->format('U')) ?></updated>
	<author><name>Posting.ru</name></author>
	<id><?php echo sha1(url_for('projects', array('sf_format' => 'atom'), true)) ?></id>

	<?php include_partial('projects/list', array('projects' => $projects)) ?>

</feed>