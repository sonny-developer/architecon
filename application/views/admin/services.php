<?php if ($this->session->userdata('error') != NULL) { ?>
    <h4 class="alert_error"><?php echo $this->session->userdata('error'); ?></h4>
    <?php $this->session->unset_userdata('error');
} ?>
<?php if ($this->session->userdata('warning') != NULL) { ?>
    <h4 class="alert_info"><?php echo $this->session->userdata('warning'); ?></h4>
    <?php $this->session->unset_userdata('warning');
} ?>
    
    


<article class="module width_full" style="font-family: tahoma; ">
    <header><h3>Existing Services</h3></header>
    <div class="tab_container">
        <!-- end of #tab1 -->

        <div id="tab2" class="tab_content">
            <table class="tablesorter" cellspacing="0"> 
                <thead>
                    <tr> 
                        <th>Name</th> 
                        <th>Description</th> 
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($services as $row){ ?>                      
                    <tr> 
                        <td><strong><?php echo $row->name;?></strong></td>
                        <td><?php echo $row->description;?></td>
                        <td>
                            <a href="<?php echo base_url();  ?>admin_home/delete_service.html?id=<?php echo $row->id;?>">
                                <input type="image" src="<?php echo base_url();  ?>images/admin/icn_trash.png" title="Trash">
                            </a>
                        </td>
                    </tr> 
                    <?php }?>
                </tbody> 
            </table>

        </div><!-- end of #tab2 -->
    </div><!-- end of .tab_container -->
</article>

<article class="module width_full">
    <form action="<?php echo base_url()?>admin_home/save_service_data" method="post">
        <header><h3>Add New Services</h3></header>
        <div class="module_content">
            <fieldset>
                <label>Name of the Service</label>
                <input type="text" name="a">
            </fieldset>

            <label><h3 style="padding-top: 20px;">Add New Services</h3></label>
            <textarea name="b" id="ck_editor" rows="12" placeholder="Service Description here...."></textarea><?php echo display_ckeditor($editor['ckeditor']); ?>
            <div class="clear"></div>
        </div>
        <footer>
            <div class="submit_link">

                <input type="submit" value="Submit" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>
    </form>
</article>