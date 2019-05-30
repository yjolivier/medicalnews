<?php include "header.php"; ?>
<!-- cette fonction php apppelle le fichier header.php-->
<div class="row carousel-container$slide_status">
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
      <?php
        $nbr_slide = 1 ;
        while ( $nbr_slide <= 3) {
          $slide_status = "";
          if($nbr_slide ==1) {
           $slide_status = "active"; 
          }

          echo '<div class="carousel-item slide '.$slide_status.'">
                  <img src="img/slide_'. $nbr_slide .'.jpg" width="100%" height="auto">
                    <div class="slide-article">
                      <h4>
                        Insuffisance
                    Cardiaque: Décelée
                    par un test sanguin
                      </h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.project
                    imagesProvide extra support for senior citizen
                      </p>
                    </div>
                </div>';
          $nbr_slide++;
  		  }   
      ?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	</div>
</div>
<section>
  <h3 align="center">ACTUALITE</h3>
  <hr width="80%" size="0.25" color="#ccc">
	<div class="row block-article">
    <?php
      $nombre_articles = 1 ;
        while ($nombre_articles <= 6) {
          echo '<div class="card article col-sm-4">
            <img src="img/Médecine-quantique.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">
                  <h5>La chirurgie ambulatoire, la nouvelle façon d’opérer</h5>
          <p>27 Déc 2011, Aucun commentaire sur La chirurgie ambulatoire, la nouvelle façon d’opérer</p>
              </p>
            </div>
        </div>';
        $nombre_articles++;
      }
    ?>
  </div>
</section>
<!-- Insertion du fichier footer.php-->
<?php include "footer.php"; ?>