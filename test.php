<h3>E1</h3>
<?php

$x = [1, 2, 3, 4, 5];

$sum = 0;

foreach($x as $array){
    $sum += $array;
}

echo "this sum : ". $sum;
?>
<br>
<h3>E2</h3>
<?php
$array = [1, 2, 2, 3, 4, 4, 5];

$uniqueArray = array_unique($array);
print_r($uniqueArray);
echo "<br>";
$uniqueArray = array_values($uniqueArray);

print_r($uniqueArray);
?>
<br>
<h3>E3</h3>

<?php

$array = [1, 2, 3, 4, 5];
$target = 7;

if(in_array($target, $array )){
    echo "Found";
}else {
    echo "Not found";
}


?>
<br>
<h3>E4</h3>
<?php
$tabel1 = [1, 2, 3, 4, 5];
$tabel2 = [4, 7, 1, 0, 9];

$tb = array_values(array_unique(array_merge($tabel1, $tabel2))); 


print_r($tb);

?>

<br>
<h3>E6</h3>
<?php
class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$people = array(
    new Person("hatim", 21)
);



foreach($people as $person){
    echo "Name: " . $person->name . ", Age: " . $person->age;
}


?>
<br>
<h3>E6.1</h3>

<?php
// Création d'un objet stdClass
$ta_obj[]= new stdClass() ;
   $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';
  for($i=0;$i<5;$i++)
{
	$tab_obj[$i]=new stdClass();
	$tab_obj[$i]->age=rand(18,60);
	for($j=0; $j<10; $j++)
	{
        $string .= $chars[rand(0, strlen($chars)-1)];
    }
    $tab_obj[$i]->nom=$string;
}

print_r($tab_obj);
?>


