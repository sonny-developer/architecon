<div id="templatemo_main">
    <div class="col two-third">
        <h2>About Us</h2>
        <div class="cleaner divider"></div>
        <div class="padding_right">
            <h4 style="color: #5fb42b"><?php echo $about_data->title; ?></h4>
            <p><?php echo $about_data->main_text; ?> </p>
        </div>

        <div class="cleaner divider"></div>

        

    </div>

    <div id="sidebar" class="float_r">
        <h3>Portfolio Categories</h3>
        <ul class="templatemo_list">
            <?php foreach($portfolio_category->result() as $value){?>
            <li><a href="<?php echo base_url();?>welcome/portfolio_according_categories/<?php echo $value->portfolio_category;?>"><?php echo $value->portfolio_category;?></a></li>
            <?php } ?>
        </ul>
        <div class="cleaner h40"></div>	
        <h3>Services</h3>
        <ul class="templatemo_list">
            <?php foreach($service_categories as $value){?>
            <li><a href="<?php echo base_url();?>welcome/service"><?php echo $value->name;?></a></li>
            <?php } ?>
        </ul>
        <div class="cleaner h40"></div>	
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
