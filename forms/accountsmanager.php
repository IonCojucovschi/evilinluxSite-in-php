<?php

if($Module=='register' and  $_POST['enter']){
///echo 'forma se prelucreaaza..';
	if(!$_POST['intreprindere'] or !$_POST['director'] or !$_POST['servicii'] or !$_POST['angajati'] or !$_POST['perioada'] )MesageSend(1,'Forma are elemente neindeplinite.');

	$imaginea="images/img/".$_POST['intreprindere'].basename($_FILES['image']['name']);

	$firma=mysqli_fetch_assoc(mysqli_query($CONNECT,"SELECT `intreprindere` FROM `clienti` WHERE `intreprindere`='$_POST[intreprindere]'"));
	//echo var_dump($firma);
	if($firma)MesageSend(3,'Intreprindere cu asa date mai exista.');

    mysqli_query($CONNECT,"INSERT INTO `clienti` VALUES ('','$_POST[intreprindere]','$_POST[director]' ,'$_POST[servicii]','$_POST[angajati]' ,'$_POST[perioada]','$imaginea',$_SESSION[USER_ID])");
	//echo var_dump($Row);
	if (move_uploaded_file($_FILES['image']['tmp_name'],$imaginea)) {
	 $msg = "Image uploaded successfully";
	 MesageSend(3,':Intreprinderea este inregistrata.','/profile');
	}else{
	$msg = "Failed to upload image";
	MesageSend(1,': '.$msg.' some','/adaogaanunt');
	}



}elseif ($Module=='director' and $_POST['enter']) {
//echo 'se proceseaza...';
if(!$_POST['nume'] or !$_POST['prenume'] or !$_POST['data'] or !$_POST['login'] or !$_POST['password']) MesageSend(1,'Forma nu este completata corect!');
$existlog=mysqli_fetch_assoc(mysqli_query($CONNECT,"SELECT `login` FROM `directori` WHERE `login`='$_POST[login]'"));
if($existlog)MesageSend(1,'Exista utilizator cu acest login incercati altul.');

mysqli_query($CONNECT,"INSERT INTO `directori` VALUES ('','$_POST[nume]','$_POST[prenume]','$_POST[data]','$_POST[login]','$_POST[password]','user','$_POST[observatii]')");
MesageSend(3,': '.$msg.' some','/index');



}elseif($Module=='login' and $_POST['enter']){

///echo "se prelucreaza..";
if(!$_POST['login'] or !$_POST['password'])MesageSend(1,'Forma nu este completata corect.');
$isValid=mysqli_fetch_assoc(mysqli_query($CONNECT,"SELECT * FROM `directori` WHERE (`login`='$_POST[login]' AND `pasword`='$_POST[password]')"));
if(!$isValid)MesageSend(3,'Nu exista asa utilizator.');

    $_SESSION['USER_ID']=$isValid['id'];
	$_SESSION['USER_NAME']=$isValid['nume'];
	$_SESSION['USER_SURNAME']=$isValid['prenume'];
	$_SESSION['USER_DATAN']=$isValid['data_n'];
	$_SESSION['USER_LOGIN']=$isValid['login'];
	$_SESSION['USER_PASWORD']=$isValid['pasword'];
	$_SESSION['USER_ROLE']=$isValid['roles'];
	$_SESSION['USER_LOGIN_IN']=1;
	$_SESSION['LOGO_IMG']="images/img5.jpg";
 MesageSend(3,' valoarea Session[userlogin]='.$_SESSION['USER_LOGIN_IN'],'/profile');




}elseif($Module=='logout' and $_SESSION['USER_LOGIN_IN']==1){
$_SESSION['USER_LOGIN_IN']=0;
///echo 'se proceseaza';
session_unset();
  //session_destroy();

   exit( header('Location: /login'));


}elseif($Module=='updateusr' and $_POST['enter']){
///   echo 'se proceseaza';

if($_POST['observatii']){

	mysqli_query($CONNECT,"UPDATE `directori` SET `observatii`='$_POST[observatii]' ");
	MesageSend(3,'Sugestiile dumnedoastra au fost updatate cu succes.','/updateusr');

}
if(!$_POST['paswordo'] and $_POST['paswordn'])MesageSend(1,'Introduceti parola veche.');
if($_POST['paswordo'] and !$_POST['paswordn'])MesageSend(1,'Introduceti parola Noua.');
if($_POST['paswordo']==$_SESSION['USER_PASWORD'] and $_POST['paswordn']){
    mysqli_query($CONNECT,"UPDATE `directori` SET pasword='$_POST[paswordn]'");
   $_SESSION['USER_PASWORD']= $_POST['paswordn'];
	MesageSend(3,'Datele sau  modificat cu succes.','/updateusr');

}else{

	MesageSend(1,'Parola veche este introdusa gresit.','/updateusr');
}
}elseif($Module=='intreprindere' ){



	
}





























?>