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
              <form class="register"  method="POST" action="/accountsmanager/login" onsubmit="return validateForm()" enctype="multipart/form-data" style="margin-left: 45px;">              
              <label style="width: 100px;display: block;">Loghin:</label> <input autofocus required type="text" name="login"><br><br>
              <label style="width: 100px;display: block;">Pasword:</label>  <input autofocus required type="password" name="password"><br><br>
              
              <p><input style="background:#68bb54; padding: 10px; border-radius: 5px;" type="submit" name ="enter" value="Logare" href='/accountsmanager'></p>
             
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
