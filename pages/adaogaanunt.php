<?php
Head('Denumirea paginii');
?>

<body>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content"> <a href="#" class="image-style"><img src="images/img5.jpg" width="725" height="300" alt="" /></a>
			<?php HelloFromPage('Forma de adaogare a anunturilor',MessageShow());	

			?>

			<form class="register"  method="POST" action="/addanunturi/adaogaanunt" onsubmit="return validateForm()" enctype="multipart/form-data">

        <fieldset id="userData" >
           <legend>Detaliile Anuntului</legend>
            <input class="registercomponent"  id="name" name="titlul" placeholder="Titlul" autofocus required maxlength="49" title="Trebuie sa fie cuprins intre 3 si 10 simboluri"><br><br> 
            
            <textarea id="continut" name="continut" placeholder="Continutul anuntului" rows="10" cols="90" ></textarea><br><br> 

            <select class="registercomponent"  id="category" name="category">
              <option>Codul muncii</option>
              <option>Servicii</option>
              <option>Clienti</option>
              <option>Despre noi</option>
            </select><br> <br> 
            
            <label>Selecteaza o imagine :</label>
            <input  id="image" name ="image"  type="file" autofocus required><br>

       </fieldset>
        
            

        <input style="background:#68bb54; padding: 10px; border-radius: 5px;" type="submit" name ="enter" value="Adauga Anunt " href='/addanunturi'><input input style="background:#fc4b4b; padding: 10px; border-radius: 5px;" type="button" name ="enter" value="Inapoi" onclick="window.location.href='/index'">
  </form>
			 <?php Footer();?>
		</div>
	
	</div>
	<div class="clearfix">&nbsp;</div>
</div>
</body>
</html>
