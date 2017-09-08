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
    <header><h3>Add New Client</h3></header>
    <div class="module_content">
        <form action="<?php echo base_url(); ?>admin_home/save_client" method="post" enctype="multipart/form-data">
            <input multiple type="file" name="client_image" required>
            <span>Client Name: </span><input required style="width: 65%" type="text" name="name" placeholder="Client's Name Here...">
            <input type="submit" value="Submit" onsubmit="checkForm(this);">
        </form>
        <p><h4> Standard Image Size:</h4> <h2 style="color: #ff6600">580px : 380px</h2></p>
    </div>
</article><!-- end of styles article -->

<article class="module" style="width: 95%;">
    <header>
        <h3>Existing Clients:</h3>
        <a href="<?php echo base_url();?>admin_home/delete_all_clients" onclick="return check_delete();"><input style="padding: 3px 30px 0 0px; float: right;" type="image" src="<?php echo base_url(); ?>images/admin/icn_trash.png" title="Trash">Delete</a>
    </header>

    <div class="tab_container">
         <!--end of #tab1--> 

        <div id="tab2" class="tab_content">
            <table class="tablesorter" cellspacing="0"> 
                <thead> 
                    <tr> 
                        <th>Name</th> 
                        <th style="padding-left: 400px;">Images</th> 
                        <th>Action</th> 
                    </tr> 
                </thead> 
                <?php  foreach ($clients as $value) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $value->name;?></td>
                        <td><img src="<?php echo base_url();?>/images/client/<?php echo $value->image;?>" height="auto" width="100px" style="float: right;margin: 0;"> </td>
                        <td><a href="<?php echo base_url();?>admin_home/delete_single_client/<?php echo $value->image;?>" onclick="return check_delete();"><input type="image" src="<?php echo base_url(); ?>images/admin/icn_trash.png" title="Trash">Delete</a></td>
                    </tr>
                </tbody>
                <?php }?>
            </table>

        </div> 
         <!--end of #tab2--> 

    </div> 
    <!--end of .tab_container--> 

</article> 
<!--end of content manager article-->