<!DOCTYPE html>
<html>

<head>
    <title>Bob's Auto Parts - Freight Costs</title>
</head>

<body>
    <table style="border: 0px; padding: 3px">
        <tr>
            <td style="background: #cccccc; text-align: center;">Distance</td>
            <td style="background: #cccccc; text-align: center;">Cost</td>
        </tr>
        <?php
            //using while loop
            // $distance = 50;
            // while ($distance <= 250)
            // {
            //     echo "<tr>
            //     <td style=\"text-align: right;\">".$distance."</td>
            //     <td style=\"text-align: right;\">".($distance / 10)."</td>
            //     </tr>\n";
            //     $distance += 50;
            // }

            //using for loop
            for ($distance = 50; $distance <= 250; $distance += 50)
            {
                echo "<tr>
                <td style=\"text-align: right;\">".$distance."</td>
                <td style=\"text-align: right;\">".($distance / 10)."</td>
                </tr>\n";
            }
        ?>
    </table>
</body>

</html>