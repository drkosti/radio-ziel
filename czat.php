<?php include('inc/ustawienia.php');?>
<?php include('inc/header.php');?>

    <title><?php echo $nazwa ?> | Czat</title>
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


	
    <audio preload="auto" controls>
          <source src="http://<?php echo $ip ?>:<?php echo $port ?>/;stream.mp3">
    </audio>
    <script src="js/jquery-3.3.1.slim.js"></script>
    <script src="js/audioplayer.js"></script>
    <script>
    $.noConflict();
jQuery(document).ready(function($){
      $(function() {
        $('audio').audioPlayer();
      });
      });
      
    </script>

	<iframe src="http://czat.ekosti.pl/blabax.php" width="95%" height="600px"></iframe>


<div class="media art">
  <img src="grafika/av.png" class="mr-3 ikona" alt="awatar">
  <div class="media-body">
    <h5 class="mt-0">Czat</h5>
    <p>
      
        Zalecam używanie skryptu czatu, np AJAXCHAT, można go poprać tu: <a href="https://frug.github.io/AJAX-Chat/" target="_blank">tutaj</a> lub BlaB do pobrania <a href="https://justblab.com/blabax-php-ajax-website-chat-software" target="_blank">tutaj</a>. <br>
        Można również wkleić czat z xat.com, lub Polfan.

        
      Aby dostosować wygląd i treść tej podstrony edytuj plik <pre>inc/czat.php</pre>
    </p>

  </div>
</div>

	<?php include('inc/karty2-1.php');?>
	

    
	

 
	</div>

	<?php include('inc/karty4-1.php');?>
	<?php include('inc/karty4-2.php');?>
	</div>



<?php include('inc/stopka.php');?>
