<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCSS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<header>

<div class="container-fluid bg-success fixed-top" style="z-index: 6; height:25px;">
    <div class="row">
        <div class="col-6">
            fsdf
        </div>
        <div class="col-6">
            sf
        </div>
    </div>
</div>

<nav style="margin-top: 25px;" class="navbar navbar-expand-lg navbar-light  bg-success bg-light fixed-top">

    

  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://rajagiri.edu/images/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/aboutus">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/courses">ADMISSIONS</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/contactus">ACADEMICS</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/contactus">EXAMINATION</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/contactus">RESEARCH</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/contactus">LIVE LABS</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/contactus">GLOBAL LINKAGES</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<main>
    @yield("content")
</main>
<!-- <footer>
    <h3>this is footer</h3>
</footer> -->
<div class="footer-bot bg-light">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-12 col-lg">
                                <p>Copyright ©  2019 Rajagiri. All Rights Reserved. Website Designed and Maintained by <span>Intersmart</span></p>
                            </div>
                            <div class="col-12 col-lg-auto">
                                <ul class="list-unstyled">
                                    <li><a href="https://www.facebook.com/Rajagiri-College-of-Social-Sciences-Autonomous-1376623805998150/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/hashtag/rajagiri" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://plus.google.com/108128696793864326281" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.youtube.com/watch?v=MGAbYTU4pYY" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a href="https://www.linkedin.com/school/rajagiri-college-of-social-sciences-autonomous" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <p>
                                <a class="nav-link text-success" href="movie">movie</a>
                                <a class="nav-link text-success" href="product">Product App</a>
                                <a class="nav-link text-success" href="student">Student app</a>
                                </p>
                                
                            </div>
                        </div>
                    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</html>