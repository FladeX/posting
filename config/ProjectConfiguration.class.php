<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  static protected $zendLoaded = false;

  static public function registerZend()
  {
	if (self::$zendLoaded)
	{
		return;
	}

	set_include_path(sfConfig::get('sf_lib_dir').'/vendor'.PATH_SEPARATOR.get_include_path());
	require_once sfConfig::get('sf_lib_dir').'/vendor/Zend/Loader/Autoloader.php';
	Zend_Loader_Autoloader::getInstance();
	self::$zendLoaded = true;

	Zend_Search_Lucene_Analysis_Analyzer::setDefault(new Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8Num_CaseInsensitive());

	ini_set("iconv.internal_encoding", 'UTF-8');
	Zend_Search_Lucene_Search_QueryParser::setDefaultEncoding('utf-8');
  }

  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
  }
}
