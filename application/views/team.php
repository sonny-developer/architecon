<div id="templatemo_main">
    <div id="content" class="float_l">
        <h3>Team</h3>
        <div class="cleaner divider"></div>
        <?php foreach ($team_name as $value_team_name) { ?>
                
                                    <div class="post">
                                <div class="post_right">
                                    <h3><a href="blog_post.html"><?php echo $value_team_name->team_name; ?></a></h3>
                                    <?php foreach ($team_member as $value_team_member) {
                                    if ($value_team_name->team_name == $value_team_member->team_title) {?>
                                    <div class="meta">
                                        <table>
                                            <tr>
                                                <td><span style="font-size: large"  class="admin"><?php echo $value_team_member->name;?></span></td>

                                            </tr>
                                            <tr >
                                                <td><span class="date"><?php echo $value_team_member->designation;?></span></td>

                                            </tr>

                                            <tr>
                                                <td><span class="tag"><a href="#"><?php echo $value_team_member->qualification;?></a>, <a href="#"></a></span></td>

                                            </tr>
                                            <tr>
                                                <td><span class="comment"><a href="#"><?php echo $value_team_member->institution;?></a></span></td>

                                            </tr>
                                        </table>
                                        <div style=" margin: 0px 0 0 45px; width: 82.5%; border-bottom: 1px solid #ccc"></div>
                                        <div class="cleaner"></div>
                                    </div>
                                    <?php }}?>
                                </div>
                                <div class="cleaner"></div>
                            </div>
                <?php  } ?>
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
</div>