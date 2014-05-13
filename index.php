<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<!--[if IE]><![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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

        
        <div id="grid">
            
            <?php include('menu.php'); ?>

            <?php include('social.php'); ?>
            <div style="width:100%;height:500px;float:left"></div>

            <?php query_posts('post_type=home&posts_per_page=-1') ?>
            <?php while(have_posts()) : the_post(); ?>

            <?php  $image = get_field('thumb'); ?>
            <div class="box">
                <div class="box-image">
                    <div data-thumbnail="<?php echo $image['url']; ?>" ></div>
                    <div data-image="<?php echo $image['url']; ?>" ></div>
                    
                    <div class="thumbnail-caption">
                          <a href="#"><div class="hover-lightbox open-lightbox"><?php the_title(); ?></div></a>
                    </div>

                    <div class="lightbox-text">
                        <!-- Architecture <span>In Category 3</span> -->
                        <div class="wrap-interna" style="position: absolute;left: 50%;margin-left: -86px;">
                            <ul class="shared">

                                <li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $image['url']; ?>" target="_link"><img src="<?php bloginfo('template_url') ?>/assets/imagens/shared-facebook.png" alt=""></a></li>
                                <li><a target="_blank" href="https://twitter.com/intent/tweet?original_referer=<?php echo $image['url']; ?>&source=tweetbutton&text=Foto legal&url=<?php echo $image['url']; ?>"><img src="<?php bloginfo('template_url') ?>/assets/imagens/shared-twitter.png" alt=""></a></li>
                                <!-- <li><a href="#"><img src="<?php bloginfo('template_url') ?>/assets/imagens/shared-thumbler.png" alt=""></a></li> -->
                                <li><a href="mailto:?subject=Assunto entra aqui&body=Foto Legal <?php echo $image['url']; ?>"><img src="<?php bloginfo('template_url') ?>/assets/imagens/shared-email.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>

        </div> <!-- #container -->
    </div>
    
<?php include('footer.php'); ?>