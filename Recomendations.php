<!doctype html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" href="logo/Icon.png" type="image/x-icon">

    <link rel="stylesheet" href="css\bootstrap.css">
    <link href="css/album.css" rel="stylesheet">
    <link href="css/Main.css" rel="stylesheet">
    <title>Recomendations</title>
      
  </head>
  <body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="logo/Mnemosyne.svg" style="margin-left: 1em; margin-bottom: 0.3em; margin-top: 0.3em" alt="Mnemosyne">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="logo/Menu.png"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link font nav_size" href="index.php">Main</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link font nav_size nav_current" href="Recomendations.php">Recomendations</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link font nav_size" href="#">Liked</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link font nav_size" href="Subscription.php">Subscription</a>
              </li>
             </ul>
        </div>
        <a class="btn btn-outline-secondary font login_button" href="Log-in.php">Log In</a>
     </nav>
    <div class="container">

      <div class="row-sm">
          <div class="card mb">
                <img src="PodcastImages/kuji.png" class="img-fluid">
            <div class="card-body justify-content-between">
                    <a style="color: #979797">Humor<br></a>
                    <div class="row">
                    <a class="col-sm-9 title_style" style="text-decoration: none;">KUJI PODCAST</a>
                    <button type="button" class="btn btn-sm btn-outline-secondary col-sm-3 podcast_button"><a class="hide_url" href="#">Play Podcast</a></button>
                </div>
              </div>
            </div>
          </div>
       <div class="row-sm">
          <div class="card mb">
                <img src="PodcastImages/meduza.png" class="img-fluid">
            <div class="card-body justify-content-between">
                    <a style="color: #979797">Informational<br></a>
                    <div class="row">
                    <a class="col-sm-9 title_style">What to see</a>
                    <button type="button" class="btn btn-sm btn-outline-secondary col-sm-3 podcast_button"><a class="hide_url" href="#">Play Podcast</a></button>
                    </div>
              </div>
            </div>
        </div>
       <div class="row-sm">
          <div class="card mb">
                <img src="PodcastImages/ted.png" class="img-fluid">
            <div class="card-body justify-content-between">
                    <a style="color: #979797">Informational<br></a>
                    <div class="row">
                    <a class="col-sm-9 title_style">Ted Talks Daily</a>
                    <button type="button" class="btn btn-sm btn-outline-secondary col-sm-3 podcast_button"><a class="hide_url" href="#">Play Podcast</a></button>
                    </div>
              </div>
            </div>
        </div>
        
        
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
          <small class="d-block mb text-muted col-sm-3">Mnemosyne &copy; 2020</small>
          <a class="text-muted col-sm-2" href="#">Team</a>
          <a class="text-muted col-sm-2" href="#">Locations</a>
          <a class="text-muted col-sm-2" href="#">Privacy</a>
          <a class="text-muted col-sm-2" href="#">Terms</a>
      </div>
  </footer>
        
        
    </div>
      <script src="js\jquery-3.5.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>