
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styleff.css">
</head>
<body>
    

    <style>
        h1{text-align:center;}
    </style>
    
        <div class="menu">

            <h1>FACULTY REQUIREMENT</h1>
            <br>
            
            
        <div style="text-align:center;">


    <h2>Enter the Details</h2>
    
        <form  action="index.php" method="get">
           <label>Number of students</label>
           <input type="number"  name="n" id="n" >
           <br>
           <label>Department</label>
           <select name="d" id="d">
           
            <option value="IT">Information Technology</option>
            <option value="CSE">Computer Science </option>
            <option value="ECE">Electronics and Communication</option>
           </select><br>
           <br>
           <input type="submit" name="submit" value="Submit">
        </form>
        </div>
        </div><br>
</body>
</html>
<br>
<br>

<?php

if(isset($_GET['n']))
{
    $n = $_GET['n'];
}
else
{
    $n = "Num not set in GET Method";
}
if(isset($_GET['d']))
{
    $d = $_GET['d'];
}
else
{
    $d = "<br>Dept not set in GET Method";
}
require_once ('dbh.php');
$query="SELECT * from `employee`  WHERE dept ='$d' AND desg = 'Professor' ";
$query1="SELECT * from `employee` WHERE dept = '$d' AND desg = 'Associate Professor'";
$query2="SELECT * from `employee` WHERE dept = '$d' AND desg = 'Assistant Professor'";
$res=mysqli_query($conn,$query);
$res1=mysqli_query($conn,$query1);
$res2=mysqli_query($conn,$query2);
$n=(int)$n;
$cnt=0;
$cnt1=0;
$cnt2=0;
$a=0;
$pr=0;
$asp=0;
$assp=0;

while(mysqli_fetch_assoc($res))
{
    $cnt=$cnt+1;
}
while(mysqli_fetch_assoc($res1))
{
    $cnt1=$cnt1+1;
}
while(mysqli_fetch_assoc($res2))
{
    $cnt2=$cnt2+1;
}
$sfr=($n/20);
$r=($sfr/9);
$x=round($r);
$y=round($r*2);
$z=round($r*6);
$pr=($x-$cnt);
$asp=($y-$cnt1);
$assp=($z-$cnt2);

?>

<b>Total Students intake:<?php echo $n;?></b>
<br>
<br>
<body style="text-align:center;">
<table border="1" align="center" style="width:50%" class="content-table" >
    <thead>
    <tr>
    <th align="center">Designation </th>
    <th align="center">Available</th>
    <th align="center">Required</th>
    
</tr>
    </thead>
    <tbody>
<tr>
    <td>Professor</td>
    <td><?php echo $cnt;?></td>
    <td><?php if($pr>0){
        echo $pr;
    }
        else{
            echo $a;
        }
    ?></td>
    
</tr>
<tr> 
    <td>Associate professor</td>
    <td><?php echo $cnt1;?></td>
    <td><?php if($asp>0){
        echo $asp;
    }
        else{
            echo $a;
        }
    ?>   </td>
</tr>
<tr>
    <td>Assistant Professor</td>
    <td><?php echo $cnt2;?> </td>
    <td><?php if($assp>0){
        echo $assp;
    }
        else{
            echo $a;
        }
    ?>   </td>
</tr>
    </tbody>
</table>

</body>

</html>

