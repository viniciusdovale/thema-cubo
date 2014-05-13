<?php 
    /*
        Template Name: Agenda
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

          <img src="<?php bloginfo('template_url') ?>/assets/imagens/banner.jpg" width="100%" alt="img01"/>




            <?php $agenda = new WP_Query('post_type=agenda&meta_key=data&orderby=meta_value_num&order=ASC&posts_per_page=-1'); ?>
            <?php
                global $agenda;
                if ( $agenda->have_posts() ) :

                    /**
                     * Pega os dados da URL
                     */
                    if (isset($_GET['ano'])) {
                        $ano_selected = $_GET['ano'];
                    } else {
                        $ano_selected = date('Y');
                    }

                    if (isset($_GET['mes'])) {
                        $mes_selected = $_GET['mes'];
                    } else {
                        if ($ano_selected == date('Y') && !isset($_GET['mes'])) {
                            $mes_selected = date('m');
                        } else {
                            $mes_selected = '01';
                        }
                    }


                    /**
                     * Prepara os eventos da agenda
                     */
                    foreach ( $agenda->posts as $evento) :
                        $ano = substr( get_field('data', $evento->ID), 0, 4);
                        $mes = substr( get_field('data', $evento->ID), 4, 2);
                        $dia = substr( get_field('data', $evento->ID), 6, 2);
                        $eventos[$ano][$mes][$dia][] = $evento;


                    endforeach;
            ?>



            <ul class="menu-interna-agenda">
                <li class="mes <?php if($mes_selected == '01'){echo 'active-nav'; } ?>"><a href="<?php the_permalink(); ?>?ano=<?php echo $ano_selected; ?>&mes=01">Janeiro</a></li>
                <li class="mes <?php if($mes_selected == '02'){echo 'active-nav'; } ?>"><a href="<?php the_permalink(); ?>?ano=<?php echo $ano_selected; ?>&mes=02">Fevereiro</a></li>
                <li class="mes <?php if($mes_selected == '03'){echo 'active-nav'; } ?>"><a href="<?php the_permalink(); ?>?ano=<?php echo $ano_selected; ?>&mes=03">Março</a></li>
                <li class="mes <?php if($mes_selected == '04'){echo 'active-nav'; } ?>"><a href="<?php the_permalink(); ?>?ano=<?php echo $ano_selected; ?>&mes=04">Abril</a></li>
                <li class="mes <?php if($mes_selected == '05'){echo 'active-nav'; } ?>"><a href="<?php the_permalink(); ?>?ano=<?php echo $ano_selected; ?>&mes=05">Maio</a></li>
                <li class="mes <?php if($mes_selected == '06'){echo 'active-nav'; } ?>"><a href="<?php the_permalink(); ?>?ano=<?php echo $ano_selected; ?>&mes=06">Junho</a></li>
                <li class="mes <?php if($mes_selected == '07'){echo 'active-nav'; } ?>"><a href="<?php the_permalink(); ?>?ano=<?php echo $ano_selected; ?>&mes=07">Julho</a></li>
                <li class="mes <?php if($mes_selected == '08'){echo 'active-nav'; } ?>"><a href="<?php the_permalink(); ?>?ano=<?php echo $ano_selected; ?>&mes=08">Agosto</a></li>
                <li class="mes <?php if($mes_selected == '09'){echo 'active-nav'; } ?>"><a href="<?php the_permalink(); ?>?ano=<?php echo $ano_selected; ?>&mes=09">Setembro</a></li>
                <li class="mes <?php if($mes_selected == '10'){echo 'active-nav'; } ?>"><a href="<?php the_permalink(); ?>?ano=<?php echo $ano_selected; ?>&mes=10">Outubro</a></li>
                <li class="mes <?php if($mes_selected == '11'){echo 'active-nav'; } ?>"><a href="<?php the_permalink(); ?>?ano=<?php echo $ano_selected; ?>&mes=11">Novembro</a></li>
                <li class="mes <?php if($mes_selected == '12'){echo 'active-nav'; } ?>"><a href="<?php the_permalink(); ?>?ano=<?php echo $ano_selected; ?>&mes=12">Dezembro</a></li>
            </ul>

            <?php
                else :
                    echo "<p class='sem-evento'>Nenhum evento cadastrado.</p>";
                endif;
            ?>


                <!-- *** CASO QUEIRA QUE OS ANOS APAREÇA DESCOMENTE ISSO AQUI (Y) -->
                
                  <!-- <div class="grid_16 push_2">
                      <ul class="ano grid_7">
                          <?php
                              foreach ($eventos as $ano => $meses) :
                                  if ( $ano >= date('Y') ) :
                          ?>
                                  <li><a href="<?php the_permalink(); ?>&ano=<?php echo $ano; ?>" class="<?php if($ano_selected == $ano){echo 'selected'; } ?>"><?php echo $ano; ?></a></li>

                          <?php
                                  endif;
                              endforeach;
                          ?>
                      </ul>
                  </div>  -->





            <div class="wrap-interna">
                

               <?php if (!empty($eventos[$ano_selected][$mes_selected])): ?>
               <ul id="accordion">
                  <?php foreach ($eventos[$ano_selected][$mes_selected] as $dia => $evento) : ?>
                  <li>
                    <span><div class="dia"><?php echo date('m', strtotime(get_field('data', $evento[0]->ID))); ?></div> <div class="titulo-agenda"><?php echo $evento[0]->post_title; ?></div> <div class="local"><?php echo get_field('cidade_estado', $evento[0]->ID); ?></div></span>
                    <div class="content-accordion">
                        <p>
                            Local: 


                            <?php echo get_field('local', $evento[0]->ID); ?><br /> <br />

                            Horário: <?php echo get_field('horario', $evento[0]->ID); ?> <br /> <br />


                            Informações: <br />

                            <?php echo $evento[0]->post_content; ?><br><br>
                            <?php echo get_field('email', $evento[0]->ID); ?> <br />
                            <?php echo get_field('telefone', $evento[0]->ID); ?> <br />
                            <a style="color:#fff;text-decoration:underline" href="<?php echo get_field('site', $evento[0]->ID); ?>" target="_blank"><?php echo get_field('site', $evento[0]->ID); ?></a> <br />
                        </p>
                    </div>
                  </li>
                <?php endforeach; ?>

                </ul>
                <?php
                 else : echo '<br /><p class="olaola" style="color:#fff;font-size:15px;margin:150px 0 0 350px">Nenhum evento cadastrado neste mês.</p>';
                 endif;
                ?>

            </div><!-- /wrap -->


    </div><!-- /content -->





    
<?php include('footer.php'); ?>