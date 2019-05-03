<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ABC School - Signup</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/nav.css" rel="stylesheet" type="text/css">
<link href="css/rwd.css" rel="stylesheet" type="text/css">
<link href="css/member.css" rel="stylesheet" type="text/css">
<script src="js/member.js"></script>
<script src="js/nav.js"></script>
</head>
<body onLoad="run_first()">
	<?php include("include/nav.inc") ?>   
    <div class="member_frm">
    	<form action="member_process.php" method="post">
    	<div class="row">
    		<div class="col-12 col-s-12">
            	<h1>Membership Form</h1>
    			<h2>Please enter your profile</h2>
				<p><i>Fields marked with an asterisk (*) must be entered.</i></p>
			</div>
		</div>
		<div class="row">
			<div class="col-s-12 col-12">
        		<label for="name">* Name:</label>
            	<input type="text" id="name" name="name" 
                size="30" maxlength="50" required />
        	</div>
		</div>
    	<div class="row">
    		<div class="col-s-12 col-12">
        		<label for="email">* Email:</label>
            	<input type="email" id="email" name="email" 
                size="30" maxlength="50" required />
        	</div>
    	</div>
    	<div class="row">
    		<div class="col-s-12 col-12">
        		<label for="password">* Password:</label>
            	<input type="password" id="password" name="password"
                 size="20" maxlength="20" required />
            	<span id="pwd_msg" class="error_msg"></span>
        	</div>
    	</div>
    	<div class="row">
    		<div class="col-s-12 col-12">
        		<label for="rePassword">* Re-try:</label>
            	<input type="password" id="rePassword" size="20" maxlength="20"
                onChange="checkRePassword(document)" />
        	</div>
    	</div>
    	<div class="row">
    		<div class="col-s-12 col-12">
        		<label for="zip">* Postcode:</label>
            	<input type="text" id="zip" size="10" name="zip" maxlength="10" 
                placeholder="4 digits" onChange="checkZIPCode(document)" required />
            	<span class="error_msg" id="zip_msg"></span>
        	</div>
    	</div>
    	<div class="row">
    		<div class="col-s-12 col-12">
        		<label>&nbsp;</label>
            	<input type="submit" id="submit" value="Submit" 
                onClick="return validateInfo(document)" />
            	<input type="reset" id="reset" value="Clear Form"
                onClick="reset_frm(document)" />
        	</div>
    	</div>                    
		</form>
    </div>
	<div class="row" id="footer">
    	<div class="col-s-12 col-12" id="footer-col1"><h2>Design By 007 - 2017</h2></div>
	</div>      
</body>
</html>


