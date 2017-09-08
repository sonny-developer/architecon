<script type="text/javascript">
    
</script>
<?php if($is_set == 1){?>
<article class="module width_full welcoming_msg">
    <header><h3 style="color: #ff6633;">Welcoming Message (Home Page)</h3></header>
    <div class="module_content">
        <h3><?php echo $message[0]['title'];?></h3>
        <p><?php echo $message[0]['message_body'];?></p>
        <a href="<?php echo base_url()?>admin_home/delete_welcoming_message"><button>Delete</button></a>
        
        
    </div>
</article><!-- end of styles article --><?php } else{?>



    <div class="module_content">
        <form method="post" action="<?php echo base_url();?>admin_home/save_welcoming_message">
            <table id="weocoming_message">
                <tr>
                    <td><h3 style="margin: 0;">Header: </h3></td>
                </tr>
                <tr>
                    <td><input type="text" name="title" placeholder="Header ro Title Here..."style="width: 98%; padding-left: 10px; margin-bottom: 30px; "></td>
                </tr>
                <tr>
                    <td><h3 style="margin: 0;">Message Body:</h3> </td>
                </tr>
                <tr>

                    <td><textarea id="ck_editor" name="message_body"></textarea><?php echo display_ckeditor($editor['ckeditor']); ?></td>
                </tr>
                <tr>

                    <td><input type="submit" value="Submit" style="color: #3333ff"></td>
                </tr>
            </table>
        </form>    
</div> <?php }?>


