<fieldset>
    <legend>Applicant Information</legend>
    <div style="width:45%; height: 100%; margin: 10px; float: left;">
        <table width="100%">
            <tr>
                <td>
                    <label for="ApplicantInfo_firstname">First Name</label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[firstname]", "", array('style'=>'width:87%', 'id'=>"ApplicantInfo_firstname", 'required'=>'required')); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ApplicantInfo_lastname">Last Name</label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[lastname]", "", array('style'=>'width:87%', 'id'=>"ApplicantInfo_lastname", 'required'=>'required')); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ApplicantInfo_ssn">SSN</label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[ssn]", "", array('style'=>'width:87%', 'id'=>"ApplicantInfo_ssn", 'class'=>'ssn', 'required'=>'required')); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ApplicantInfo_email">Email</label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[email]", "", array('style'=>'width:87%', 'id'=>"ApplicantInfo_email", 'required'=>'required')); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ApplicantInfo_cellphone">Cell Phone</label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[cellphone]", "", array('style'=>'width:87%', 'id'=>"ApplicantInfo_cellphone", 'required'=>'required')); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ApplicantInfo_homephone">Home Phone</label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[homephone]", "", array('style'=>'width:87%', 'id'=>"ApplicantInfo_homephone")); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ApplicantInfo_spousefirst">Spouse First Name</label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[spousefirst]", "", array('style'=>'width:87%', 'id'=>"ApplicantInfo_spousefirst")); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ApplicantInfo_spouselast">Spouse Last Name</label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[spouselast]", "", array('style'=>'width:87%', 'id'=>"ApplicantInfo_spouselast")); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ApplicantInfo_spousessn">Spouse SSN</label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[spousessn]", "", array('style'=>'width:87%', 'id'=>"ApplicantInfo_spousessn", 'class'=>'ssn')); ?>
                </td>
            </tr>
        </table>
    </div>
    <div style="width:49%; height: 100%; margin: 10px; float: left;">
        <table width="100%">
            <tr>
                <td>
                    <label for="ApplicantInfo_middlename">Middle Name</label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[middlename]", "", array('style'=>'width:89%', 'id'=>"ApplicantInfo_middlename")); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ApplicantInfo_birthday">Date of Birth</label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'name' => "ApplicantInfo[birthday]",
                            'value' => "",
                            'options'=>array(
                                'changeMonth' => 'true',
                                'changeYear' => 'true',
                                'dateFormat'=>'yy-mm-dd',
                                'timeFormat' => 'hh:mm:ss',
                                'yearRange' => "-100:-18",
                                'mode'=>'date',
                                'defaultDate' => '-18Y',
                            ), // jquery plugin options
                            'htmlOptions' => array(
                                'size' => '10',         // textField size
                                'maxlength' => '10',    // textField maxlength
                                'style'=>'width:89%', 
                                'required'=>'required',
                                'class'=>'date'
                            ),
                        ));
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <?php 
                        echo CHtml::dropDownList("ApplicantInfo[idtype]", "", 
                            array('Driverlicense' => 'Driverlicense', 'Passport' => 'Passport', 'Personal ID' => 'Personal ID'),
                            array('style' => 'width:75%')
                        ); 
                        ?>
                    </label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[idnum]", "", array('style'=>'width:89%', 'id'=>"ApplicantInfo_idnum", 'required'=>'required')); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ApplicantInfo_verifyemail">
                        Verify Email
                    </label>
                </td>
                <td>:</td>
                <td>
                <?php 
                    echo CHtml::textField("ApplicantInfo[verifyemail]", "", array('style'=>'width:89%', 'id'=>"ApplicantInfo_verifyemail", 'required'=>'required'));
                ?>
                </td>
            </tr>
            <tr>
                <td><label>How long will you live?<br/>(year/years)</label></td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::textField("ApplicantInfo[years_live_planned]", "", array('style'=>'width:89%', 'id'=>"ApplicantInfo_years_live_planned", 'class'=>'age'));
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <?php 
                            echo CHtml::checkbox("ApplicantInfo[has_pet]", false , array('id'=>"ApplicantInfo_has_pet"))."Pets; Number of pets";
                        ?>

                    </label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        echo CHtml::dropDownList("ApplicantInfo[pet_num]", "", 
                            array(
                                '1 - $600' => '1 - $600', 
                                '2 - $800' => '2 - $800', 
                                '3 - $1000' => '3 - $1000'
                            ),
                            array('style'=>'width:95%','disabled'=>'disabled', 'id'=>'pet_num')
                        ); 
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ApplicantInfo_spousemiddle">Spouse Middle Name</label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[spousemiddle]", "", array('style'=>'width:89%', 'id'=>"ApplicantInfo_spousemiddle")); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ApplicantInfo_spousebirthdate">Date of Birth</label>
                </td>
                <td>:</td>
                <td>
                    <?php 
                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'name' => "ApplicantInfo[spousebirthdate]",
                            'value' => "",
                            'options'=>array(
                                'changeMonth' => 'true',
                                'changeYear' => 'true',
                                'dateFormat'=>'yy-mm-dd',
                                'timeFormat' => 'hh:mm:ss',
                                'yearRange' => "-100:-18",
                                'mode'=>'date',
                                'defaultDate' => '-18Y',
                            ), // jquery plugin options
                            'htmlOptions' => array(
                                'size' => '10',         // textField size
                                'maxlength' => '10',    // textField maxlength
                                'style'=>'width:89%', 
                                'class'=>'date'
                            ),
                        ));
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <?php 
                        echo CHtml::dropDownList("ApplicantInfo[spouseidtype]", "", 
                            array('Driverlicense' => 'Driverlicense', 'Passport' => 'Passport', 'Personal ID' => 'Personal ID'),
                            array('style' => 'width:75%')
                        ); 
                        ?>
                    </label>
                </td>
                <td>:</td>
                <td>
                    <?php echo CHtml::textField("ApplicantInfo[spouseidnum]", "", array('style'=>'width:89%', 'id'=>"ApplicantInfo_spouseidnum")); ?>
                </td>
            </tr>
        </table>
    </div>
</fieldset>