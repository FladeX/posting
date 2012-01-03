<?php

/**
 * projects form base class.
 *
 * @method projects getObject() Returns the current form's model object
 *
 * @package    posting
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseprojectsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'author_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('users'), 'add_empty' => false)),
      'text'       => new sfWidgetFormTextarea(),
      'status'     => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'author_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('users'))),
      'text'       => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'status'     => new sfValidatorInteger(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('projects[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'projects';
  }

}