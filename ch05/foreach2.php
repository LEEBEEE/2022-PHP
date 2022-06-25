<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, tr, th, td {border : 1px solid black; border-collapse : collapse;};
    </style>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>이름</th>
            <th>키</th>
        </tr>
        <?php
            $array = array(
                "Hong" => 182.2,
                "Hwang" => 180.4,
                "kim" => 176.3,
                "Park" => 174.1
            );

            foreach($array as $name => $height)
            {
                print "<tr>";
                print "<td>" . $name . "</td><td>" . $height . "</td>";
                print "</tr>";
            }

        ?>
    </table>
    
</body>
</html>
