<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Cosmorama</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              CATÁLOGO
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php foreach($categories as $category): ?> 
            
              <a class="dropdown-item" href="#"><?= $category->getName() ?></a>
              

            <?php endforeach; ?> 
              
            </div>
          <li class="nav-item">
            <a class="nav-link" href="#">Condiciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>