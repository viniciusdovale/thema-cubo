<?php

 
    if( get_post_type() == 'post' ): // Se o post type foi post
        get_template_part('single','noticias'); // Vai carregar o arquivo single-padrao.php
    else:
        get_template_part('single','discografia'); // Vai carregar o arquivo single-shopping.php
    endif;
?>