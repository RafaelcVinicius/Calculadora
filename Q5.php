<?php
// comparar data qual a maior

$data1 = "01/01/2021";
$data1 = strtotime($data1);
echo $data1;
$data2 = "01/06/2021";
$data2 = strtotime($data2);
echo "<br>";
if($data1 > $data2) {
    echo "Data 1 é maior!";
}else{
    echo "Data 2 é maior!";
}
