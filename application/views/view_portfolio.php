<div id="templatemo_main" >
    <div class="col two-third no_margin_right portfolio_full_view" style="//text-align: center;">
        <div class="cleaner h40"></div>
        <div id="portfolio_img_full"  ><img src="<?php echo $portfolio_data->image_path; ?>" width="100%" height="" alt="Image 01"/></div>
        <div class="cleaner h40"></div>
        <div style="margin: auto; width: 70%;">
            <table style="margin: auto;" id="portfolio_table">
                <tr>
                    <td><h5>Name: </h5></td>
                    <td><h5><?php echo $portfolio_data->title; ?></h5></td>
                </tr>
                <tr>
                    <td><h5>Client Name: </h5></td>
                    <td><h5><?php echo $portfolio_data->client_name; ?></h5></td>
                </tr>
                <tr>
                    <td><h5>Location: </h5></td>
                    <td><h5><?php echo $portfolio_data->location; ?></h5></td>
                </tr>
                <tr>
                    <td><h5>Year: </h5></td>
                    <td><h5><?php echo $portfolio_data->year; ?></h5></td>
                </tr>
                <tr>
                    <td><h5>Status: </h5></td>
                    <td><h5><?php echo $portfolio_data->status; ?></h5></td>
                </tr>
                <tr>
                    <td><h5>Category: </h5></td>
                    <td><h5><?php echo $portfolio_data->category; ?></h5></td>
                </tr>
                <tr>
                    <td><h5>Remarks: </h5></td>
                    <td><h5><?php echo $portfolio_data->other; ?></h5></td>
                </tr>
            </table> 
        </div>
        <div id="sliderFrame">
            <h3>More Images</h3>
            <div id="slider" style="margin: auto">
                <?php foreach ($portfolio_images as $value) { ?>
                    <a href="#"> <img src="<?php echo base_url(); ?>/images/portfolio_ex/<?php echo $value->image_name; ?>"/></a>
                <?php } ?>
            </div>
        </div>




    </div>
    <div class="col one_third portfolio_thumb" style="padding-left: 45px; width: 255px; " >
        <h3>Portfolio Categories</h3>
        <ul class="templatemo_list">
            <li><a href="<?php echo base_url(); ?>welcome/portfolio.html"><div id="catagory_sidebar_list">View All Categories</div></a></li>
            <?php foreach ($portfolio_category->result_array() as $row) { ?>
                <li><a href="<?php echo base_url(); ?>welcome/portfolio_according_categories/<?php echo $row['portfolio_category']; ?>"><div id="catagory_sidebar_list"><?php echo $row['portfolio_category']; ?></div></a></li>
            <?php } ?>
        </ul>

        <div class="cleaner divider"></div>
    </div>
    <div class="cleaner"></div>
</div>


