<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$browser->
  get('/projects/index')->

  with('request')->begin()->
    isParameter('module', 'projects')->
    isParameter('action', 'index')->
  end()->

  with('response')->begin()->
    isStatusCode(200)->
    checkElement('body', '!/This is a temporary page/')->
  end()
;

$max = sfConfig::get('app_projects_per_page');
 
$browser->info('1 - The homepage')->
  get('/')->
  info(sprintf('  1.2 - Only %s project are listed for a page', $max))->
  with('response')->
    checkElement('#tasksTable tbody tr', $max)
;