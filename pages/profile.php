<?php
Head('Denumirea paginii');
?>
<link href="style.css" rel="stylesheet" type="text/css"/>

<body>
<div id="wrapper">
          <div class="content-profile-page">
            <?php  MessageShow(); ?>
                        <div class="profile-user-page card">
                           <div class="img-user-profile">
                             <img class="profile-bgHome" src="images/img02.jpg" />
                             <img class="avatar" src=""/>
                                </div>
                                <button onclick="window.location.href='/register'">Adauga intreprindere</button>
                                 <br><br><br>
                                 <button>Modifica parola</button><br><br><br>
                                 <button style="background:#fc4b4b;" onclick="window.location.href='/index'">Inapoi</button>
                               <div class="user-profile-data">
                                 <h1><?php  echo   $_SESSION['USER_NAME'].' '. $_SESSION['USER_SURNAME']; ?></h1><br><br><br><br>
                               </div> 
                               <?php IntreprindereDetalii('numecompanie','20','serviciul'); ?>
                        
                          <?php
                     /// Content($toate);
                      Footer();?>

       <div class="clearfix">&nbsp;</div>
</div>
</body>
</html>


 $_SESSION['USER_ID']=$isValid['id'];
  $_SESSION['USER_NAME']=$isValid['nume'];
  $_SESSION['USER_SURNAME']=$isValid['prenume'];
  $_SESSION['USER_EMAIL']=$isValid['data_n'];
  $_SESSION['USER_LOGIN']=$isValid['login'];
  $_SESSION['USER_PASWORD']=$isValid['pasword'];
  $_SESSION['USER_ROLE']=$isValid['roles'];
  $_SESSION['USER_LOGIN_IN']=1;

