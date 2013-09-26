<script type="text/javascript">
    $(function(){
        var ref = 4;
        $("#ref_add").unbind('click').click(function(e){
            $("#personalref"+ref).show();
            if(ref < 6){
                ref++;
            }
        });
        
        $("#ref_remove").unbind('click').click(function(e){
            if(ref > 4){
                ref--;
            }
            $("#personalref"+ref).hide();
        });
    });
</script>
<fieldset style="text-align: left">
    <legend>Personal Refrence</legend>
    <?php 
    for($i=1;$i<=6;$i++){ ?>
        <div id="personalref<?php echo $i; ?>" style="<?php echo $i > 3 ? "display:none" : "" ?>" >
            <div id="reflbl1" class="lbl">#<?php echo $i; ?></div>
            <?php $this->renderPartial("_personal_ref_info_form", array('cnt'=>$i)); ?>
            <div style="clear: both"></div>
            <hr/>
        </div>
    <?php } ?>
    <div class="add_remove_btn">
        <div class="button" id="ref_add"><a>Add</a></div>
        <div class="button" id="ref_remove"><a>Remove</a></div>
    </div>
</fieldset>
