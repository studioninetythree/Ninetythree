<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Ninetythree | Home</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/override.css">
    <script type="text/javascript" src="scripts/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="scripts/bootstrap.js"></script>

</head>
<body>
<nav  class="navbar navbar-fixed-top " id="primary-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">ninetythree</a>
        </div>
    </div>
</nav>

<!-- HOME-->
<div id="home-page">
    <div id="home-banner">
        <div class="carousel slide" id="home-banner-slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#home-banner-slide" data-slide-to="0" class="active"></li>
                <li data-target="#home-banner-slide" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="resources/img/banners/1.jpg" >
                </div>
                <div class="item">
                    <img src="resources/img/banners/2.jpg">
                </div>
            </div>
            <a href="#home-banner-slide" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#home-banner-slide" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-lg-offset-4 text-center">
        <h2 class="page-header">Ninetythree</h2>
        <p class="panel-body">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="about.html" class="btn btn-lg btn-def" >Let's Start Building</a>

        <form name="someform" method="post" action="php/connection.php">
            <input type="submit" class="btn btn-lg btn-def" >
        </form>
    </div>
</div>
</body>
</html>