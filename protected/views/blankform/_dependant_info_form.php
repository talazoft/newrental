<div style="width:45%; height: 100%; margin: 10px; float: left;">
    <table width="100%">
        <tr>
            <td width="109px">
                <label>Name</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("DependantInfo[name]", "", array('style'=>'width:70%', 'id'=>"DependantInfo_name")); ?>
            </td>
        </tr>
        <tr>
            <td width="109px">
                <label>Relationship</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("DependantInfo[relation]", "", array('style'=>'width:70%', 'id'=>"DependantInfo_relation")); ?>
            </td>
        </tr>
    </table>
</div>
<div style="width:49%; height: 100%; margin: 10px; float: left;">
    <table width="100%">
        <tr>
            <td width="172px">
                <label>Age</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("DependantInfo[age]", "", array('style'=>'width:89%', 'id'=>"DependantInfo_age")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Stay in</label>
            </td>
            <td>:</td>
            <td>
                <?php 
                    echo CHtml::dropDownList("DependantInfo[stay_in]", "", 
                        array('1' => 'Yes', '0' => 'No'),
                        array('style' => 'width:94%', 'empty'=>'Choose one')
                    );  
                ?>
            </td>
        </tr>
    </table>
</div>