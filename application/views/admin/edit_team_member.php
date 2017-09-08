<article class="module width_full">
    <header><h3 style="color: #0000cc;">Edit Team Member Information</h3></header>
    <div class="module_content">
        <form method="post" action="<?php echo base_url();?>admin_home/update_team_member">
            <table style="width: auto;">
                <tr>
                    <td><h3 style="float: right;">Team Title:</h3></td>
                    <td><select name="team_title" style="height: 25px; width: 170px;"><?php foreach ($team_name as $value){?><option><?php echo $value->team_name; ?> </option><?php } ?></select></td>
                </tr>
                <tr>
                    <td><h3 style="float: right;">Name:</h3></td>
                    <td><input type="text" name="name" value="<?php echo $team_member->name;?>"></td>
                </tr>
                <tr>
                    <td><h3 style="float: right;">Designation:</h3></td>
                    <td><input type="text" name="designation" value="<?php echo $team_member->designation;?>"></td>
                </tr>
                <tr>
                    <td><h3 style="float: right;">Qualification:</h3></td>
                    <td><input type="text" name="qualification" value="<?php echo $team_member->qualification;?>"></td>
                </tr>
                <tr>
                    <td><h3 style="float: right;">Institution:</h3></td>
                    <td><input type="text" name="institution" value="<?php echo $team_member->institution;?>"></td>
                </tr>
                <tr>
                    <td style="float: right; padding-right: 0;"><a>Publish</a><input type="radio" name="publication" value="1" checked="checked"></td>
                    <td><input type="radio" name="publication" value="0" ><a>Unpublish</a></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Submit" src="<?php echo base_url();?>images/sub_button.png" ></td>
                </tr>
                <input type="hidden" name="id" value="<?php echo $team_member->id;?>">
            </table>
        </form>
        
        
        
        
        
    </div>
</article>