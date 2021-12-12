<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logika</title>
</head>
<body>
<?php 
    $input1_1 = false; 
    $input1_2 = false;
    $input2_1 = false;
    $input2_2 = true;
    $input3_1 = true;
    $input3_2 = false;
    $input4_1 = true;
    $input4_2 = true;
?>
    <table border="1">
        <caption>Table Logika 1111</caption>
        <tr>
            <td>Input true</td>
            <td>Input 2</td>
            <td>AND</td>
            <td>OR</td>
        </tr>
        <tr>
            <td>false</td>
            <td>false</td>
            <td><?= +($input1_1&&$input1_2) ?></td>
            <td><?= +($input1_1||$input1_2) ?></td>
        </tr>
        <tr>
            <td>false</td>
            <td>true</td>
            <td><?= +($input2_1&&$input2_2) ?></td>
            <td><?= +($input2_1||$input2_2) ?></td>
        </tr>
        <tr>
            <td>true</td>
            <td>false</td>
            <td><?= +($input3_1&&$input3_2) ?></td>
            <td><?= +($input3_1||$input3_2) ?></td>
        </tr>
        <tr>
            <td>true</td>
            <td>true</td>
            <td><?= +($input4_1&&$input4_2) ?></td>
            <td><?= +($input4_1||$input4_2) ?></td>
        </tr>
    </table>
</body>
</html>