<?php

require_once ('../Model/model.php');

function fetchAllStudents(){
	return showAllStudent();

}
function fetchStudent($username){
	return showStudent($username);

}
?>
