<?php 

require_once 'db_connect.php';


function showAllData($tableName){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM '.$tableName.'';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showData($tableName, $columnName){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM ".$tableName." where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$columnName]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchProduct($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `product` WHERE Name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addProduct($tableName, $data){
	$conn = db_conn();
    $selectQuery = "INSERT into ".$tableName." (Name, BuyingPrice, SellingPrice, display)
VALUES (:Name, :BuyingPrice, :SellingPrice, :display)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':Name' => $data['Name'],
        	':BuyingPrice' => $data['BuyingPrice'],
        	':SellingPrice' => $data['SellingPrice'],
        	':display' => $data['display']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateProduct($tableName, $id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE ".$tableName." set Name = ?, BuyingPrice = ?, SellingPrice = ?, display = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['Name'], $data['BuyingPrice'], $data['SellingPrice'], $data['display'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($tableName, $id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `".$tableName."` WHERE id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}