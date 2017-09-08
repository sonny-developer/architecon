<?php if ($this->session->userdata('error') != NULL) { ?>
    <h4 class="alert_error"><?php echo $this->session->userdata('error'); ?></h4>
    <?php $this->session->unset_userdata('error');
} ?>
<?php if ($this->session->userdata('warning') != NULL) { ?>
    <h4 class="alert_warning"><?php echo $this->session->userdata('warning'); ?></h4>
    <?php $this->session->unset_userdata('warning');
} ?>



<form method="post" action="<?php echo base_url();?>admin_home/submit_about_text">
<article class="module width_full">
        <header><h3>Post New Article</h3></header>
        <div class="module_content">
            <fieldset>
                <label>Post Title</label>
                <input type="text" name="title">
            </fieldset>
            <fieldset>
                <label>Content</label>
                <textarea name="main_text" id="ck_editor" rows="12"></textarea><?php echo display_ckeditor($editor['ckeditor']); ?>
            </fieldset>
            
            <div class="clear"></div>
        </div>
        <footer>
            <div class="submit_link">
               
                <input type="submit" value="Publish" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>
    </article>
    </form>