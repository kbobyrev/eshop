<?
include "goods.php";
include "images.php";

if ($_POST['load']){
	$goodName =strip_tags($_POST['name']);
	$descrip = strip_tags($_POST['desc']);
	$price =strip_tags($_POST['cost']);
	$imgName =$_FILES['img']['name'];
	$tempPath =$_FILES['img']['tmp_name'];
	$img_path='../public/img/';


	create_new_item($goodName,$descrip,$price,$imgName);

	putPhotoToFolder($img_path."big/".$imgName,$img_path."small/".$imgName,$tempPath) or die ("Not load");
	



}
?>