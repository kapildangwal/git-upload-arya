<html>
<head>
<title>Arya Samaj Mandir</title>
<link rel="icon" href="images/logo.jpg">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="header">
<?php
include("header.html");
?>
</div>
<div id="menu">
<?php
include("menu.html");
?>
</div>
<center>
<div class="login">
<img src="images/user.png" width="300px" height="200px" style="padding-top:10px;">
<table>
<tr>
<td colspan="2"><input type="text" name="Username" id="Username" placeholder="Username"></td>
</tr>
<tr>
<td colspan="2"><input type="Password" id="Password" placeholder="Password"></td>
</tr>
<tr>
<td colspan="2"><input type="button" value="LogIn"></td>
</tr>
<tr>
<td><a href="#" style="text-decoration:none;font-size:20px;margin:10px;padding-top:20px;">Forgot Password ?</a></td>
<td><a href="#" style="text-decoration:none;font-size:20px;margin:10px;padding-top:20px;">Sign up new user ?</a></td>
</tr>
</table>
</div>
</center>
<div id="social media">
<?php
include("social media.html");
?>
</div>
<div id="footer">
<?php
include("footer.html");
?>
</body>
</html>