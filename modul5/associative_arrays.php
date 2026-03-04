<?php

$grade = array(
    "Math" => "4",
    "Art" => "5",
    "history" => "4",
    "Music" => "4"
)

$grade = ['Math'] = "4",
$grade = ['Art'] = "5",
$grade = ['History'] = "4",
$grade = ['Music'] = "4",

echo "Math grade is ".$grade['Math'];
echo "Art grade is ".$grade['Art'];
echo "History grade is ".$grade['History'];
echo "Music grade is ".$grade['Music'];

foreach ($grade as $subject => $grade){
    echo "Subject: ".$subject.", Grade: ".grade;
    echo "</br>";
}
?>