<?php 

namespace classes\paging;

use dalbm as dalbm;

// Global variables
$_content=array(
		
		'title' => '-- title --',
		'content' => '-- content --',
		'description' => dalbm\get_dalbm('common|description'),
		''
		
);

$_page=function ($page_type, $content) {

		$type = array('html' => '<!doctype html>
				<html>
					<head>
						<meta charset="UTF-8" />
					</head>
					<body >'.$content.'</body>
				</html>');
		
		return $type[$page_type];
};

// Classes
class paging
{
	public function get_content($content_name){
		
		global $_content;
		return $_content[$content_name];
		
	}
	
	public function get_page($page_type,$content){
		
		global $_page, $_content;
		return $_page($page_type,$content);
		
	}
}

// Functions



?>