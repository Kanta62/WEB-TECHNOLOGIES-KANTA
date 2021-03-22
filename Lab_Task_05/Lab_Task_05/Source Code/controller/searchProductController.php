<?php

require_once 'model/model.php';

if (isset($_POST['findProduct'])) {
	
    try {
    	
    	$allSearchedProducts = searchProduct($_POST['Name']);
    	require_once 'searchedResult.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

