<style type="text/css">
    .ui-spinner{
        border-radius: 0 0 0 0;
        margin: 10px 0px 5px 0px;
    }
</style>
<div style="float: left;">
    <table>
        <tr>
            <td><label>City</label></td>
            <td>:</td>
            <td>
                <?php 
                echo CHtml::textField("ApplicationInformation[city_name]", "", 
                        array(
                            'style'=>'width: 200px', 
                            'id'=>"city_name", 
                            'required'=>'required', 
                            'placeholder'=>'City name')); 
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Address</label>
            </td>
            <td>:</td>
            <td>
                <?php 
                echo CHtml::textField("ApplicationInformation[address]", "", 
                        array(
                            'style'=>'width: 200px', 
                            'id'=>"address", 
                            'required'=>'required')); 
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>State</label>
            </td>
            <td>:</td>
            <td>
                <?php 
                echo CHtml::textField("ApplicationInformation[state]", "", 
                        array(
                            'style'=>'width: 55px', 
                            'id'=>"state", 
                            'required'=>'required')); 
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Zip</label> :";
                echo CHtml::textField("ApplicationInformation[zipcode]", "", 
                        array(
                            'style'=>'width: 60px; margin-left:10px', 
                            'id'=>"zipcode", 
                            'class'=>'zip',
                            'required'=>'required')); 
                ?>
            </td>
        </tr>
    </table>
</div>
<div style="float: left; margin-left: 5px; border-left: 1px solid #D3D5D5; padding-left: 3px;">
    <table>
        <tr>
            <td>
                <label>Bathroom</label>
            </td>
            <td>:</td>
            <td>
                <?php 
                echo CHtml::textField("ApplicationInformation[bathroom]", "", 
                        array(
                            //'style'=>'width: 35px; border:0px; margin:0px; padding: 4px 5px 5px 5px', 
                            'style'=>'width: 35px',
                            'id'=>"bathroom", 
                            //'class'=>'spinner',
                            'required'=>'required')); 
                echo " <label>Bedroom</label> : ";
                echo CHtml::textField("ApplicationInformation[bathroom]", "", 
                        array(
                            //'style'=>'width: 35px; border:0px; margin:0px; padding: 4px 5px 5px 5px',
                            'style'=>'width: 35px',
                            'id'=>"bathroom", 
                            //'class'=>'spinner',
                            'required'=>'required')); 
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Term</label></td>
            <td>:</td>
            <td>
                <?php 
                echo CHtml::textField("ApplicationInformation[term]", "", 
                        array(
                            //'style'=>'width: 45px; border:0px; margin:0px; padding: 4px 5px 5px 5px', 
                            'style'=>'width: 45px', 
                            'id'=>"term", 
                            //'class'=>'spinner',
                            'required'=>'required'));
                echo "&nbsp;&nbsp;<label>year lease</label>"
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Monthly rent ($)</label>
            </td>
            <td>:</td>
            <td>
                <?php 
                echo CHtml::textField("ApplicationInformation[rent]", "", 
                        array(
                            'style'=>'width: 157px', 
                            'class'=>'currency',
                            'id'=>"rent", 
                            'required'=>'required')); 
                ?>
            </td>
        </tr>
    </table>
</div>
<div style="float: left; margin-left: 5px; border-left: 1px solid #D3D5D5; padding-left: 3px;">
    <table>
        <tr>
            <td><label>Type</label></td>
            <td>:</td>
            <td>
                <?php 
                echo CHtml::dropdownList("ApplicationInformation[type]", "",
                        array("apartment"=>"Apartment", "commercial"=>"Commercial"),
                        array("style"=>"width:212px"));
                ?>
            </td>
        </tr>
        <tr>
            <td><label>Security deposit ($)</label></td>
            <td>:</td>
            <td>
                <?php 
                echo CHtml::textField("ApplicationInformation[deposit]", "", 
                        array(
                            'style'=>'width: 200px', 
                            'id'=>"deposit", 
                            'required'=>'required', 
                            'class'=>'currency')); 
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <label>Total move in</label>
            </td>
            <td>:</td>
            <td>
                <?php 
                echo CHtml::textField("ApplicationInformation[total_move]", "", 
                        array(
                            'style'=>'width: 200px', 
                            'id'=>"total_move", 
                            'class'=>'currency',
                            'required'=>'required')); 
                ?>
            </td>
        </tr>
    </table>
</div>