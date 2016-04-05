<?php 
//DB constant 
define("HOST", "localhost");
define("USER", "root");
define("PWD", "toor");
define("CGBD", "cg_db");

if(!dbExist('cg_db')){
	createDb('cg_db');
}



?>