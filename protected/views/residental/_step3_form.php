<div class="form_subs" id="form_sub3">
    <div class="step_title">Step 3: Business and Work Information
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
            <?php $this->renderPartial("_employment_info"); ?>
        </div>
    </div>
</div>