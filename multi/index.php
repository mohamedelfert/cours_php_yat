<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 04/02/2019
 * Time: 12:15 م
 */
$x = 1 ;
/*
for($i = 0;$i <= 12;++$i) {
    echo $x . " * " . $i . " = " . $i * $x . "</br>";
}

$x = 2 ;
for($i = 0;$i <= 12;++$i) {
    echo $x . " * " . $i . " = " . $i * $x . "</br>";
}
*/
/*
for ($x = 1 ;$x <= 12 ;$x++){
    for($i = 0;$i <= 12;$i++) {
        echo $x . " * " . $i . " = " . $i * $x . "</br>";
    }
    echo"</br>";
}
*/
while ($x <= 12){
?>
<div style="width: 15%;float: left;border: 1px solid #ddd;padding: 10px 0;margin: 5px;text-align: center;font-weight: bold;background-color: #a7b0bd">
<?php
    for($i = 0;$i <= 12;$i++) {
        echo $x . " * " . $i . " = " . $i * $x . "</br>";
    }
    ?>
</div>
<?php
    $x++;
}
?>
