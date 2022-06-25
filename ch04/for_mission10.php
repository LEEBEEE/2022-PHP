<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {border-collapse : collapse;}
        table, td {border : 1px solid #000;}
        td {width : 50px; height: 50px; text-align : center;}
    </style>
</head>
<body>
    <table> 
        <?php
            $val = rand(3,10);
            print "val : $val" ;
            $num = 1;
            for($i=0;$i<$val;$i++)
            {
                print "<tr>";
                for($j=0;$j<$val;$j++)
                {
                    print "<td>" . $num++ . "</td>";
                }
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>    
