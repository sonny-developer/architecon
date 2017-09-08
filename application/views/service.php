<script>
    function func(a){
        alert(a);
        document.getElementById(a).style.display = "none";
    }
    function hide_all(){
        document.getElementById("p").style.display = "none";
    }

   


</script>
<div id="templatemo_main" onload="hide_all()">
    <div id="content" class="float_l">
        <h3 >Services</h3>
        <div class="cleaner divider"></div>
        <div class="post">
            <div class="post_right">
                <?php foreach ($services as $value) { ?>
                    <div class="meta">
                        <table>
                            <tr>
                            <h3 style="color: #5fb42b"><?php echo $value->name; ?></h3>

                            </tr>
                            <tr >
                                
                                <td >
                                    <span class="fold">
                                        <p id="<?php echo $value->id;?>"><?php echo $value->description; ?></p>
                                        <a onclick="func(<?php echo $value->id;?>)">read more</a>
                                    </span>
                                </td>
<!--                            <button onclick="call(<?php echo $value->id;?>)">Read More</button>-->
                            </tr>
                        </table>
                        <div style=" margin: 0px 0 0 45px; width: 82.5%; border-bottom: 1px solid #ccc"></div>
                        <div class="cleaner"></div>
                    </div>
                <?php } ?>
            </div>
            <div class="cleaner"></div>
        </div>
        <div class="cleaner"></div>
    </div>
    



    <div class="cleaner"></div>

</div>