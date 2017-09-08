<?php if ($this->session->userdata('error') != NULL) { ?>
    <h4 class="alert_error"><?php echo $this->session->userdata('error'); ?></h4>
    <?php $this->session->unset_userdata('error');
} ?>
<?php if ($this->session->userdata('warning') != NULL) { ?>
    <h4 class="alert_info"><?php echo $this->session->userdata('warning'); ?></h4>
    <?php $this->session->unset_userdata('warning');
} ?>

<article class="module width_full" style="font-family: tahoma; ">
    <header><h3>New Portfolio</h3></header>
    <fieldset style="margin: 10px; padding-top: 20px;">
        <form action="<?php echo base_url() ?>admin_home/save_portfolio_categroy" method="post">
            <table style="margin: auto; font-size: medium; width: 80%;" onload="func()">
                <tr>
                    <td style="margin-right: 0">Category Name:</td>
                    <td><input type="text" name="title" style="margin: 0 30px 0 0 "></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
                
            </table>
        </form>
    </fieldset>
</article>
<article class="module width_full" style="font-family: tahoma; ">
    <header><h3>Existing Portfolio Categories</h3></header>
    <div class="tab_container">
        <!-- end of #tab1 -->

        <div id="tab2" class="tab_content">
            <table class="tablesorter" cellspacing="0"> 
                <thead> 
                    <tr> 
                        <th>Category Name</th> 
                        <th>Actions</th> 
                    </tr> 
                </thead> 
                <tbody>
                    <?php foreach ($category_name->result_array() as $row){ ?>                      
                    <tr> 
                        <td><?php echo $row['portfolio_category']; ?></td> 
                        <td>
                            <a>
                                <input type="image" src="<?php echo base_url(); ?>images/admin/icn_edit.png" title="Edit">
                            </a>
                            <a onclick="check_delete()" href="<?php echo base_url(); ?>admin_home/delete_portfolio_category?cat_name=<?php echo $row['portfolio_category']?>">
                                <input type="image" src="<?php echo base_url(); ?>images/admin/icn_trash.png" title="Trash">
                            </a>
                        </td> 
                    </tr> 
                    <?php }?>
                </tbody> 
            </table>

        </div><!-- end of #tab2 -->
    </div><!-- end of .tab_container -->
</article>
