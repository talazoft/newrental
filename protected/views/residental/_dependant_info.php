<script type="text/javascript">
    $(function(){
        var d = 2;
        $("#dependant_add").unbind('click').click(function(e){
            $("#dependant"+d).show();
            if(d < 6){
                d++;
            }
        });
        
        $("#dependant_remove").unbind('click').click(function(e){
            if(d > 1){
                d--;
            }
            $("#dependant"+d).hide();
        });
    });
</script>

<fieldset style="text-align: left">
    <legend>Dependant List</legend>
    <div id="dependant1">
        <div id="deplbl1" class="lbl">#1</div>
            <?php $this->renderPartial("_dependant_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="dependant2" style="display: none;">
        <div id="deplbl2" class="lbl">#2</div>
            <?php $this->renderPartial("_dependant_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="dependant3" style="display: none;">
        <div id="deplbl3" class="lbl">#3</div>
            <?php $this->renderPartial("_dependant_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="dependant4" style="display: none;">
        <div id="deplbl4" class="lbl">#4</div>
            <?php $this->renderPartial("_dependant_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="dependant5" style="display: none;">
        <div id="deplbl5" class="lbl">#5</div>
            <?php $this->renderPartial("_dependant_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div id="dependant6" style="display: none;">
        <div id="deplbl6" class="lbl">#6</div>
            <?php $this->renderPartial("_dependant_info_form"); ?>
        <div style="clear: both"></div>
        <hr/>
    </div>
    <div class="add_remove_btn">
        <div class="button" id="dependant_add"><a>Add</a></div>
        <div class="button" id="dependant_remove"><a>Remove</a></div>
    </div>
</fieldset>
