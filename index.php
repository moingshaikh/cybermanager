<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
/*
* Cyber Manager (v1.0) - An Opensource, 'Free For All' Cyber Cafe Solution
* http://www.moinshaikh.wordpress.com
* Moin Shaikh 
* Version 1.0 (20-03-2011)
* 
* Copyright (c) 2011 Moin Shaikh
* Permission is hereby granted, free of charge, to any person
* obtaining a copy of this software and associated documentation
* files (the "Software"), to deal in the Software without
* restriction, including without limitation the rights to use, copy,
* modify, merge, publish, distribute, sublicense, and/or sell copies
* of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
* 
* The above copyright notice and this permission notice shall be
* included in all copies or substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
* EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
* MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
* NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS
* BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
* ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
* CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*
*/
 -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Cyber Manager (v1.0) : Admin Login </title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>

<script type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>

</head>
<body class="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login" style="padding-bottom:5px">
		<a href="index.php"><img src="images/cm_small.gif" width="105" height="40" alt="Logo - Cyber Manager (v1.0)" /></a>	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
		<form action="checklogin.php" method="post" name="form1">
		<table border="0" cellpadding="0" cellspacing="10">
		<tr>
			<th class="input-field">Username</th>
			<th class="input-field">&nbsp;</th>
			<td><input name="username" type="text" id="username" value="username" onFocus="clearText(this)" onBlur="clearText(this)" class="input-text-box"></td>
		</tr>
		<tr>
			<th class="input-field">Password</th>
			<th class="input-field">&nbsp;</th>
			<td><input name="password" type="password" id="password" value="password" onFocus="clearText(this)" onBlur="clearText(this)" class="input-text-box"></td>
		</tr>
		<tr>
			<th colspan="2">&nbsp;</th>
			<td valign="top">&nbsp;</td>
		</tr>
		<tr>
			<th colspan="2"></th>
			<td><input type="submit" name="submit" value="Login to cPanel." /></td>
		</tr>
		</table>
		</form>
	</div>
 	<!--  end login-inner -->
<div style="margin-top:70px; margin-left:275px;font-family:Arial, Helvetica, sans-serif; color:#0066CC; font-weight:bold;"> A free for all "Opensource&quot; Application </div>
<!--  end loginbox -->
	<div class="clear"></div>
  </div>
</div>
<!-- End: login-holder -->
</body>
</html>
