
<?php if ($this->session->userdata('error') != NULL) { ?>
    <h4 class="alert_error"><?php echo $this->session->userdata('error'); ?></h4>
    <?php $this->session->unset_userdata('error');
} ?>
<?php if ($this->session->userdata('warning') != NULL) { ?>
    <h4 class="alert_info"><?php echo $this->session->userdata('warning'); ?></h4>
    <?php $this->session->unset_userdata('warning');
} ?>

<article class="module width_full">
    <header><h3>Stafs</h3></header>
    <div class="module_content">
        <form method="post" action="<?php echo base_url(); ?>admin_home/new_team_name">
            <table style="margin: auto;">
                <tr>
                    <td><input type="text" name="team_name" placeholder="Enter New Team Name" required="value"></td>
                    <td><input type="submit" value="Enter"></td>
                </tr>
            </table>
        </form>
        <div class="clear"></div>
    </div>
</article><!-- end of stats article -->

<?php foreach ($team_name as $value_team_name) { ?>

    <article class="module" style="width: 95%;">
        <header><h3 style="font-size: 11pt; font-family: Calibri;" class="tabs_involved"><?php echo $value_team_name->team_name ?></h3>
            <a href="<?php echo base_url(); ?>admin_home/team_member"><input style="padding: 8px 5px 0 10px;float: right;" type="image" src="<?php echo base_url(); ?>images/admin/icn_add_user.png" title="Edit"></a>
            <a href="<?php echo base_url(); ?>admin_home/edit_team_name/<?php echo $value_team_name->id; ?>"><input style="padding: 8px 5px 0 10px;float: right;" type="image" src="<?php echo base_url(); ?>images/admin/icn_edit.png" title="Edit"></a>
            <a href="<?php echo base_url(); ?>admin_home/delete_team/<?php echo $value_team_name->team_name ?>" onclick="return check_delete();"><input style="padding: 10px 0 0 0px; float: right;" type="image" src="<?php echo base_url(); ?>images/admin/icn_trash.png" title="Trash"></a>
        </header>

        <div class="tab_container">
            <!-- end of #tab1 -->

            <div id="tab2" class="tab_content">
                <table class="tablesorter" cellspacing="0"> 
                    <thead> 
                        <tr> 
                            <th>Name</th> 
                            <th>Designation</th> 
                            <th>Qualification</th> 
                            <th>Institution</th> 
                            <th>Action</th> 
                        </tr> 
                    </thead> 
                    <tbody>
                        <?php foreach ($team_member as $value_team_member) {
                            if ($value_team_member->team_title == $value_team_name->team_name) {
                                ?>
                                <tr>
                                    <td style="background-color: #e7e7e7;font-size: medium"><?php echo $value_team_member->name; ?></td> 
                                    <td><?php echo $value_team_member->designation; ?></td> 
                                    <td style="background-color: #e7e7e7"><?php echo $value_team_member->qualification; ?></td> 
                                    <td ><?php echo $value_team_member->institution; ?></td> 
                                    <td style="background-color: #e7e7e7"><a href="<?php echo base_url(); ?>admin_home/edit_team_member/<?php echo $value_team_member->id;?>"><input type="image" src="<?php echo base_url(); ?>images/admin/icn_edit.png" title="Edit"></a><a href="<?php echo base_url(); ?>admin_home/delete_team_member/<?php echo $value_team_member->id;?>" onclick="return check_delete();"><input type="image" src="<?php echo base_url(); ?>images/admin/icn_trash.png" title="Trash"></a></td> 
                                </tr>
                            <?php
                            }
                        }?>
                                </tbody> 
            </table>

        </div><!-- end of #tab2 -->

    </div><!-- end of .tab_container -->

</article><!-- end of content manager article --><?php }?>
