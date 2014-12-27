<?php 

namespace dalbe;

include DALBE.'/scripts/parser.php';
include DALBE.'/functions/utilities.php';

use dalbe\parser as prs; 
    
// dalbe core
function get_dalbe ($numberOfInstances, $query = null) {
	
    $this['query'] = $query;
    
    for($i=0;$i<$numberOfInstances;$i++)
        $this['parsers'][$i] = prs\Parser::get_test($query);
    
return $this;

}
