<?php
namespace App\lib;
class Config
{
	  public static function getAppClasses()
	  {
	  	  //return array("admin"=>"App\Controllers\AdminController","user"=>"App\Controllers\UserController");
	  	   return array("admin"=>array("mainclass"=>"App\Controllers\AdminController","dependency"=>array(new \App\Models\Admin)),"user"=>array("mainclass"=>"App\Controllers\UserController","dependency"=>array(new \App\Models\User)),"app"=>array("mainclass"=>"App\Controllers\AppController","dependency"=>array(new \App\Models\App)));
	
	  }
}

?>