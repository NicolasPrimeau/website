<!DOCTYPE html>
<html>
    <head>
        <title>Nicolas Primeau's personal website</title>
        <!--Yeh, static html page, nothing really too high tech. A CMS is
        just way too overkill--> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="/css/base.css">
        <link rel="shortcut icon" href="/images/site-icon.ico" >
        <link rel="stylesheet" type="text/css" href="/css/frontpage.css">
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
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/header.php") ?>
        <div class="main-content">
            <div class="main-body">
                <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/nav-menu.php") ?>
                <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/contact.php") ?>
                <div class="local-header"><h2>Blog</h2></div>
                <div class="page-specific front-blog">
                    <ul class="blog-list">
                         <li class="blog-item">
                         <h2 class="blog-title">Axis & Allies and structure changes</h2>
                         <p> Date: 29/06/2014 </p>
                         <p>Added a new Axis and Allies quick rule book under <a href ="/stuff/axis_and_allies/">stuff (Axis and Allies)</a>. I also had to delete the site repo due to some problems with git. I've also started the transition to templates.
                         
                        </p>
                         </li>

                         <li class="blog-item">
                         <h2 class="blog-title">Scripts, scripts, scripts</h2>
                         <p> Date: 04/06/2014 </p>
                         <p> I havn't worked much on previous projects. I've been busy. Anyhow, check out my<a href="https://github.com/Nixon-"> github account</a>, I've added two scripts
                             written in Python. I have a few more, I'll add them whenever. Python is seriously awesome. I'll probably finish a few projects whenever I have time,
                             though I am having a hell of a lot of fun with Python.
                         </p>
                         </li>
                         <li class="blog-item">
                         <h2 class="blog-title">Note and Brobot update</h2>
                         <p> Date: 22/04/2014 </p>
                         <p> I added <a href="/projects/Brobot">Brobot</a> to the projects list.
                             Also just a quick note, I removed most if not all of the adaptiveness. I don't have time to keep it up to date so it ended breaking a lot of the CSS.
                             It's not as nice without the resizing but I think it's fine as is. There's still some lingering issues for mobile but honestly I doubt I'll ever 
                             get a mobile hit other than myself, so yeah. Anyways, receiver&nbsp;+&nbsp;emitter are done, testing it. The receiver doesn't seem to be picking 
                             up anything. I'd also like to mention a fallen hero of this project: my multimeter. It seldom served me anyways, though it would have been nice.
                             It's currently resting in pieces in my closet, I salvaged the parts, couldn't let that display go to waste. I'll probably finish the project within
                             the century.
                         </p>
                         </li>
                         <li class="blog-item">
                         <h2 class="blog-title">Emitter success</h2>
                         <p> Date: 04/04/2014 </p>
                         <p>The AC97 emitter now works. The signal is real as faint as it is.Check out the new post on the <a href="/projects/AC97Processor">project log</a>!
                         </p>
                         </li>
                         <li class="blog-item">
                         <h2 class="blog-title">New Project and comments</h2>
                         <p> Date: 15/03/2014 </p>
                         <p> New project added! Check out the progess on the <a href="/projects/AC97Processor">AC'97 processor</a>. This little project will be able to 
                             modify sound with the help of an AC'97 codec. Old codec but it'll work fine for a hobby project like this.<br><br>
                             I also have to apologise for the ugly styling and format of the front page. It clearly needs some revamping...
                         </p>
                         </li>
                         <li class="blog-item">
                         <h2 class="blog-title">Input/Output</h2>
                         <p> Date: 04/03/2014 </p>
                         <p>Added the input/output categories to the VHDL Library, <a href="/projects/VHDL_library/IO_components">IO components</a>. The only component for now is the debounce.
                         </p>
                         </li>
			 <li class="blog-item">
                         <h2 class="blog-title">Ransom note</h2>
                         <p> Date: 28/01/2014 </p>
                         <p> First off, apologies for the misnamed blog section, its purpose is still being held hostage by the necessity of an update log. VHDL Library has been put in a <a href="https://github.com/Nixon-/VHDL_library/">git repo</a>, which contains much more files, mainly the ones in the to_test folders. These files are untested, I'll test them eventually. I also plan to link the this site to that git repo so it automatically fetches new added files. Possibly this weekend. This site has also been added to a <a href = "https://github.com/Nixon-/website">git repo</a>, so that I can easily update it with any computer.
                         </p>
                         </li>
                         <li class="blog item">
                         <h2 class="blog-title">Update</h2>
			 <p> Date: 10/01/2014 </p>
			 <p> Still slowly working on the site. That is all.</p>
                         </li>
                         <li class="blog-item">
                         <h2 class="blog-title">Wishful thinking</h2>
			 <p> Date: 09/12/2013 </p>
			 <p> No updates yet but things are coming. I've been bogged down pretty badly with school and other work. I plan on starting designing a basic ARM CPU that would work on an FPGA near the new year. The code for this project will be put into a git repo on github, for which the link will be on the projects page. I'll probably add some documentation too. For now it's still in early planning. If anyone actually reads this, happy holidays!
			 </p>
			 </li>
                         <li class="blog-item">
                         <h2 class="blog-title">Memory components</h2>
                           <p>
                                Date: 20/11/2013
                            </p>
                            <p>
                               I've added memory components to the <a href="/projects/VHDL_library">VHDL library </a>. I'll be adding flip flops and latches as soon 
                               as I have time. Stuff sections should be up relatively soon. I try to test every component that I create but it's probable that some errors 
                               will go undetected. If you find any, please contact me so I can make a correction. I got a Spartan 6 FPGA recently, will be testing it out and
                               uploading some projects, possibly a simple CPU. For now, check back often, as this site is under active development for now. 
                            </p>
                        </li>
                        <li class="blog-item">
                           <h2 class="blog-title">First contact</h2>
                            <p>
                                Date: 13/11/2013
                            </p>
                            <p>
                                The <a href="/projects/VHDL_library">VHDL library </a>foundations are up! In this library I'll catalog a bunch of VHDL components, plus some projects I'll be working on.
                                My C.V. was also added. There's still a lot of work to be done in the remaining sections of the site, and I'll update them as I have
                                time. The blog itself probably won't be a blog for a while, more like a log of updates on the site. I do plan to eventually write 
                                about anything and everything.
                                <br><br>
                                I may be adding some C scripts I've written to the projects, depending how useful they could be. I'm still working on the site, and CSS is time consuming
                                so some sections of the site might not be styled sufficiently, or they may not be entirely responsive. Meanwhile, feel free to contact me at nicolas.primeau@gmail.com!
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
