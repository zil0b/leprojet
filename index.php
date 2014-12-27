<?php
	
// @author zulad
// version 0.2

    use classes\paging as page;

    // requisites
    require_once ("config.php");
    require_once ("dalbe/dalbe.php");
    include (cla."/paging.php");
    require_once (fun."/authorisation.php");

    // @authorisation
    if(!$authorisation())
            exit();

    // pagin
    $pg = new page\paging();

    // output
    echo $pg->get_page('html', $pg->get_content('description'));
    
?>