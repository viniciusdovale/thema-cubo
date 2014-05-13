  <div class="clear"></div>
    <!-- !Footer! -->
    <footer id="footer">
        <div class="footer-center">
            <p>©2014 ao cubo. Todos os direitos reservados</p>
            <a href="#" target="_blank"><img src="<?php bloginfo('template_url') ?>/assets/imagens/imaginar.jpg" alt="Imaginar Design"></a>
        </div><!-- /footer-center -->
    </footer>
    <!-- !Footer! -->


</div>
<!-- SCRIPTS -->
<script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
<!-- <script src="<?php bloginfo('template_url') ?>/assets/js/jquery-1.8.3.min.js" type="text/javascript"></script> -->
<script src="<?php bloginfo('template_url') ?>/assets/js/script.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/lib/jquery.fancybox.js" type="text/javascript"></script>



<script src="<?php bloginfo('template_url') ?>/assets/js/lib/mediaBoxes.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/lib/rotate-patch.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/lib/waypoints.min.js" type="text/javascript"></script>
  <script>
    
      $('document').ready(function(){
          
          //INITIALIZE THE PLUGIN
          $('#grid').mediaBoxes({
            imagesToLoadStart: 16,
            imagesToLoad: 10,
          });


      });    
         
  </script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
<!-- Google Analytics -->
<!-- <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script> -->
</body>
</html>