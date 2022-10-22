<html>

<head>

<title>Softech Pvt Ltd</title>

<link rel="stylesheet" href="style.css" type="text/css"  />
<style>
* {
  box-sizing: border-box;
}
#myID {
  height: 60px;
  width: full;
  background-color: red;
  align: center;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
  height:1000;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.background {
  background-image: url("image\20220212_161828.jpg");
  /*background-color:	#FAFAD2;*/
  background-size: 1120px;
  width: 99%;
  height: 1200px;

}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
input[type=text] {
  width: 100%;
  padding: 5px 10px;
  
  box-sizing: border-box;
  border: none;
  background-color: #3CBC8D;
  color: white;
}

input[type=password] {
  width: 100%;
  padding: 5px 10px;
 
  box-sizing: border-box;
  border: none;
  background-color: #3CBC8D;
  color: white;
}
input[type=checkbox] {
 

 
  box-sizing: border-box;
  border: none;
  background-color: #3CBC8D;
  color: white;
}
nav{
  padding: 10px;
  border-style: dotted 1px;
  background-color: #895;



}
.first{
  background-color: yellow;
  width: 50%;

}
.friends{
  align-content: center;
  color: red;
  float: right;
  border-style: solid;
  margin-right: 10px;
}
.tab{
  color: blueviolet;
  float: right;
  margin-right: 20px;
}
.cont{
color: red;
background-color: blue;
width: 50%;
float: right;
}
.notice{
  align-content: center;
  color: blueviolet;
  float: left;
  border-style: solid;
  width: 300px;
  height: 400px;
  overflow: scroll;
  border-color: lightblue;


}
</style>

</head>

 

<body class="background" bgcolor="lightblue">
   <h1>
    <div class="main">
   <nav>
  
  <a href="index.php">HOME</a> |
  <a href="/login">LOGIN</a> |
  <a href="adlog.php">ADMIN LOGIN</a>|
  
  <a href="https://www.youtube.com/channel/UC1ZNZGb5E_PDdBudZfkZoHA" target="blank">MY YOUTUBE CHANNEL</a>|
   <a href="https://www.instagram.com/skiliash/" target="_blank">INSTAGRAM</a>|
   <a href="payment.php" > make payment</a>
  
</nav>
</div>
   </h1>


<h1 style="color:red;"><marquee onMouseOver="this.stop()" onMouseOut="this.start()">WELCOME TO MY WEBSITE</marquee></h1>


 


<hr>
 <div class="cont">
  <p>laskryauwlrfhaslkfhsaleiyrsklj fhlkshlksahl ahflkashflkahfa
    fklasj hflkas hflakshfl kshdak gslkhgalh</p>
</div>

  <div class="first" ><p>hello friends This is iliash sk. i am here to help you. If need  any help then you can tell me .dont feel shy.
  tell me anything that you are thinking</p></div>


  <div id="myID"><h3 align="center">Background color changing during mouseover</h3></div>
  <br>
  <div class="friends">
    <li>hello rabindra</li>
    <li>hello kishan</li>
    <li>hello Nasib</li>
    <li>hello jahangir</li>
  </div>

<!Animation>
<style> 
#myDIV {
  margin: 25px;
  width: 550px;
  height: 100px;
  background: orange;
  position: relative;
  font-size: 20px;
  float: right;
  margin-right: 400px;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
  from {top: 0px;}
  to {top: 200px;}
}

@keyframes mymove {
  from {top: 0px;}
  to {top: 50px;}
}
.noticehead{
  color: blue;
  width: 300px;
  background-color: lightcyan;
  text-align: center;
}
</style>
</head>
<body>



<div id="myDIV" onmouseover="myFunction()">Click me to start the animation.</div>

<script>
var x = document.getElementById("myDIV");

function myFunction() {
  x.style.WebkitAnimation = "mymove 1s 3";
} 

x.addEventListener("webkitAnimationStart", myStartFunction);
x.addEventListener("webkitAnimationIteration", myRepeatFunction);
x.addEventListener("webkitAnimationEnd", myEndFunction);


function myStartFunction() {
  this.innerHTML = "animationstart event occured - The animation has started";
  this.style.backgroundColor = "pink";
}

function myRepeatFunction() {
  this.innerHTML = "animationiteration event occured - The animation was played again";
  this.style.backgroundColor = "violet";
}

function myEndFunction() {
  this.innerHTML = "animationend event occured - The animation has completed";
  this.style.backgroundColor = "lightgray";
}


</script>











<! Showing content side by side using div>
<br><br><br>
<div>
  <header class="noticehead" style="font-size: 25px">Notice Board</header>
<div class="notice">
    <ol><li>hello rabindra</li>
    <li>hello kishan</li>
    <li>hello Nasib</li>
    <li>hello jahangir</li>
     <li>hello rabindra</li>
    <li>hello kishan</li>
    <li>hello Nasib</li>
    <li>hello jahangir</li>
     <li>hello rabindra</li>
    <li>hello kishan</li>
    <li>hello Nasib</li>
    <li>hello jahangir</li>
     <li>hello rabindra</li>
    <li>hello kishan</li>
    <li>hello Nasib</li>
    <li>hello jahangir</li>
     <li>hello rabindra</li>
    <li>hello kishan</li>
    <li>hello Nasib</li>
    <li>hello jahangir</li>
     <li>hello rabindra</li>
    <li>hello kishan</li>
    <li>hello Nasib</li>
    <li>hello jahangir</li>
     <li>hello rabindra</li>
    <li>hello kishan</li>
    <li>hello Nasib</li>
   </ol>
  </div>











<div class="tab">
<h2 align="center" style="color:green">FILL THE FORM TO REGISTER</h2>
<form action="stu" name="reg" method="post" enctype="multipart/form-data">
    @csrf
<table class="table" align="center" border="1" bgcolor="33F9FF" >
<tr>

            <td>Firstname :: </td>

            <td bgcolor="33F9FF"><input type="text" name="first" id="first"/></td>

</tr>

 

<tr>

            <td id="hi">Lastname :: </td>

            <td><input type="text" name="last"  /></td>

</tr>

<tr>

            <td>Username :: </td>

            <td><input type="text" name="uname" /></td>

</tr>

<tr>

            <td>Password :: </td>

            <td><input type="password" name="pass"</td>

</tr>

<tr>

            <td>Date Of Birth :: </td>

            <td>Date <select name="date">

                                    <?php for($i=1;$i<=31;$i++)

                                                            {?>

                                                            <option><?php echo $i;?></option>

                                                            <?php } ?></select>

                     Month <select name="month">

                        <?php $arr=array('jan','feb','mar','apr','may','june','july','aug','sep','oct','nov','dec');

                                    foreach($arr as $i)

                                                {?>

                                                            <option><?php echo $i;?></option>

                                                <?php } ?></select>

                                    Year <select name="year">

                                    <?php for($i=1980;$i<=2021;$i++)

                                                            {?>

                                                            <option><?php echo $i;?></option>

                                                            <?php } ?></select>      </td>                           

</tr>

<tr>

            <td>Gender :: </td>

            <td>Male<input type="text" name="gender" value="male" /></td>

</tr>

<tr>

            <td>Subject :: </td>

            <td>C<input type="text" name="sub" value="c" /></td>

</tr>

<tr>

            <td>Upload Image :: </td>

            <td id="hi"><input  type="text" name="file" /></td>

</tr>

<tr>

            <td align="center" colspan="2" bgcolor="red" ><input type="submit" name="submit" value="REGISTER" class="button" onclick="valid()" /></td>

</tr>



 

</table>



</form>
</div>
</div>
<script>
  "use srtick"
    function valid(){
        let first=document.getElementByName("first").value.InnerHtml("enter your name");
        if(first=""){
            alert("enter your first name");
            
        }
    }
    document.getElementById("myID").addEventListener("mouseover", function() {
    document.getElementById("myID").style.backgroundColor = "green";
});
    
document.getElementById("myID").addEventListener("mouseout", hello);
function hello() {
    document.getElementById("myID").style.backgroundColor = "lightgreen";
}
</script>

<hr>


</body>

</html>