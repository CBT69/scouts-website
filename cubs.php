<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cubs</title>
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
                        <h1>Cubs</h1>
                        <br>
                        <section> <img src="img/124819880.jpg" alt="cubs scout" class="img-responsive img-c"> </section>
                        <br/>
                        <section>
                            <p>Cubs are for boys and girls aged between 8-10½ years old. They are the second section in the Scouting family. At the discretion of the Pack, the earliest joining age is 7½ years old and latest leaving age is on their 11th birthday. This allows young people to join and leave at a convenient time in the session i.e. start or end of a term. Cubs move onto Scouts when they are aged between 10½ and 11 years old. Cubs meet in Packs. Girls and boys can join either by direct entry into a Pack, or by moving up from our junior section - the Beaver Colony. Cubs enjoy adventures while making new friends along the way. As well as regular weekly meetings, Cubs also enjoy activity days, weekend camps and pack holidays. For taking part in activities Cubs earn badges and awards including the Cubs highest award, the Chief Scout’s Silver Award, as well as having fun and making friends. Cubs also gain awards for leadership, teamwork, personal development, and in Scotland, for awareness of their Scottish heritage through the Cub Scouts Scottish Challenge Badge. </p>
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