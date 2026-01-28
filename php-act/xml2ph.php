<?php
$xml = simplexml_load_file("students.xml");

foreach ($xml->student as $s) {
    echo "Reg No: " . $s->regno . "<br>";
    echo "Name: " . $s->name . "<br>";
    echo "Dept: " . $s->dept . "<br><hr>";
}


// this code is for single student 

/*

<?php

// Access the student node
echo "Reg No: " . $xml->student->regno . "<br>";
echo "Name: " . $xml->student->name . "<br>";
echo "Dept: " . $xml->student->dept . "<br>";

?>

*/


?>