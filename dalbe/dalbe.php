<?php 

namespace dalbe;

# CORES -----------------------------------

// dalbe core
$_dalbe = function ($ql) {
	
	$this['ql'] = $ql;
	//$this['parse'] = $_parser($ql);
	
	return $this;
};

# FUNCTIONS ----------------------------------------
function get_dalbe($ql)
{
	return "getdalbe -- $ql";
}
