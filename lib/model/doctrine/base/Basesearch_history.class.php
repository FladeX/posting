<?php

/**
 * Basesearch_history
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $query
 * 
 * @method string         getQuery() Returns the current record's "query" value
 * @method search_history setQuery() Sets the current record's "query" value
 * 
 * @package    posting
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basesearch_history extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('search_history');
        $this->hasColumn('query', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}