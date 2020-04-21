<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-dark btn-lg btn-block" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
          Zobacz co leciało!
        </button>
      </h2>
    </div>

    <div id="collapse0" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body align-self-center">
        <ul class="lista" id="played"></ul>
      </div>
    </div>
  </div>
  
  
    <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-dark btn-lg btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Pozdrowienia
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body align-self-center">
        <center><iframe src="https://<?PHP echo $panel?>.panelradiowy.pl/embed.php?script=pozdrowienia" scrolling="no" border="0" marginwidth="0" marginheight="0" frameborder="no" width="300" height="250"></iframe></center>
      </div>
    </div>
  </div>
  
  
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-dark btn-lg btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Pozdrowienia (na stronie)
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <center><iframe src="https://<?PHP echo $panel?>.panelradiowy.pl/embed.php?script=onlineform" scrolling="no" border="0" marginwidth="0" marginheight="0" frameborder="no" width="300" height="250"></iframe></center>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-dark btn-lg btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Utwór na życzenie 
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <center><iframe src="https://<?PHP echo $panel?>.panelradiowy.pl/embed.php?script=utwor" scrolling="no" border="0" marginwidth="0" marginheight="0" frameborder="no" width="300" height="250"></iframe></center>
      </div>
    </div>
  </div>
</div>