<?php

$grades = array(85, 92, 78, 88, 95);


function sortDescending($grades) {
    rsort($grades); 
    return $grades;
}

$sortedGrades = sortDescending($grades);
print_r($sortedGrades);
?>