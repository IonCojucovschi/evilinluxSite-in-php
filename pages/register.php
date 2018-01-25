<?php
Head('Inregistrare Companie');
?>

<body>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content"> <a href="#" class="image-style"><img src="images/img5.jpg" width="725" height="300" alt="" /></a>
			<?php HelloFromPage('EVILINLUx ',MessageShow());	

			?>

			<form class="register"  method="POST" action="/accountsmanager/register" onsubmit="return validateForm()" enctype="multipart/form-data">

        <fieldset id="userData" >
           <legend>Inregistrati o noua intreprindere</legend>
            <input class="registercomponent" cols="40" id="intreprindere" name="intreprindere" placeholder="Denumirea Intreprinderii" autofocus required maxlength="49" title="Trebuie sa fie cuprins intre 3 si 10 simboluri"><br><br> 
             <input class="registercomponent" cols="20" id="director" name="director" placeholder="Numele Prenumele Directorului" autofocus required maxlength="49" title="Trebuie sa fie cuprins intre 3 si 10 simboluri"><br><br>
             
            <label>Servicii :</label><select class="registercomponent"  id="servicii" name="servicii">
              <option>Resurse Umane</option>
              <option>Contabilitate</option>
              <option>Securitatea Muncii</option>
            </select><br> <br> 
            <label>Numarul de angajati:</label>
            <input type="number" name="angajati" min="1" autofocus value=1><br><br>

            
            <label>Perioada :</label><select class="registercomponent"  id="perioada" name="perioada">
              <option>Ambele</option>
              <option>Primu</option>
              <option>Al doilea</option>
             </select><br> <br> 
            <label>Logoul companiei :</label>
            <input  id="image" name ="image"  type="file" autofocus required>
       </fieldset>
        
            

        <input style="background:#68bb54; padding: 10px; border-radius: 5px;" type="submit" name ="enter" value="Inregistreaza Intreprindere " href='/accountsmanager'>
            <input input style="background:#fc4b4b; padding: 10px; border-radius: 5px;" type="button" name ="enter" value="Inapoi" onclick="window.location.href='/profile'">

  </form>
			 <?php Footer();?>
		</div>
	
	</div>
	<div class="clearfix">&nbsp;</div>
</div>
</body>
</html>
