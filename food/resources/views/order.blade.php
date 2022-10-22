<html>
<head>
    <title>
        plassey pizza hut
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        h1{
            background: yellow;
            text-align: center;
            color: red;
            font-size: 70px;

        }
        h1:hover{
            background-color: blueviolet; 
        }
        a{
            text-decoration: none;
        }
 a:hover{
            background-color: lightgreen;
        }
        
        body{
            background-color: lightcoral;
        }
        .orderbar{
            padding: 6px;
            font-size: 22px;
            background-color: grey;
            color: violet;
        }
        .ordertab{
            background-color: skyblue;
        }
        input{
            background-color: skyblue;
        }
        .marq :hover{
                background-color: lightcoral;

        }
        .opt {
  
  background: grey;
  /*background-color: blue;*/
  -webkit-appearance: none;
  -moz-appearance: none;
 
  width: 300px;
  padding-top: 0px;
  background-size: 20px;
  color: lightcoral;
  font-size: 30px;
}
.viewcont{
    background-color: none;
    /*height: 500px;
    width: 400px;
    margin-left: 200px;*/

}
.biryani{
    width: 400px;
    padding: 6px;
    background-color: lightblue;
}
.table{
    width: 600px;
    background-color: grey;
}

    </style>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body>
    <h1>
        PLASSEY PIZZA HUT
    </h1>
    <marquee onmouseover=this.stop() onmouseout=this.start()><p class="marq" align="center" style="color:blue">Our pizza delivery service is open on 10AM to 8 PM .But you can order any time.Normally we deliver it within a hour after your order.</p></marquee>
    <div>
        <nav class="orderbar">
             <a href="/" >
    <i class="fa fa-home" >Home</i></a>
            <a href="/order">Order</a>  
        <a href="/contact">Contact</a>
     
</nav>


  


</div>
<form action="/uploadcon" method="post" >
    @csrf
<h3 align="center"> salect to place your order<br>  <select class="opt" onchange="bloodsheet(this.value)"  name="select" >
    <option value="hello">select</option>
    <option value="biryani">biryani</option>
      <option value="pizza">Pizza</option>
      <option value="cake">Cake</option>
</select>
</h3>



<div class="viewcont" align="center" id="tan"></p></div>
</form>
 
<script type="text/javascript">
function bloodsheet(val){







   switch(val)
   {

case "cake" :
document.getElementById("tan").innerHTML=`
<h1 align="center" class="biryani">Cake  Price:250/cake</h1>
<table class="table" align="center" border="1" bgcolor="33F9FF" >
<tr>
            <td>Firstname :: </td>
            <td bgcolor="33F9FF"><input type="text" name="first"  /></td>
</tr> 

<tr>
            <td>Lastname :: </td>
            <td><input type="text" name="last"  /></td>
</tr>

<tr>
            <td>Mobile No:: </td>
            <td><input type="number" name="num" /></td>
</tr>

<tr>

            <td>number of packet :: </td>
            <td>
            <select name="pack" onchange="cakeprice(this.value)">
            <option value="null">select</option>
            <option value=1 >1</option> 
            <option value=2 >2</option> 
            <option value=3 >3</option> 
            <option value=4 >4</option> 
            <option value=5 >5</option> 
            <option value=6 >6</option> 
            <option value=7 >7</option> 
            <option value=8 >8</option> 
            <option value=9 >9</option> 
            <option value=10 >10</option> 
            <option value=11>11</option> 
            <option value=12 >12</option> 
            <option value=13 >13</option> 
            <option value=14 >14</option> 
            </select>
            </td>

</tr>

<tr id="tdata">

           
<td>total cost</td>
           <td> <input type="number" id="total"  name="tot" value="" /></td>

</tr>


<tr>

            <td>Village :: </td>

            <td><input type="text" name="vill" /></td>

</tr>
<tr>

            <td>Pin no :: </td>

            <td><input type="number" name="pin" /></td>

</tr>

<tr>

            <td align="center" colspan="2" bgcolor="red" ><input type="submit" name="submit" value="Confirm" class="button" /></td>

</tr>



 

</table>



</form>`;
break;


    case "biryani":
    document.getElementById("tan").innerHTML=`
<h1 align="center" class="biryani">Biryani Price:100/packet</h1>
<table class="table" align="center" border="1" bgcolor="33F9FF" >
<tr>
            <td>Firstname :: </td>
            <td bgcolor="33F9FF"><input type="text" name="first"  /></td>
</tr> 

<tr>
            <td>Lastname :: </td>
            <td><input type="text" name="last"  /></td>
</tr>

<tr>
            <td>Mobile No:: </td>
            <td><input type="number" name="num" /></td>
</tr>

<tr>

            <td>number of packet :: </td>
            <td>
            <select name="pack" onchange="price(this.value)">
            <option value="null">select</option>
            <option value=1 >1</option> 
            <option value=2 >2</option> 
            <option value=3 >3</option> 
            <option value=4 >4</option> 
            <option value=5 >5</option> 
            <option value=6 >6</option> 
            <option value=7 >7</option> 
            <option value=8 >8</option> 
            <option value=9 >9</option> 
            <option value=10 >10</option> 
            <option value=11>11</option> 
            <option value=12 >12</option> 
            <option value=13 >13</option> 
            <option value=14 >14</option> 
            </select>
            </td>

</tr>

<tr id="tdata">

           
<td>total cost</td>
           <td> <input type="number" id="total"  name="tot" value="" /></td>

</tr>


<tr>

            <td>Village :: </td>

            <td><input type="text" name="vill" /></td>

</tr>
<tr>

            <td>Pin no :: </td>

            <td><input type="number" name="pin" /></td>

</tr>

<tr>

            <td align="center" colspan="2" bgcolor="red" ><input type="submit" name="submit" value="Confirm" class="button" /></td>

</tr>



 

</table>



</form>`;
    break;
    case "pizza":
   document.getElementById("tan").innerHTML=`
<h1 align="center" class="biryani">Pizza Price:200/packet</h1>
   
<table class="table" align="center" border="1" bgcolor="33F9FF" >

<tr>

            <td>Firstname :: </td>

            <td bgcolor="33F9FF"><input type="text" name="first"  /></td>

</tr>

 

<tr>

            <td>Lastname :: </td>

            <td><input type="text" name="last"  /></td>

</tr>



<tr>

            <td>Mobile No:: </td>

            <td><input type="number" name="num"</td>

</tr>

<tr>

            <td>number of packet :: </td>

            <td><select name="pack" onchange="pizzaprice(this.value)">
<option value="null">select</option>

            <option value=1 >1</option> 
            <option value=2 >2</option> 
            <option value=3 >3</option> 
            <option value=4 >4</option> 
            <option value=5 >5</option> 
            <option value=6 >6</option> 
            <option value=7 >7</option> 
            <option value=8 >8</option> 
            <option value=9 >9</option> 
            <option value=10 >10</option> 
            <option value=11>11</option> 
            <option value=12 >12</option> 
            <option value=13 >13</option> 
            <option value=14 >14</option> 


            </select>


            </td>

</tr>

<tr>

            <td>total cost :: </td>

            <td> <input type="number" id="total"  name="tot" value="" /></td>

</tr>



<tr>

            <td>Village :: </td>

            <td><input type="text" name="vill"</td>

</tr>
<tr>

            <td>Pin no :: </td>

            <td><input type="number" name="pin"</td>

</tr>

<tr>

            <td align="center" colspan="2" bgcolor="red" ><input type="submit" name="submit" value="Confirm" class="button" /></td>

</tr>

</table>
</form>`;
    break;

   }
}
function price(val){
document.getElementById("total").innerHTML=val*100;
document.getElementById("total").value=val*100;

} 

function pizzaprice(val){
document.getElementById("total").innerHTML=val*200;
document.getElementById("total").value=val*200;
}   
function cakeprice(val){
document.getElementById("total").innerHTML=val*250;
document.getElementById("total").value=val*250;

}


</script>
</body>
</html>