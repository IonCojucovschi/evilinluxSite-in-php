<?php
if($Module=='adaogaanunt' and $_POST['enter']){

//echo var_dump($_FILES);
if(!$_POST['titlul'] or !$_POST['continut'] or !$_POST['category']) MesageSend(1,': Forma este indeplinita gresit.','/adaogaanunt');


$imaginea="images/img/".basename($_FILES['image']['name']);

$idup=mysqli_fetch_assoc(mysqli_query($CONNECT,"SELECT COUNT(`id`) FROM `anunt` WHERE (1=1)"));
$idVal=intval($idup)+1;

$Row=mysqli_query($CONNECT,"INSERT INTO anunt VALUES ('','$_POST[titlul]','$_POST[continut]','$imaginea',null,'$_POST[category]')");

//echo var_dump($Row);
if (move_uploaded_file($_FILES['image']['tmp_name'],$imaginea)) {
  		$msg = "Image uploaded successfully";
  		MesageSend(3,': '.$msg.' some','/adaogaanunt');
  	}else{
  		$msg = "Failed to upload image";
  		MesageSend(1,': '.$msg.' some','/adaogaanunt');
  	}



}





?>