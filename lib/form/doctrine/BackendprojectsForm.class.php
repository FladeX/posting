<?php

/**
 * projects form.
 *
 * @package    posting
 * @subpackage form
 * @author     Max Istlyaev
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BackendprojectsForm extends projectsForm
{
  public function configure()
  {
	parent::configure();
  }

  protected function setFields()
  {
	$this->useFields(array('author_id', 'title', 'text', 'price', 'status', 'views_users', 'views_guests', 'expired_at', 'created_at', 'updated_at'));

	$this->widgetSchema->setHelp('title', 'например, &laquo;Наполнение автомобильного форума&raquo;');
	$this->widgetSchema->setHelp('text', 'подробное описание проекта для исполнителей');
	$this->widgetSchema->setHelp('price', 'предполагаемый бюджет');
	$this->widgetSchema->setHelp('status', 'статус проекта');

	$this->widgetSchema->setLabels(array(
		'title'		=> 'Название проекта',
		'text'		=> 'Описание проекта',
		'price'		=> 'Бюджет',
		'status'	=> 'Статус',
	));

  }
}
