<?php 
    /*
        Template Name: Cleber
    */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<!--[if IE]><![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ao cubo</title>
<meta name="author" content="" />
<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/imagens/aocubo.png" />
<!-- Facebook -->
<meta property="og:title" content=""/>
<meta property="og:type" content="website"/>
<meta property="og:url" content=""/>
<meta property="og:image" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<!-- HTML5 FOR IE -->
<!--[if lt IE 9]><script src="js/lib/html5.js"></script><![endif]-->
<!-- STYLESHEETS -->
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/lib/mediaBoxes.css" />
</head>
<body>
<div id="all">
    <!-- <div class="teste">
        <a href="#" class="close">X</a>
        <iframe src="//player.vimeo.com/video/88829296?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div> -->

    <div class="content grid-container" style="padding-top:100px;">

            <?php include('menu.php'); ?>

            <?php include('social.php'); ?>
            
            <img src="<?php bloginfo('template_url') ?>/assets/imagens/banner.jpg" width="100%" alt="Banner">

            <ul class="menu-interna">
                <li><a href="<?php echo get_permalink('7'); ?>">AO CUBO</a></li>
                <li class="active-nav"><a href="<?php echo get_permalink('18'); ?>">CLEBER</a></li>
                <li><a href="<?php echo get_permalink('24'); ?>">FEIJÃO</a></li>
                <li><a href="<?php echo get_permalink('20'); ?>">DJFJAY</a></li>
                <li><a href="<?php echo get_permalink('22'); ?>">DONA KELLY</a></li>
            </ul>


            <div class="wrap-interna">
                <?php while(have_posts()) : the_post(); ?>
                <p>
                    <?php the_content(); ?>
                </p>
                <?php endwhile; ?>
            </div><!-- /wrap -->


            

            <?php  $imagemm = get_field('thumbnail'); ?>
            <img src="<?php echo $imagemm['url']; ?>" width="100%" alt="">
            

    </div><!-- /content -->
    
<?php include('footer.php'); ?>