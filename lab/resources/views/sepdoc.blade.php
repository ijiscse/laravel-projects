
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report</title>
    <style type="text/css">
    table {
  border-collapse: separate;
  border-spacing: 0 10px;
}
.name{

    border-style: solid;
    border-width: 0.1px;
    width: 800px;
    }


</style>
</head>
<body>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@php

$con=mysqli_connect("localhost","root","","library");
$query=mysqli_query($con,"select * from bloodusers where id=$id ");
while($val=mysqli_fetch_array($query)){
	 echo '<div align="center"><p class="name"><table align="center"style="width: 800px;margin-left: 10px;">
        <tr><td>patient name:'.$val[1].'</td>
            <td>sex:'.$val[2].'</td>
            <td>age:'.$val[3].'</td></tr>
            <tr>
            <td>Ref. By:'.$val[4].'</td>
            <td>lab code:'.$val[5].'</td>
        </tr>
        <tr>
            <td>date of reciept:'.$val[6].'</td>
            <td>date of report:'.$val[7].'</td>
        </tr></table></p></div>';

        echo "<h2 align='center'>Report</h2>";
        echo '<div  >
        	<table align="center" style="width:800px" ><tr><td style="width:40%;font-weight: bold ;">Test</td><td style="width:33%;font-weight: bold ;">Result</td><td style="width:33%;font-weight: bold ;">Refference Range</td></tr>';

        	echo '<tr><td span="3"><pre>HAEMOGLOBIN
(Cyanmethaemoglobin)</pre></td><td>'.$val[8].' gm/dl</td>
<td ><pre>male    :13 to 18
female  :11 to 16
children:10 to 14
infants :14 to 20</pre></td>


</tr>

<tr><td>
Total count                                                         
(Leucocytes)                                                                       
</td>
<td>'.$val[9].'/cu mm</td><td>4,500 – 11,000 </td></tr>
<br>
<tr><td>Differential WB count</td></tr>
<tr><td>Neutrophils</td><td>'.$val[10].'%</td><td>(At birth 60%, 4 - 6 mnts 30%, Adult 54 - 62%) </td></tr>
<tr><td></td></tr>
<tr><td>Lymphosites</td><td>'.$val[11].'%</td><td>(At birth 30%, 4 - 6 mnts 60%, Adult 20 - 40%)  </td></tr>
<tr><td>Eosinophils</td><td>'.$val[12].'%</td><td>(1 – 6 %)</td></tr>
<tr><td>Monosites</td><td>'.$val[13].'%</td><td> (0 – 4 %)</td></tr>
<tr><td>Basophils</td><td>'.$val[14].'%</td><td> (0 – 1 %)</td></tr>
<tr><td>ERYTHROCYTE SEDIMENTATION RATE(Wintergreen’s Method)</td><td>'.$val[15].'mm(First hour reading</td><td><pre>Male:0 to 20
Female:0 to 15</td></tr>
</table>';
}

@endphp
</body>
</html>
