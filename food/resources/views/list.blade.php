

<html>
<head>
    <title>
        plassey pizza hut
    </title>
    <style type="text/css">



        h1{
            background: yellow;
            text-align: center;
            color: red;
            font-size: 70px;

        }
        body{
            background-color: lightcoral; 
            /*background-image: url("image/iliash (100).jpg");*/
        }
        .orderbar{
            padding: 6px;
            font-size: 30px;
            background-color: antiquewhite;
        
        
        }
        .serv{
            font-size: px;
            font-size: 24px;
        }
        a{
            text-decoration: none;
        }
        .notice{
  align-content: center;
  color: blueviolet;
  float: left;
  border-style: solid;
  width: 20%;
  height: 400px;
  overflow: scroll;
  border-color: lightblue;



}
.viewcont{
    background-color: grey;
   width: 79%;
    height: 400px;
    overflow: scroll;
}
.ordline{

font-size: 25px;
color:  red;
margin-left: 4px;

}
</style>
   <link rel="stylesheet" href="style.css">

   
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <h1>
        PLASSEY PIZZA HUT
    </h1>
    <p align="center" style="color:blue" class="serv">Our pizza delivery service is open between 10AM to 8 PM .But you can order any time.Normally we deliver it within a hour after your order.</p>
    <div >
    <div>
        <nav class="navbar bg-success navbar-expand-lg navbar-dark">
           <ul class="navbar-nav">
            <li class="nav-item active">
                <i class="fa fa-home" >Home</i></a>
            <button><a href="/order">Order</a></button>
           </li>
           <li class="nav-item">
               <a href="/" >        
            <button><a href="/contact">Contact</a></button>
           </li>
           <li  class="nav-item">
               <button  onclick="carserv()">car service</button>
           </li>
           <li  class="nav-item">
              <button  onclick="contact()" style="color:white; background-color:red">Our Contact</button>
           </li >
             <li  class="nav-item">
                 <button><a href="/login">Login</a></button>
             </li>
            
        </ul>
    
             
    </nav>
            
        </div></div>

         <nav class="navbar bg-warning navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="">Tindog</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Pricing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Download</a>
        </li>
    </ul>
 </div>
</nav>


       
    
<br>




<!--  Ajax Example

<p id="demo">dyhgd  </p>
<button type="button" onclick="loadDoc()">get gata</button>
-->
<br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="notice">
    <ol class="ordline"><li><a href="https://google.com" target="blank" class="fa-fa-home">go to  google</a></li>
    <li> <a  onclick="bloodsheet()">car list</a></li>
    <li><i><button  onclick="contact()">ordered food list</button></i></li>
    <li><i><button  onclick="address()">Address</button></i></li>
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
   <div class="viewcont" align="right">
        <p align="center" id="car"></p>
    </div>




  



<script type="text/javascript">
    function carserv(){
    let car=["scorpio","tata","suzuki","bolero"];
    document.getElementById("car").innerHTML=`<h>car list</h>
    <br>
    <br>
   
    
    
    <li></li>
     <li>bmw</li>
      <li>bmw</li>
       <li>bmw</li>
        <li>bmw</li>
    

    `;
    
    }
    function contact(){
    let car=["scorpio","tata","suzuki","bolero"];
    document.getElementById("car").innerHTML=`   <table border="1" id="myTable">
  <tr>
    <td>iliash </td>
   <td><input type="text" placeholder="enter your email"</td>
    <td><input type="text" placeholder="enter your own value"</td>
  </tr>
  <tr>
    <td>jahangir sk</td>
    <td><input type="text" placeholder="enter your email"</td>
    <td><input type="text" placeholder="enter your own value"</td>
  </tr>
  
</table>
<select  onchange="myFunction(this.value)" name="select">
<option value="hello">Select</option>
<option value="pizza">Pizza</option>
<option value="biryani">Biryani</option>
</select>


<div class="flt">



<table border="1" align="center"><tr class="bold"><td>sl no</td>
<td>name</td>
<td>mobile</td>
<td>village/town</td>
<td>pin</td>
<td>food type</td>
<td>No of pack</td>
<td>Total cost</td>
<td>Delete</td>
</tr>


@foreach($data as $dat)
<tr><td>{{$dat["id"]}}</td>
<td>{{$dat["first"]}} {{$dat["last"]}}</td>
<td>{{$dat["mobile"]}}</td>
<td>{{$dat["village"]}}</td>
<td>{{$dat["pin"]}}</td>
<td>{{$dat["foodtype"]}}</td>
<td>{{$dat["pktnum"]}}</td>
<td>{{$dat["total"]}}</td>
<td><button><a class="del" href={{"delete/".$dat["id"]}}>delete</a></button></td>
</tr>
@endforeach</table>

<p><button><a  href="/logout">logout</a></button></p>
<br></div>



`;
    
    }
   


function myFunction(val) {

    var table = document.getElementById("myTable");
  var row = table.insertRow();
  var cell1 = row.insertCell(0); 
  var cell2 = row.insertCell(1);
  let cell3=row.insertCell(2);
   let cell4=row.insertCell(3);
   switch(val){
case "pizza":
  cell1.innerHTML = val;
  cell2.innerHTML = `<input type="text" placeholder="enter your gmail">`;
  cell3.innerHTML=`<input type="text" placeholder="enter ur opinion">`;
   break;
case "biryani":
  cell1.innerHTML = val;
  cell2.innerHTML = `<input type="text" placeholder="enter your gmail">`;
  cell3.innerHTML=`<input type="text" placeholder="enter ur opinion">`;
   break;
}

}
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "", true);
  xhttp.send();
}
function address(){
    var xhttp=XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("car").innerHTML =`kellllhjlk`;
      
    }
  }
  xhttp.open("GET", "robots.txt", true);
  xhttp.send();
}
 

</script>
</body>
</html>
