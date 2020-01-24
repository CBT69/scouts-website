<!DOCTYPE html>
<html lang="en">

<head>
    <title>Badges</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- NAVBAR-->
    <div class="container-fluid bg-1" id="wrapper">
        <div class="row">
            <?php include ('includes/nav.php')?>
        </div>
        <!--End of NAVBAR-->
        <!--CONTENT AREA-->
        <div class="container">
            <div class="row main-body">
                <div class="row">
                    <!--RIGHT PANEL-->
                    <div class="col-xs-12 col-sm-8 col-sm-push-4 col-md-9 col-md-push-3 col-lg-9 right-panel">
                        <h1>Badges</h1>
                        <br>
                        <h3>Click the image for description</h3>
                        <section>
                            <a href="#" onClick="window.open('badges.xml', '_blank')"> <img src="img/badges.png" alt="beaver scout" height="70%" width="70%" class="img-responsive img-c li-shadow"> </a>
                        </section>
                    </div>
                    <!--End of RIGHT PANEL-->
                    <!--LEFT PANEL-->
                    <div class="col-xs-12 col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9 col-lg-3 left-panel">
                        <div class="row">
                            <?php include ("includes/newsbox.php")?>
                                <div class="row">
                                    <h4>Contact Us</h4>
                                    <br>
                                    <h5>123 Main St.</h5>
                                    <h5>Oban</h5>
                                    <h5>PA34 3AB</h5>
                                    <h5>tel: 01896 358 269</h5>
                                    <h5>email: obanscouts@goscouts.com</h5> </div>
                        </div>
                    </div>
                    <!--Endo of LEFT PANEL-->
                </div>
            </div>
        </div>
    </div>
    <!--End of CONTENT-->
    <!--FOOTER-->
    <?php include('includes/footer.php')?>
        <!--End of FOOTER-->
</body>

</html>