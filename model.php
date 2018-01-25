<?php
Head('Denumirea paginii');
?>

<body>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content"> <a href="#" class="image-style"><img src="images/img03.jpg" width="725" height="300" alt="" /></a>
			<?php HelloFromPage('Bine ati venit pe pagina noastra');
			 Content(Anunturi('some address','there may be content ','url for more information'));
			 Footer();?>
		</div>
		<?php Logo();?>
	</div>
	<div class="clearfix">&nbsp;</div>
</div>
</body>
</html>
