<html>
<head>
<script>
   
    let retVal = confirm("Do you want to continue ?");

   if( retVal=true ){

      alert("User wants to continue!");

                  return true;
                     }
   else{

      alert("User does not want to continue!");

                  return false;
        }
                  </script>
</head>

<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
body {margin:0;}

.icon-bar {
  width: 100%;
  background-color: #865;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: #356;
}
input{
    background-color: lightblue;
}



</style>


<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a> 
  <a href="#"><i class="fa fa-search"></i></a> 
  <a href="#"><i class="fa fa-envelope"></i></a> 
  <a href="#"><i class="fa fa-globe"></i></a>
  <a href="#"><i class="fa fa-trash"></i></a> 
</div>


<br>

<form action="/logcon" name="login" method="post">
    @csrf

<table class="table" border="1" align="center" bgcolor="lightblue" style="font-size:20px">
    <th align="center" style="color:#895" colspan="2">User log in form</th>

<tr>

            <td>User Name ::</td>

            <td><input type="text" name="user" value="" /></td>

</tr>

<tr>

            <td>Password ::</td>

            <td><input type="password" name="pass"  /></td>

</tr>

<tr>

            <td colspan="2" bgcolor="lightblue" align="center"><input type="submit" name="submit" value="login" onclick="return valid()" /></td></tr>



</tr>

</table>

<hr>

</form>
<script>
    function valid(){
        let first=document.getElementByName("user").value;
        if(first=""){
            alert("enter your first name");
            
        }
    }
</script>

</body>

</html>