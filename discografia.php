<?php 
    /*
        Template Name: Discografia
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
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/lib/jquery.fancybox.css" />
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


            <div class="wrap-interna-midias">

                <div class="content-midias">
                    <h2 style="margin-left:345px !important">CD'S</h2>
                    <div class="clear"></div>
                    <ul>
                       <?php query_posts(array('post_type' => 'cd', 'posts_per_page' => '-1', 'meta_key' => 'ano', 'orderby' => 'meta_value', 'order' => 'DESC')) ?>
                        <?php while(have_posts()) : the_post(); ?>
                        <li>
                            <?php  $image = get_field('capa'); ?>
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url']; ?>" alt="Discografia"></a>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <div class="clear"></div>
                            <span><?php the_field('ano'); ?></span>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div><!-- /content-midias -->


                <div class="content-midias">
                    <h2 style="margin-left:345px !important">DVD'S</h2>
                    <div class="clear"></div>
                    <ul>
                        <?php query_posts('post_type=dvd&posts_per_page=-1'); ?>
                        <?php while(have_posts()) : the_post(); ?>
                        <li>
                            <?php  $image = get_field('capa'); ?>
                            <a href="<?php echo $image['url']; ?>" class="fancybox"><img src="<?php echo $image['url']; ?>" alt=""></a>
                            <a href="<?php echo $image['url']; ?>"><?php the_title(); ?></a>
                            <div class="clear"></div>
                            <span><?php the_field('ano'); ?></span>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div><!-- /content-midias -->


            </div><!-- /wrap -->

    </div><!-- /content -->
    
<?php include('footer.php'); ?>