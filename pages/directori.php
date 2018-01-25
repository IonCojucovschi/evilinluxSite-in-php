<?php
Head('Inregistrare Companie');
?>

<body>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content"> <a href="#" class="image-style"><img src="images/img5.jpg" width="725" height="300" alt="" /></a>
			<?php HelloFromPage('EVILINLUx ',MessageShow());	

			?>

              <div class="user_form">
              <form class="register"  method="POST" action="/accountsmanager/director" onsubmit="return validateForm()" enctype="multipart/form-data">              
              Nume Director: <input type="text" autofocus name="nume"><br><br>
              Prenume Director: <input type="text" autofocus name="prenume"><br><br>
              Ziua/ Luna/ Anul nasterii: <input autofocus type="date" name="data"><br><br>
              Loghin: <input autofocus type="text" name="login"><br><br>
              Parola: <input autofocus type="password" name="password"><br><br>
              <textarea autofocus name="observatii" rows="5" cols="60" value="Sugestii"></textarea><br><br>
              <p><input style="background:#68bb54; padding: 10px; border-radius: 5px;" type="submit" name ="enter" value="Inregistrare" href='/accountsmanager'></p>
             
              </form>
              </div>


 
			 <?php Footer();?>
		</div>
              <?php Logo();?>
	
	</div>
	<div class="clearfix">&nbsp;</div>
</div>
</body>
</html>
