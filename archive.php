<?php include "header.php"; ?>
      <div class="row">
        <div class="slide_archive">
          <img src="img/Pills.jpg"  width="100%">
          <div class="slide-article">
            <h2>ACTUALITE</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm block-info">
          <div class="row block-article">
            <?php
                $nombre_articles = 1 ;
                  while ($nombre_articles <= 4) {
                    echo '<div class="card article col-sm-6">
                            <img src="img/CHU.jpg" class="card-img-top" alt="...">
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
        </div>
       <?php include "sidebar.php"; ?>
<?php include "footer.php"; ?>