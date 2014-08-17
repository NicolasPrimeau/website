<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Nicolas Primeau's personal website</title>
        <!--Yeh, static html page, nothing really too high tech. A CMS is
        just way too overkill--> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="/css/base.css">
        <link rel="stylesheet" type="text/css" href="/css/bio.css">
        <link rel="shortcut icon" href="/images/site-icon.ico" >
        <script src="/js/libs/jquery-1.9.0/jquery.min.js"></script>
        <script src="/js/menu-maker-3000.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-45303805-1', 'no-ip.biz');
          ga('send', 'pageview');

        </script>
    </head>
    <body>
        <div class="wrapper">
        <a name="top"></a>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/header.php') ?>
        <div class="main-content">
            <div class="main-body">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/nav-menu.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/contact.php') ?>
                <div class="local-header"><h2>Biography</h2></div>
                <div class="page-specific bio">
                    <ul class="bio-list">
                        <li class="bio-item"><p style="text-align:center">
                        Hi! This will be my personal site. It's currently under construction.
                        </p>
                        <p style="text-align:center">
                        <img src="/images/pickaxe.png" alt="Under construction!" width="150" height="150">
                        </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer"></div>
        <a href="#top" class="up-arrow"><img src="/images/up-arrow.png"/></a>
        </div>
    </body>
</html>
