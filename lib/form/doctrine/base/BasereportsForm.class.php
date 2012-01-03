<?php

/**
 * reports form base class.
 *
 * @method reports getObject() Returns the current form's model object
 *
 * @package    posting
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasereportsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'user_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('users'), 'add_empty' => false)),
      'project_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('projects'), 'add_empty' => false)),
      'posting_name'     => new sfWidgetFormInputText(),
      'posting_password' => new sfWidgetFormInputText(),
      'posting_messages' => new sfWidgetFormInputText(),
      'posting_date'     => new sfWidgetFormDateTime(),
      'status'           => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('users'))),
      'project_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('projects'))),
      'posting_name'     => new sfValidatorString(array('max_length' => 255)),
      'posting_password' => new sfValidatorString(array('max_length' => 255)),
      'posting_messages' => new sfValidatorInteger(),
      'posting_date'     => new sfValidatorDateTime(),
      'status'           => new sfValidatorInteger(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('reports[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'reports';
  }

}
