<?php
Head('Modificare date personale');
?>

<body>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content"> <a href="#" class="image-style"><img src="images/img5.jpg" width="725" height="300" alt="" /></a>
			<?php HelloFromPage('Modificaca date personale',MessageShow());	

			?>

              <div class="user_form">
              <form class="register"  method="POST" action="/accountsmanager/updateusr" onsubmit="return validateForm()" enctype="multipart/form-data">              
              Parola veche: <input autofocus type="password" name="paswordo"><br><br>
              Parola noua: <input autofocus type="password" name="paswordn"><br><br>

              <textarea autofocus name="observatii" rows="7" cols="60" placeholder="Sugestii"></textarea><br><br>
              <input style="background:#68bb54; padding: 10px; border-radius: 5px;" type="submit" name ="enter" value="Inregistrare" href='/accountsmanager'>
              <input input style="background:#fc4b4b; padding: 10px; border-radius: 5px;" type="button" name ="enter" value="Inapoi" onclick="window.location.href='/profile'">
             
              </form>
              </div>


 
			 <?php Footer();?>
		</div>
	
	</div>
	<div class="clearfix">&nbsp;</div>
</div>
</body>
</html>
