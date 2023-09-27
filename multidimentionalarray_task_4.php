<?php


$studentGrades = [
    [
        'name' => 'Student 1',
        'grades' => [
            'Math' => 50,
            'English' => 50,
            'Science' => 60,
        ],
    ],
    [
        'name' => 'Student 2',
        'grades' => [
            'Math' => 60,
            'English' => 65,
            'Science' => 70,
        ],
    ],
    [
        'name' => 'Student 3',
        'grades' => [
            'Math' => 88,
            'English' => 85,
            'Science' => 90,
        ],
    ],
];


function averageGrades($studentGrades)
{
    foreach ($studentGrades as $student) {
        $name = $student['name'];
        $grades = $student['grades'];
        
        $total = array_sum($grades);
        $count = count($grades);
     
        $average = $total / $count;
           if($average>80){
                 echo "Student: $name\n";
                echo "Average Grade: A+\n";
               echo "------------------------\n";
           }
         else if($average>70&&$average<80){
           echo "Student: $name\n";
                echo "Average Grade: A\n";
               echo "------------------------\n";
      
         }
        else if($average>60&&$average<70){
           echo "Student: $name\n";
                echo "Average Grade: B\n";
               echo "------------------------\n";
      
         }
       else if($average>50&&$average<60){
           echo "Student: $name\n";
                echo "Average Grade: C\n";
               echo "------------------------\n";
      
         }
       else{
              echo "Student: $name\n";
                echo "Average Grade: F\n";
               echo "------------------------\n";
       }
         
    }
}
averageGrades($studentGrades);
?>