<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<!-- <h2> STUDENT'S PERFORMANCE</h2>
    <table >
        <tr>
            <th width="20%">Item</th>
            <th width="10%">CAY</th>
            <th width="11%">CAYm1</th>
            <th width="13%">CAYm2</th>
            <th width="13%">CAYm3</th>
            <th width="12%">CAYm4<br>(LYG)</th>
            <th width="10%">CAYm5<br>(LYGm1)</th>
            <th width="13%">CAYm6<br>(LYGm2)</th>
        </tr>
        <tr>
            <th>Sanctioned intake of the program(N)</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <th>Total no of students admitted in first year minus no of students migrated to other programs/institutions,plus no of students migrated to this program(N1)</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <th>Number of students admitted in 2nd year in the same batch via lateral entry(N2)</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <th>Separate division students,if applicable(N3)</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <th>Total number of students admitted in the program(N1+N2+N3)</th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        </table>
        <p><b> CAY - Current Academic Year</b></p>
        <p><b> CAYm1 - Current Academic Year minus1= Current Assessment Year</b></p>
        <p><b> CAYm2 - Current Academic Year minus2= Current Assessment Year minus 1</b></p>
        <p><b> LYG - Last Year Graduate</b></p>
        <p><b> LYGm1 - Last Year Graduate minus1 </b></p>
        <p><b> LYGm2 - Last Year Graduate minus2 </b></p>
        <h2> Student-faculty ratio</h2>
        <table style="width: 100%"  >
        <tr>
            <th width="25%">Year</th>
            <th width="25%">CAY</th>
            <th width="25%">CAYm1</th>
            <th width="25%">CAYm2</th>
        </tr>
        <tr>
            <td> u1.1</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td> u1.2</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td> u1.3</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td> UG</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td> p1.1</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td> p2.2</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td> PG</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td> Total No. of Students in Dept(S)</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td> No. of Faculty in Dept(F)</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td> Student Faculty Ratio(SFR)</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td> Average SFR </td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
      </table>
      <h2> Faculty Cadre Proportion </h2>
      <table style="width:100%">
        <tr>
            <th rowspan="2">Year</th>
            <th colspan="2">Professors</th>
            <th colspan="2"> Associate Professors</th>
            <th colspan="2"> Assistant Professors</th>
        </tr>
        <tr>
            <td>Required F1</td>
            <td>Available</td>
            <td>Required F1</td>
            <td>Available</td>
            <td>Required F1</td>
            <td>Available</td>
        </tr>
        


      </table>-->

</body>
</html>

<?php
require_once("dbh.php");

echo "<h1 align=center>MVSREC</h1>";
// Query to retrieve data
$query  = "SELECT * FROM `UG` WHERE dept = 'IT' AND year = 2024";
$query1 = "SELECT * FROM `UG` WHERE dept = 'IT' AND year = 2023";
$query2 = "SELECT * FROM `UG` WHERE dept = 'IT' AND year = 2022";
$query3 = "SELECT * FROM `UG` WHERE dept = 'IT' AND year = 2021";
$query4 = "SELECT * FROM `UG` WHERE dept = 'IT' AND year = 2020";

$result=mysqli_query($conn,$query);
$result1=mysqli_query($conn,$query1);
$result2=mysqli_query($conn,$query2);
$result3=mysqli_query($conn,$query3);
$result4=mysqli_query($conn,$query4);

echo "<h2> STUDENT'S PERFORMANCE</h2>";
// Display data in HTML table
echo "<table>";
echo "<tr>";
echo "<th>Item</th>";
echo "<th>CAY</th>";
echo "<th>CAYm1</th>";
echo "<th>CAYm2</th>";
echo "<th>CAYm3</th>";
echo "<th>CAYm4<br>(LYG)</th>";
echo "<th>CAYm5<br>(LYGm1)</th>";
echo "<th>CAYm6<br>(LYGm2)</th>";
echo "</tr>";



$row = mysqli_fetch_assoc($result);
$row1=mysqli_fetch_assoc($result1);
$row2=mysqli_fetch_assoc($result2);
$row3=mysqli_fetch_assoc($result3);
$row4=mysqli_fetch_assoc($result4);

echo "<tr>";
echo "<th>Sanctioned intake of the program(N)</th>";
echo "<td>" . $row['n'] . "</td>"; 
echo "<td>" . $row1['n'] . "</td>";
echo "<td>" . $row2['n'] . "</td>";
echo "<td>" . $row3['n'] . "</td>"; 
echo "<td>" . $row1['n'] . "</td>";
echo "<td>" . $row2['n'] . "</td>";
echo "<td>" . $row3['n'] . "</td>";      
echo "</tr>";


echo "<tr>";
echo "<th>Total no of students admitted in first year minus no of students migrated<br> to other programs/institutions,plus no of students migrated to this program(N1)</th>";
echo "<td>" . $row['n1'] . "</td>"; 
echo "<td>" . $row1['n1'] . "</td>";
echo "<td>" . $row2['n1'] . "</td>";
echo "<td>" . $row3['n1'] . "</td>"; 
echo "<td>" . $row1['n1'] . "</td>";
echo "<td>" . $row2['n1'] . "</td>";
echo "<td>" . $row3['n1'] . "</td>";      
echo "</tr>";

echo "<tr>";
echo "<th>Number of students admitted in 2nd year in the same batch via lateral entry(N2)</th>";
echo "<td>" . $row['n2'] . "</td>"; 
echo "<td>" . $row1['n2'] . "</td>";
echo "<td>" . $row2['n2'] . "</td>";
echo "<td>" . $row3['n2'] . "</td>"; 
echo "<td>" . $row1['n2'] . "</td>";
echo "<td>" . $row2['n2'] . "</td>";
echo "<td>" . $row3['n2'] . "</td>";      
echo "</tr>";

echo "<tr>";
echo "<th>Separate division students,if applicable(N3)</th>";
echo "<td>" . $row['n3'] . "</td>"; 
echo "<td>" . $row1['n3'] . "</td>";
echo "<td>" . $row2['n3'] . "</td>";
echo "<td>" . $row3['n3'] . "</td>"; 
echo "<td>" . $row1['n3'] . "</td>";
echo "<td>" . $row2['n3'] . "</td>";
echo "<td>" . $row3['n3'] . "</td>";      
echo "</tr>";

echo "<tr>";
echo "<th>Total number of students admitted in the program(N1+N2+N3)</th>";
echo "<td>" . $row['n1']+$row['n2']+$row['n3'] . "</td>"; 
echo "<td>" . $row1['n1']+$row1['n2']+$row1['n3']. "</td>";
echo "<td>" . $row2['n1']+$row2['n2']+$row2['n3'] . "</td>";
echo "<td>" . $row3['n1']+$row3['n2']+$row3['n3'] . "</td>"; 
echo "<td>" . $row1['n1']+$row1['n2']+$row1['n3'] . "</td>";
echo "<td>" . +$row2['n1']+$row2['n2']+$row2['n3'] . "</td>";
echo "<td>" . $row3['n1']+$row3['n2']+$row3['n3'] . "</td>";      
echo "</tr>";

echo "</table>"; 


//2nd table 
echo "<h2>Student - Faculty Ratio</h2>";

echo "<table>";
echo "<tr>";
echo "<th>Year</th>";
echo "<th>CAY</th>";
echo "<th>CAYm1</th>";
echo "<th>CAYm2</th>";
echo "</tr>";

echo "<tr>";
echo "<th>u1.1</th>";
echo "<td>" . $row['n'] + $row['n2']+$row['n3']. "</td>"; 
echo "<td>" . $row1['n'] + $row1['n2'] + $row1['n3'] ."</td>";
echo "<td>" . $row2['n'] + $row2['n2'] + $row2['n3']. "</td>";    
echo "</tr>";

echo "<tr>";
echo "<th>u1.2</th>";
echo "<td>" . $row1['n'] + $row1['n2']+$row1['n3'] . "</td>"; 
echo "<td>" . $row2['n'] + $row2['n2'] + $row2['n3'] ."</td>";
echo "<td>" . $row3['n'] + $row3['n2'] + $row3['n3']. "</td>";    
echo "</tr>";

echo "<tr>";
echo "<th>u1.3</th>";
echo "<td>" . $row2['n'] + $row2['n2']+$row2['n3'] . "</td>"; 
echo "<td>" . $row3['n'] + $row3['n2'] + $row3['n3'] ."</td>";
echo "<td>" . $row4['n'] + $row4['n2'] + $row4['n3']. "</td>";    
echo "</tr>";

echo "<tr>";
echo "<th>UG</th>";
echo "<td>" . ($row['n'] + $row['n2']+$row['n3'])+ ($row1['n'] + $row1['n2']+$row1['n3']) +( $row2['n'] + $row2['n2']+$row2['n3']). "</td>"; 
echo "<td>" . ($row1['n'] + $row1['n2'] + $row1['n3']) +($row2['n'] + $row2['n2'] + $row2['n3']) +( $row3['n'] + $row3['n2'] + $row3['n3'] )."</td>";
echo "<td>" . ($row2['n'] + $row2['n2'] + $row2['n3']) +($row3['n'] + $row3['n2'] + $row3['n3'])+( $row4['n'] + $row4['n2'] + $row4['n3']). "</td>";    
echo "</tr>";

echo "<tr>";
echo "<th>p1.1</th>";
echo "<td> 0 </td>"; 
echo "<td> 0 </td>";
echo "<td> 0 </td>";    
echo "</tr>";

echo "<tr>";
echo "<th>p1.2</th>";
echo "<td> 0 </td>"; 
echo "<td> 0 </td>";
echo "<td> 0 </td>";    
echo "</tr>";

echo "<tr>";
echo "<th>PG</th>";
echo "<td> 0 </td>"; 
echo "<td> 0 </td>";
echo "<td> 0 </td>";    
echo "</tr>";

echo "<tr>";
echo "<th>Total No. of Students in Dept(F)</th>";
echo "<td>".($row['n'] + $row['n2']+$row['n3'])+ ($row1['n'] + $row1['n2']+$row1['n3']) +( $row2['n'] + $row2['n2']+$row2['n3'])."</td>"; 
echo "<td>". ($row1['n'] + $row1['n2'] + $row1['n3']) +($row2['n'] + $row2['n2'] + $row2['n3']) +( $row3['n'] + $row3['n2'] + $row3['n3'] ) ."</td>";
echo "<td>".($row2['n'] + $row2['n2'] + $row2['n3']) +($row3['n'] + $row3['n2'] + $row3['n3'])+( $row4['n'] + $row4['n2'] + $row4['n3']). "</td>";    
echo "</tr>";


$empquery="SELECT * FROM `employee` WHERE dept = 'IT' AND DATEDIFF(CURDATE(), birthday) >= 304";
$empquery1="SELECT * FROM `employee` WHERE dept = 'IT' AND DATEDIFF(CURDATE(), birthday) >= 669";
$empquery2="SELECT * FROM `employee` WHERE dept = 'IT' AND DATEDIFF(CURDATE(), birthday) >= 1034";

$empres=mysqli_query($conn,$empquery);
$empres1=mysqli_query($conn,$empquery1);
$empres2=mysqli_query($conn,$empquery2);
$cnt=0;
$cnt1=0;
$cnt2=0;

while(mysqli_fetch_assoc($empres))
{
    $cnt=$cnt+1;
}

while(mysqli_fetch_assoc($empres1))
{
    $cnt1=$cnt1+1;
}

while(mysqli_fetch_assoc($empres2))
{
    $cnt2=$cnt2+1;
}

echo "<tr>";
echo "<th>No. of Faculty in Dept(S)</th>";
echo "<td>".$cnt."</td>"; 
echo "<td> " .$cnt1 ."</td>";
echo "<td>".$cnt2."</td>";    
echo "</tr>";

echo "<tr>";
echo "<th>Student Faculty Ratio <br> SFR</th>";
echo "<td>".(($row['n'] + $row['n2']+$row['n3'])+ ($row1['n'] + $row1['n2']+$row1['n3']) +( $row2['n'] + $row2['n2']+$row2['n3']))/$cnt."</td>"; 
echo "<td> " .  (($row1['n'] + $row1['n2'] + $row1['n3']) +($row2['n'] + $row2['n2'] + $row2['n3']) +( $row3['n'] + $row3['n2'] + $row3['n3'] ) ) /$cnt1 ."</td>";
echo "<td>".(($row2['n'] + $row2['n2'] + $row2['n3']) +($row3['n'] + $row3['n2'] + $row3['n3'])+( $row4['n'] + $row4['n2'] + $row4['n3']))/$cnt2."</td>";    
echo "</tr>";


$sum = (($row['n'] + $row['n2']+$row['n3'])+ ($row1['n'] + $row1['n2']+$row1['n3']) +( $row2['n'] + $row2['n2']+$row2['n3']))/$cnt +
(($row1['n'] + $row1['n2'] + $row1['n3']) +($row2['n'] + $row2['n2'] + $row2['n3']) +( $row3['n'] + $row3['n2'] + $row3['n3'] ) ) /$cnt1+
(($row2['n'] + $row2['n2'] + $row2['n3']) +($row3['n'] + $row3['n2'] + $row3['n3'])+( $row4['n'] + $row4['n2'] + $row4['n3']))/$cnt2;


echo "<tr>";
echo "<th>Average SFR</th>";
echo "<td colspan=3>". ($sum)/3 ."</td>";   
echo "</tr>";
echo "</table>";

$sfrquery="SELECT * from `employee`  WHERE dept ='IT' AND desg = 'Professor'AND DATEDIFF(sysdate(),birthday)>304";
$sfrquery1="SELECT * from `employee` WHERE dept='IT' AND desg ='Associate Professor' AND DATEDIFF(sysdate(),birthday)>304";
$sfrquery2="SELECT * from `employee` WHERE dept = 'IT' AND desg = 'Assistant Professor'AND DATEDIFF(sysdate(),birthday)>304";
$sfrres=mysqli_query($conn,$sfrquery);
$sfrres1=mysqli_query($conn,$sfrquery1);
$sfrres2=mysqli_query($conn,$sfrquery2);
$n=($row['n'] + $row['n2']+$row['n3'])+ ($row1['n'] + $row1['n2']+$row1['n3']) +( $row2['n'] + $row2['n2']+$row2['n3']);
$count=0;
$count1=0;
$count2=0;
$a=0;
$pr=0;
$asp=0;
$assp=0;

while(mysqli_fetch_assoc($sfrres))
{
    $count=$count+1;
}
while(mysqli_fetch_assoc($sfrres1))
{
    $count1=$count1+1;
}
while(mysqli_fetch_assoc($sfrres2))
{
    $count2=$count2+1;
}
echo $count1;

$sfr=($n/20);
$r=($sfr/9);
$x=round($r);
$y=round($r*2);
$z=round($r*6);
$pr=($x-$count);
$asp=($y-$count1);
$assp=($z-$count2);

echo "<table>";
echo "<tr>";
echo "<th>Designation(S)</th>";
echo "<th>Available</th>"; 
echo "<th>Required</th>";  
echo "</tr>";

echo "<tr>";
echo "<td>Professor</td>";
echo "<td>".$count."</td>";
if($pr>0)
{
    echo "<td>".$pr."</td>";
}
else
{
    echo "<td>".$a."</td>";
}
echo "</tr>";


echo "<tr>";
echo "<td>Associate Professor</td>";
echo "<td>".$count1."</td>";
if($asp>0)
{
    echo "<td>".$asp."</td>";
}
else
{
    echo "<td>".$a."</td>";
}
echo "</tr>";

echo "<tr>";
echo "<td>Assistant Professors</td>";
echo "<td>".$count2."</td>";
if($assp>0)
{
    echo "<td>".$assp."</td>";
}
else
{
    echo "<td>".$a."</td>";
}
echo "</tr>";

echo "</table>";

?>




