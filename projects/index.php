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
        <link rel="stylesheet" type="text/css" href="/css/projects.css">
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
                <div class="local-header"><h2>Projects</h2></div>
                <div class="page-specific projects">
                    <ul class="projects-list">
                        <li class="projects-item">
                             <p>
                             Projects:<br><br>
                             - Brobot: A <a href="http://robocode.sourceforge.net/" target="_blank"> Robocode</a> robot coded by our team <a href="http://www.reddit.com/r/onetruegod" target="_blank">One True God.</a><br><br>
                             - VHDL Library: A collection of behavioral, generic VHDL modules. Each VHDL module on this production site
                               has been tested. For a more up to date and to see modules that have yet to be tested, please see the
                               <a href="https://github.com/Nixon-/VHDL_library" target="_blank"> Github Repo</a>.<br><br>
                             - AC'97 Processor: This processor will accept frames from an AC'97 codec (LM4550), make changes to the digitized
                               sound data and then send them back to the codec for output. Could be very useful for things like processing and 
                               modifying electric instrument sounds. The repo contains the VHDL files for it and will be much more up to date as
                               far as progress goes seeing as no untested or incomplete designs will be added to the production site. See the repo
                               here: <a href = "https://github.com/Nixon-/AC97Processor" target="_blank">Github repo</a><br>
                             </p>
                        </li>
                        <li class="projects-item">
                            <ul class="list-of-projects">
                                <li class="projects-icon">
                                    <a href="/projects/Brobot/">
                                        <h3>Brobot</h3>
                                        <img src="/images/brobot.jpg" alt="Brobot" class="projects-icon-image">
                                    </a>
                                </li> 
                                <li class="projects-icon">
                                    <a href="/projects/VHDL_library/">
                                        <h3>VHDL Library</h3>
                                        <img src="/images/vhdl.jpg" alt="VHDL Library" class="projects-icon-image">
                                    </a>
                                </li> 
                                <li class="projects-icon">
                                    <a href="/projects/AC97Processor/">
                                        <h3>AC'97 Processor</h3>
                                        <img src="/images/AC97Processor.png" alt="AC97 Processor" class="projects-icon-image">
                                    </a>
                                </li> 
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="#top" class="up-arrow"><img src="/images/up-arrow.png"/></a>
        <div class="footer"></div>
        </div>
    </body>
</html>
