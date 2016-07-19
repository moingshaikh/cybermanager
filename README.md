# cybermanager
This is an open source, web based tool that allows Cyber Cafe owners to manage their customer logins, invoices and other activities- online, easily.

 
<table align="center" class="readme_border" cellpadding="1" cellspacing="2" width="670">
  <tbody>
    <tr>
      <td align="center" class="readme_border"><img src="images/cm_small.gif" alt="Cyber Manager (v1.0) -Logo" /></td>
      <td height="74" align="center" class="welcome readme_border">Welcome to<br /> 
      Cyber Manager(v1.0)</td>
      <td align="center"class="readme_border"><img src="images/cm_small.gif" alt="Cyber Manager (v1.0) -Logo" /></td>
    </tr>
    <tr>
      <td height="74" colspan="3"><strong>Introduction</strong> </td>
    </tr>
    <tr>
      <td height="74" colspan="3"><p>Cyber Manager(v1.0)  is the professional application aimed at making cyber cafe management process a flexible, easy and smooth process. Developed using latest tools and technologies and by implementing strict security and safety standards, Cyber Manager(v1.0) helps you  increas your business profit margins and that's too by keeping your customer's confidential data secured.</p>
          <p>&nbsp;</p>      </td>
    </tr>
    <tr>
      <td height="18" colspan="3"><blockquote>
        <p> <strong>Get Started<br />
          </strong><em>First thing First:<br />
          Downloadload </em>Cyber Manager (1.0) from the <a href="#"><strong>developer's blog</strong></a> <sup>1</sup>. You may also download this application directly from the the famous open source software directory <a href="#"><em><strong>sorce-forge</strong></em></a> <sup>2</sup>. </p>
        <p>&nbsp;</p>
        </blockquote></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><hr size="1" align="left" /></td>
    </tr>
    <tr>
      <td colspan="3" class="heading">Pre-requiste to download/Install/Use this CyberManager(v1.0) : </td>
    </tr>
    <tr>
      <td colspan="3">Although, this application has been developed with an aim to reduce the burden of the cyber cafe administrators, there are a couple of Pre-requiste you must full-fill to download/install/use this application in order to make your cyber cafe management activity a smoother one. These Pre-requistes are : 
	  <ul type="square">
	  	<li>Although you need not to be a programmer or a computer/software field expert but you should have a clear or atleast basic idea of what database is and why it is</li>
	    <li>Moreover, you need to know first what is a localhost or web server </li>
	    <li>You should have a little bit knowledge about viewing and adding/editing and deleting database records.</li>
	    <li>If you are going to run and use this application online, then you should have knowlege of web host account (cPanel), database account/phpMyAdmin (if you don't know what all these is, just cosult your web hosting company and ask them to do this (installation ) for you! </li>
	    <li class="heading">And last but not least, if you don't have any idea of any of these terms, YOU MUST HAVE AN IDEA THAT EXTERNAL TUTORIAL REFERENCE LINKS ARE GIVEN AT THE BOTTOM OF THIS PAGE! </li>
	  </ul>
	  
	  </td>
    </tr>
    <tr>
      <td colspan="3"><strong>Two ways to install and use Cyber Manager(v1.0)</strong> : Choose the one that fits you best. </td>
    </tr>
    <tr>
      <td colspan="3"><p>You can install and use Cyber Manager(v1.0) in any of the following way .</p>
          <p><strong>
            <h3>Offline Mode (On Local Server/localhost):</h3>
            </strong>
            <p>You may install and run this application on your localhost or your local computer drive just as you use many other desktop applications. Follow the steps to install and use this application on your local server or local computer drive: 
		<ul type="disc">
			<li><a href="#">Download</a> the application and unzip the folder(cybermanager.zip).</li>
				    <li>You need a local server to run this application, so download the local server such as wamp or xamp; i prefer and suggest wamp server for your ease of installation and use. <a href="http://www.wampserver.com/en/download.php" target="_blank" title="Download WAMP server from here">Download wamp from here</a>.</li>
				    <li>Now you have installed wamp(or other local server ) on your computer, copy the entire unzipped folder of &quot;cybermanager&quot; into your local server's web project directory. As for example for wamp - copy it in c:\wamp\www (so it will look like &quot;C:\wamp\www\cybermanager&quot;). </li>
		            <li>Now find out the database (database.sql) file in cybermanager folder. And use the import database wizard of your local server (most probably <strong>phpmyadmin</strong> provides this facility to import any database file through its GUI module to create database and tables.</li>
		            <li>After having created/imported database, its time to  check for the <strong>phpmyadmin</strong> username and password, the defual username of <strong>phpmyadmin</strong> for cybermanager is &quot;manager&quot; and password is &quot;manager&quot;. If you wish to change username / password of this application, you can do so by changing it in the file called &quot;<strong>dbconfig.php</strong>&quot;</li>
		            <li>Almost done! Just point out your browser to &quot;<strong>http://localhost/cybermanager/</strong>&quot; and you are ready to go!. </li>
		            <li>Enter username &quot;admin&quot; and password &quot;admin&quot; to get access to cpanel of cybermanger and start off to reduce your daily burden! If you ever wish to change user name or password for the cpanel, you can do so by changing it going to admin table in <strong>phpmyadmin</strong> <em>- see admin table there and two colum in that table (one for username and other for password). </em></li>
		            <li><em>Learn more about using this application and using many modules of this application in &quot;<strong>faq.php</strong>&quot; page of this application provided to you in this same folder. <strong>Happy Cybering!</strong> </em></li>
		</ul>
			
			</p>
          </p>
          <h3><strong>Onine Mode (On Web Server/website):</strong></h3>          
          <p>Installing and using this application on your website (simply online/over internet) is as simple as it is using offline. Except a couple of different stepls, nothing is different in installing and using this application online in compare to offline. See what's the different and how can you run and use this application on your website: </p>
          <ul type="disc">
            <li><a href="#">Download</a> the application and unzip the folder(cybermanager.zip).</li>
            <li>You need a web server to run this application, Remember that your webserver account is nothing but the account on which your website is running or being hosted. Just check and confirm that you have gotta mysql database and php installed on your webserver; if not, consult your web hosting company. </li>
            <li>Upload the unzipped cybermanager folder on your web server using any FTP programme such as <a href="http://filezilla-project.org/download.php" target="_blank" title="Download FileZilla from here"><em><strong>FileZilla</strong> </em></a></li>
            <li>Open your web server's cPanel and go to phpmysql database section, create a database using GUI database creation wizzard; write database name as &quot;cybermanager&quot;. Create username and password as manager and assign all privilleges to the said user.  </li>
            <li>Now go to <strong>phpmyadmin</strong> section in your web hosting account's cpanel, use the database import wizzard and select/import the <em><strong>database.sql</strong> </em>file from the cybermanager folder.  Your database and tables are ready! </li>
            <li>After having created/imported database, its time to  check for the <strong>phpmyadmin</strong> username and password, the defual username of <strong>phpmyadmin</strong> for cybermanager is &quot;manager&quot; and password is &quot;manager&quot;. If you wish to change username / password of this application, you can do so by changing it in the file called &quot;<strong>dbconfig.php</strong>&quot;</li>
            <li>Almost done! Just point out your browser to &quot;<strong>http://yourdomainaddress/cybermanager/</strong>&quot; and you are ready to go!. </li>
            <li>Enter username &quot;admin&quot; and password &quot;admin&quot; to get access to cpanel of cybermanger and start off to reduce your daily burden! If you ever wish to change user name or password for the cpanel, you can do so by changing it going to admin table in <strong>phpmyadmin</strong> <em>- see admin table there and two colum in that table (one for username and other for password). </em></li>
            <li><em>Learn more about using this application and using many modules of this application in &quot;<strong>faq.php</strong>&quot; page of this application provided to you in this same folder. <strong>Happy Cybering!</strong></em> </li>
          </ul></td>
    </tr>
	<tr>
	  <td colspan="3">&nbsp;</td>
    </tr>
	<tr>
		<td colspan="3"><strong>&nbap;</strong></td>
	</tr>
	<tr>
	  <td colspan="3">&nbsp;</td>
    </tr>
	<tr>
	  <td colspan="3" class="heading"><h3>Important Help Resources (External Tutorial Reference Links):</h3> </td>
    </tr>
	<tr>
	  <td colspan="3">&nbsp;</td>
    </tr>
	<tr>
	  <td colspan="3">
	  	<table border="0" align="center" class="readme_border" width="100%" cellpadding="2" cellspacing="3">
			<tr>
				<td align="center" class="readme_border"><a href="http://www.wampserver.com" target="_blank"><img src="images/logo-wamp-server.gif" width="91" height="55" title="Learn more about WampServer" /></a></td>
				<td align="center" class="readme_border"><a href="http://filezilla-project.org" target="_blank"><img src="images/logo-filezilla.gif" width="64" height="64" title="Learn more about FileZilla FTP Softwarae"/></a></td>
				<td align="center" class="readme_border"><a href="http://www.mysql.com" target="_blank"><img src="images/logo-mysql.gif" width="64" height="64" title="Learn more about MySQL Database"/></a></td>
				<td align="center" class="readme_border"><a href="http://www.phpmyadmin.net/home_page/index.php" target="_blank"><img src="images/logo-phpmyadmin.gif" width="64" height="64" title="Learn more about phpMyAdmin Host" border="1" /></a></td>
			</tr>
			<tr>
			  <td align="center" class="readme_border"><strong>WampServer</strong></td>
			  <td align="center" class="readme_border"><strong>FileZilla</strong></td>
			  <td align="center" class="readme_border"><strong>MySQL</strong></td>
			  <td align="center" class="readme_border"><strong>phpMyAdmin</strong></td>
		  </tr>
		</table>	  </td>
    </tr>
	<tr>
	  <td colspan="3">&nbsp;</td>
    </tr>
	<tr>
	  <td colspan="3">More questions about Cyber Manager(v1.0)?....Read out our <a href="faq.php"><em><strong>FAQ file</strong> </em></a></td>
    </tr>
	<tr>
	  <td colspan="3">&nbsp;</td>
    </tr>
	<tr>
	  <td colspan="3"><sup>1</sup> Log on to www.moinshaikh.wordpress.com to download CyberManager(v1.0)</td>
    </tr>
	<tr>
	  <td colspan="3"><sup>2</sup> Log on to www.sourceforge.net to download CyberManager(v1.0)</td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
</body>
</html>
