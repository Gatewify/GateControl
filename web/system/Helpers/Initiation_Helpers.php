<?php 
defined('GateControl') or die('No Script Kiddles');

	/**
	* _def
	* The GateControl define if does not exists Shortcut (_def)
	* 
	* @package    GateControl
	* @subpackage System Helpers
	* @author     SkullWritter <geral@skullwritter.com>
	* @since	  0.0.1
	* @return 	  Instance	the instance of the System
	*/
	if(!function_exists('_def')){
		function _def($var,$value)
		{
			if(!defined($var)){define($var,$value,false);} 
		}
	}
	
	
	/**
	* gi
	* The GateControl get_instance Shortcut (gi)
	* 
	* @package    GateControl
	* @subpackage System Helpers
	* @author     SkullWritter <geral@skullwritter.com>
	* @since	  0.0.1
	* @return 	  Instance	the instance of the System
	*/
	if(!function_exists('gi')){
		function &gi(){
			return G_SystemCore::get_instance();
		}
	}

	/**
	* dump
	* The GateControl dump 
	* dumps the var content and then die 
	* 
	* @package    GateControl
	* @subpackage System Helpers
	* @author     SkullWritter <geral@skullwritter.com>
	* @since	  0.0.1
	* @return 	  Dump	The dump of the var like var dump
	*/
	if(!function_exists('dump')){
		function dump(){
			$args=func_get_args();
			if(count($args)>1)
				var_dump($args) and die();
			var_dump($args[0]) and die();
		}
	}
	
	
	/**
	* print_d
	* The GateControl print_d 
	* get's the var dump into an var and returns it
	* 
	* @package    GateControl
	* @subpackage System Helpers
	* @author     SkullWritter <geral@skullwritter.com>
	* @since	  0.0.1
	* @return 	  Dump	The dump of the var like var dump
	*/
	if(!function_exists('print_d')){
		function print_d(){
			$args=func_get_args();
			ob_start();
			if(count($args)>1)
				var_dump($args);
			var_dump($args[0]);
			return ob_get_clean();
		}
	}
	
	/**
	* get_inst
	* The GateControl get_instance Shortcut (get_inst)
	* 
	* @package    GateControl
	* @subpackage System Helpers
	* @author     SkullWritter <geral@skullwritter.com>
	* @since	  0.0.1
	* @return 	  Instance	the instance of the System
	*/
	if(!function_exists('get_inst')){
		function &get_inst(){
			return G_SystemCore::get_instance();
		}
	}
	/**
	* re
	* The GateControl includeOnce Shortcut
	* 
	* @package    GateControl
	* @subpackage System Helpers
	* @author     SkullWritter <geral@skullwritter.com>
	* @since	  0.0.1
	* @param      $path accepts the path of the file
	* @return 	  null	the include
	*/
	function in_once($path){return include_once($path);}
	/**
	* in
	* The GateControl include Shortcut
	* 
	* @package    GateControl
	* @subpackage System Helpers
	* @author     SkullWritter <geral@skullwritter.com>
	* @since	  0.0.1
	* @param      $path accepts the path of the file
	* @return 	  null	the include
	*/
	function in($path){return include($path);}
	/**
	* re_once
	* The GateControl Require_once Shortcut
	* 
	* @package    GateControl
	* @subpackage System Helpers
	* @author     SkullWritter <geral@skullwritter.com>
	* @since	  0.0.1
	* @param      $path accepts the path of the file
	* @return 	  null the requirement
	*/
	function re_once($path){return require_once($path);}

	/**
	* re
	* The GateControl Require Shortcut
	* 
	* @package    GateControl
	* @subpackage System Helpers
	* @author     SkullWritter <geral@skullwritter.com>
	* @since	  0.0.1
	* @param      $path accepts the path of the file
	* @return 	  null the requirement
	*/
	function re($path){return require($path);}

	/**
	* Slugify
	* The GateControl Slug Creator
	* 
	* @package    GateControl
	* @subpackage System Helpers
	* @author     SkullWritter <geral@skullwritter.com>
	* @since	  0.0.1
	* @param      $text the Text to slugify
	* @return 	  string	the Slug
	*/
	function slugify($text,$strtolower=true){
		$text = preg_replace('~[^\pL\d]+~u', '_', $text);
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
		$text = preg_replace('~[^-\w]+~', '', $text);
		$text = trim($text, '_');
		$text = preg_replace('~-+~', '_', $text);
		$text = preg_replace('~_+~', '_', $text);
		if($strtolower){
			$text = strtolower($text);
		}
		$text = str_replace(' ', '', $text);
		$text = str_replace('.', '', $text);
		$text = str_replace(',', '', $text);
		if (empty($text)) {
			return false;
		}
		return $text;
	}