<?php $total = 0;
// $number =1;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <table style="width: 100%;">
            <tbody>
                <?php
                for ($i = 1; $i <= 10; $i++) { ?>
                    <tr>
                        <?php for ($s = 1; $s <= 15; $s++) {
                            $times = $i * $s; ?>
                            <td><?= $times ?></td>  
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php


        // for ($i = 1; $i < 7; $i++) {
        //     for ($j = 1; $j < 7; $j++) {
        //         if ($j == 1) {
        //             echo str_pad($i * $j, 2, " ", STR_PAD_LEFT);
        //         } else {
        //             echo str_pad($i * $j, 4, " ", STR_PAD_LEFT);
        //         }
        //     }
        //     echo "\n";
        // }
        ?>
    </h1>
</body>

</html>