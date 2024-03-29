<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Nicolas Primeau's personal website</title>
        <!--Yeh, static html page, nothing really too high tech. A CMS is
        just way too overkill. Update: that was a terrible mistake--> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="/css/base.css">
        <link rel="stylesheet" type="text/css" href="/css/AC97Processor.css">
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
                <div class="local-header"><h2>Brobot</h2></div>
                <div class="page-specific projects-vhdl">
                    <ul class="projects-vhdl-list">
                        <li class="projects-vhdl-item">
                            <p class="project-vhdl-description">
                              Brobot is the result of a 24 Hour coding spree for the uOttawa Febuary 2013 Hackathon, in which we had to program a <a href="http://robocode.sourceforge.net/" target="_blank">Robocode</a> robot. 
                              Our team,One True God (<a href="http://www.reddit.com/r/onetruegod" target="_blank">link to the joke</a>)
                              won the competition after (somehow) beating all the other robots. The team members were: 
                              <br><br>
                                  - Christopher Poirier<br>
                                  - Jonathan Smith<br>
                                  - Some other guy<br>
                                  - Myself<br><br>
                               The code itself isn't very good and there's not an abundance of it, though the core ideas behind the implementation were apparently good enough to defeat the other robots. Basically, this robots
                               three pillars were:<br><br>
                               - Move in circles around the target<br>
                               - Calibrate shooting power depending on the distance of the target<br>
                               - Change colour every turn<br><br>
                               The first idea was to move in circle around the target. This had two equally important effects. The other robots had a very hard time attacking Brobot because he was always circling around them,
                               thus he wasn't often hit. Rammer bots would miss him often also. The second effect was an increase in Brobots accuracy seeing as when it was circling its enemy, it only had to shoot at the middle
                               of the cercle. The biggest drawback was the pathing system made Brobot fond of walls.<br><br>
                               The second idea was also instrumental in the victory. We decided to avoid trying to make a targetting system. Instead, we created a calibrating system for the shots, so it would shoot with more power
                               and more often if the enemy was close, with less power and less often if the enemy was far or if the shots were missing. With this, we saved energy by not always shooting at enemy tanks. This system 
                               was also handy against Rammer tanks as the shots were shooting as often and as strong as possible and always hitting.<br><br>
                               Finally, changing colours every turn was the key to our victory. By being fabulous, the enemy tanks were unable to resist.<br><br>
                               The thing is hosted on Chris' Github account:<br><br>
                               <a href="https://github.com/VoiiD/Brobot" target="_blank">Link to Brobot's code</a>
                            </p>
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
