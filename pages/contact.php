<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Ninetythree | Home</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/override.css">
    <script type="text/javascript" src="../js/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/ninetythree.js"></script>
</head>
<body  id="contact-page">
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
<div class="container">
    <div class="page-heading text-center">
        <h2>Get in touch</h2>
        <hr width="200px" class="line-turquoise">
    </div>
    <div class="col-lg-4 col-lg-offset-1 border-turquoise" id="contact-details">
        <h4>Address</h4><p>ipsum dolor sit amet</p><br>
        <h4>Fax</h4><p>ipsum dolor sit amet</p><br>
        <h4>Email</h4><p>ipsum dolor sit amet</p><br>
        <h4>Telephone</h4><p>ipsum dolor sit amet</p><br>
    </div>
    <div class="col-lg-4 col-lg-offset-1">
        <h2 class="page-heading">Enquiry</h2><br>
        <form class="form-groupsform-horizontal">
            <div class="row">
                <label for="fullname" class="control-label">Name</label>
                <input class="form-control input-sm" type="text" required="required" id="fullname">
            </div>
            <div class="row">
                <label for="email" class="control-label">Email</label>
                <input class="form-control input-sm " type="password" required="required" id="email">
            </div>
            <div class="row">
                <label for="phonenumber" class="control-label">Contact Number</label>
                <input class="form-control input-sm" type="text" id="phonenumber">
            </div>
            <div class="row">
                <label for="message" class="control-label">Message</label>
                <textarea class="form-control input-sm" required="required" id="message" cols="250" rows="3"></textarea>
            </div>
            <br>
            <a href="" class="btn btn-sm btn-def-orange">Submit</a>
        </form>
    </div>
</div>
</body>
</html>