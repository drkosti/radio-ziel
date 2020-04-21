<?php include('inc/ustawienia.php');?>
<?php include('inc/header.php');?>

    <title><?php echo $nazwa ?> | Kontakt</title>
  </head>
  
  
  <body>
<div id="gora">
  <?php include('inc/nawigacja.php');?>
<a href="#" class="logo"><img src="grafika/logo.png" /></a>
<div class="info">
<div class="nazwa"><?php echo $nazwa ?></div>
<div class="slogan"><?php echo $slogan ?></div>
</div>
</div>
<div class="container-fluid">
<iframe src="https://<?php echo $panel ?>.panelradiowy.pl/embed.php?script=online" scrolling="no" border="0" marginwidth="0" marginheight="0" frameborder="no" width="100%" height="20"></iframe>
	<div class="row mtp">
    	<?php include('inc/lewa.php');?>
	<div class="col-sm-8">
	
	
	


<div class="media art">
  <img src="grafika/av.png" class="mr-3 ikona" alt="awatar">
  <div class="media-body">
    <h5 class="mt-0">Kontakt</h5>
    <p>
    	Skontaktuj się z nami za pomocą:
    	        <ul>
                	<li><a href="<?php echo $fb ?>" target="_blank">Facebook</a></li>
                	<li><a href="<?php echo $tt ?>" target="_blank">Twitter</a></li>
                	<li><a href="<?php echo $insta ?>" target="_blank">Instagram</a></li>
                	
                </ul>
        Jeśli czujesz się na siłach, możesz spróbować zainstalować jakiś formularz kontaktowy np <a href="https://github.com/amansaini/fast-secure-contact-form" target="_blank">ten</a>.

    	Aby dostosować wygląd i treść tej podstrony edytuj plik <pre>inc/kontakt.php</pre>
    </p>

  </div>
</div>
	

	<?php include('inc/karty2-1.php');?>
	
	</div>
    
	

 
	</div>

	<?php include('inc/karty4-1.php');?>
	<?php include('inc/karty4-2.php');?>
	</div>



<?php include('inc/stopka.php');?>
