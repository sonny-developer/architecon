<?php if ($this->session->userdata('error') != NULL) { ?>
    <h4 class="alert_error"><?php echo $this->session->userdata('error'); ?></h4>
    <?php $this->session->unset_userdata('error');
} ?>
<?php if ($this->session->userdata('warning') != NULL) { ?>
    <h4 class="alert_info"><?php echo $this->session->userdata('warning'); ?></h4>
    <?php $this->session->unset_userdata('warning');
} ?>
    
<form action="<?php echo base_url()?>admin_home/save_contact_data" method="post">
    <header><h3>Contact Details:</h3></header>
    <div class="module_content">
        <table>
            <tr>
                <td><label>Cell No: </label></td>
                <td><input type="number" name="a"><a href="#tab2" style="font-size: medium; float: right;color: #0066CC">View Contact</a></td>
            </tr>
            <tr>
                <td><label>Email:</label></td>
                <td><input type="text" name="b"></td>
            </tr>
            <tr>
                <td></td>
                <td><label>Office Address</label><textarea name="c" id="ck_editor" rows="1" placeholder="Service Description here...."></textarea><?php echo display_ckeditor($editor['ckeditor']); ?></td>
            </tr>
        </table>
        <div class="clear"></div>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Submit" class="alt_btn">
            <input type="reset" value="Reset">
        </div>
    </footer>
</form>
<article class="module width_full" style="margin-top: 50px;font-family: tahoma;" id="table">
    <header><h3>Existing Contacts</h3></header>
    <div class="tab_container">
        <!-- end of #tab1 -->

        <div id="tab2" class="tab_content">
            <table class="tablesorter" cellspacing="0"> 
                <thead>
                    <tr> 
                        <th>Office Address</th> 
                        <th>Cell No</th> 
                        <th>Email</th> 
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contact as $row){ ?>                      
                    <tr> 
                        <td style="background-color: #f6f6f6;"><?php echo $row->address;?></td>
                        <td><?php echo $row->cell;?></td>
                        <td><?php echo $row->email;?></td>
                        <td>
                            <a href="<?php echo base_url();  ?>admin_home/delete_contact/<?php echo $row->id;?>">
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