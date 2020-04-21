<div class="col-sm-4">

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
		

		

	<div class="staty">		
		<div class="info2">Audycja:</div>
			<p class="ziel" data-shoutcast-value="servergenre"></p>

		<div class="info2 pios">Piosenka:</div>
			<p class="ziel" data-shoutcast-value="songtitle"></p>		
	</div>

<?php include('panel.php');?>
	<div class="lista mtp">
		<h3 cl>Playlista</h3>
		<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1029709693&color=%230cab26&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
	</div>
</div>