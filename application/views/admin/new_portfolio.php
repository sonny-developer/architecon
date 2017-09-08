<?php if ($this->session->userdata('error') != NULL) { ?>
    <h4 class="alert_error"><?php echo $this->session->userdata('error'); ?></h4>
    <?php
    $this->session->unset_userdata('error');
}
?>
<?php if ($this->session->userdata('warning') != NULL) { ?>
    <h4 class="alert_info"><?php echo $this->session->userdata('warning'); ?></h4>
    <?php
    $this->session->unset_userdata('warning');
}
?>

<article class="module width_full" style="font-family: tahoma;" id="ax">
    <header><h3>New Portfolio</h3></header>
    <fieldset style="margin: 10px; padding-top: 20px;">
        <form action="<?php echo base_url() ?>admin_home/save_new_portfolio" enctype="multipart/form-data" method="post" >
            <table style="margin: auto; font-size: medium;" onload="func()">
                <tr>
                    <td>Title:</td>
                    <td><input type="text" name="title" required></td>
                </tr>
                <tr>
                    <td>Location:</td>
                    <td><input type="text" name="Location"></td>
                </tr>
                <tr>
                    <td>Year:</td>
                    <td><input type="number" name="year" style="margin-left: 10px;"></td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td><select name="status" style="padding-left: 10px;"><option>Ongoing</option><option>Completed</option></select></td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td><select required id="existing_category" name="category" style="padding-left: 10px;">
                            <option selected disabled value="">Choose Category...</option>
                            <?php foreach ($category_name->result_array() as $row) { ?>
                                <option><?php echo $row['portfolio_category']; ?></option>
<?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Clients:  </td>
                    <td><select required id="existing_category" name="client_name" style="padding-left: 10px;">
                            <option selected disabled value="">Choose Category...</option>
                            <?php foreach ($all_clients_data as $row) { ?>
                                <option><?php echo $row->name; ?></option>
<?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Other:</td>
                    <td><textarea cols="30" rows="" name="other"></textarea></td>
                </tr>
                <tr>
                    <td>Cover Picture:</td>
                    <td><input type="file" name="image" multiple style="padding-left: 10px;"required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit" style="float: right;margin: 0 0 0 500px;"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</article>

    <div class="module width_full" style="font-family: tahoma; width: 99%; padding:0; margin: 15px 0 0 5px; ">
    <header><h3>Existing Portfolio Categories</h3>
        <a href="<?php echo base_url(); ?>admin_home/delete_all_portfolios" onclick="return check_delete();"><input style="padding: 3px 30px 0 0px; float: right;" type="image" src="<?php echo base_url(); ?>images/admin/icn_trash.png" title="Trash">Delete</a>
    </header>
    <div class="tab_container">
        <!-- end of #tab1 -->

        <div id="tab2" class="tab_content">
            <table class="tablesorter" cellspacing="0"> 
                <thead> 
                    <tr> 
                        <th>Category Name</th> 
                        <th>Client Name</th> 
                        <th>Location</th> 
                        <th>Year</th> 
                        <th>Status</th> 
                        <th>Category</th> 
                        <th>Remark</th> 
                        <th style="width: 10px;">Cover Photo</th> 
                        <th>Add Image</th> 
                        <th>Images</th> 
                        <th>Actions</th> 
                    </tr>
                </thead>
                <tbody>
<?php foreach ($portfolio_data->result_array() as $row) { ?>                      
                        <tr> 
                            <td><?php echo $row['title']; ?></td> 
                            <td><?php echo $row['client_name']; ?></td> 
                            <td><?php echo $row['location']; ?></td> 
                            <td><?php echo $row['year']; ?></td> 
                            <td><?php echo $row['status']; ?></td> 
                            <td><?php echo $row['category']; ?></td> 
                            <td><?php echo $row['other']; ?></td> 
                            <td><img src="<?php echo $row['image_path']; ?>" height="auto" width="100px"></td> 
                            <td>
                                <form action="<?php echo base_url(); ?>admin_home/add_portfolio_image" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="portfolio_id" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="portfolio_cat" value="<?php echo $row['category']; ?>">
                                    <input multiple type="file" name="new_portfolio_image[]">
                                    <input type="submit" value="Submit" >
                                    <a href="#"><button>view image</button></a>
                                </form>
                            </td>
                            <td><a href="<?php echo base_url();?>admin_home/view_portfolio_image/<?php echo $row['id'];?>"><button>View Images</button></a><?php //echo 'xxx'; ?></td> 
                            <td>
                                <a href="<?php echo base_url(); ?>admin_home/delete_portfolio.html?id=<?php echo $row['id'] ?>&file_name=<?php echo $row['file_name']; ?>">
                                    <input onclick="check_delete()" type="image" src="<?php echo base_url(); ?>images/admin/icn_trash.png" title="Trash">
                                </a>
                            </td> 
                        </tr> 
<?php } ?>
                </tbody> 
            </table>
        </div><!-- end of #tab2 -->
    </div><!-- end of .tab_container -->
</div>

