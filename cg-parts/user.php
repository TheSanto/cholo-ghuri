<?php

function verifyUser($usr, $pwd){
	if($usr == "admin"){
		if($pwd == "pass"){
			return true;
		}
	}else{
		return false;
	}
}

?>