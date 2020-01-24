<!DOCTYPE html>
<html lang="en">

<head>
    <title>Leaders</title>
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
                        <h1>Leaders</h1>
                        <br>
                        <section><img src="img/531906987.jpg" alt="scout leaders" class="img-responsive img-c"></section>
                        <br/>
                        <div>
                            <p>You don’t have to be an adventurer like Bear Grylls to get involved with Scouting. Do you have first aid knowledge? Are you good with numbers? Handy in the kitchen? Or are you a DIY whizz? We all have useful skills and you can volunteer and help in many ways. Volunteering with us is easy, fun and flexible – how much time you give is completely up to you. Whether you help out once a fortnight, month or term or just at special events or camps, there is bound to be a role you can play, and no matter how you get involved, we'll make sure you're properly trained and supported. As well as gaining externally recognised skills and having a brilliant time, Scouting also offers the chance to build on personal skills, like teamwork, confidence and leadership. A study found that over 90% of our volunteers believe that the skills and experiences they have gained through Scouting have been of relevance to their working or personal lives. Many of our helpers and leaders are parents of our youth members because they’ve seen firsthand how Scouting benefits young people and want to give something back. It’s also a chance to spend more time with your children and learn new skills. Speak to your child’s leader to discuss how you might become involved. As long as you're over 18, you can help out as an adult volunteer in Scouting. There is no upper age limit for adult volunteers. If you are aged between 14 to 18, there is the option of becoming a Young Leader.</p>
                        </div>
                        <div>
                            <?php include ('includes/application.php')?>
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