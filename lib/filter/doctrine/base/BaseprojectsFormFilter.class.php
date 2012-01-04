<?php

/**
 * projects filter form base class.
 *
 * @package    posting
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseprojectsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'author_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('users'), 'add_empty' => true)),
      'title'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'text'         => new sfWidgetFormFilterInput(),
      'price'        => new sfWidgetFormFilterInput(),
      'views_users'  => new sfWidgetFormFilterInput(),
      'views_guests' => new sfWidgetFormFilterInput(),
      'status'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'expired_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'author_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('users'), 'column' => 'id')),
      'title'        => new sfValidatorPass(array('required' => false)),
      'text'         => new sfValidatorPass(array('required' => false)),
      'price'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'views_users'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'views_guests' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'expired_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('projects_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'projects';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'author_id'    => 'ForeignKey',
      'title'        => 'Text',
      'text'         => 'Text',
      'price'        => 'Number',
      'views_users'  => 'Number',
      'views_guests' => 'Number',
      'status'       => 'Number',
      'expired_at'   => 'Date',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
