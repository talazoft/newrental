<div class="front">
    <!---<h1>Rental Application Simulation</h1>--->
    <div class="nav">
        <a href="#openModal_residencial"></a>
        <!---<a href="#openModal_commercial">Commercial</a>--->
    </div>
</div><!---Front end--->

<div id="openModal_residencial" class="login_modalDialog">
    <div>
        <div class="logo">
            <img src="image/logo3.png">
            <div class="title">Rental Application Residencial Form</div>
        </div>
        <a href="#close" title="Close" class="login_close">
            <img src="image/close.png">
        </a>
        <div class="open_saved_form_login">
            <h2>Open Saved Form</h2>
            <form action="<?php echo Yii::app()->createUrl("/residental/open"); ?>">
                <input type="text" name="form_id" placeholder="Form ID*"><br>
                <input type="password" name="password" placeholder="Password*"><br>
                <div class="enter"><input type="submit" value="Enter" id=""  name="" ></div>	
            </form>
        </div>
        <div class="create_new_login">
            <h2>Create New Form</h2>
            <form action="<?php echo Yii::app()->createUrl("/residental/index"); ?>">
                <div class="case">Form ID : <label>7777777</label></div>
                <input type="email" name="email" placeholder="Email*"><br>
                <div class="enter"><input type="submit" value="Enter" id=""  name="" ></div>
                <div class="info">A login information will send to your email </br>( if NOT receive it, please also check spam/junk folder in your email )</div>	
            </form>
        </div>
    </div>
</div>
<div id="openModal_commercial" class="login_modalDialog">
    <div>
        <div class="logo">
            <img src="image/logo3.png">
            <div class="title">Rental Application Commercial Form</div>
        </div>
        <a href="#close" title="Close" class="login_close"><img src="image/close.png";></a>
        <div class="open_saved_form_login">
            <h2>Open Saved Form</h2>
            <form action="rental_commercial.html">
                <input type="text" name="form_id" placeholder="Form ID*"><br>
                <input type="password" name="password" placeholder="Password*"><br>
                <div class="enter"><input type="submit" value="Enter" id=""  name="" ></div>	
            </form>
        </div>
        <div class="create_new_login">
            <h2>Create New Form</h2>
            <form action="rental_commercial.html">
                <div class="case">Form ID : <label>7777777</label></div>
                <input type="email" name="email" placeholder="Email*"><br>
                <div class="enter"><input type="submit" value="Enter" id=""  name="" ></div>
                <div class="info">A login information will send to your email </br>( if NOT receive it, please also check spam/junk folder in your email )</div>	
            </form>
        </div>
    </div>
</div>