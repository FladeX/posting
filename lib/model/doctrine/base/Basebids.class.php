<?php

/**
 * Basebids
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $project_id
 * @property string $text
 * @property integer $status
 * @property projects $projects
 * @property users $users
 * 
 * @method integer  getUserId()     Returns the current record's "user_id" value
 * @method integer  getProjectId()  Returns the current record's "project_id" value
 * @method string   getText()       Returns the current record's "text" value
 * @method integer  getStatus()     Returns the current record's "status" value
 * @method projects getProjects()   Returns the current record's "projects" value
 * @method users    getUsers()      Returns the current record's "users" value
 * @method bids     setUserId()     Sets the current record's "user_id" value
 * @method bids     setProjectId()  Sets the current record's "project_id" value
 * @method bids     setText()       Sets the current record's "text" value
 * @method bids     setStatus()     Sets the current record's "status" value
 * @method bids     setProjects()   Sets the current record's "projects" value
 * @method bids     setUsers()      Sets the current record's "users" value
 * 
 * @package    posting
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basebids extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('bids');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('project_id', 'integer', null, array(
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
        $this->hasOne('projects', array(
             'local' => 'project_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('users', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}