<div style="width:45%; height: 100%; margin: 10px 20px 10px 10px; float: left;">
    <table width="100%">
        <tr>
            <td>
                <label>Address</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("ResidentalHistory[address]", "", array('style'=>'width:90%', 'id'=>"ResidentalHistory_address")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>City</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("ResidentalHistory[city]", "", array('style'=>'width:90%', 'id'=>"ResidentalHistory_city")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Length of Stay</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("ResidentalHistory[year_month_moved_in]", "", array('style'=>'width:90%', 'id'=>"ResidentalHistory_year_month_moved_in", 'class'=>'age')); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Landlord/Agent</label>
            </td>
            <td>:</td>
            <td>
                <?php 
                    echo CHtml::dropDownList("ResidentalHistory[agent_landlord_type]", "", 
                            array("Lanlord"=>"Lanlord", "Agent"=>"Agent"),
                            array('style'=>'width:95%', 'required'=>'required'));
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Name</label></td>
            <td>:</td>
            <td>
                <?php 
                    echo CHtml::textField("ResidentalHistory[agent_landlord_name]", "", array('style'=>'width:90%', 'id'=>"agent_landlord_name", 'required'=>'required')); 
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Phone</label></td>
            <td>:</td>
            <td>
                <?php 
                    echo CHtml::textField("ResidentalHistory[agent_landlord_phone]", "", array('style'=>'width:90%', 'id'=>"agent_landlord_phone", 'class'=>'phone', 'required'=>'required')); 
                ?>
            </td>
        </tr>
    </table>
</div>
<div style="width:40%; height: 100%;margin: 10px 10px 10px 40px; float: left;">
    <table width="100%">
        <tr>
            <td>
                <label>Unit</label>
            </td>
            <td>:</td>
            <td>
                <?php echo CHtml::textField("ResidentalHistory[unit]", "", array('style'=>'width:83%', 'id'=>"ResidentalHistory_unit")); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>State</label>
            </td>
            <td>:</td>
            <td>
                <table>
                    <tr>
                        <td>
                            <?php 
                                echo CHtml::textField("ResidentalHistory[state]", "", 
                                        array('style'=>'width:56px', 'id'=>"state", 'required'=>'required'))
                            ?>
                        </td>
                        <td style="width: 44px;">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>
                            <label>Zip Code</label>
                        </td>
                        <td>:</td>
                        <td>
                            <?php 
                                echo CHtml::textField("ResidentalHistory[zip]", "", 
                                    array('style'=>'width:45px', 'id'=>"zipcode", 'maxlength'=>"5", 'size'=>"5", 'class'=>'zip', 
                                        'required'=>'required'));
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td><label>Rent $</label></td>
            <td>:</td>
            <td>
                <?php 
                    echo CHtml::textField("ResidentalHistory[rent]", "", array('style'=>'width:83%', 'id'=>"rent", 'class'=>'currency', 'required'=>'required')); 
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="3"><label>Reason for leaving</label></td>
        </tr>
        <tr>
            <td colspan="3">
                <?php 
                    echo CHtml::textArea("ResidentalHistory[leave_reason]", "", 
                            array('style'=>'width:90%; height:70%', 
                                'id'=>"leave_reason", 'rows'=>"6", 'cols'=>"48")); 
                ?>
            </td>
        </tr>
    </table>
</div>