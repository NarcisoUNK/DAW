<?php
$name = $_POST['name'] ;
$number = $_POST['number'] ;
$email = $_POST['email'] ;
$program = $_POST['program'] ;
$subjects = $_POST['subjects']; 

$subject_list = array();

function setSubjectList($subjects) {
    global $subject_list;
    foreach ($subjects as $subject) {
        $subjectName = $subject['subjectName'];
        $grade = floatval($subject['grade']); 
        if ($grade < 9.5) {
            $status = "Disapproved";
        } else {
            $status = "Approved";
        }

        $subject_list[] = array(
            "subjectName" => $subjectName,
            "grade" => $grade,
            "status" => $status
        );
    }
}

function subjectGradesAverage($subject_list) {
    $totalGrades = 0;
    $approvedSubjects = 0;

    foreach ($subject_list as $subject) {
        if ($subject['status'] === "Approved") {
            $totalGrades += $subject['grade'];
            $approvedSubjects++;
        }
    }

    if ($approvedSubjects > 0) {
        return $totalGrades / $approvedSubjects;
    } else {
        return 0;
    }
}

function printStudentSubjects($subject_list) {
    echo '<table border="1">';
    echo '<tr><th>Subject Name</th><th>Grade</th><th>Status</th></tr>';
    
    foreach ($subject_list as $subject) {
        echo '<tr>';
        echo '<td>' . $subject["subjectName"] . '</td>';
        echo '<td>' . $subject["grade"] . '</td>';
        echo '<td>' . $subject["status"] . '</td>';
        echo '</tr>';
    }
    
    echo '</table>';
}

setSubjectList($subjects);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
</head>
<body>
    <h2>Student Information</h2>
    <?php 
    echo 'Name: ' . $name . '<br>';
    echo 'Number: ' . $number . '<br>';
    echo 'Email: ' . $email . '<br>';
    echo 'Program: ' . $program . '<br>';

    echo '<h3>Subjects</h3>';
    printStudentSubjects($subject_list);

    echo '<h3>Average Grade of  Approved Subjects: ' . subjectGradesAverage($subject_list) . '</h3>';
    ?>
</body>
</html>
