<?php

$dogs = array(
    array("chihuahua" , "Mexico" , 20),
    array("Husky" , "Siberia" , 15),
    array("Bulldog" , "England" , 10),
    array("Sharri" , "Alpet Shqiptare" , 20),
);

echo "<br>";
echo $dogs[0][0] .  ": Origin" .  $dogs[0][1] . "Life span" . $dogs[0][2] . "<br>";
echo $dogs[1][0] .  ": Origin" .  $dogs[1][1] . "Life span" . $dogs[1][2] . "<br>";
echo $dogs[2][0] .  ": Origin" .  $dogs[2][1] . "Life span" . $dogs[2][2] . "<br>";
echo $dogs[3][0] .  ": Origin" .  $dogs[3][1] . "Life span" . $dogs[3][2] . "<br>";

echo "<br>";
echo "<br>";

for ($row = 0; $row < 4; $row++) {
    echo "<p>Row number $row</p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $dogs[$row][$col] . "</li>" ;
    }
    echo "</ul>";
}

$tel = array (
    array("Samsung", "1000"),
    array("Apple", "1000"),
    array("Xioam", "1000"),
   
);

echo "<br>";

echo $tel[0][0] ;
echo $tel[1][0];
echo $tel[2] [0];


for ($row = 0; $row < 3; $row++) {
    echo "<p>Tel  $row</p>";
    echo "<ul>";
    for ($col = 0; $col < 2; $col++) {
        echo "<li>" . $tel[$row][$col] . "</li>" ;
    }
    echo "</ul>";
    
}

$conn = new mysqli($tel);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, number FROM WC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name" . $row["name"]. "-Number" . $row["number"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();