<article class="module width_full">
    <header><h3>Edit Team Name</h3></header>
    <div class="module_content">
        <form method="post" action="<?php echo base_url(); ?>admin_home/update_team_name">
            <table style="margin: auto;">
                <tr>
                    <td>Previous Team Name: <a style="font-size: medium;"><?php echo $team_name->team_name;?></a></td>
                    <td><input type="text" name="team_name" value="<?php echo $team_name->team_name;?>" required="value"></td>
                    <td><input type="submit" value="Enter"><input name="team_id" type="hidden" value="<?php echo $team_id;?>"></td>
                </tr> 
            </table>
        </form>
        <div class="clear"></div>
    </div>
</article><!-- end of stats article -->
