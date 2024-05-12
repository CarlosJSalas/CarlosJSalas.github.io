<?php 
    require_once(APPPATH."lang/pt/lang-config.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <title>
            <?php lang($app_name) ?>
        </title>

        <!-- JAVASCRIPTS -->
        
        <script type="text/javascript" src="<?php echo base_url() ?>public/js/displaychange.js"></script>
        <!-- METAS -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
        <!---------//---------->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/app.css">
        <!-- OTHER -->
        <link rel="icon" href="../img/favicon.png">
    </head>
    <body>
    <div class="all-header">
        <div class="header">
            <h1 class="font-title">
                <a href="<?php echo base_url().'' ?>" class="default-link"><?php lang($app_name); ?> </a>
            </h1>
        </div>
        <ul class="header-list header-line font-text">
            <li><a href="<?php echo base_url('login/logout')?>"><?php lang($exit); ?></a></li>
            <!--<li><a href="<?php echo base_url().'calendaradmin' ?>"><?php lang($calendar_admin); ?></a></li>-->
            <li><a href="<?php echo base_url().'useradmin' ?>"><?php echo "Clientes" ?></a></li>
            <li><a href="<?php echo base_url().'galleryadmin' ?>"><?php lang($gallery_admin); ?></a></li>
            <li><a href="<?php echo base_url().'shopadmin' ?>"><?php lang($shop_admin); ?></a></li>
            <li><a href="<?php echo base_url().'admin' ?>"><?php lang($admin); ?></a></li>
        </ul>

        <ul class="mobile-list">
            <li><a href="<?php echo base_url().'admin' ?>"><?php lang($admin); ?></a></li>
            <li><a href="<?php echo base_url().'shopadmin' ?>"><?php lang($shop_admin); ?></a></li>
            <li><a href="<?php echo base_url().'galleryadmin' ?>"><?php lang($gallery_admin); ?></a></li><br/>
            <li><a href="<?php echo base_url().'useradmin' ?>"><?php echo "Clientes" ?></a></li>
            <!--<li><a href="<?php echo base_url().'calendaradmin' ?>"><?php lang($calendar_admin); ?></a></li>-->
            <li><a href="<?php echo base_url('login/logout')?>"><?php lang($exit); ?></a></li>
        </ul>
    </div>
    <img class="banner width-100 banner-top" src="<?php echo base_url().'public/img/banneradmin.jpg' ?>"/>
