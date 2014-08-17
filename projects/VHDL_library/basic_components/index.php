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
        <link rel="stylesheet" type="text/css" href="/css/projects_vhdl.css">
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
    </head>
    <body>
        <div class="wrapper">
        <a name="top"></a>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/header.php') ?>
        <div class="main-content">
            <div class="main-body">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/nav-menu.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/contact.php') ?>
                <div class="local-header"><h2>Basic Components</h2></div>
                <div class="page-specific vhdl-basic">
                    <ul class="vhdl-basic-list list-js">
                        <li class="vhdl-basic-item item-js">
                            <p><a href="/projects/VHDL_library">Back to VHDL Library menu</a></p>
                            <p>
                            These components are the building blocks of any circuit. They are basic parts that require no other components.
                            The VHDL for them is simple and they're built to be as modular and reliable as possible. 
                            </p>
                            <div class="component-picker">
                                <ul>
                                    <li><a href="/VHDL_library/basic/nbit_decoder.vhd">Decoder</a></li>
                                    <li><a href="/VHDL_library/basic/nbit_encoder.vhd">Encoder</a></li>
                                    <li><a href="/VHDL_library/basic/nbit_full_adder.vhd">Full Adder</a></li>
                                    <li><a href="/VHDL_library/basic/nbit_half_adder.vhd">Half Adder</a></li>
                                    <li><a href="/VHDL_library/basic/nbit_multiplier.vhd">Multiplier</a></li>
                                    <li><a href="/VHDL_library/basic/nbit_2to1_mux.vhd">Multiplexer - 2 to 1</a></li>
                                    <li><a href="/VHDL_library/basic/nbit_XtoY_mux.vhd">Multiplexer - Generic</a></li>
                                    <li><a href="/VHDL_library/basic/segment_decoder.vhd">Segment Decoder</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class='vhdl-basic-item item-js code-item'></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer"></div>
        <a href="#top" class="up-arrow"><img src="/images/up-arrow.png"/></a>
        </div>
    </body>
</html>
