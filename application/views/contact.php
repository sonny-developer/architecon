<div id="templatemo_main">
    <h2>Contact</h2>
    <div class="cleaner divider"></div>
    <div class="half float_l">
    <?php foreach($contact as $row) {?>
        <div id="contact_form">
                <h4>Office Address</h4>
            <?php echo $row->address;?>
            <strong>Phone:</strong><a>+<?php echo $row->cell;?></a><br />
            <strong>Email:</strong><a><?php echo $row->email;?></a> <br/>
            <div class="cleaner divider"></div>
        </div>
    <?php }?>
    </div>
    <div class="cleaner"></div>
</div>