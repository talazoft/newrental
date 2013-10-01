<div style="width:45%; height: 100%; margin: 10px; float: left;">
    <table width="100%">
        <tr>
            <td width="109px">
                <label>License Plate</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("VehicleInfo[license_plate]", "", array('style'=>'width:70%', 'id'=>"VehicleInfo_license_plate")); ?>
            </td>
        </tr>
        <tr>
            <td width="109px">
                <label>Make/Model</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("VehicleInfo[maker_model]", "", array('style'=>'width:70%', 'id'=>"VehicleInfo_maker_model")); ?>
            </td>
        </tr>
    </table>
</div>
<div style="width:49%; height: 100%; margin: 10px; float: left;">
    <table width="100%">
        <tr>
            <td width="172px">
                <label>Year</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("VehicleInfo[year]", "", array('style'=>'width:89%', 'id'=>"VehicleInfo_year", 'class'=>'year')); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Color</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("VehicleInfo[color]", "", array('style'=>'width:89%', 'id'=>"VehicleInfo_color")); ?>
            </td>
        </tr>
    </table>
</div>