<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <h2>Student Information</h2>
    <form action="student.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="number">Number:</label>
        <input type="text" id="number" name="number"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="program">Program:</label>
        <input type="text" id="program" name="program"><br><br>

        <h3>Subjects</h3>
        <label for="subject1">Subject 1:</label>
        <input type="text" id="subject1" name="subjects[0][subjectName]">
        <label for="grade1">Grade:</label>
        <input type="text" id="grade1" name="subjects[0][grade]"><br><br>

        <label for="subject2">Subject 2:</label>
        <input type="text" id="subject2" name="subjects[1][subjectName]">
        <label for="grade2">Grade:</label>
        <input type="text" id="grade2" name="subjects[1][grade]"><br><br>

        <label for="subject3">Subject 3:</label>
        <input type="text" id="subject3" name="subjects[2][subjectName]">
        <label for="grade3">Grade:</label>
        <input type="text" id="grade3" name="subjects[2][grade]"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
