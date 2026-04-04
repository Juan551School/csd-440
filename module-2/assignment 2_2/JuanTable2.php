<!--
    Name: Juan Macias Vasquez 
    File: JuanTable2.php
    Module 2 Assignment
    Bellevue University 
    CSD440-H323 Server-Side Scripting (2265-DD)
    Jack Lusby
    April 2nd, 2026
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Random Number Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            width: 50px;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Random Number Table</h2>

<table>
    <?php
    /*
        Description: This program generates a table using nested PHP loops.
        Each cell displays a random number between 1 and 100.
    */
    // The Outer loop for rows
    for ($row = 1; $row <= 5; $row++) {
    ?>
        <tr>
        <?php
            // The Inner loop for columns
            for ($col = 1; $col <= 5; $col++) {
                $randomNumber = rand(1, 100);
        ?>
                <td><?php echo $randomNumber; ?></td>
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