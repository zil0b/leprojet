<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use dalbe as dlb;
use dalbe\utilities as util; 

include ("config.php");

$_dalbe = (object)dlb\get_dalbe(5, "il etait une fois une petite souris");

util\var_debug($_dalbe);

