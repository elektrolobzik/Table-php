
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
    <p>Таблица истинности</p>
        <tr>
            <td>A</td>
            <td>B</td>
            <td>!A</td>
            <td>A || B</td>
            <td>A && B</td>
            <td>A xor B</td>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td> <?php $a = 0; if(!$a) { echo '1';} else {echo '0';} ?> </td>
            <td> <?php $a = 0; $b = 0; if($a || $b)  { echo '1';} else {echo '0';} ?> </td>
            <td> <?php $a = 0; $b = 0; if($a & $b)  { echo '1';} else {echo '0';} ?> </td>
            <td> <?php $a = 0; $b = 0; if($a xor $b)  { echo '1';} else {echo '0';}  ?> </td>
        </tr>
        <tr>
            <td>0</td>
            <td>1</td>
            <td> <?php $a = 0; if(!$a) { echo '1';} else {echo '0';} ?> </td>
            <td> <?php $a = 0; $b = 1; if($a || $b)  { echo '1';} else {echo '0';} ?> </td>
            <td> <?php  $a = 0; $b = 1; if($a & $b)  { echo '1';} else {echo '0';} ?> </td>
            <td> <?php  $a = 0; $b = 1; if($a xor $b)  { echo '1';} else {echo '0';}  ?> </td>
        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td> <?php $a = 1; if(!$a) { echo '1';} else {echo '0';} ?> </td> 
            <td> <?php $a = 1; $b = 0; if($a || $b)  { echo '1';} else {echo '0';} ?> </td>
            <td> <?php $a = 1; $b = 0; if($a & $b)  { echo '1';} else {echo '0';} ?> </td>
            <td> <?php  $a = 1; $b = 0; if($a xor $b)  { echo '1';} else {echo '0';}  ?> </td>

        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td> <?php $a = 1; if(!$a) { echo '1';} else {echo '0';} ?> </td>
            <td> <?php $a = 1; $b = 1; if($a || $b)  { echo '1';} else {echo '0';} ?> </td>
            <td> <?php $a = 1; $b = 1; if($a & $b)  { echo '1';} else {echo '0';} ?> </td>
            <td> <?php $a = 1; $b = 1; if($a xor $b)  { echo '1';} else {echo '0';} ?> </td>
        </tr>
       </table>



       <p>Гибкое сравнение</p>
       <table id="second">
        <tr id="secondTr">
            <td id="secondTd"></td>
            <td id="secondTd">TRUE</td>
            <td id="secondTd">FALSE</td>
            <td id="secondTd">1</td>
            <td id="secondTd">0</td>
            <td id="secondTd">-1</td>
            <td id="secondTd">"1"</td>
            <td id="secondTd">null</td>
            <td id="secondTd">"php"</td>
            
        </tr>
        <tr id="secondTr">
            <td id="secondTd">TRUE</td>
            <td id="secondTd"><?php $a = true; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = false; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 1; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 0; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = -1; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "1"; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = null; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "php"; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            
        </tr>
        <tr id="secondTr">
            <td id="secondTd">FALSE</td>
            <td id="secondTd"><?php $a = false; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = false; $b = false; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 1; $b = false; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 0; $b = false; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = -1; $b = false; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "1"; $b = false; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = null; $b = false; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "php"; $b = false; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            
        </tr>
        <tr id="secondTr">
            <td id="secondTd">1</td>
            <td id="secondTd"><?php $a = 1; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = false; $b = 1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 1; $b = 1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 0; $b = 1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = -1; $b = 1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "1"; $b = 1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = null; $b = 1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "php"; $b = 1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            
        </tr>
        <tr id="secondTr">
        <td id="secondTd">0</td>
            <td id="secondTd"><?php $a = 0; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = false; $b = 0; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 1; $b = 0; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 0; $b = 0; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = -1; $b = 0; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "1"; $b = 0; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = null; $b = 0; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "php"; $b = 0; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            
        </tr>
        <tr id="secondTr">
            <td id="secondTd">-1</td>
            <td id="secondTd"><?php $a = -1; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = false; $b = -1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 1; $b = -1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 0; $b = -1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = -1; $b = -1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "1"; $b = -1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = null; $b = -1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "php"; $b = -1; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            
        </tr>
        <tr id="secondTr">
            <td id="secondTd">"1"</td>
            <td id="secondTd"><?php $a = "1"; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = false; $b = "1"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 1; $b = "1"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 0; $b = "1"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "1"; $b = "1"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "1"; $b = "1"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = null; $b = "1"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "php"; $b = "1"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
        </tr>
        <tr id="secondTr">
            <td id="secondTd">null</td>
            <td id="secondTd"><?php $a = null; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = false; $b = null; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 1; $b = null; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 0; $b = null; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = -1; $b = null; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "1"; $b = null; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = null; $b = null; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "php"; $b = null; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            
        </tr>
        <tr id="secondTr">
            <td id="secondTd">"php"</td>
            <td id="secondTd"><?php $a = "php"; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = false; $b = "php"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 1; $b = "php"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = 0; $b = "php"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = -1; $b = "php"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "1"; $b = "php"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = null; $b = "php"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="secondTd"><?php $a = "php"; $b = "php"; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            
        </tr>
    </table>



    <p>Жёсткое сравнение</p>
    <table id="third">
        <tr id="thirdTr">
            <td id="thirdTd"></td>
            <td id="thirdTd">TRUE</td>
            <td id="thirdTd">FALSE</td>
            <td id="thirdTd">1</td>
            <td id="thirdTd">0</td>
            <td id="thirdTd">-1</td>
            <td id="thirdTd">"1"</td>
            <td id="thirdTd">null</td>
            <td id="thirdTd">"php"</td>
            
        </tr>
            <tr id="thirdTr">
            <td id="thirdTdName">TRUE</td>
            <td id="thirdTd"><?php $a = true; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = false; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 1; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 0; $b = true; if($a == $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = -1; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "1"; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = null; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "php"; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
        </tr>
        <tr id="thirdTr">
            <td id="thirdTdName">FALSE</td>
            <td id="thirdTd"><?php $a = false; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = false; $b = false; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 1; $b = false; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 0; $b = false; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = -1; $b = false; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "1"; $b = false; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = null; $b = false; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "php"; $b = false; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
        </tr>
        <tr id="thirdTr">
        <td id="thirdTdName">1</td>
            <td id="thirdTd"><?php $a = 1; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = false; $b = 1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 1; $b = 1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 0; $b = 1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = -1; $b = 1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "1"; $b = 1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = null; $b = 1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "php"; $b = 1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
        </tr>
        <tr id="thirdTr">
            <td id="thirdTdName">0</td>
            <td id="thirdTd"><?php $a = 0; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = false; $b = 0; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 1; $b = 0; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 0; $b = 0; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = -1; $b = 0; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "1"; $b = 0; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = null; $b = 0; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "php"; $b = 0; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>

        </tr>
        <tr id="thirdTr">
        <td id="thirdTdName">-1</td>
            <td id="thirdTd"><?php $a = -1; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = false; $b = -1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 1; $b = -1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 0; $b = -1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = -1; $b = -1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "1"; $b = -1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = null; $b = -1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "php"; $b = -1; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            

        </tr>
        <tr id="thirdTr">
        <td id="thirdTdName">"1"</td>
            <td id="thirdTd"><?php $a = "1"; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = false; $b = "1"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 1; $b = "1"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 0; $b = "1"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = -1; $b = "1"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "1"; $b = "1"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = null; $b = "1"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "php"; $b = "1"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
        </tr>

        <tr id="thirdTr">
            <td id="thirdTdName">null</td>
            <td id="thirdTd"><?php $a = null; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = false; $b = null; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 1; $b = null; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 0; $b = null; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = -1; $b = null; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "1"; $b = null; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = null; $b = null; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "php"; $b = null; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            
        </tr>
        <tr id="thirdTr">
            <td id="thirdTdName">"php"</td>
            <td id="thirdTd"><?php $a = "php"; $b = true; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = false; $b = "php"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 1; $b = "php"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = 0; $b = "php"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = -1; $b = "php"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "1"; $b = "php"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = null; $b = "php"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            <td id="thirdTd"><?php $a = "php"; $b = "php"; if($a === $b) { echo 'true';} else {echo 'false';} ?></td>
            
        </tr>
    </table>
</body>
</html>
