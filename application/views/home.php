<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Soft Link Website Template</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <!-- templatemo 350 soft link -->

        <!-- Slider header -->
        <link href="slider/js-image-slider.css" rel="stylesheet" type="text/css" />
        <script src="slider/mcVideoPlugin.js" type="text/javascript"></script>
        <script src="slider/js-image-slider.js" type="text/javascript"></script>
        <link href="generic.css" rel="stylesheet" type="text/css" />
        <!-- Slider header -->

        <!-- 
        Soft Link Template 
        http://www.templatemo.com/preview/templatemo_350_soft_link 
        -->
        <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src= "<?php echo base_url(); ?>js/swfobject/swfobject.js"></script>

        <script type="text/javascript">
            var flashvars = {};
            flashvars.cssSource = "css/piecemaker.css";
            flashvars.xmlSource = "piecemaker.xml";

            var params = {};
            params.play = "true";
            params.menu = "false";
            params.scale = "showall";
            params.wmode = "transparent";
            params.allowfullscreen = "true";
            params.allowscriptaccess = "always";
            params.allownetworking = "all";

            swfobject.embedSWF('piecemaker.swf', 'piecemaker', '560', '340', '10', null, flashvars,
                    params, null);

        </script>

        <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/ddsmoothmenu.js">

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

    <body id="home">
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
                </div> <!-- END of header -->
                <!-- end of templatemo_menu <div style="margin: 60px 0 30px 0; height: 10px; width: 100%; background-color: #9999ff;"></div> -->


                <div id="templatemo_slider">
                    <div id="slider_right">
                        <div id="sliderFrame">
                            <div id="slider">
                                <?php  foreach ($slider_image as $value) { ?>
                                <a href="#"> <img src="<?php echo base_url();?>/images/slider/<?php echo $value->file_name;?>" alt="<?php echo $value->caption;?>" /></a>
                                <?php  }?>
                            </div>
                        </div>
                    </div>
                    <div id="slider_left">
                        <h2><?php echo $message[0]['title'];?></h2>
                        <p style="text-align: justify; font-size: larger;"><?php echo $message[0]['message_body'];?></p>
<!--                        <a href="#" class="learnmore">Learn More</a><a href="#" class="learnmore">Register</a>-->
                    </div>
    <!-- slider --> 
                    <div class="cleaner"></div>
                </div> <!-- END of slider -->
            </div> <!-- END of top -->

            
            <div style="background-color: #0ad6e7;" id="templatemo_footer_wrapper">
            <div style="margin: auto;float: right;padding: 0 0 80px 0 ;">Copyright © 2048 <a href="#">Your Company Name</a></div>
        </div> <!-- END of wrapper -->
        

    </body>
</html>