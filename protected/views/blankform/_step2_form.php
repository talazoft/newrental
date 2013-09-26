<div class="form_subs" id="form_sub2">
    <div class="step_title">Step 2: Residental Information
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
            <?php $this->renderPartial("_residental_info"); ?>
        </div>
    </div>
</div>