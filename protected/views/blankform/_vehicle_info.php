<script type="text/javascript">
    $(function(){
        var v = 2;
        $("#vehicle_add").unbind('click').click(function(e){
            $("#vehicle"+v).show();
            if(v < 6){
                v++;
            }
        });
        
        $("#vehicle_remove").unbind('click').click(function(e){
            if(v > 1){
                v--;
            }
            $("#vehicle"+v).hide();
        });
    });
</script>

<fieldset style="text-align: left">
    <legend>Vehicle Information</legend>
    <div id="vehicle1">
        <div id="vehlbl1" class="lbl">#1</div>
        <?php $this->renderPartial("_vehicle_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="vehicle2" style="display: none">
        <div id="vehlbl2" class="lbl">#2</div>
        <?php $this->renderPartial("_vehicle_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="vehicle3" style="display: none">
        <div id="vehlbl3" class="lbl">#3</div>
        <?php $this->renderPartial("_vehicle_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="vehicle4" style="display: none">
        <div id="vehlbl4" class="lbl">#4</div>
        <?php $this->renderPartial("_vehicle_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="vehicle5" style="display: none">
        <div id="vehlbl5" class="lbl">#5</div>
        <?php $this->renderPartial("_vehicle_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="vehicle6" style="display: none">
        <div id="vehlbl6" class="lbl">#6</div>
        <?php $this->renderPartial("_vehicle_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div class="add_remove_btn">
        <div class="button" id="vehicle_add"><a>Add</a></div>
        <div class="button" id="vehicle_remove"><a>Remove</a></div>
    </div>
</fieldset>
