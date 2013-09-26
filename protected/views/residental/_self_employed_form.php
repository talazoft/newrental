<div style="width:45%; height: 100%; margin: 10px; float: left;">
    <table width="100%">
        <tr>
            <td>
                <label>Business Name</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[business_name]", "", array('style'=>'width:92%', 'id'=>"business_name")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Business Type</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[business_type]", "", array('style'=>'width:92%', 'id'=>"employer_address")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Years in Business</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[years_in_business]", "", array('style'=>'width:92%', 'id'=>"years_in_business")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Address</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[business_address]", "", array('style'=>'width:92%', 'id'=>"business_address")); ?>
            </td>
        </tr>
    </table>
</div>
<div style="width:49%; height: 100%; margin: 10px; float: left;">
    <table width="100%">
        <tr>
            <td>
                <label>Phone</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[business_phone]", "", array('style'=>'width:89%', 'id'=>"business_phone", 'class'=>'phone')); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Length of Stay</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[stay_lenght]", "", array('style'=>'width:89%', 'id'=>"stay_lenght")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Landlord Name</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[landlord_name]", "", array('style'=>'width:89%', 'id'=>"landlord_name")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Landlord Phone</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[landlord_phone]", "", array('style'=>'width:89%', 'id'=>"landlord_phone", 'class'=>'phone')); ?>
            </td>
        </tr>
    </table>
</div>