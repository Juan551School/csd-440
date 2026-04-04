<?php
/*
    Name: Juan Macias Vasquez 
    File: JuanTable2.php
    Module 3 Assignment
    Bellevue University 
    CSD440-H323 Server-Side Scripting (2265-DD)
    Jack Lusby
    April 2nd, 2026

    Description:
    This program creates an HTML table using nested loops.
    For each cell, two random numbers are generated.
    A function (from an external file) is used to calculate their sum.
*/

// Adds external function file
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Table with Function</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            width: 60px;
        }
    </style>
</head>

<body>

<h2 style="text-align:center;">Random Sum Table</h2>

<table>
    <?php
    // Outer loop (rows)
    for ($row = 1; $row <= 5; $row++) {
    ?>
        <tr>
        <?php
        // Inner loop (columns)
        for ($col = 1; $col <= 5; $col++) {

            // Generate two random numbers
            $num1 = rand(1, 50);
            $num2 = rand(1, 50);

            // Call function from external file
            $sum = addNumbers($num1, $num2);
        ?>
            <td>
                <?php echo $num1 . " + " . $num2 . " = " . $sum; ?>
            </td>
        <?php
        }
        ?>
        </tr>
    <?php
    }
    ?>
</table>

</body>
</html>