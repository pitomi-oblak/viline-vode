<?php
include('admin/controllers/form.controller.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Viline Vode</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Custom font from Google Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

    <!-- Social font -->
    <link href="./css/social-font.css" rel="stylesheet">

    <!-- Template stylesheet -->
    <link href="./css/metronome.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<div class="body-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="logo">
                <img src="img/logo.png">
            </div>
        </div>
    </div>

    <div class="row" id="contact-row">
        <div class="col-sm-4 col-sm-push-6 col-xs-12 right-side">
            <h3 class="title">Contact Informations</h3>
            <div class="wrapper-info">
                <div>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i></i><span>info@vilinevode.me</span>
                </div>
                <div>
                    <i class="fa fa-phone" aria-hidden="true"></i><span>020/864-144</span>
                </div>
                <div>
                    <i class="fa fa-map-marker" aria-hidden="true"></i><span>Biocinovići BB, Kolašin</span>
                </div>
                <div>
                    <i class="fa fa-clock-o" aria-hidden="true"></i><span>09:00 - 23:00</span>
                </div>
            </div>
        </div>
        <div class="left-side col-sm-offset-2 col-sm-4 col-sm-pull-4 col-xs-12">
            <h3 class="title">Contact Us</h3>
            <form id="contact-form" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <input id="input-name" name="name" type="text" placeholder="Name" value="<?php echo $name; ?>">
                <input id="input-email" name="email" type="email" placeholder="Email" value="<?= $email; ?>">
                <div>
                    <span class="error"><?= $name_error ?></span>
                    <span class="error"><?= $email_error ?></span>
                </div>
                <textarea id="input-message" name="message" type="text" placeholder="Message"></textarea>
                <span class="error"><?= $message_error ?></span>
                <i id="loading" class="fa fa-spinner fa-spin" style="font-size:26px; display: none"></i>
                <input id="input-submit" type="submit" value="Submit" data-submit="...Sending">
                <span class="success"><?= $success; ?></span>
            </form>
        </div>
    </div>
</div>
<!-- Scripts -->
<script>window.jQuery || document.write('<script src="./js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="./js/jquery.countdown.js"></script>
<script src="./js/placeholders.min.js"></script>
<script src="./js/metronome.js"></script>
<script src="./js/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>