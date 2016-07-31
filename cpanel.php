<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<!--
/*
* Cyber Manager (v1.0) - Free For All Cyber Cafe Solution
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>CyberManager (v1.0) : cPanel</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<script type="text/javascript" language="javascript" src="js/validation.js"></script>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body class="body">
<table width="1000" align="center" height="auto" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td colspan="2" align="center"><table border="0" cellpadding="0" cellspacing="0" width="100%" height="auto" align="center">
				<tr>
					<td width="22%" align="left" valign="middle"><a href="cpanel.php" title="Go to Home Page" ><img src="images/home.png" align="middle" border="0" width="56" height="56" /></a></td>
					<td width="50%" align="center"><img src="images/logo_new.gif" width="400" height="150" title="Cyber Manager(v1.0)" /></td>
					<td width="14%" align="center" valign="middle" style="padding:5px"><a href="logout.php" title="Logout!"><img src="images/logout.gif" width="85" height="85" border="0" /></a></td>
				<tr>
					<td colspan="3" align="right">

<span id="liveclock"></span></td>
				</tr>				
			</table></td>
  </tr>
  <tr>
    <td width="25%" valign="top">

<span class="arrowlistmenu">
<a href="modules/customer/search-customer.php" style="text-decoration:none;"><h3 class="menuheader"><img src="images/customer.gif" border="0" width="32" height="32" align="absmiddle" style="padding-right:10px;"/>CUSTOMER</h3></a>
<a href="modules/customer-login/customer-login.php" style="text-decoration:none;"><h3 class="menuheader"><img src="images/cust_login.png" border="0" width="32" height="32" align="absmiddle" style="padding-right:10px;"/>CUSTOMER LOG-IN</h3></a>
<a href="modules/bills/index.php" style="text-decoration:none;"><h3 class="menuheader"><img src="images/bill.gif" border="0" width="32" height="32" align="absmiddle" style="padding-right:10px;"/>BILLS</h3></a>
<a href="modules/services/delete-services.php" style="text-decoration:none;"><h3 class="menuheader"><img src="images/services.gif" border="0" width="32" height="32" align="absmiddle" style="padding-right:10px;"/>SERVICES</h3></a>
<a href="modules/rate-card/print-rate-card.php" style="text-decoration:none;"><h3 class="menuheader"><img src="images/rate.gif" border="0" width="32" height="32" align="absmiddle" style="padding-right:10px;"/>RATE CARD</h3></a>
<a href="modules/customer-card/index.php" style="text-decoration:none;"><h3 class="menuheader"><img src="images/membership-card.gif" border="0" width="32" height="32" align="absmiddle" style="padding-right:10px;"/>CUSTOMER CARD</h3>
</a>
<a href="modules/expired-id-report/expirydate.php" style="text-decoration:none;"><h3 class="menuheader"><img src="images/expired-id-proof.gif" border="0" width="32" height="32" align="absmiddle" style="padding-right:10px;"/>Expired ID Proofs </h3>
</a>
</span>    </td>
    <td width="82%"><!-- InstanceBeginEditable name="body" --><table width="100%" border="0" cellpadding="3" cellspacing="2" align="center"> 
                      <tr>
                        <td class="cpanel-table"><a href="modules/customer/search-customer.php"><img src="images/customer.gif" alt="customer module" width="56" height="56" border="0" /></a></td>
                        <td class="cpanel-table"><a href="modules/customer-login/customer-login.php"><img src="images/cust_login.png" alt="Customer login module" width="56" height="56" border="0" /></a></td>
                        <td class="cpanel-table"><a href="modules/bills/index.php"><img src="images/bill.gif" alt="Bill module" width="56" height="56" border="0" /></a></td>
                      </tr>
                      <tr>
                        <td class="cpanel-table">Manage Customer</td>
                        <td class="cpanel-table">Customer Log-in </td>
                        <td class="cpanel-table">Manage Bills</td>
                      </tr>
                      <tr>
                        <td class="cpanel-table"><a href="modules/services/delete-services.php"><img src="images/services.gif" alt="Services module" width="56" height="56" border="0" /></a></td>
                        <td class="cpanel-table"><a href="modules/rate-card/rate-list.php"><img src="images/rate.gif" alt="Rate module" width="56" height="56" border="0" /></a></td>
                        <td class="cpanel-table"><a href="modules/customer-card/index.php"><img src="images/membership-card.gif" alt="Membership module" width="56" height="56" border="0" /></a></td>
                      </tr>
                      <tr>
                        <td class="cpanel-table">Manage Services</td>
                        <td class="cpanel-table">Print Rate Card </td>
                        <td class="cpanel-table">View Customer Cards </td>
                      </tr>
                      <tr>
                        <td class="cpanel-table"><a href="modules/customer-report/index.php"><img src="images/report-customer.gif" alt="Customer report module" width="56" height="56" border="0" /></a></td>
                        <td class="cpanel-table"><a href="modules/services-report/index.php"><img src="images/report-services.gif" alt="Services report module" width="56" height="56" border="0" /></a><a href="#"></a></td>
                        <td class="cpanel-table"><a href="#"></a><a href="modules/expired-id-report/index.php"><img src="images/report-exp-idprf.gif" alt="Exp id report module" width="56" height="56" border="0" /></a></td>
                      </tr>
                      <tr>
                        <td class="cpanel-table">Customer Report </td>
                        <td class="cpanel-table">Services Report </td>
                        <td class="cpanel-table">Expired ID Report </td>
                      </tr>
                    </table>
    <!-- InstanceEndEditable --></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
		<table border="0" align="center" width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td align="center"><a href="cpanel.php" title="Go to cPanel Home"><img src="images/home.png" width="100" height="100" border="0" /></a></td>
				<td align="center">|</td>
				<td align="center"><a href="about-cyber-manager.php" title="About Cyber Manager(v1.0)"><img src="images/about-us.gif" width="100" height="100" border="0" /></a></td>
				<td align="center">|</td>
				<td align="center"><a href="user-manual-cybermanager(v1.0).pdf" target="_blank" title="User Manual - User Guide"><img src="images/user-manual.gif" alt="Help" height="100" width="100" border="0" /></a></td>
				<td align="center">|</td>
				<td align="center"><a href="http://www.moinshaikh.wordpress.com" target="_blank" title="Contact Developer"><img src="images/contact-icon.gif" width="100" height="100" border="0" /></a></td>
			</tr>
		</table>
	</td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
