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
    $input1_1 = "Ayo"; 
    $input1_2 = "Belajar";
    $input2_1 = "Bersama";
    $input2_2 = "Niomic";
?>
    <h1>Operator String</h1>
    <table border="1">
        <tr>
            <td>Input 1</td>
            <td>Input 2</td>
            <td>Hasil</td>
        </tr>
        <tr>
            <td>Ayo</td>
            <td>Belajar</td>
            <td><?= $input1_1." ".$input1_2 ?></td>
        </tr>
        <tr>
            <td>Bersama</td>
            <td>Niomic</td>
            <td><?= $input2_1." ".$input2_2 ?></td>
        </tr>
    </table>
</body>
</html>