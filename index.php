<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>UndercoverWord</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Custom js -->
    <script src="gestion_pages/pages.js"></script>
  
  </head>

  <body>

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">UndercoverWord</h3>
          <nav class="nav nav-masthead justify-content-end">
            <a id="accueil" class="nav-link active" onclick="accueil()">Accueil</a>
            <a id="regles" class="nav-link" onclick="regles()">Règles du jeu</a>
            <a id="contact" class="nav-link" onclick="contact()">Contact</a>
          </nav>
        </div>
      </header>

      <main id="return" role="main" class="inner cover text-center">
        <?php
          include 'gestion_pages/pages.php';
        ?>   
      </main>
    
      <footer class="mastfoot mt-auto">
        <div class="inner">
          <a href="https://patchkit.net/" target="_blank" class="d-flex justify-content-center"><img src="img/launched_hosted_by_black_transparent.png" alt="hosted by black pill" class="img_footer"></a>
        </div>
      </footer>

    </div>


	 <script src="js/jquery-3.5.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>
