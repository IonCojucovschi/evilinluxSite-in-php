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
                             <img class="avatar" src="images/img5.jpg"/>
                                </div>
                                <button onclick="window.location.href='/register'">Adauga intreprindere</button>
                                 <br><br><br>
                                 <button onclick="window.location.href='/updateusr'">Modifica parola</button><br><br><br>
                                 <button style="background:#fc4b4b;" onclick="window.location.href='/index'">Inapoi</button>
                               <div class="user-profile-data">
                                 <h1><?php  echo   $_SESSION['USER_NAME'].' '. $_SESSION['USER_SURNAME']; ?></h1><br><br><br><br>
                               </div> 
                               <?php 

                               $companies=mysqli_query($CONNECT,"SELECT `intreprindere`,`servicii`,`nr_personal` FROM `clienti` WHERE `id_director`='$_SESSION[USER_ID]'");
                               while ($row=mysqli_fetch_array($companies)) {
                                 IntreprindereDetalii($row['intreprindere'],$row['nr_personal'],$row['servicii']); 
                               }

                     /// Content($toate);
                      Footer(); ?>

       <div class="clearfix">&nbsp;</div>
</div>
</body>
</html>

