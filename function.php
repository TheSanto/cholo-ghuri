<?php 
require('cg-parts/core-function.php');
require('cg-parts/settings.php');
require('cg-parts/user.php');



function createDefaultTable(){
	createTable('cg_db', 'places');
	createTable('cg_db', 'categories');
	createTable('cg_db', 'spots');
}

if(!isTableExist('places') && !isTableExist('categories') && !isTableExist('spots')){

}
else{
	createDefaultTable();
}

?>