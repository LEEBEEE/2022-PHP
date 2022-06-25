<style>
    table {border-collapse: collapse;}
    table, td {border: 2px solid #000;}
    td {width: 45px; height: 45px; text-align: center; font-weight:bold;}
</style>


<?php
$val = rand(2, 5);

print_table($val);

function print_table($val)
{
    $n = 1;    
    print "<table>";
    for($i=1; $i<=$val; $i++)
    {
        print "<tr>";
        for($j=1; $j<=$val; $j++)
        {
            print "<td>" . $n++ . "</td>";
        }
        print "</tr>";
    }
    print "</table>";
}
?>