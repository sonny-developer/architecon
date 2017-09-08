<div id="templatemo_main">

    <div class="col two-third">
        <h2>Clients</h2>

        <div class="cleaner divider"></div>


<?php  foreach ($clients as $value) { ?>
        <div style="width: 220px; height: 140px;padding-bottom: 50px; text-align: center;" class="col one_fourth fp_lp">
            <img src="<?php echo base_url();?>/images/client/<?php echo $value->image;?>"height="auto" width="220px" alt="Image 04" style="" />
            <h3><?php echo $value->name;?></h3>
        </div>
 <?php }?>
        <div class="cleaner"></div>

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
