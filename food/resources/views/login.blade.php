<html>

</head>

<body>

<h1 align="center">user log in form</h1>

<hr>

<form action="logincheck" name="login" method="post">
    @csrf

<table class="table" border="1" align="center">

<tr>

            <td>User Name ::</td>

            <td><input type="text" name="user"  /></td>

</tr>

<tr>

            <td>Password ::</td>

            <td><input type="password" name="pass"  /></td>

</tr>

<tr>

            <td colspan="2"><input type="submit" name="submit" value="login" /></td></tr>



</tr>

</table>

<hr>

</form>

</body>

</html>