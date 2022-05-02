<html>
<head>
<title>Registration Form</title>
<link rel="icon" type="image/icon" href="images/user.png">
<style type="text/css">
label
{
display:block;
width:210px;
float:left;
}
label:after
{
content:" :";
}
fieldset
{
border:1px solid red;
width:400px;
color:red;
font-size:15pt;
}
input[type="text"]
{
width:180px;
height:35px;
border:1px solid red;
padding-left:10px;
}
input[type="date"]
{
width:180px;
height:35px;
border:1px solid red;
padding-left:10px;
}
input[type="button"]
{
width:180px;
height:35px;
border:1px solid red;
background:red;
color:white;
margin-left:10px;
}
input[type="button"]:hover
{
width:180px;
height:35px;
border:1px solid green;
background:green;
color:white;
margin-left:10px;
}
select
{
width:180px;
height:35px;
border:1px solid red;
padding-left:10px;
color:red;
}
</style>
</head>
<body>
<center>
<fieldset>
<legend>वर का पंजीकरण</legend>
<p><label for="name">वर नाम दर्ज करें</label><input type="text" name="name"</p>
<p><label for="f.name">पिता का नाम दर्ज करें</label><input type="text" name="f.name"></p>
<p><label for="m.name">माता का नाम दर्ज करें</label><input type="text" name="m.name"></p>
<p><label for="r.name">धर्म का नाम दर्ज करें</label><input type="text" name="r.name"></p>
<p><label for="c.name">शहर का नाम दर्ज करें</label><input type="text" name="c.name"></p>
<p><label for="a.name">पता नाम दर्ज करें</label><input type="text" name="a.name"></p>
<p><label for="d.name">जिले का नाम दर्ज करें</label><input type="text" name="d.name"></p>
<p><label for="Phone No">फ़ोन नंबर नाम दर्ज करें</label><input type="text" name="phone no"></p>
<p><label for="Marriage Date">शादी की तारीख दर्ज करें</label><input type="date" name="marriage date" placeholder="dd/mm/yyyy"></p>
<p><label for="e.name">ईमेल आईडी नाम दर्ज करें</label><input type="text" name="e.name"></p>
<p><label for="a.name">आधार कार्ड का नाम दर्ज करें</label><input type="text" name="a.name"></p>
<p><input type="button" value="Submit"><input type="button" value="Clear"></p>
</fieldset>
</center>
</body>
</html>