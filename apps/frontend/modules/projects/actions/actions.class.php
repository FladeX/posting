<?php

/**
 * projects actions.
 *
 * @package    posting
 * @subpackage projects
 * @author     Max Istlyaev
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class projectsActions extends sfActions
{
  public function executeSearch(sfWebRequest $request)
  {
	$this->forwardUnless($query = $request->getParameter('query'), 'projects', 'index');

	$this->projects = Doctrine_Core::getTable('projects')->getForLuceneQuery($query);
  }

  public function executeIndex(sfWebRequest $request)
  {
	$this->projects = Doctrine_Core::getTable('projects')->getActiveProjects();

	$this->pager = new sfDoctrinePager(
		'projects',
		sfConfig::get('app_projects_per_page')
	);
	//$this->pager->setQuery($this->projects->getActiveProjectsQuery());
	$this->pager->setPage($request->getParameter('page', 1));
	$this->pager->init();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->projects = Doctrine_Core::getTable('projects')->find(array($request->getParameter('id')));

	$this->getUser()->addProjectToHistory($this->projects);

	// находим количество оставшихся дней
	$timeleft_days = $timeleft_hours = $timeleft_minutes = 0;
	$project_timeleft = time($this->projects['expired_at']) - time($this->projects['created_at']);
	if ($project_timeleft > 0)
	{
		$timeleft_days = floor($project_timeleft / 86400);
		$timeleft_hours = floor(($project_timeleft % 86400) / 3600);
		$timeleft_minutes = floor(($project_timeleft % 3600) / 60);
	}
	$this->project_timeleft = $timeleft_days . ' д. ' . $timeleft_hours . ' ч. ' . $timeleft_minutes . ' мин.';

    $this->forward404Unless($this->projects);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new projectsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new projectsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($projects = Doctrine_Core::getTable('projects')->find(array($request->getParameter('id'))), sprintf('Object projects does not exist (%s).', $request->getParameter('id')));
    $this->form = new projectsForm($projects);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($projects = Doctrine_Core::getTable('projects')->find(array($request->getParameter('id'))), sprintf('Object projects does not exist (%s).', $request->getParameter('id')));
    $this->form = new projectsForm($projects);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($projects = Doctrine_Core::getTable('projects')->find(array($request->getParameter('id'))), sprintf('Object projects does not exist (%s).', $request->getParameter('id')));
    $projects->delete();

    $this->redirect('projects/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $projects = $form->save();

      $this->redirect('projects/edit?id='.$projects->getId());
    }
  }
}
