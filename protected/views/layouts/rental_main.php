<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.maskedinput.min.js'); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/auto-numeric.js'); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.cycle.all.js'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/tabs.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/open_saved_form_popup.css" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/screen.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/spinner.css" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <script type="text/javascript">
            
            $.fn.hasAttr = function(name) {  
                return this.attr(name) !== undefined;
            };
            
            $(function() {
                $('.desc_button1').hide();
                $('.desc_button2').unbind('click').click(function(e){
                    $('.desc_button2').fadeOut().hide("slow");
                    $('.desc_button1').fadeIn().show("slow");
                    $('.description').slideUp(350);
                    
                    e.stopPropagation();
                }); 

                $('.desc_button1').unbind('click').click(function(e){
                    $('.desc_button1').fadeOut().hide("slow");
                    $('.desc_button2').fadeIn().show("slow");
                    $('.description').slideDown(350);
                    
                    e.stopPropagation();
                }); 
                
                $(".phone").mask("(999) 999-9999");
                $(".currency").autoNumeric();
                $(".zip").mask("99999");
                $(".ssn").mask("999-99-9999");
                $(".date").mask("9999-99-99");
                $(".age").mask("?999");
                $(".year").mask("?9999");
                $(".spinner").spinner({min:0});
                
                $("#form_subs").cycle({
                    fx: 'scrollHorz',
                    prev: '.back',
                    next: '.next',
                    timeout: 0,
                    nowrap: true,
                    onPrevNextEvent: function(isNext, zeroBasedSlideIndex, slideElement){
                        var active_id = $(".applicant_list ul li div[active='active']").attr('id');
                        
                        if(active_id == 1){                                 
                            if(zeroBasedSlideIndex > 3){
                                $(".applicant_list").hide();            
                                $("#form_subs").attr('id', 'form_subs_last');
                                $("#forms").attr('id', 'forms_last');
                                $(".form_sub_nav").attr('class', 'form_sub_nav_last');
                                $(".add_applicant_button").hide();

                                if(zeroBasedSlideIndex > 4){
                                    $("#last_buttons").show();
                                    $("#btns").hide();
                                } else {
                                    $("#last_buttons").hide();
                                    $("#btns").show();
                                }

                                $(".back").show();
                            } else {
                                if(zeroBasedSlideIndex < 1){
                                    $(".back").hide();
                                } else {
                                    
                                    $(".applicant_list").show();
                                    $("#form_subs_last").attr('id', 'form_subs');
                                    $("#forms_last").attr('id', 'forms');
                                    $(".form_sub_nav_last").attr('class', 'form_sub_nav');

                                    $("#last_buttons").hide();
                                    $("#btns").show();
                                    $(".back").show();
                                    
                                    if(zeroBasedSlideIndex == 3){
                                        $("#addnew").show();
                                    }
                                }

                                $(".add_applicant_button").show();
                            }
                        } else {
                            if(zeroBasedSlideIndex > 2){
                                $("#btns").hide();
                            } else {
                                $("#btns").show();
                            }
                            
                            if(zeroBasedSlideIndex < 1){
                                $(".back").hide();
                            } else {
                                $(".back").show();
                            }
                        }
                        
                        $("#current_step").val(zeroBasedSlideIndex);
                    }
                });
            });
        </script>
    </head>
    <body>
        <div id="portrait-error"> Please Rotate Back To Landscape Mode </div>
        <div id="landscape">
            <?php echo $content; ?>
        </div>
    </body>
</html>
