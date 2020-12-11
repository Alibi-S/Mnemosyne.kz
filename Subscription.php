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
    <title>Subscription</title>
      
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
                <a class="nav-link font nav_size" href="Recomendations.php">Recomendations</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link font nav_size" href="#">Liked</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link font nav_size nav_current" href="Subscription.php">Subscription</a>
              </li>
             </ul>
        </div>
        <a class="btn btn-outline-secondary font login_button" href="Log-in.php">Log In</a>
     </nav>
    
      
      
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Subscription</h1>
  <p class="lead">With a subscription, you get a huge number of podcasts without ads, as well as the ability<br>to download to your device and listen offline. You can also listen in free mode.</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header font"  style="background: #6273bd; color: white">
        <h4 class="my-0 font-weight-normal">Free</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li style="color: #00CC33">Play Podcast</li>
          <li style="color: #df1125">No Offline Mode</li>
          <li style="color: #df1125">With Ads</li>
          <li style="color: #df1125">1 hours per day</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary font square_button" style="color: white;">Get started</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header font" style="background: #6273bd; color: white">
        <h4 class="my-0 font-weight-normal">Student</h4>
      </div>
      <div class="card-body" >
        <h1 class="card-title pricing-card-title">$3 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li style="color: #00CC33">Play Podcast</li>
          <li style="color: #00CC33">Offline Mode</li>
          <li style="color: #00CC33">No Ads</li>
          <li style="color: #df1125">3 hours per day</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary font square_button" >Get started</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header font" style="background: #6273bd; color: white">
        <h4 class="my-0 font-weight-normal">Premium</h4>
      </div>
      <div class="card-body" >
        <h1 class="card-title pricing-card-title">$5 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li style="color: #00CC33">Play Podcast</li>
          <li style="color: #00CC33">Offline Mode</li>
          <li style="color: #00CC33">No Ads</li>
          <li style="color: #00CC33">No Limit</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary font square_button">Get started</button>
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
