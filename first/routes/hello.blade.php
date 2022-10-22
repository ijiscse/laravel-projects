<html>
    <head>
<style>

body{
    background-color:yellow;
color:red;
background-image:url("myphoto/1654432616130iliash (16) - Copy.jpg");
}
h1{
    padding: 10px;
    background-color:rgb(240,150,86);
    border:2px solid Blue;
    margin: 10px 500px 10px;
}
input[type=text]{
    background: rgb(125 ,210, 147);
}
input[type=submit]{
    background-color:#457825;
}
input[type=password]{
    background: rgb(125 ,210, 147);
}

    </style>
</head>

<body id="body">
<div>


<h1 align="center">Log in form</h1>
</div>

<hr>

<form action="logindb.php" name="login" method="post">

<table class="table" border="1" align="center">

<tr>

            <td style="background-color:#256">User Name ::</td>

            <td><input type="text" name="user" placeholder="enter your user id " /></td>

</tr>

<tr>

            <td>Password ::</td>

            <td><input type="password" name="pass" placeholder="enter your password" /></td>

</tr>

<tr>

            <td colspan="2"><input type="submit" name="submit" value="login" style="color:red" /></td></tr>



</tr>

</table>

<hr>

</form>

</body>

</html>