<!--
*CHECKLOGIN.PHP - This will check for the login condition before the admin/user can use this application.*
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
 <?php
include("dbconfig.php"); // cal the Database configuration file.

// username and password sent from form
$username=isset($_POST['username']) ? $_POST["username"] : "";
$password=isset($_POST['password']) ? $_POST["password"] : "";

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM `admin` WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row

if($count==1){
// Register $username, $password and redirect to file "login_success.php"
session_register("username");
session_register("password");
header("location:cpanel.php");
}
else {
echo "<h2>Incorrect Login Details!</h2>";
}
?>
