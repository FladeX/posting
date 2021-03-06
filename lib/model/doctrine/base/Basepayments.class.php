<?php

/**
 * Basepayments
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property float $sum
 * @property integer $user_id
 * @property string $type
 * @property integer $status
 * @property users $users
 * 
 * @method float    getSum()     Returns the current record's "sum" value
 * @method integer  getUserId()  Returns the current record's "user_id" value
 * @method string   getType()    Returns the current record's "type" value
 * @method integer  getStatus()  Returns the current record's "status" value
 * @method users    getUsers()   Returns the current record's "users" value
 * @method payments setSum()     Sets the current record's "sum" value
 * @method payments setUserId()  Sets the current record's "user_id" value
 * @method payments setType()    Sets the current record's "type" value
 * @method payments setStatus()  Sets the current record's "status" value
 * @method payments setUsers()   Sets the current record's "users" value
 * 
 * @package    posting
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basepayments extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('payments');
        $this->hasColumn('sum', 'float', null, array(
             'type' => 'float',
             'notnull' => true,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
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
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}