<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>ArchitecoN - Admin</title>

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css" type="text/css" media="screen" />
        <script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
        <script src="js/hideshow.js" type="text/javascript"></script>
        <script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.equalHeight.js"></script>
        <script>
            function check_delete() {
                var decision = confirm("All data under this category will be deleted...\nAre you sure..?");
                if (decision) {
                    return true;
                }else {
                    return false;
                }
            }
        </script>
    </head>


    <body>
        <header id="header">
            <hgroup>
                <h1 class="site_title"><a  href="<?php echo base_url(); ?>admin_home">- ArchitecoN Admin -</a></h1>
                <h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="http://www.architeconbd.com"></a></div>
            </hgroup>
        </header> <!-- end of header bar -->

        <section id="secondary_bar">
            <div class="user">
                <p></p>
                <!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
            </div>
            <div class="breadcrumbs_container">
                <!-- Add title here -->
            </div>
        </section><!-- end of secondary bar -->

        <aside id="sidebar" class="column">
            <h3>Visitor</h3>
            <h3>Home</h3>
            <ul class="toggle">
                <li class="icn_new_article"><a href="<?php echo base_url(); ?>admin_home/slider_image">Slider Image</a></li>
                <li class="icn_edit_article"><a href="<?php echo base_url(); ?>admin_home/welcoming_message.html">Welcoming Message</a></li>
            </ul>
            <h3>About Us</h3>
            <ul class="toggle">
                <li class="icn_folder"><a href="<?php echo base_url(); ?>admin_home/about_text_form">Main Text</a></li>
            </ul>
            <h3>Team</h3>
            <ul class="toggle">
                <li class="icn_new_article"><a href="<?php echo base_url(); ?>admin_home/view_team">View Team</a></li>
                <li class="icn_edit_article"><a href="<?php echo base_url(); ?>admin_home/team_member">Add Team Member</a></li>
            </ul>
            <h3><a style="color: #000;" href="<?php echo base_url()?>admin_home/services">Services</a></h3>
            <h3>Portfolio</h3>
            <ul class="toggle">
                <li class="icn_folder"><a href="<?php echo base_url() ?>admin_home/add_portfolio_images">Add Portfolio Image</a></li>
                <li class="icn_folder"><a href="<?php echo base_url() ?>admin_home/add_new_portfolio">New Portfolio</a></li>
                <li class="icn_photo"><a href="<?php echo base_url() ?>admin_home/add_new_portfolio_category">New Portfolio Category</a></li>
            </ul>
            <h3><a style="color: #000;" href="<?php echo base_url(); ?>admin_home/clients.html">Clients</a></h3>
            <h3><a style="color: #000;" href="<?php echo base_url(); ?>admin_home/contact.html">Contact</a></h3>

            <h3>Admin</h3>
            <ul class="toggle">
                <li class="icn_jump_back"><a href="admin_home/logout">Logout</a></li>
            </ul>

            <footer>
                <hr />
                <p><strong>Copyright &copy; 2011 Website Admin</strong></p>
                <p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
            </footer>
        </aside><!-- end of sidebar -->
        
        <section id="main" class="column">
            <?php echo $content; ?>
        </section>


    </body>

</html>