<?php if ($this->session->userdata('error') != NULL) { ?>
    <h4 class="alert_error"><?php echo $this->session->userdata('error'); ?></h4>
    <?php $this->session->unset_userdata('error');
} ?>
<?php if ($this->session->userdata('warning') != NULL) { ?>
    <h4 class="alert_info"><?php echo $this->session->userdata('warning'); ?></h4>
    <?php $this->session->unset_userdata('warning');
} ?>

<h3><a href="<?php echo base_url()?>admin_home/add_new_portfolio">Go Back</a></h3>

<?php foreach ($images as $value) { ?>
    <div style="width: 330px; margin: auto; float: left; text-align: center;">
        <img id="po_ex" height="auto" width="250px" src="<?php echo base_url() ?>/images/portfolio_ex/<?php echo $value->image_name; ?>">
        <a href="<?php echo base_url()?>admin_home/delete_port_ex_image?portfolio_id=<?php echo $portfolio_id; ?>&file_name=<?php echo $value->image_name; ?>" style="margin: auto;">Delete</a>
    </div>
<?php } ?>