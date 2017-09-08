<article class="module width_full">
    <header><h3 style="color: #0000cc;">Add New Team Member Here</h3></header>
    <div class="module_content">
        <form method="post" action="<?php echo base_url();?>admin_home/save_team_member">
            <table style="width: auto;">
                <tr>
                    <td><h3 style="float: right;">Team Title:</h3></td>
                    <td><select name="team_title" style="height: 25px; width: 170px;"><?php foreach ($team_name as $value){?><option><?php echo $value->team_name; ?> </option><?php } ?></select></td>
                </tr>
                <tr>
                    <td><h3 style="float: right;">Name:</h3></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><h3 style="float: right;">Designation:</h3></td>
                    <td><input type="text" name="designation"></td>
                </tr>
                <tr>
                    <td><h3 style="float: right;">Qualification:</h3></td>
                    <td><input type="text" name="qualification"></td>
                </tr>
                <tr>
                    <td><h3 style="float: right;">Institution:</h3></td>
                    <td><input type="text" name="institution"></td>
                </tr>
                
                <tr>
                    <td colspan="2"><input type="submit" value="Submit" src="<?php echo base_url();?>images/sub_button.png" ></td>
                </tr>
            </table>
        </form>
        
        
        
        
        
    </div>
</article>