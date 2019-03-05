<?php

$normal = array('baby', 'dog', 'cat', 'tiger');

echo $normal[1];
echo "<br>";
echo "<hr>";

for($i=0; $i<4; $i++){
    echo $normal[$i]." ";
}

echo "<h4> Using foreach Loop </h4>";

foreach ($normal as $i => $x) {
    echo $i ."->".$x;
    echo "<br>";
}

echo "<hr>";
$assoc = array(
    'baby'  =>'cry', 
    'dog'   =>'bark', 
    'cat'   =>'meow', 
    'tiger' =>'roar'
);

echo $assoc['cat'];

echo "<h4> Assoc using foreach loop</h4>";
foreach($assoc as $key => $value){

    echo $key ."->".$value;
    echo "<br>";
}





?>