<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset(); ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
    Sonerezh - <?php echo $title_for_layout; ?>
</title>

<meta name="description" content="Music player">

<link rel="manifest" href="/manifest.json">

<link rel="icon" sizes="192x192" href="/logo/logo_192.png">
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="Sonerezh">

<meta name="apple-mobile-web-app-title" content="Sonerezh">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon sizes=144x144" href="/logo/logo_192.png">

<meta name="msapplication-tooltip" content="Music player">
<meta name="msapplication-TileColor" content="#000000">
<meta name="msapplication-TileImage" content="/logo/logo_144.png">

<meta name="theme-color" content="#000000">
<?php echo $this->Html->meta('icon'); ?>
<?php echo $this->Html->css(array('bootstrap.min', 'login')); ?>
<?php

    echo $this->fetch('meta');
    echo $this->fetch('css');
?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <?php echo $this->Flash->render(); ?>
            </div>
        </div>
        <div class="row" id="content">
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
    <?php echo $this->Html->script(array(
        "jquery-2.1.0.min",
        "bootstrap.min")); ?>
    <?php echo $this->fetch('script'); ?>
</body>
</html>
