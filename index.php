<?php
include_once 'seting.php';
session_start();
$CONNECT=mysqli_connect(HOST,USER,PASS,DB);///cream conecsiunea cu baza de date 




if($_SERVER['REQUEST_URI']=='/'){
$Page='index';
$Module='index';
}else{

$URL_Path=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$URL_Parts=explode('/', trim($URL_Path,'/'));
$Page=array_shift($URL_Parts);
$Module=array_shift($URL_Parts);

			if(!empty($Module)){

				$Param=array();
				for($i=0;$i<count($URL_Parts);$i++){
					$Param[$URL_Parts[$i]]=$URL_Parts[++$i];
				}
			}

}


if($Page=='index') include('pages/index.php');
elseif($Page=='adaogaanunt') include('pages/adaogaanunt.php');
elseif($Page=='addanunturi') include('forms/addanunturi.php');
elseif($Page=='register') include('pages/register.php');
elseif($Page=='accountsmanager')include('forms/accountsmanager.php');
elseif($Page=='directori')include('pages/directori.php');
elseif($Page=='profile')include('pages/profile.php');
elseif($Page=='login')include('pages/login.php');
elseif($Page=='updateusr')include('pages/updateusr.php');


//////transmite mesaje la o adresa a paginii 

function MesageSend($p1,$p2,$p3=''){
if($p1==1) $p1='Eroare :';
else if($p1==2) $p1='Hint :';
else if ($p1==3) $p1='Informatie :';

if($p3) $_SERVER['HTTP_REFERER']=$p3;

$_SESSION['message']='<div class="MessageBlock"><b>'.$p1.'</b>'.$p2.'</div>';
$server = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "/";
exit(header('Location:'.$server));
}
/////primeste mesage de la o adresa a paginii
function MessageShow(){
if($_SESSION['message']) $Message=$_SESSION['message'];
echo $Message;
$_SESSION['message']= array();

}



function Head($p1){


	echo '<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>'.$p1.'</title>
			<meta name="keywords" content="" />
			<meta name="description" content="" />
			<link href="http://fonts.googleapis.com/css?family=Satisfy|Fjalla+One|Open+Sans:400,600,700" rel="stylesheet" type="text/css">
			<link href="default.css" rel="stylesheet" type="text/css" media="all" />
			</head>';
}

function Logo(){

		if($_SESSION['USER_ROLE']=='admin'){
	$elements='<li><a href="/adaogaanunt" accesskey="1" title="">Anunturi</a></li>
	    <li><a href="#" accesskey="2" title="">Clien&#539i</a></li>
	';

	}

	if($_SESSION['USER_LOGIN_IN']==1){
		$elements.='<li><a href="/profile" accesskey="3" title="">Profil</a></li>
		<li><a href="/accountsmanager/logout" accesskey="3" title="">Iesi</a></li>';
	}else{

		$elements.='<li><a href="/directori" accesskey="4" title="">&#206nregistrare</a></li>
		<li><a href="/login" accesskey="4" title="">Logare</a></li>';
	}



	echo '<div id="sidebar">
				<div id="logo">
					<h1><a href="#">EvilinLux</a></h1>
				</div>
				<div id="menu" class="box">
					<ul>
					<li><a href="/index" accesskey="5" title="">Acasa</a></li>
						<li><a href="#" accesskey="5" title="">Contacte</a></li>
						'.$elements.'
					</ul>
				</div>
			</div>';

}

function Footer($p1='Ana Ungureanu'){

echo '<div id="footer">
				<p>Copyright &copy 2018 <a href="https://www.facebook.com/ana.ungureanu.54">'.$p1.'</a>.</p>
			</div>';



}


function HelloFromPage($tipDeSalut,$p1=''){
echo '<div id="box1" class="post">
				<h2 class="title"><a href="#">'.$tipDeSalut.'</a></h2>
				<p> <strong>'.$p1.'</strong>    </p>
			</div>';

}

function Content($listaDeAnunturi){

echo '<div id="box2">
				<h2 class="subtitle"></h2>
				<ul class="style1">
					'.$listaDeAnunturi.'
				</ul>
			</div>';


}

function Anunturi($Title,$urlImage,$urlMore){

echo '<li >
      <h3><em><img src="'.$urlImage.'" alt="" width="130" height="130" class="alignleft border" /></em></h3>
	  <p>'.$Title.'</p>
	  <p><a href="'.$urlMore.'" class="button-style">Cite&#537te mai departe...</a></p>
	</li><br>';
}

function IntreprindereDetalii($numeleIntr,$num_ang,$serviciul){


echo ' <div>
        <ul class="data-user">
         <li><a><strong>'.$numeleIntr.'</strong><span>Intreprinderea</span></a></li>
         <li><a><strong>'.$num_ang.'</strong><span>Numarul de angajati</span></a></li>
         <li><a><strong>'.$serviciul.'</strong><span></span>Serviciul prestat</a></li>
        </ul>
      </div>';


}










?>