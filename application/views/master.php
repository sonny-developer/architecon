<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Architecon</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <!-- templatemo 350 soft link -->
        <!-- 
        Soft Link Template 
        http://www.templatemo.com/preview/templatemo_350_soft_link 
        -->
        <link href="<?php echo base_url(); ?>css/templatemo_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/ddsmoothmenu.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>slider/js-image-slider.css" />

        <script type="text/javascript" src="<?php echo base_url(); ?>slider/js-image-slider.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/swfobject/swfobject.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/ddsmoothmenu.js">

            /***********************************************
             * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
             * This notice MUST stay intact for legal use
             * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
             ***********************************************/

        </script>

        <script type="text/javascript">

            ddsmoothmenu.init({
                mainmenuid: "templatemo_menu", //menu DIV id
                orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
                classname: 'ddsmoothmenu', //class added to menu's outer DIV
                //customtheme: ["#1c5a80", "#18374a"],
                contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
            })

        </script> 

    </head>

    <body id="subpage">
        <div id="templatemo_wrapper">
            <div id="templatemo_top">
                <div id="templatemo_header">
                    <div id="site_title"><h1><a href="<?php echo base_url();?>"></a></h1></div>
                    <div id="templatemo_menu" class="ddsmoothmenu">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/about_us.html">About</a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/team.html">Team</a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/service.html" >Services</a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/portfolio.html">Portfolio</a>
                                <ul>
                                    <?php foreach ($portfolio_category->result_array() as $row){ ?>
                                    <li><a href="<?php echo base_url();?>welcome/portfolio_according_categories/<?php echo $row['portfolio_category'];?>"><?php echo $row['portfolio_category'];?></a></li>
                                    <?php }?>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>welcome/client.html">Clients</a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/contact.html">Contact</a></li>
                        </ul>
                        <br style="clear: left" />
                    </div> <!-- end of templatemo_menu -->
                    <div class="cleaner"></div>
            </div> <!-- END of top -->

<!-- Main Content -->       <?php echo $content; ?>

        </div> <!-- END of wrapper -->

        <div id="templatemo_footer_wrapper">
            <div style="float: right;padding: 0 0 80px 0 ;">Copyright © 2048 <a href="#">Your Company Name</a></div>
        </div> <!-- END of wrapper -->

    </body>
</html>