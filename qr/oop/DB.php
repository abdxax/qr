<?php

/**
 * 
 */
class DataBase
{
	 protected $db_org;
	function __construct($db_name,$user,$pass){
		//$this->db_org=new PDO("mysql:host=localhost;dbname=$db_name",$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		$this->db_org=new PDO("mysql:host=localhost;dbname=$db_name",$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	}
	
}