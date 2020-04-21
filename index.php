<?php include('inc/ustawienia.php');?>
<?php include('inc/header.php');?>

    <title><?php echo $nazwa ?> | <?php echo $slogan ?></title>
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
	
	
	
	<?php include('inc/slider.php');?>

<div class="media art">
  <img src="grafika/av.png" class="mr-3 ikona" alt="awatar">
  <div class="media-body">
    <h5 class="mt-0">Jak edytować szablon?</h5>
    Listę programów, które mogą bardzo się przydać do edycji, umieściłem w stopce.
    Aby uruchomić radio na tym szablonie należy zmienić plik <pre>inc/ustawienia.php</pre> 
    Wszystkie zmienne opatrzone są odpowiednim komentarzem. 
    <img class="img-fluid" src="grafika/scr-1.png"/>
    Panel radiowy można bezpłatnie założyć na <a href="https://panelradiowy.pl" target="_blank">tej</a> stronie. Zalecam jednak zakup wersji premium, można dzięki temu min edytować kod CSS skryptów, przez co lepiej dostosować wygląd okienek.
  </div>
</div>
	

	<?php include('inc/karty2-1.php');?>
	
	</div>
    
	

 
	</div>

	<?php include('inc/karty4-1.php');?>
	<?php include('inc/karty4-2.php');?>
	</div>



<?php include('inc/stopka.php');?>
