<html>
<head>
    <title>
        MEDICO DIAGNOSTIC
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        .table{
            border-collapse: collapse;
        }
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
         select:hover{
            background-color: #548561;
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
            background-color: lightcoral;
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
p.name{

    border-style: solid;
    margin-left: 200px;
    margin-right: 200px;
}
.bar{
    padding: 5px;
    background-color: #00bfff;
}
a{
    font-size: 20px;
    text-decoration: none;
}
#log{
    float: right;
}


    </style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body>
    <h1>
    MEDICO DIAGNOSTIC
    </h1>
     <div class="bar">
        <nav>
             <a href="/" >
    <i class="fa fa-home" >Home</i></a>|
           
            
           <form action="logcheck" method="post"> 
            @csrf
            <table><tr><td><input type="text" name="user" value="" /></td><td>
<input type="text" name="pass" value="" /></td>
<td><input type="submit" name="submit" value="login" /></td>
</tr></table></form>
 </nav></div>
            
       



    
<h3 align="center"> <select class="opt" onchange="bloodsheet(this.value)"  name="select" >
    <option value="hello">select test type</option>
    <option value="hemato">Haematology</option>
      <option value="typhi">Typhi</option>
      <option value="cake">Cake</option>
</select>
</h3>



<div class="viewcont" align="center" id="tan"></p></div>

 
<script type="text/javascript">
function bloodsheet(val){







   switch(val)
   {

    case "hemato":
    document.getElementById("tan").innerHTML=`
    <form action="/uploadcon" method="post" >
    @csrf
    <p class="name"><table align="center">
        <tr><td>patient name:</td><td><input type="text" name="name"></td>
            <td>sex:</td><td><input type="text" name="sex"></td>
            <td>age:</td><td><input type="number" name="age"></td></tr>
            <tr>
            <td>Ref. By:</td><td><input type="text" name="doct"></td>
            <td>lab code:</td><td><input type="text" name="code" value=" A D 12." readonly></td>
        </tr>
        <tr>
            <td>date of reciept:</td><td><input type="date" name="date1"></td>
            <td>date of report</td><td><input type="date" name="date2"></td>
        </tr></table></p>

<table class="table" align="center" border="1" bgcolor="33F9FF" >
<th>Test</th><th>result</th><th>reference range</th>
<tr>
            <td>HAEMOGLOBIN (Cyanmethaemoglobin)</td>
            <td bgcolor="33F9FF"><input type="text" name="haemo" placeholder="9.8 gm/dl" /></td>
             <td><pre>Male  :13 to 18
Female:11 to 16</pre></td>
</tr> 

<tr>
            <td>Total count(Leucosites)</td>
            <td><input type="number" name="leoco" placeholder=" 9,800 / cu.m.m                              "  /></td>
              <td>4500-11000</td>
</tr>

<tr>
            <td>Differential w.b.c count</td>
            
</tr>
<tr>
            <td>Neutrophils</td>
            <td><input type="number" name="neutro" placeholder="70%"  /></td>
              <td>(At birth 60%, 4 - 6 mnts 30%, Adult 54 - 62%)       </td>
</tr>
<tr>
            <td>Lymphosites</td>
            <td><input type="number" name="lympho" placeholder="27%"  /></td>
              <td>(At birth 30%, 4 - 6 mnts 60%, Adult 20 - 40%)</td>
</tr>
<tr>
            <td>Eosinophils</td>
            <td><input type="number" name="eosin" placeholder="02%"  /></td>
              <td>(1 – 6 %)</td>
</tr>
<tr>
            <td>Monosites</td>
            <td><input type="number" name="mono" placeholder="01%"  /></td>
              <td>(0 – 4 %)</td>
</tr>
<tr>
            <td>Basophils</td>
            <td><input type="number" name="baso" placeholder="00%"  /></td>
              <td>(0 – 1 %)</td>
</tr>
      
<tr>
            <td><pre>ERYTHROCYTE SEDIMENTATION RATE
(Wintergreen’s Method)</pre></td>
            <td><input type="number" name="erythro" placeholder="80   mm (1st hour reading)          "  /></td>
              <td><pre>Male:0-20
Female:0-15</pre></td>
</tr>         
<tr>

            <td align="center" colspan="3" bgcolor="lightgreen" ><input type="submit" name="submit" value="Submit" class="button" /></td>

</tr>



</table>



</form>`;
    break;
    case "typhi":
    document.getElementById("tan").innerHTML=`
    <form action="/typhoid" method="post" >
    @csrf
    <p class="name"><table align="center">
        <tr><td>patient name:</td><td><input type="text" name="name"></td>
            <td>sex:</td><td><input type="text" name="sex"></td>
            <td>age:</td><td><input type="number" name="age"></td></tr>
            <tr>
            <td>Ref. By:</td><td><input type="text" name="doct"></td>
            <td>lab code:</td><td><input type="text" name="code" value=" A D 12." readonly></td>
        </tr>
        <tr>
            <td>date of reciept:</td><td><input type="date" name="date1"></td>
            <td>date of report</td><td><input type="date" name="date2"></td>
        </tr></table></p>

<table class="table" align="center" border="1" bgcolor="33F9FF" >
<th>Test</th><th>result</th><th>reference range</th>
<tr>
            <td>TYPHI  DOT  -  IgM</td>
            <td bgcolor="33F9FF"><select name="typhi1"><option value="select"></option>
            <option value="Positive">positive</option>
            <option value="Negative">Negative</select></td>
</tr> 

<tr>
            <td>TYPHI  DOT  -  IgG</td>
            <td><select name="typhi2"><option value="select"></option>
            <option value="Positive">positive</option>
            <option value="Negative">Negative</select></td>
             
</tr>
<tr>

            <td align="center" colspan="3" bgcolor="lightgreen" ><input type="submit" name="submit" value="Submit" class="button" /></td>

</tr>






</table>



</form>`;
    break;

   }
}




</script>


</body>
</html>