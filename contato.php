
<?php 
    /*
        Template Name: Contato
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

            


            <div class="wrap-interna">

                <div class="left-form">
                    <p>Entre em contato atravéz do formulário abaixo, nossa equipe analisará e retornará o mais breve possível.</p>
                    
                <?php query_posts('posts_per_page=1') ?>
                    <?php while(have_posts()) : the_post(); ?>
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Contato"]'); ?>
                <?php endwhile; ?>
                    <!-- <ul>
                        <li><input type="text" placeholder="NOME"></li>
                        <li><input type="text" placeholder="E-MAIL"></li>
                        <li><input type="text" placeholder="ASSUNTO"></li>
                        <li><textarea name="" placeholder="MENSAGEM" cols="30" rows="10"></textarea></li>
                        <li><input type="submit" value="Enviar"></li>
                    </ul> -->
                </div><!-- /left-form -->

                <div class="right-form">
                    <div class="info-contato">
                        <h2 class="branco">LOJA</h2>
                        <p>
                             (11) 3159.0824 <br>
                             produtos@aocubo3.com
                        </p>
                        <br>
                        <h2 class="branco">EVENTOS</h2>
                        <p>
                            (11) 2901.2499 ou (11) 3129.5895 <br>
                            produtos@aocubo3.com
                        </p>
                    </div><!-- /info-contato -->    
                </div><!-- /right-form -->

            </div><!-- /wrap -->

    </div><!-- /content -->
    
<?php include('footer.php'); ?>