<script>
    function showDiv() {
        document.getElementById("slider_image").style.display = "block";
    }

    function checkForm(form) // Submit button clicked
    {
        form.myButton.disabled = true;
        form.myButton.value = "Please wait...";
        return true;
    }
</script>
<?php if ($this->session->userdata('error') != NULL) { ?>
    <h4 class="alert_error"><?php echo $this->session->userdata('error'); ?></h4>
    <?php $this->session->unset_userdata('error');
}
?>
<?php if ($this->session->userdata('warning') != NULL) { ?>
    <h4 class="alert_warning"><?php echo $this->session->userdata('warning'); ?></h4>
    <?php $this->session->unset_userdata('warning');
}
?>
    
    

<!-- <div id="new_slider_image" onclick="showDiv()">Insert New Slide Image</div>-->     

<article style="display: block;" id="slider_image" class="module width_full">
    <header><h3>New Slider Image</h3></header>
    <div class="module_content">
        <form action="<?php echo base_url(); ?>admin_home/save_slider_image" method="post" enctype="multipart/form-data">
            <input multiple type="file" name="new_slider_image[]">
            <input type="submit" name="myButton" value="Submit" onsubmit="checkForm(this);">
            <input style="width: 65%" type="text" name="caption" placeholder="Insert CAPTION Here...">
        </form>
        <p><h4> Standard Image Size:</h4> <h2 style="color: #ff6600">580px : 380px</h2></p>
    </div>
</article><!-- end of styles article -->
<article class="module" style="width: 95%;">
    <header>
        <h3>Existing Images:</h3>
        <a href="<?php echo base_url();?>admin_home/delete_all_slide" onclick="return check_delete();"><input style="padding: 3px 30px 0 0px; float: right;" type="image" src="<?php echo base_url(); ?>images/admin/icn_trash.png" title="Trash">Delete</a>
    </header>

    <div class="tab_container">
        <!-- end of #tab1 -->

        <div id="tab2" class="tab_content">
            <table class="tablesorter" cellspacing="0"> 
                <thead> 
                    <tr> 
                        <th>Name</th> 
                        <th>Caption</th> 
                        <th>Images</th> 
                        <th>Action</th> 
                    </tr> 
                </thead> 
                <?php  foreach ($slider_image as $value) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $value->file_name;?></td>
                        <td><?php echo $value->caption;?></td>
                        <td><img src="<?php echo base_url();?>/images/slider/<?php echo $value->file_name;?>" height="auto" width="250px" style="float: right;margin: 0;"> </td>
                        <td><a href="<?php echo base_url();?>admin_home/delete_slider_image/<?php echo $value->file_name;?>" onclick="return check_delete();"><input type="image" src="<?php echo base_url(); ?>images/admin/icn_trash.png" title="Trash">Delete</a></td>
                    </tr>
                </tbody>
                <?php }?>
            </table>

        </div><!-- end of #tab2 -->

    </div><!-- end of .tab_container -->

</article><!-- end of content manager article -->