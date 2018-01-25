<?php
Head('Denumirea paginii');
?>

<body>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content"> <a href="#" class="image-style"><img src="images/img03.jpg" width="725" height="300" alt="" /></a>
			<?php HelloFromPage('Bine ati venit pe pagina noastra');



            $anunturi=mysqli_query($CONNECT,"SELECT * FROM `anunt`");


              $toate;
			    while ($row = mysqli_fetch_array($anunturi)) {
			      $toate.=Anunturi($row['titlu'],$row['image'],$row['continut']);
			    }
			  ?>
			  <div id="box2">
				<h2 class="subtitle"></h2>
				<ul class="style1">
					<?php  echo $toate;  ?>
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










