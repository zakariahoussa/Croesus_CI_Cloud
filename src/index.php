<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #333;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Simple PHP App</h1>
                <h2>Congratulations</h2>
                <p>Your Zak application is now running on a container in Amazon ECS.</p>
                <p>The container is running PHP version <?php echo phpversion(); ?>.</p>
                <?php
                        $myfile = fopen("/var/www/my-vol/date", "r") or die("");
                        echo fread($myfile,filesize("/var/www/my-vol/date"));
                        fclose($myfile);
                ?>

            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
                                                         <!-- Section anglais -->
                                                        <?php if($enSection != null){ ?>
                                                                <div id="enSection" test-id="en-section" class="lang-section">
                                                                        <?php if($enSection->logo != null && $enSection->logo != ""){ ?>
                                                                                <?php if($launcher->active == null || ($launcher->active != null && $launcher->active == false)){ ?>
                                                                                        <a class="imglink" href="crweb/cgi-bin/crco.cgi?<?php echo $params; ?>&lang=en"><img test-id="client-logo-en" src="<?php echo $enSection->logo; ?>" alt="logo"></a>
                                                                                <?php } ?>
                                                                                <?php if($launcher->active != null && $launcher->active == true){ ?>
                                                                                        <a class="imglink" href="crweb/cgi-bin/crcolauncher.cgi?<?php echo $params; ?>&lang=en"><img test-id="client-logo-en" src="<?php echo $enSection->logo; ?>" alt="logo"></a>
                                                                                <?php } ?>
                                                                        <?php } ?>
                                                                        <h2 test-id="en-title"><?php echo $enSection->title; ?></h2>
                                                                                <p test-id="en-description"><?php echo $enSection->description; ?></p>

                                                                                <?php if($launcher->active == null || ($launcher->active != null && $launcher->active == false)){ ?>
                                                                                        <a test-id="en-button" href="crweb/cgi-bin/crco.cgi?<?php echo $params; ?>&lang=en"><?php echo $enSection->button; ?></a>
                                                                                <?php } ?>
                                                                                <?php if($launcher->active != null && $launcher->active == true){ ?>
                                                                                        <a test-id="en-button" href="crweb/cgi-bin/crcolauncher.cgi?<?php echo $params; ?>&lang=en"><?php echo $enSection->button; ?></a>
                                                                                <?php } ?>
                                                                </div>
                                                        <?php } ?>
</html>
