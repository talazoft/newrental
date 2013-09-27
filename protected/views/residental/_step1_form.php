<div class="form_subs" id="form_sub1">
    <div class="step_title">Step 1 of 4: Applicant Information
        <div class="applicantnum" style="float:right">Applicant #1</div>
        <?php /*
        <div class="close_form" style="display:none">
            <a title="Delete">
                <img src="<?php echo Yii::app()->baseUrl; ?>/image/close.png">
            </a>
        </div> */ ?>
    </div><!---step_title end---->
    <div class="step_form">
        <div class="infos">
            <?php $this->renderPartial("_applicant_info_form"); ?>
        </div>
        <div style="clear: both"></div>
        <div class="infos">
            <?php $this->renderPartial("_dependant_info"); ?>
        </div>
        <div style="clear: both"></div>
        <div class="infos">
            <?php $this->renderPartial("_vehicle_info"); ?>
        </div>
    </div><!---step1_form end---->
</div><!---form_sub end---->