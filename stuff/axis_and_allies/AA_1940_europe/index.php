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
        <script src="/js/component-picker.js"></script>
        <script src="/js/form-select.js"></script>
    </head>
    <body>
        <div class="wrapper">
        <a name="top"></a>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/header.php') ?>
        <div class="main-content">
            <div class="main-body">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/nav-menu.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/contact.php') ?>
                <div class="local-header"><h2>Axis & Allies Europe 1940</h2></div>
                <div class="page-specific axis-europe">
                    <ul class="axis-axis list-js">
                        <li class="axis-item">
                            <p><a href="/stuff/axis_and_allies/">Back to Axis & Allies</a></p>
                            <h3 class="axis-aa">Play order </h3>
                            <ul class="axis-play-order">
                              <li> Germany</li>
                              <li> U.S.S.R.</li>
                              <li> U.S.A</li>
                              <li> United Kingdom</li>
                              <li> Italy </li>
                              <li> France</li>
                            </ul>
                            <h3 class="axis-aa">Important Rules</h3>
                            <p class="axis-rule">U.S.S.R. may only declare war on Germany after or on income phase of turn 2</p>
                            <p class="axis-rule">U.S.A. may only declare war on Germany after or on income phase of turn 3</p>
                        </li>
                        <li class="axis-item item-js master">
                            <h3 class="axis-aa">National Objectives</h3>
                            <div class="component-picker">
                                <ul>
                                    <li><a href="/stuff/axis_and_allies/AA_1940_europe/objectives_europe_germany.html">Germany</a></li>
                                    <li><a href="/stuff/axis_and_allies/AA_1940_europe/objectives_europe_ussr.html">U.S.S.R.</a></li>
                                    <li><a href="/stuff/axis_and_allies/AA_1940_europe/objectives_europe_usa.html">U.S.A.</a></li>
                                    <li><a href="/stuff/axis_and_allies/AA_1940_europe/objectives_europe_uk.html">United Kingdom</a></li>
                                    <li><a href="/stuff/axis_and_allies/AA_1940_europe/objectives_europe_italy.html">Italy</a></li>
                                    <li><a href="/stuff/axis_and_allies/AA_1940_europe/objectives_europe_france.html">France</a></li>
                                </ul>
                            </div>
                        </li> 
                        <li class='axis-item item-js code-item slave'></li>
                        <li class="axis-item">
                        <?php echo (file_get_contents("../research.html")); ?>
                        </li> 
                        <li class='axis-item'>
                        <?php echo (file_get_contents("../unit_profiles.html")) ?>
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
