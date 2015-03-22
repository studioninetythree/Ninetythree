<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Ninetythree | My Portal</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/override.css">
    <script type="text/javascript" src="../js/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
</head>
<body>
<nav  class="navbar navbar-fixed-top" id="primary-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar dark"></span>
                <span class="icon-bar dark"></span>
                <span class="icon-bar dark"></span>
            </button>
            <a href="index.html" class="navbar-brand">ninetythree</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="team.php">Our Team</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br><br>
<!-- ERROR-->
<div id="error-page">
    <div class="container">
        <div class="jumbotron text-center col-lg-4 col-lg-offset-4">
            <h2 class="page-heading">Login</h2><br>
            <form class="form-group">
                <input class="form-control input-sm text-center" type="text" placeholder="username" required="required"><br>
                <input class="form-control input-sm text-center" type="password" placeholder="password" required="required">
            </form>
            <br>
            <a href="../index.php" class="btn btn-sm btn-def-orange">Login</a><br><br><br>
            <a href="../index.php" class="btn-link">Forgot password?</a>
        </div>
    </div>
</div>
</body>
</html>