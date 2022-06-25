<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {border : 1px solid black};
    </style>
</head>
<body>
    
<?php
    $val = rand(3,10);
    print "val값 = $val";

    print "
    <table>
    <th>테이블 만들기</th>";

    $num = 1;
    for ($i=1;$i <= $val; $i++)
    {
        print "<tr>";
        for ($z=1;$z <= $val; $z++)
        {print 
            "<td>" . $num++ . "</td>";
        }
    print "</tr>";
    }
    print "</table>";
?>
    
</body>
</html>