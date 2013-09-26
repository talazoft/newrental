<div style="width:45%; height: 100%; margin: 10px; float: left;">
    <table width="100%">
        <tr>
            <td>
                <label>Employer</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[employer]", "", array('style'=>'width:75%', 'id'=>"employer")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Address</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[employer_address]", "", array('style'=>'width:75%', 'id'=>"employer_address")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Phone</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[phone]", "", array('style'=>'width:75%', 'id'=>"emplymnet_phone", 'class'=>'phone')); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Department</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[department]", "", array('style'=>'width:75%', 'id'=>"emplymnet_department")); ?>
            </td>
        </tr>
    </table>
</div>
<div style="width:49%; height: 100%; margin: 10px; float: left;">
    <table width="100%">
        <tr>
            <td>
                <label>Position/Title</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[position]", "", array('style'=>'width:89%', 'id'=>"position")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Length of Employment</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[employment_length]", "", array('style'=>'width:89%', 'id'=>"employment_length")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Salary</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[salary]", "", array('style'=>'width:89%', 'id'=>"salary", 'class'=>'currency')); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Supervisor Name</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("EmploymentInfo[supervisor_name]", "", array('style'=>'width:89%', 'id'=>"supervisor_name")); ?>
            </td>
        </tr>
    </table>
</div>