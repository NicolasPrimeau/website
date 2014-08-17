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
        <link rel="shortcut icon" href="/images/site-icon.ico" >
        <link rel="stylesheet" type="text/css" href="/css/stuff_axis.css">
        <script src="/js/libs/jquery-1.9.0/jquery.min.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-45303805-1', 'no-ip.biz');
          ga('send', 'pageview');

        </script>
        <script src="/js/menu-maker-3000.js"></script>
    </head>
    <body>
        <div class="wrapper">
        <a name="top"></a>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/header.php') ?>
        <div class="main-content">
            <div class="main-body">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/nav-menu.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/contact.php') ?>
                <div class="local-header"><h2>Axis & Allies</h2></div>
                <div class="page-specific axis">
                    <ul class="axis-axis">
                       <li class="axis-item">
                            <ul class="list-of-axis">
                                <li class="axis-icon">
                                    <a href="/stuff/axis_and_allies/AA_1940_europe/">
                                        <h3>Axis & Allies Europe 1940</h3>
                                        <img src="/images/AA_1940_europe.jpg" class="axis-icon-image">
                                    </a>
                                </li> 
                                <li class="axis-icon">
                                    <a href="/stuff/axis_and_allies/AA_1940_pacific/">
                                        <h3>Axis & Allies Pacific 1940</h3>
                                        <img src="/images/AA_1940_pacific.jpg" class="axis-icon-image">
                                    </a>
                                </li> 
                                <li class="axis-icon">
                                    <a href="/stuff/axis_and_allies/AA_1940/">
                                        <h3>Axis & Allies Global 1940</h3>
                                        <img src="/images/AA_1940.jpg" class="axis-icon-image">
                                    </a>
                                </li> 
                            </ul>
                        </li>
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
