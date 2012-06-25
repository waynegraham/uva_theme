</div>
</div><!-- /#main -->
</div>

<?php //echo common('aside'); ?>

        </div><!-- /#content -->
    </div>
</div><!-- /.row /.container -->
<div class="container footer-container"><div class="row row-container clearfix">
    <footer id="content-info" class="row" role="contentinfo">
      <div id="copyright" class="container">
        <?php if($footer_text = get_theme_option('Footer Text')): ?>
          <p><?php echo nl2br($footer_text); ?></p>
        <?php endif; ?>
      </div>
    </footer>
    </div>
</div><!-- /.row /.container -->
</div><!-- /#wrap -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<?php
    queue_js('uva-theme-1.0-min', 'javascripts');
    echo display_js(false);
?>
<script>
var _paq=_paq||[];(function(){var a="https:"==document.location.protocol?"https://analytics.lib.virginia.edu/":"http://analytics.lib.virginia.edu/";_paq.push(["setSiteId","10"]);_paq.push(["setTrackerUrl",a+"piwik.php"]);_paq.push(["trackPageView"]);_paq.push(["enableLinkTracking"]);var b=document,c=b.createElement("script"),d=b.getElementsByTagName("script")[0];c.type="text/javascript";c.defer=true;c.async=true;c.src=a+"piwik.js";d.parentNode.insertBefore(c,d)})()
</script>

<script type="text/javascript" src="http://use.typekit.com/txp7zqw.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--[if lt IE 7 ]>
  <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
</body>
</html>
