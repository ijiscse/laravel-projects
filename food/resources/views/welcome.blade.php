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
  width: 300px;
  height: 400px;
  overflow: scroll;
  border-color: lightblue;



}
.viewcont{
    background-color: grey;
    margin-left: 350px;
    height: 400px;
    overflow: scroll;
}
.ordline{

font-size: 25px;
color:  red;
margin-left: 4px;

}

    </style>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <h1>
        PLASSEY PIZZA HUT
    </h1>
    <p align="center" style="color:blue" class="serv">Our pizza delivery service is open between 10AM to 8 PM .But you can order any time.Normally we deliver it within a hour after your order.</p>
    <div>
        <nav class="orderbar">
             <a href="/" >
    <i class="fa fa-home" >Home</i></a>
            <button><a href="/order">Order</a></button>
        
            <button><a href="/contact">Contact</a></button>
            <button  onclick="carserv()">car service</button>
        <button  onclick="contact()">Our Contact</button>
    
             <button><a href="/login">Login</a></button>
    </nav>
            
        </div>


       
    
<br>




<!--  Ajax Example

<p id="demo">dyhgd  </p>
<button type="button" onclick="loadDoc()">get gata</button>
-->
<br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="notice">
    <ol class="ordline"><li><a href="https://google.com" target="blank" class="fa-fa-home">go to  google</a></li>
    <li> <button onclick="bloodsheet()">car list</button></li>
    <li><button onclick="contact()"><i class='fa fa-globe' style='font-size:24px'> contact</button></i></li>
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
var result=document.querySelectorAll("h1");
document.write(result);
console.log(result);


</script>
</body>
</html>