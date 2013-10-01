<script type="text/javascript">
$(function(){
    
    var cnt = <?php echo $cnt; ?>;
    function employment(cnt){
        var emptype = $("#employment_type"+cnt+" option:selected").val();
        switch(emptype){
            case 'fulltime':
                $("#employed"+cnt).show();
                $("#selfemployed1"+cnt).hide();
                break;
            case 'parttime':
                $("#employed"+cnt).show();
                $("#selfemployed"+cnt).hide();
                break;
            case 'selfemployed':
                $("#employed"+cnt).hide();
                $("#selfemployed"+cnt).show();
                break;
            case 'unemployed':
                $("#employed"+cnt).hide();
                $("#selfemployed"+cnt).hide();
                break;
        }
    }
    
    
    employment(cnt);

    $("#employment_type"+cnt).unbind('change').change(function(e){
        employment(cnt);
        e.stopPropagation();
    });    
});
</script>
<div style="margin-left: 14px; width: 335px">
<?php 
    $empType = array(
        "fulltime" => "Full Time",
        "parttime" => "Part Time",
        "selfemployed" => "Self Employed",
        "unemployed" => "Unemployed",
    );

    echo CHtml::dropdownList("EmploymentInfo[employment_type]", "", 
            $empType, 
            array('id'=>"employment_type$cnt", 
                'required'=>'required', 'style'=>'width: 100%'));
?>
</div>
<div id="employed<?php echo $cnt; ?>" style="display: none">
    <?php $this->renderPartial("_employed_form"); ?>
</div>
<div id="selfemployed<?php echo $cnt; ?>" style="display: none">
    <?php $this->renderPartial("_self_employed_form") ?>
</div>