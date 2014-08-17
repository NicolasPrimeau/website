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
        <link rel="stylesheet" type="text/css" href="/css/projects_vhdl.css">
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
                <div class="local-header"><h2>VHDL Library</h2></div>
                <div class="page-specific projects-vhdl">
                    <ul class="projects-vhdl-list">
                        <li class="projects-vhdl-item">
                            <p class="project-vhdl-description">
                                The following is a library of some VHDL components which are often used, plus some project-specific VHDL files. All components are
                                designed with a highly behavioral approach. They've also been created to be as generic as possible to enhance their modularity. While
                                behavioral is not the best, it's faster and fits well with hobby designing.
                                <br><br>
                                The components will be added to the libraries as they're created and polished. So while there might not be a lot of them now, there
                                will be later on.
                                <br><br>
                                In the future, these will be grouped together in an easy to use package. A git repo might be created later. If these files contain 
                                any errors, or you have a component you would like to be added, please email nicolas.primeau@gmail.com. Feel free to download and 
                                use any of these components!
				<br><br>
                                Check out the <a href="https://github.com/Nixon-/VHDL_library/">git repo</a>!
                            </p>
                            <ul class="vhdl-categories">
                                <li class="vhdl-category vhdl-cat-basic">
                                    <a href="/projects/VHDL_library/basic_components">
                                    <h3>Basic</h3>
                                    <img src="/images/half-adder.png" alt="Basic" class="vhdl-cat-image">
                                    </a>
                                </li> 
                                <li class="vhdl-category vhdl-cat-memory">
                                    <a href="/projects/VHDL_library/memory_components">
                                    <h3>Memory</h3>
                                    <img src="/images/flipflop.gif" alt="Memory" class="vhdl-cat-image">
                                    </a>
                                </li> 
                                <li class="vhdl-category vhdl-cat-basic">
                                    <a href="/projects/VHDL_library/IO_components">
                                    <h3>Input/ Output</h3>
                                    <img src="/images/io.gif" alt="IO" class="vhdl-cat-image">
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
