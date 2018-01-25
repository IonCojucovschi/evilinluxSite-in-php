<?php
Head('Denumirea paginii');
?>

<body>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content"> <a href="#" class="image-style"><img src="images/img5.jpg" width="725" height="300" alt="" /></a>
			<?php HelloFromPage('Bine ati venit pe pagina noastra');



            $anunturi=mysqli_query($CONNECT,"SELECT * FROM `anunt`");
             	  ?>
			 <div id="box2">
				<h2 class="subtitle">Ultimele anunturi</h2>
				<ul class="style1 , first">
				<?php	
				 $toate;
			    while ($row = mysqli_fetch_array($anunturi)) {
			      echo Anunturi($row['titlu'],$row['image'],$row['continut']).'<br>';
			    }

			    	?>
                    
				</ul>
			</div>
             <?php
			/// Content($toate);
			 Footer();?>
		</div>
		<?php Logo();?>
	</div>
	<div class="clearfix">&nbsp;</div>
</div>
</body>
</html>










