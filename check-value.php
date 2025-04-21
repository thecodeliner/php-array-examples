<!DOCTYPE html>
<html>
<body>

<?php
$array = ['apple', 'banana', 'cherry'];
$value = "cherry";
$found = false;

for ($i = 0; $i < count($array); $i++){
	if ($array[$i] == $value){
   
    $found = true;
    	break;
    }
	//echo $value;
}
if ($found== true){
echo "True"; 
}else{
echo "False";
}

echo "<br>";

if (in_array($value, $array)){
echo "True";

}else{
echo "False";
}

?>
 
</body>
</html>
