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
                <div class="local-header"><h2>AC'97 Processor</h2></div>
                <div class="page-specific projects-vhdl">
                    <ul class="projects-vhdl-list">
                        <li class="projects-vhdl-item">
                            <p class="project-vhdl-description">
                               This is the AC'97 Processor. It's an emitter and a receiver, along with a middle part to process, change, do anything with
                               the sound data! The transmitter interacts with an AC'97 codec, the National Semiconductor's LM4550 codec, to modify the frames
                               at input. The transmitter needs a minimum clock of 25 MHz, twice that of the codec so it can properly process the bits. This 
                               project is currently being designed, with a few parts implemented yet.<br><br>
                               The modules won't be published on this site until they're ready though there will be a project blog on this page. To see the progress
                               of the processor, the <a href="https://github.com/Nixon-/AC97Processor" target="_blank"> Github repo</a> will satisfy.<br><br>
                               It's to be noted this project is design for the Atlys Digilent board, which has a Spartn 6 FPGA. Some configurations of the codec
                               might require some tweaking for other boards. For example, the codec identification in the tag is '00' seeing as there's only one sound
                               controller. These settings will try to be easily customizable through some sort of software but it's possible some things might be missing. 
                            </p>
                            <ul class="secondary-list">
                                 <li class="secondary-list-item">
                                   <h2 class="blog-title">Receiver/Unit testing</h2>
                                   <p>The whole thing is 'finished'. It's not functional, I suspect I'm not configuring the codec registers properly seeing as the receiver
                                      isn't sending any data, allegedly. It seems the data in does sometime get registered but it goes nowhere. My second suspicion is the 
                                      VHDL implementation itself. The first clock splitting is very hacky, it may not be working properly on the FPGA due to placing/synthesization
                                      problems, i.e. getting implemented as a latch. Will probably update to completion within weeks, exams are nearly done. 
                                   </p>
                                </li> 
                                 <li class="secondary-list-item">
                                   <h2 class="blog-title">Emitter Success!</h2>
                                   <p> After much debugging and optimizing, I got a faint 200 Hz tone! The git repo has been update with the updated transmitter and emitter.
                                       The next step is to design the receiver. When this is done, I can start testing the transmitter as a whole. The receiver might take a 
                                       while seeing as I have exams and I should probably study.<br><br>
                                       The versions of the emitter and transmitter currently in the git repo contain many test signals and conditions that obviously won't be in 
                                       final version. Again, everything is made for the Digilent Atlys board so the UCF constraints file included in the repo won't apply if
                                       you're running this on any other board. 
                                   </p>
                                </li> 
                                <li class="secondary-list-item">
                                   <h2 class="blog-title">Testing emitter</h2>
                                   <p> I've updated the emitter and memory. The emitter contains some debugging and other modifications. The asynchronous memory
                                       was updated so that it contains code when it's reset. The emitter CU has also been modified to only go through the first 4
                                      addresses in memory, alternating between 3 and 4 repeatedly. No success in ouputting sound yet though.<br><br>
                                       I havn't worked on the receiver and won't until the emitter works properly. The repo has been updated, check it out.
                                   </p>
                                </li> 
                                <li class="secondary-list-item">
                                   <h2 class="blog-title">First post!</h2>
                                   <p> I'll use this 'blog' to mark the progress of the project.The inspiration for this project is to digitally alter the sound
                                       of electronic instruments (Bass, electric guitar, keyboard). There will be some loss in when doing the ACD and DAC conversion but these 
                                       will be minimal and probably insignificant. As for the input AC signal, I wonder if it'll be enough for the codec or if it'll be too weak.
                                       If it is, I might have to build a small AC amplifier with a BJT.<br><br>
                                       At the moment it's partially designed on paper and in idea but the designing of the emitter control unit has started. As a side benefit, 
                                       a new modular part for the VHDL Library was completed, the asynchronous memory. I'll eventually put up the VHDL module once they're completed 
                                       and I'll also add some sound samples and project milestones. 
                                   </p>
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
