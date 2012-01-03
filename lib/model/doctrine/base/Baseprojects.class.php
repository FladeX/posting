<?php

/**
 * Baseprojects
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $author_id
 * @property string $text
 * @property integer $status
 * @property users $users
 * @property Doctrine_Collection $projects
 * 
 * @method integer             getAuthorId()  Returns the current record's "author_id" value
 * @method string              getText()      Returns the current record's "text" value
 * @method integer             getStatus()    Returns the current record's "status" value
 * @method users               getUsers()     Returns the current record's "users" value
 * @method Doctrine_Collection getProjects()  Returns the current record's "projects" collection
 * @method projects            setAuthorId()  Sets the current record's "author_id" value
 * @method projects            setText()      Sets the current record's "text" value
 * @method projects            setStatus()    Sets the current record's "status" value
 * @method projects            setUsers()     Sets the current record's "users" value
 * @method projects            setProjects()  Sets the current record's "projects" collection
 * 
 * @package    posting
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseprojects extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('projects');
        $this->hasColumn('author_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('text', 'string', 4000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 4000,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('users', array(
             'local' => 'author_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('reports as projects', array(
             'local' => 'id',
             'foreign' => 'project_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}