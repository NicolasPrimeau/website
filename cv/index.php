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
        <link rel="stylesheet" type="text/css" href="/css/cv.css">
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
                <div class="local-header"><h2>C.V.</h2></div>
                <div class="page-specific cv">
                    <ul class="cv-list">
                        <li class="cv-item">
                        <p class="print-cv">
                            <a href="/cv/Primeau-Nicolas-C.V.pdf" target="_blank">Print-friendly PDF</a>&nbsp;or&nbsp;
                            <a href="/cv/Primeau-Nicolas-C.V-Light.pdf" target ="_blank">Light version PDF</a>
                        </p>
                        <div class="cv-section">
                        <h3 class ="cv-section-title">Education</h3>
                        <h4 class="cv-sub-title">BASc in Computer Engineering</h4>
                        <h4 class="cv-date"> September 2011 - April 2015 (Expected)</h4>
                        <h5 class="cv-sub-sub-title">University of Ottawa</h5>
                        <p class="cv-description">
                            The Computer Engineering Bachelor of Engineering at the university of Ottawa focuses on hardware design and architectures and low-level software such as Assembly and C. The program is broad in scope, with emphasis on electronics, hardware and software design, communication and control.
                        </p>

                        <h4 class="cv-sub-title">High School Diploma</h4>
                        <h4 class="cv-date"> September 2007 - June 2011</h4>
                        <h5 class="cv-sub-sub-title">École Secondaire Franco-cité</h5>
                        <p class="cv-description">
                            - Received awards for best average in calculus, mathematical functions and best average overall<br><br>
                            - Received a bursary from the University of Ottawa<br><br>
                            - Received a bursary from the Engineering Dean of the University of Ottawa for Excellence<br><br>
                        </p>
                        </div>
 <div class="cv-section">
                        <h3 class ="cv-section-title">Work Experience</h3>
                        <h4 class="cv-sub-title">Natural Resources Canada</h4>
                        <h4 class="cv-date"> May 2014 - August 2014</h4>
                        <h5 class="cv-sub-sub-title">GPS Data Analyst</h5>
                        <p class="cv-description">
                        - Desgined and implemented a system to automatically stream, process and validate GPS data<br><br>
                        - Created web apps to visualize and graph GPS data<br><br>
                        - Automated many tasks and processes
                        </p>
                        <h4 class="cv-sub-title">Computing and communications services (uOttawa)</h4>
                        <h4 class="cv-date"> May 2013 - February 2014</h4>
                        <h5 class="cv-sub-sub-title">Web development assistant</h5>
                        <p class="cv-description">
                        - Worked on the WebCMS (Drupal 7) project, which involved back-end work (PHP, Nginx, Varnish and server configuration), front-end design (CSS, HTML, Javascript) as well as other tasks.<br><br>
                        - Involved in the launching of the new uOttawa site and other faculty and services sites<br><br>
                        - Sample of something I've worked on: <a href="http://www.uottawa.ca" target="_blank">http://www.uottawa.ca/</a>
                        </p>
                        <h4 class="cv-sub-title">Canadian Tire Corporation</h4>
                        <h4 class="cv-date">May 2012 - August 2012</h4>
                        <h5 class="cv-sub-sub-title">Sales Clerk</h5>
                        <p class="cv-description">
                        - Job responsibilities included customer service and supervising the garden department<br><br>
                        - Identify and prioritize tasks needing to be done<br><br>
                        - Delegate tasks to others to assure meeting goals set by myself and the upper management<br>
                        </p>
                        </div>
                        <div class="cv-section">
                        <h3 class ="cv-section-title">Projects and competitions</h3>
                        <h4 class="cv-sub-title">uOttawa Coding Competition - Robocode</h4>
                        <h4 class="cv-date">February 2013</h4>
                        <p class="cv-description">
                            - Our team OneTrueGod won the competition with our robot 'Brobot'
                        </p>
                        <h4 class="cv-sub-title">Personal Website</h4>
                        <p class="cv-description">
                            - Creation and hosting of my own site<br><br>
                            - Github repo: <a target="_blank" href="https://github.com/Nixon-/website">https://github.com/Nixon-/website</a>

                        </p>
                        <h4 class="cv-sub-title">Many other ongoing projects</h4>
                        <p class ="cv-description">
                        - Explored the possibility of a Python hardware interpreter<br><br>
                        - VHDL Library<br><br>
                        - AC'97 sound transmitter
                        </p>
                        </div>
                        <div class = "cv-section">
                        <h3 class="cv-section-title">Computer-related skills</h3>
			<h4 class="cv-sub-title">Hardware-specific skills:</h4>
                        <p class ="cv-description">
                        - Hardware description languages: VHDL<br><br>
                        - Low level understanding of computers and architectures<br><br>
                        - Experience with micro-controllers and FPGAs (Altera, Xilinx)<br><br>
                        - Previously used Altera and Xilinx design tools
                        </p>
                        <h4 class="cv-sub-title">Computer languages known:</h4>
                        <p class="cv-description">
                        - Web specific languages: Javascript, CSS, HTML, PHP(Drupal 7)<br><br>
                        - Other languages: C, Assembly, Java, Python
                        </p>
                        <h4 class="cv-sub-title">Other computer skills:</h4>
                        <p class="cv-description">
                        - Worked with Nginx, Apache and Varnish<br><br>
                        - Knowledge concerning networking protocols<br><br>
                        - Experience with source control software (Git)<br><br>
                        - Worked with Linux (CentOS, Debian), Windows, Chrome OS and Mac OS
                        </p>
                        </div>
                        <div class="cv-section">
                        <h3 class ="cv-section-title">Qualifications</h3>
                        <p class="cv-description">
                            - G class driver's license<br><br>
                            - Completely fluent in French and English<br><br>
                            - Member of the IEEE
                            
                        </p>
                        </div>
                        <div class="cv-section">
                        <h3 class ="cv-section-title">Interests</h3>
                        <p class="cv-description">
                            - Interested in low-level coding and hardware architectures<br><br>
                            - Programming and computer related projects are often discussed with friends<br><br>
                            - Hobbies include history, playing and listening to music, reading, board games, video games and programming
                        </p>
                        </div>
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
