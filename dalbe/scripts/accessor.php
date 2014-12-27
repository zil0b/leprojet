<?php 

namespace dalbe;

# CORES -----------------------------------

// dalbe core
$_dalbm = function ($ql) {
	
	$this['ql'] = $ql;
	//$this['parse'] = $_parser($ql);
	
	return $this;
};

// parser core
$_parser = function ($ql) {
	
	return $this;
};

# FUNCTIONS ----------------------------------------
function get_dalbm($ql)
{
	return "getdalbm -- $ql";
}


?>