<?php

class myUser extends sfBasicSecurityUser
{
  public function addProjectToHistory(projects $project)
  {
	$ids = $this->getAttribute('projects_history', array());

	if (!in_array($project->getId(), $ids))
	{
		array_unshift($ids, $project->getId());
		$this->setAttribute('projects_history', array_slice($ids, 0, sfConfig::get('app_last_viewed_projects')));
	}
  }

  public function getProjectsHistory()
  {
	$ids = $this->getAttribute('projects_history', array());

	if (!empty($ids))
	{
		return Doctrine_Core::getTable('projects')
			->createQuery('a')
			->whereIn('a.id', $ids)
			->execute()
		;
	}

	return array();
  }
}
