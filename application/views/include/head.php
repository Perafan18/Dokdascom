<?=doctype('html5')?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$titulo?></title>
        <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<?php
		echo link_tag('css/bootstrap.min.css');
		echo link_tag('css/bootstrap-responsive.min.css');
		echo link_tag('css/font-awesome.min.css');
		echo link_tag('css/style.css');
		?>
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="http://www.dokdas.com/js/bootstrap.min.js"></script>
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-55110123-1', 'auto');
          ga('send', 'pageview');

        </script>