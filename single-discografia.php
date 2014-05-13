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
<style>
    iframe{
        background: #352e2b !important;
        float: left;
        height: 80px;
        width: 600px;
        color: red;
    }
</style>
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

            

              
            <div class="wrap" style="margin-top:100px">



                <?php while(have_posts()) : the_post(); ?>
                <div class="sidebar-cd">
                    <?php  $image = get_field('capa'); ?>
                    <img src="<?php echo $image['url']; ?> " alt="">
                    <a href="<?php the_field('link'); ?>" target="_blank" class="btn" style="margin-top:-10px;margin-left:35px;padding-right: 65px;padding-left:65px">COMPRAR</a>

                </div><!-- /sidebar-cd -->
                <?php endwhile; ?>







                <div class="dir-cd">
                    <h2 class="title-disco"><?php the_title(); ?> <br> <span><?php the_field('ano'); ?></span></h2>
                    <div class="clear"></div>

                    <p>
                        <?php the_content(); ?>
                    </p>

                    <div class="box-controle">
                        <!-- <iframe src="" frameborder="0">

                        </iframe> -->

                        <audio src="" autoplay="autoplay" style="background:#352e2b;width:600px" controls>
                        </audio>
                    </div><!-- /box-controle -->

                    <ul class="playlist">

                        <?php while(has_sub_field('faixa')): ?>
                        <?php $letra = get_sub_field('letra_musica'); ?>
                        <?php $url = get_sub_field('url_video'); ?>
                        <?php $url_musica = get_sub_field('file_musica'); ?>
                        <?php $letraTeste = get_sub_field('nome_musica');  ?>

                        <?php $teste = str_replace(array('ç', ' ', '-', '.', '?', 'é','á', 'ã'), '' , $letraTeste) ?>

                        <?php
                            $video_destaque_id = explode('v=', get_sub_field('url_video'));
                            $video_destaque_id = $video_destaque_id[count($video_destaque_id) -1];
                            $video_destaque_id = explode('&', $video_destaque_id);
                        ?>

                            
                        <li>
                            <span class="acao-musica">
                                <a href="<?php echo $url_musica['url']; ?>" data-video='<?php echo $url_musica['url']; ?>' class="ouvir <?php if(!empty($url_musica)) { echo 'achei'; } else { echo '';}  ?>">Ouvir</a>

                                <a href="#inline-<?php echo $teste; ?>" class="various letra <?php if(!empty($letra)) { echo 'achei inline'; } else { echo '';}  ?>">Letra</a>

                                <a href="//www.youtube.com/embed/<?php echo $video_destaque_id[0]; ?>?theme=light&color=red" class="various fancybox.iframe clip <?php if(!empty($url)) { echo 'achei'; } else { echo '';}  ?>">Clip</a>
                            </span>
                            <span class="branco"><?php the_sub_field('nome_musica'); ?></span>
                        </li>

                        <div style='display:none'>
                           <div class="letra-aberto" id="inline-<?php echo $teste; ?>">
                                <h2><?php echo $letraTeste ?></h2>
                                <?php echo $letra; ?>
                            </div>
                        </div>


                        <?php endwhile; ?>
                    </ul>
                </div><!-- /dir-cd -->

            </div><!-- /wrap -->

    </div><!-- /content -->
    
<?php include('footer.php'); ?>