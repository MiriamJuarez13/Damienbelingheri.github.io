  <header>
    <section class="masthead d-flex">
      <div class="container home__header">
        <img id="logo" src="https://zupimages.net/up/20/17/7tod.png" alt="" />
    </section>

    <!-- Slider -->
    <section class="content-section bg-light" id="promotions">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
              xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
              aria-label="Placeholder: First slide">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#555" dy=".3em">First
                slide</text>
            </svg>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
              xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
              aria-label="Placeholder: Second slide">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#666" /><text x="50%" y="50%" fill="#444" dy=".3em">Second
                slide</text>
            </svg>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
              xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
              aria-label="Placeholder: Third slide">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#555" /><text x="50%" y="50%" fill="#333" dy=".3em">Third
                slide</text>
            </svg>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>





    <!-- Categories -->

    <section class="content-section" id="portfolio">
      <div class="container-categories">
        <div class="row no-gutters">

       <!--  TODO Ajouter un lien qui renvoie a la cat séléctionné  -->
          <?php foreach($categories as $category) :?>

          <div class=" overlay-image _bo col-lg-6"><a href="URL_LIEN">
              <img class=" image _bp " src=" <?= $assetsBaseUri ?><?=$category->getPicture(); ?> " alt="Alt text" />   
              <div class=" hover _bq ">
                <img class=" image _bp blur " src=" <?= $assetsBaseUri ?><?=$category->getPicture(); ?> " alt="<?= $category->getName()  ?>" />
                <div class=" text _q "> <?= $category->getName()  ?> </div>
              </div>
            </a>
          </div>

          <?php endforeach;?>


        </div>
      </div>
    </section>

  </header>