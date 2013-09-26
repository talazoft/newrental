<script type="text/javascript">
$(function(){
    
    function employment(){
        var emptype = $("#employment_type1 option:selected").val();
        switch(emptype){
            case 'fulltime':
                $("#employed1").show();
                $("#selfemployed1").hide();
                break;
            case 'parttime':
                $("#employed1").show();
                $("#selfemployed1").hide();
                break;
            case 'selfemployed':
                $("#employed1").hide();
                $("#selfemployed1").show();
                break;
            case 'unemployed':
                $("#employed1").hide();
                $("#selfemployed1").hide();
                break;
        }
    }
    
    employment();
    
    $("#employment_type1").unbind('change').change(function(e){
        employment();
        e.stopPropagation();
    });
    
});
</script>
<div style="margin-left: 14px;">
<?php 
    $empType = array(
        "fulltime" => "Full Time",
        "parttime" => "Part Time",
        "selfemployed" => "Self Employed",
        "unemployed" => "Unemployed",
    );

    echo CHtml::dropdownList("EmploymentInfo[employment_type]", "", 
            $empType, 
            array('id'=>"employment_type1", 
                'required'=>'required', 'style'=>'width: 288px'));
?>
</div>
<div id="employed1" style="display: none">
    <?php $this->renderPartial("_employed_form"); ?>
</div>
<div id="selfemployed1" style="display: none">
    <?php $this->renderPartial("_self_employed_form") ?>
</div>