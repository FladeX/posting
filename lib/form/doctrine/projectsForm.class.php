<?php

/**
 * projects form.
 *
 * @package    posting
 * @subpackage form
 * @author     Max Istlyaev
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class projectsForm extends BaseprojectsForm
{
  public function configure()
  {
	$this->useFields(array('title', 'text', 'price'));

	$this->widgetSchema->setLabels(array(
		'title'		=> 'Название проекта',
		'text'		=> 'Описание проекта',
		'price'		=> 'Бюджет',
	));

  }
}
