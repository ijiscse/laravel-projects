
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report</title>
    <style type="text/css">
    table {
  border-collapse: separate;
  border-spacing: 0 15px;
}
.name{

    border-style: solid;
    border-width: 0.1px;
    width: 800px;
    }

.toppad{
    background-color: green;
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
$query=mysqli_query($con,"select * from typhis where id=$id ");
while($val=mysqli_fetch_array($query)){
	 echo '<div align="center"><p class="name"><table align="center"style="width: 800px;margin-left: 5px;">
        <tr><td>Patient name :'.$val[1].'</td>
            <td>Sex :'.$val[2].'</td>
            <td>Age :'.$val[3].'</td></tr>
            <tr>
            <td>Ref. By :'.$val[4].'</td>
            <td>Lab code :'.$val[5].'</td>
        </tr>
        <tr>
            <td>Date of Reciept :'. $val[6].'</td>
            <td>Date of Report :'.$val[7].'</td>
        </tr></table></p></div>';

        echo "<h2 align='center'>Report</h2>";
        echo '<div  >
        	<table align="center" style="width:800px"><tr>
<td style="font-weight: bold;">Test</td><td style="font-weight: bold;">Result</td></tr>
                <tr>
            <td>TYPHI  DOT  -  IgM</td>
            <td >'.$val[8].'</td>
</tr> 

<tr>
            <td>TYPHI  DOT  -  IgG</td>
            <td>'.$val[9].'</td>
             
</tr>

</table>';
echo '
<table align="center" style="width:800px">
<tr><td><pre>
                                Results and clinical interpretation :-

Result & Normal range:

IgM and IgG negative: Probably not typhoid.
IgM  positive: Acute typhoid fever.

IgM and IgG positive: Acute typhoid fever. ( In the middle stage of infection ).

IgG  positive:
Implications for the presence of IgG antibodies include previous infection
(in which case currentfever may not be due to typhoid), or relapse or re-infection.
Therefore, it is important that interpretation be made together with the clinical
symptoms in order to diagnose if the patient is currently having typhoid.
</pre></td></tr></table>
';

}

@endphp
</body>
</html>
