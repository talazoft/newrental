<script type="text/javascript">
    $(function(){
        var emp = 2;
        $("#emp_add").unbind('click').click(function(e){
            $("#employment"+emp).show();
            if(emp < 6){
                emp++;
            }
        });
        
        $("#emp_remove").unbind('click').click(function(e){
            if(emp > 1){
                emp--;
            }
            $("#employment"+emp).hide();
        });
    });
</script>
<fieldset style="text-align: left">
    <legend>Work or Bussiness Information</legend>    
    <div id="employment1">
        <div id="emplbl1" class="lbl">#1</div>
        <?php $this->renderPartial("_employment_info_form", array('cnt'=>1)); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <?php 
    for($cnt=2;$cnt<=5;$cnt++){ ?>
        <div id="employment<?php echo $cnt; ?>" style="display: none;">
            <div id="emplbl<?php echo $cnt; ?>" class="lbl">#<?php echo $cnt; ?></div>
            <?php $this->renderPartial("_employment_info_form", array('cnt'=>$cnt)); ?>
            <div style="clear: both"></div>
            <hr/>
        </div>
    <?php } ?>
    <div class="add_remove_btn">
        <div class="button" id="emp_add"><a>Add</a></div>
        <div class="button" id="emp_remove"><a>Remove</a></div>
    </div>
</fieldset>
