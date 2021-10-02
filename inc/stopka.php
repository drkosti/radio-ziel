<footer class="stopka-kk">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
            	<h2><?php echo $nazwa ?></h2>
                <p>
                Tutaj jakieś info dodatkowe...
                </p>
                <p>© 2020 <a href="<?php echo $strona ?>"><?php echo $nazwa ?></a></p> 
            </div>
        	<div class="col-md-4 footer-nav animated fadeInUp">
            	<h4>Nawigacja —</h4>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="<?php echo $strona ?>">Strona główna</a></li>
                        <li><a href="wspolpraca.php">Współpraca</a></li>
                        <li><a href="czat.php" style="color: #f1f104;">Czat</a></li>
                        <li><a href="ekipa.php">Ekipa</a></li>
                        <li><a href="rekrutacja.php">Dołącz do ekipy!</a></li>
                    </ul>
                </div>
            	<div class="col-md-6">
                    <ul class="list">
                        <li><a href="o-nas.php">O nas</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li>
                        <li><a href="ciacho.php">Ciasteczka</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-2 footer-social">
            	<h4>Bądź na bieżąco!</h4>
            	<ul>
                	<li><a href="<?php echo $fb ?>" target="_blank">Facebook</a></li>
                	<li><a href="<?php echo $tt ?>" target="_blank">Twitter</a></li>
                	<li><a href="<?php echo $insta ?>" target="_blank">Instagram</a></li>
                	
                </ul>
            </div>
        	<div class="col-md-3 footer-ns">
            	<h4>Info</h4>
                <p>Dziękuję stacji <a href="http://www.stacjamikrofonia.pl/" target="_blank">Mikrofonia</a> za zgodę na podłączenie serwera ShoutCast pod szablon.</p>
                <div class="col-md">
                	<h4>Programy:</h4>
                     <ul class="listprog">
                        <li><a href="https://notepad-plus-plus.org/downloads/" target="_blank">Notepad++</a> Edytor kodu</li>
                        <li><a href="https://www.apachefriends.org/pl/index.html" target="_blank">XAMPP</a> Serwer www</li>
                        <li><a href="https://www.gimp.org/" target="_blank">Gimp</a> Edytor grafiki</li>
                    </ul>
                 </div>
            </div>
            <div class="szab-inf">Szablon wykonany przez: <a href="https://www.facebook.com/ekostipl" target="_blank">eKosti.pl</a></div>
        </div>

    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
	
	      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script src="js/jquery.shoutcast.easy.min.js?host=<?php echo $ip?>&port=<?php echo $port?>"></script>
  </body>
</html>
