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

            

            
            <?php while(have_posts()) : the_post(); ?>    
            <div class="wrap-interna">
                <div class="single">
                    <span><?php echo get_the_date('d/m/Y') ?></span>
                    <h2><a href="#"><?php the_title(); ?></a></h2>
                    <?php the_post_thumbnail(); ?>

                    <?php the_content(); ?>


                    <div class="compartilhar">
                        <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo curPageURL(); ?>%2Fdocs%2Fplugins%2F&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="pt">Tweetar</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        <span class="pra-q">
                            <a href="mailto:gustavo@imaginar.com.br?body=<?php echo curPageURL(); ?>" style="margin-right:15px"><img src="<?php bloginfo('template_url') ?>/assets/imagens/icon-email.jpg" alt=""></a>
                            <a href="javascript:print();"><img src="<?php bloginfo('template_url') ?>/assets/imagens/icon-imprimir.jpg" alt=""></a>
                        </span>
                        <span class="pra-q">
                            <em>Link</em>
                            <input value="<?php echo curPageURL(); ?>" name="select" class="focus" type="text" />
                        </span>


                    </div><!-- /compartilhar -->
                    
                    <a href="javascript:history.go(-1)" class="btn mTop20">Voltar</a>
                </div><!-- /single -->

               
            </div><!-- /wrap -->
            <?php endwhile; ?>
            

    </div><!-- /content -->
    
<?php include('footer.php'); ?>