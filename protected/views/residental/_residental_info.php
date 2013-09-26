<script type="text/javascript">
    $(function(){
        var r = 2;
        $("#res_add").unbind('click').click(function(e){
            $("#resident"+r).show();
            if(r < 6){
                r++;
            }
        });
        
        $("#res_remove").unbind('click').click(function(e){
            if(r > 1){
                r--;
            }
            $("#resident"+r).hide();
        });
    });
</script>

<fieldset style="text-align: left">
    <legend>Residental Info</legend>
    <div id="resident1">
        <div id="reslbl1" class="lbl">#1</div>
        <?php $this->renderPartial("_residental_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="resident2" style="display: none;">
        <div id="reslbl2" class="lbl">#2</div>
        <?php $this->renderPartial("_residental_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="resident3" style="display: none;">
        <div id="reslbl3" class="lbl">#3</div>
        <?php $this->renderPartial("_residental_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="resident4" style="display: none;">
        <div id="reslbl4" class="lbl">#4</div>
        <?php $this->renderPartial("_residental_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="resident5" style="display: none;">
        <div id="reslbl5" class="lbl">#5</div>
        <?php $this->renderPartial("_residental_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="resident6" style="display: none;">
        <div id="reslbl6" class="lbl">#6</div>
        <?php $this->renderPartial("_residental_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div class="add_remove_btn">
        <div class="button" id="res_add"><a>Add</a></div>
        <div class="button" id="res_remove"><a>Remove</a></div>
    </div>
</fieldset>
