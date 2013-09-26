<div style="width:45%; height: 100%; margin: 10px; float: left;">
    <table width="100%">
        <tr>
            <td>
                <label>Name</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("PersonalRefrence[$cnt][name]", "", array('style'=>'width:93%', 'id'=>"ref_name$cnt")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Relationship</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("PersonalRefrence[$cnt][relation]", "", array('style'=>'width:93%', 'id'=>"ref_relation$cnt")); ?>
            </td>
        </tr>
    </table>
</div>
<div style="width:49%; height: 100%; margin: 10px; float: left;">
    <table width="100%">
        <tr>
            <td>
                <label>Address</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("PersonalRefrence[$cnt][address]", "", array('style'=>'width:89%', 'id'=>"ref_address$cnt")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Phone</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("PersonalRefrence[$cnt][phone]", "", array('style'=>'width:89%', 'id'=>"ref_phone$cnt", 'class'=>'phone')); ?>
            </td>
        </tr>
    </table>
</div>