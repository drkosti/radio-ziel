<?php include('inc/ustawienia.php');?>
<?php include('inc/header.php');?>

    <title><?php echo $nazwa ?> | O nas</title>
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
    <h5 class="mt-0">O nas</h5>
    <p>
    	Nasza stacja istnieje od X lat, i składa się ludzi, których pasją jest muzyka i prowadzenie audycji radiowych.
    	Aby dostosować wygląd i treść tej podstrony edytuj plik <pre>inc/o-nas.php</pre>
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
