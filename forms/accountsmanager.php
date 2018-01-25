<?php

if($Module=='register' and  $_POST['enter']){
///echo 'forma se prelucreaaza..';
	if(!$_POST['intreprindere'] or !$_POST['director'] or !$_POST['servicii'] or !$_POST['angajati'] or !$_POST['perioada'] )MesageSend(1,'Forma are elemente neindeplinite.');

	$imaginea="images/img/".$_POST['intreprindere'].basename($_FILES['image']['name']);

	$firma=mysqli_fetch_assoc(mysqli_query($CONNECT,"SELECT `intreprindere` FROM `clienti` WHERE `intreprindere`='$_POST[intreprindere]'"));
	//echo var_dump($firma);
	if($firma)MesageSend(3,'Intreprindere cu asa date mai exista.');

    mysqli_query($CONNECT,"INSERT INTO `clienti` VALUES ('','$_POST[intreprindere]','$_POST[director]' ,'$_POST[servicii]','$_POST[angajati]' ,'$_POST[perioada]','$imaginea')");
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