<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'connection.php'; ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Free Responsive Admin Theme - ZONTAL</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <strong>Email: </strong>dranken@bijna-weekend.nl
            </div>

        </div>
    </div>
</header>
<!-- HEADER END-->
<div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">

                <img class="logo-width" src="assets/img/logo.png" />
            </a>

        </div>

        <div class="left-div">
            <div class="user-settings-wrapper">
                <ul class="nav">

                    <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                        </a>
                        <div class="dropdown-menu dropdown-settings">
                            <div class="media">
                                <a class="media-left" href="#">
                                    <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Jhon Deo Alex </h4>
                                    <h5>Developer & Designer</h5>

                                </div>
                            </div>
                            <hr />
                            <h5><strong>Personal Bio : </strong></h5>
                            Anim pariatur cliche reprehen derit.
                            <hr />
                            <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>

                        </div>
                    </li> -->


                </ul>
            </div>
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<section class="menu-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a class="menu-top-active" href="drank.html">Drank</a></li>
                        <li><a href="fris.html">Fris</a></li>
                        <li><a href="overig.html">Overig</a></li>
                        <li><a href="bestel.html">Bestellen</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- MENU SECTION END-->
<div class="content-wrapper">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">Wijn</h1>
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        <!--   Basic Table  -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Wijn
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Inhoud</th>
                            <th>Prijs in €</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT naam, inhoud, prijs FROM wijnlijst";
                            $result = mysqli_query($db,$sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["naam"]. "</td>" . "<td>" . $row["inhoud"]. "</td><td>" . $row["prijs"]. "</td></tr>";
                                }
                            } else {
                                echo "0 results";
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Basic Table  -->
    </div>
</div>
</div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; 2015 Deheerdevelopment | By : <a href="http://www.deheerdevelopment.nl/" target="_blank">Tim de Heer</a>
            </div>

        </div>
    </div>
</footer>
<!-- FOOTER SECTION END-->
<!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS  -->
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
