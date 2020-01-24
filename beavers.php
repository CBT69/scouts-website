<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beavers</title>
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
                        <h1>Beavers</h1>
                        <br>
                        <section> <img src="img/92549511.jpg" alt="beaver scout" class="img-responsive img-c"> </section>
                        <br/>
                        <section>
                            <p>Beavers Scouting is for young people aged between 6 and 8 years of age. Beaver Scouting is all about having fun, making friends and learning new skills. Young people start to gain some independence while trying out many different activities and experiencing new adventures. The fun includes going on visits, making things, playing games and exploring the world around them. Beavers follow a Balanced Programme, earning Challenge Awards and Activity Badges, but the most important parts are joining in and trying their best. The Beaver Thistle Award compliments the existing awards and can be earned by completing two challenges from each of the five sections. The badges are available from Scottish Headquarters, for 35p each. Boys and girls aged 6 or 7 can become a Beaver Scouts and, around the time of their 8th birthday, Beavers 'swim up' to Cubs to continue on their path through Scouting.</p>
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