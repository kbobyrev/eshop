<?php
//require_once "db.php";
$dbServer ="localhost";
$dbUser ="root";
$dbPass="root";
$dbBase="eshop";

$conn = mysqli_connect($dbServer,$dbUser,$dbPass,$dbBase) or die('No connect to DB');;

function get_all_items(){
	$dbServer ="localhost";
	$dbUser ="root";
	$dbPass="root";
	$dbBase="eshop";

	$conn = mysqli_connect($dbServer,$dbUser,$dbPass,$dbBase) or die('No connect to DB');;

	$query = "SELECT * FROM goods WHERE is_active =1;";
	$result =mysqli_query($conn,$query);
	$all_items=[];
	while ($row =mysqli_fetch_assoc($result)){
		$all_items[]=$row;
	}
	return $all_items;
}
function get_once_item($id){

}

function create_new_item($name,$descrip,$ammount,$img_src){
	$dbServer ="localhost";
	$dbUser ="root";
	$dbPass="root";
	$dbBase="eshop";

	$conn = mysqli_connect($dbServer,$dbUser,$dbPass,$dbBase) or die('No connect to DB');;
	$temp = "INSERT INTO goods (name,descrip,ammount,img_name) VALUES ('%s','%s','%d','%s')";
	$query =sprintf($temp,mysqli_real_escape_string($conn,$name),mysqli_real_escape_string($conn,$descrip),$ammount,mysqli_real_escape_string($conn,$img_src));
	$result = mysqli_query($conn,$query );

    if(!$result){
        die(mysqli_error($conn));
    }

    return true;

}


?>