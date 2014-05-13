<?php 
    /*
        Template Name: Mídias
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
                    <h2 style="margin-left:345px !important">Fotos</h2>
                    <div class="clear"></div>
                    <ul>
                        <?php $albums = get_posts('post_type=albuns&order=desc&posts_per_page=-1');
                        $i=1;
                        foreach ($albums as $v) {
                            if ($i == 4) { $i = 1; }
                        ?>
                            <li>
                                <?php 
                                $images = get_field('fotos', $v->ID);
                                $images = get_field('fotos', $v->ID);
                                $x = 1;
                                foreach ($images as $v2) {
                                    if ($x > 1) {
                                        $display = 'display:none;';
                                    } else {
                                        $display = 'display:block;';
                                    }
                                ?>                            
                                    <a class="fancybox" data-fancybox-group="button-<?php echo $v->ID?>" href="<?php echo $v2['url']?>">
                                    <?php if ($x <= 1) {?>
                                        <?php echo get_the_post_thumbnail($v->ID); ?>

                                        <span><?php echo get_the_date('d/m/Y'); ?></span><br>
                                        <?php echo $v->post_title;?>
                                    <?php } ?>    
                                    </a>
                                <?php $x++; }?>                           
                            </li>
                        <?php $i++; } ?>

                    </ul>
                </div><!-- /content-midias -->

                <div class="content-midias">
                    <h2 style="margin-left:345px !important">Vídeos</h2>
                    <div class="clear"></div>
                    <ul>
                        <?php 
                            query_posts('post_type=videos&posts_per_page=-1');
                            while(have_posts()) :  the_post();
                        ?>
                        <?php
                            $video_destaque_id = explode('v=', get_field('link'));
                            $video_destaque_id = $video_destaque_id[count($video_destaque_id) -1];
                            $video_destaque_id = explode('&', $video_destaque_id);
                        ?>
                        <?php
                            // pega imagem de miniatura do video
                            $img_video = explode('v=', get_field('link'));
                            $img_video = explode('&',$img_video[1]);
                            $img_video = ('http://i1.ytimg.com/vi/' . $img_video[0] . '/0.jpg');
                            // Pega o ID do vídeo
                            $video_id = explode('v=', get_field('link'));
                            $video_id = $video_id[count($video_id) -1];
                            $video_id = explode('&', $video_id);
                        ?>
                        <li>

                            <a href="//www.youtube.com/embed/<?php echo $video_destaque_id[0]; ?>?theme=light&color=red" class="various fancybox.iframe" title="<?php the_title(); ?>">
                                <img src="<?php echo $img_video; ?>" width="250" class="gray-img">
                            
                                <span><?php echo get_the_date('d/m/Y'); ?></span><br>
                                <?php the_title(); ?>
                            </a>    
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div><!-- /content-midias -->


                <div class="content-midias">
                    <h2 style="margin-left:325px">Wallpaper</h2>
                    <div class="clear"></div>
                    <ul>
                        <?php query_posts('post_type=wallpaper&posts_per_page=-1') ?>
                        <?php while(have_posts()) : the_post(); ?>
                        <li>
                            <?php 

                                $attachment_id = get_field('wallpaper');
                                $url = wp_get_attachment_url( $attachment_id );
                                $title = get_the_title( $attachment_id );
 
                            ?>

                            <?php  $imagemm = get_field('thumbnail'); ?>
                            <img src="<?php echo $imagemm['url']; ?>" alt="">

                            <?php $url = get_field('wallpaper'); ?>
                            <a href="<?php echo $url['url']; ?>" target="_blank" class="btn">DOWNLOAD</a>
              


                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div><!-- /content-midias -->

            </div><!-- /wrap -->

    </div><!-- /content -->
    
<?php include('footer.php'); ?>