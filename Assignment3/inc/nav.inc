<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">Idiotville</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item">
              <a class = "<?php if($thisPage == 'home'){echo 'current';}?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class = "<?php if($thisPage == 'alejandro_abreu'){echo 'current';}?>" href="alejandro_abreu.php">Alejandro Abreu</a>
            </li>
            <li class="nav-item">
              <a class = "<?php if($thisPage == 'fiyinfoluwa_oluyinka'){echo 'current';}?>" href="fiyinfoluwa_oluyinka.php">Fiyinfoluwa Oluyinka</a>
            </li>
            <li class="nav-item">
              <a class = "<?php if($thisPage == 'jonathan_hirsch'){echo 'current';}?>" href="jonathan_hirsch.php">Jonathan Hirsch</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>