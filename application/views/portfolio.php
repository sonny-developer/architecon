<div id="templatemo_main">
    <div class="col two-third no_margin_right">
        <h2>Portfolio</h2>
        <div class="cleaner divider"></div>
        <ul id="gallery">
            <?php foreach ($portfolio_data->result_array() as $row){ ?>
            <li><a href="<?php echo base_url();?>welcome/portfolio_full_view/<?php echo $row['id']?>"><div style="width: 280px; height: auto;"><img src="<?php echo $row['image_path']; ?>" width="100%" height="" alt="Image 01"/><p><strong><?php echo $row['title']; ?></strong></p></div></a></li>
            <?php }?>
        </ul>
        <div class="cleaner h40"></div>
    </div>
    <div class="col one_third portfolio_thumb" style="padding-left: 45px; width: 255px; " >
        <h3>Portfolio Categories</h3>
        <ul class="templatemo_list">
            <li><a href="<?php echo base_url();?>welcome/portfolio.html"><div id="catagory_sidebar_list">View All Categories</div></a></li>
            <?php foreach ($portfolio_category->result_array() as $row){ ?>
            <li><a href="<?php echo base_url();?>welcome/portfolio_according_categories/<?php echo $row['portfolio_category'];?>"><div id="catagory_sidebar_list"><?php echo $row['portfolio_category'];?></div></a></li>
            <?php }?>
        </ul>

        <div class="cleaner divider"></div>
    </div>
    <div class="cleaner"></div>
</div>