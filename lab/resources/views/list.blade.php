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
.barchart{
    float: left;
    overflow: scroll;
    width: 20%;
    height: 500px;
    box-decoration-break: inherit;
}
.cont{

    overflow: scroll;
    width:80%;
    height: 500px;

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
            <a href="/all">Report list</a>
        </nav></div>
        <h3 align="center">Find  Your Blood Test Reports Here </h3>
        <br>
       <div class="barchart">
           <ol><li><button onclick="Haematology()">Haematology</button></li>
            <li><button onclick="typhoid()">Typhoid</button></li>
           </ol>
       </div>
       <div class="cont"> <p id="field"></p></div>
       

<div class="viewcont" align="center" id="tan"></p></div>

<script type="text/javascript">
function Haematology(){
    document.getElementById('field').innerHTML=`
  

<h2 align="center">Haematology list</h2>

      

         @foreach($data as $dat)
         <form action="sepdoc" method="POST">
    @csrf
    <table border="1" align="center">
           <th>Id</th><th>Patient Name</th><th>age</th><th>date of receipt</th>
           <th>date of report</th>
        <th>Print</th>
        <tr>
            <td>
                <input type="number" name="id" value="{{$dat["id"]}}" readonly> </td>
           
            <td>{{$dat["pname"]}}</td>
            <td>{{$dat["age"]}}</td>
            <td>{{$dat["recd"]}}</td>
            <td>{{$dat["repd"]}}</td>
           
             </td><td><input type="submit" name="submit" value="print"></td>
        </tr> </table></form>
        @endforeach
   

    
    

    `;
}
function typhoid(){

    document.getElementById('field').innerHTML=`
    <h2 align="center">Typhoid list</h2>

         @foreach($mem as $dat)
         <form action="typhidoc" method="POST">
    @csrf
    <table border="1" align="center">
           <th>Id</th><th>Patient Name</th><th>age</th><th>date of receipt</th>
           <th>date of report</th>
        <th>Print</th>
        <tr>
            <td>
                <input type="number" name="id" value="{{$dat["id"]}}" readonly></td>
           
            <td>{{$dat["pname"]}}</td>
            <td>{{$dat["age"]}}</td>
            <td>{{$dat["recd"]}}</td>
            <td>{{$dat["repd"]}}</td>
           
             </td><td><input type="submit" name="submit" value="print"></td>
        </tr>
         </form>
        @endforeach
        
  


    `;
}


</script>

</body>
</html>