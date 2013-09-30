<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/rental_main'); ?>
        <div class="maincontent">
            <div class="head_content">
                <div class="logo">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/image/logo3.png">
                </div>
                <div class="title">
                    <div class="title_text">Rental Application Form</div>
                    <div class="title_text_date"><?php echo date("M d, Y"); ?></div>
                </div><!---title end---->     
            </div><!---head_content end----> 
            <div class="tab_nav_top">
                             <!---<div class="text_nav"><a>Show form description</a></div>---->
                 <div class="button_nav_top"><a href="<?php echo Yii::app()->createUrl("/blankform"); ?>">Blank Form </a></div>
                 <div class="button_nav_top"><a href="#create_openModal">New Form</a></div>
                 <div class="button_nav_top"><a href="#send_login_openModal">Send Form Login</a></div>
                 <div class="button_nav_top"><a href="#openModal">Open Saved Form</a></div>
                 <div class="button_nav_top"><a>Save Form </a></div>
            </div>
            
            <div class="close_modalDialog" id="closeModal">
                <div>
                    <h2>Description</h2>
                    <div class="description">
                        <p>Please take a few extra moments to review your application before submitting it for processing. Please check to make sure we have complete information and phone number so we may expedite you application quickly. Incomplete application will delay processing. Owner/Manager may require additional information.</p>
                        <p>It is understood that this Application is not a Rental Agreement/Lease and that Applicant has no rights to said property until a written or oral Rental Agreement/Lease is duly executed after the approval of this Application. Applicant is aware of and agrees to all the covenants and conditions in the proposed Rental Agreement/Lease and agrees to timely execute said Rental Agreement/Lease after notification of the acceptance ofthis Application and Offer. Time is of the essence.</p>
                        <p>Applicant #1 will be considered as the primary applicant and all adult applicants (18 years or older) must complete applicant form for rental.</p>
                    </div>
                    <div class="description_nav">
                        <div class="desc_button2">
                            <a>OK</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php /*
            <div class="description">
                <p>Please take a few extra moments to review your application before submitting it for processing. Please check to make sure we have complete information and phone number so we may expedite you application quickly. Incomplete application will delay processing. Owner/Manager may require additional information.</p>
                <p>It is understood that this Application is not a Rental Agreement/Lease and that Applicant has no rights to said property until a written or oral Rental Agreement/Lease is duly executed after the approval of this Application. Applicant is aware of and agrees to all the covenants and conditions in the proposed Rental Agreement/Lease and agrees to timely execute said Rental Agreement/Lease after notification of the acceptance ofthis Application and Offer. Time is of the essence.</p>
                <p>Applicant #1 will be considered as the primary applicant and all adult applicants (18 years or older) must complete applicant form for rental.</p>
            </div>
            <div class="description_nav">
                <div class="desc_button1"><a>show description</a></div>
                <div class="desc_button2"><a>hide description</a></div>
            </div> */ ?>
            <?php echo $content; ?>  
        </div><!---maincontent end---->
<?php $this->endContent(); ?>