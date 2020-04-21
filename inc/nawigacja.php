<!--Main Navigation-->
<header>

  <nav class="navka navbar fixed-top navbar-expand-lg bg-dark navbar-dark scrolling-navbar">
    <a class="navbar-brand text-white" href="<? echo $strona ?>"><img src="grafika/logo-m.png" class="logo-m" /><strong><?php echo $nazwa; ?></strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navka-lnk" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<? echo $strona ?>">Strona Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="o-nas.php">O nas</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" style="color: #f1f104;" href="czat.php">Czat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontakt.php">Kontakt</a>
        </li>
      </ul>
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a href="<?php echo $fb ?>" target="_blank" class="nav-link"><i class="fa fa-facebook-f"></i></a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $tt ?>" target="_blank" class="nav-link"><i class="fa fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $insta ?>" target="_blank" class="nav-link"><i class="fa fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </nav>

</header>
<!--Main Navigation-->