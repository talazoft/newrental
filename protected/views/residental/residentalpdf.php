<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <title>Rental Application</title>
    <!---<link rel="stylesheet" href="css/main.css" />--->
    <style type="text/css">
		body{	
	  font:normal 13px Arial, Helvetica, sans-serif;
	  background: #ffffff;
	  margin:0;   
}

	.maincontent {
		width: 960px;
		margin:0 auto;
		padding:0;
	}
	
	.head_content {
		float:left;
		width: 960px;
		margin:0 auto;
		padding: 0;
			
	}
	
	.logo {
		float: left; 
		margin: 10px 0 5px 0; 
		padding: 0; 
		}
	
	.title {
		float: right;
		margin:0;
		padding:0;
		
		 }
		 
	.title_text {
		text-align: center;
		height: 35px;
		margin: 0;
		padding: 19px 0 0 20px;
		color: #000000;
		font-size: 22px;
		font-weight: bold;
		 }
		 
	
		 
	.title_footer {
		text-align: center;
		height: 35px;
		margin: 0;
		padding: 5px 0 0 20px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		 }
		 
	
	.content {
		float:left;
		width: 960px;
		margin:0 auto;
		padding:10px 0 0 0;
		
	}
	
	.first_info {
		float:left;
		width: 960px;
		margin:0 auto;
		padding:10px 0 0 0;
	}
	
	.left {
		float:left;
		margin:0 0 2px 0;
		padding: 0;	
	}
	
	.right {
		float:left;
		margin:0 0 2px 10px;
		padding:0;
		
	}
	
	.space_short{
		float: left;
		margin: 15px 0 5px 0;
		height: 110px;
		
	}
	
	.space {
		float: left;
		margin: 15px 0 5px 0;
		height: 170px;
		
	}
	
	.space_long {
		float:left;
		margin: 15px 0 0 0;
		
		
	}
	
	.table_form{
		float: left;
		width: 960px;
		height: 153px;
		margin: 10px 0 10px 0;
	}
	
	table.table_form_content {
		float: left;
		width: 965px;
		margin: 0;
		padding: 0;
		
	}
	
	
	table.table_form_content th {
		float: left;
		width: 234px;
		color: #767777;
		font-size: 14px;
		font-weight: bold;
		margin: 5px 3px 2px 1px;
		
		
	
	}
	
	table.table_form_content td {
		float: left;
		text-align:center;
		width: 234px;
		height: 20px;
		margin: 2px 5px 2px 1px;
		padding: 5px 0 5px 0;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
	
	}
	

	.label_title{
		height: 20px;
		margin: 0 0 0 0;
		color: #767777;
		font-size: 14px;
		 }
		 
	.label_title_first{
		float: left;
		height: 20px;
		margin: 7px 0 0 0;
		color: #767777;
		font-size: 14px;
		 }
		 
	.label_title_bold{
		float:left;
		width: 960px;
		height: 20px;
		margin: 3px 5px 0 0;
		color: #767777;
		font-size: 16px;
		font-weight: bold;
		 }
		 
	.label_title_samping{
		float:left;
		height: 20px;
		margin: 7px 15px 0 0;
		color: #767777;
		font-size: 14px;
		 }
		 
	.textbox{
		width: 947px;
		height: 20px;
		margin: 0 0 10px 0;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 17px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }
		 
	.textbox_kecil_date{
		float: left;
		width: 120px;
		height: 20px;
		margin: 0 17px 20px 10px;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }
		 
	.textbox_kecil_property{
		float: left;
		width: 420px;
		height: 20px;
		margin: 0 17px 20px 10px;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }
		 
	.textbox_kecil_unit{
		float: left;
		width: 68px;
		height: 20px;
		margin: 0 0 20px 10px;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }
		 		 
	.textbox_kecil{
		width: 462px;
		height: 20px;
		margin: 0 0 8px 0;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }
		 
	.samping_container { 
		width: 475px;
		height: 58px;
		margin: 0;
		padding:0;
	}
		 
	.samping {
		float:left;
		margin: 0 5px 0 0;
	}
		 

	.textbox_kecil_city{
		width: 240px;
		height: 20px;
		margin: 0 0 8px 0;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }
		 
	.textbox_kecil_state{
		width: 80px;
		height: 20px;
		margin: 0 0 8px 0;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }
		 
	.textbox_kecil_zip{
		width: 105px;
		height: 20px;
		margin: 0 -5px 8px 0;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }
		 
	.textbox_kecil_phone{
		width: 240px;
		height: 20px;
		margin: 0 0 8px 0;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }
		 
	.textbox_kecil_stay{
		width: 203px;
		height: 20px;
		margin: 0 -5px 8px 0;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }

	.textbox_reason{
		width: 462px;
		height: 194px;
		margin: 0 0 8px 0;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }
		 
	.textbox_kecil_department{
		width: 203px;
		height: 20px;
		margin: 0 -5px 8px 0;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }
		 
	.table_contact_form{
		float: left;
		width: 960px;
		height: 135px;
		margin: 10px 0 10px 0;
	}
	
	table.table_form_contact_content{
		float: left;
		width: 965px;
		margin: 0;
		padding: 0;
		
	}
	
	table.table_form_contact_content th {
		float: left;
		width: 314px;
		color: #767777;
		font-size: 14px;
		font-weight: bold;
		margin: 5px 3px 2px 1px;
		
		
	
	}
	
	table.table_form_contact_content td {
		float: left;
		text-align:center;
		width: 314px;
		height: 20px;
		margin: 2px 5px 2px 1px;
		padding: 5px 0 5px 0;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
	
	}
	
	.agreement {
		text-align: justify;
		color: #767777;
		font-size: 14px;	
	}
	
	.agree_container {
		width: 960px;
		height: 50px;
	}
	
	.textbox_kecil_agree{
		float: left;
		width: 40px;
		height: 20px;
		margin: 0 17px 20px 0;
		padding: 5px 5px 5px 8px;
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		background-color: #e9e9e9;
		 }
	
	</style>
</head>
<body>

<div class="maincontent">

		<div class="head_content">
        	<div class="logo"><img src="<?php echo Yii::app()->baseUrl ?>/image/logo2.png"></div>
            <div class="title">
            	<div class="title_text">Application To Rent Apartment</div>
            </div><!---title end---->
               
     	</div><!---head_content end---->
        <hr>
         <div class="content">
         
         	<div class="first_info">
            <div class="label_title_first">Today's Date : </div>
            <div class="textbox_kecil_date"> </div>
            <div class="label_title_first">Property's Name : </div>
            <div class="textbox_kecil_property"> </div>
            <div class="label_title_first">Unit # : </div>
            <div class="textbox_kecil_unit"> </div>
            </div>
            <hr>

            <div class="label_title_bold">Applicant Contact Information</div>
            <div class="space_short">
                <div class="left">
                <div class="label_title">Applicant's Work Number : </div>
                <div class="textbox_kecil"> </div>
                <div class="label_title">Applicant's Cellphone Number : </div>
                <div class="textbox_kecil"> </div>
                </div>
                <div class="right"> 
                <div class="label_title">Applicant's Home Number :</div>
                <div class="textbox_kecil"> </div>
                <div class="label_title">Applicant's Email Address :</div>
                <div class="textbox_kecil"> </div>
                </div>
            </div>
            <hr> 
             
            <div class="label_title_bold">Applicant Personal Information</div>
            <div class="space">
                <div class="left">
                <div class="label_title">First Name : </div>
                <div class="textbox_kecil"> </div>
                <div class="label_title">Middle Name :</div>
                <div class="textbox_kecil"> </div>
                <div class="label_title">Last Name :</div>
                <div class="textbox_kecil"> </div>
                </div>
                <div class="right"> 
                <div class="label_title">Date of Birth :</div>
                <div class="textbox_kecil"> </div>
                <div class="label_title">Driver License Number :</div>
                <div class="textbox_kecil"> </div>
                <div class="label_title">S.S. Number :</div>
                <div class="textbox_kecil"></div>
                </div>
            </div>
            
            <div class="space">
                <div class="left">
                <div class="label_title">Spouse's First Name : </div>
                <div class="textbox_kecil"> </div>
                <div class="label_title">Spouse's Middle Name :</div>
                <div class="textbox_kecil"> </div>
                <div class="label_title">Spouse's Last Name :</div>
                <div class="textbox_kecil"> </div>
                </div>
                <div class="right"> 
                <div class="label_title">Spouse's Date of Birth :</div>
                <div class="textbox_kecil"> </div>
                <div class="label_title">Spouse's Driver License Number :</div>
                <div class="textbox_kecil"> </div>
                <div class="label_title">Spouse's S.S. Number :</div>
                <div class="textbox_kecil"></div>
                </div>   
            </div>
            
            
            <div class="table_form">
            <div class="label_title">List of Dependants :</div>
                                <table class="table_form_content">
                                    <tr>
                                        <th>Name</th><th>Relation</th><th>Age</th><th>Stay In (Yes/No)</th>
                                    </tr>
                                    <tr class="table_form_row">
                                        <td> </td><td> </td><td> </td><td> </td>    
                                    </tr>
                                    <tr class="table_form_row">
                                        <td> </td><td> </td><td> </td><td> </td>    
                                    </tr>
                                    <tr class="table_form_row">
                                        <td> </td><td> </td><td> </td><td> </td>    
                                    </tr>
                                </table>
            
            </div><!----table form End----->
            <div class="left">
                <div class="label_title">How long you will live here (1 year / 2 years / 3 years) ? : </div>
                <div class="textbox_kecil"> </div>
                
             </div>
             <div class="right"> 
                <div class="label_title">Number of pets : 1-$600 / 2-$800 / 3-$1000</div>
                <div class="textbox_kecil"> </div>
                
             </div> 
             
             <div class="table_form">
             <div class="label_title">Vehicle Information :</div>
                                <table class="table_form_content">
                                    <tr>
                                        <th>License Plate</th><th>Make/Model</th><th>Year</th><th>Color</th>
                                    </tr>
                                    <tr class="table_form_row">
                                        <td> </td><td> </td><td> </td><td> </td>    
                                    </tr>
                                    <tr class="table_form_row">
                                        <td> </td><td> </td><td> </td><td> </td>    
                                    </tr>
                                    <tr class="table_form_row">
                                        <td> </td><td> </td><td> </td><td> </td>    
                                    </tr>
                                </table>
            
             </div><!----table form End----->
            <hr>
            
            <div class="label_title_bold">Applicant Residency Information</div>
            <div class="space_long">
                <div class="left">
                    <div class="label_title">Current Address : </div>
                    <div class="textbox_kecil"> </div>
                    
                    <div class="samping_container">
                        <div class="samping">
                        <div class="label_title">City :</div>
                        <div class="textbox_kecil_city"> </div>
                        </div>
                        
                        <div class="samping">
                        <div class="label_title">State :</div>
                        <div class="textbox_kecil_state"> </div>
                        </div>
                        
                        <div class="samping">
                        <div class="label_title">Zip Code :</div>
                        <div class="textbox_kecil_zip"> </div>
                        </div>
                    </div>
                    
                    <div class="label_title">LandLord's Name :</div>
                    <div class="textbox_kecil"> </div>
                    
                    <div class="samping_container">
                    	<div class="samping">
                        <div class="label_title">LandLord's Phone Number :</div>
                        <div class="textbox_kecil_phone"></div>
                        </div>
                        <div class="samping">
                        <div class="label_title">Length of Stay :</div>
                        <div class="textbox_kecil_stay"></div>
                        </div>
                    </div>
                </div>
                
                <div class="right"> 
                    <div class="label_title">Reason for Moving : </div>
                    <div class="textbox_reason"> </div>
                </div>   
            </div>
            
            
            <div class="space_long">
            <div class="label_title">Give previous address if less than 5 years :</div>
                <div class="left">
                    <div class="label_title">Privious Address : </div>
                    <div class="textbox_kecil"> </div>
                    
                    <div class="samping_container">
                        <div class="samping">
                        <div class="label_title">City :</div>
                        <div class="textbox_kecil_city"> </div>
                        </div>
                        
                        <div class="samping">
                        <div class="label_title">State :</div>
                        <div class="textbox_kecil_state"> </div>
                        </div>
                        
                        <div class="samping">
                        <div class="label_title">Zip Code :</div>
                        <div class="textbox_kecil_zip"> </div>
                        </div>
                    </div>
                    
                    <div class="label_title">LandLord's Name :</div>
                    <div class="textbox_kecil"> </div>
                    
                    <div class="samping_container">
                    	<div class="samping">
                        <div class="label_title">LandLord's Phone Number :</div>
                        <div class="textbox_kecil_phone"></div>
                        </div>
                        <div class="samping">
                        <div class="label_title">Length of Stay :</div>
                        <div class="textbox_kecil_stay"></div>
                        </div>
                    </div>
                </div>
                
                <div class="right"> 
                    <div class="label_title">Reason for Moving : </div>
                    <div class="textbox_reason"> </div>
                </div>   
            </div>
            <hr> 
            
            <div class="label_title_bold">Work or Business Entity Information</div>
            <div class="space_long">
            	<div class="left">
                    <div class="label_title">Employed By : </div>
                    <div class="textbox_kecil"> </div>
                    <div class="label_title">Address : </div>
                    <div class="textbox_kecil"> </div>  
            	</div>
                <div class="right">
                		<div class="samping_container">
                            <div class="samping">
                            <div class="label_title">Phone Number :</div>
                            <div class="textbox_kecil_city"> </div>
                            </div>
                            
                            <div class="samping">
                            <div class="label_title">Department :</div>
                            <div class="textbox_kecil_department"> </div>
                            </div>

                    	</div>
                    	<div class="label_title">Position/Title : </div>
                   		 <div class="textbox_kecil"> </div>
                </div>
             </div>
             
              
             <div class="space_long">
             <div class="label_title">Spouse’s Employment Information :</div>
            	<div class="left">
                    <div class="label_title">Employed By : </div>
                    <div class="textbox_kecil"> </div>
                    <div class="label_title">Address : </div>
                    <div class="textbox_kecil"> </div>  
            	</div>
                <div class="right">
                		<div class="samping_container">
                            <div class="samping">
                            <div class="label_title">Phone Number :</div>
                            <div class="textbox_kecil_city"> </div>
                            </div>
                            
                            <div class="samping">
                            <div class="label_title">Department :</div>
                            <div class="textbox_kecil_department"> </div>
                            </div>

                    	</div>
                    	<div class="label_title">Position/Title : </div>
                   		 <div class="textbox_kecil"> </div>
                </div>
             </div>
            <hr>
            
             <div class="label_title_bold">Other Contact Information</div>
             <div class="table_contact_form">
                                <table class="table_form_contact_content">
                                    <tr>
                                        <th>Name</th><th>Relation</th><th>Phone Number</th>
                                    </tr>
                                    <tr class="table_form_row">
                                        <td> </td><td> </td><td> </td>   
                                    </tr>
                                    <tr class="table_form_row">
                                        <td> </td><td> </td><td> </td>    
                                    </tr>
                                    <tr class="table_form_row">
                                        <td> </td><td> </td><td> </td>    
                                    </tr>
                                </table>
            
             </div><!----table form End----->
             <hr>
          
           	 <div class="agreement">
             	<p>The undersigned Applicant hereby offers to rent/lease real property described as PROPERTY NAME</p>
                
<p>It is understood that this Application is not a Rental Agreement/Lease and that Applicant has no rights to said property until a written or oral Rental Agreement/Lease is duly executed after the approval of this Application. Applicant is aware of and agrees to all the covenants and conditions in the proposed Rental Agreement/Lease and agrees to timely execute said Rental Agreement/Lease after notification of the acceptance of this Application and Offer. Time is of the essence.</p>

<p><b>A credit check fee of $ 30.00 (per person) to process this Application is required. Money will be given by Applicant to the owner/manager when this Application is turned in for processing.</b><p>

<p>Applicant represents all information on this Application to be true and accurate and understands that owner/manager will rely upon said information when accepting this Application whether an independent investigation has been performed or not. Applicant hereby authorizes owner/manager and his/her/its employees and agents to verify said information and make independent investigations in person, by mail, phone, fax, or otherwise, to determine Applicant's rental, credit, financial and character standing. Applicant hereby releases owner/manager, his/her/its employees and agents, Vantage Asset Management, Ltd., its employees and agents and any and all other firms or persons investigating or supplying information, from any liability whatsoever concerning the release and/or use of said information and further, will hold them all harmless from any suit or reprisal whatsoever. All holders, public and private, of any such information are hereby authorized to release, without limitation, any and all such information they have concerning Applicant and in so doing, will be acting on Applicant's behalf at Applicant's request and will be held blameless and without any liability whatsoever. A copy or other reproduction of this Authorization shall be as effective as the original.</p>

<p><b>NOTICE:</b> The rental for which you are applying may be reported to and monitored by various Consumer Credit Reporting Agencies. Your failure to satisfactorily perform your rental obligations may result in a derogatory entry in your rental and/or credit consumer file and could hamper your ability to obtain housing and/or credit in the future. In addition, owner/manager may report any and all information to other property owners/managers, credit grantors and/or public agencies.</p>
             </div>
             
              <div class="agree_container">
              <div class="textbox_kecil_agree"> </div>
              <div class="label_title_first">I agree with all Term Of Use</div>	
              </div>
              <hr>
				
              <div class="title_footer">
              <div class="title_footer">Application To Rent Apartment</div>
              </div>
         </div><!---content end---->  
        
</div><!---maincontent end---->
</body>
</html>
