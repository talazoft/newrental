<script type='text/javascript'>
$(function(){
    var i = 1;
    $(".add_applicant_button").unbind('click').click(function(e){
        
        if(i<10){
            i++;
        }
        
        $("#"+i).attr('empty', 'false');
        $("#"+i).attr('class', 'non_active_form_tab');
        $("#valtab"+i).html("Applicant #"+i);
        $("#applicant_num").html(i);
        
        var total = i*30;
        $("#totalfee").html("$"+total);
        
        if(i > 1){
            $("#close_form2").show();
        }
        
        e.stopPropagation();
    });
    
    $(".close_applicant_button").unbind('click').click(function(e){
        
        if(i == 2){
            $("#close_form2").hide();
        }
        
        var isactive = $(".active_form_tab").hasAttr('active');
        var active_template = '<div class="applicant_title">Applicant</div><div class="applicant_number">#1</div>';
        if(isactive){
            var active_id = $(".active_form_tab").attr('id');
            var empty_template = '<a id="valtab'+i+'" href="#form'+i+'">Empty #'+i+'</a>';
            var exists_template = '<a id="valtab'+active_id+'" href="#form'+active_id+'">Applicant #'+active_id+'</a>'
            
            if(active_id < i){
                $("#"+active_id).attr('empty', 'false');
                $("#"+active_id).attr('class', 'non_active_form_tab');
                $("#"+active_id).removeAttr('active');
                $("#"+active_id).empty();
                $("#"+active_id).html(exists_template);
                
                $("#"+i).attr('empty', 'true');
                $("#"+i).attr('class', 'empty_form_tab');
                $("#"+i).removeAttr('active');
                $("#"+i).empty();
                $("#"+i).html(empty_template);
            } else {
                $("#"+i).attr('empty', 'true');
                $("#"+i).attr('class', 'empty_form_tab');
                $("#"+i).removeAttr('active');
                $("#"+i).empty();
                $("#"+i).html(empty_template);
            }
            
            $("#1").attr('class', 'active_form_tab');
            $("#1").attr('empty', 'false');
            $("#1").attr('active', 'active');
            $("#1").empty();
            $("#1").html(active_template);
        }
        
        $(".applicantnum").html("Applicant #1");
        
           
//        var isactive = $("#"+i).hasAttr('active');
//        if(!isactive){
//            $("#"+i).attr('empty', 'true');
//            $("#valtab"+i).html("Empty #"+i);
//            $("#"+i).attr('class', 'empty_form_tab');
//        } else {
//            var j = i-1;
//            if(j>=1){
//                var empty_template = '<a id="valtab'+i+'" href="#form'+i+'">Empty #'+i+'</a>';
//                //var active_template = '<div class="applicant_title">Applicant</div><div class="applicant_number">#'+j+'</div>';
//                var active_template = '<div class="applicant_title">Applicant</div><div class="applicant_number">#1</div>';
//
//                $("#"+i).attr('empty', 'true');
//                $("#"+i).attr('class', 'empty_form_tab');
//                $("#"+i).removeAttr('active');
//                $("#"+i).empty();
//                $("#"+i).html(empty_template);

//                $("#"+j).attr('class', 'active_form_tab');
//                $("#"+j).attr('empty', 'false');
//                $("#"+j).attr('active', 'active');
//                $("#"+j).empty();
//                $("#"+j).html(active_template);

//                $("#1").attr('class', 'active_form_tab');
//                $("#1").attr('empty', 'false');
//                $("#1").attr('active', 'active');
//                $("#1").empty();
//                $("#1").html(active_template);
//                
//                if(j==1){
//                    $(".close_form").hide();
//                }
//            }
//        }
        
        if(i>1){
            i--;
            $("#applicant_num").html(i);
        }
        var total = i*30;
        $("#totalfee").html("$"+total);
        e.stopPropagation();
        
        $('#form_subs').cycle(0); 
        $('#btns').show();
        return false; 
    });
    
    $(".non_active_form_tab").unbind('click').click(function(e){
        var element = $(this);
        tabclick(element);
        e.stopPropagation();
    });
    
    $(".empty_form_tab").unbind('click').click(function(e){
        var element = $(this);
        tabclick(element);
        e.stopPropagation();
    });
    
    $('.active_form_tab').unbind('click').click(function(e){
        var element = $(this);
        tabclick(element);
        
        e.stopPropagation();
    });
    
    function tabclick(element){
        var isempty = element.attr('empty') === 'true' ? true : false;
        var isactive = element.hasAttr('active');

        if(!isempty && !isactive){            
            var nonactive_id = element.attr('id');
            var active_id = $(".active_form_tab").attr('id');

            var active_template = '<div class="applicant_title">Applicant</div><div class="applicant_number">#'+nonactive_id+'</div>';
            var nonactive_template = '<a id="valtab'+active_id+'" href="#form'+active_id+'">Applicant #'+active_id+'</a>';

            $("#"+nonactive_id).empty();
            $("#"+nonactive_id).attr('class', 'active_form_tab');
            $("#"+nonactive_id).attr('active', 'active');
            $("#"+nonactive_id).html(active_template);
            
            $(".applicantnum").html("Applicant #"+element.attr('id'));
            
            if(nonactive_id>1){
                $(".close_form").show();
                $("#close_form2").show();
                if($("#current_step").val() == 3){
                    $("#btns").hide();
                }
            } else {
                $(".close_form").hide();
                $("#close_form2").hide();
                $("#btns").show();
            }

            $("#"+active_id).attr('class', 'non_active_form_tab');
            $("#"+active_id).attr('empty', 'false');
            $("#"+active_id).removeAttr('active');
            $("#"+active_id).empty();
            $("#"+active_id).html(nonactive_template);
        }
        
        $('#form_subs').cycle(0); 
        $('#btns').show();
        return false; 
    }
    
    $("#ApplicantInfo_has_pet").change(function(){
        var ischecked = $(this).is(":checked");
        
        if(ischecked){
            $("#pet_num").removeAttr('disabled');
        } else {
            $("#pet_num").attr('disabled', 'disabled');
        }
    });
    
    $("#btnfinish").unbind('click').click(function(e){
        $("#btnsendpdf").show();
        $("#btnprintpdf").show();
    });
    
    $("#btnprintpdf").unbind('click').click(function(e){
        //alert("dfsdfsdfsdfsd");
    });
    
    $("#btnsendpdf").unbind('click').click(function(e){
        $("#message").html("Form has been sent to your email");
    });
});
</script>
<div class="main_subject_head" style="height: 180px; border: 0px; background-color: #F7F7F7">
    <div class="step1_title" style="float: none; padding: 0px; margin: 0px;">Property Information</div>
    <div class="header_form" style="border: 1px solid #AEB0B1; background-color: white; height: 175px">
        <div class="info_head" style="padding-left: 10px; ">
            <?php $this->renderPartial("_head_form"); ?>
        </div>
    </div>
</div><!---main_subject_head end----> 
<div class="content">
    <div id="tab_container">
        <div class="tab_nav" style="margin-top: 10px;">
            <div class="add_applicant_text">Applicant : <label for="applicant_sum" id="applicant_num">1</label></div>
            <div class="add_applicant_button">
                <a id="addnew">+Add Applicant</a>
            </div>
            <div class="close_applicant_button">
                <a id="close_form2" style="display: none;">
                    Delete Applicant
                </a>
            </div>
            <div class="open_saved_form"><a href="#create_openModal">New</a></div>
            <div class="open_saved_form"><a href="#send_login_openModal">Send Login</a></div>
            <div class="open_saved_form"><a href="#openModal">Open</a></div>
            <div class="open_saved_form"><a>Save</a></div>
        </div><!---tab_nav end---->

        <!---popup load form---->
        <div id="openModal" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close"><img src="<?php echo Yii::app()->baseUrl; ?>/image/close.png"></a>
                <h2>Open Saved Form</h2>
                <form action="">
                    <div class="open"><input type="text" name="form_id" placeholder="Form ID*"></div><br>
                    <div class="open"><input type="password" name="password" placeholder="Password*"></div><br>
                    <div class="enter"><input type="submit" value="Open" id=""  name="" ></div>	
                </form>
            </div>
        </div>
        <!---popup load form end---->
        
        <div id="popupMessage" class="modalDialog">
            <div style="height: 170px">
                <a href="#close" title="Close" class="close">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/image/close.png">
                </a>
                <h2 style="margin-top: 60px"><div id="message"></div></h2>
            </div>
        </div>

        <!---popup send form login---->
        <div id="send_login_openModal" class="send_login_modalDialog">
            <div>
                <a href="#close" title="Close" class="close"><img src="<?php echo Yii::app()->baseUrl; ?>/image/close.png"></a>
                <h2>Send Form Login</h2>
                <div class="form_login">
                    <form action="">
                        <input type="email" name="email" placeholder="Email*"><br>
                        <div class="enter"><input type="submit" value="Send" id=""  name="" ></div>
                        <div class="info">A login information will send to your email </br>( if NOT receive it, please also check spam/junk folder in your email )</div>	
                    </form>
                </div>
            </div>
        </div>
        <!---popup send form login end---->

        <!---popup create form login---->
        <div id="create_openModal" class="send_login_modalDialog">
            <div>
                <a href="#close" title="Close" class="close">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/image/close.png">
                </a>
                <h2>Create New Form</h2>
                <div class="form_login">
                    <form action="">
                        <input type="email" name="email" placeholder="Email*"><br>
                        <div class="enter"><input type="submit" value="Create" id=""  name="" ></div>
                        <div class="info">A login information will send to your email </br>( if NOT receive it, please also check spam/junk folder in your email )</div>	
                    </form>
                </div>
            </div>
        </div>
        <!---popup create form login end---->

        <div id="tabs">
            <div class="applicant_list"><?php /*
                <div class="active_form_tab"> 
                    <div class="applicant_title">Applicant</div>
                    <div class="applicant_number">#1</div>
                </div>
                <div class="non_active_form_tab">
                    <ul> 
                        <li><a id="valtab2" href="#form2">Empty #2</a></li>
                        <li><a id="valtab3" href="#form3">Empty #3</a></li>
                        <li><a id="valtab4" href="#form4">Empty #4</a></li>
                        <li><a id="valtab5" href="#form5">Empty #5</a></li>
                        <li><a id="valtab6" href="#form6">Empty #6</a></li>
                        <li><a id="valtab7" href="#form7">Empty #7</a></li>
                        <li><a id="valtab8" href="#form8">Empty #8</a></li>
                        <li><a id="valtab9" href="#form9">Empty #9</a></li> 
                        <li><a id="valtab10" href="#form10">Empty #10</a></li>  
                    </ul>
                </div><!---nonactive form tab end----> */ ?>
                <ul>
                    <li>
                        <div class="active_form_tab" id="1" empty='false' active='active'>
                            <div class="applicant_title">Applicant</div>
                            <div class="applicant_number">#1</div>
                        </div>
                    </li>
                    <li>
                        <div class="empty_form_tab" id="2" empty='true'>
                            <a id="valtab2" href="#form2">Empty #2</a>
                        </div>
                    </li>
                    <li>
                        <div class="empty_form_tab" id="3" empty='true'>
                            <a id="valtab3" href="#form3">Empty #3</a>
                        </div>
                    </li>
                    <li>
                        <div class="empty_form_tab" id="4" empty='true'>
                            <a id="valtab4" href="#form4">Empty #4</a>
                        </div>
                    </li>
                    <li>
                        <div class="empty_form_tab" id="5" empty='true'>
                            <a id="valtab5" href="#form5">Empty #5</a>
                        </div>
                    </li>
                    <li>
                        <div class="empty_form_tab" id="6" empty='true'>
                            <a id="valtab6" href="#form6">Empty #6</a>
                        </div>
                    </li>
                    <li>
                        <div class="empty_form_tab" id="7" empty='true'>
                            <a id="valtab7" href="#form7">Empty #7</a>
                        </div>
                    </li>
                    <li>
                        <div class="empty_form_tab" id="8" empty='true'>
                            <a id="valtab8" href="#form8">Empty #8</a>
                        </div>
                    </li>
                    <li>
                        <div class="empty_form_tab" id="9" empty='true'>
                            <a id="valtab9" href="#form9">Empty #9</a>
                        </div>
                    </li>
                    <li>
                        <div class="empty_form_tab" id="10" empty='true'>
                            <a id="valtab10" href="#form10">Empty #10</a>
                        </div>
                    </li>
                </ul>
            </div><!---applicant_list_non_active  end---->
            <input type="hidden" id='current_step' value="1"/>
            <div id="forms"><?php /*
                <div class="delete_tab">
                    <a title="Delete">
                        <img src="<?php echo Yii::app()->baseUrl; ?>/image/close.png">
                    </a>
                </div> */?>
                <div id="form_subs">
                    <?php $this->renderPartial('_step1_form'); ?>
                    <?php $this->renderPartial('_step2_form'); ?>
                    <?php $this->renderPartial('_step3_form'); ?>
                    <?php $this->renderPartial('_step4_form'); ?>
                    <?php $this->renderPartial('_step5_form'); ?>
                    <?php $this->renderPartial('_step6_form'); ?>
                </div>
                <div class="form_sub_nav">
                    <div id="last_buttons" style="display: none;">
                        <div class="next" id="btnprintpdf" style="display: none;">
                            <a href="<?php echo Yii::app()->createUrl("/residental/pdfform") ?>" target="_blank">Print PDF</a>
                        </div>
                        <div class="next" id="btnsendpdf" style="display: none;">
                            <a href="#popupMessage">Send PDF</a>
                        </div>
                        <div class="next" id="btnfinish"><a>Finish</a></div>
                    </div>      
                    <div id="btns">
                        <div class="next"><a>Save and go to next step</a></div>
                    </div>
                    <div class="back" style="display: none;"><a>Back</a></div>
                </div><!---form_sub_nav end---->
            </div><!---form1 end---->
        </div><!---tabs end---->
    </div><!---tabs_container end---->
</div><!---content end---->